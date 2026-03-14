# CLAUDE.md — PharmoDigital Pharmacy Theme Architecture

This is the **shared architecture document** for all PharmoDigital pharmacy WordPress themes. It captures the universal patterns, conventions, and hard-won lessons that apply to every client build.

For client-specific details (colours, pages, sections, field keys), see:
- **`CLAUDE-denton.md`** — Denton Pharmacy (blue + green palette, three-tier nav, `dp_` prefix)
- **`CLAUDE-easy-pharmacy.md`** — Easy Pharmacy (cream + terracotta palette, mega-menu nav, `ep_` prefix)

---

## Private Developer Memory (Claude Code)

Each developer using Claude Code has a **private memory directory** that persists across conversations but is NOT committed to the repo. Use it to store sensitive or personal data like SSH credentials, server passwords, and deployment details.

**How to set it up:** Ask Claude Code to "remember" something (e.g. "remember the SSH credentials for Kinsta") and it will save it to `~/.claude/projects/<project-path>/memory/MEMORY.md` automatically.

**What to store there (never in the repo):**
- SSH/SCP connection details (host, port, user, password)
- Server credentials and API keys
- Personal deployment workflows
- WP-CLI commands with paths specific to each environment

---

## What These Projects Are

Custom WordPress themes for **independent UK pharmacies**, built for PharmoDigital. Each theme is content-driven via **Advanced Custom Fields (ACF)** — almost no content lives in the WordPress editor. Every section of every page is powered by ACF fields with sensible defaults, so each theme works out of the box and can be customised per client.

**Target services across all clients:** Weight loss (GLP-1 treatments), travel health & vaccinations, ear wax removal, hair loss, NHS services (Pharmacy First, prescriptions, flu jabs), and smoking cessation.

---

## Shared Project Structure

Every pharmacy theme follows this folder layout:

```
pharmodigital-pharmacy-templates/
└── [client]-pharmacy-theme/              # The WordPress theme (lives in wp-content/themes/)
    ├── style.css                         # Theme metadata only
    ├── functions.php                     # Theme setup, enqueuing, helper functions
    ├── header.php                        # Navigation (varies per client)
    ├── footer.php                        # 4-column footer with compliance bar
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
    │   ├── page-home.php                 # Home page — loads sections in order
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
    │   └── page-travel-*.php             # Travel destination pages
    │
    ├── template-parts/                   # Reusable section components
    │   ├── section-hero.php
    │   ├── section-stats.php
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
        │   ├── [nav].css                 # Navigation styles (client-specific)
        │   ├── blog.css                  # Health Hub listing + single post styles
        │   └── [page-name].css           # One CSS file per page template
        ├── js/
        │   ├── [nav].js                  # Navigation JS (client-specific)
        │   ├── blog.js                   # Category filtering, FAQ accordion
        │   └── [page-name].js            # One JS file per page template
        └── images/
            └── logo.svg                  # Default logo fallback
```

---

## Home Page Section Order

The home page (`page-templates/page-home.php`) loads 13 sections sequentially:

1. **Hero** — Headline, CTA buttons, trust badges, testimonial card, Google rating
2. **Stats** — 5-metric stats bar (patients, rating, years, registration, delivery)
3. **Treatments** — 5-card grid of popular services
4. **Pharmacist** — Meet the pharmacist with photo, credentials, Vimeo video modal
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

The social proof / Google rating band is a reusable pattern that appears on multiple pages. It uses the shared `.rating-badge` component from `globals.css` with `position: static` override for inline use. Each page has its own ACF fields and contextual defaults:

| Page | CSS class prefix | Eyebrow default | Headline focus |
|------|-----------------|-----------------|----------------|
| Switch Provider | `.switch-social-proof-*` | "TRUSTED BY ASHFORD" | Switching providers |
| Reviewer Profile | `.rp-social-proof-*` | "TRUSTED BY ASHFORD" | Pharmacist experience |
| Book Appointment | `.book-social-proof-*` | "TRUSTED BY ASHFORD" | General healthcare trust |
| Single Blog Post | shared `.rating-badge` | "TRUSTED BY ASHFORD" | Pharmacy credibility |

**When building a new page**, use this section instead of a purple stats bar. The pattern is:
- Soft purple background (`#f8f6fb`)
- Left: `.rating-badge` (set `position: static`) with Google icon, score, stars, review count, location, "View Reviews" link
- Right: uppercase eyebrow, large headline (`#374151`, 2.5rem), subtext (`#4a5568`)
- Rating score and location auto-pull from Pharmacy Settings options (`google_rating`, `pharmacy_location_label`) when page-level fields are blank
- Mobile: stack vertically, centre-align

```css
/* Required overrides for inline use */
.page-social-proof-wrapper .rating-badge {
  position: static;
  flex-shrink: 0;
  min-width: 260px;
}
```

### Final CTA Section (Shared Pattern)

Every page should end with a **Final CTA section** that follows the established on-brand design. This replaces the older flat purple gradient + phone/hours layout.

**Design specification:**

| Element | Style |
|---------|-------|
| Background | `linear-gradient(135deg, #6B4FA0, #8B6BBF)` — deep purple gradient |
| Decorative glows | Two blurred white circles (`rgba(255,255,255,0.1)` and `0.08`), `pointer-events: none` |
| Dot pattern | `radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px)`, 30px grid, `pointer-events: none` |
| Trust badges row | Glassmorphic pills (`rgba(255,255,255,0.15)`, `backdrop-filter: blur(10px)`, white border 20%) — 3 contextual badges (e.g. GPhC Registered, Same-Day Appointments, Free Parking) |
| Title | White, 3rem, font-weight 900 |
| Description | White at 95% opacity, 1.25rem, line-height 1.6 |
| Primary CTA | White background, `var(--brand-dark)` text — typically phone number |
| Secondary CTA | Transparent with white 30% border, white text — typically "Book Online" or booking link |
| Trust checks row | White text with check icons — 3 items (e.g. "No referral needed", "Expert guidance", hours) |

**Pages using this pattern:**
- Weight Loss (`wl-final-cta-*`)
- Switch Provider (`switch-cta-*`)
- Book Appointment (`book-cta-*`)
- Reviewer Profile (`rp-cta-*`)

**Quick checklist for new Final CTA sections:**
1. Background is deep purple gradient (`#6B4FA0 → #8B6BBF`), NOT `var(--brand-purple)` horizontal gradient
2. Has decorative glows + dot pattern (all with `pointer-events: none`)
3. Trust badges row above the title (glassmorphic pills, not solid)
4. Two CTA buttons: primary (white solid) + secondary (outlined)
5. Trust checks row below CTAs (white text + check icons)
6. All content wrapped in `position: relative; z-index: 10` to sit above decorative elements

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
4. **Clinically Reviewed Block** — E-E-A-T trust block positioned **above** the article body for maximum trust signalling: author avatar + name + role, reviewer avatar + name + GPhC number + verification link, "Last updated" date
5. **Article Body** — Main content via `the_content()` with premium typography (h2 with terracotta left border, enlarged first paragraph, warm-styled blockquotes, styled tables/lists). Tags + post navigation sit below the content
6. **FAQ Section** — Conditional (only if `post_faqs` repeater is populated): numbered accordion with expand/collapse, generates FAQPage schema
7. **Cluster Hub** — Conditional (only on pillar posts): "In This Series" grid of all cluster posts
8. **Social Proof** — Google rating badge + trust headline. Uses shared `.rating-badge` component with pharmacy rating auto-pulled from options
9. **CTA** — Purple gradient section with booking CTA, trust checks, and phone number
10. **Related Posts** — 3-card grid of related articles from the same category

### Table of Contents (Auto-Generated)

Single blog posts automatically get an SEO-optimised table of contents injected at the top of `the_content()`. This is built entirely in the theme — no plugin required.

**How it works:**
- A `the_content` filter (`easy_pharmacy_add_toc()` in `functions.php`, priority 8) parses all `<h2>` and `<h3>` headings
- Injects `id` attributes onto each heading for anchor linking
- Prepends a `<nav class="article-toc">` card with numbered links
- H3 headings are indented as sub-items
- Requires at least 2 headings to render (skips short posts)
- Collapsible via toggle button (JS in `blog.js`)
- Smooth scroll with fixed-nav offset on link click

**Per-post toggle:** The `show_table_of_contents` ACF field (C1b in `acf-fields.php`, sidebar position) defaults to "Show". Set to "Hide" to disable on individual posts.

**SEO benefits:** Google can extract TOC anchors as jump-link sitelinks in search results, increasing SERP visibility.

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

## ACF Architecture (The Core Pattern)

This is the most important section. Every pharmacy theme uses the same ACF architecture.

### Two Scopes

- **Options fields** (`[prefix]_option()`) — Global settings shared across all pages. Stored on ACF options pages under WP Admin > Pharmacy Settings.
- **Page fields** (`[prefix]_field()`) — Per-page overrides. Stored on individual page edit screens.

### The Fallback Chain

Every template part follows this pattern: **page field → options field → hardcoded default**

```php
// 1. Try page-level field first, fall back to hardcoded default
$value = [prefix]_field( 'field_name', 'Default text' );

// 2. For options-only fields (global settings)
$value = [prefix]_option( 'field_name', 'Default text' );

// 3. For images: page field → options fallback
$image_id = [prefix]_field( 'some_image' );
if ( ! $image_id ) {
    $image_id = [prefix]_option( 'some_image' );
}
$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'medium_large' ) : '';
```

### ACF Options Pages (WP Admin > Pharmacy Settings)

Every client has the same 5 options sub-pages:

| Sub-page | Slug | What it controls |
|----------|------|-----------------|
| Branding | `branding` | Name, logo, tagline, Google rating |
| Contact & Location | `contact-location` | Phone, email, address, hours, map, parking |
| Registration & Compliance | `registration-compliance` | GPhC number, company reg, superintendent |
| Social Media | `social-media` | Facebook, Instagram, Twitter, LinkedIn URLs |
| Navigation | `navigation` | Menu items: show/hide toggles, labels, page links, dropdown sub-links |

### ACF Field Registration

All fields are registered in `inc/acf-fields.php` using `acf_add_local_field_group()`. The file is organised into letter-coded series:

| Series | Scope | Content |
|--------|-------|---------|
| **A1–A7** | Global options | Branding, contact, compliance, social |
| **A8–A9** | Navigation | Menu items, dropdown sub-links |
| **B1–B13** | Home page | One group per section |
| **C1+** | Blog | Post fields, TOC toggle, pillar/cluster, FAQs |
| **D–M** | Service pages | One letter per page (varies by client) |

### Naming Conventions

| Identifier | Pattern | Example |
|-----------|---------|---------|
| **Field key** | `field_[prefix]_[context]_[name]` | `field_dp_home_hero_title` |
| **Field name** (used in code) | `[section]_[descriptive_name]` | `hero_badge_text` |
| **Group key** | `group_[prefix]_[context]` | `group_dp_home_hero` |

Each client has its own prefix: `dp_` (Denton), `ep_` (Easy Pharmacy), etc.

### Helper Functions

Every theme has the same set of helper functions with client-specific defaults:

| Function | Returns |
|----------|---------|
| `[prefix]_option( $field, $default )` | ACF option field value |
| `[prefix]_field( $field, $default )` | ACF page field value |
| `[prefix]_pharmacy_name()` | Pharmacy name |
| `[prefix]_phone()` | Phone number |
| `[prefix]_phone_link()` | Digits-only phone for `tel:` links |
| `[prefix]_booking_url()` | Booking page permalink |
| `[prefix]_logo_url()` | Logo URL (ACF → theme mod → SVG fallback) |

---

## Critical ACF Rules (Never Break These)

### Rule 1: Helper Functions Use Strict Null Checks

```php
function [prefix]_option( $field_name, $default = '' ) {
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

**Why this matters:** ACF `true_false` fields return integer `0` for "No" and `1` for "Yes". A loose check like `empty($value)`, `!$value`, or the `?:` shorthand treats `0` as falsy and always returns the default — so "Show in Menu: No" would have no effect.

**The rule:** Never change these helpers to use `empty()`, `!$value`, or the `?:` ternary shorthand. Always use strict `=== null || === ''`.

### Rule 2: Image Fields Must Use `type => 'image'`, Never `type => 'url'`

Every ACF field that holds an image **must** be registered as:
```php
array(
    'key'           => 'field_[prefix]_[context]_[name]',
    'label'         => 'Image',
    'name'          => '[section]_image',
    'type'          => 'image',
    'return_format' => 'id',
    'preview_size'  => 'medium',
),
```

**Why:** A `url` field renders a plain text input — the client has to paste an image URL manually. An `image` field gives them the WordPress Media Library picker. Using `url` also bypasses WordPress's image processing (srcset, responsive sizes).

**Symptom if broken:** Client sees a plain text box labelled "Image URL" instead of a clickable Media Library button with image preview.

### Rule 3: Shared Template Parts Need Location Rules

Template parts loaded via `get_template_part()` use `[prefix]_field()` to read **page-level** ACF fields. The field groups must include the page template in their location rules.

**The trap:** If you include a shared template part on a page whose template is NOT in the field group's location rules, `[prefix]_field()` returns null and hardcoded defaults display — which may be completely wrong for that context.

**Solutions:**
1. Add the page template to the field group's location rules (if same defaults work)
2. Inline the section directly in the page template with its own ACF fields and context-appropriate defaults (preferred when content differs)

---

## CSS Architecture (Shared Patterns)

### Typography (Used by All Clients)

| Variable | Value | Usage |
|----------|-------|-------|
| `--font-primary` | `'DM Sans', sans-serif` | Body text, general copy |
| `--font-heading` | `'Playfair Display', serif` | Headings (h1–h6), hero titles |
| `--font-accent` | `'Syne', sans-serif` | Decorative text, accent labels |

### Key Shared CSS Classes

| Class | Purpose |
|-------|---------|
| `.section-container` | Max-width 1400px centered wrapper with horizontal padding |
| `.gradient-text` | Gradient text effect (colour varies per client) |
| `.cta-button` | Base button style (pill-shaped, flex, transitions) |
| `.primary-cta` | Primary gradient button |
| `.secondary-cta` | White/outlined button |
| `.section-badge` | Small eyebrow badge with glassmorphic background |
| `.pulse-dot` | Animated pulsing dot used in badges |
| `.rating-badge` | Google rating card (glassmorphic, absolute by default) |
| `.desktop-only` / `.mobile-only` | Responsive visibility |

### CSS Prefix Convention

Each page has its own CSS prefix to avoid class name collisions:

| Page | Prefix |
|------|--------|
| Weight Loss | `.wl-` |
| Travel Health | `.travel-` |
| Ear Wax Removal | `.earwax-` |
| Hair Loss | `.hairloss-` |
| Switch Provider | `.switch-` |
| Book Appointment | `.book-` |
| Team | `.team-` |
| Health Hub (blog) | `.healthhub-` |
| Rabies | `.rabies-` |
| Hepatitis | `.hep-` |
| Yellow Fever | `.yellowfever-` |
| Typhoid | `.typhoid-` |

### How Page-Specific CSS Is Loaded

`functions.php` conditionally enqueues CSS/JS based on `is_page_template()`:
```php
if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
    wp_enqueue_style( '[client]-weight-loss', ... );
    wp_enqueue_script( '[client]-weight-loss-js', ... );
}
```

**Blog assets** (`blog.css` + `blog.js`) are loaded on Health Hub, archives, index, and single posts.

**Always loaded:** Google Fonts (DM Sans, Playfair Display, Syne), Font Awesome 6.4.0, `globals.css`, navigation CSS/JS.

### Responsive Breakpoints (Mobile-First)

| Breakpoint | Usage |
|------------|-------|
| `640px` | Tablet start — flex row buttons, two-column layouts |
| `768px` | Tablet full — grid columns, font size increases |
| `1024px` | Desktop — three-column grids, hero 2-col, desktop-only elements visible |

### Shared Animations

| Name | Duration | Effect | Used on |
|------|----------|--------|---------|
| `ping` | 1s infinite | Ripple: scale(2) + fade out | Pulse dots in badges |
| `float` | 6–8s infinite | Vertical: translateY(0↔-20px) | Decorative blobs |
| `fadeInUp` | 0.8s ease-out | Entrance: opacity 0→1, translateY(30px→0) | Hero content, filtered cards |
| `pulse-glow` | 4s infinite | Opacity: 0.6↔1 | Visual glow effects |
| `shimmer` | 4s infinite | Bar: translateX(-100%→100%) | Stats bar |

---

## JavaScript Architecture (Shared Patterns)

### FAQ Accordion Pattern

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

### Weight Loss Calculator

Interactive BMI/weight loss estimator (shared across all clients):
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

---

## Known CSS Gotchas (Apply to All Clients)

### Decorative Overlays Must Pass Through Clicks

Any `position: absolute; inset: 0` overlay (e.g. `.revslider-overlay`, hero overlays) must have `pointer-events: none` to avoid blocking clicks on content underneath.

### Stats Bar Overlap Pattern

Some pages (Team, Switch Provider) use negative `margin-top` on the stats bar to overlap the previous section. This requires `position: relative; z-index: 20` on the stats bar.

### Glassmorphism Browser Support

Glassmorphic components use `backdrop-filter: blur()` which requires the `-webkit-` prefix for Safari:
```css
backdrop-filter: blur(12px);
-webkit-backdrop-filter: blur(12px);
```

### Margin Collapse in Grid/Flex Containers

CSS Grid and Flexbox prevent margin collapse. In plain block containers, adjacent margins collapse; in grid/flex they stack additively.

**Symptom:** A heading below a badge has much more spacing than the same pattern on the homepage.

**The rule:** When elements sit inside a grid/flex parent, explicitly set `margin-top: 0` on headings to prevent the browser's default top margin from stacking.

---

## Deployment Pipeline (GitHub Actions → Kinsta)

### How It Works

Every client's theme auto-deploys to Kinsta when code is pushed to `main`. The workflow lives at `.github/workflows/deploy-to-kinsta.yml`.

**Architecture:** The GitHub Actions runner checks out the repo, then uses SCP to copy files directly to Kinsta. Theme files are **never cloned on the Kinsta server**.

### Workflow Steps

1. **Checkout** — `actions/checkout@v4`
2. **SCP** — `appleboy/scp-action@v0.1.7` copies `[client]-pharmacy-theme/` to `~/public/wp-content/themes/`
3. **Verify** — `appleboy/ssh-action@v1` confirms files landed

### Required GitHub Secrets

| Secret | What it is |
|--------|-----------|
| `KINSTA_SSH_HOST` | Kinsta SSH hostname |
| `KINSTA_SSH_USER` | Kinsta SSH username |
| `KINSTA_SSH_PASSWORD` | Kinsta SSH password |
| `KINSTA_SSH_PORT` | Kinsta SSH port |

### Key Deployment Rules (Lessons Learned the Hard Way)

1. **Never `git clone` on Kinsta** — Kinsta servers have no GitHub credentials. Always checkout on the GitHub runner and SCP files across
2. **The repo is NOT the theme** — SCP source must be `[client]-pharmacy-theme/` (the subfolder), not the repo root
3. **Use `appleboy/scp-action`** for file transfer, `appleboy/ssh-action` for remote commands
4. **Use `~/public/...` paths** — never hardcode Kinsta site IDs
5. **Branch protection** — push to feature branches, merge to `main` via PR

---

## Footer Structure (Shared Layout)

Dark slate background (`#0f172a`) with radial gradient overlay:

```
.footer-section
├── .footer-main (4-column grid: 2fr 1fr 1fr 1.5fr)
│   ├── .footer-brand       — Logo, tagline, social links
│   ├── Our Services         — Links to service pages
│   ├── Quick Links           — About, Team, Health Hub, Contact, etc.
│   └── Get in Touch          — Contact items with icons
├── .footer-certifications   — GPhC Registered, Company Reg, Established Since
└── .footer-bottom           — Copyright + legal links (Privacy, Terms, Cookies)
```

---

## Icons (Font Awesome 6.4.0)

All themes use Font Awesome 6.4.0 via CDN. Common icons:

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

## How To: Common Tasks

### Add a New Page Template

1. Create `page-templates/page-newpage.php` with template header comment
2. Create `assets/css/newpage.css` for page-specific styles (use a unique CSS prefix)
3. Create `assets/js/newpage.js` if interactive behaviour needed
4. Add the enqueue conditional in `functions.php`
5. Register ACF fields in `inc/acf-fields.php`

### Add a New Home Page Section

1. Create `template-parts/section-newsection.php`
2. Use `[prefix]_field()` / `[prefix]_option()` to pull content
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

1. Duplicate an existing theme folder, rename to `[client]-pharmacy-theme/`
2. Update helper function prefix throughout (`ep_` → `[newprefix]_`)
3. Update ACF field key prefixes (`field_ep_` → `field_[newprefix]_`)
4. Update `globals.css` colour variables to match new brand
5. Update navigation system if the new client needs a different nav layout
6. Update deployment workflow to SCP the correct theme folder
7. Configure ACF options: Branding, Contact, Compliance, Social, Navigation

---

## WordPress Requirements

- **PHP:** 7.4+
- **WordPress:** 5.9+
- **Required plugin:** Advanced Custom Fields PRO (for options pages, repeaters, flexible content)
- **Optional plugin:** Revolution Slider (for travel banner; static fallback if not installed)
- **Optional plugin:** Amelia (for booking widget on Book Appointment page)
- **Editor:** Gutenberg auto-disabled for custom page templates. Blog posts use default editor

---

## Key Design Decisions (Universal)

- **No Gutenberg on page templates** — ACF-only editing for a clean client experience
- **Defaults everywhere** — every ACF field has a hardcoded default, so the theme works before any content is entered
- **Image fallbacks** — template parts gracefully hide image sections when no image is uploaded
- **Component-based** — each section is a standalone template part that can be reused or reordered
- **Mobile-first** — CSS uses `min-width` breakpoints; desktop enhancements via `@media (min-width: 1024px)`
- **Page-specific CSS prefixes** — prevents class name collisions between pages
- **Glassmorphism** — badges, nav, rating cards use `backdrop-filter: blur()` with semi-transparent backgrounds

---

## Git Workflow

- Push to feature branches, merge to `main` via PR (branch protection enforced)
- Merging to `main` triggers automatic deployment to Kinsta
- Commit messages should describe the *why*, not just the *what*
- Each commit should be a logical, self-contained change
