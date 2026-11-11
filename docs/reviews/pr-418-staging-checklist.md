# PR #418 — staging review checklist

PR: https://github.com/drewskibro/pharmodigital-pharmacy-templates/pull/418
("AT Health: pharmacy-checked wording, Denton address, structured data").
Applies to **both Denton and Bowland** unless marked.

Deploy it to staging first with the **Deploy a branch or PR to staging**
workflow, ref `refs/pull/418/merge` (see `docs/staging-deploys.md`). Use the
`/merge` ref, not the PR branch: `main` gained three commits after the branch
was cut, including #421, which switched the chat box off, and the bare branch
would bring it back.

## How to read a result

- **"Gone"** means the text or section must not appear anywhere on that page.
  Use the browser's find (Ctrl/Cmd+F).
- **Old wording still showing does not always mean the code is wrong.** Many
  fields are saved in WP Admin, and saved values beat the theme. If old wording
  persists, open the page in WP Admin and check that field. If it has a saved
  value, it belongs on the WP Admin edit list (section F), not in a code bug
  report.
- **Whole removed sections** (marked ⓢ) are deleted from the template, so they
  disappear whatever is saved. If one still shows, that *is* a problem.
- Check every page on **desktop and mobile width**. Removed sections can leave
  gaps, doubled backgrounds or a cream strip under the menu.

## A. Every page (header and footer)

- [ ] Top trust bar: **"NHS Partner" gone**.
- [ ] Trust bar Google rating shows the Pharmacy Settings rating, or is hidden
      if none is set. There is no typed-in 4.9 or 4.7.
- [ ] Weight loss menu tagline reads **"Weight management: consultation and
      ongoing support"**. Items **"Weight Loss Treatments / Prescription
      medications"** and **"Switching Provider"** are gone. *(Menus come from
      Pharmacy Settings → Navigation; if old items show, they're saved there.)*
- [ ] Travel menu tagline reads **"Designated Yellow Fever Vaccination Centre"**.
- [ ] Footer has a **"Check our registration"** line linking to (1) the pharmacy
      on the GPhC register and (2) the Superintendent Pharmacist, **Ahmed Nizar
      Al-Liabi, GPhC 2208502**. Click both links; each should open the right GPhC
      register entry.
- [ ] **Denton only:** footer address reads **"14 Ashton Road"**, not
      "14-16" *(saved in Pharmacy Settings → Contact & Location; see F)*, and
      "Established" reads **2024**.
- [ ] No PHP warnings or errors printed anywhere on the page.

## B. Pages with sections removed

### Weight Loss — `/weight-loss/`
- [ ] ⓢ **Results section gone**: no "95%" satisfaction, no "2.5st" average
      loss, no "10%+".
- [ ] ⓢ **Patient stories / testimonials section gone.**
- [ ] Same-day prescription badge gone.
- [ ] The "from £50 per month" FAQ answer is replaced by consultation wording.
- [ ] **Bowland:** the hero patient quote is gone.
- [ ] Hero testimonial card appears **only** if a quote is saved on the page
      (see F).
- [ ] Booking calendar still loads.
- [ ] Page flows with no large empty gap where the sections were (desktop and
      mobile).

### Switch Provider — Denton `/switch-provider/`, Bowland `/swap-weight-loss-provider/`
- [ ] "From £50/mo" badges and price card gone.
- [ ] National provider price comparison gone.
- [ ] "Same-day approval" lines gone.
- [ ] ⓢ **"PROVEN RESULTS" / evidence section gone.**
- [ ] ⓢ **"95% recommend" band and patient quotes gone.**
- [ ] New subtitle from the pharmacy check shows.
- [ ] No large empty gaps; final call-to-action still at the bottom.

### Travel clinic — Denton `/travel-clinic-manchester/`, Bowland `/travel-clinic/`
- [ ] "Leading" gone from the title.
- [ ] "1,000+ Travellers Protected", "15+ Years Experience", same-day and
      "Competitive Pricing" cards gone.
- [ ] "Peace of mind" line and the patient quote (previously shown twice) gone.
- [ ] Malaria tablets FAQ answer updated *(Denton may have this saved; see F)*.
- [ ] Booking step and FAQ give the NHS **"4 to 6 weeks"** advice.
- [ ] Yellow fever wording says **"designated"**, not "official", "approved",
      "authorised" or "registered".

### Home — `/`
- [ ] Switching section: same-day prescriptions, "50+ switched monthly" and
      "24h Delivery Time" gone.
- [ ] Home slider yellow fever wording says "designated".
- [ ] Rating badges read Pharmacy Settings or hide.
- [ ] **Denton:** no "15+ years" claims.

## C. Wording-only pages

- [ ] **Yellow fever — `/yellow-fever-manchester/`:** one dose and booster
      wording; age and higher-risk groups; **"designated by NaTHNaC to give
      yellow fever vaccine"**; no "official" *(Denton may have saved "Official"
      and "15+ years" wording; see F)*.
- [ ] **Thailand — `/travel-thailand/`:** three malaria risk bands and tablets
      advice; typhoid card; insect bite advice; "4-6 weeks" stat; "5-7 Vaccines
      Recommended" and "Full Protection Available" gone.
- [ ] **Flu — `/flu-vaccination/`:** private flu **from age 2**, not age 9, in
      the "Not eligible?" card and both FAQs; children's wording says "for
      children this is an injection"; **£25** still shown; "usually takes up to
      14 days to work"; side effects "1 to 2 days". Page title and description
      come from Yoast, so the theme doesn't change them (see F).
- [ ] **MenB — `/meningitis-b-vaccination/`:** NHS card ends **"at
      participating pharmacies, including ours."**; hero bullet reads **"Free on
      the NHS here for eligible young people until March 2027"**; no "Bexsero";
      no "only licensed" claim; private price still **£125**.
- [ ] **Shingles — `/shingles-vaccination/` and HPV — `/hpv-vaccination/`:**
      brand names replaced with "the shingles vaccine" / "the HPV vaccine";
      HPV cancer-prevention claims gone.
- [ ] **Dengue** (Travel menu): "the dengue vaccine", no "Qdenga"; serotype
      claims gone. The price shows **only if one is saved on the page**; if no
      price shows, confirm that's intended (see E).
- [ ] **Chikungunya** (Travel menu): under 12s not offered; pregnancy and
      breastfeeding only after a prescriber has assessed.
- [ ] **NHS services — `/nhs-services/`:** hero reads **"Providing NHS
      services"**, not "NHS Approved".
- [ ] **Book appointment — `/book-appointment/`:** yellow fever line reads
      "Designated Yellow Fever Vaccination Centre".
- [ ] **Denton contact — `/contact/`:** new page title and description (browser
      tab title).

## D. Structured data (search engines)

Paste the staging URL into https://validator.schema.org/ for the home page, one
service page (e.g. `/flu-vaccination/`) and one blog post.

- [ ] No errors reported.
- [ ] The Pharmacy record names its owner, **AT Health Ltd** (company 14519140).
- [ ] A Person for the Superintendent, **Ahmed Nizar Al-Liabi, GPhC 2208502**.
- [ ] Service pages have a **Service** record named after the page, with no
      price.
- [ ] Blog post: `dateModified` is not earlier than `datePublished`.
- [ ] No **duplicate** Organization/Pharmacy records competing with Yoast's
      (note anything that looks doubled).

## E. Questions to put to Ahmed (don't block on these)

- Dengue: should a price show? If the page has no saved price, the price now
  disappears.
- Complaints and feedback link: not added, because neither site has a
  complaints page. He wants to decide where it points.

## F. WP Admin edits after merge (saved values that override the theme)

Ahmed's email lists these; he has offered the full list. **Get the full list
before merging**, then do these on **staging first** as a rehearsal, re-check,
and repeat on **live straight after the merge** so outdated wording isn't left
showing.

- [ ] **Pharmacy Settings → Contact & Location (Denton):** Address Line 1 →
      "14 Ashton Road".
- [ ] **Pharmacy Settings → Navigation:** weight loss menu links/tagline, if
      saved.
- [ ] **Denton travel clinic and yellow fever pages:** the malaria answer; the
      "Official" and "15+ years" wording.
- [ ] **Prices page (both):** rabies schedule note; "Starter" removed from the
      Mounjaro and Wegovy rows.
- [ ] **Home, NHS services, weight loss and switch pages:** saved ratings,
      figures and patient quotes.
- [ ] **Flu page:** Yoast SEO title and meta description.

## G. Known gaps not fixed by this PR (follow-ups)

- **Rabies page.** The pharmacy check's wording (now in the Prices seed) is
  "Standard: days 0, 7 and 28 (the third dose can be from day 21 if time is
  short). Accelerated: days 0, 3 and 7, with a further dose at one year if you
  will keep travelling to high-risk areas." The rabies page itself is not
  changed by #418. It still says "days 0, 7 and 21–28" and doesn't mention the
  one-year dose for the accelerated course.
- **MenB dates.** The NHS wording is date-bound: first doses end **31 December
  2026**, and the offer ends **31 March 2027**. Both need updating on those
  dates.
