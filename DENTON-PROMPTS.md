# Denton Pharmacy Theme — Developer Prompts

> **How to use this file:** Give these prompts to Claude Code one at a time, in order. Each prompt is a self-contained unit of work that builds on the previous ones. Wait for each prompt to be completed and committed before moving to the next.
>
> **Before starting:** Make sure Claude Code has read `CLAUDE.md` and `CLAUDE-denton.md` — these are the architecture spec and client-specific spec respectively.
>
> **Reference code:** The `easy-pharmacy-theme/` folder is the working reference implementation. Claude Code should read the equivalent Easy Pharmacy file before creating each Denton file.
>
> **Design source:** The static HTML/CSS files in the repo root (`index.html`, `weight-loss.html`, etc.) are the Anima-exported designs showing exactly how Denton should look.

---

## Prompt 1: Foundation Scaffold

**Goal:** Create the `denton-pharmacy-theme/` folder with the core WordPress theme files, helper functions, ACF options pages, and global ACF field groups (Series A1–A7). No page templates yet — just the foundation everything else builds on.

**Reference files to read first:**
- `CLAUDE.md` — shared architecture, ACF rules, helper function patterns
- `CLAUDE-denton.md` — Denton-specific details (colours, address, credentials, nav structure)
- `easy-pharmacy-theme/style.css` — theme header format
- `easy-pharmacy-theme/functions.php` — the complete reference implementation (copy structure, change prefix)
- `easy-pharmacy-theme/inc/acf-options.php` — options pages setup
- `easy-pharmacy-theme/inc/acf-fields.php` — field group definitions (only look at Series A1–A7 for this prompt)

**Create these files:**

### 1. `denton-pharmacy-theme/style.css`
Theme metadata header only (no actual CSS). Theme Name: "Denton Pharmacy", Author: PharmoDigital, Version: 1.0.0.

### 2. `denton-pharmacy-theme/functions.php`
Mirror `easy-pharmacy-theme/functions.php` exactly, but:
- Change ALL helper function prefixes from `ep_` to `dp_`
- Change all function name prefixes from `easy_pharmacy_` to `denton_pharmacy_`
- Change constants from `EASY_PHARMACY_*` to `DENTON_PHARMACY_*`
- Change text domain from `'easy-pharmacy'` to `'denton-pharmacy'`
- Update default values: pharmacy name "Denton Pharmacy", phone "0161 336 2548", phone digits "01613362548"
- Update `dp_logo_url()` fallback to `get_template_directory_uri() . '/assets/images/logo.svg'`
- Update all `wp_enqueue_style`/`wp_enqueue_script` handles from `easy-pharmacy-*` to `denton-*`
- Update all `is_page_template()` paths (keep same template filenames)
- Change nav CSS/JS enqueues: `denton-nav.css` and `denton-nav.js` instead of Easy Pharmacy's `nav.css` and `mega-menu.js`
- Include `inc/acf-options.php` and `inc/acf-fields.php`
- Keep ALL functionality: conditional page-specific CSS/JS enqueuing, Gutenberg disabling for custom templates, Health Hub category creation, JSON-LD schema generation (MedicalWebPage + FAQPage), Table of Contents auto-generation for blog posts, consultation closer, Vimeo shortcode, Mounjaro calculator shortcode
- **CRITICAL:** Keep the strict null check pattern in `dp_option()` and `dp_field()` — use `=== null || === ''` checks, never `empty()`, `!$value`, or `?:` ternary (see CLAUDE.md Rule 1)

### 3. `denton-pharmacy-theme/inc/acf-options.php`
Same 5 sub-pages as Easy Pharmacy (Branding, Contact & Location, Registration & Compliance, Social Media, Navigation). Change function name prefix to `dp_`. Keep same menu slugs.

### 4. `denton-pharmacy-theme/inc/acf-fields.php`
Register **only Series A1–A7** (global options fields) for now:
- **A1: Branding** — pharmacy name, logo, tagline, Google rating. Keys: `field_dp_brand_*`
- **A2: Contact** — phone, email, address fields. Keys: `field_dp_contact_*`
- **A3: Opening Hours** — repeater or individual day fields. Keys: `field_dp_hours_*`
- **A4: Location** — map embed, parking info, directions URL. Keys: `field_dp_location_*`
- **A5: Compliance** — GPhC number (default: 1033447), company reg (default: 14519140), superintendent name (default: Ahmed Al-Liabi), superintendent GPhC (default: 2208502). Keys: `field_dp_compliance_*`
- **A6: Social Media** — Facebook, Instagram, Twitter, LinkedIn URLs. Keys: `field_dp_social_*`
- **A7: Booking** — booking page link, CTA text. Keys: `field_dp_booking_*`

Use `acf_add_local_field_group()` with location rules pointing to the appropriate options pages. Follow Easy Pharmacy's field structure but use `dp_` prefix and `field_dp_*` keys throughout.

All image fields must use `'type' => 'image', 'return_format' => 'id'` — never `'type' => 'url'` (CLAUDE.md Rule 2).

### 5. `denton-pharmacy-theme/assets/images/logo.svg`
Copy from `easy-pharmacy-theme/assets/images/logo.svg` as a placeholder fallback.

### 6. Create empty directory structure
Create these directories (with a `.gitkeep` if needed):
- `denton-pharmacy-theme/page-templates/`
- `denton-pharmacy-theme/template-parts/`
- `denton-pharmacy-theme/assets/css/`
- `denton-pharmacy-theme/assets/js/`

**Do NOT create yet (these come in later prompts):**
- `globals.css` or any page CSS
- `header.php` / `footer.php`
- Any page templates or template parts
- Navigation ACF fields (Series A8–A9)
- Home page ACF fields (Series B)

**Validation checklist before committing:**
- [ ] Every `ep_` reference is changed to `dp_`
- [ ] Every `easy_pharmacy_` function name is changed to `denton_pharmacy_`
- [ ] Every `EASY_PHARMACY_` constant is changed to `DENTON_PHARMACY_`
- [ ] Every `field_ep_` key is changed to `field_dp_`
- [ ] Every `group_ep_` key is changed to `group_dp_`
- [ ] `dp_option()` and `dp_field()` use strict `=== null || === ''` checks
- [ ] All image ACF fields use `'type' => 'image'`
- [ ] Default pharmacy details match CLAUDE-denton.md (name, phone, address, GPhC, company reg)
- [ ] All style/script handles use `denton-*` not `easy-pharmacy-*`
- [ ] Nav enqueues reference `denton-nav.css` and `denton-nav.js`

**Commit message:** `feat: scaffold Denton Pharmacy theme with core functions and global ACF fields (A1-A7)`

---

## Prompt 2: Global Styles (globals.css)

**Goal:** Create `denton-pharmacy-theme/assets/css/globals.css` with Denton's colour palette, typography, shared component classes, and animations.

**Reference files to read first:**
- `CLAUDE-denton.md` — colour palette, shadow tokens, hero-specific blues, gradient-text values
- `easy-pharmacy-theme/assets/css/globals.css` — the complete reference (mirror structure, swap colours)
- `globals.css` in the repo root — the Anima-exported Denton design CSS

**What to create:**

### `denton-pharmacy-theme/assets/css/globals.css`

Mirror the structure of Easy Pharmacy's `globals.css` but with Denton's design system:

**CSS Custom Properties (`:root`):**
- `--brand-primary: #3f73ae` (blue)
- `--brand-secondary: #79bc2e` (green)
- `--brand-bg: #e0e4e5` (light grey)
- `--brand-dark: #2a507a` (darker blue)
- `--brand-light: #f5f7f8` (very light grey)
- `--text-dark: #1a202c`
- `--text-gray: #4a5568`
- `--text-slate: #64748b`
- `--white: #ffffff`
- All shadow variables from CLAUDE-denton.md (neutral black, not coloured)
- Font variables: `--font-primary`, `--font-heading`, `--font-accent` (same font families as Easy Pharmacy)

**Shared classes to include:**
- `.section-container` — max-width 1400px centered wrapper
- `.gradient-text` — blue gradient: `linear-gradient(135deg, #054a91, #085db5)` (NOT terracotta)
- `.cta-button`, `.primary-cta`, `.secondary-cta` — blue gradient buttons (not terracotta)
- `.section-badge` — glassmorphic eyebrow badge
- `.pulse-dot` — green (`--brand-secondary`) animated dot
- `.rating-badge` — Google rating card
- `.star-row` — 5 gold stars (`#F4B400`)
- `.desktop-only` / `.mobile-only` — responsive visibility
- All shared animations: `ping`, `float`, `fadeInUp`, `pulse-glow`, `shimmer`

**Key differences from Easy Pharmacy:**
- All gradient colours use blue (`#054a91 → #085db5`) instead of terracotta/warm
- Shadows use neutral black `rgba(0,0,0,...)` not coloured tints
- `.pulse-dot` uses green not terracotta
- `.primary-cta` gradient: `--brand-primary` to `--brand-dark`
- Footer background: `#0f172a` (dark slate) — same across clients

**Also include:**
- Base resets and typography styles
- Hero section shared classes (Pattern A light, Pattern B dark — see CLAUDE-denton.md)
- Footer styles
- Stats bar styles
- Testimonial card styles
- FAQ accordion base styles
- Sticky CTA styles
- Any other shared component styles from Easy Pharmacy's globals.css

**Do NOT include page-specific styles** — those come in later prompts with each page template.

**Commit message:** `feat: add Denton globals.css with blue/green colour palette and shared components`

---

## Prompt 3: Three-Tier Navigation

**Goal:** Create Denton's three-tier navigation system (trust bar + utility bar + menu bar), including the header template, CSS, JavaScript, and ACF navigation fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — three-tier nav structure, CSS classes, body padding, mobile behaviour
- `easy-pharmacy-theme/header.php` — reference implementation (Denton's nav is structurally different — three-tier vs mega-menu)
- `nav.css` and `nav.js` in the repo root — the Anima-exported Denton navigation design
- `index.html` in the repo root — see the nav HTML structure in the Denton design

**Create these files:**

### 1. `denton-pharmacy-theme/header.php`

Three-tier navigation structure:

```
<nav class="denton-nav">
  ├── .denton-nav-trust-bar      — Tier 1: GPhC Registered · NHS Partner · 4.9★ Google Reviews
  ├── .denton-nav-top             — Tier 2: Logo + Utility CTAs (phone, NHS nominate, book, search)
  └── .denton-nav-bottom          — Tier 3: Menu links with dropdowns
</nav>
```

- **Tier 1 (Trust Bar):** 3 trust items pulled from ACF options — GPhC registered, NHS partner, Google rating
- **Tier 2 (Utility Bar):** Logo (from `dp_logo_url()`), phone link, NHS Nominate button, Book Consultation CTA, search button
- **Tier 3 (Menu Bar):** Menu items read from ACF navigation options. Each item has show/hide toggle, label, URL, optional dropdown sub-links
- **Mobile:** Hamburger toggle, full-screen drawer from right, accordion sections for dropdowns, body scroll lock
- **Search overlay:** Full-screen overlay with keyword-to-URL search map
- All text content and URLs should come from ACF options with sensible Denton defaults
- Read nav items from ACF using `dp_option()` with defaults matching CLAUDE-denton.md

### 2. `denton-pharmacy-theme/assets/css/denton-nav.css`

Based on the Anima `nav.css` design file. Must include:
- Fixed positioning for all three tiers
- Body padding-top: 112px (<1024px), 188px (1024–1279px), 200px (1280px+)
- Desktop: all tiers visible, dropdowns on hover
- `.denton-dropdown.wide` — 2-column layout for Travel dropdown (Services + Destinations with flags)
- Mobile (<1024px): only Tier 2 visible, hamburger toggle, full-screen drawer
- `.denton-mobile-menu.active` — slide-in drawer
- `.denton-mobile-accordion` — expandable sections
- Search overlay styles
- Scroll effects: `.scrolled` class adds shadow, `.nav-compact` at >80px scroll
- All classes from CLAUDE-denton.md nav section

### 3. `denton-pharmacy-theme/assets/js/denton-nav.js`

- Scroll handler: add `.scrolled` and `.nav-compact` classes
- Mobile hamburger toggle with body scroll lock
- Mobile accordion open/close
- Search overlay: open, close, keyword matching, navigation
- Keyboard: Escape closes search and mobile menu
- Resize handler: auto-close mobile menu at >=1024px
- Dropdown hover behaviour for desktop

### 4. Update `denton-pharmacy-theme/inc/acf-fields.php`

Add **Series A8–A9** (Navigation fields) to the existing file:
- **A8: Menu Items** — repeater or individual fields for each menu item: show/hide toggle (`true_false`), label, URL, has_dropdown toggle
- **A9: Dropdown Sub-links** — sub-fields for each dropdown: label, URL pairs
- Location rule: Navigation options page
- Keys: `field_dp_nav_*`, Group: `group_dp_nav_*`

**Commit message:** `feat: add Denton three-tier navigation with header.php, CSS, JS, and ACF nav fields (A8-A9)`

---

## Prompt 4: Footer & Sticky CTA

**Goal:** Create the footer template and sticky CTA bar.

**Reference files to read first:**
- `CLAUDE.md` — shared footer structure (4-column grid, compliance bar)
- `CLAUDE-denton.md` — Denton-specific defaults (address, phone, GPhC, company reg, hours)
- `easy-pharmacy-theme/footer.php` — reference implementation
- `index.html` in repo root — see the footer HTML in the Denton design

**Create these files:**

### 1. `denton-pharmacy-theme/footer.php`

4-column footer matching CLAUDE.md shared layout:
- **Column 1 (Brand):** Logo, tagline, social media links (from ACF)
- **Column 2 (Our Services):** Weight Loss, Travel Health, Ear Wax Removal, Hair Loss, NHS Services, Smoking Cessation
- **Column 3 (Quick Links):** About Us, Meet the Team, Health Hub, Book Appointment, Contact Us
- **Column 4 (Get in Touch):** Phone (from `dp_phone()`), email, address (from ACF options), opening hours
- **Certifications bar:** GPhC Registered (1033447), Company Reg (14519140), Established Since badge
- **Bottom bar:** Copyright "Denton Pharmacy", Privacy Policy, Terms, Cookie Policy links
- All content pulled via `dp_option()` with Denton defaults
- Dark slate background (`#0f172a`) with radial gradient overlay
- Include video modal placeholder div (for pharmacist video)

### 2. `denton-pharmacy-theme/template-parts/section-sticky-cta.php`

Fixed bottom bar that appears after 30% hero scroll:
- Phone link + Book Consultation CTA
- Pharmacy name from `dp_pharmacy_name()`
- Content from ACF fields with defaults

### 3. Fallback page templates

Create these minimal templates so the theme activates properly in WordPress:
- `denton-pharmacy-theme/page.php` — default page template
- `denton-pharmacy-theme/index.php` — blog listing fallback
- `denton-pharmacy-theme/404.php` — 404 page

All three should use `get_header()` and `get_footer()` with minimal content between.

**Commit message:** `feat: add Denton footer, sticky CTA, and base page templates (page.php, index.php, 404.php)`

---

## Prompt 5: Home Page — Template, Sections & ACF Fields (B1–B13)

**Goal:** Build the complete home page with all 13 sections, template parts, and ACF field groups.

**Reference files to read first:**
- `CLAUDE-denton.md` — Home page section order (13 sections), content defaults
- `easy-pharmacy-theme/page-templates/page-home.php` — reference home page template
- `easy-pharmacy-theme/template-parts/section-hero.php` (and all other section-*.php files)
- `easy-pharmacy-theme/inc/acf-fields.php` — Series B field groups
- `index.html` in repo root — the Anima-exported Denton home page design
- `index.css` in repo root — home page-specific styles (if exists, check first)

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-home.php`

WordPress page template that loads all 13 sections in order via `get_template_part()`:
1. Hero, 2. Stats Bar, 3. NHS Services, 4. Treatments, 5. Pharmacist, 6. How It Works, 7. Switching Provider, 8. RevSlider/Travel Banner, 9. Safe & Secure, 10. Health Hub, 11. Location, 12. Testimonials, 13. Sticky CTA

### 2. Template parts (create all in `template-parts/`)

- **`section-hero.php`** — Location badge ("Your Local Denton Pharmacy"), headline with `.gradient-text`, 2 CTAs, trust indicators (GPhC, UK Licensed, NHS & Private), testimonial card, image card with 4.7 rating badge. Pattern A (light background)
- **`section-stats.php`** — 5-metric shimmer bar: 5,000+ Patients, 4.7 Rating, 15+ Years, GPhC Registered, Free Delivery
- **`section-nhs-services.php`** — 6-card colour-coded grid: Prescriptions (blue), Collection (green), Repeat (purple), Pharmacy First (orange), New Medicine (pink), Flu Jabs (cyan)
- **`section-treatments.php`** — 6-card image grid: Weight Loss, Travel Health, Ear Wax, Hair Loss, Smoking Cessation, Pharmacy First
- **`section-pharmacist.php`** — Ahmed Al-Liabi: photo with video modal trigger + experience badge ("15+"), credentials, quote
- **`section-how-it-works.php`** — 3 steps: Book Online, Speak to Ahmed, Receive Treatment
- **`section-switching.php`** — 2-column: features list + image card with 4.7 rating badge
- **`section-revslider.php`** — Revolution Slider integration with static fallback. "Yellow Fever Approved" badge
- **`section-safe-secure.php`** — GPhC verification card: Company Reg 14519140, GPhC 1033447, Superintendent Ahmed Al-Liabi
- **`section-health-hub.php`** — 3-card article grid using `article-card.php` template part
- **`section-location.php`** — Address: 14-16 Ashton Road, hours: Mon-Fri 9am-6pm, Sat 9am-1pm, Sun Closed
- **`section-testimonials.php`** — 4 items: Paul Fegan, Georgia Porter, Giedrius K., CTA card (4.9 rating)
- **`article-card.php`** — Reusable blog article card (used by Health Hub section and blog listing)
- **`featured-article-card.php`** — Featured blog article card (larger, used on Health Hub page 1)

Every template part must use `dp_field()` for page-level content and `dp_option()` for global content, with appropriate Denton defaults.

### 3. Update `denton-pharmacy-theme/inc/acf-fields.php`

Add **Series B1–B13** (Home page field groups):
- **B1:** Hero — badge text, title, subtitle, CTAs, trust items, images
- **B2:** Stats Bar — 5 stat items (icon, number, label)
- **B3:** NHS Services — 6 cards (title, description, icon, colour, link)
- **B4:** Treatments — 6 cards (title, description, image, link)
- **B5:** Pharmacist — name, title, photo, video URL, experience years, credentials, quote
- **B6:** How It Works — 3 steps (icon, title, description)
- **B7:** Switching — heading, features list, image, CTA
- **B8:** RevSlider — shortcode, fallback image, badge text
- **B9:** Safe & Secure — GPhC card fields
- **B10:** Health Hub — section heading, CTA
- **B11:** Location — address, hours, map embed, parking, directions URL
- **B12:** Testimonials — 4 testimonial items (name, text, rating, date)
- **B13:** Sticky CTA — phone text, CTA text, CTA URL

All field groups need location rules pointing to `page-templates/page-home.php`.

### 4. Home page CSS

Check if there's a home-specific CSS file needed beyond `globals.css`. If the Anima `index.html` design references styles not already in `globals.css`, create a home page CSS file and add the enqueue in `functions.php`. Otherwise, home page styles should already be covered by `globals.css` section/component styles.

**Commit message:** `feat: add Denton home page with all 13 sections, template parts, and ACF fields (B1-B13)`

---

## Prompt 6: Blog System (Health Hub, Single Post, Archive)

**Goal:** Build the Health Hub blog listing page, single post template, archive template, and blog ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Health Hub section order, CSS prefix `.healthhub-`
- `easy-pharmacy-theme/page-templates/page-health-hub.php` — reference listing page
- `easy-pharmacy-theme/single.php` — reference single post template
- `easy-pharmacy-theme/archive.php` — reference archive template
- `easy-pharmacy-theme/assets/css/blog.css` — reference blog styles
- `easy-pharmacy-theme/assets/js/blog.js` — category filter, FAQ accordion
- `easy-pharmacy-theme/inc/acf-fields.php` — Series C fields
- `blog.html` and `blog.css` in repo root — Anima-exported Denton blog design

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-health-hub.php`

Blog listing page:
1. Hero — badge, title, category filter pills (client-side JS filtering)
2. Featured Article — page 1 only, large card using `featured-article-card.php`
3. Articles Grid — 3-column, 9 per page, using `article-card.php`
4. CTA — purple/blue gradient
- All content via `dp_field()` / `dp_option()` with Denton defaults
- CSS prefix: `.healthhub-`

### 2. `denton-pharmacy-theme/single.php`

Single blog post template:
- Breadcrumb navigation
- Post header with category badge, title, meta (reading time, date, author)
- Author/reviewer info cards (from ACF)
- Table of Contents (auto-generated from `functions.php` TOC function)
- Post content
- FAQ section (if ACF FAQ repeater has entries)
- Consultation closer (auto-appended by `functions.php`)
- Related articles grid
- JSON-LD structured data (auto-added by `functions.php`)

### 3. `denton-pharmacy-theme/archive.php`

Archive/category listing — same layout as Health Hub but with archive title/description.

### 4. `denton-pharmacy-theme/assets/css/blog.css`

Blog-specific styles based on the Anima `blog.css` design:
- Health Hub listing styles (`.healthhub-*` prefix)
- Single post styles
- Category filter pills
- Article card grid
- Featured article card
- Reading time, author cards
- Table of Contents styling
- FAQ accordion styles
- Responsive layout (3-col → 2-col → 1-col)

### 5. `denton-pharmacy-theme/assets/js/blog.js`

- `filterArticles(category)` — client-side category filtering
- FAQ accordion toggle function
- Any other blog-specific interactivity

### 6. Update `denton-pharmacy-theme/inc/acf-fields.php`

Add **Series C1** (Blog post fields):
- Reading time, pillar/cluster taxonomy
- Author photo, reviewer name, reviewer photo
- FAQ repeater (question + answer pairs)
- TOC toggle (show/hide)
- Keys: `field_dp_blog_*`, Group: `group_dp_blog_*`
- Location rule: Post type = post

**Commit message:** `feat: add Denton Health Hub blog listing, single post, archive, and blog ACF fields (C1)`

---

## Prompt 7: Weight Loss Page

**Goal:** Build the complete Weight Loss page with all 10 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Weight Loss section order (10 sections), CSS prefix `.wl-`
- `easy-pharmacy-theme/page-templates/page-weight-loss.php` — reference implementation
- `easy-pharmacy-theme/assets/css/weight-loss.css` — reference styles
- `easy-pharmacy-theme/assets/js/weight-loss.js` — calculator, FAQ accordion
- `easy-pharmacy-theme/inc/acf-fields.php` — Series D fields
- `weight-loss.html` and `weight-loss.css` in repo root — Anima-exported Denton design

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-weight-loss.php`

10 sections in order:
1. Hero — badge, title, CTAs, 3-image asymmetric grid, floating testimonial (Pattern A light)
2. Stats Bar — purple background, 4-column glassmorphic
3. Results — 3-card grid with featured center card
4. Features — 2-column: image + 3 feature cards
5. CTA Bar — purple gradient with shimmer
6. Journey Steps — 4 alternating steps (left/right layout)
7. Calculator — BMI/weight loss estimator (uses Mounjaro calculator shortcode or inline)
8. FAQ — numbered accordion, `.wl-faq-item` / `.wl-faq-active`, max 800px width
9. Testimonials — 3-column grid
10. Final CTA — purple gradient

### 2. `denton-pharmacy-theme/assets/css/weight-loss.css`

Based on the Anima `weight-loss.css` design. All classes prefixed with `.wl-`. Include responsive breakpoints.

### 3. `denton-pharmacy-theme/assets/js/weight-loss.js`

- BMI calculator with kg/cm and stone/feet unit toggles
- Weight loss projection (10-15% range)
- Smooth scroll to `#calculatorResults`
- FAQ accordion: `toggleFAQ(button)` for `.wl-faq-item` / `.wl-faq-active`

### 4. Update `denton-pharmacy-theme/inc/acf-fields.php`

Add **Series D1–D10** (Weight Loss page fields):
- One field group per section (hero, stats, results, features, CTA, journey, calculator, FAQ, testimonials, final CTA)
- Location rule: `page-templates/page-weight-loss.php`
- Keys: `field_dp_wl_*`, Groups: `group_dp_wl_*`

**Commit message:** `feat: add Denton Weight Loss page with calculator, FAQ, and ACF fields (D1-D10)`

---

## Prompt 8: Travel Health Page

**Goal:** Build the complete Travel Health page with all 9 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Travel Health section order (9 sections), CSS prefix `.travel-`
- `easy-pharmacy-theme/page-templates/page-travel-health.php` — reference implementation
- `easy-pharmacy-theme/assets/css/travel-health.css` — reference styles
- `easy-pharmacy-theme/assets/js/travel-health.js` — FAQ accordion
- `easy-pharmacy-theme/inc/acf-fields.php` — Series E fields
- `travel-health.html` and `travel-health.css` in repo root — Anima-exported Denton design

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-travel-health.php`

9 sections:
1. Hero — full-width background image, dark overlay, white text, glassmorphic trust pills (Pattern B dark)
2. Stats Bar — purple background, 4-column
3. Services — 5-card grid with floating icons
4. Vaccinations Grid — 4-column; yellow fever card has gradient background
5. Why Choose Us — 2-column: image + 4 feature cards
6. Process — 4 alternating steps
7. Popular Destinations — 4-column card grid
8. FAQ — serif font styling (Playfair Display), `.travel-faq-item` / `.travel-faq-active`
9. Final CTA — purple gradient

### 2. `denton-pharmacy-theme/assets/css/travel-health.css`

Based on Anima `travel-health.css`. All classes prefixed with `.travel-`.

### 3. `denton-pharmacy-theme/assets/js/travel-health.js`

FAQ accordion for `.travel-faq-item` / `.travel-faq-active`.

### 4. Update `denton-pharmacy-theme/inc/acf-fields.php`

Add **Series E1–E9** (Travel Health page fields). Location rule: `page-templates/page-travel-health.php`. Keys: `field_dp_travel_*`.

**Commit message:** `feat: add Denton Travel Health page with vaccinations grid and ACF fields (E1-E9)`

---

## Prompt 9: Ear Wax Removal Page

**Goal:** Build the Ear Wax Removal page with all 10 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Ear Wax section order (10 sections), CSS prefix `.earwax-`
- `easy-pharmacy-theme/page-templates/page-ear-wax-removal.php` — reference
- `easy-pharmacy-theme/assets/css/ear-wax-removal.css` — reference styles
- `easy-pharmacy-theme/assets/js/ear-wax-removal.js` — FAQ accordion
- `ear-wax-removal.html` and `ear-wax-removal.css` in repo root — Anima design
- `easy-pharmacy-theme/inc/acf-fields.php` — Series F fields

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-ear-wax-removal.php`

10 sections:
1. Hero — badge, title, subtitle (purple), rotated image card (-2deg) with price badge (Pattern A light)
2. Stats Bar — purple background, 4-column
3. Symptoms — 3-column icons with scale/rotate hover
4. Team — 2-column card grid (max 1000px), role badges
5. Comparison Table — horizontal scroll, highlighted Denton column
6. Process — 3 alternating steps
7. Pricing — 2-column, featured card with gradient
8. Testimonials — 3-column
9. FAQ — numbered accordion, `.earwax-faq-item` / `.active`
10. Final CTA — purple gradient

### 2. `denton-pharmacy-theme/assets/css/ear-wax-removal.css`
### 3. `denton-pharmacy-theme/assets/js/ear-wax-removal.js`

### 4. Update ACF fields — **Series F1–F10**

Location: `page-templates/page-ear-wax-removal.php`. Keys: `field_dp_earwax_*`.

**Commit message:** `feat: add Denton Ear Wax Removal page with comparison table, pricing, and ACF fields (F1-F10)`

---

## Prompt 10: Hair Loss Page

**Goal:** Build the Hair Loss page with all 8 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Hair Loss section order (8 sections), CSS prefix `.hairloss-`
- `easy-pharmacy-theme/page-templates/page-hair-loss.php` — reference
- `easy-pharmacy-theme/assets/css/hair-loss.css` — reference styles
- `easy-pharmacy-theme/assets/js/hair-loss.js`
- `hair-loss.html` and `hair-loss.css` in repo root — Anima design
- `easy-pharmacy-theme/inc/acf-fields.php` — Series G fields

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-hair-loss.php`

8 sections:
1. Hero — warm gradient, 2-column
2. Stats Bar — purple background, 4-column
3. Results/Features — card grid with metrics
4. Team/Expertise — card layout
5. Process/Journey — alternating steps
6. FAQ — plus/minus icon toggle (unique to this page), `.hairloss-faq-item` / `.active`, `fa-plus` ↔ `fa-minus`
7. Testimonials — 3-column
8. Final CTA — purple gradient

### 2. `denton-pharmacy-theme/assets/css/hair-loss.css`
### 3. `denton-pharmacy-theme/assets/js/hair-loss.js`

Note: Hair Loss FAQ uses plus/minus Font Awesome icons instead of numbered badges — unique behaviour.

### 4. Update ACF fields — **Series G1–G8**

Location: `page-templates/page-hair-loss.php`. Keys: `field_dp_hairloss_*`.

**Commit message:** `feat: add Denton Hair Loss page with plus/minus FAQ and ACF fields (G1-G8)`

---

## Prompt 11: Switch Provider Page

**Goal:** Build the Switch Provider page with all 7 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Switch Provider section order (7 sections), CSS prefix `.switch-`
- `easy-pharmacy-theme/page-templates/page-switch-provider.php` — reference
- `easy-pharmacy-theme/assets/css/switch-provider.css` — reference styles
- `easy-pharmacy-theme/assets/js/switch-provider.js`
- `switch-provider.html` and `switch-provider.css` in repo root — Anima design
- `easy-pharmacy-theme/inc/acf-fields.php` — Series H fields

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-switch-provider.php`

7 sections:
1. Hero — purple gradient, white text, image card (Pattern B dark)
2. Stats Bar — negative margin overlap, glassmorphic. Note: needs `position: relative; z-index: 20`
3. Comparison — 3-card grid
4. Comparison Detail — extended breakdown
5. Benefits — feature cards
6. Process — steps for switching
7. Final CTA — purple gradient

### 2. `denton-pharmacy-theme/assets/css/switch-provider.css`
### 3. `denton-pharmacy-theme/assets/js/switch-provider.js`

### 4. Update ACF fields — **Series H1–H7**

Location: `page-templates/page-switch-provider.php`. Keys: `field_dp_switch_*`.

**Commit message:** `feat: add Denton Switch Provider page with comparison cards and ACF fields (H1-H7)`

---

## Prompt 12: Book Appointment Page

**Goal:** Build the Book Appointment page with all 10 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Book Appointment section order (10 sections), CSS prefix `.book-`
- `easy-pharmacy-theme/page-templates/page-book-appointment.php` — reference
- `easy-pharmacy-theme/assets/css/book-appointment.css` — reference styles
- `easy-pharmacy-theme/assets/js/book-appointment.js`
- `book-appointment.html` and `book-appointment.css` in repo root — Anima design
- `easy-pharmacy-theme/inc/acf-fields.php` — Series I fields

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-book-appointment.php`

10 sections:
1. Hero — purple gradient, rotated image card (-2deg), floating testimonial (Pattern B dark)
2. How It Works — 3 cards with connecting arrows
3. Stats Bar — purple, 4-column, circular icons
4. Priority Services — 3-column featured cards with prices
5. Additional Services — 3-column smaller cards
6. Amelia Booking Widget — integration placeholder (checks if Amelia plugin active)
7. Testimonials — 3-column
8. FAQ — numbered badges, one-at-a-time, `.book-faq-item` / `.active`
9. Final CTA — purple gradient with hours pill
10. Footer (standard, via `get_footer()`)

### 2. `denton-pharmacy-theme/assets/css/book-appointment.css`
### 3. `denton-pharmacy-theme/assets/js/book-appointment.js`

### 4. Update ACF fields — **Series I1–I10**

Location: `page-templates/page-book-appointment.php`. Keys: `field_dp_book_*`.

**Commit message:** `feat: add Denton Book Appointment page with Amelia widget and ACF fields (I1-I10)`

---

## Prompt 13: Team Page

**Goal:** Build the Team page with all 5 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — Team section order (5 sections), CSS prefix `.team-`
- `easy-pharmacy-theme/page-templates/page-team.php` — reference
- `easy-pharmacy-theme/assets/css/team.css` — reference styles
- `team.html` and `team.css` in repo root — Anima design
- `easy-pharmacy-theme/inc/acf-fields.php` — Series J fields

**Create these files:**

### 1. `denton-pharmacy-theme/page-templates/page-team.php`

5 sections:
1. Hero — animated purple blobs, dot grid, gradient
2. Stats Bar — floating glassmorphic, negative margin overlap. Needs `position: relative; z-index: 20`
3. Team Grid — 3 cards: Ahmed Al-Liabi (Founder & Lead Pharmacist), Jignasa Modhvadia (Director of Pharmacy), Baljender Nagi (Senior Pharmacist)
4. Values — 4-column: Patient-First Care, Continuous Learning, Building Trust, Innovation
5. Final CTA — purple gradient with badge pills

### 2. `denton-pharmacy-theme/assets/css/team.css`

### 3. Update ACF fields — **Series J1–J5**

Location: `page-templates/page-team.php`. Keys: `field_dp_team_*`.

**Commit message:** `feat: add Denton Team page with staff cards, values, and ACF fields (J1-J5)`

---

## Prompt 14: Vaccination Pages (Rabies, Hepatitis, Yellow Fever, Typhoid)

**Goal:** Build all 4 vaccination page templates. These share a common structure but each has unique content and minor variations.

**Reference files to read first:**
- `CLAUDE-denton.md` — vaccination page common structure (10 sections), per-page CSS prefixes and unique features
- `easy-pharmacy-theme/page-templates/page-rabies.php` (and hepatitis, yellow-fever, typhoid) — reference implementations
- `easy-pharmacy-theme/assets/css/rabies.css` (and matching CSS/JS files) — reference styles
- `rabies.html`, `hepatitis.html`, `yellow-fever.html`, `typhoid.html` in repo root — Anima designs
- `easy-pharmacy-theme/inc/acf-fields.php` — Series K fields

**Create these files for EACH of the 4 vaccines:**

### Page Templates
- `denton-pharmacy-theme/page-templates/page-rabies.php`
- `denton-pharmacy-theme/page-templates/page-hepatitis.php`
- `denton-pharmacy-theme/page-templates/page-yellow-fever.php`
- `denton-pharmacy-theme/page-templates/page-typhoid.php`

### Common section order (10 sections per page):
1. Breadcrumb — Home / Travel Health / [Vaccine Name]
2. Hero — full-height background, overlay gradient, decorative white bar, glassmorphic trust badges (Pattern B dark)
3. Protection/Certification — 2-column: image card + badge box, feature cards
4. Stats Bar — purple gradient, 4-5 stats with dividers
5. About/Disease Info — warm cream background, 2-column: portrait + 2x2 info grid. Optional critical callout
6. Who Needs It — 2-column: "Highly Recommended" (green) + "Consider If" (yellow)
7. Risk Zones — High Risk vs Moderate Risk regions, destination images, country lists
8. Details — 3x2 grid of detail cards
9. FAQ — numbered accordion with `.travel-faq-active` (except vaccines use their own prefix class)
10. Final CTA — purple gradient with dot overlay

### Unique features per page:
- **Rabies:** Critical callout "100% Fatal Once Symptoms Appear", `.rabies-` prefix, `.rabies-faq-item`
- **Hepatitis:** Dual vaccine options (Hep A vs B vs Combined Twinrix), `.hep-` prefix, `.hep-faq-item`
- **Yellow Fever:** Yellow/orange gradient stats bar, certification focus, `.yellowfever-` prefix, `.yellowfever-faq-item`
- **Typhoid:** Injection vs Oral Capsules (Vivotif) options, `.typhoid-` prefix, `.typhoid-faq-item`

### CSS files (one per vaccine)
- `denton-pharmacy-theme/assets/css/rabies.css`
- `denton-pharmacy-theme/assets/css/hepatitis.css`
- `denton-pharmacy-theme/assets/css/yellow-fever.css`
- `denton-pharmacy-theme/assets/css/typhoid.css`

### JS files (one per vaccine — FAQ accordion)
- `denton-pharmacy-theme/assets/js/rabies.js`
- `denton-pharmacy-theme/assets/js/hepatitis.js`
- `denton-pharmacy-theme/assets/js/yellow-fever.js`
- `denton-pharmacy-theme/assets/js/typhoid.js`

### Update ACF fields — **Series K1–K10**

Vaccination pages share a common field structure but each page needs its own field groups with per-page location rules. Keys: `field_dp_rabies_*`, `field_dp_hep_*`, `field_dp_yellowfever_*`, `field_dp_typhoid_*`.

**Commit message:** `feat: add Denton vaccination pages (Rabies, Hepatitis, Yellow Fever, Typhoid) with ACF fields (K1-K10)`

---

## Prompt 15: Travel Destination Pages (6 Pages)

**Goal:** Build all 6 travel destination page templates. These share a common layout with destination-specific content.

**Reference files to read first:**
- `CLAUDE-denton.md` — travel destination page list and key vaccines per destination
- `easy-pharmacy-theme/page-templates/page-travel-thailand.php` (and other travel-*.php) — reference implementations
- `easy-pharmacy-theme/assets/css/travel-thailand.css` (and matching CSS files) — reference styles
- `travel-thailand.html`, `travel-kenya.html`, `travel-india.html`, `travel-cape-verde.html`, `travel-brazil.html`, `travel-vietnam.html` in repo root — Anima designs
- `easy-pharmacy-theme/inc/acf-fields.php` — Series L fields

**Create these files:**

### Page Templates
- `denton-pharmacy-theme/page-templates/page-travel-thailand.php`
- `denton-pharmacy-theme/page-templates/page-travel-kenya.php`
- `denton-pharmacy-theme/page-templates/page-travel-india.php`
- `denton-pharmacy-theme/page-templates/page-travel-cape-verde.php`
- `denton-pharmacy-theme/page-templates/page-travel-brazil.php`
- `denton-pharmacy-theme/page-templates/page-travel-vietnam.php`

### CSS files (one per destination)
- `denton-pharmacy-theme/assets/css/travel-thailand.css`
- `denton-pharmacy-theme/assets/css/travel-kenya.css`
- `denton-pharmacy-theme/assets/css/travel-india.css`
- `denton-pharmacy-theme/assets/css/travel-cape-verde.css`
- `denton-pharmacy-theme/assets/css/travel-brazil.css`
- `denton-pharmacy-theme/assets/css/travel-vietnam.css`

### Key vaccines per destination (for default ACF content):
- **Thailand:** Hepatitis A, Typhoid, Malaria prophylaxis
- **Kenya:** Yellow Fever (required), Malaria, Typhoid
- **India:** Hepatitis A & B, Typhoid, Rabies
- **Cape Verde:** Hepatitis A, Typhoid
- **Brazil:** Yellow Fever, Hepatitis A, Typhoid
- **Vietnam:** Hepatitis A & B, Typhoid, Japanese Encephalitis

### Update ACF fields — **Series L1–L6**

Shared field structure with per-destination location rules. Keys: `field_dp_travel_[destination]_*`.

**Commit message:** `feat: add Denton travel destination pages (Thailand, Kenya, India, Cape Verde, Brazil, Vietnam) with ACF fields (L1-L6)`

---

## Prompt 16: NHS Services Page

**Goal:** Build the NHS Services page with all 5 sections and ACF fields.

**Reference files to read first:**
- `CLAUDE-denton.md` — NHS Services section order (5 sections), no page-specific CSS
- `easy-pharmacy-theme/page-templates/page-nhs-services.php` (if it exists, otherwise check how Easy Pharmacy handles NHS) — reference
- `easy-pharmacy-theme/inc/acf-fields.php` — Series M fields

**Create:**

### 1. `denton-pharmacy-theme/page-templates/page-nhs-services.php`

5 sections:
1. Hero — uses shared `.hero-section` classes from globals.css
2. Stats — 4-stat display
3. NHS Services Grid — same 6-card component as homepage (`section-nhs-services.php` template part, shared)
4. How It Works — Book → Consult → Collect
5. Location — address, hours, map (reuses `section-location.php` template part)

Note: This page has no page-specific CSS file — it uses shared classes from `globals.css` and reuses template parts from the home page.

### 2. Update ACF fields — **Series M1**

Location: `page-templates/page-nhs-services.php`. Keys: `field_dp_nhs_*`.

Also update the location rules for shared template part field groups (NHS Services grid from B3, Location from B11) to include this page template.

**Commit message:** `feat: add Denton NHS Services page with shared template parts and ACF fields (M1)`

---

## Prompt 17: Final Review & Cleanup

**Goal:** Review the complete Denton Pharmacy theme for consistency, fix any issues, and ensure everything is wired up correctly.

**Tasks:**

1. **Prefix audit:** Search the entire `denton-pharmacy-theme/` directory for any remaining `ep_`, `easy_pharmacy_`, `easy-pharmacy`, `EASY_PHARMACY`, `field_ep_`, or `group_ep_` references. Fix any found.

2. **ACF field completeness:** Verify every template part that uses `dp_field()` has corresponding ACF field definitions in `acf-fields.php` and that the field group's location rules include every page template that loads that template part (CLAUDE.md Rule 3).

3. **Enqueue audit:** Verify every page template has its CSS and JS conditionally enqueued in `functions.php`. Check that file paths match actual file names.

4. **Image field audit:** Verify every ACF image field uses `'type' => 'image', 'return_format' => 'id'` — never `'type' => 'url'` (CLAUDE.md Rule 2).

5. **Helper function audit:** Verify `dp_option()` and `dp_field()` use strict `=== null || === ''` checks (CLAUDE.md Rule 1).

6. **CSS pointer-events:** Check all decorative overlays (`position: absolute; inset: 0`) have `pointer-events: none`.

7. **Backdrop-filter:** Check all glassmorphic elements have both `backdrop-filter` and `-webkit-backdrop-filter`.

8. **Nav body padding:** Verify the three breakpoints in `denton-nav.css` match CLAUDE-denton.md: 112px (<1024px), 188px (1024–1279px), 200px (1280px+).

9. **Default content:** Spot-check that hardcoded defaults match CLAUDE-denton.md (pharmacy name, phone, address, GPhC numbers, team members, hours).

10. **Template header comments:** Verify every file in `page-templates/` has the WordPress template name comment (`/* Template Name: ... */`).

**Commit message:** `fix: final review and cleanup of Denton Pharmacy theme — prefix audit, ACF validation, CSS fixes`

---

## Summary

| Prompt | What It Builds | ACF Series | Files Created |
|--------|---------------|------------|---------------|
| 1 | Foundation scaffold | A1–A7 | style.css, functions.php, acf-options.php, acf-fields.php, directory structure |
| 2 | Global styles | — | globals.css |
| 3 | Three-tier navigation | A8–A9 | header.php, denton-nav.css, denton-nav.js |
| 4 | Footer & base templates | — | footer.php, section-sticky-cta.php, page.php, index.php, 404.php |
| 5 | Home page (13 sections) | B1–B13 | page-home.php, 14 template parts |
| 6 | Blog system | C1 | page-health-hub.php, single.php, archive.php, blog.css, blog.js |
| 7 | Weight Loss | D1–D10 | page-weight-loss.php, weight-loss.css, weight-loss.js |
| 8 | Travel Health | E1–E9 | page-travel-health.php, travel-health.css, travel-health.js |
| 9 | Ear Wax Removal | F1–F10 | page-ear-wax-removal.php, ear-wax-removal.css, ear-wax-removal.js |
| 10 | Hair Loss | G1–G8 | page-hair-loss.php, hair-loss.css, hair-loss.js |
| 11 | Switch Provider | H1–H7 | page-switch-provider.php, switch-provider.css, switch-provider.js |
| 12 | Book Appointment | I1–I10 | page-book-appointment.php, book-appointment.css, book-appointment.js |
| 13 | Team | J1–J5 | page-team.php, team.css |
| 14 | Vaccination pages (×4) | K1–K10 | 4 templates, 4 CSS, 4 JS |
| 15 | Travel destinations (×6) | L1–L6 | 6 templates, 6 CSS |
| 16 | NHS Services | M1 | page-nhs-services.php |
| 17 | Final review & cleanup | — | Fixes only |

**Total: ~60+ files across 17 prompts**
