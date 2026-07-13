# Hasooleilm LMS — WordPress Theme

A modern, mobile-first WordPress theme for AKU-EB student notes and educational resources. Built with Tailwind CSS v4, compiled via Vite.

**Author:** Danial Mubashar  
**Version:** 1.0.0  
**Text Domain:** hasooleilm-lms  
**Repository:** https://github.com/xjdani/hasooleilm-wp

---

## Quick Start

```bash
npm install
npm run dev      # watch mode — rebuilds on file changes
npm run build    # production build
```

CSS output: `assets/css/style.css` (enqueued by WordPress automatically).

---

## File Inventory

### Core Files

| File | Purpose |
|---|---|
| `style.css` | WordPress theme identification only (no styles) |
| `functions.php` | Theme setup, enqueues, menus, widgets, excerpt config |
| `vite.config.js` | Vite build config (Tailwind v4 plugin) |
| `package.json` | NPM dependencies and scripts |
| `.gitignore` | Git ignore rules |

### Templates — Frame

| File | Purpose |
|---|---|
| `header.php` | `<!DOCTYPE html>`, `<head>`, sticky header with logo, nav, search |
| `footer.php` | 4-column footer, newsletter form, legal links, copyright |
| `sidebar.php` | Widget area (renders only if sidebar-1 has widgets) |

### Templates — Standard WordPress

| File | Purpose |
|---|---|
| `index.php` | Main loop, post list, pagination, "Nothing Found" fallback |
| `page.php` | Default page template (content, prev/next nav, comments) |
| `single.php` | Single blog post (categories, tags, reading time, prev/next) |
| `archive.php` | Category/tag/date archives with post list |
| `search.php` | Search results with result count and re-search form |
| `404.php` | "Page not found" with search form and homepage link |

### Templates — Custom Page Templates

| File | Template Name | Purpose |
|---|---|---|
| `front-page.php` | — | Homepage (hero, stats, resources, courses, why, FAQ) |
| `templates/page-about.php` | About Us | Mission, team, story, values, vision, CTA |
| `templates/page-contact.php` | Contact Us | Contact channels, form, details, FAQ |
| `templates/page-terms.php` | Terms of Service | 9-section legal page with TOC |
| `templates/page-privacy.php` | Privacy Policy | 10-section legal page with TOC |

### Assets — CSS

| File | Purpose |
|---|---|
| `assets/css/input.css` | Tailwind source: `@import "tailwindcss"`, theme config, utilities |
| `assets/css/style.css` | Compiled Tailwind output (auto-generated, do not edit) |

**Custom utilities in `input.css`:**
- `.auto-grid` — CSS Grid with `auto-fit` + `minmax(280px, 1fr)` for responsive card layouts
- `#masthead .custom-logo` — Constrains WordPress custom logo to 60px height
- `#colophon .custom-logo` — Constrains WordPress custom logo to 50px height
- `.pagination .page-numbers` — Styled pagination buttons via `@apply`

**Theme colors (defined via `@theme`):**
- `--color-primary: #2d7a4f` (green)
- `--color-primary-dark: #1e5c3a` (dark green)
- `--color-secondary: #e8f5e9` (light green)

### Assets — JS

| File | Purpose |
|---|---|
| `assets/js/header.js` | Mobile hamburger toggle, scroll shadow on sticky header |
| `assets/js/main.js` | Global utilities (placeholder) |

### Assets — Images

| File | Purpose |
|---|---|
| `assets/images/logo.png` | Default fallback logo (shown when no custom logo is set) |

---

## Design System

### Container Pattern

Every section uses the same container for consistency:
```
max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
```

### Responsive Breakpoints

All responsiveness is handled via Tailwind prefixes (no custom `@media` queries):
- `sm:` — 640px
- `md:` — 768px
- `lg:` — 1024px
- `xl:` — 1280px

### Card Layouts

Card grids use the `.auto-grid` class which automatically wraps columns based on available width:
```html
<div class="auto-grid">
  <div class="bg-white border border-gray-200 rounded-xl p-6">...</div>
  <div class="bg-white border border-gray-200 rounded-xl p-6">...</div>
</div>
```
Columns auto-adjust: 3 on desktop, 2 on tablet, 1 on mobile. Zero `@media` queries needed.

### Logo Constraints

- Header logo: max 60px height, auto width, `object-fit: contain`
- Footer logo: max 50px height, auto width, `object-fit: contain`
- Works regardless of uploaded image size (CSS overrides WordPress inline dimensions)

---

## WordPress Setup

### Required Actions

1. **Upload logo.png** — Place your logo file at `assets/images/logo.png`
2. **Set Custom Logo** — Or use WordPress Customizer → Site Identity → Logo
3. **Create Pages** — Create pages and assign templates:
   - About → "About Us" template
   - Contact → "Contact Us" template
   - Terms → "Terms of Service" template
   - Privacy → "Privacy Policy" template
4. **Set Front Page** — Settings → Reading → "A static page" → select your homepage
5. **Register Menus** — Appearance → Menus → create a "Primary Menu"

### Registered Menus

| Location | Description |
|---|---|
| `primary` | Top navigation bar |
| `footer` | (Available for future use) |

### Registered Sidebars

| ID | Description |
|---|---|
| `sidebar-1` | Main sidebar (used by `sidebar.php`) |

---

## Enqueued Assets

| Handle | Type | File | Dependencies |
|---|---|---|---|
| `hasooleilm-style` | CSS | `assets/css/style.css` | — |
| `hasooleilm-main-js` | JS | `assets/js/main.js` | — |
| `hasooleilm-header-js` | JS | `assets/js/header.js` | `hasooleilm-main-js` |

Only 3 assets are loaded. All styling comes from the single compiled Tailwind file.

---

## Development

### Build Commands

| Command | Description |
|---|---|
| `npm run dev` | Vite watch mode (rebuilds on CSS changes) |
| `npm run build` | Production build (minified, no sourcemap) |

### Adding Tailwind Utilities

1. Edit `assets/css/input.css`
2. Run `npm run build`
3. All classes used in PHP templates are automatically scanned and included

### Adding Custom CSS

Add rules to `input.css` after the `@theme` block. Use `@apply` for Tailwind utilities:
```css
.my-component {
  @apply bg-white rounded-xl p-6 shadow-sm;
}
```

---

## Changelog

### 1.0.0 — Current

**Restructured:**
- All templates rewritten to use pure Tailwind CSS utility classes
- Removed 5 dead CSS file enqueues (main.css, header.css, footer.css, templates.css, front-page.css)
- Fixed duplicate `hasooleilm-header-js` script registration in functions.php
- Fixed duplicate `@import "tailwindcss"` and `@theme` block in input.css
- Updated `style.css` comment to reference Tailwind

**Added:**
- `page.php` — Default page template
- `single.php` — Single blog post template with categories, tags, reading time
- `archive.php` — Archive template for categories/tags/dates
- `search.php` — Search results template
- `404.php` — "Page not found" template
- `sidebar.php` — Widget area template
- `assets/images/` directory

**Design:**
- Consistent container pattern across all templates: `max-w-7xl mx-auto px-4 sm:px-6 lg:px-8`
- `.auto-grid` utility for responsive card layouts (auto-fit, no media queries)
- Logo constraints: CSS rules force logos to max 60px (header) / 50px (footer) height regardless of upload size
- Responsive typography and spacing via Tailwind `sm:`, `md:`, `lg:` prefixes
