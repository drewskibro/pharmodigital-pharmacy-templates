# CLAUDE.md — Denton Pharmacy WordPress Theme

This file gives Claude Code (and any developer) the full context needed to work on this project without re-learning the architecture from scratch.

---

## What This Project Is

A custom WordPress theme for **Denton Pharmacy**, an independent UK pharmacy in Denton, Manchester. Built for PharmoDigital. The theme is content-driven via **Advanced Custom Fields (ACF)** — almost no content lives in the WordPress editor. Every section of every page is powered by ACF fields with sensible defaults, so the theme works out of the box and can be customised per client.

**Pharmacy details:** Denton Pharmacy, 14-16 Ashton Road, Denton, Manchester, M34 3EX. Phone: 0161 336 2548. Lead Pharmacist: Ahmed Al-Liabi (GPhC: 2208502). Company Registration: 14519140. GPhC Pharmacy Registration: 1033447.

**Target services:** Weight loss (GLP-1 treatments), travel health & vaccinations, ear wax removal, hair loss, NHS services (Pharmacy First, prescriptions, flu jabs), and smoking cessation.

---

## Source HTML/CSS Reference

The static HTML/CSS designs (Anima-generated) live in a separate repository: `drewskibro/10032026-denton-use-this-one`. These are the source-of-truth designs that the WordPress theme implements. Each page has a corresponding `.html` and `.css` file in the repo root.

---

## Project Structure

```
pharmodigital-pharmacy-templates/
└── denton-pharmacy-theme/                # The WordPress theme (lives in wp-content/themes/)
    ├── style.css                         # Theme metadata only
    ├── functions.php                     # Theme setup, enqueuing, helper functions
    ├── header.php                        # Three-tier navigation (trust bar + top bar + bottom nav)
    ├── footer.php                        # 4-column footer with certifications bar
    ├── index.php                         # Blog listing fallback
    ├── single.php                        # Single blog post
    ├── archive.php                       # Archive/category listing
    ├── page.php                          # Default page template
    ├── 404.php                           # 404 page
    │
    ├── inc/
    │   ├── acf-options.php               # ACF options pages (Pharmacy Settings menu)
    │   └── acf-fields.php                # ALL ACF field group definitions
    │
    ├── page-templates/                   # WordPress page templates
    │   ├── page-home.php                 # Home page — loads 13 sections in order
    │   ├── page-weight-loss.php
    │   ├── page-travel-health.php
    │   ├── page-ear-wax-removal.php
    │   ├── page-hair-loss.php
    │   ├── page-nhs-services.php
    │   ├── page-switch-provider.php
    │   ├── page-book-appointment.php
    │   ├── page-team.php
    │   ├── page-health-hub.php
    │   ├── page-rabies.php
    │   ├── page-hepatitis.php
    │   ├── page-yellow-fever.php
    │   ├── page-typhoid.php
    │   ├── page-travel-thailand.php
    │   ├── page-travel-kenya.php
    │   ├── page-travel-india.php
    │   ├── page-travel-cape-verde.php
    │   ├── page-travel-brazil.php
    │   └── page-travel-vietnam.php
    │
    ├── template-parts/                   # Reusable section components
    │   ├── section-hero.php
    │   ├── section-stats.php
    │   ├── section-nhs-services.php
    │   ├── section-treatments.php
    │   ├── section-pharmacist.php
    │   ├── section-how-it-works.php
    │   ├── section-switching.php
    │   ├── section-revslider.php
    │   ├── section-safe-secure.php
    │   ├── section-health-hub.php
    │   ├── section-location.php
    │   ├── section-testimonials.php
    │   ├── section-sticky-cta.php
    │   ├── article-card.php
    │   └── featured-article-card.php
    │
    └── assets/
        ├── css/
        │   ├── globals.css               # Base styles, variables, shared components
        │   ├── denton-nav.css            # Three-tier navigation styles
        │   ├── blog.css                  # Health Hub listing + single post styles
        │   └── [page-name].css           # One CSS file per page template
        ├── js/
        │   ├── denton-nav.js             # Navigation + search overlay (loaded on all pages)
        │   ├── blog.js                   # Category filtering, FAQ accordion
        │   └── [page-name].js            # One JS file per page template
        └── images/
            └── logo.svg                  # Default logo fallback
```

---

## Design System

### Colour Palette

Denton Pharmacy uses a **blue + green palette** — distinct from the warm cream + terracotta used in Easy Pharmacy.

| Variable | Value | Usage |
|----------|-------|-------|
| `--brand-primary` | `#3f73ae` | Primary blue — nav, buttons, links, accents |
| `--brand-secondary` | `#79bc2e` | Green — success states, secondary accent, icons |
| `--brand-bg` | `#e0e4e5` | Light grey — section backgrounds |
| `--brand-dark` | `#2a507a` | Darker blue — gradient endpoints, contrast |
| `--brand-light` | `#f5f7f8` | Very light grey — content area backgrounds |
| `--text-dark` | `#1a202c` | Dark slate — primary text, headings |
| `--text-gray` | `#4a5568` | Medium gray — body text, descriptions |
| `--text-slate` | `#64748b` | Slate gray — secondary text, captions |
| `--white` | `#ffffff` | White — backgrounds, text on dark |

**Hero-specific blues (deeper for visual hierarchy):**

| Token | Value | Usage |
|-------|-------|-------|
| Hero badge icon bg | `rgba(8, 93, 181, 0.12)` | Light blue circular background |
| Hero badge icon | `#085db5` | Darker blue icon colour |
| Gradient text start | `#054a91` | Dark blue gradient start |
| Gradient text end | `#085db5` | Lighter blue gradient end |
| Trust item icons | `#085db5` | Blue with 0.8 opacity |

### Typography

| Variable | Value | Usage |
|----------|-------|-------|
| `--font-primary` | `'DM Sans', sans-serif` | Body text, general copy |
| `--font-heading` | `'Playfair Display', serif` | Headings (h1–h6), hero titles |
| `--font-accent` | `'Syne', sans-serif` | Decorative text, accent labels |

### Shadows

| Variable | Value |
|----------|-------|
| `--shadow-sm` | `0 1px 2px 0 rgba(0, 0, 0, 0.05)` |
| `--shadow-md` | `0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)` |
| `--shadow-lg` | `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)` |
| `--shadow-xl` | `0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)` |
| `--shadow-2xl` | `0 25px 50px -12px rgba(0, 0, 0, 0.25)` |

All shadows use semi-transparent black (not coloured shadows like Easy Pharmacy's terracotta tints).

### Responsive Breakpoints

Mobile-first with `min-width` media queries:

| Breakpoint | Usage |
|------------|-------|
| `640px` | Tablet start — flex row buttons, two-column layouts |
| `768px` | Tablet full — grid columns, font size increases |
| `1024px` | Desktop — three-column grids, hero 2-col, desktop-only elements visible |
| `1024px–1279px` | Compact nav: `body padding-top: 188px` |
| `1280px+` | Full three-tier nav: `body padding-top: 200px` |
| `< 1024px` | Mobile nav: `body padding-top: 112px` |

### Animations

| Name | Duration | Effect | Used on |
|------|----------|--------|---------|
| `ping` | 1s infinite | Ripple: scale(2) + fade out | Pulse dots in badges |
| `float` | 6–8s infinite | Vertical: translateY(0↔-20px) | Decorative blobs |
| `fadeInUp` | 0.8s ease-out | Entrance: opacity 0→1, translateY(30px→0) | Hero content, filtered cards |
| `pulse-glow` | 4s infinite | Opacity: 0.6↔1 | Visual glow effects |
| `shimmer` | 4s infinite | Bar: translateX(-100%→100%) | Stats bar |

---

## Key Shared CSS Classes

| Class | Purpose |
|-------|---------|
| `.section-container` | Max-width 1400px centered wrapper with horizontal padding |
| `.gradient-text` | Blue gradient text effect (`linear-gradient(135deg, #054a91, #085db5)`) |
| `.hero-accent-text` | Italicized serif text for accent lines in hero sections |
| `.cta-button` | Base button style (pill-shaped, flex, transitions) |
| `.primary-cta` | Blue gradient button (`--brand-primary → --brand-dark`) with shimmer hover |
| `.secondary-cta` | White/outlined button with blue border |
| `.section-badge` | Small eyebrow badge with glassmorphic white background |
| `.pulse-dot` | Animated green pulsing dot (uses `--brand-secondary`) |
| `.rating-badge` | Google rating card (glassmorphic, absolute by default) |
| `.desktop-only` / `.mobile-only` | Responsive visibility |
| `.star-row` | Flex row of 5 gold star icons (`#F4B400`) |

---

## Navigation System (Three-Tier Denton Nav)

The navigation uses a three-tier layout managed by `denton-nav.css` + `denton-nav.js`:

### Structure

```
<nav class="denton-nav">
  ├── .denton-nav-trust-bar      ← Tier 1: GPhC Registered · NHS Partner · 4.9 Google Reviews
  ├── .denton-nav-top            ← Tier 2: Logo + Utility CTAs (phone, NHS, book, search)
  └── .denton-nav-bottom         ← Tier 3: Menu links with mega-menu dropdowns
</nav>
```

### Desktop Behaviour (1024px+)
- All three tiers visible
- Tier 3 has mega-menu dropdowns on hover
- Travel dropdown uses `.denton-dropdown.wide` for 2-column layout (Services + Destinations with flags)
- CTA buttons in Tier 2: phone link, NHS Nominate, Book Consultation, Search
- Scroll effect: `.scrolled` class adds shadow; `.nav-compact` at >80px scroll

### Mobile Behaviour (<1024px)
- Only Tier 2 visible (logo + hamburger toggle)
- Trust bar and bottom nav hidden
- Full-screen drawer slides in from right (`.denton-mobile-menu.active`)
- Accordion sections (`.denton-mobile-accordion`) for Weight Loss, Travel, Services
- Body scroll lock when menu open

### Search Overlay
- Triggered by search button in Tier 2
- Full-screen overlay with keyword search input
- Searches against hardcoded keyword-to-URL map (50+ entries covering all services/destinations)
- Navigates to matching page on submit

### Key Nav CSS Classes

| Class | Purpose |
|-------|---------|
| `.denton-nav` | Fixed nav container |
| `.denton-nav-trust-bar` | Top trust bar with GPhC, NHS, rating |
| `.denton-nav-top` | Logo + utility CTA row |
| `.denton-nav-bottom` | Menu items row |
| `.denton-container` | Nav-specific max-width wrapper |
| `.denton-menu-item` | Individual menu item |
| `.denton-dropdown` | Standard dropdown (hover-triggered) |
| `.denton-dropdown.wide` | Wide 2-column dropdown (Travel) |
| `.denton-destination-link` | Flag + country name link in dropdown |
| `.denton-mobile-menu` | Mobile drawer |
| `.denton-mobile-accordion` | Expandable mobile sections |
| `.denton-book-btn` | Primary booking CTA in nav |
| `.denton-search-btn` | Search trigger button |

### Navigation Phone & Links
- Phone: `0161 336 2548` (`tel:01613362548`)
- NHS Nominate: links to `nhs-services.html`
- Book Consultation: links to `book-appointment.html`

---

## Home Page Section Order

The home page (`page-templates/page-home.php`) loads 13 sections sequentially:

1. **Hero** — Location badge ("Your Local Denton Pharmacy"), headline with `.gradient-text` on key phrases ("Lose Weight", "Travel Safe", "Get NHS Care"), description, 2 CTAs, trust indicators (GPhC Registered, UK Licensed Meds, NHS & Private Care), testimonial card with star rating + result badge, image card with rating badge (4.7 Google rating)

2. **Stats Bar** — 5-metric shimmer bar: 5,000+ Patients Treated, 4.7 Google Rating, 15+ Years Experience, GPhC Fully Registered, Free Discreet Delivery. Icons: `fa-users`, `fa-star`, `fa-award`, `fa-shield-halved`, `fa-truck-fast`

3. **NHS Services** — Badge + title ("Your NHS Community Pharmacy"), 6-card colour-coded grid: NHS Prescriptions (blue), Collection & Delivery (green), Repeat Prescriptions (purple), Pharmacy First (orange), New Medicine Service (pink), NHS Flu Vaccinations (cyan). Each card has icon, badge label, title, description, feature list, CTA. Bottom CTA: phone + "Visit Us in Denton"

4. **Treatments** — Badge with `.pulse-dot` ("Trusted by thousands"), title "Our Most Popular Treatments", 6-card image grid with hover overlay: Weight Loss, Travel Health, Ear Wax Removal, Hair Loss, Smoking Cessation, Pharmacy First. Each links to its service page

5. **Pharmacist** — 2-column: portrait photo with play button overlay (video modal) + experience badge ("15+"), right column: badge ("Your Local Expert"), name "Meet Ahmed Al-Liabi", role "Lead Pharmacist & Independent Prescriber", bio, quote, 3 credentials (icons: `fa-certificate`, `fa-file-signature`, `fa-weight-scale`), CTA

6. **How It Works** — 3-step cards with connectors: Book Online (2 minutes, `fa-laptop-medical`), Speak to Ahmed (Same day, `fa-user-doctor`), Receive Treatment (24h delivery, `fa-box`). Each has numbered circle, icon, title, description, timeframe badge

7. **Switching Provider** — 2-column: left content with badge ("50+ Patients Switched This Month"), title, 3 feature rows (Same-Day Prescriptions, Real Pharmacist Support, Premium Discreet Packaging), trust proof row (50+ switched, 4.7/5 rating, 24h delivery), 2 CTAs. Right column: image card with premium rating badge (4.7 score, GPhC Verified pill)

8. **RevSlider / Travel Banner** — Full-width with backdrop image, dark overlay. Badge "Yellow Fever Approved", title "Protect Your Adventures Across the Globe", 2 buttons. Falls back to static content if Revolution Slider plugin not installed

9. **Safe & Secure** — 2-column: left 3 feature cards (Registered UK Pharmacy, Fully Inspected & Regulated, Approved UK-licensed Treatments), right GPhC registration card with verified badge, Company Reg (14519140), GPhC Number (1033447), Superintendent (Ahmed Al-Liabi, GPhC: 2208502), verify link to pharmacyregulation.org

10. **Health Hub** — Header with "Expert Advice" badge + "View All Articles" link, 3-card article grid with category badges, titles, excerpts, "Read Article" links

11. **Location** — Map background with overlay, floating info card: "Find Denton Pharmacy", 4 details (Address: 14-16 Ashton Road, Denton, Manchester, M34 3EX; Hours: Mon-Fri 9am-6pm, Sat 9am-1pm, Sun Closed; Contact: phone + email; Parking: Free nearby), 2 CTAs. Icons: `fa-map-marker-alt`, `fa-clock`, `fa-phone`, `fa-square-parking`

12. **Testimonials** — Grid of 4 items: 1 large card (Paul Fegan, Travel Clinic), 2 medium cards (Georgia Porter, Travel Vaccinations; Giedrius K., Ear Wax Removal), 1 CTA card with 4.9 Google Rating. Cards have verified badges, star ratings, highlighted quotes, author info, feature checklists

13. **Sticky CTA** — Fixed bottom bar (appears after 30% hero scroll): "Ready to Transform Your Health?", Book Now + Call Us buttons. Closeable via X button

---

## Weight Loss Page Section Order

The Weight Loss page (`page-templates/page-weight-loss.php`) loads 10 sections:

1. **Hero** — Badge, title with `.gradient-text`, description, CTAs, 3-image asymmetric grid (rotated positioning), floating testimonial card
2. **Stats Bar** — Purple background, 4-column grid with glassmorphic icon boxes
3. **Results** — 3-card grid with featured center card (gradient background, large number, stars), disclaimer
4. **Features** — 2-column: image with floating badges (rating, patient count) + 3 feature cards with icons, credentials display
5. **CTA Bar** — Purple gradient bar with shimmer, title, subtitle, white CTA button
6. **Journey Steps** — 4 alternating steps with images, numbered circle badges, floating badges
7. **Calculator** — BMI/weight loss estimator: 2-column (image + form), unit toggle (kg/lbs, cm/feet), BMI result circle, projection card, timeline with fill bars
8. **FAQ** — Numbered accordion (max 800px width), expand/collapse with chevron rotation
9. **Testimonials** — 3-column grid, gradient circle badges (top-mounted), quotes, stars, authors
10. **Final CTA** — Purple gradient with blobs/dots, badges, title, CTAs, trust checks

**CSS prefix:** `.wl-`

---

## Travel Health Page Section Order

The Travel Health page (`page-templates/page-travel-health.php`) loads 9 sections:

1. **Hero** — Full-width background image with dark overlay, all white text, badge, title, CTAs, glassmorphic trust pills
2. **Stats Bar** — Purple background, 4-column with glassmorphic image wrappers
3. **Services** — 5-card grid with images + floating icons (negative margin), hover effects
4. **Vaccinations Grid** — 4-column card grid with icons + names; special yellow fever card (gradient background, white text)
5. **Why Choose Us** — 2-column: image with circular glow + floating badge, 4 feature cards with gradient icons
6. **Process** — 4 alternating steps with images + floating badges (same pattern as weight loss journey)
7. **Popular Destinations** — 4-column card grid with images, dark overlay gradient, destination labels
8. **FAQ** — Premium editorial styling with serif fonts (Playfair Display), numbered items
9. **Final CTA** — Purple gradient with badges, title, CTAs, trust checks

**CSS prefix:** `.travel-`

---

## Ear Wax Removal Page Section Order

The Ear Wax Removal page (`page-templates/page-ear-wax-removal.php`) loads 10 sections:

1. **Hero** — Badge, title, subtitle (purple), description, CTAs, trust items, single rotated image card (-2deg) with floating price badge
2. **Stats Bar** — Purple background, 4-column
3. **Symptoms** — 3-column card grid with icons that scale/rotate on hover
4. **Team** — 2-column card grid (max 1000px), team photos with role badges (green/purple), bios, specialty tags
5. **Comparison Table** — Horizontal scroll table in card wrapper, highlighted column for Denton Pharmacy
6. **Process** — 3 alternating steps with images, time badges, green success badges
7. **Pricing** — 2-column card grid (max 900px), featured card with gradient background, price display, CTAs
8. **Testimonials** — 3-column card grid with quotes, stars, authors
9. **FAQ** — Numbered accordion (max 800px)
10. **Final CTA** — Purple gradient

**CSS prefix:** `.earwax-`

---

## Hair Loss Page Section Order

The Hair Loss page (`page-templates/page-hair-loss.php`) follows a similar structure to Weight Loss:

1. **Hero** — Warm gradient, 2-column with content + visual
2. **Stats Bar** — Purple background, 4-column
3. **Results/Features** — Card grid with metrics
4. **Team/Expertise** — Card layout
5. **Process/Journey** — Alternating steps with images
6. **FAQ** — Numbered accordion with plus/minus icon toggle (unique to this page)
7. **Testimonials** — 3-column grid
8. **Final CTA** — Purple gradient

**CSS prefix:** `.hairloss-`

---

## Switch Provider Page Section Order

The Switch Provider page (`page-templates/page-switch-provider.php`) loads 7 sections:

1. **Hero** — Purple gradient background (no image), white text, badge, title, CTAs, image card
2. **Stats Bar** — Overlaps previous section (negative margin), glassmorphic bar
3. **Comparison** — 3-card grid: National Providers vs Denton Pharmacy vs Benefits
4. **Comparison Detail** — Extended breakdown with more detailed feature comparison
5. **Benefits** — Feature cards grid
6. **Process** — Steps for switching
7. **Final CTA** — Purple gradient with CTAs and trust elements

**CSS prefix:** `.switch-`

---

## NHS Services Page

The NHS Services page (`page-templates/page-nhs-services.php`) is content-focused with no page-specific CSS file — it uses only shared `globals.css` classes:

1. **Hero** — Standard hero using shared `.hero-section` classes
2. **Stats** — 4-stat display
3. **NHS Services Grid** — Card-based layout with the 6 NHS service cards (same component as homepage section 3)
4. **How It Works** — 3-step process (Book → Consult → Collect)
5. **Location** — Address, hours, map, contact

---

## Book Appointment Page Section Order

The Book Appointment page (`page-templates/page-book-appointment.php`) loads 10 sections:

1. **Hero** — Purple gradient background, 2-column: left content (badge, title, CTAs, trust pills) + right rotated image card (-2deg) with floating testimonial card
2. **How It Works** — 3-card grid with numbered badges, connecting arrows between cards (desktop)
3. **Stats Bar** — Purple background, 4-column with circular icon containers
4. **Priority Services** — 3-column featured service cards with images, "Popular" badges, floating icons, prices, refund badges, CTAs
5. **Additional Services** — 3-column smaller service cards with icons, prices, CTAs
6. **Amelia Booking Widget** — Semi-transparent purple background, placeholder for Amelia booking integration
7. **Testimonials** — 3-column cards with quotes, authors, verified badges
8. **FAQ** — Accordion with numbered badges, one-at-a-time expansion
9. **Final CTA** — Purple gradient with hours info pill
10. **Footer**

**CSS prefix:** `.book-`

---

## Team Page Section Order

The Team page (`page-templates/page-team.php`) loads 5 sections:

1. **Hero** — Animated purple blobs + dot grid, gradient background, badge ("MEET THE EXPERTS"), title
2. **Stats Bar** — Floating glassmorphic bar (negative margin overlap), 4 stats: 30+ Years Experience, GPhC Registered, Expert Prescribers, Family Run Business
3. **Team Grid** — 3-card grid: Ahmed Al-Liabi (Founder), Jignasa Modhvadia (Director), Baljender Nagi (Senior). Each card: image (450px height) with dark overlay, badge (colour-coded: gradient purple / white / semi-transparent), name, role, credential badges, bio, specialty tags
4. **Values** — 4-column cards: Patient-First Care, Continuous Learning, Community Trust, Innovation. Icons with hover scale/rotate animation
5. **Final CTA** — Purple gradient with badge pills (30+ Years, GPhC, Patient-First Care), CTAs, trust checks

**CSS prefix:** `.team-`

---

## Health Hub Page (Blog Listing)

The Health Hub page (`page-templates/page-health-hub.php`) uses server-side filtering and pagination:

1. **Hero** — Badge ("HEALTH HUB"), title with `.gradient-text`, category filter pills (All Articles, Weight Loss, Travel Health, Ear Wax Removal, Hair Loss, Pharmacy Advice)
2. **Featured Article** — Page 1 only: large featured card (60% content / 40% image on desktop), meta row, title, excerpt, author info
3. **Articles Grid** — 3-column responsive grid (9 articles per page), each card: image with category badge overlay, title, excerpt, reading time, date
4. **CTA** — Purple gradient section with booking CTA

**Filter logic:** Client-side JS (`blog.js`) — `filterArticles(category)` shows/hides cards based on `.healthhub-category-badge-overlay` text match, with `fadeInUp` animation.

**CSS prefix:** `.healthhub-`

---

## Vaccination Pages (Shared Template Pattern)

All 4 vaccination pages follow an identical section structure with page-specific CSS prefixes:

| Page | CSS Prefix | File |
|------|-----------|------|
| Rabies | `.rabies-` | `rabies.html` / `rabies.css` |
| Hepatitis A & B | `.hep-` | `hepatitis.html` / `hepatitis.css` |
| Yellow Fever | `.yellowfever-` | `yellow-fever.html` / `yellow-fever.css` |
| Typhoid | `.typhoid-` | `typhoid.html` / `typhoid.css` |

### Common Vaccination Section Order (10 sections)

1. **Breadcrumb** — Home / Travel Health / [Vaccine Name]
2. **Hero** — Full-height background image with overlay gradient, hero line (decorative 60px white bar), label badge, white title, description, CTAs, 3 glassmorphic trust badges
3. **Protection/Certification** — 2-column: image card with overlay name tag + badge box, subtitle, description, feature cards, action buttons
4. **Stats Bar** — Purple gradient, 4-5 stat items with dividers
5. **About/Disease Info** — Warm cream background, 2-column: portrait image card + 2x2 info card grid. Optional critical callout box (red/pink for dangerous diseases)
6. **Who Needs It** — 2-column cards: "Highly Recommended" (green bg, green badge) + "Consider If" (yellow bg, orange badge), with checklists
7. **Risk Zones** — Warm cream background, 2-column: High Risk vs Moderate Risk areas, destination images, country lists with coloured top borders
8. **Details** — 3x2 grid of detail cards with icons, hover effects
9. **FAQ** — Numbered accordion with `.travel-faq-active` toggle class
10. **Final CTA** — Purple gradient with dot overlay, badges, CTAs

### Vaccination Page Unique Elements

| Page | Unique Feature |
|------|---------------|
| Rabies | Critical callout: "100% Fatal Once Symptoms Appear" |
| Hepatitis | Dual vaccine options (Hep A vs B vs Combined Twinrix) |
| Yellow Fever | Yellow/orange gradient stats bar (not purple); certification focus; nav offset handling |
| Typhoid | Injection vs Oral Capsules (Vivotif) options |

---

## Travel Destination Pages (Shared Template Pattern)

All 6 travel destination pages follow a similar pattern:

| Page | CSS File | Key Vaccines |
|------|----------|-------------|
| Thailand | `travel-thailand.css` | Hepatitis A, Typhoid, Malaria prevention |
| Kenya | `travel-kenya.css` | Yellow Fever, Malaria, Typhoid |
| India | `travel-india.css` | Hepatitis A & B, Typhoid, Rabies |
| Cape Verde | `travel-cape-verde.css` | Hepatitis A, Typhoid |
| Brazil | `travel-brazil.css` | Yellow Fever, Hepatitis A, Typhoid |
| Vietnam | `travel-vietnam.css` | Hepatitis A & B, Typhoid, Japanese Encephalitis |

All use the `denton-nav` three-tier navigation with the wide Travel dropdown showing destinations grid.

---

## Footer Structure

Dark slate background (`#0f172a`) with radial gradient overlay:

```
.footer-section
├── .footer-main (4-column grid: 2fr 1fr 1fr 1.5fr)
│   ├── .footer-brand       — Logo, tagline, 4 social links (Facebook, Instagram, Twitter, LinkedIn)
│   ├── Our Services         — 6 links to service pages
│   ├── Quick Links           — 6 links (About, Team, Health Hub, Contact, etc.)
│   └── Get in Touch          — Contact items with icons (address, phone, email, hours)
├── .footer-certifications   — 3 badges: GPhC Registered, Company Reg 14519140, Established Since [year]
└── .footer-bottom           — Copyright + legal links (Privacy, Terms, Cookies)
```

---

## How ACF Fields Work in This Theme

### Two Scopes

- **Options fields** (`ep_option()`) — Global settings shared across all pages. Stored on ACF options pages under WP Admin > Pharmacy Settings.
- **Page fields** (`ep_field()`) — Per-page overrides. Stored on individual page edit screens.

### The Pattern

Every template part follows this pattern:
```php
// 1. Try page-level field first, then fall back to options, then hardcoded default
$value = ep_field( 'field_name', 'Default text' );

// 2. For options-only fields
$value = ep_option( 'field_name', 'Default text' );

// 3. For images: page field → options fallback
$image_id = ep_field( 'some_image' );
if ( ! $image_id ) {
    $image_id = ep_option( 'some_image' );
}
$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'medium_large' ) : '';
```

### ACF Options Pages (WP Admin > Pharmacy Settings)

| Sub-page | Slug | What it controls |
|----------|------|-----------------|
| Branding | `branding` | Name, logo, tagline, Google rating |
| Contact & Location | `contact-location` | Phone, email, address, hours, map, parking |
| Registration & Compliance | `registration-compliance` | GPhC number, company reg, superintendent |
| Social Media | `social-media` | Facebook, Instagram, Twitter, LinkedIn URLs |
| Navigation | `navigation` | Menu items: show/hide toggles, labels, page links, dropdown sub-links |

### ACF Field Registration

All fields are registered in `inc/acf-fields.php` using `acf_add_local_field_group()`. The file is organised into sections:

- **A1–A7** — Options page field groups (global settings)
- **A8–A9** — Navigation field groups (three-tier menu items & dropdown sub-links)
- **B1–B13** — Home page section field groups (one per section)
- **C1** — Blog post fields (reading time, author/reviewer photo overrides)
- **D1–D10** — Weight Loss page field groups
- **E1–E9** — Travel Health page field groups
- **F1–F10** — Ear Wax Removal page field groups
- **G1–G8** — Hair Loss page field groups
- **H1–H7** — Switch Provider page field groups
- **I1–I10** — Book Appointment page field groups
- **J1–J5** — Team page field groups
- **K1–K10** — Vaccination page field groups (shared structure, per-page overrides)
- **L1–L6** — Travel Destination page field groups
- **M1** — NHS Services page field groups

**Naming convention for field keys:** `field_dp_[context]_[name]`
- Example: `field_dp_home_hero_title_line_1`, `field_dp_location_map_image`

**Naming convention for field names (what you use in code):** `[section]_[descriptive_name]`
- Example: `hero_badge_text`, `pharmacist_image`, `location_map_image`

**Note:** This theme uses the `dp_` prefix (Denton Pharmacy), not the `ep_` prefix used in Easy Pharmacy.

---

## Helper Functions Reference

| Function | Returns | Default |
|----------|---------|---------|
| `dp_option( $field, $default )` | ACF option field value | `''` |
| `dp_field( $field, $default )` | ACF page field value | `''` |
| `dp_pharmacy_name()` | Pharmacy name | `'Denton Pharmacy'` |
| `dp_phone()` | Phone number | `'0161 336 2548'` |
| `dp_phone_link()` | Digits-only phone for `tel:` links | `'01613362548'` |
| `dp_booking_url()` | Booking page permalink | `/book-appointment/` |
| `dp_logo_url()` | Logo URL (ACF → theme mod → SVG fallback) | `logo.svg` |

---

## CSS Architecture

### How Page-Specific CSS Is Loaded

`functions.php` conditionally enqueues CSS/JS based on `is_page_template()`:
```php
if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
    wp_enqueue_style( 'denton-weight-loss', ... );
    wp_enqueue_script( 'denton-weight-loss-js', ... );
}
```

**Blog assets** (`blog.css` + `blog.js`) are loaded on Health Hub, archives, index, and single posts.

**Always loaded:** Google Fonts (DM Sans, Playfair Display, Syne), Font Awesome 6.4.0, `globals.css`, `denton-nav.css`, `denton-nav.js`.

### CSS Prefix Convention

Each page has its own CSS prefix to avoid class name collisions:

| Page | Prefix | Example |
|------|--------|---------|
| Home (hero/sections) | `.hero-`, `.stats-`, `.nhs-`, `.treatments-`, etc. | `.hero-section`, `.nhs-card` |
| Weight Loss | `.wl-` | `.wl-hero-section`, `.wl-faq-item` |
| Travel Health | `.travel-` | `.travel-hero-section`, `.travel-vaccine-card` |
| Ear Wax Removal | `.earwax-` | `.earwax-hero-section`, `.earwax-pricing-card` |
| Hair Loss | `.hairloss-` | `.hairloss-hero-section`, `.hairloss-faq-item` |
| Switch Provider | `.switch-` | `.switch-hero-section`, `.switch-comparison-card` |
| Book Appointment | `.book-` | `.book-hero-section`, `.book-service-card` |
| Team | `.team-` | `.team-hero-section`, `.team-member-card` |
| Health Hub (blog) | `.healthhub-` | `.healthhub-hero-section`, `.healthhub-article-card` |
| Rabies | `.rabies-` | `.rabies-hero-section`, `.rabies-faq-item` |
| Hepatitis | `.hep-` | `.hep-hero-section`, `.hep-faq-item` |
| Yellow Fever | `.yellowfever-` | `.yellowfever-hero-section`, `.yellowfever-faq-item` |
| Typhoid | `.typhoid-` | `.typhoid-hero-section`, `.typhoid-faq-item` |
| Navigation | `.denton-` | `.denton-nav`, `.denton-dropdown` |

---

## JavaScript Architecture

### Navigation (`denton-nav.js`) — Loaded on all pages

- **Search overlay:** Opens full-screen search, keyword-based lookup against hardcoded URL map
- **Mobile menu:** Toggle drawer, accordion sections, body scroll lock
- **Scroll effects:** `.scrolled` class at >10px, `.nav-compact` at >80px
- **Keyboard:** Escape closes search/menu
- **Resize:** Auto-close mobile menu at ≥1024px

### FAQ Accordion Pattern (Shared across pages)

Every page with FAQs has a `toggleFAQ(button)` function:
```javascript
function toggleFAQ(button) {
    const item = button.closest('.[prefix]-faq-item');
    const isActive = item.classList.contains('[active-class]');
    // Close all
    document.querySelectorAll('.[prefix]-faq-item').forEach(faq => {
        faq.classList.remove('[active-class]');
    });
    // Open clicked if was closed
    if (!isActive) {
        item.classList.add('[active-class]');
    }
}
```

| Page | Item class | Active class |
|------|-----------|-------------|
| Weight Loss | `.wl-faq-item` | `.wl-faq-active` |
| Travel Health | `.travel-faq-item` | `.travel-faq-active` |
| Ear Wax Removal | `.earwax-faq-item` | `.active` |
| Hair Loss | `.hairloss-faq-item` | `.active` (+ icon toggle `fa-plus`↔`fa-minus`) |
| Book Appointment | `.book-faq-item` | `.active` |
| Rabies | `.rabies-faq-item` | `.travel-faq-active` |
| Hepatitis | `.hep-faq-item` | `.travel-faq-active` |
| Yellow Fever | `.yellowfever-faq-item` | `.travel-faq-active` |
| Typhoid | `.typhoid-faq-item` | `.travel-faq-active` |

### Weight Loss Calculator (`weight-loss.js`)

Interactive BMI/weight loss estimator:
- Supports kg/cm and stone/feet unit toggles
- Conversion: stone × 6.35029 = kg, feet × 30.48 = cm
- BMI calculation: weight(kg) / height(m)²
- Projects 10-15% weight loss range
- Displays BMI number, category (Underweight/Normal/Overweight/Obese), target weight range
- Smooth scrolls to `#calculatorResults` section

### Blog Category Filter (`blog.js`)

- `filterArticles(category)` — shows/hides `.healthhub-article-card` elements
- Matches `.healthhub-category-badge-overlay` text content
- "All Articles" shows everything
- Applies `fadeInUp 0.5s ease forwards` animation via reflow trick

### Book Appointment (`book-appointment.js`)

- `toggleFAQ(button)` — FAQ accordion
- `scrollToBooking()` — Smooth scroll to `#booking-widget` (Amelia integration)

---

## Hero Section Design Language

Hero sections across the site follow two patterns:

### Pattern A: Light Background (Home, Weight Loss, Ear Wax, Hair Loss)
- Background: `--brand-light` (`#f5f7f8`)
- Decorative blobs: `rgba(63, 115, 174, 0.1)` (blue) + `rgba(121, 188, 46, 0.1)` (green), blurred
- Title: dark slate (`#0f172a`), `.gradient-text` uses blue gradient
- CTAs: primary blue gradient, secondary white outline
- Trust pills: glassmorphic white, blue icons

### Pattern B: Dark/Gradient Background (Travel Health, Vaccinations, Book Appointment, Switch Provider)
- Background: full-width image with dark overlay OR purple gradient
- All white text
- Trust badges: glassmorphic with white text
- CTAs: white primary, outline secondary

### Quick Checklist for New Hero Sections
1. Choose Pattern A (light) or Pattern B (dark) based on page type
2. Use `.gradient-text` for key phrases (blue gradient: `#054a91 → #085db5`)
3. Include trust indicators (GPhC, NHS, ratings)
4. Add decorative blobs with brand colours at low opacity
5. Include testimonial card or image card with rating badge
6. Responsive: center-aligned single column on mobile, 2-column on desktop

---

## Icons

The theme uses **Font Awesome 6.4.0** (CDN) plus inline SVGs for navigation. Common icons:

- `fa-map-marker-alt` — Address
- `fa-clock` — Hours / timeframes
- `fa-phone` — Contact
- `fa-square-parking` — Parking
- `fa-arrow-right` — CTA buttons
- `fa-diamond-turn-right` — Directions
- `fa-star` — Ratings
- `fa-shield-halved` — Trust/security
- `fa-users` — Patient count
- `fa-award` — Experience
- `fa-truck-fast` — Delivery
- `fa-laptop-medical` — Online booking
- `fa-user-doctor` — Pharmacist
- `fa-box` — Treatment delivery
- `fa-certificate` — Credentials
- `fa-check-circle` — Trust items, checklists

---

## Deployment Pipeline (GitHub Actions → Kinsta)

### How It Works

The theme auto-deploys to Kinsta whenever code is pushed to `main`. The workflow lives at `.github/workflows/deploy-to-kinsta.yml`.

**Architecture:** The GitHub Actions runner checks out the repo, then uses SCP to copy files directly to Kinsta. Theme files are never cloned on the Kinsta server.

### Workflow Steps

1. **Checkout** — `actions/checkout@v4`
2. **SCP** — `appleboy/scp-action@v0.1.7` copies `denton-pharmacy-theme/` to `~/public/wp-content/themes/`
3. **Verify** — `appleboy/ssh-action@v1` confirms files landed

### Required GitHub Secrets

| Secret | What it is |
|--------|-----------|
| `KINSTA_SSH_HOST` | Kinsta SSH hostname |
| `KINSTA_SSH_USER` | Kinsta SSH username |
| `KINSTA_SSH_PASSWORD` | Kinsta SSH password |
| `KINSTA_SSH_PORT` | Kinsta SSH port |

### Key Rules
- **Never `git clone` on Kinsta** — no GitHub credentials on server
- **SCP source must be `denton-pharmacy-theme/`** (the subfolder), not the repo root
- **Use `~/public/...` paths** — never hardcode Kinsta site IDs
- **Branch protection** — push to feature branches, merge to `main` via PR

---

## Known CSS Gotchas

### Three-Tier Nav Body Padding

The body needs different `padding-top` values depending on viewport width to clear the fixed navigation:

| Viewport | Body padding-top | Why |
|----------|-----------------|-----|
| < 1024px | `112px` | Only Tier 2 (logo bar) visible |
| 1024px–1279px | `188px` | Trust bar + top bar + compact bottom nav |
| 1280px+ | `200px` | Full three-tier nav |

**Symptom if broken:** Hero content hidden behind or overlapping with the navigation.

### Decorative Overlays

Any `position: absolute; inset: 0` overlay (e.g. `.revslider-overlay`, hero overlays) must have `pointer-events: none` to avoid blocking clicks.

### Stats Bar Overlap Pattern

Some pages (Team, Switch Provider) use negative `margin-top` on the stats bar to overlap the previous section. This requires `position: relative; z-index: 20` on the stats bar.

### Glassmorphism Browser Support

Glassmorphic components use `backdrop-filter: blur()` which requires the `-webkit-` prefix for Safari:
```css
backdrop-filter: blur(12px);
-webkit-backdrop-filter: blur(12px);
```

---

## Known ACF Gotchas

### `dp_option()` / `dp_field()` and Falsy Values

These helpers use strict null/empty-string checks, NOT loose truthiness:
```php
function dp_option( $field_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $field_name, 'option' );
        if ( $value === null || $value === '' ) {
            return $default;
        }
        return $value;
    }
    return $default;
}
```

**Never change these helpers to use `empty()`, `!$value`, or the `?:` shorthand.** ACF `true_false` fields return integer `0` for "No" — loose checks would always return the default.

### Image Fields Must Use `type => 'image'`, Never `type => 'url'`

Every ACF image field must be `'type' => 'image'` with `'return_format' => 'id'`. This gives clients the Media Library picker. Never use `'type' => 'url'` (renders a plain text input).

### Shared Template Parts and Field Group Location Rules

Template parts loaded via `get_template_part()` use `dp_field()` to read page-level ACF fields. The field groups must include the page template in their location rules, or `dp_field()` returns null and hardcoded defaults display.

---

## How To: Common Tasks

### Add a New Page Template

1. Create `page-templates/page-newpage.php` with template header comment:
   ```php
   <?php
   /**
    * Template Name: New Page
    * @package Denton_Pharmacy
    */
   ```
2. Create `assets/css/newpage.css` for page-specific styles (use a unique CSS prefix)
3. Create `assets/js/newpage.js` if interactive behaviour needed
4. Add the enqueue conditional in `functions.php`
5. Register ACF fields in `inc/acf-fields.php`

### Add a New Home Page Section

1. Create `template-parts/section-newsection.php`
2. Use `dp_field()` / `dp_option()` to pull content
3. Add `get_template_part()` call in `page-templates/page-home.php`
4. Register ACF fields in `inc/acf-fields.php`
5. Add CSS to `globals.css` or a new file

### Add a New Vaccination Page

1. Copy an existing vaccination page template (e.g. `page-rabies.php`)
2. Change the CSS prefix (e.g. `.newvaccine-`)
3. Create matching CSS file
4. Register ACF fields following the K-series pattern
5. Update navigation dropdown with new link

### Customise for a New Client

1. Update ACF options: Pharmacy Settings > Branding (name, logo)
2. Update ACF options: Contact & Location (address, phone, email, hours)
3. Update ACF options: Registration & Compliance (GPhC number, company reg, superintendent)
4. Update ACF options: Navigation (menu items, labels, links)
5. Upload images via ACF fields on page edit screens

---

## WordPress Requirements

- **PHP:** 7.4+
- **WordPress:** 5.9+
- **Required plugin:** Advanced Custom Fields PRO (options pages, repeaters, flexible content)
- **Optional plugin:** Revolution Slider (for travel banner; static fallback if not installed)
- **Optional plugin:** Amelia (for booking widget on Book Appointment page)
- **Editor:** Gutenberg auto-disabled for custom page templates. Blog posts use default editor

---

## Key Design Decisions

- **Blue + green palette** (not warm/terracotta) — reflects Denton Pharmacy's brand, conveying trust (blue) and vitality (green)
- **Three-tier navigation** — trust bar + utility bar + menu, providing more space for CTAs and trust signals than a single-tier nav
- **Denton-specific nav** (`denton-nav.css/js`) — separate from the generic nav system, includes search overlay with keyword mapping
- **No Gutenberg on page templates** — ACF-only editing for clean experience
- **Defaults everywhere** — every ACF field has a hardcoded default
- **Page-specific CSS prefixes** — prevents class name collisions between pages
- **FAQ accordion pattern** — consistent `toggleFAQ()` function across all pages with page-specific class names
- **Mobile-first** — CSS uses `min-width` breakpoints; desktop enhancements via `@media (min-width: 1024px)`
- **Glassmorphism throughout** — badges, nav, rating cards all use `backdrop-filter: blur()` with semi-transparent white backgrounds

---

## Git Workflow

- Push to feature branches, merge to `main` via PR (branch protection enforced)
- Merging to `main` triggers automatic deployment to Kinsta
- Commit messages should describe the *why*, not just the *what*
- Each commit should be a logical, self-contained change
