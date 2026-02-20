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
    ├── page-templates/               # WordPress page templates (20 total)
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
    │   ├── page-rabies.php           # Vaccination pages
    │   ├── page-hepatitis.php
    │   ├── page-yellow-fever.php
    │   ├── page-typhoid.php
    │   └── page-travel-*.php         # 6 travel destination pages
    │
    ├── template-parts/               # Reusable section components (14 total)
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
        │   ├── globals.css           # Base styles, variables, shared components
        │   ├── nav.css               # Mega-menu styles
        │   └── [page-name].css       # One CSS file per page template
        ├── js/
        │   ├── mega-menu.js          # Loaded on all pages
        │   └── [page-name].js        # One JS file per page template
        └── images/
            └── logo.svg              # Default logo fallback
```

---

## Home Page Section Order

The home page (`page-templates/page-home.php`) loads 12 sections sequentially:

1. **Hero** — Headline, CTA buttons, trust badges, testimonial card, Google rating
2. **Stats** — 5-metric stats bar (patients, rating, years, registration, delivery)
3. **Treatments** — 5-card grid of popular services
4. **Pharmacist** — Meet the pharmacist with photo, credentials, video link
5. **How It Works** — 3-step process (Book, Consult, Receive)
6. **Switching** — Provider switching benefits with feature boxes
7. **RevSlider** — Travel banner (Revolution Slider or static fallback)
8. **Safe & Secure** — GPhC trust features
9. **Health Hub** — Latest blog articles teaser
10. **Location** — Map + floating info card with address, hours, contact
11. **Testimonials** — Patient review cards with CTA
12. **Sticky CTA** — Fixed bottom bar with Book Now

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

### ACF Field Registration

All fields are registered in `inc/acf-fields.php` using `acf_add_local_field_group()`. The file is organised into sections:

- **A1–A7** — Options page field groups (global settings)
- **B1–B12** — Home page section field groups (one per section)
- **C1** — Blog post fields (reading time, author)
- **D1** — Flexible content builder for `page-custom.php`

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
| `.desktop-only` / `.mobile-only` | Responsive visibility |

### How Page-Specific CSS Is Loaded

`functions.php` conditionally enqueues CSS/JS based on `is_page_template()`:
```php
if ( is_page_template( 'page-templates/page-weight-loss.php' ) ) {
    wp_enqueue_style( 'easy-pharmacy-weight-loss', ... );
    wp_enqueue_script( 'easy-pharmacy-weight-loss-js', ... );
}
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
4. Upload images via ACF fields on the Home Page edit screen
5. Update navigation links in `header.php` if services differ

---

## WordPress Requirements

- **PHP:** 7.4+
- **WordPress:** 5.9+
- **Required plugin:** Advanced Custom Fields PRO (for options pages, repeaters, flexible content)
- **Optional plugin:** Revolution Slider (for travel banner; static fallback if not installed)
- **Editor:** Gutenberg is auto-disabled for all custom page templates (Classic Editor forced for clean ACF editing)

---

## Key Design Decisions

- **No Gutenberg:** All page templates force Classic Editor for a clean ACF-only editing experience
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

### Decorative Overlays

Any `position: absolute; inset: 0` overlay used for gradients or decorative effects (e.g. `.hero-overlay`, `.revslider-overlay`) must have `pointer-events: none` to avoid blocking clicks on content underneath.

---

## Git Workflow

- Push to feature branches, merge to `main` via PR (branch protection enforced)
- Merging to `main` triggers automatic deployment to Kinsta
- Commit messages should describe the *why*, not just the *what*
- Each commit should be a logical, self-contained change
