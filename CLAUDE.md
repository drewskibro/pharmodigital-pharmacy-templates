# CLAUDE.md — Easy Pharmacy WordPress Theme

This file gives Claude Code (and any developer) the full context needed to work on this project without re-learning the architecture from scratch.

---

## What This Project Is

A custom WordPress theme for **independent UK pharmacies**, built for PharmoDigital. The theme is content-driven via **Advanced Custom Fields (ACF)** — almost no content lives in the WordPress editor. Every section of every page is powered by ACF fields with sensible defaults, so the theme works out of the box and can be customised per client.

**Target clients:** Independent pharmacies offering weight loss, travel health, ear wax removal, hair loss, and NHS services.

---

## Project Structure

```
pharmodigital-pharmacy-templates/
└── easy-pharmacy-theme/              # The WordPress theme (lives in wp-content/themes/)
    ├── style.css                     # Theme metadata only
    ├── functions.php                 # Theme setup, enqueuing, helper functions
    ├── header.php                    # Mega-menu navigation
    ├── footer.php                    # 4-column footer with compliance bar
    ├── index.php                     # Blog listing fallback
    ├── single.php                    # Single blog post
    ├── archive.php                   # Archive/category listing
    ├── page.php                      # Default page template
    ├── 404.php                       # 404 page
    │
    ├── inc/
    │   ├── acf-options.php           # ACF options pages (Pharmacy Settings menu)
    │   └── acf-fields.php            # ALL ACF field group definitions
    │
    ├── page-templates/               # WordPress page templates (21 total)
    │   ├── page-home.php             # Home page — loads 12 sections in order
    │   ├── page-custom.php           # Flexible content builder page
    │   ├── page-weight-loss.php
    │   ├── page-travel-health.php
    │   ├── page-ear-wax-removal.php
    │   ├── page-hair-loss.php
    │   ├── page-book-appointment.php
    │   ├── page-team.php
    │   ├── page-switch-provider.php
    │   ├── page-health-hub.php
    │   ├── page-reviewer-profile.php # Lead pharmacist / prescriber profile (E-E-A-T)
    │   ├── page-rabies.php           # Vaccination pages
    │   ├── page-hepatitis.php
    │   ├── page-yellow-fever.php
    │   ├── page-typhoid.php
    │   └── page-travel-*.php         # 6 travel destination pages
    │
    ├── template-parts/               # Reusable section components (15 total)
    │   ├── section-hero.php
    │   ├── section-stats.php
    │   ├── section-treatments.php
    │   ├── section-pharmacist.php
    │   ├── section-how-it-works.php
    │   ├── section-quick-book.php    # Quick Book CTA card
    │   ├── section-switching.php
    │   ├── section-revslider.php
    │   ├── section-safe-secure.php
    │   ├── section-health-hub.php
    │   ├── section-location.php
    │   ├── section-testimonials.php
    │   ├── section-sticky-cta.php
    │   ├── article-card.php          # Blog grid card
    │   └── featured-article-card.php # Large featured blog card
    │
    └── assets/
        ├── css/
        │   ├── globals.css           # Base styles, variables, shared components
        │   ├── nav.css               # Mega-menu styles
        │   ├── blog.css              # Health Hub listing + single post styles
        │   └── [page-name].css       # One CSS file per page template
        ├── js/
        │   ├── mega-menu.js          # Loaded on all pages
        │   ├── blog.js               # FAQ accordion, pagination scroll
        │   └── [page-name].js        # One JS file per page template
        └── images/
            └── logo.svg              # Default logo fallback
```

---

## Home Page Section Order

The home page (`page-templates/page-home.php`) loads 13 sections sequentially:

1. **Hero** — Headline, CTA buttons, trust badges, testimonial card, Google rating
2. **Stats** — 5-metric stats bar (patients, rating, years, registration, delivery)
3. **Treatments** — 5-card grid of popular services
4. **Pharmacist** — Meet the pharmacist with photo, credentials, video link
5. **How It Works** — 3-step process (Book, Consult, Receive)
6. **Quick Book** — Floating CTA card with booking prompt
7. **Switching** — Provider switching benefits with feature boxes
8. **RevSlider** — Travel banner (Revolution Slider or static fallback)
9. **Safe & Secure** — GPhC trust features
10. **Health Hub** — Latest blog articles teaser
11. **Location** — Map + floating info card with address, hours, contact
12. **Testimonials** — Patient review cards with CTA
13. **Sticky CTA** — Fixed bottom bar with Book Now

---

## Switch Provider Page Section Order

The Switch Provider page (`page-templates/page-switch-provider.php`) loads 7 sections:

1. **Hero** — Badge, 3-line headline, subtitle, CTAs, trust pills, image card with price badge & testimonial
2. **Stats Bar** — 4-metric stats (avg loss, patients switched, rating, location)
3. **Comparison** — 3-card grid (National Providers vs Easy Pharmacy vs Benefits)
4. **Social Proof** — Large stats badge with headline and subtext
5. **Weight Loss Banner** — Full-width banner with backdrop image, badge, title, and purple CTA (inline, not shared `section-revslider.php`)
6. **Evidence** — 6-card stat grid with proven results
7. **Process** — 4 alternating steps (Book, We Handle Everything, Zero Gap, Face-to-Face)
8. **Final CTA** — Gradient section with CTAs and trust checks

---

## Weight Loss Page Section Order

The Weight Loss page (`page-templates/page-weight-loss.php`) loads 12 sections:

1. **Hero** — Badge, 3-line title (gradient/accent/gradient), description, CTAs, testimonial card, 3-image grid
2. **Social Proof** — Circle stat badge (rating + stars), eyebrow, headline, subtext
3. **Pharmacist** — Reuses shared `section-pharmacist.php` template part
4. **Results** — Badge, title, 3-card grid (satisfaction, featured weight loss %, patients helped), disclaimer
5. **CTA Bar** — Purple gradient bar with title, subtitle, CTA button
6. **Features** — Badge, title, image with floating badges, 3 feature cards (repeater), CTAs, credentials
7. **RevSlider Banner** — Full-width banner with backdrop image, badge, title, CTA (inline, not shared `section-revslider.php`)
8. **Journey Steps** — Badge, title, 4 alternating steps with images and floating badges (repeater)
9. **Calculator** — BMI/weight loss estimator with form, results display, and timeline
10. **FAQ** — Accordion with numbered questions (repeater), expand/collapse via JS
11. **Testimonials** — 3 cards with weight-lost circles, quotes, stars, author (repeater)
12. **Final CTA** — Gradient section with trust badges, title, CTAs, trust checks

---

## Reviewer Profile Page (Prescriber / E-E-A-T)

The Reviewer Profile page (`page-templates/page-reviewer-profile.php`) is a standalone pharmacist profile page designed to boost E-E-A-T (Experience, Expertise, Authority, Trust) signals. It has its own CSS file (`assets/css/reviewer-profile.css`) and follows the warm cream + terracotta design language. It loads 7 sections:

1. **Hero** — Centred layout: circular profile photo with terracotta ring + GPhC verification badge (links to pharmacyregulation.org), name, title, credential pills (Independent Prescriber, location, LinkedIn)
2. **Bio + Team** — Two-column layout. Left: highlight card with "15+" ring stat, divider, 3 credential stats (locations, prescriber status, patients treated). Right: "About Dilip" badge, bio text, terracotta accent bar, and "Your Clinical Team" section with 2-column grid of team member profile cards (lead pharmacist card is slightly larger with purple border; colleague cards show circular photo, name, role)
3. **Social Proof** — Soft purple band (`#f8f6fb`) adapted from the Switch Provider page. Left: shared `.rating-badge` component (Google icon, 4.8 score, 5 stars, "Excellent" green pill, location, "View Reviews"). Right: "TRUSTED BY ASHFORD" eyebrow, headline about the pharmacist's experience, subtext. Rating score and location auto-pull from Pharmacy Settings when left blank
4. **Specialisms** — "Areas of Expertise" badge + "Clinical Specialisms" title, 5-card grid with Font Awesome icons (weight loss, travel health, ear wax, prescribing, consultations)
5. **Qualifications** — "Education & Training" badge + "Qualifications & Credentials" title, numbered card grid (BPharm, PG Cert, Master's, Diploma, Independent Prescriber Status). Cards without an institution get a featured style with award icon
6. **Lead Magnet** — Newsletter signup card with icon, heading, subheading, name + email inputs, submit button, disclaimer text
7. **Final CTA** — Purple gradient section with title, description, Book an Appointment + phone CTAs, trust checks (GPhC Registered, Same-Day Appointments, No Referral Needed)

### ACF Field Prefix

All Reviewer Profile fields use the `rp_` prefix: `rp_name`, `rp_bio`, `rp_highlight_number`, etc.

### Key Image Fallback

The profile image falls back to the global `pharmacist_image` option (Pharmacy Settings), so it works if only the global photo is uploaded:
```php
$profile_image_id = ep_field( 'rp_profile_image' );
if ( ! $profile_image_id ) {
    $profile_image_id = ep_option( 'pharmacist_image' );
}
```

### Team Members

The "Your Clinical Team" section in the bio area only renders when the `rp_team_members` repeater has entries. Each team member has name, role, and photo (Media Library picker). The lead pharmacist's card is auto-generated from the hero data — not part of the repeater. Max 4 team members.

### Social Proof Section (Shared Pattern)

The social proof / Google rating band is a reusable pattern that appears on both the **Switch Provider** page and the **Reviewer Profile** page. It uses the shared `.rating-badge` component from `globals.css` with `position: static` override for inline use. Each page has its own ACF fields and contextual defaults:

| Page | CSS class prefix | Eyebrow default | Headline focus |
|------|-----------------|-----------------|----------------|
| Switch Provider | `.switch-social-proof-*` | "TRUSTED BY ASHFORD" | Switching providers |
| Reviewer Profile | `.rp-social-proof-*` | "TRUSTED BY ASHFORD" | Pharmacist experience |

### ACF Field Groups (in `acf-fields.php`)

| Group | Code | What it controls |
|-------|------|-----------------|
| S1 | `group_ep_rp_hero` | Hero: profile image, name, title, GPhC number, LinkedIn URL |
| S2 | `group_ep_rp_bio` | Bio: bio text, highlight card (number, label, stats repeater) |
| S2c | `group_ep_rp_team` | Team: team label, team members repeater (name, role, photo) |
| S2d | `group_ep_rp_social_proof` | Social proof: rating score, count, location, eyebrow, headline, subtext |
| S3 | `group_ep_rp_specialisms` | Specialisms repeater (title, detail) |
| S4 | `group_ep_rp_qualifications` | Qualifications repeater (name, institution) |
| S5 | `group_ep_rp_leadmagnet` | Lead magnet: heading, subheading, button text, disclaimer |
| S6 | `group_ep_rp_cta` | Final CTA: title, description, button text, button URL |

---

## Health Hub Page (Blog Listing)

The Health Hub page (`page-templates/page-health-hub.php`) is the main blog listing. It uses server-side filtering and pagination:

1. **Hero** — Badge, title (ACF field), description, category filter pills (server-side via `?category=` query param)
2. **Featured Article** — Page 1 only, no category filter: large featured card (sticky posts) with image, category, reading time, title, excerpt, author, CTA
3. **Articles Grid** — 9 posts per page in a 3-column responsive grid, filtered by category if selected. Excludes featured post on page 1
4. **Pagination** — Numbered pills that preserve category filter in query strings
5. **CTA** — Purple gradient section with "Ready to Transform Your Health?" and booking CTA

**Filter logic:** Server-side via `$_GET['category']` sanitised and passed to `WP_Query`. JS smoothly scrolls to grid when returning from pagination (detects `?paged=` in URL).

`archive.php` and `index.php` reuse the same hero + grid + pagination layout (without the featured article section) and share `.healthhub-*` CSS classes.

---

## Single Blog Post Layout

The single post template (`single.php`) displays articles in a premium editorial layout with warm cream/terracotta palette. It loads these sections:

1. **Article Hero** — Breadcrumb (Home > Health Hub > Category), category badge, reading time, `<h1>` title, excerpt, author avatar + name + role, publication date
2. **Featured Image** — Conditional (only if post has a featured image). Rounded card with warm terracotta shadow
3. **Pillar Backlink** — Conditional (only on cluster posts): link back to parent pillar post with "Part of our guide" label
4. **Article Body** — Main content via `the_content()` with premium typography (h2 with terracotta left border, enlarged first paragraph, warm-styled blockquotes, styled tables/lists)
5. **Tags** — Tag pills below content
6. **Clinically Reviewed Block** — E-E-A-T trust block: author avatar + name + role, reviewer avatar + name + GPhC number + verification link, "Last updated" date
7. **Post Navigation** — Previous / Next article links
8. **FAQ Section** — Conditional (only if `post_faqs` repeater is populated): numbered accordion with expand/collapse, generates FAQPage schema
9. **Cluster Hub** — Conditional (only on pillar posts): "In This Series" grid of all cluster posts
10. **Related Posts** — 3-card grid of related articles from the same category
11. **CTA** — Purple gradient section with booking CTA

### Author & Reviewer Info Fallback Chain

| Field | Fallback chain |
|-------|---------------|
| Author name | WordPress post author |
| Author role | `default_author_role` option → `'Lead Pharmacist'` |
| Author photo | `author_photo` post field → `pharmacist_image` option → Gravatar |
| Reviewer name | `superintendent_pharmacist` option → `'Dilip Modhvadia'` |
| Reviewer GPhC | `superintendent_gphc_number` option → `'2050606'` |
| Reviewer photo | `reviewer_photo` post field → `pharmacist_image` option |

### Structured Data (JSON-LD)

`functions.php` outputs two schemas on single posts via `wp_head`:

1. **MedicalWebPage** — headline, description, dates, author (name + jobTitle), reviewedBy (superintendent + GPhC), publisher (pharmacy + logo)
2. **FAQPage** — Generated from the `post_faqs` repeater if populated. Enables Google FAQ rich snippets

### Permalink & Category Setup

On theme activation (`after_switch_theme`), `functions.php`:
- Creates 5 default blog categories: Weight Loss, Travel Health, Ear Wax Removal, Hair Loss, NHS Services
- Sets permalink structure to `/health-hub/%postname%/`

A separate `init` hook (`easy_pharmacy_ensure_permalinks()`) checks once per hour (via transient) that rewrite rules haven't been flushed by plugin updates or Kinsta deployments, and re-registers them if needed. This prevents blog post 404s after deploys.

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
| Navigation | `navigation` | Mega-menu items: show/hide toggles, labels, page links, dropdown sub-links |

### ACF Field Registration

All fields are registered in `inc/acf-fields.php` using `acf_add_local_field_group()`. The file is organised into sections:

- **A1–A7** — Options page field groups (global settings)
- **A8–A9** — Navigation field groups (top-level menu items & dropdown sub-links)
- **B1–B12** — Home page section field groups (one per section)
- **C1** — Blog post fields (reading time, author/reviewer photo overrides)
- **C2** — Pillar/cluster content strategy (is_pillar_post toggle, cluster_posts relationship, cluster_section_title)
- **C3** — Blog post FAQ section (post_faq_title, post_faqs repeater with question/answer pairs, max 20)
- **D1** — Flexible content builder for `page-custom.php`
- **E** — Ear Wax Removal page field groups
- **F1–F8** — Switch Provider page field groups (hero, stats, comparison, social proof, banner, evidence, process, final CTA)
- **G1–G11** — Weight Loss page field groups (hero, social proof, results, CTA bar, features, banner, journey, calculator, FAQ, testimonials, final CTA)
- **H** — Travel Health page field groups
- **I–L** — Travel destination page field groups (Thailand, Kenya, India, Cape Verde)
- **M** — Yellow Fever vaccination page field groups (`yf_` prefix)
- **N** — Rabies vaccination page field groups (`vaccine_` prefix)
- **P** — Typhoid vaccination page field groups (`vaccine_` prefix)
- **Q** — Book Appointment page field groups
- **R** — Hepatitis vaccination page field groups (`vaccine_` prefix) — hero image only; remaining fields not yet registered
- **S1–S6** — Reviewer Profile page field groups (`rp_` prefix): hero, bio + highlight card, team members, social proof, specialisms, qualifications, lead magnet, final CTA

**Naming convention for field keys:** `field_ep_[context]_[name]`
- Example: `field_ep_home_hero_title_line_1`, `field_ep_location_map_image`

**Naming convention for field names (what you use in code):** `[section]_[descriptive_name]`
- Example: `hero_badge_text`, `pharmacist_image`, `location_map_image`

---

## CSS Architecture

### Design System Variables (`globals.css :root`)

```css
/* Colours */
--brand-purple: #a39ee3;
--brand-light: #fef6f4;       /* Page background */
--brand-dark: #6d68b5;
--brand-accent: #8b85d6;
--text-dark: #1a202c;
--text-gray: #4a5568;
--text-slate: #64748b;

/* Fonts */
--font-primary: 'DM Sans', sans-serif;      /* Body text */
--font-heading: 'Playfair Display', serif;   /* Headings */
--font-accent: 'Syne', sans-serif;           /* Decorative / accent */

/* Shadows */
--shadow-sm / --shadow-md / --shadow-lg / --shadow-xl / --shadow-2xl
```

### Hero Section Design Language (Warm Palette Standard)

Hero sections must follow the **warm cream + terracotta** design language established on the homepage — NOT default to a solid purple background. The principle is **70% warm tones / 30% deep purple accents**.

**Do NOT** build hero sections with solid purple/gradient backgrounds and all-white text. That produces a flat, one-dimensional look. Instead, use the warm cream background with terracotta and deep purple accents for depth and visual hierarchy.

#### Warm Hero Colour Palette

| Token | Value | Usage |
|-------|-------|-------|
| Hero background | `#FDF6F3` | Warm cream — the hero's base background colour |
| Terracotta | `#C47A65` | Primary warm accent — CTAs, badges, shadows, accent bars |
| Terracotta soft | `#D4907C` | Gradient endpoints, hover states |
| Terracotta dark | `#B8694F` | CTA gradient dark end, strong emphasis |
| Sage green | `#7A9E7E` | Trust pill icons, success indicators |
| Dark purple text | `#2D1B4E` | Hero titles, trust pill text |
| Deep purple accent | `#6B4FA0` | Secondary CTA text, `.gradient-text` start colour |
| Gradient text end | `#8B6BBF` | `.gradient-text` gradient endpoint |

#### Element-by-Element Pattern

```css
/* Background: warm cream, NOT purple gradient */
.page-hero-section { background: #FDF6F3; }

/* Decorative blobs: terracotta-tinted, NOT white glows */
.page-hero-glow-1 { background: rgba(196, 122, 101, 0.08); }
.page-hero-glow-2 { background: rgba(212, 144, 124, 0.08); }

/* Dots grid: hidden (too busy on warm backgrounds) */
.page-hero-dots { display: none; }

/* Badge: glassmorphic white with warm border */
.page-hero .section-badge {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(196, 122, 101, 0.12);
  box-shadow: 0 8px 30px rgba(196, 122, 101, 0.10);
}

/* Title: dark purple, NOT white */
.page-hero-title { color: #2D1B4E; }

/* .gradient-text: purple gradient, NOT overridden to white */
.page-hero-title .gradient-text {
  background: linear-gradient(to right, #6B4FA0, #8B6BBF);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Description text: dark gray */
.page-hero-description { color: #4a5568; }

/* Primary CTA: terracotta gradient, NOT purple */
.page-hero .primary-cta {
  background: linear-gradient(135deg, #C47A65, #B8694F);
  color: #fff;
  box-shadow: 0 10px 25px -3px rgba(196, 122, 101, 0.35);
}

/* Secondary CTA: deep purple text with warm border */
.page-hero .secondary-cta {
  color: #6B4FA0;
  border: 2px solid rgba(196, 122, 101, 0.25);
  background: transparent;
}

/* Trust pills: warm glassmorphic, sage green icons */
.page-hero-trust-pill {
  background: rgba(255, 255, 255, 0.95);
  border: 1px solid rgba(196, 122, 101, 0.12);
}
.page-hero-trust-pill i { color: #7A9E7E; }
.page-hero-trust-pill span { color: #2D1B4E; }

/* Result/price badge: terracotta, NOT brand-purple */
.page-hero-result-badge { background: #C47A65; }

/* Testimonial card: warm shadow + terracotta accent bar */
.page-hero-testimonial-card {
  box-shadow: 0 25px 60px rgba(196, 122, 101, 0.15);
}
.page-hero-testimonial-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 6px;
  background: linear-gradient(90deg, #C47A65, #D4907C);
  border-radius: 0 0 1.5rem 1.5rem;
}

/* Image card: warm terracotta shadow */
.page-hero-image-card {
  box-shadow: 0 25px 60px rgba(196, 122, 101, 0.18);
}
```

#### Pages Already Using This Pattern

- **Homepage** (`globals.css` hero overrides) — the original reference implementation
- **Book Appointment** (`book-appointment.css`) — upgraded to warm palette
- **Reviewer Profile** (`reviewer-profile.css`) — centred hero with warm cream background, terracotta photo ring, warm shadows

#### Quick Checklist for New Hero Sections

1. Background is `#FDF6F3` (warm cream), not a purple gradient
2. Title text is `#2D1B4E` (dark purple), not white
3. `.gradient-text` shows the purple gradient, not overridden to white
4. Primary CTA uses terracotta gradient (`#C47A65 → #B8694F`), not purple
5. Trust pill icons use sage green (`#7A9E7E`), not white or purple
6. Decorative blobs use `rgba(196, 122, 101, 0.08)`, not white/translucent glows
7. Shadows use terracotta-tinted `rgba(196, 122, 101, ...)`, not plain black
8. Overall balance feels 70% warm / 30% purple accent

### Key Shared CSS Classes

| Class | Purpose |
|-------|---------|
| `.section-container` | Max-width 1400px centered wrapper with horizontal padding |
| `.gradient-text` | Purple gradient text effect (used on highlighted words in titles) |
| `.cta-button` | Base button style (pill-shaped, flex, transitions) |
| `.primary-cta` | Purple gradient button with white text |
| `.secondary-cta` | White/outlined button |
| `.section-badge` | Small badge above section titles with pulse dot |
| `.pulse-dot` | Animated green/purple pulsing dot used in badges |
| `.rating-badge` | Google rating card (glassmorphic, absolute by default). Override to `position: static` for inline use in social proof sections |
| `.desktop-only` / `.mobile-only` | Responsive visibility |

### How Page-Specific CSS Is Loaded

`functions.php` conditionally enqueues CSS/JS based on `is_page_template()`:
```php
if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
    wp_enqueue_style( 'easy-pharmacy-weight-loss', ... );
    wp_enqueue_script( 'easy-pharmacy-weight-loss-js', ... );
}
```

**Blog assets** (`blog.css` + `blog.js`) are loaded on Health Hub, archives, index, and single posts:
```php
if ( is_page_template( 'page-templates/page-health-hub.php' ) ||
     is_home() || is_category() || is_tag() || is_archive() ) { /* enqueue */ }
if ( is_single() ) { /* also enqueue */ }
```

**Always loaded:** Google Fonts (DM Sans, Playfair Display, Syne), Font Awesome 6.4.0, `globals.css`, `nav.css`, `mega-menu.js`.

---

## Helper Functions Reference

| Function | Returns | Default |
|----------|---------|---------|
| `ep_option( $field, $default )` | ACF option field value | `''` |
| `ep_field( $field, $default )` | ACF page field value | `''` |
| `ep_pharmacy_name()` | Pharmacy name | `'Easy Pharmacy'` |
| `ep_phone()` | Phone number | `'01784 255 222'` |
| `ep_phone_link()` | Digits-only phone for `tel:` links | — |
| `ep_booking_url()` | Booking page permalink | `/book-appointment/` |
| `ep_logo_url()` | Logo URL (ACF → theme mod → SVG fallback) | `logo.svg` |

---

## How To: Common Tasks

### Add a New Home Page Section

1. Create `template-parts/section-newsection.php`
2. Use `ep_field()` / `ep_option()` to pull content
3. Add the `get_template_part()` call in `page-templates/page-home.php`
4. Register ACF fields in `inc/acf-fields.php` (follow B1–B12 pattern)
5. Add CSS to `globals.css` or a new file (and enqueue if separate)

### Add a New Page Template

1. Create `page-templates/page-newpage.php` with the template header comment:
   ```php
   <?php
   /**
    * Template Name: New Page
    * @package Easy_Pharmacy
    */
   ```
2. Create `assets/css/newpage.css` for page-specific styles
3. Add the enqueue conditional in `functions.php`:
   ```php
   if ( is_page_template( 'page-templates/page-newpage.php' ) ) {
       wp_enqueue_style( 'easy-pharmacy-newpage', ... );
   }
   ```
4. Register ACF fields in `inc/acf-fields.php`

### Add a New ACF Field to an Existing Section

1. Add the field definition in `inc/acf-fields.php` inside the relevant field group
2. Use the naming pattern: key = `field_ep_[context]_[name]`, name = `[section]_[name]`
3. Pull it in the template part with `ep_field('field_name', 'Default value')`

### Customise for a New Client

1. Update ACF options: Pharmacy Settings > Branding (name, logo)
2. Update ACF options: Contact & Location (address, phone, email, hours)
3. Update ACF options: Registration & Compliance (GPhC number, company reg)
4. Update ACF options: Navigation (show/hide menu items, edit labels, set page links, configure dropdown sub-links)
5. Upload images via ACF fields on the Home Page edit screen

---

## WordPress Requirements

- **PHP:** 7.4+
- **WordPress:** 5.9+
- **Required plugin:** Advanced Custom Fields PRO (for options pages, repeaters, flexible content)
- **Optional plugin:** Revolution Slider (for travel banner; static fallback if not installed)
- **Editor:** Gutenberg is auto-disabled for custom page templates only (`page-templates/*`). Blog posts use the default WordPress editor (Gutenberg unless Classic Editor plugin is installed)

---

## Key Design Decisions

- **No Gutenberg on page templates:** All custom page templates (`page-templates/*`) force Classic Editor for a clean ACF-only editing experience. Blog posts use the default editor (Gutenberg) since their content comes from the block editor, not ACF
- **Defaults everywhere:** Every ACF field has a hardcoded default, so the theme works before any content is entered
- **Image fallbacks:** Template parts gracefully hide image sections when no image is uploaded, or fall back to embeds (e.g. Google Maps iframe)
- **Component-based:** Each home page section is a standalone template part that can be reused or reordered
- **Mobile-first:** CSS uses min-width breakpoints throughout; desktop enhancements via `@media (min-width: 1024px)`

---

## Icons

The theme uses **Font Awesome 6.4.0** (CDN). Icon classes follow the `fas fa-*` pattern. Common icons used:

- `fa-map-marker-alt` — Address
- `fa-clock` — Hours
- `fa-phone` — Contact
- `fa-square-parking` — Parking
- `fa-arrow-right` — CTA buttons
- `fa-diamond-turn-right` — Directions
- `fa-star` — Ratings
- `fa-shield-halved` — Trust/security

---

## Deployment Pipeline (GitHub Actions → Kinsta)

### How It Works

The theme auto-deploys to Kinsta whenever code is pushed to `main`. The workflow lives at `.github/workflows/deploy-to-kinsta.yml`.

**Architecture:** The GitHub Actions runner checks out the repo (it has built-in access), then uses SCP to copy files directly to Kinsta. The theme files are **never cloned on the Kinsta server** — this is critical because Kinsta has no GitHub credentials.

### Workflow Steps

1. **Checkout** — `actions/checkout@v4` checks out the repo on the GitHub runner
2. **SCP** — `appleboy/scp-action@v0.1.7` copies `easy-pharmacy-theme/` to `~/public/wp-content/themes/` on Kinsta
3. **Verify** — `appleboy/ssh-action@v1` SSHes in to confirm the files landed correctly

### Required GitHub Secrets

These must be configured in the repo under Settings > Secrets and variables > Actions:

| Secret | What it is |
|--------|-----------|
| `KINSTA_SSH_HOST` | Kinsta SSH hostname (e.g. `ssh.kinsta.cloud`) |
| `KINSTA_SSH_USER` | Kinsta SSH username |
| `KINSTA_SSH_PASSWORD` | Kinsta SSH password |
| `KINSTA_SSH_PORT` | Kinsta SSH port (not always 22) |

### Kinsta File Paths

- Theme directory: `~/public/wp-content/themes/easy-pharmacy-theme/`
- The `~` resolves to `/www/{site_name}/public/` on Kinsta — never hardcode the site name
- WordPress themes dir: `~/public/wp-content/themes/`

### Key Lessons Learned (Do NOT Repeat These Mistakes)

1. **Never `git clone` on Kinsta** — Kinsta servers have no GitHub credentials. Always checkout on the GitHub runner and SCP/rsync files across. The error you'll see is: `fatal: could not read Username for 'https://github.com': No such device or address`

2. **The repo is NOT the theme** — The repo is `pharmodigital-pharmacy-templates/` with the theme inside `easy-pharmacy-theme/`. The SCP source must be `easy-pharmacy-theme/` (the subfolder), not the repo root. WordPress expects the theme directly in `wp-content/themes/easy-pharmacy-theme/`.

3. **Use `appleboy/scp-action`** for file transfer, `appleboy/ssh-action` for remote commands. Don't try to combine them.

4. **Use `~/public/...`** paths — never hardcode `/www/{site_id}/public/...` as the site ID varies per Kinsta environment.

5. **Branch protection** — Cannot push directly to `main`. Always push to a feature branch and merge via PR.

### Setting Up Deployment for a New Client

1. Create a new Kinsta site (or get SSH credentials for the existing one)
2. In the GitHub repo, go to Settings > Secrets and variables > Actions
3. Add the four secrets: `KINSTA_SSH_HOST`, `KINSTA_SSH_USER`, `KINSTA_SSH_PASSWORD`, `KINSTA_SSH_PORT`
4. The workflow file is already in the repo — it will deploy automatically on the next push to `main`
5. Verify by checking the Actions tab and the file manager timestamp on Kinsta

### Deploy Trigger

- **Automatic:** Every push to `main` (including PR merges)
- **Manual re-run:** Go to Actions tab > click the failed/succeeded run > "Re-run all jobs"

---

## Known CSS Gotchas

### Mega-Menu Dropdowns Blocking Clicks

The mega-menu dropdowns (Weight Loss, Travel Health, etc.) are `position: absolute` inside the `position: fixed` nav at `z-index: 9999`. When visible, they extend below the nav as large transparent panels (500-750px wide).

**The rule:** The dropdown wrapper (`.mega-menu-dropdown`) must always have `pointer-events: none`, even when visible. Only the actual visible content (`.mega-menu-dropdown-inner`) and the hover bridge (`::before`) should have `pointer-events: auto`. If the transparent wrapper has `pointer-events: all`, it creates an invisible click-blocking layer that intercepts CTA clicks when users move their mouse upward through the nav area.

**Current correct CSS:**
```css
.mega-menu-has-dropdown:hover .mega-menu-dropdown {
  opacity: 1;
  visibility: visible;
  pointer-events: none; /* Transparent wrapper must NOT capture clicks */
}

.mega-menu-dropdown::before {
  pointer-events: auto; /* Hover bridge between nav item and dropdown */
}

.mega-menu-dropdown-inner {
  pointer-events: auto; /* Only visible content captures clicks */
}
```

### Mega-Menu List Bounding Box Blocking Page Content

The `<ul class="mega-menu-list">` sits inside the fixed nav (`z-index: 9999`). Even though the dropdowns are `position: absolute`, the `<ul>` itself can have a bounding box that extends hundreds of pixels below the nav bar (observed at ~716px tall). Because the nav has a sky-high z-index, this invisible box intercepts clicks on hero CTAs, "Popular Treatments" cards, and any other content positioned beneath the nav.

**The rule:** On desktop, `.mega-menu-list` must have `pointer-events: none` so its oversized bounding box passes through clicks. Each `<li class="mega-menu-item">` gets `pointer-events: auto` to keep nav links clickable.

**Current correct CSS:**
```css
@media (min-width: 1024px) {
  .mega-menu-list {
    display: flex;
    pointer-events: none; /* Bounding box must NOT capture clicks */
  }
}

.mega-menu-item {
  pointer-events: auto; /* Re-enable on each nav item */
}
```

**Symptom if broken:** Hero CTA buttons and treatment cards appear unclickable — cursor doesn't change to pointer, clicks do nothing. The invisible `<ul>` is sitting on top of them.

### Decorative Overlays

Any `position: absolute; inset: 0` overlay used for gradients or decorative effects (e.g. `.hero-overlay`, `.revslider-overlay`) must have `pointer-events: none` to avoid blocking clicks on content underneath.

### Hero Section Top Padding

The `body` has a global `padding-top: 80px` to clear the fixed navigation. Each hero section only needs a small additional `padding-top` (the homepage uses `20px`). If a new page hero section has excessive space above the badge, check that its `padding-top` isn't duplicating the body's 80px.

**Symptom if broken:** Huge gap between the nav bar and the hero badge/title compared to the homepage.

**The rule:** Hero section `padding-top` should be ~20px (not 120px+), since the body already provides the 80px nav clearance. Total distance from viewport top to content = body `80px` + section padding.

### Single Post Section Spacing

The single blog post (`single.php`) has three stacked sections: `.article-hero` → `.article-image-section` → `.article-body-section`. Each section must have explicit padding to create separation, because margins between sections can behave unpredictably.

**The rule:** Never use `padding: 0` on `.article-body-section` — the article content will slam directly against the featured image above with no breathing room. Current correct values:

```css
.article-hero          { padding: 5rem 0 4rem; }   /* generous top (nav clearance) + bottom */
.article-image-section { margin-top: 0; padding-bottom: 3rem; }  /* NO negative margin */
.article-body-section  { padding: 3rem 0 4rem; }   /* top padding separates from image */
```

**Never use negative `margin-top`** on `.article-image-section` to create visual overlap — it eats into the spacing and makes the title appear to crowd the featured image.

**Symptom if broken:** Post title or body content appears to overlap with or sit too close to the featured image.

### Margin Collapse in Grid/Flex Containers

CSS Grid and Flexbox layouts **prevent margin collapse**. In a plain block container, adjacent `margin-bottom` and `margin-top` values collapse into the larger of the two. Inside `display: grid` or `display: flex`, they stack additively.

**Symptom:** A heading below a badge has much more spacing than the same pattern on the homepage, even though the CSS values look identical.

**The rule:** When elements sit inside a grid/flex parent, explicitly set `margin-top: 0` on headings to prevent the browser's default `h1`/`h2` top margin (~0.67em) from stacking on top of the previous element's `margin-bottom`.

---

## Known ACF Gotchas

### `ep_option()` / `ep_field()` and Falsy Values

These helpers use strict null/empty-string checks, NOT loose truthiness:

```php
function ep_option( $field_name, $default = '' ) {
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

**Why this matters:** ACF `true_false` fields return integer `0` for "No" and `1` for "Yes". A loose check like `$value ? $value : $default` treats `0` as falsy and always returns the default — so "Show in Menu: No" would have no effect. The strict `=== null || === ''` check allows `0`, `false`, and empty arrays to pass through correctly.

**The rule:** Never change these helpers to use `empty()`, `!$value`, or the `?:` ternary shorthand. Always use strict `=== null || === ''`.

### Shared Template Parts and Field Group Location Rules

Template parts loaded via `get_template_part()` (e.g. `section-revslider.php`) use `ep_field()` to read **page-level** ACF fields. The ACF field groups for those fields are registered with location rules that bind them to specific page templates.

**The trap:** If you include a shared template part on a page whose template is NOT in the field group's location rules, the fields won't exist on that page. `ep_field()` will return `null`/`''`, and the hardcoded defaults will display instead — which may be completely wrong for that page's context (e.g. travel-themed defaults on a weight-loss page).

**Solutions:**
1. **Add the page template** to the field group's location rules (if the same fields/defaults work)
2. **Inline the section** directly in the page template with its own ACF fields and context-appropriate defaults (preferred when the content differs significantly)

**Example:** The Switch Provider page originally used `get_template_part( 'template-parts/section', 'revslider' )`, which showed travel-themed defaults because the B7 field group only targets the homepage. Fixed by inlining a dedicated banner section with weight-loss defaults and its own F8 field group.

### Image Fields Must Use `type => 'image'`, Never `type => 'url'`

Every ACF field that holds an image **must** be registered as `'type' => 'image'` with `'return_format' => 'id'`. Never use `'type' => 'url'` or `'type' => 'text'` for image fields.

**Why this matters:** A `url` field renders as a plain text input in the WordPress editor — the client has to paste an image URL manually. An `image` field renders the **Media Library picker**, which is the standard WordPress experience: click a button, choose or upload an image, done. Using `url` also bypasses WordPress's image processing (srcset, cropping, responsive sizes).

**The rule:** Always register image fields like this:

```php
array(
    'key'           => 'field_ep_[context]_[name]',
    'label'         => 'Image',
    'name'          => '[section]_image',
    'type'          => 'image',
    'return_format' => 'id',
    'preview_size'  => 'medium',
),
```

And consume them in templates like this:

```php
$image_id  = ep_field( 'section_image' );
$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'large' ) : '';
if ( $image_url ) :
    ?>
    <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( ep_field( 'section_image_alt', 'Default alt' ) ); ?>" />
<?php endif; ?>
```

**Never do this:**

```php
// WRONG — renders a text input, not the Media Library picker
array( 'key' => '...', 'label' => 'Image URL', 'name' => '...', 'type' => 'url' ),

// WRONG — echoes a raw URL with no WordPress image handling
<img src="<?php echo esc_url( ep_field( 'some_image', 'https://...' ) ); ?>" />
```

**Symptom if broken:** The client sees a plain text box labelled "Image URL" in the WordPress editor instead of a clickable Media Library button with image preview.

---

## Git Workflow

- Push to feature branches, merge to `main` via PR (branch protection enforced)
- Merging to `main` triggers automatic deployment to Kinsta
- Commit messages should describe the *why*, not just the *what*
- Each commit should be a logical, self-contained change
