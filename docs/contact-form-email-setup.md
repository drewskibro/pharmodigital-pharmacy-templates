# Contact / Registration Form Email Setup (Brevo Relay)

A reusable runbook for wiring up the website forms on a PharmoDigital pharmacy
site so enquiries reliably reach the client's inbox. Written from the Bowland +
Denton rollout — follow it top-to-bottom for each new client and it's roughly a
20-minute job.

---

## What this solves

Every pharmacy theme ships two custom forms that email their submissions via
WordPress's `wp_mail()`:

| Form | Page template | Goes to |
|------|---------------|---------|
| Contact form | `page-templates/page-contact.php` (`#dp-contact-form` / `#bp-…`) | `pharmacy_email` |
| NHS nominate / register | `page-templates/page-nhs-prescriptions-register.php` (`#npreg-form`) | `pharmacy_email` |

Out of the box these **look** wired up but nothing arrives, because **Kinsta does
not reliably deliver PHP `mail()`**. The fix is to route `wp_mail()` through a
proper email service (a "relay"). We use **Brevo** (free tier = 300 emails/day,
far more than a contact form needs).

Because everything goes through `wp_mail()`, setting up the relay fixes **every**
form on the site at once — contact *and* nominate.

### Why a relay instead of the client's Microsoft 365?

Most clients are on Microsoft 365 (check the domain's MX — `*.mail.protection.outlook.com`).
Sending directly through M365 is fragile: it needs "Authenticated SMTP" + an app
password, app passwords aren't available under Security Defaults / Conditional
Access, and Microsoft is phasing basic SMTP auth out. A relay sidesteps all of
that, we control the DNS ourselves, and it needs almost nothing from the client.
Enquiries still send **from the pharmacy's own domain** (authenticated via
DKIM/DMARC) and land in their normal inbox.

---

## Architecture

```
Website form  →  wp_mail()  →  WP Mail SMTP plugin  →  Brevo  →  delivered
                                                                    ↓
                                              lands in  pharmacy_email  (info@<domain>)
```

- The theme's own AJAX handlers (`{prefix}_contact_form_handler`,
  `{prefix}_npreg_form_handler` in `functions.php`) validate + call `wp_mail()`.
- **WP Mail SMTP** intercepts `wp_mail()` and sends via Brevo's API.
- Destination = the ACF option **`pharmacy_email`** (see below).

---

## Prerequisites

- [ ] **DNS access** for the client's domain (we manage this — e.g. WordPress.com / wpcloud panel).
- [ ] A **Brevo account** (one account covers *all* clients — you authenticate each domain in it).
- [ ] The **destination inbox** confirmed with the client (usually `info@<domain>`).

---

## Step-by-step

### A. Brevo account (once, ever)

Sign up free at [brevo.com](https://www.brevo.com). One account authenticates
multiple domains and one API key works across all sites.

### B. Authenticate the client domain in Brevo

1. Settings (⚙️) → **Senders, Domains & Dedicated IPs** → **Domains** → **Add a domain**.
2. Enter the domain (e.g. `bowlandpharmacy.co.uk`) → Authenticate.
3. Brevo shows the DNS records to add. **Copy the exact values from Brevo** —
   they are generated per-domain, don't reuse another client's.

### C. Add the DNS records (client's DNS panel)

Add **three** records (use Brevo's Copy buttons):

| # | Type | Name/Host | Value |
|---|------|-----------|-------|
| 1 | TXT | *(blank / root `@`)* | `brevo-code:…` (Brevo's verification string) |
| 2 | CNAME | `brevo1._domainkey` | `b1.<domain-dashed>.dkim.brevo.com` |
| 3 | CNAME | `brevo2._domainkey` | `b2.<domain-dashed>.dkim.brevo.com` |

**SPF — do NOT create a second SPF record.** A domain may only have ONE `v=spf1`
record. The current Brevo flow authenticates via DKIM and usually needs no SPF
change — leave the existing SPF alone. *If* Brevo asks for an SPF include, **edit
the existing record** to append `include:spf.brevo.com` (never add a 2nd SPF record).

**DMARC — only ONE `_dmarc` record allowed.**
- If a `_dmarc` record **already exists** (common — e.g. `v=DMARC1;p=none;`),
  **edit it** to add a reports address; keep the existing policy:
  `v=DMARC1; p=none; rua=mailto:rua@dmarc.brevo.com`
- If there is **no** `_dmarc` record, add Brevo's as shown.
- Brevo's verify step fails with *"DMARC values mismatch… add a rua tag"* until a
  `rua=` tag is present — that's what this fixes.

Then in Brevo click **Authenticate this email domain**. DNS can take minutes to a
couple of hours; re-check until green.

Repeat **B–C** for each of the client's domains.

### D. Generate a Brevo API key (reusable across sites)

Settings (⚙️) → **SMTP & API → API Keys** → generate a **v3** key → copy & store
it safely (shown once). The **same key** works on every site. **Never commit it to
the repo or paste it into chat/tickets.**

### E. WP Mail SMTP on each WordPress site

1. **Plugins → Add New → WP Mail SMTP** → Install → Activate.
2. **WP Mail SMTP → Settings:**
   - **Mailer:** Brevo (Sendinblue)
   - **API Key:** the v3 key from step D
   - **Sending Domain:** the client domain (must be authenticated in Brevo)
   - **From Email:** `noreply@<domain>` — on the authenticated domain; needn't be a real mailbox
   - **Force From Email:** **ON** (overrides the theme's default `wordpress@<host>` From so mail aligns with the authenticated domain)
   - **From Name:** the pharmacy name
   - **Force From Name:** **ON**
   - Save.

> ⚠️ **Double-check the From Name/Email match the site you're on.** When sites are
> cloned it's easy to enter Denton's details on Bowland (we did exactly this once).

### F. Set the destination inbox

**WP Admin → Pharmacy Settings → Contact & Location → "Pharmacy Email"** = the
inbox the client wants (e.g. `info@<domain>`). This ACF option (`pharmacy_email`)
is where both forms send. It also **displays publicly** (footer, contact page,
location card) — so if you temporarily change it for testing, change it back.

### G. Test

- **Quick delivery test (nothing public changes):** WP Mail SMTP → **Tools →
  Email Test** → your own address → Send.
- **Full end-to-end test:** temporarily set **Pharmacy Email** to your own inbox →
  submit the live `/contact/` and `/…register/` forms → confirm they arrive →
  **set Pharmacy Email back**. (Remember it shows publicly while changed.)
- On a delivered email, open **⋮ → Show original** and confirm **SPF / DKIM /
  DMARC = PASS**.

---

## Gotchas (hard-won — read these)

- **Brevo "Verify a new IP" email = the #1 cause of a confusing first-test failure.**
  On the first API call, Brevo emails you to authorise the web server's IP and
  **blocks sending until you do**. Each site is a different server, so **expect one
  per site.** Click **"Yes, authorize the new IP."** If a test "fails" right after
  setup, check for this email first.

- **The WP Mail SMTP test email often lands in spam.** Gmail flags the generic
  template (*"similar to messages identified as spam in the past"*), **not** your
  setup. Judge deliverability by a **real form submission**, not the test email.

- **New-domain warm-up.** The first enquiry or two can hit the client's junk
  folder. Tell them to mark it "not junk" once — reputation then settles.

- **Reply-To is already correct.** The theme sets `Reply-To` to the enquirer's
  email, so the client hitting "reply" goes back to the customer. Force From Email
  only changes the *From*, not Reply-To — leave it be.

- **WPForms is not ours.** These themes use their **own** custom forms; if you see
  the **WPForms** plugin with demo `@example.com` entries, it's a leftover from an
  earlier build — deactivate → confirm nothing breaks → delete. WPForms **Lite**
  won't store entries (paywall); that's irrelevant since we don't use it.

- **Records / sensitive data.** The enquiry email in the client's mailbox *is* the
  record. Avoid duplicating submissions into a DB logger (e.g. WP Mail Logging)
  without a retention policy — the **NHS nominate form captures sensitive data**
  (NHS number, DOB, medications), so a second copy in the WP database is a
  data-protection consideration.

---

## Dev note — the form wiring (and a bug to watch for)

Each form is a custom AJAX form, not a plugin:

- Markup: `#{form-id}` in the page template, with `wp_nonce_field()` + a honeypot.
- JS (`assets/js/contact.js`, `nhs-prescriptions-register.js`) POSTs to
  `admin-ajax.php` using an object localised by `wp_localize_script()`.
- Handler: `wp_ajax_{prefix}_contact_form` / `wp_ajax_{prefix}_npreg_form` in
  `functions.php` → validate → `wp_mail()` to `pharmacy_email`.

**The bug we hit:** when a theme is cloned, the `wp_localize_script()` object name
can be left with the wrong prefix. On Bowland, `contact.js` read
`bpContactAjax.ajaxurl` but `functions.php` localised `dpContactAjax` (Denton
prefix) → `bpContactAjax` was undefined → the submit handler threw and **nothing
sent**. When cloning, verify **the JS object name matches the `wp_localize_script`
object name** for both the contact and npreg forms:

```
JS:            window.{prefix}ContactAjax.ajaxurl   /   window.{prefix}NpregAjax.ajaxurl
functions.php: wp_localize_script( '{theme}-contact-js', '{prefix}ContactAjax', … )
```

---

## Per-client checklist

- [ ] Brevo: domain(s) added + **fully authenticated** (green)
- [ ] DNS: brevo-code TXT + 2× DKIM CNAME added; DMARC `rua` present (one record); SPF untouched/merged
- [ ] Brevo v3 API key to hand (reused across sites)
- [ ] WP Mail SMTP installed + Brevo mailer + Sending Domain set (each site)
- [ ] From Email `noreply@<domain>` + Force From Email ON; From Name correct + Force From Name ON
- [ ] "Verify new IP" email authorised (each site)
- [ ] Pharmacy Settings → Pharmacy Email = `info@<domain>`
- [ ] Test email delivered; real form submission delivered; SPF/DKIM/DMARC pass
- [ ] Leftover **WPForms** plugin removed
- [ ] Client told to check junk + mark "not junk" on the first enquiry

---

## Client email templates

**Kickoff — the only thing you need from them:**

> **Subject:** One quick thing — where should your website enquiries go?
>
> Hi [Name],
> We're finishing the contact form on your new website so any enquiry lands
> straight in your inbox. Just one thing from you: **which email address should
> those enquiries go to?** (e.g. `info@<domain>`.) We'll handle all the technical
> setup our end — nothing else needed from you. Thanks!

**Confirmation test (once live):**

> **Subject:** Quick test — did this website enquiry reach you?
>
> Hi [Name],
> The contact form on your new site is now live and I've sent a test enquiry
> through it. Could you check **[inbox]** (including junk/spam) and let me know it
> arrived? If it's in junk, mark it "not junk" and it'll behave from then on.
> Thanks!
