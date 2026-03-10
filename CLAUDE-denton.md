# CLAUDE-denton.md — Denton Pharmacy Client-Specific Documentation

> **Read `CLAUDE.md` first** for the shared PharmoDigital architecture (ACF patterns, helper function rules, deployment pipeline, CSS conventions). This file covers only Denton Pharmacy-specific details.

---

## Client Details

- **Theme folder:** `denton-pharmacy-theme/`
- **Helper prefix:** `dp_option()`, `dp_field()`
- **Field key prefix:** `field_dp_[context]_[name]`
- **Default pharmacy name:** Denton Pharmacy
- **Address:** 14-16 Ashton Road, Denton, Manchester, M34 3EX
- **Phone:** 0161 336 2548 (`tel:01613362548`)
- **Lead Pharmacist:** Ahmed Al-Liabi (GPhC: 2208502)
- **Company Registration:** 14519140
- **GPhC Pharmacy Registration:** 1033447
- **Navigation:** Three-tier (trust bar + utility bar + menu bar)
- **Nav files:** `denton-nav.css` + `denton-nav.js`

---

## Source HTML/CSS Reference

The static HTML/CSS designs (Anima-generated) live in: `drewskibro/10032026-denton-use-this-one`. Each page has a corresponding `.html` and `.css` file in the repo root.

---

## Design System

### Colour Palette — Blue + Green

Denton Pharmacy uses a **cool blue + green palette** — distinct from Easy Pharmacy's warm cream + terracotta.

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

### Hero-Specific Blues (Deeper for Visual Hierarchy)

| Token | Value | Usage |
|-------|-------|-------|
| Hero badge icon bg | `rgba(8, 93, 181, 0.12)` | Light blue circular background |
| Hero badge icon | `#085db5` | Darker blue icon colour |
| Gradient text start | `#054a91` | Dark blue gradient start |
| Gradient text end | `#085db5` | Lighter blue gradient end |
| Trust item icons | `#085db5` | Blue with 0.8 opacity |

### Shadows — Neutral Black

All shadows use semi-transparent black (not coloured like Easy Pharmacy's terracotta tints):

| Variable | Value |
|----------|-------|
| `--shadow-sm` | `0 1px 2px 0 rgba(0, 0, 0, 0.05)` |
| `--shadow-md` | `0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)` |
| `--shadow-lg` | `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)` |
| `--shadow-xl` | `0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)` |
| `--shadow-2xl` | `0 25px 50px -12px rgba(0, 0, 0, 0.25)` |

### Key Shared CSS Classes (Denton-Specific Overrides)

| Class | Denton Styling |
|-------|---------------|
| `.gradient-text` | Blue gradient: `linear-gradient(135deg, #054a91, #085db5)` |
| `.hero-accent-text` | Italicized serif text for accent lines |
| `.primary-cta` | Blue gradient: `--brand-primary → --brand-dark` with shimmer hover |
| `.secondary-cta` | White/outlined with blue border |
| `.pulse-dot` | Green (`--brand-secondary`) |
| `.star-row` | 5 gold star icons (`#F4B400`) |

---

## Navigation System (Three-Tier Denton Nav)

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
- Searches against hardcoded keyword-to-URL map (50+ entries)
- Navigates to matching page on submit
- Keyboard: Escape closes search/menu
- Resize: Auto-close mobile menu at ≥1024px

### Nav CSS Classes

| Class | Purpose |
|-------|---------|
| `.denton-nav` | Fixed nav container |
| `.denton-nav-trust-bar` | Top trust bar |
| `.denton-nav-top` | Logo + utility CTA row |
| `.denton-nav-bottom` | Menu items row |
| `.denton-container` | Nav-specific max-width wrapper |
| `.denton-menu-item` | Individual menu item |
| `.denton-dropdown` | Standard dropdown |
| `.denton-dropdown.wide` | Wide 2-column dropdown (Travel) |
| `.denton-destination-link` | Flag + country name link |
| `.denton-mobile-menu` | Mobile drawer |
| `.denton-mobile-accordion` | Expandable mobile sections |
| `.denton-book-btn` | Primary booking CTA |
| `.denton-search-btn` | Search trigger button |

### Three-Tier Nav Body Padding

| Viewport | Body padding-top | Why |
|----------|-----------------|-----|
| < 1024px | `112px` | Only Tier 2 visible |
| 1024px–1279px | `188px` | Trust bar + top bar + compact bottom nav |
| 1280px+ | `200px` | Full three-tier nav |

**Symptom if broken:** Hero content hidden behind or overlapping with the navigation.

---

## Hero Section Design Language

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

## Page Templates & Section Orders

### Home Page (13 sections)

1. **Hero** — Location badge ("Your Local Denton Pharmacy"), headline with `.gradient-text` ("Lose Weight", "Travel Safe", "Get NHS Care"), 2 CTAs, trust indicators (GPhC, UK Licensed, NHS & Private), testimonial card, image card with 4.7 rating badge
2. **Stats Bar** — 5-metric shimmer bar: 5,000+ Patients, 4.7 Rating, 15+ Years, GPhC Registered, Free Delivery
3. **NHS Services** — 6-card colour-coded grid: Prescriptions (blue), Collection (green), Repeat (purple), Pharmacy First (orange), New Medicine (pink), Flu Jabs (cyan)
4. **Treatments** — 6-card image grid: Weight Loss, Travel Health, Ear Wax, Hair Loss, Smoking Cessation, Pharmacy First
5. **Pharmacist** — Ahmed Al-Liabi: photo with video modal + experience badge ("15+"), credentials, quote
6. **How It Works** — 3 steps: Book Online, Speak to Ahmed, Receive Treatment
7. **Switching Provider** — 2-column: features + image card with 4.7 rating badge
8. **RevSlider / Travel Banner** — "Yellow Fever Approved" badge, static fallback
9. **Safe & Secure** — GPhC card: Company Reg 14519140, GPhC 1033447, Superintendent Ahmed Al-Liabi
10. **Health Hub** — 3-card article grid
11. **Location** — 14-16 Ashton Road, Mon-Fri 9am-6pm, Sat 9am-1pm, Sun Closed
12. **Testimonials** — 4 items: Paul Fegan, Georgia Porter, Giedrius K., CTA card (4.9 rating)
13. **Sticky CTA** — Fixed bottom bar after 30% hero scroll

### Weight Loss Page (10 sections)

1. **Hero** — Badge, title, CTAs, 3-image asymmetric grid, floating testimonial
2. **Stats Bar** — Purple background, 4-column glassmorphic
3. **Results** — 3-card grid with featured center card
4. **Features** — 2-column: image + 3 feature cards
5. **CTA Bar** — Purple gradient with shimmer
6. **Journey Steps** — 4 alternating steps
7. **Calculator** — BMI/weight loss estimator
8. **FAQ** — Numbered accordion (max 800px)
9. **Testimonials** — 3-column grid
10. **Final CTA** — Purple gradient

**CSS prefix:** `.wl-`

### Travel Health Page (9 sections)

1. **Hero** — Full-width background image, dark overlay, white text, glassmorphic trust pills
2. **Stats Bar** — Purple background, 4-column
3. **Services** — 5-card grid with floating icons
4. **Vaccinations Grid** — 4-column; yellow fever card has gradient background
5. **Why Choose Us** — 2-column: image + 4 feature cards
6. **Process** — 4 alternating steps
7. **Popular Destinations** — 4-column card grid
8. **FAQ** — Serif font styling (Playfair Display)
9. **Final CTA** — Purple gradient

**CSS prefix:** `.travel-`

### Ear Wax Removal Page (10 sections)

1. **Hero** — Badge, title, subtitle (purple), rotated image card (-2deg) with price badge
2. **Stats Bar** — Purple background, 4-column
3. **Symptoms** — 3-column icons with scale/rotate hover
4. **Team** — 2-column card grid (max 1000px), role badges
5. **Comparison Table** — Horizontal scroll, highlighted Denton column
6. **Process** — 3 alternating steps
7. **Pricing** — 2-column, featured card with gradient
8. **Testimonials** — 3-column
9. **FAQ** — Numbered accordion
10. **Final CTA** — Purple gradient

**CSS prefix:** `.earwax-`

### Hair Loss Page (8 sections)

1. **Hero** — Warm gradient, 2-column
2. **Stats Bar** — Purple background, 4-column
3. **Results/Features** — Card grid with metrics
4. **Team/Expertise** — Card layout
5. **Process/Journey** — Alternating steps
6. **FAQ** — Plus/minus icon toggle (unique to this page)
7. **Testimonials** — 3-column
8. **Final CTA** — Purple gradient

**CSS prefix:** `.hairloss-`

### Switch Provider Page (7 sections)

1. **Hero** — Purple gradient, white text, image card
2. **Stats Bar** — Negative margin overlap, glassmorphic
3. **Comparison** — 3-card grid
4. **Comparison Detail** — Extended breakdown
5. **Benefits** — Feature cards
6. **Process** — Steps for switching
7. **Final CTA** — Purple gradient

**CSS prefix:** `.switch-`

### NHS Services Page (5 sections, no page-specific CSS)

1. **Hero** — Shared `.hero-section` classes
2. **Stats** — 4-stat display
3. **NHS Services Grid** — Same 6-card component as homepage
4. **How It Works** — Book → Consult → Collect
5. **Location** — Address, hours, map

### Book Appointment Page (10 sections)

1. **Hero** — Purple gradient, rotated image card (-2deg), floating testimonial
2. **How It Works** — 3 cards with connecting arrows
3. **Stats Bar** — Purple, 4-column, circular icons
4. **Priority Services** — 3-column featured cards with prices
5. **Additional Services** — 3-column smaller cards
6. **Amelia Booking Widget** — Integration placeholder
7. **Testimonials** — 3-column
8. **FAQ** — Numbered badges, one-at-a-time
9. **Final CTA** — Purple gradient with hours pill
10. **Footer**

**CSS prefix:** `.book-`

### Team Page (5 sections)

1. **Hero** — Animated purple blobs, dot grid, gradient
2. **Stats Bar** — Floating glassmorphic, negative margin
3. **Team Grid** — 3 cards: Ahmed Al-Liabi (Founder), Jignasa Modhvadia (Director), Baljender Nagi (Senior)
4. **Values** — 4-column: Patient-First, Learning, Trust, Innovation
5. **Final CTA** — Purple gradient with badge pills

**CSS prefix:** `.team-`

### Health Hub (Blog Listing)

1. **Hero** — Badge, title, category filter pills (client-side JS filtering)
2. **Featured Article** — Page 1 only, large card
3. **Articles Grid** — 3-column, 9 per page
4. **CTA** — Purple gradient

**CSS prefix:** `.healthhub-`

---

## Vaccination Pages (Shared Template, 4 Pages)

| Page | CSS Prefix | Unique Feature |
|------|-----------|----------------|
| Rabies | `.rabies-` | Critical callout: "100% Fatal Once Symptoms Appear" |
| Hepatitis A & B | `.hep-` | Dual vaccine options (Hep A vs B vs Combined Twinrix) |
| Yellow Fever | `.yellowfever-` | Yellow/orange gradient stats bar; certification focus |
| Typhoid | `.typhoid-` | Injection vs Oral Capsules (Vivotif) options |

### Common Section Order (10 sections)

1. **Breadcrumb** — Home / Travel Health / [Vaccine Name]
2. **Hero** — Full-height background, overlay gradient, decorative white bar, glassmorphic trust badges
3. **Protection/Certification** — 2-column: image card + badge box, feature cards
4. **Stats Bar** — Purple gradient, 4-5 stats with dividers
5. **About/Disease Info** — Warm cream, 2-column: portrait + 2x2 info grid. Optional critical callout
6. **Who Needs It** — 2-column: "Highly Recommended" (green) + "Consider If" (yellow)
7. **Risk Zones** — High Risk vs Moderate Risk, destination images, country lists
8. **Details** — 3x2 grid of detail cards
9. **FAQ** — Numbered accordion with `.travel-faq-active`
10. **Final CTA** — Purple gradient with dot overlay

---

## Travel Destination Pages (6 Pages)

| Page | CSS File | Key Vaccines |
|------|----------|-------------|
| Thailand | `travel-thailand.css` | Hepatitis A, Typhoid, Malaria |
| Kenya | `travel-kenya.css` | Yellow Fever, Malaria, Typhoid |
| India | `travel-india.css` | Hepatitis A & B, Typhoid, Rabies |
| Cape Verde | `travel-cape-verde.css` | Hepatitis A, Typhoid |
| Brazil | `travel-brazil.css` | Yellow Fever, Hepatitis A, Typhoid |
| Vietnam | `travel-vietnam.css` | Hepatitis A & B, Typhoid, Japanese Encephalitis |

---

## ACF Field Group Organisation

| Series | Scope | Content |
|--------|-------|---------|
| **A1–A7** | Options | Global settings |
| **A8–A9** | Navigation | Three-tier menu items & dropdowns |
| **B1–B13** | Home page | One per section (13 sections) |
| **C1** | Blog posts | Reading time, author/reviewer photos |
| **D1–D10** | Weight Loss | Page fields |
| **E1–E9** | Travel Health | Page fields |
| **F1–F10** | Ear Wax Removal | Page fields |
| **G1–G8** | Hair Loss | Page fields |
| **H1–H7** | Switch Provider | Page fields |
| **I1–I10** | Book Appointment | Page fields |
| **J1–J5** | Team | Page fields |
| **K1–K10** | Vaccination pages | Shared structure, per-page overrides |
| **L1–L6** | Travel Destinations | Page fields |
| **M1** | NHS Services | Page fields |

---

## FAQ Accordion Classes (Denton-Specific)

| Page | Item class | Active class |
|------|-----------|-------------|
| Weight Loss | `.wl-faq-item` | `.wl-faq-active` |
| Travel Health | `.travel-faq-item` | `.travel-faq-active` |
| Ear Wax Removal | `.earwax-faq-item` | `.active` |
| Hair Loss | `.hairloss-faq-item` | `.active` (+ `fa-plus`↔`fa-minus`) |
| Book Appointment | `.book-faq-item` | `.active` |
| Rabies | `.rabies-faq-item` | `.travel-faq-active` |
| Hepatitis | `.hep-faq-item` | `.travel-faq-active` |
| Yellow Fever | `.yellowfever-faq-item` | `.travel-faq-active` |
| Typhoid | `.typhoid-faq-item` | `.travel-faq-active` |

---

## Responsive Breakpoints (Nav-Specific)

| Viewport | Behaviour |
|----------|-----------|
| < 1024px | Mobile nav: body padding 112px, only Tier 2 visible |
| 1024px–1279px | Compact nav: body padding 188px |
| 1280px+ | Full three-tier: body padding 200px |
