# CLAUDE-easy-pharmacy.md — Easy Pharmacy Client-Specific Documentation

> **Read `CLAUDE.md` first** for the shared PharmoDigital architecture (ACF patterns, helper function rules, deployment pipeline, CSS conventions). This file covers only Easy Pharmacy-specific details.

---

## Client Details

- **Theme folder:** `easy-pharmacy-theme/`
- **Helper prefix:** `ep_option()`, `ep_field()`
- **Field key prefix:** `field_ep_[context]_[name]`
- **Default pharmacy name:** Easy Pharmacy
- **Phone:** 01784 255 222
- **Navigation:** Mega-menu (two-tier: nav bar + mega-menu dropdowns)
- **Nav files:** `nav.css` + `mega-menu.js`

---

## Source HTML/CSS Reference

The static HTML/CSS designs (Anima-generated) live in a separate repository. These are the source-of-truth designs that the WordPress theme implements.

---

## Design System

### Colour Palette — Warm Cream + Terracotta

Easy Pharmacy uses a **warm cream + terracotta** palette — distinct from Denton's cool blue + green.

```css
/* Core colours */
--brand-purple: #a39ee3;
--brand-light: #fef6f4;       /* Page background — warm cream */
--brand-dark: #6d68b5;
--brand-accent: #8b85d6;
--text-dark: #1a202c;
--text-gray: #4a5568;
--text-slate: #64748b;
```

### Hero-Specific Warm Palette

| Token | Value | Usage |
|-------|-------|-------|
| Hero background | `#FDF6F3` | Warm cream base |
| Terracotta | `#C47A65` | Primary warm accent — CTAs, badges, shadows |
| Terracotta soft | `#D4907C` | Gradient endpoints, hover states |
| Terracotta dark | `#B8694F` | CTA gradient dark end |
| Sage green | `#7A9E7E` | Trust pill icons, success indicators |
| Dark purple text | `#2D1B4E` | Hero titles, trust pill text |
| Deep purple accent | `#6B4FA0` | Secondary CTA text, `.gradient-text` start |
| Gradient text end | `#8B6BBF` | `.gradient-text` endpoint |

### Shadows — Terracotta-Tinted

Unlike Denton's neutral black shadows, Easy Pharmacy uses coloured shadows:
```css
/* Terracotta-tinted shadows (Easy Pharmacy) */
box-shadow: 0 25px 60px rgba(196, 122, 101, 0.15);  /* Card shadows */
box-shadow: 0 10px 25px -3px rgba(196, 122, 101, 0.35);  /* CTA shadows */
box-shadow: 0 8px 30px rgba(196, 122, 101, 0.10);  /* Badge shadows */
```

---

## Hero Section Design Language (70/30 Warm/Purple Rule)

Hero sections must follow the **warm cream + terracotta** design language — NOT default to solid purple backgrounds. The principle is **70% warm tones / 30% deep purple accents**.

### Element-by-Element Pattern

```css
/* Background: warm cream, NOT purple gradient */
.page-hero-section { background: #FDF6F3; }

/* Decorative blobs: terracotta-tinted */
.page-hero-glow-1 { background: rgba(196, 122, 101, 0.08); }
.page-hero-glow-2 { background: rgba(212, 144, 124, 0.08); }

/* Dots grid: hidden (too busy on warm backgrounds) */
.page-hero-dots { display: none; }

/* Badge: glassmorphic white with warm border */
.page-hero .section-badge {
  background: rgba(255, 255, 255, 0.95);
  border: 1px solid rgba(196, 122, 101, 0.12);
  box-shadow: 0 8px 30px rgba(196, 122, 101, 0.10);
}

/* Title: dark purple, NOT white */
.page-hero-title { color: #2D1B4E; }

/* .gradient-text: purple gradient */
.page-hero-title .gradient-text {
  background: linear-gradient(to right, #6B4FA0, #8B6BBF);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Primary CTA: terracotta gradient */
.page-hero .primary-cta {
  background: linear-gradient(135deg, #C47A65, #B8694F);
  color: #fff;
  box-shadow: 0 10px 25px -3px rgba(196, 122, 101, 0.35);
}

/* Secondary CTA: deep purple text with warm border */
.page-hero .secondary-cta {
  color: #6B4FA0;
  border: 2px solid rgba(196, 122, 101, 0.25);
}

/* Trust pills: warm glassmorphic, sage green icons */
.page-hero-trust-pill {
  background: rgba(255, 255, 255, 0.95);
  border: 1px solid rgba(196, 122, 101, 0.12);
}
.page-hero-trust-pill i { color: #7A9E7E; }
.page-hero-trust-pill span { color: #2D1B4E; }

/* Image card: warm terracotta shadow */
.page-hero-image-card {
  box-shadow: 0 25px 60px rgba(196, 122, 101, 0.18);
}
```

### Quick Checklist for New Hero Sections

1. Background is `#FDF6F3` (warm cream), not a purple gradient
2. Title text is `#2D1B4E` (dark purple), not white
3. `.gradient-text` shows the purple gradient, not overridden to white
4. Primary CTA uses terracotta gradient (`#C47A65 → #B8694F`), not purple
5. Trust pill icons use sage green (`#7A9E7E`), not white or purple
6. Decorative blobs use `rgba(196, 122, 101, 0.08)`, not white glows
7. Shadows use terracotta-tinted `rgba(196, 122, 101, ...)`, not plain black
8. Overall balance feels 70% warm / 30% purple accent

---

## Navigation — Mega-Menu (Two-Tier)

Easy Pharmacy uses a **two-tier mega-menu** navigation managed by `nav.css` + `mega-menu.js`:

- Nav bar with logo + mega-menu dropdowns on hover
- Body padding-top: `80px` to clear the fixed nav
- Mobile: hamburger toggle with full-screen drawer

### Known Mega-Menu CSS Gotchas

#### Dropdowns Blocking Clicks

The mega-menu dropdown wrapper (`.mega-menu-dropdown`) must always have `pointer-events: none`, even when visible. Only the actual visible content (`.mega-menu-dropdown-inner`) and the hover bridge (`::before`) should have `pointer-events: auto`.

```css
.mega-menu-has-dropdown:hover .mega-menu-dropdown {
  opacity: 1;
  visibility: visible;
  pointer-events: none; /* Transparent wrapper must NOT capture clicks */
}
.mega-menu-dropdown::before {
  pointer-events: auto; /* Hover bridge */
}
.mega-menu-dropdown-inner {
  pointer-events: auto; /* Only visible content captures clicks */
}
```

#### Menu List Bounding Box Blocking Page Content

The `<ul class="mega-menu-list">` inside the fixed nav (`z-index: 9999`) can have a bounding box extending hundreds of pixels below the nav. This intercepts clicks on hero CTAs and treatment cards.

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

### Hero Section Top Padding

The body has `padding-top: 80px` to clear the fixed nav. Hero sections only need ~20px additional padding. If a new hero has excessive space above the badge, its `padding-top` is likely duplicating the body's 80px.

---

## Page Templates & Section Orders

### Home Page (13 sections)

1. **Hero** — Headline, CTA buttons, trust badges, testimonial card, Google rating
2. **Stats** — 5-metric stats bar
3. **Treatments** — 5-card grid of popular services
4. **Pharmacist** — Photo, credentials, video link
5. **How It Works** — 3-step process
6. **Quick Book** — Floating CTA card
7. **Switching** — Provider switching benefits
8. **RevSlider** — Travel banner (or static fallback)
9. **Safe & Secure** — GPhC trust features
10. **Health Hub** — Latest blog articles teaser
11. **Location** — Map + info card
12. **Testimonials** — Patient review cards
13. **Sticky CTA** — Fixed bottom bar

### Weight Loss Page (12 sections)

1. **Hero** — Badge, 3-line title, CTAs, testimonial, 3-image grid
2. **Social Proof** — Circle stat badge
3. **Pharmacist** — Reuses shared template part
4. **Results** — 3-card grid with metrics
5. **CTA Bar** — Purple gradient bar
6. **Features** — Image with floating badges + 3 feature cards
7. **RevSlider Banner** — Full-width inline banner
8. **Journey Steps** — 4 alternating steps
9. **Calculator** — BMI/weight loss estimator
10. **FAQ** — Numbered accordion
11. **Testimonials** — 3-column grid
12. **Final CTA** — Gradient section

### Switch Provider Page (8 sections)

1. **Hero** — Badge, headline, CTAs, trust pills, image card
2. **Stats Bar** — 4-metric stats
3. **Comparison** — 3-card grid
4. **Social Proof** — Rating badge + headline
5. **Weight Loss Banner** — Full-width banner
6. **Evidence** — 6-card stat grid
7. **Process** — 4 alternating steps
8. **Final CTA** — Gradient section

### Reviewer Profile Page (Unique to Easy Pharmacy)

This page doesn't exist in Denton. It's a standalone pharmacist profile designed to boost E-E-A-T signals.

**CSS prefix:** None specific — uses `.rp-` prefix classes
**ACF prefix:** `rp_` for all fields

7 sections:
1. **Hero** — Circular photo with terracotta ring + GPhC badge, name, credentials
2. **Bio + Team** — Highlight card, bio, team member grid
3. **Social Proof** — Purple band with rating badge
4. **Specialisms** — 5-card expertise grid
5. **Qualifications** — Numbered credential cards
6. **Lead Magnet** — Newsletter signup
7. **Final CTA** — Purple gradient

**ACF Groups:** S1–S6 series in `acf-fields.php`

### Health Hub (Blog Listing)

Server-side filtering and pagination:
1. **Hero** — Badge, title, category filter pills (server-side `?category=` query)
2. **Featured Article** — Page 1 only, sticky posts
3. **Articles Grid** — 3-column, 9 per page
4. **Pagination** — Numbered pills preserving category filter
5. **CTA** — Purple gradient

### Single Blog Post

Premium editorial layout:
1. **Article Hero** — Breadcrumb, category, reading time, title, excerpt, author
2. **Featured Image** — Rounded card with terracotta shadow
3. **Pillar Backlink** — Conditional: link to parent pillar post
4. **Article Body** — `the_content()` with styled typography (h2 terracotta left border, warm blockquotes)
5. **Tags** — Tag pills
6. **Clinically Reviewed Block** — E-E-A-T trust block
7. **Post Navigation** — Previous / Next links
8. **FAQ Section** — Conditional: from `post_faqs` repeater, generates FAQPage schema
9. **Cluster Hub** — Conditional: pillar post "In This Series" grid
10. **Related Posts** — 3-card grid
11. **CTA** — Purple gradient

#### Table of Contents (Auto-Generated, Unique to Easy Pharmacy)

Built entirely in the theme — no plugin required. A `the_content` filter parses `<h2>` and `<h3>` headings, injects `id` attributes, prepends a `<nav class="article-toc">` card. Requires 2+ headings. Per-post toggle via `show_table_of_contents` ACF field.

#### Structured Data (JSON-LD)

`functions.php` outputs on single posts:
1. **MedicalWebPage** — headline, author, reviewedBy (superintendent + GPhC), publisher
2. **FAQPage** — from `post_faqs` repeater (enables Google FAQ rich snippets)

#### Author & Reviewer Fallback Chain

| Field | Fallback chain |
|-------|---------------|
| Author name | WordPress post author |
| Author role | `default_author_role` option → `'Lead Pharmacist'` |
| Author photo | `author_photo` post field → `pharmacist_image` option → Gravatar |
| Reviewer name | `superintendent_pharmacist` option → `'Dilip Modhvadia'` |
| Reviewer GPhC | `superintendent_gphc_number` option → `'2050606'` |
| Reviewer photo | `reviewer_photo` post field → `pharmacist_image` option |

---

## ACF Field Group Organisation

| Series | Scope | Content |
|--------|-------|---------|
| **A1–A7** | Options | Global settings |
| **A8–A9** | Navigation | Mega-menu items & dropdowns |
| **B1–B12** | Home page | One per section |
| **C1** | Blog posts | Reading time, author/reviewer photos |
| **C1b** | Blog posts | Table of contents toggle (sidebar) |
| **C2** | Blog posts | Pillar/cluster content strategy |
| **C3** | Blog posts | FAQ section (repeater, max 20) |
| **D1** | Custom page | Flexible content builder |
| **E** | Ear Wax Removal | Page fields |
| **F1–F8** | Switch Provider | Hero through final CTA |
| **G1–G11** | Weight Loss | Hero through final CTA |
| **H** | Travel Health | Page fields |
| **I–L** | Travel destinations | Thailand, Kenya, India, Cape Verde |
| **M** | Yellow Fever | `yf_` prefix |
| **N** | Rabies | `vaccine_` prefix |
| **P** | Typhoid | `vaccine_` prefix |
| **Q** | Book Appointment | Page fields |
| **R** | Hepatitis | `vaccine_` prefix (hero image only; remaining not yet registered) |
| **S1–S6** | Reviewer Profile | `rp_` prefix |

---

## Known CSS Gotchas (Easy Pharmacy-Specific)

### Single Post Section Spacing

Three stacked sections: `.article-hero` → `.article-image-section` → `.article-body-section`. Each needs explicit padding:

```css
.article-hero          { padding: 5rem 0 4rem; }
.article-image-section { margin-top: 0; padding-bottom: 3rem; }
.article-body-section  { padding: 3rem 0 4rem; }
```

**Never use negative `margin-top`** on `.article-image-section` — it eats spacing and crowds the title against the image.

### Permalink & Category Auto-Setup

On theme activation, `functions.php`:
- Creates 5 default categories: Weight Loss, Travel Health, Ear Wax Removal, Hair Loss, NHS Services
- Sets permalink structure to `/health-hub/%postname%/`
- Hourly transient check ensures rewrite rules survive plugin updates and Kinsta deployments
