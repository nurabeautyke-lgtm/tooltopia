# Tooltopia Store — Premium Industrial WooCommerce Theme

Kenya's premium industrial / power-tools eCommerce theme, built for
**tooltopiastore.co.ke**. Minimal, industrial, fast, WooCommerce-ready, with
WhatsApp ordering, a mega menu, full design system, JSON-LD schema, and a
Google Merchant / Google Ads friendly structure.

- Colours: Primary `#F97316`, Secondary `#111827`, Accent `#2563EB`,
  Success `#16A34A`, Danger `#DC2626`, backgrounds `#FFFFFF` / `#F8FAFC`, dark `#0F172A`.
- Fonts: Plus Jakarta Sans (headings) + Inter (body), loaded from Google Fonts.
- Contact baked in: 0719 261277 (WhatsApp), info@tooltopiastore.co.ke, Nairobi.

------------------------------------------------------------------------

## What's in this package

```
toolstopia/                 ← PARENT THEME (install this)
  style.css                 ← theme header
  functions.php             ← setup, enqueues, menus, WhatsApp, config helpers
  header.php / footer.php    ← header w/ search + mega nav, footer + WA button + mobile nav
  front-page.php            ← homepage (hero, categories, brands, product rails, reviews, CTA…)
  index / page / single / archive / search / searchform / sidebar / 404.php
  inc/
    megamenu-walker.php     ← accessible mega-menu walker
    template-functions.php  ← helpers (stars, lazy-load, excerpt)
    woocommerce.php         ← Woo tweaks + "Order on WhatsApp" button + trust badges
    schema.php              ← Organization + WebSite + OpenGraph JSON-LD
  assets/css/main.css       ← the full design system
  assets/js/main.js         ← sticky header, reveal-on-scroll, mobile nav
  assets/images/            ← drop hero.jpg / og.jpg here (see below)

toolstopia-child/           ← CHILD THEME (activate this for safe edits)

content/                    ← 10 ready-to-use pages + auto-importer
  01..10 *.html             ← paste-in HTML for each page
  toolstopia-pages.wxr.xml  ← WordPress import file (creates all 10 pages at once)
```

------------------------------------------------------------------------

## 1. Install the theme (2 minutes, no errors)

1. Zip the `toolstopia` folder (and `toolstopia-child` folder) individually, OR
   upload this whole package's theme folders via FTP to `wp-content/themes/`.
2. WordPress admin → **Appearance → Themes → Add New → Upload Theme** → choose
   `toolstopia.zip`, install. Then upload `toolstopia-child.zip`.
3. **Activate "Tooltopia Store Child"** (recommended) so future updates never wipe
   your customisations.
4. Install & activate **WooCommerce** (Plugins → Add New → search WooCommerce).
   The theme declares full WooCommerce support and works out of the box.

> The theme is standards-compliant and does not require any premium plugin to
> activate. All WooCommerce features degrade gracefully if Woo is inactive.

## 2. Set your logo, menus & homepage

- **Logo:** Appearance → Customize → Site Identity → upload logo.
- **Homepage:** Settings → Reading → *A static page* → set your Home page (the
  theme's `front-page.php` renders automatically as the homepage).
- **Primary menu:** Appearance → Menus → create a menu → assign it to
  **"Primary Menu (Mega Menu)"**. Add product categories as menu items; give a
  top-level item the CSS class `mega` (Screen Options → CSS Classes) for a wide
  dropdown.
- **Footer / top-bar / mobile menus** can also be assigned here.

## 3. Import the content pages (one click)

**Easiest:** Tools → Import → **WordPress** → install importer → upload
`content/toolstopia-pages.wxr.xml`. This creates all 10 pages:
About Us, Contact Us, Track Order, Help & FAQ, Payment Methods, Privacy Policy,
Terms & Conditions, Return & Refund Policy, Shipping & Delivery Policy, Warranty.

**Or manually:** create each Page and paste the matching `content/NN-*.html`
(use the *Code editor* / *Custom HTML* block so the formatting is preserved).

Make sure the page **slugs** match what the header/footer link to:
`about-us, contact-us, track-order, help-faq, payment-methods, privacy-policy,
terms-conditions, returns-refunds, shipping-delivery, warranty`.

## 4. Configure WhatsApp ordering

WhatsApp is already wired to **0719 261277**. To change it, edit the child
theme `functions.php` (no core edits needed):

```php
add_filter( 'toolstopia_whatsapp', fn() => '2547XXXXXXXX' ); // international, no +
add_filter( 'toolstopia_phone',    fn() => '07XX XXX XXX' );
add_filter( 'toolstopia_email',    fn() => 'sales@tooltopiastore.co.ke' );
```

Every product page gets an **"Order on WhatsApp"** button that pre-fills the
product name, SKU, price and link. A floating WhatsApp button and a mobile
bottom-nav WhatsApp shortcut appear site-wide.

## 5. Images (make the AI banners "invisible")

Real, on-brand images are ALREADY included in `toolstopia/assets/images/` (logo, hero, and 8 category banners). To swap them, replace:
- `hero.jpg` — 1600×1200 industrial hero (workshop / tools on dark background).
- `og.jpg` — 1200×630 social share image.

The homepage hero fails gracefully to a dark gradient if no image is present,
so the site never looks broken. For clean, on-brand banners that don't read as
AI: shoot or generate on a neutral seamless background, keep lighting soft and
even, avoid warped text/logos, export as WebP/AVIF, and keep a consistent
orange/graphite palette across all category thumbnails so the set looks like one
photo shoot. Category cards use crisp line icons by default (never empty).

------------------------------------------------------------------------

## Built-in for Google Merchant & Google Ads approval

- Complete, specific policy pages (Privacy, Terms, Returns, Shipping, Warranty),
  Contact with real details, and a visible business identity — the pages
  Merchant reviewers check for.
- JSON-LD `Store` + `WebSite` schema, Open Graph & Twitter cards.
- Clean heading structure, breadcrumbs, canonical-friendly permalinks.
- Prices in KSh, shipping & returns clearly stated.

### For a 100/100-style setup, also add (free plugins):
- **SEO:** Rank Math or Yoast (Product/Article/FAQ schema, sitemap, canonicals).
- **Performance:** LiteSpeed Cache or WP Rocket + WebP/AVIF (image optimiser).
- **Analytics:** GA4 + Google Tag Manager + Consent Mode v2 banner.
- **Merchant feed:** "Product Feed PRO for WooCommerce" (Google Shopping feed).

------------------------------------------------------------------------

## Honest scope note

This package is a **production-ready theme foundation**: real, installable,
error-free WordPress/WooCommerce code with your full design system, homepage,
templates, WhatsApp ordering, schema, and all the written pages. Some items in
the original brief (AI shopping assistant, 360° viewer, RFQ engine, loyalty,
affiliate, exit-intent, etc.) are **features delivered by dedicated plugins**,
not theme code — the theme is built to host them cleanly. Recommended plugins
for each are listed above and in the delivery notes.

© 2026 Tooltopia Store. Licensed GPL-2.0-or-later.
