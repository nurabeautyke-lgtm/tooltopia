# Tooltopia Store Child Theme  (v2.0.0)

## FIXES IN THIS VERSION
1. Theme now has a **picture** (screenshot.png).
2. Theme **auto-creates your pages** so they stop showing "404 Page not found":
   Home, About Us, Shipping Policy, Returns & Refund Policy, Delivery & Installation,
   Contact Us, FAQ, Why Choose Tools Topia. Home is set as the front page.
   (No Service Centre page, no Careers page - as requested.)
3. A "Primary Menu" is created and assigned automatically.

## HOW TO APPLY (pick ONE)
### Option A - replace the theme files (recommended)
1. WP Admin > Appearance > Themes. If you can, delete the old blank "Tooltopia Store Child"
   AFTER switching to the parent once, OR just overwrite via FTP.
2. Upload this updated `toolstopia-child` (Add New > Upload Theme, "Replace" if asked),
   then Activate it.
3. IMPORTANT: `Template: toolstopia` in style.css MUST match your parent theme's folder
   name exactly. Your parent shows as "Tooltopia Store" - if its folder is not literally
   `toolstopia`, change that line to the real folder name or the theme won't activate.

### Option B - paste into your existing child (no Template risk)
1. Copy everything in this `functions.php` into your active child's functions.php.
2. Copy this `style.css` (below the header) into your child's style.css.
3. Upload `screenshot.png` into the child theme folder.

## AFTER APPLYING - do this once
- Go to **Settings > Permalinks > Save Changes** (no changes needed, just Save).
  This rebuilds URL rules and clears the 404s immediately. The theme also does this
  automatically, but saving permalinks once guarantees it.
- Check **Settings > Reading**: "Your homepage displays" should be "A static page = Home".
- Check **Appearance > Menus**: assign "Primary Menu" to your header location if it
  is not already assigned.
- The category carousels on Home use slugs power-tools, solar-panels, water-pumps,
  incubators, welding-machines, grinders. Confirm these match Products > Categories
  (edit the slugs on the Home page if yours differ).

--------------------------------------------------------------------------------

# Tools Topia Child Theme (WoodMart)

This child theme adds the custom Tools Topia features on top of the WoodMart parent
theme WITHOUT touching parent files, so WoodMart updates never wipe your work.

--------------------------------------------------------------------------------
## 0. IMPORTANT: parent vs child (read first)
--------------------------------------------------------------------------------
Your store runs **WoodMart** (confirmed from your product data: it carries
`woodmart_*` and `xts_*` meta fields, which are XTemos/WoodMart's own fields).

WoodMart already ships an OFFICIAL child theme called `woodmart-child`.
- Go to **Appearance > Themes**. The theme with the "Active" label is what's live.
- If "WoodMart Child" is active  -> DON'T install this as a second child.
  Instead paste the code from THIS `functions.php` (sections 1-11) into the bottom
  of the existing child's `functions.php`, and the CSS from `style.css` into its
  `style.css`. (The `Template:` line and enqueue block already exist there.)
- If only "WoodMart" (the parent) is active -> your past edits were made to the
  parent and WILL be lost on update. Install THIS child theme and activate it.

Set `Template: woodmart` in style.css must match the parent folder name exactly.
If your parent folder is named differently, change that line to match.

--------------------------------------------------------------------------------
## 1. Install
--------------------------------------------------------------------------------
1. Zip the `toolstopia-child` folder (or use the provided .zip).
2. WP Admin > Appearance > Themes > Add New > Upload Theme > choose the zip > Install.
3. Activate "Tools Topia Child".
4. Do this on a STAGING copy first if you can. Keep a backup.

--------------------------------------------------------------------------------
## 2. Edit your info (no code needed)
--------------------------------------------------------------------------------
Appearance > Customize > **Tools Topia**:
- WhatsApp number (format 254719261277), phone, email, address, hours, payments
- The 4 product-page trust badges
- WhatsApp button label
- Brand color (defaults to #4a90e2)

Pre-filled defaults already use your details:
- WhatsApp/Phone: 0719 261277        Email: info@tooltopiastore.co.ke
- Address: Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya
- Hours: Mon - Saturday 7:00am - 6:00pm
- Payments: M-Pesa, Bank & Cash on Delivery

--------------------------------------------------------------------------------
## 3. What you get automatically (no page building)
--------------------------------------------------------------------------------
- Brand color #4a90e2 applied to buttons/links/prices.
- Product page: 2x2 TRUST BADGES under the price (delivery, warranty, secure, returns).
- Product page: green "Order on WhatsApp" button next to Add to Cart, pre-filled with
  the product name, price and link.
- Floating WhatsApp bubble on every page.

--------------------------------------------------------------------------------
## 4. Homepage build map (WoodMart builder -> stays editable)
--------------------------------------------------------------------------------
Build the homepage with WoodMart's builder so YOU can edit it later. Each section
below maps to a native WoodMart/WPBakery(or Elementor) element. Reference layout =
the tabarakelectronics.co.ke screenshots you sent.

TOP BAR (phone+email left, hours right)  -> Theme Settings > Header Builder > Top bar.
HERO (left category list + right slider)  -> WoodMart element "Product Categories"
   (style: list) in a narrow left column + "Slider"/"Banner" in the right column.
   "Shop All" mega menu with all categories -> Appearance > Menus / WoodMart Mega Menu.
4 TRUST BADGES ROW -> WoodMart "Info Box" x4 in one row (or paste [tt_why_choose]).
SHOP BY CATEGORY (4 visible, scroll, View all) -> "Product Categories" element,
   carousel = ON, per-view = 4, "View all" via section title link.
SHOP BY BRAND (6 visible, scroll) -> WoodMart Brands module (Products > Brands),
   element "Brands", carousel ON, per-view = 6. (Add brand logos under Products > Brands.)
CATEGORY PRODUCT ROWS (6 categories x 12 products, 6 visible, scroll):
   Power Tools, Solar Panels, Water Pumps, Incubators, Welding Machines, Grinders.
   For EACH: WoodMart "Products" element -> Query by category, Per page = 12,
   Carousel ON, items per view = 6, add "View all" link to that category.
   To make these RANDOM & refresh each load, use the shortcode instead:
     [tt_random_products cat="power-tools" limit="12" columns="6"]
     [tt_random_products cat="solar-panels" limit="12" columns="6"]
     ... (use each category's slug; find slugs under Products > Categories)
WHY CHOOSE TOOLS TOPIA -> shortcode [tt_why_choose]  (or WoodMart Info Boxes).
FAQ -> shortcode [tt_faq]  (or WoodMart/Elementor Accordion).
"NEED HELP? TALK TO A SPECIALIST" band -> WoodMart "Banner" + "Button" (Call 0719 261277).
FOOTER (About / Shop / Customer Care / Contact) -> Theme Settings > Footer builder;
   Contact column = address, phone, email, hours, payments (all in your Customizer values).

Because every section is a builder element or a shortcode, you can add/remove/re-order
the categories shown on the homepage any time - which satisfies "let it be a way we
always edit categories we want to appear on homepage."

--------------------------------------------------------------------------------
## 5. Pages to create (all editable in the builder)
--------------------------------------------------------------------------------
Home, Shop, About Us, Contact Us, Shipping Policy, Returns & Refund Policy,
Delivery & Installation, FAQ, Why Choose Tools Topia.
(You said: no Service Centre page, no Careers page - so those are intentionally omitted.)

--------------------------------------------------------------------------------
## 6. Shortcodes reference
--------------------------------------------------------------------------------
[tt_random_products cat="slug" limit="12" columns="6"]  Random in-stock products, refreshes each load.
[tt_why_choose]                                          "Why choose Tools Topia" 4-card row.
[tt_faq]                                                 FAQ accordion (edit items in functions.php, section 11).

--------------------------------------------------------------------------------
## 7. Notes / decisions for you
--------------------------------------------------------------------------------
- Tabarak's accent is orange; yours is BLUE #4a90e2 (as you asked). Change any time in Customizer.
- "Shop by Brand" needs the WoodMart Brands taxonomy populated with logos.
- I cannot access your live site, so install on staging and test. If you tell me
  whether you use Elementor or WPBakery I'll tailor the exact click-path and can
  export a ready homepage template.

## Changelog

### 1.8.6
- Announcement bar text improved; instant as-you-type product search; Shop by Brand moved to bottom; footer dead links fixed; product-page WhatsApp button aligned; mobile header hamburger menu + 2-up category scroll + 2x2 product grid.
