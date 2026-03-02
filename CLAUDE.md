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
- **C1** — Blog post fields (reading time, author)
- **D1** — Flexible content builder for `page-custom.php`
- **F1–F8** — Switch Provider page field groups (hero, stats, comparison, social proof, banner, evidence, process, final CTA)
- **G1–G11** — Weight Loss page field groups (hero, social proof, results, CTA bar, features, banner, journey, calculator, FAQ, testimonials, final CTA)

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
4. Update ACF options: Navigation (show/hide menu items, edit labels, set page links, configure dropdown sub-links)
5. Upload images via ACF fields on the Home Page edit screen

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
