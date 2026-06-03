# Bowland Pharmacy — Parity Brief

Bring Bowland up to feature parity with everything we've shipped on Denton
Pharmacy in this development cycle. Each section below is self-contained:
the **scope**, the **files** to touch on Bowland, and any **client-specific
gotchas** worth knowing before you start.

Throughout this brief:

- **`dp_` / `field_dp_`** is the Denton prefix.
- **`bp_` / `field_bp_`** is the Bowland prefix — use this whenever you copy
  PHP/ACF code across.
- ACF field **names** (e.g. `prices_weight_loss`) are identical across
  clients; only the field **keys** are prefixed.
- The reference implementation for everything in this brief lives in
  `denton-pharmacy-theme/` on `main`. Diff against Bowland to see exactly
  what's changed.

---

## 1. Prices page (tabbed pricing) — biggest item

A brand-new tabbed pricing reference at `/prices/`, fully ACF-driven so the
client can edit prices in WP Admin without a deploy.

### What it looks like

1. **Hero** — badge, gradient + italic title, description, "Book a
   Consultation" + "Call" CTAs.
2. **Tabs nav** — pill-style segmented control:
   *Weight Loss / Travel Health / Private Services / NHS Services*.
   Roving-tabindex accessibility, arrow-key navigation, `#hash` deep linking.
3. **Weight Loss panel** — 3-column card grid. Product name, strength pill,
   Playfair price, supply line, optional note.
4. **Travel Health panel** — clean table (vaccine / per dose / full course
   / notes). Mobile stacks into key-value rows via `data-label`.
5. **Private Services panel** — grouped lists keyed off a `private_category`
   sub-field, so flat repeater rows render as categorised sections.
6. **NHS Services panel** — green-accented card grid. "Free on NHS" tag,
   service name, eligibility line.
7. **Disclaimer** — info-icon card with brand-primary left border.
8. **Final CTA** — Bowland brand-gradient section, "Book a Consultation"
   + "Call" CTAs.

### Files to copy from Denton

| Denton (source) | Bowland (target) |
|---|---|
| `page-templates/page-prices.php` | `page-templates/page-prices.php` |
| `assets/css/prices.css` | `assets/css/prices.css` |
| `assets/js/prices.js` | `assets/js/prices.js` |
| `bin/prices-seed.json` | `bin/prices-seed.json` (replace with Bowland prices) |
| `bin/import-prices.php` | `bin/import-prices.php` (identical — no changes) |
| `bin/README.md` | `bin/README.md` |

### ACF field group

Copy `group_dp_prices` from Denton's `inc/acf-fields.php` into Bowland's.
Then swap field **keys** `field_dp_…` → `field_bp_…`. Leave field
**names** unchanged — `import-prices.php` relies on them being identical.

### functions.php

Add the conditional enqueue (mirror Denton's
`is_page_template( 'page-templates/page-prices.php' )` block).

### Navigation

Surface a "Prices" link in Bowland's nav following whatever nav pattern that
theme uses. On Denton it sits between Hub and Contact.

### Seeding

Once template + ACF + enqueue + nav are deployed to **staging**, follow the
runbook in `CLAUDE.md` → **"Prices Page Seeding Workflow"**. Summary:

1. Create the Prices page in WP Admin (Title: `Prices`, Template: Prices).
2. SSH into Bowland **staging** (not live — ACF needs to be active and live
   gets the DB pushed over from staging anyway).
3. `cd ~/public && wp eval-file wp-content/themes/bowland-pharmacy-theme/bin/import-prices.php`
4. Verify on staging, then push staging → live (Files + Database, after
   manual backup of live).

Read the full **"Gotchas"** subsection in CLAUDE.md before SSHing — covers
PowerShell paste mangling, the `cd ~/public` requirement, ACF detection,
and the live/staging mix-up trap.

### Hero seam gotcha (Prices)

After the build, you may see a thin cream stripe between the nav and the
hero on the Prices page. The hero must start with `var(--brand-light)` as
a **solid** background (not a `white → cream` gradient). See CLAUDE.md →
**"Body Cream Bleeds Through the Nav Padding"**. Denton fix:
`e4ea0de fix(denton): remove cream-stripe seam at top of Prices hero`.

---

## 2. Acuity Scheduling embeds on 6 service pages

Each service page gets a self-resizing Acuity calendar embedded at the
bottom of the page, and **every CTA on that page** points to the calendar's
anchor instead of the generic `/book-appointment/` URL.

### Pages affected (and Acuity category filters used on Denton)

| Page template | Anchor `id` | Acuity `appointmentType` |
|---|---|---|
| `page-weight-loss.php` | `#weight-loss-calendar` | `category:Weight%20Loss` |
| `page-travel-health.php` | `#travel-health-calendar` | `calendarID=10903457` (no category filter) |
| `page-ear-wax-removal.php` | `#ear-wax-calendar` | `category:Ear%20Clinic` |
| `page-blister-packs.php` | `#blister-pack-calendar` | `category:Blister%20Pack%20Services` |
| `page-hair-loss.php` | `#hair-loss-calendar` | (use Bowland's hair loss category) |
| `page-blood-testing.php` | `#blood-testing-calendar` | `category:Blood%20Testing` |

**Bowland-specific:** the Acuity account / `calendarID` / category names will
be different. Get the embed URL from the client's Acuity dashboard for each
service. If a category doesn't exist on the Bowland Acuity, drop the
`appointmentType` parameter rather than embedding an empty calendar.

### Per-page implementation pattern

1. Add the calendar section just above `get_footer()`, e.g.:

    ```php
    <section id="weight-loss-calendar" class="booking-calendar-section wl-booking-section">
      <div class="section-container">
        <div class="wl-booking-header">
          <h2 class="wl-booking-title">Book Your Weight Loss Consultation</h2>
          <p class="wl-booking-subtitle">Pick a time that suits you — appointments confirm instantly.</p>
        </div>
        <div class="booking-calendar-wrapper">
          <iframe
            src="https://app.acuityscheduling.com/schedule.php?owner=XXXXXXXX&appointmentType=category:Weight%20Loss"
            title="Schedule appointment"
            width="100%" height="800"
            frameborder="0" allow="payment"></iframe>
          <script src="https://embed.acuityscheduling.com/js/embed.js" async></script>
        </div>
      </div>
    </section>
    ```

2. Reroute **every CTA** on that page from `bp_booking_url()` (or hard-coded
   `/book-appointment/`) to the in-page anchor (`#weight-loss-calendar`,
   etc.). On Denton this was 4 CTAs on Weight Loss, 2 on Travel Health, 5
   on Ear Wax, 2 on Hair Loss, 3 on Blood Testing.

3. Per-page CSS additions (in each page's CSS file):
   `.<prefix>-booking-section / -header / -title / -subtitle`. Copy from
   Denton.

4. **Shared CSS already in `globals.css` on Denton** —
   `.booking-calendar-wrapper` (mobile min-height 600px, desktop 800px,
   responsive iframe sizing). Copy this block to Bowland's `globals.css`.

### Blister Packs special case

Blister Packs uses ACF **link fields** (return arrays with `url` / `title` /
`target`), not URL strings. The reroute is done *after* extracting the URL,
using a `stripos` check on `/book-appointment` — see Denton's
`page-blister-packs.php` for the exact pattern.

### Anchor scroll behaviour

The booking sections rely on:

- `html { scroll-behavior: smooth; }` in `globals.css` (already present).
- `scroll-margin-top: var(--nav-height);` on the target section so it
  doesn't sit under the fixed nav.

Make sure both are in place on Bowland.

---

## 3. NHS Prescription Registration page (new page + AJAX form)

A new page at `/nhs-prescriptions/register/` with a multi-fieldset NHS
electronic-prescription nomination form, sent via AJAX to the pharmacy email
address.

### Files to copy & rename (Denton → Bowland)

| Source | Target |
|---|---|
| `page-templates/page-nhs-prescriptions-register.php` | same |
| `assets/css/nhs-prescriptions-register.css` | same |
| `assets/js/nhs-prescriptions-register.js` | same |

### Page sections

1. **Hero** — badge, title, subtitle, two trust pills.
2. **Form card** — fieldsets for:
   - Personal details (name, DOB, NHS number optional)
   - Contact details (phone, email, address)
   - Current pharmacy (if switching)
   - Consent checkboxes (NHS sharing, marketing opt-in, Ts&Cs)
   - Hidden honeypot input (`npreg_website`)
   - Nonce field
3. **"What Happens Next"** — 3-step explainer (we'll contact, we set up,
   you collect).
4. **Phone CTA card** — call-instead option.

### functions.php additions

- Conditional enqueue for `page-nhs-prescriptions-register.php`, with
  `wp_localize_script('bowland-npreg-js', 'bpNpregAjax', ['ajaxurl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('bp_npreg_form_nonce')]);`
  (note: rename `dp` → `bp`).
- `bp_npreg_form_handler()` AJAX handler — nonce verify, honeypot check,
  sanitise/validate, `wp_mail()` to `bp_option('pharmacy_email')`.
- Register on `wp_ajax_bp_npreg_form` + `wp_ajax_nopriv_bp_npreg_form`.

### JS rename

In `assets/js/nhs-prescriptions-register.js`, the localized object name is
`dpNpregAjax` on Denton. Rename to `bpNpregAjax` (matching the
`wp_localize_script` call).

---

## 4. NHS Prescriptions page tweaks

Two changes to the existing NHS Prescriptions page hero card
(`page-nhs-prescriptions.php`):

1. **Icon swap** — replace the `Rx` / prescription icon with
   `fa-shield-halved`.
2. **Replace the "£9.90 prescription charge" block entirely** with a
   service-highlights card: `fa-star` icon + list of highlights (same-day
   collection, NHS partner, free delivery option, electronic prescription
   service).

Bowland's existing hero structure may differ slightly — preserve their card
chrome, just swap the icon and the content block.

---

## 5. NHS Nominate URL corrections

In `header.php`, **three** places hard-code an NHS Nominate URL:

1. Desktop top-bar "NHS Nominate" pill.
2. Mobile menu CTA equivalent.
3. The "Register with Us" entry in the registration dropdown.

On Denton they all now point at `home_url('/nominate-denton-pharmacy/')`.

**Bowland:** confirm the correct nomination URL with the client (likely
`/nominate-bowland-pharmacy/` or whatever their NHS service page is) and
hard-code all three. Also ensure the registration dropdown's default link
array includes a "Register with Us" entry — Denton added this to
`$default_sv_links` with `fa-user-plus`.

---

## 6. Remove pharmacist / team sections from selected pages

Client doesn't want the pharmacist's face/name appearing on certain service
pages.

| Page | What to remove |
|---|---|
| `page-weight-loss.php` | The `get_template_part('template-parts/section', 'pharmacist')` call and surrounding comment block. |
| `page-travel-health.php` | The inline "pharmacist intro strip" inside the *Why Choose Us* section (`.travel-why-pharmacist-strip` block). Keep the section header and the feature card grid. |
| `page-hair-loss.php` | The entire "Meet Your Hair Loss Experts" team section (`.hairloss-team-section`). |

On Denton these were specific to the client request; **confirm with the
Bowland client before removing**. If Bowland wants to keep them, skip.

---

## 7. Weight Loss page — pharmacist CTA scrolls to calendar

In `template-parts/section-pharmacist.php`, the "Book a Consultation" CTA
should be context-aware:

- On the weight loss page → `#weight-loss-calendar`
- Everywhere else → `bp_booking_url()`

Denton uses `is_page_template( 'page-templates/page-weight-loss.php' )` to
detect context. (Only relevant if you're keeping the pharmacist section on
some pages but not weight loss — if you've removed it from weight loss
entirely per section 6, this is moot.)

---

## 8. Footer opening hours — add day labels

In `footer.php`, the hours block was showing bare times ("9am – 5:30pm" /
"Closed") with no days. Make day labels structural in the template so it
always reads:

- **Monday – Friday:** {weekday hours from ACF}
- **Saturday & Sunday:** {weekend hours from ACF, falling back to "Closed"}

The weekend line should check `bp_option('hours_sunday')` first, falling
back to `bp_option('hours_saturday')`, then `'Closed'`.

Bowland's opening hours may differ — only the **labels** are template-level.
Times still come from Pharmacy Settings → Contact & Location.

---

## 9. Navigation logo overlap (desktop)

On desktop, the Denton logo was sitting flush against the phone pill in the
top bar. We applied:

- `grid-template-columns: auto auto 1fr` + `column-gap: 2.5rem` on the
  `.denton-nav-top .denton-container` grid (initial Bowland-aligned fix).
- A small `margin-left: -0.75rem` on `.denton-nav-top .denton-logo` inside
  a `@media (min-width: 1024px)` block to nudge it left away from the
  phone pill.

**Bowland note:** Bowland already had the initial column-gap fix. Only
apply the `-0.75rem` nudge if the same overlap reappears after any other
nav changes ship.

---

## 10. Contact page — cream-seam under nav

On the Contact page, a cream stripe was showing between the nav and the
hero. The fix is documented in CLAUDE.md →
**"Body Cream Bleeds Through the Nav Padding"** and was applied as:

```css
/* In assets/css/contact.css (page-scoped enqueue) */
body {
  background-color: #f0f4f8;  /* match the hero's top colour */
}

.contact-form-hero {
  background: linear-gradient(to bottom, #f0f4f8, #ffffff);
}
```

**Bowland-specific:** Bowland's contact hero may already start with the
brand-light/cream colour — in which case there's no seam and no fix
needed. Only apply if the seam is visible. Use the page's actual hero top
colour, not Denton's `#f0f4f8`.

---

## 11. Pharmacy First content corrections (Denton-specific — review only)

We rewrote the 7 conditions on Denton's Pharmacy First page for clinical
accuracy (who can get treatment / symptoms / exclusions / treatment per
condition) and qualified all "free" claims with the prescription-charge
caveat. Specific change of note: the **Impetigo** treatment line —
*"Treated with a topical treatment for localised infection, or oral
antibiotics where the infection is more widespread."*

**This is content-level, not code.** If Bowland's Pharmacy First page has
the same boilerplate copy as pre-fix Denton, the same review should be
done. If their content was already client-authored, skip.

Also: the Pharmacy First hero trust-card had a 5rem "£0" amount that was
overflowing its card on narrow widths. The fix was to drop
`.pharmfirst-trust-card-amount` font-size to 2rem and add
`overflow-wrap: break-word`. Mirror this in Bowland's `pharmacy-first.css`
if the same component exists.

---

## Pre-flight checklist

Before starting:

- [ ] You have a working Bowland staging environment with ACF PRO active.
- [ ] You can SSH into Bowland staging (Kinsta) and run WP-CLI.
- [ ] You have Acuity Scheduling embed URLs (or `calendarID`s) for each
      service from the Bowland client.
- [ ] You have the Bowland prices spreadsheet for the prices-seed JSON.
- [ ] You have the correct NHS nomination URL for Bowland.
- [ ] You have the Bowland pharmacy email for the NHS Prescription
      Registration form to submit to (set in Pharmacy Settings → Contact
      & Location → Email).

## Deployment order

1. Ship the Prices page (template + ACF + enqueue + nav link + seed JSON +
   importer) → deploy to staging → run importer → verify → push to live.
2. Ship sections 2 (Acuity embeds), 3 (registration page), 4 (NHS hero),
   5 (URL corrections), 8 (footer hours), 9–10 (nav + cream seam) together
   — these don't touch ACF data.
3. Ship section 6 (section removals) only after client sign-off per page.

## Reference

Everything above lives in `denton-pharmacy-theme/` on `main`. Diff against
`bowland-pharmacy-theme/` to see the precise code changes for any item.
The architectural rules and gotchas (ACF helper null checks, image field
types, body-cream seam, glassmorphism prefixes, Amelia CSS landmines)
apply identically on Bowland — `CLAUDE.md` is the canonical source.
