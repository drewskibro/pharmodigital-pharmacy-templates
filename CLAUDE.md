# CLAUDE.md — PharmoDigital Pharmacy Theme Architecture

This is the **shared architecture document** for all PharmoDigital pharmacy WordPress themes. It captures the universal patterns, conventions, and hard-won lessons that apply to every client build.

For client-specific details (colours, pages, sections, field keys), see:
- **`CLAUDE-denton.md`** — Denton Pharmacy (blue + green palette, three-tier nav, `dp_` prefix)
- **`CLAUDE-easy-pharmacy.md`** — Easy Pharmacy (cream + terracotta palette, mega-menu nav, `ep_` prefix)

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
