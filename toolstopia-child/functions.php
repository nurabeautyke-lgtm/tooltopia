<?php
/**
 * Toolstopia Child theme functions.
 * Keeps the parent "Toolstopia" homepage and design; adds all information pages.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'toolstopia-parent', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'toolstopia-child', get_stylesheet_uri(), array( 'toolstopia-parent' ), '1.9.0' );
}, 20 );

if ( ! defined( 'TT_PAGES_LOADED' ) ) {
define( 'TT_PAGES_LOADED', 1 );
define( 'TT_PAGES_VERSION', '1.9.0' );

function tt_pages_blueprint(){
  return array(
    'about-us' => array( 'About Us', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro">
    <h1>About Toolstopia</h1>
    <p><b>Tools and equipment for homes, businesses and professionals in Kenya.</b></p>
    <p>Toolstopia is a Kenya-based online retailer supplying power tools, hand tools, solar equipment, water pumps, generators, welding equipment, agricultural equipment, accessories and other related products.</p>
    <p>We help customers compare products, understand specifications and place orders through our online store, phone and WhatsApp. Our goal is simple: provide clear product information, transparent pricing and accessible customer support from order to delivery.</p>
  </div>
  <h2>What we offer</h2>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Power and hand tools</b></div>
    <div class="ttx-card"><b>Solar equipment</b></div>
    <div class="ttx-card"><b>Generators</b></div>
    <div class="ttx-card"><b>Water pumps</b></div>
    <div class="ttx-card"><b>Welding equipment</b></div>
    <div class="ttx-card"><b>Agricultural equipment</b></div>
    <div class="ttx-card"><b>Workshop equipment</b></div>
    <div class="ttx-card"><b>Accessories and related supplies</b></div>
  </div>
  <h2>Why shop with us</h2>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Clear product information</b><small>We provide available specifications, pricing and product details to help you make an informed purchase.</small></div>
    <div class="ttx-card"><b>Kenya-wide delivery</b><small>We arrange delivery to Nairobi and locations across Kenya through available delivery partners.</small></div>
    <div class="ttx-card"><b>Customer support</b><small>Contact us by phone, WhatsApp or email before or after placing an order.</small></div>
    <div class="ttx-card"><b>Flexible payment options</b><small>M-Pesa, bank transfer and cash on delivery where available.</small></div>
  </div>
  [tt_about_stats]
  [tt_about_media]
  <div class="ttx-cta">
    <b>Visit us or order from home</b>
    Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya. Open Monday to Saturday, 7:00am-6:00pm.<br>
    <a href="tel:0719261277">Call 0719 261277</a>
    <a href="https://wa.me/254719261277">WhatsApp us</a>
    <a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a>
  </div>
</div>
TTBODY
    ),
    'shipping-policy' => array( 'Shipping Policy', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>Here is how your order gets to you: processing times, coverage, costs and what to expect. For delivery to your specific area, just ask us on WhatsApp (0719 261277). Delivery times below are typical, not guaranteed.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Order processing</b><small>Orders are confirmed and prepared on business days after payment or confirmation.</small></div>
    <div class="ttx-card"><b>Dispatch</b><small>Same or next-business-day dispatch in Nairobi where available; other orders typically leave within 1-2 business days.</small></div>
    <div class="ttx-card"><b>Tracking</b><small>We keep you updated by call or WhatsApp from dispatch until the item reaches you.</small></div>
  </div>
  <h2>Delivery times</h2>
  <ul class="ttx-list good">
    <li><b>Nairobi and surrounding areas:</b> same-day or next-business-day delivery may be available for qualifying orders placed during business hours, subject to product availability and delivery location.</li>
    <li><b>Major towns:</b> typically 1-3 business days.</li>
    <li><b>Other locations in Kenya:</b> typically 2-5 business days.</li>
    <li>Large, heavy or specialised equipment may require additional handling time.</li>
  </ul>
  <p><em>These are typical delivery times, not guaranteed delivery windows.</em></p>
  <h2>Shipping costs</h2>
  <ul class="ttx-list">
    <li>Shipping is calculated at checkout based on your location and the size and weight of the items.</li>
    <li>Large, heavy or specialised equipment may attract an additional handling fee for safe transport.</li>
    <li>For an estimate before you order, contact us by phone or WhatsApp.</li>
  </ul>
  <h2>What to expect</h2>
  <ul class="ttx-list good">
    <li>A confirmation call or WhatsApp before dispatch to verify your address and timing.</li>
    <li>Careful, secure packaging, especially for solar panels, glass and delicate parts.</li>
    <li>Please inspect major items on delivery and report any transit damage as soon as possible.</li>
  </ul>
  <h2>Failed or delayed deliveries</h2>
  <ul class="ttx-list bad">
    <li>Please give an accurate address and a reachable phone number to avoid delays.</li>
    <li>If a delivery cannot be completed, we will reschedule; repeat failed attempts may attract a re-delivery fee.</li>
    <li>Delays due to weather, courier or stock issues will always be communicated to you.</li>
  </ul>
  <div class="ttx-cta"><b>Want a delivery estimate for your area?</b>Payment methods: M-Pesa, bank transfer and cash on delivery where available.<br>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a></div>
</div>
TTBODY
    ),
    'returns-refund-policy' => array( 'Returns & Refund Policy', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>We want you to shop with confidence. Most unused products may be returned within 7 days of delivery, subject to the conditions below. If an item arrives damaged, defective or different from what you ordered, please contact us and we will advise on the next steps.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><span class="n">7-Day</span><b>Returns</b><small>Most unused products may be returned within 7 days of delivery for a refund, exchange or store credit, subject to conditions.</small></div>
    <div class="ttx-card"><span class="n">Warranty</span><b>Where applicable</b><small>Warranty coverage varies by product and manufacturer.</small></div>
    <div class="ttx-card"><span class="n">Support</span><b>We're here to help</b><small>Contact us about any return, damaged or faulty item.</small></div>
  </div>
  <h2>7-day returns</h2>
  <p>Most unused products may be returned within 7 days of delivery, subject to the conditions below. Products must be returned unused, with original packaging, accessories and proof of purchase. Products that arrive damaged, defective or different from the order should be reported as soon as possible. Approved returns may qualify for a refund, exchange or store credit depending on the circumstances and product.</p>
  <h2>What can be returned</h2>
  <ul class="ttx-list good">
    <li>Unused items in original packaging with all accessories and proof of purchase.</li>
    <li>Items delivered damaged, defective, or different from what you ordered.</li>
    <li>Products that develop a fault covered by an applicable manufacturer or supplier warranty.</li>
  </ul>
  <h2>What cannot be returned</h2>
  <ul class="ttx-list bad">
    <li>Items damaged through misuse, accident, or unauthorised repair.</li>
    <li>Products returned after 7 days without a warranty claim, or without proof of purchase.</li>
    <li>Consumables, installed items, and items with broken security seals (hygiene and safety).</li>
  </ul>
  <h2>How to start a return</h2>
  <ol class="ttx-steps">
    <li>Contact us within 7 days with your order number and a short description; a photo helps for damage (0719 261277 or info@toolstopia.co.ke).</li>
    <li>We will confirm whether the return is accepted and advise on the appropriate return or collection method.</li>
    <li>Once the item has been received and assessed, we process your refund, exchange or store credit.</li>
  </ol>
  <h2>Faulty or damaged items</h2>
  <p>Where a return is accepted because an item arrived damaged or defective, Toolstopia will advise the customer on the appropriate return or collection method.</p>
  <h2>Refunds &amp; warranty</h2>
  <p>Approved refunds are processed within 3-5 business days after the returned item has been received and assessed, to your original payment method or by M-Pesa. Warranty coverage varies by product and manufacturer. Where a manufacturer or supplier warranty applies, the applicable terms are stated on the product page or provided with the product; we do not operate an in-house service centre, so warranty repairs are handled through the manufacturer or supplier.</p>
  <div class="ttx-cta"><b>Need to start a return or ask a question?</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'delivery-installation' => array( 'Delivery & Installation', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>Toolstopia delivers across Kenya. For equipment that needs setup, our team will advise so everything works from day one. Delivery times below are typical, not guaranteed.</p></div>
  <h2>Delivery coverage</h2>
  <ul class="ttx-list good">
    <li>Delivery to Nairobi and locations across Kenya through available delivery partners.</li>
    <li>Careful handling and secure packaging for tools, solar kits, pumps, welding machines and grinders.</li>
  </ul>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Nairobi &amp; surrounding areas</b><small>Same-day or next-business-day delivery may be available for qualifying orders placed during business hours.</small></div>
    <div class="ttx-card"><b>Major towns</b><small>Typically 1-3 business days.</small></div>
    <div class="ttx-card"><b>Other locations</b><small>Typically 2-5 business days.</small></div>
  </div>
  <h2>Installation &amp; setup support</h2>
  <p>For equipment such as solar systems, water pumps and welding machines, we guide you on correct installation and safe operation. Where on-site setup is available, talk to our team when ordering and we will advise on options and any charges. Please note: we advise on installation but do not operate a physical service centre, so warranty repairs are handled through the manufacturer or supplier.</p>
  <div class="ttx-cta"><b>Arrange your delivery</b>Available Monday to Saturday, 7:00am-6:00pm.<br>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'contact-us' => array( 'Contact Us', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>We are here to help you find the right tools and get them delivered fast. Reach us by phone, WhatsApp, email, or visit our shop.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Visit our shop</b><small>Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya. Open Mon-Saturday, 7:00am-6:00pm.</small></div>
    <div class="ttx-card"><b>Phone &amp; WhatsApp</b><small>0719 261277, the fastest way to order or check stock.</small></div>
    <div class="ttx-card"><b>Email</b><small>info@toolstopia.co.ke</small></div>
    <div class="ttx-card"><b>Payment options</b><small>M-Pesa, Bank transfer &amp; Cash on Delivery.</small></div>
  </div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Business hours</b><small>Monday to Saturday: 7:00am to 6:00pm<br>Sunday: Closed</small></div>
    <div class="ttx-card"><b>Average response time</b><small>WhatsApp: within 5 minutes during business hours<br>Email: within 24 hours</small></div>
  </div>
  <div class="ttx-cta"><b>Talk to us now</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
  <div class="ttx-map"><h3>Find us on the map</h3><p>Royal Palms Mall, Shop No. BG 55, Ronald Ngala Street, Nairobi.</p>[tt_map]</div>
</div>
TTBODY
    ),
    'faq' => array( 'FAQ', <<<'TTBODY'
<div class="ttx">
  <details class="ttx-faq" open><summary>Are your products genuine?</summary><p>We source products through established suppliers and distributors. Product brand, model and specification information is provided where available. If a manufacturer warranty applies, the applicable warranty information is stated on the product page or provided with the product.</p></details>
  <details class="ttx-faq"><summary>Which areas do you deliver to?</summary><p>We deliver countrywide. Nairobi enjoys same-day or next-day delivery; major towns receive orders in 1-3 business days and other areas in 2-5 business days.</p></details>
  <details class="ttx-faq"><summary>How much is delivery?</summary><p>Delivery is calculated at checkout based on your location and the size and weight of the items. For an estimate before you order, WhatsApp 0719 261277.</p></details>
  <details class="ttx-faq"><summary>What payment methods do you accept?</summary><p>M-Pesa, Bank transfer, and Cash on Delivery.</p></details>
  <details class="ttx-faq"><summary>Do your products have a warranty?</summary><p>Warranty coverage varies by product and manufacturer. Where a manufacturer or supplier warranty applies, the applicable period and terms will be provided on the product page, quotation or accompanying documentation. Products without a stated warranty should not be assumed to have one. Keep your receipt in case you need to make a claim.</p></details>
  <details class="ttx-faq"><summary>What is your returns policy?</summary><p>You can return most items within 7 days of delivery for a refund, exchange or store credit, subject to our Returns &amp; Refund Policy.</p></details>
  <details class="ttx-faq"><summary>Do you help with installation?</summary><p>For equipment like solar systems, water pumps and welding machines, we advise on correct installation and safe use. Ask our team when ordering.</p></details>
  <details class="ttx-faq"><summary>Can I order on WhatsApp?</summary><p>Yes. Message 0719 261277 with the item you want and your location, and we will confirm price, stock and delivery.</p></details>
  <details class="ttx-faq"><summary>What are your opening hours?</summary><p>Monday to Saturday, 7:00am to 6:00pm.</p></details>
</div>
TTBODY
    ),
    'why-choose-tools-topia' => array( 'Why Choose Toolstopia', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-cards">
    <div class="ttx-card"><b>Authentic products</b><small>Sourced from established suppliers and distributors.</small></div>
    <div class="ttx-card"><b>Fast delivery</b><small>Next-day in Nairobi and countrywide.</small></div>
    <div class="ttx-card"><b>Honest pricing</b><small>Fair prices, no hidden costs.</small></div>
    <div class="ttx-card"><b>Wide range</b><small>Power tools, solar, water pumps, incubators, welding machines and grinders.</small></div>
    <div class="ttx-card"><b>Easy ordering</b><small>Order on WhatsApp; pay by M-Pesa, Bank or Cash on Delivery.</small></div>
    <div class="ttx-card"><b>Real support</b><small>Reachable help before and after your purchase.</small></div>
  </div>
</div>
TTBODY
    ),
    'authorized-brands' => array( 'Brands We Carry', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>We stock tools, machines and solar products from a range of well-known brands. We work with established suppliers and distributors and provide product and warranty information where applicable.</p></div>
  <div class="ttx-brands">
    <span class="ttx-brand">Makita</span><span class="ttx-brand">Bosch</span><span class="ttx-brand">INGCO</span><span class="ttx-brand">Total</span><span class="ttx-brand">Honda</span><span class="ttx-brand">DeWALT</span><span class="ttx-brand">Stanley</span><span class="ttx-brand">Milwaukee</span><span class="ttx-brand">Tolsen</span><span class="ttx-brand">Crown</span><span class="ttx-brand">Ryobi</span><span class="ttx-brand">Wadfow</span>
  </div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Trusted sourcing</b><small>We work with established suppliers and distributors.</small></div>
    <div class="ttx-card"><b>Warranty where applicable</b><small>Where a manufacturer or supplier warranty applies, the terms are provided with the product.</small></div>
    <div class="ttx-card"><b>Clear product data</b><small>Model numbers, specifications and details are provided where available.</small></div>
    <div class="ttx-card"><b>After-sales support</b><small>Help with parts, servicing and advice.</small></div>
  </div>
  <div class="ttx-cta"><b>Looking for a specific brand?</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="/shop/">Browse the shop</a></div>
</div>
TTBODY
    ),
    'wholesale-bulk' => array( 'Wholesale & Bulk', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>Buying for a project, a business, an institution or a hardware shop? Toolstopia supplies tools, solar products and equipment in bulk at competitive trade prices, with delivery across Kenya.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Competitive bulk pricing</b><small>Request pricing for larger quantities and repeat orders.</small></div>
    <div class="ttx-card"><b>Wide selection</b><small>Tools, solar equipment, welding machines, water pumps, generators and more.</small></div>
    <div class="ttx-card"><b>Kenya-wide delivery</b><small>Delivery arrangements can be made according to order size and destination.</small></div>
    <div class="ttx-card"><b>Dedicated support</b><small>We help coordinate your order from quotation to delivery.</small></div>
  </div>
  <div class="ttx-cta"><b>Get a bulk price</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="/request-a-quote/">Request a quote</a></div>
  <div class="ttx-intro"><p>Tell us the products, models, quantities and your delivery location, and we will prepare a competitive quote. We supply contractors, businesses, institutions, schools and resellers.</p></div>
</div>
TTBODY
    ),
    'request-a-quote' => array( 'Request a Quote', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro"><p>Need pricing for a specific list of items or a large order? Send us your list and we will get back to you quickly with a quote.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>1. List your items</b><small>The products and models you need.</small></div>
    <div class="ttx-card"><b>2. Quantities</b><small>How many of each item.</small></div>
    <div class="ttx-card"><b>3. Delivery location</b><small>Where in Kenya we are delivering.</small></div>
    <div class="ttx-card"><b>4. Your contact</b><small>Name and best phone, WhatsApp or email.</small></div>
  </div>
  <div class="ttx-cta"><b>Send your request</b>
    <a href="https://wa.me/254719261277">WhatsApp 0719 261277</a><a href="tel:0719261277">Call us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
  <h2>Product sourcing and warranty information</h2>
  <p>Product availability, specifications and warranty coverage vary by product and manufacturer. We confirm current availability and applicable terms when preparing your quotation.</p>
  <div class="ttx-intro"><p>We reply during business hours, Monday to Saturday, 7:00am to 6:00pm. For urgent orders, WhatsApp is fastest.</p></div>
</div>
TTBODY
    ),
    'payment-methods' => array( 'Payment Methods', <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro">
    <h1>Payment methods</h1>
    <p>We offer secure, convenient payment options for customers across Kenya. Choose whatever works best for you.</p>
  </div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>M-PESA</b><small>Lipa na M-PESA, Paybill or Till, at checkout or on delivery.</small></div>
    <div class="ttx-card"><b>Bank transfer</b><small>For larger, wholesale or business orders. Bank details on your invoice or on request.</small></div>
    <div class="ttx-card"><b>Cash on delivery</b><small>Selected areas, mainly within Nairobi. Pay cash or M-PESA when your order arrives.</small></div>
  </div>
  <h2>M-PESA</h2>
  <p>Pay via Lipa na M-PESA (Paybill or Till) at checkout or on delivery. M-PESA is fast, secure and confirmed instantly. We will never ask for your PIN.</p>
  <h2>Bank transfer</h2>
  <p>For larger, wholesale or business orders, you can pay by direct bank transfer. Bank details are provided on your invoice or on request. Registered businesses and institutions can also arrange invoice-based payment.</p>
  <h2>Cash on delivery</h2>
  <p>Available in selected areas, mainly within Nairobi. Pay in cash or via M-PESA when your order is delivered. Our team will confirm whether cash on delivery is available for your location.</p>
  <h2>Is it safe to pay?</h2>
  <p>Yes. M-PESA payments are confirmed instantly and securely, and we will never ask for your PIN. For bank transfers, always use the account details shown on your official invoice. If you ever have a concern about a payment, contact us immediately at <a href="tel:0719261277">0719 261277</a> or <a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a>.</p>
  <div class="ttx-cta"><b>Questions about payment?</b>
    <a href="https://wa.me/254719261277">WhatsApp 0719 261277</a><a href="tel:0719261277">Call us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'todays-deals' => array( "Today's Deals", <<<'TTBODY'
<div class="ttx">
  <div class="ttx-intro">
    <h1>Today's Deals</h1>
    <p>Tools and equipment at special prices. Our current offers are shown below and change as new deals go live. For flash deals and stock alerts, follow us on WhatsApp.</p>
  </div>
  <h2>On sale now</h2>
  [products limit="12" columns="4" on_sale="true" orderby="date"]
  <h2>Popular right now</h2>
  [products limit="8" columns="4" orderby="popularity"]
  <div class="ttx-cta"><b>Looking for a specific deal?</b>
    <a href="https://wa.me/254719261277">WhatsApp 0719 261277</a><a href="tel:0719261277">Call us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
  );
}

function tt_find_page( $slug, $title ) {
    $p = get_page_by_path( $slug, OBJECT, 'page' );
    if ( $p ) { return $p->ID; }
    $q = get_posts( array( 'post_type' => 'page', 'post_status' => 'any', 'title' => $title, 'numberposts' => 1, 'fields' => 'ids' ) );
    if ( ! empty( $q ) ) { return $q[0]; }
    return 0;
}

function tt_sync_pages() {
	if ( ! function_exists( 'wp_insert_post' ) ) { return; }
	$meta = tt_pages_meta();
	$done = array();
	foreach ( tt_pages_blueprint() as $slug => $d ) {
		$title   = $d[0];
		$html    = $d[1];
		$content = "<!-- wp:html -->\n" . $html . "\n<!-- /wp:html -->";
		$excerpt = isset( $meta[ $slug ] ) ? $meta[ $slug ] : '';
		$id = tt_find_page( $slug, $title );
		if ( $id ) {
			// Never overwrite an existing page: your edits stay yours.
			$post = get_post( $id );
			if ( $post && '' === trim( (string) $post->post_excerpt ) && '' !== $excerpt ) {
				wp_update_post( array( 'ID' => $id, 'post_excerpt' => $excerpt ) );
				$done[] = array( $title, get_permalink( $id ), 'meta added' );
			} else {
				$done[] = array( $title, get_permalink( $id ), 'kept' );
			}
			continue;
		}
		$new = wp_insert_post( array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_content' => $content,
			'post_excerpt' => $excerpt,
			'post_status'  => 'publish',
			'post_type'    => 'page',
		) );
		if ( $new && ! is_wp_error( $new ) ) {
			$done[] = array( $title, get_permalink( $new ), 'created' );
		}
	}
	update_option( 'tt_pages_done', $done );
	update_option( 'tt_pages_version', TT_PAGES_VERSION );
	set_transient( 'tt_pages_notice', $done, 120 );
	flush_rewrite_rules();
}

// Run once per version whenever an admin page loads.
add_action( 'admin_init', function () {
    if ( get_option( 'tt_pages_version' ) !== TT_PAGES_VERSION ) {
        tt_sync_pages();
    }
} );

// Also run right after the child theme is activated.
add_action( 'after_switch_theme', 'tt_sync_pages' );

// Confirmation notice so you can SEE what was set up, with clickable links.
add_action( 'admin_notices', function () {
    $done = get_transient( 'tt_pages_notice' );
    if ( ! $done ) { return; }
    echo '<div class="notice notice-success is-dismissible"><p><strong>Toolstopia pages are set up.</strong> Click any page to view it:</p><ul style="margin:6px 0 6px 18px;list-style:disc">';
    foreach ( $done as $row ) {
        echo '<li>' . esc_html( $row[0] ) . ' (' . esc_html( $row[2] ) . ') &mdash; <a href="' . esc_url( $row[1] ) . '" target="_blank" rel="noopener">view page</a></li>';
    }
    echo '</ul></div>';
    delete_transient( 'tt_pages_notice' );
} );

// (Removed in v1.9.0: the product-page payment line no longer contains "card", so the runtime str_replace is unnecessary.)

} // end TT_PAGES_LOADED guard


/* ===== Editable homepage settings (Appearance > Customize > Toolstopia Homepage) ===== */
add_action( 'customize_register', function ( $wp_customize ) {
    $wp_customize->add_section( 'tt_home', array( 'title' => 'Toolstopia Homepage', 'priority' => 30 ) );

    $wp_customize->add_setting( 'tt_home_categories', array( 'default' => "Hardware Tools\nSolar Panels\nWater Pumps\nIncubators\nGenerators\nBatteries", 'sanitize_callback' => 'sanitize_textarea_field' ) );
    $wp_customize->add_control( 'tt_home_categories', array( 'type' => 'textarea', 'section' => 'tt_home', 'label' => 'Homepage product rows', 'description' => 'One category name or slug per line, e.g. Solar Panels. Each becomes a product row on the homepage.' ) );

    $wp_customize->add_setting( 'tt_hero_title', array( 'default' => 'Tools & equipment for Kenya', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_hero_title', array( 'type' => 'text', 'section' => 'tt_home', 'label' => 'Hero title' ) );

    $wp_customize->add_setting( 'tt_hero_text', array( 'default' => 'Shop power tools, solar equipment, generators, water pumps, welding equipment and more.', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_hero_text', array( 'type' => 'text', 'section' => 'tt_home', 'label' => 'Hero subtitle' ) );
} );


/* ===== Fallback category image: use the first product's photo when a category has no thumbnail ===== */
add_filter( 'get_term_metadata', function ( $value, $object_id, $meta_key, $single ) {
    if ( 'thumbnail_id' !== $meta_key || ! empty( $value ) || is_admin() ) { return $value; }
    static $cache = array();
    if ( isset( $cache[ $object_id ] ) ) { $v = $cache[ $object_id ]; return $v ? ( $single ? $v : array( $v ) ) : $value; }
    $term = get_term( $object_id );
    if ( ! $term || is_wp_error( $term ) || 'product_cat' !== $term->taxonomy ) { return $value; }
    $ids = get_posts( array(
        'post_type'   => 'product',
        'numberposts' => 1,
        'fields'      => 'ids',
        'post_status' => 'publish',
        'orderby'     => 'menu_order title',
        'order'       => 'ASC',
        'tax_query'   => array( array( 'taxonomy' => 'product_cat', 'field' => 'term_id', 'terms' => $object_id, 'include_children' => true ) ),
        'meta_query'  => array( array( 'key' => '_thumbnail_id', 'compare' => 'EXISTS' ) ),
    ) );
    $img = ( ! empty( $ids ) ) ? get_post_thumbnail_id( $ids[0] ) : 0;
    $cache[ $object_id ] = $img ? $img : 0;
    return $img ? ( $single ? $img : array( $img ) ) : $value;
}, 10, 4 );


/* ===== v1.6.0 site-wide front-end enhancements ===== */
add_action( 'wp_head', function () { ?>
<script>try{if(localStorage.getItem('ttTheme')==='dark'){document.documentElement.classList.add('tt-dark');}}catch(e){}</script>
<?php }, 1 );

add_action( 'wp_footer', function () { ?>
<script>
(function(){
  var d=document;
  function svg(dk){ return dk
    ? '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>'
    : '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg>'; }
  var btn=d.createElement('button'); btn.type='button'; btn.className='tt-theme-toggle'; btn.setAttribute('aria-label','Toggle dark mode');
  function dark(){ return d.documentElement.classList.contains('tt-dark'); }
  function render(){ btn.innerHTML=svg(dark()); }
  btn.addEventListener('click',function(){ d.documentElement.classList.toggle('tt-dark'); try{ localStorage.setItem('ttTheme', dark()?'dark':'light'); }catch(e){} render(); });
  render();
  var cart=d.querySelector('a[href*="/cart"], [class*="mini-cart"] a, [class*="cart"] a'); var host=cart?cart.parentElement:null;
  if(host){ host.appendChild(btn); host.style.marginLeft='auto'; } else { btn.classList.add('tt-theme-toggle--float'); d.body.appendChild(btn); }

  var foot=d.querySelector('footer, .site-footer, [class*="footer"]') || d.body;
  var tw=d.createTreeWalker(foot, NodeFilter.SHOW_TEXT, null); var node;
  while((node=tw.nextNode())){
    var t=node.nodeValue; if(!t){ continue; }
    if(t.indexOf('4:00pm')>-1){ node.nodeValue=' Mon\u2013Sat 7:00am\u20136:00pm'; }
    if(t.indexOf('Nairobi, Kenya')>-1 && t.indexOf('Royal Palms')===-1){ node.nodeValue=t.replace('Nairobi, Kenya','Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya'); }
  }
  var drop=['visa','mastercard','airtel money','airtel'];
  var leaves=foot.querySelectorAll('span,div,li,a,p,mark,strong');
  for(var q=0;q<leaves.length;q++){ var el=leaves[q]; if(el.children.length>0){ continue; } var tx=(el.textContent||'').trim().toLowerCase();
    if(drop.indexOf(tx)>-1){ el.style.display='none'; } else if(tx==='bank'){ el.textContent='Bank Transfer'; } }

  var sum=d.querySelector('.entry-summary, .product .summary, div.summary');
  if(sum){
    var phrases=['Authentic products','Kenya-wide delivery','Pay via','Warranty coverage'];
    var found=[]; var els=sum.querySelectorAll('p,li,span,div');
    for(var r=0;r<els.length;r++){ var e=els[r]; if(e.children.length>0){ continue; } var s=(e.textContent||'').trim();
      for(var p=0;p<phrases.length;p++){ if(s.indexOf(phrases[p])===0){ var seen=false; for(var g=0;g<found.length;g++){ if(found[g].p===p){ seen=true; } } if(!seen){ found.push({p:p,text:s,node:e}); } } } }
    if(found.length===4){
      found.sort(function(a,b){return a.p-b.p;});
      var chk='<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#4a90e2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>';
      var box=d.createElement('div'); box.className='tt-badges';
      for(var m=0;m<found.length;m++){ var it=d.createElement('div'); it.className='tt-b'; it.innerHTML=chk+'<span>'+found[m].text+'</span>'; box.appendChild(it); }
      found[0].node.parentNode.insertBefore(box, found[0].node);
      for(var m2=0;m2<found.length;m2++){ found[m2].node.style.display='none'; }
    }
  }
})();
</script>
<?php }, 99 );

/* ===== v1.7.5 front-end enhancements ===== */
if ( ! function_exists( 'toolstopia_child_v175_scripts' ) ) {
function toolstopia_child_v175_scripts() { ?>
<!-- Toolstopia Child 1.8.6 enhancements active -->
<script>
(function(){
 'use strict';
 function ready(fn){ if(document.readyState!=='loading'){fn();} else {document.addEventListener('DOMContentLoaded',fn);} }
 function esc(s){ return (s||'').replace(/[&<>"]/g,function(c){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c];}); }
 var WA=<?php echo wp_json_encode(preg_replace('/\D/','',get_theme_mod('tt_wa','254719261277'))); ?>, TEL=<?php echo wp_json_encode('+'.preg_replace('/\D/','',get_theme_mod('tt_wa','254719261277'))); ?>, MAIL=<?php echo wp_json_encode(get_theme_mod('tt_email','info@toolstopia.co.ke')); ?>, PHONE=<?php echo wp_json_encode(get_theme_mod('tt_phone','0719 261277')); ?>;
 var O=location.origin;
 var SKIP=/^(cart|basket|my account|account|login|log in|register|sign in|wishlist|saved|search|menu|0|[0-9]+)$/i;
 var PH='<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8.1 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>';
 var ML='<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>';
 var FL='<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5h18M6 12h12M10 19h4"/></svg>';
 var ICON={
   home:'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M3 10.5 12 3l9 7.5"/><path d="M5 9.5V21h14V9.5"/></svg>',
   shop:'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M6 2 3 6v14h18V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
   call:PH, user:'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg>',
   menu:'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>'
 };

 function topBar(){
   var mob=window.innerWidth<=768;
   if(mob){ ttContactBar(); }
   var full='Tools, equipment & supplies  \u00b7  Kenya-wide delivery  \u00b7  Pay via M-Pesa, bank transfer or cash on delivery';
   var w=document.createTreeWalker(document.body,NodeFilter.SHOW_TEXT,null); var n;
   while(n=w.nextNode()){
     if((n.nodeValue||'').indexOf('Kenya-wide delivery')>-1){
       var bar=n.parentElement;
       if(bar){ bar.classList.add('tt-annc-bar'); }
       if(mob){ if(bar){ bar.classList.add('tt-annc-hide-mobile'); } ttContactBar(); }
       else { n.nodeValue=full; }
       return;
     }
   }
 }

 function ttContactBar(){
   if(document.querySelector('.tt-contact-bar')){ return; }
   var b=document.createElement('div'); b.className='tt-contact-bar';
   b.innerHTML='<a href="tel:'+TEL+'">'+PH+PHONE+'</a><span class="d">&middot;</span><a href="mailto:'+MAIL+'">'+ML+MAIL+'</a>';
   if(document.body.firstChild){ document.body.insertBefore(b,document.body.firstChild); } else { document.body.appendChild(b); }
 }
 function footerHref(match,fb){ var f=fb; document.querySelectorAll('footer a, .site-footer a, #colophon a').forEach(function(a){ if((a.textContent||'').replace(/\s+/g,' ').trim().toLowerCase()===match){ f=a.getAttribute('href')||fb; } }); return f; }
 function footerLinks(){
   var ship=footerHref('shipping & delivery', footerHref('shipping policy','/')); var faq=footerHref('faq','/');
   var repl={'careers':{t:'Delivery & Installation',h:ship},'business accounts':{t:'Bulk & Corporate Orders',h:'https://wa.me/'+WA},'service centre':{t:'Help & Support',h:faq},'service center':{t:'Help & Support',h:faq},'wholesale & bulk':{t:'Wholesale & Bulk',h:'/wholesale-bulk/'},'request a quote':{t:'Request a Quote',h:'/request-a-quote/'},"today's deals":{t:"Today's Deals",h:'/todays-deals/'},'todays deals':{t:"Today's Deals",h:'/todays-deals/'}};
   document.querySelectorAll('footer a, .site-footer a, #colophon a').forEach(function(a){ var t=(a.textContent||'').replace(/\s+/g,' ').replace(/[\u2018\u2019\u02bc]/g,"'").trim().toLowerCase(); if(repl[t]){ a.textContent=repl[t].t; a.setAttribute('href',repl[t].h); a.removeAttribute('target'); } });
 }

 function fmtPrice(pr){ try{ var mu=(pr.currency_minor_unit!=null)?pr.currency_minor_unit:2; var pre=(pr.currency_prefix!=null&&pr.currency_prefix!=='')?pr.currency_prefix:'KSh '; var suf=pr.currency_suffix||''; return pre+(parseInt(pr.price,10)/Math.pow(10,mu)).toLocaleString('en-KE',{minimumFractionDigits:mu,maximumFractionDigits:mu})+suf; }catch(e){ return ''; } }
 function doSearch(q,box){
   box.classList.add('open'); box.innerHTML='<div class="tt-sr-msg">Searching\u2026</div>';
   fetch(O+'/wp-json/wc/store/v1/products?per_page=6&search='+encodeURIComponent(q),{headers:{'Accept':'application/json'}})
     .then(function(r){ if(!r.ok){throw 0;} return r.json(); })
     .then(function(list){ if(!list||!list.length){ box.innerHTML='<div class="tt-sr-msg">No products found for \u201c'+esc(q)+'\u201d.</div>'; return; }
       var html=''; list.forEach(function(p){ var img=(p.images&&p.images[0]&&(p.images[0].thumbnail||p.images[0].src))||''; var price=(p.prices&&p.prices.price!=null)?fmtPrice(p.prices):''; html+='<a class="tt-sr-item" href="'+p.permalink+'">'+(img?'<img src="'+img+'" alt="" loading="lazy">':'')+'<div class="tt-sr-info"><div class="tt-sr-title">'+esc(p.name)+'</div>'+(price?'<div class="tt-sr-price">'+price+'</div>':'')+'</div></a>'; });
       html+='<a class="tt-sr-all" href="'+O+'/?s='+encodeURIComponent(q)+'&post_type=product">See all results</a>'; box.innerHTML=html; })
     .catch(function(){ box.innerHTML='<a class="tt-sr-all" href="'+O+'/?s='+encodeURIComponent(q)+'&post_type=product">Search \u201c'+esc(q)+'\u201d \u2192</a>'; });
 }
 function wireSearch(inp){
   if(!inp||inp.__ttLive){return;} inp.__ttLive=1;
   var host=inp.closest('form')||inp.parentElement; if(!host){return;}
   host.style.position='relative'; var box=document.createElement('div'); box.className='tt-search-results'; host.appendChild(box); inp.setAttribute('autocomplete','off'); var t=null;
   inp.addEventListener('input',function(){ var q=inp.value.trim(); if(q.length<2){ box.classList.remove('open'); box.innerHTML=''; return; } clearTimeout(t); t=setTimeout(function(){ doSearch(q,box); },170); });
   inp.addEventListener('focus',function(){ if(box.innerHTML){ box.classList.add('open'); } });
   document.addEventListener('click',function(e){ if(!box.contains(e.target)&&e.target!==inp){ box.classList.remove('open'); } });
 }
 function liveSearch(){ document.querySelectorAll('input[type="search"], input[name="s"], input.search-field, input[name="q"], input[type="text"][class*="search"], input[placeholder*="earch"]').forEach(wireSearch); }

 function mobileMenu(){
   if(document.querySelector('.tt-mob-menu')){return;}
   var header=document.querySelector('header, .site-header, #masthead, [class*="site-header"]'); if(!header){return;}
   var linksHtml=''; var seen={}; var count=0;
   header.querySelectorAll('ul').forEach(function(ul){
     if(ul.parentElement && ul.parentElement.closest('ul')){return;} var got=false;
     Array.prototype.forEach.call(ul.children,function(li){ var a=li.querySelector?li.querySelector('a'):null; if(!a){return;} var t=(a.textContent||'').replace(/\s+/g,' ').trim(); var h=a.getAttribute('href')||'#'; if(t && t.length<40 && !SKIP.test(t) && !seen[t.toLowerCase()] && count<30){ seen[t.toLowerCase()]=1; linksHtml+='<a href="'+h+'">'+esc(t)+'</a>'; got=true; count++; } });
     if(got){ var cont=ul.closest('nav')||ul; var chrome=cont.querySelector('img, [class*="logo"], [class*="cart"], [class*="account"]'); (chrome?ul:cont).classList.add('tt-mobnav-hide'); }
   });
   var backdrop=document.createElement('div'); backdrop.className='tt-backdrop';
   var menu=document.createElement('div'); menu.className='tt-mob-menu';
   menu.innerHTML='<div class="tt-mob-menu__head"><b>Menu</b><button type="button" class="tt-mob-menu__close" aria-label="Close">\u00d7</button></div>'+
     '<form class="tt-mob-menu__search" role="search" method="get" action="'+O+'/"><input type="search" name="s" placeholder="Search products\u2026" aria-label="Search products"><input type="hidden" name="post_type" value="product"></form>'+
     (linksHtml?'<div class="tt-mm-label">Browse</div>'+linksHtml:'');
   document.body.appendChild(backdrop); document.body.appendChild(menu);
   function closeM(){ menu.classList.remove('open'); backdrop.classList.remove('open'); document.body.style.overflow=''; }
   backdrop.addEventListener('click',closeM);
   menu.querySelector('.tt-mob-menu__close').addEventListener('click',closeM);
   menu.querySelectorAll('a').forEach(function(a){ a.addEventListener('click',closeM); });
   fetch(O+'/wp-json/wc/store/v1/products/categories?per_page=20&orderby=count&order=desc&hide_empty=true',{headers:{'Accept':'application/json'}})
     .then(function(r){ return r.json(); })
     .then(function(cats){ if(!cats||!cats.length){return;} var h='<div class="tt-mm-label">Shop by Category</div>'; cats.forEach(function(c){ var url=c.permalink||(O+'/product-category/'+c.slug+'/'); h+='<a href="'+url+'">'+esc(c.name)+'<span>'+c.count+'</span></a>'; }); menu.insertAdjacentHTML('beforeend',h); menu.querySelectorAll('a').forEach(function(a){ if(!a.__ttC){ a.__ttC=1; a.addEventListener('click',closeM); } }); })
     .catch(function(){});
 }
 function openMobMenu(){ var m=document.querySelector('.tt-mob-menu'), b=document.querySelector('.tt-backdrop'); if(m){m.classList.add('open');} if(b){b.classList.add('open');} document.body.style.overflow='hidden'; }

 function mobileSearchBar(){
   if(document.querySelector('.tt-msearch')){return;}
   var header=document.querySelector('header, .site-header, #masthead');
   var bar=document.createElement('div'); bar.className='tt-msearch';
   bar.innerHTML='<form role="search" method="get" action="'+O+'/"><input type="search" name="s" placeholder="Search tools, brands & part numbers\u2026" aria-label="Search"><input type="hidden" name="post_type" value="product"><button type="submit">Search</button></form>';
   if(header && header.parentNode){ header.parentNode.insertBefore(bar, header.nextSibling); } else { document.body.insertBefore(bar, document.body.firstChild); }
   try{ wireSearch(bar.querySelector('input[type="search"]')); }catch(e){}
   if(header){ var si=header.querySelector('input[type="search"], input[name="s"]'); if(si){ var f=si.closest('form')||si.parentElement; if(f){ f.classList.add('tt-hide-mobile'); } } }
 }

 function bottomNav(){
   if(document.querySelector('.tt-bnav')){return;}
   var nav=document.createElement('nav'); nav.className='tt-bnav';
   nav.innerHTML='<a href="'+O+'/">'+ICON.home+'<span>Home</span></a><a href="'+O+'/shop/">'+ICON.shop+'<span>Shop</span></a><a href="tel:'+TEL+'">'+ICON.call+'<span>Call</span></a><a href="'+O+'/my-account/">'+ICON.user+'<span>Account</span></a><button type="button" class="tt-bnav-menu">'+ICON.menu+'<span>Menu</span></button>';
   document.body.appendChild(nav);
   nav.querySelector('.tt-bnav-menu').addEventListener('click',openMobMenu);
   var markers=['saved','whatsapp'];
   document.querySelectorAll('a').forEach(function(a){ var t=(a.textContent||'').replace(/\s+/g,' ').trim().toLowerCase(); if(markers.indexOf(t)>-1){ var el=a; for(var i=0;i<6 && el;i++){ el=el.parentElement; if(el && el!==document.body){ try{ if(getComputedStyle(el).position==='fixed'){ el.classList.add('tt-parent-bnav-hide'); break; } }catch(_){} } } } });
 }

 function heroAccordion(){ var cats=document.querySelector('.tt-home .tt-hero__cats'); if(!cats){return;} var h=cats.querySelector('h3'); if(!h||h.__ttAcc){return;} h.__ttAcc=1; h.addEventListener('click',function(){ cats.classList.toggle('tt-acc-open'); }); }

 /* Advanced filter drawer on shop/category pages */
 function isCatPage(){ return /product-category\//.test(location.pathname); }
 function isArchive(){ var b=document.body.className||''; if(/woocommerce-shop|tax-product_cat|tax-product_tag|post-type-archive-product/.test(b)){return true;} if(!document.querySelector('.tt-home') && document.querySelector('.woocommerce ul.products, ul.products')){return true;} return false; }
 function filterInit(){
   if(!isArchive()){return;} if(document.querySelector('.tt-filter-open')){return;}
   var list=document.querySelector('ul.products'); if(!list||!list.parentNode){return;}
   var bar=document.createElement('div'); bar.className='tt-filter-bar'; bar.innerHTML='<button type="button" class="tt-filter-open">'+FL+'Filter & sort</button>';
   list.parentNode.insertBefore(bar,list);
   var bd=document.createElement('div'); bd.className='tt-filter-backdrop';
   var dr=document.createElement('div'); dr.className='tt-filter-drawer';
   dr.innerHTML='<div class="tt-filter-drawer__head"><b>Filter & sort</b><button type="button" class="tt-filter-close" aria-label="Close">\u00d7</button></div><div class="tt-filter-body"><h4>Sort by</h4><select class="tt-f-sort"><option value="">Default</option><option value="date">Newest first</option><option value="price">Price: low to high</option><option value="price-desc">Price: high to low</option><option value="popularity">Most popular</option><option value="rating">Top rated</option></select><h4>Price (KSh)</h4><div class="tt-price-row"><input type="number" class="tt-f-min" placeholder="Min" min="0" inputmode="numeric"><input type="number" class="tt-f-max" placeholder="Max" min="0" inputmode="numeric"></div><h4>Category</h4><div class="tt-cat-list"><label><input type="radio" name="ttcat" value="" checked> All categories</label></div></div><div class="tt-filter-foot"><button type="button" class="apply">Apply filters</button><button type="button" class="clear">Clear all</button></div>';
   document.body.appendChild(bd); document.body.appendChild(dr);
   var params=new URLSearchParams(location.search);
   if(params.get('orderby')){ dr.querySelector('.tt-f-sort').value=params.get('orderby'); }
   if(params.get('min_price')){ dr.querySelector('.tt-f-min').value=params.get('min_price'); }
   if(params.get('max_price')){ dr.querySelector('.tt-f-max').value=params.get('max_price'); }
   var curCat=location.pathname.match(/product-category\/([^\/]+)/);
   fetch(O+'/wp-json/wc/store/v1/products/categories?per_page=30&orderby=count&order=desc&hide_empty=true',{headers:{'Accept':'application/json'}})
     .then(function(r){ return r.json(); })
     .then(function(cats){ if(!cats||!cats.length){return;} var cl=dr.querySelector('.tt-cat-list'); cats.forEach(function(c){ var chk=(curCat&&curCat[1]===c.slug)?' checked':''; cl.insertAdjacentHTML('beforeend','<label><input type="radio" name="ttcat" value="'+esc(c.slug)+'"'+chk+'> '+esc(c.name)+' ('+c.count+')</label>'); }); })
     .catch(function(){});
   function openF(){ dr.classList.add('open'); bd.classList.add('open'); document.body.style.overflow='hidden'; }
   function closeF(){ dr.classList.remove('open'); bd.classList.remove('open'); document.body.style.overflow=''; }
   bar.querySelector('.tt-filter-open').addEventListener('click',openF);
   bd.addEventListener('click',closeF);
   dr.querySelector('.tt-filter-close').addEventListener('click',closeF);
   dr.querySelector('.apply').addEventListener('click',function(){
     var sort=dr.querySelector('.tt-f-sort').value, mn=dr.querySelector('.tt-f-min').value, mx=dr.querySelector('.tt-f-max').value;
     var catEl=dr.querySelector('input[name="ttcat"]:checked'); var cat=catEl?catEl.value:'';
     var base= cat ? (O+'/product-category/'+cat+'/') : (isCatPage()?(O+location.pathname):(O+'/shop/'));
     var qs=[]; if(sort){qs.push('orderby='+encodeURIComponent(sort));} if(mn){qs.push('min_price='+encodeURIComponent(mn));} if(mx){qs.push('max_price='+encodeURIComponent(mx));}
     location.href=base+(qs.length?('?'+qs.join('&')):'');
   });
   dr.querySelector('.clear').addEventListener('click',function(){ location.href= isCatPage()?(O+location.pathname):(O+'/shop/'); });
 }

 function fmtCartTotal(t){ try{ var mu=(t.currency_minor_unit!=null)?t.currency_minor_unit:2; var pre=t.currency_prefix||'KSh '; return pre+(parseInt(t.total_price,10)/Math.pow(10,mu)).toLocaleString('en-KE',{minimumFractionDigits:mu,maximumFractionDigits:mu}); }catch(e){ return ''; } }
 function cartDrawerInit(){
   if(document.querySelector('.tt-cart-drawer')){return;}
   var bd=document.createElement('div'); bd.className='tt-cart-backdrop';
   var dr=document.createElement('div'); dr.className='tt-cart-drawer';
   dr.innerHTML='<div class="tt-cart-drawer__head"><b>Your cart</b><button type="button" class="tt-cart-close" aria-label="Close">\u00d7</button></div><div class="tt-cart-ok"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg><span>Item added to your cart</span></div><div class="tt-cart-body"></div><div class="tt-cart-sub"><span>Subtotal</span><span class="tt-cart-subval"></span></div><div class="tt-cart-foot"><a class="co" href="'+O+'/checkout/">Proceed to checkout</a><a class="vc" href="'+O+'/cart/">View cart</a><a class="cont" href="#">Continue shopping</a></div>';
   document.body.appendChild(bd); document.body.appendChild(dr);
   function close(){ dr.classList.remove('open'); bd.classList.remove('open'); document.body.style.overflow=''; }
   bd.addEventListener('click',close); dr.querySelector('.tt-cart-close').addEventListener('click',close); dr.querySelector('.cont').addEventListener('click',function(e){ e.preventDefault(); close(); });
   window.__ttOpenCart=function(){ refreshCart(); dr.classList.add('open'); bd.classList.add('open'); document.body.style.overflow='hidden'; };
 }
 function refreshCart(){
   var body=document.querySelector('.tt-cart-body'), sub=document.querySelector('.tt-cart-subval'); if(!body){return;}
   fetch(O+'/wp-json/wc/store/v1/cart',{headers:{'Accept':'application/json'},credentials:'same-origin'})
     .then(function(r){ return r.json(); })
     .then(function(c){ var items=(c&&c.items)||[]; var html=''; items.forEach(function(it){ var img=(it.images&&it.images[0]&&(it.images[0].thumbnail||it.images[0].src))||''; html+='<div class="tt-cart-item">'+(img?'<img src="'+img+'" alt="">':'')+'<div><div class="n">'+esc(it.name)+'</div><div class="q">Qty '+it.quantity+'</div></div></div>'; }); body.innerHTML=html||'<div class="tt-sr-msg">Your cart is updating\u2026</div>'; if(sub&&c&&c.totals){ sub.textContent=fmtCartTotal(c.totals); } })
     .catch(function(){});
 }
 function cartHooks(){ cartDrawerInit(); if(window.jQuery){ try{ window.jQuery(document.body).on('added_to_cart',function(){ if(window.__ttOpenCart){window.__ttOpenCart();} }); }catch(e){} } }

 function runAll(){ try{topBar();}catch(e){} try{footerLinks();}catch(e){} try{liveSearch();}catch(e){} try{mobileMenu();}catch(e){} try{mobileSearchBar();}catch(e){} try{bottomNav();}catch(e){} try{heroAccordion();}catch(e){} try{filterInit();}catch(e){} try{cartHooks();}catch(e){} }
 document.addEventListener('input',function(e){ var el=e.target; if(el&&el.matches&&el.matches('input[type="search"],input[name="s"],input.search-field,input[name="q"]')&&!el.__ttLive){ try{wireSearch(el);}catch(_){} } },true);
 ready(function(){ runAll(); setTimeout(runAll,700); setTimeout(runAll,1800); });
 try{ console.log('%cToolstopia Child v1.8.1','color:#4a90e2;font-weight:bold','front-end enhancements active'); }catch(e){}
})();
</script>
<?php }
add_action( 'wp_footer', 'toolstopia_child_v175_scripts', 95 );
}



/* ============================================================
   Toolstopia Child v1.8.1 - performance, security, anti-spam
   ============================================================ */

/* Speed: preconnect / dns-prefetch to third-party origins */
add_action( 'wp_head', 'tt_perf_hints', 1 );
function tt_perf_hints() {
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	echo '<link rel="dns-prefetch" href="//www.google.com">' . "\n";
	echo '<link rel="dns-prefetch" href="//maps.google.com">' . "\n";
}

/* Security: hardening response headers + strip version fingerprints */
add_action( 'send_headers', 'tt_security_headers' );
function tt_security_headers() {
	if ( headers_sent() ) { return; }
	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: geolocation=(), microphone=(), camera=()' );
}
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
add_filter( 'the_generator', '__return_empty_string' );

/* Anti-spam: disable XML-RPC, pingbacks/trackbacks and page comments */
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'wp_headers', 'tt_no_pingback_header' );
function tt_no_pingback_header( $headers ) {
	if ( isset( $headers['X-Pingback'] ) ) { unset( $headers['X-Pingback'] ); }
	return $headers;
}
add_action( 'pre_ping', 'tt_block_self_ping' );
function tt_block_self_ping( &$links ) {
	foreach ( $links as $k => $v ) { unset( $links[ $k ] ); }
}
add_filter( 'comments_open', 'tt_pages_comments_off', 10, 2 );
function tt_pages_comments_off( $open, $post_id ) {
	if ( 'page' === get_post_type( $post_id ) ) { return false; }
	return $open;
}

/* ============================================================
   Product data completeness (Google Merchant / SEO)
   ============================================================ */
if ( ! function_exists( 'tt_detect_brand' ) ) {
	function tt_detect_brand( $product ) {
		$brands = array( 'Makita','Bosch','Ingco','Total','Honda','DeWalt','Stanley','Milwaukee','Tolsen','Crown','Ryobi','Wadfow','Hikoki','Metabo','Einhell','Dongcheng','Karcher','Yamaha','Loncin','Ronix' );
		$name = $product ? $product->get_name() : '';
		foreach ( $brands as $b ) {
			if ( stripos( $name, $b ) !== false ) { return $b; }
		}
		if ( $product ) {
			$a = $product->get_attribute( 'brand' );
			if ( empty( $a ) ) { $a = $product->get_attribute( 'pa_brand' ); }
			if ( ! empty( $a ) ) { return $a; }
		}
		return '';
	}
}

/* Google Maps embed via shortcode (stored as text, survives kses) */
if ( ! shortcode_exists( 'tt_map' ) ) {
	add_shortcode( 'tt_map', 'tt_map_shortcode' );
	function tt_map_shortcode( $atts ) {
		$q   = 'Royal Palms Mall, Ronald Ngala Street, Nairobi, Kenya';
		$src = 'https://www.google.com/maps?q=' . rawurlencode( $q ) . '&output=embed';
		return '<div class="tt-mapwrap"><iframe title="Toolstopia location" src="' . esc_url( $src ) . '" width="100%" height="340" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>';
	}
}

/* Enrich WooCommerce Product JSON-LD with brand + new condition */
add_filter( 'woocommerce_structured_data_product', 'tt_product_schema', 20, 2 );
function tt_product_schema( $markup, $product ) {
	if ( ! is_array( $markup ) || ! $product ) { return $markup; }
	$brand = tt_detect_brand( $product );
	if ( ! empty( $brand ) && empty( $markup['brand'] ) ) {
		$markup['brand'] = array( '@type' => 'Brand', 'name' => $brand );
	}
	if ( isset( $markup['offers'] ) && is_array( $markup['offers'] ) ) {
		foreach ( $markup['offers'] as $k => $offer ) {
			if ( is_array( $offer ) && empty( $offer['itemCondition'] ) ) {
				$markup['offers'][ $k ]['itemCondition'] = 'https://schema.org/NewCondition';
			}
		}
	}
	return $markup;
}

/* Consistent info panel on every product page (trust + logistics) */
add_action( 'woocommerce_single_product_summary', 'tt_product_info_panel', 25 );
function tt_product_info_panel() {
	global $product;
	if ( ! $product || ! is_a( $product, 'WC_Product' ) ) { return; }
	$brand  = tt_detect_brand( $product );
	$sku    = $product->get_sku();
	$stock  = $product->is_in_stock() ? 'In stock, ready to ship' : 'Available on order';
	$origin = $product->get_attribute( 'country-of-origin' );
	if ( empty( $origin ) ) { $origin = $product->get_attribute( 'pa_country-of-origin' ); }
	if ( empty( $origin ) ) { $origin = 'Imported'; }
	$rows = array();
	if ( ! empty( $brand ) ) { $rows[] = array( 'Brand', esc_html( $brand ) ); }
	if ( ! empty( $sku ) )   { $rows[] = array( 'SKU / Model', esc_html( $sku ) ); }
	$rows[] = array( 'Availability', esc_html( $stock ) );
	$rows[] = array( 'Warranty', 'Where applicable; varies by product and manufacturer' );
	$rows[] = array( 'Delivery', 'Kenya-wide; typically 2-5 business days' );
	$rows[] = array( 'Country of origin', esc_html( $origin ) );
	$rows[] = array( 'Returns', '7-day returns on unused items' );
	echo '<div class="tt-pinfo"><ul>';
	foreach ( $rows as $r ) {
		echo '<li><span class="tt-pinfo-k">' . $r[0] . '</span><span class="tt-pinfo-v">' . $r[1] . '</span></li>';
	}
	echo '</ul><div class="tt-pinfo-badges"><span>Authentic products</span><span>Established suppliers</span><span>Warranty where applicable</span></div></div>';
}


/* Editable SEO meta descriptions (seeded into each page Excerpt, fully editable) */
function tt_pages_meta() {
	return array(
		'about-us'               => 'Toolstopia is a Kenya-based online retailer of power tools, solar and equipment. Clear product information, transparent pricing and Kenya-wide delivery.',
		'shipping-policy'        => 'How Toolstopia ships your order: next-day in Nairobi and 2-5 days countrywide. Delivery charges, timelines and tracking explained.',
		'returns-refund-policy'  => 'Toolstopia returns and refund policy: 7-day returns on unused items, warranty claims and how to request a refund or exchange.',
		'delivery-installation'  => 'Fast delivery and professional installation of tools, solar systems and equipment across Nairobi and Kenya. Book delivery or installation today.',
		'contact-us'             => 'Contact Toolstopia: call or WhatsApp 0719 261277, email info@toolstopia.co.ke, or visit Royal Palms Mall, Shop BG 55, Nairobi. Mon-Sat 7am-6pm.',
		'faq'                    => 'Answers about products, warranty, delivery, payment via M-Pesa, bank or cash, and returns at Toolstopia, Nairobi.',
		'why-choose-tools-topia' => 'Authentic products, Kenya-wide delivery, honest pricing and real support. See why customers choose Toolstopia in Nairobi.',
		'authorized-brands'      => 'Brands we carry at Toolstopia: Makita, Bosch, INGCO, Total, Honda and more. We work with established suppliers and distributors; warranty where applicable.',
		'wholesale-bulk'         => 'Bulk and wholesale supply of tools, solar and equipment in Kenya at trade prices. Contractors, businesses and resellers welcome. Kenya-wide delivery.',
		'request-a-quote'        => 'Request a fast quote from Toolstopia for tools, solar and equipment. Send your list, quantities and location by WhatsApp, call or email. Countrywide delivery.',
		'payment-methods'        => 'How to pay Toolstopia: M-PESA, bank transfer and cash on delivery. Simple, secure payment for tools, solar and equipment, with countrywide delivery.',
		'todays-deals'           => 'Deals at Toolstopia: power tools, solar and equipment on sale now, plus our most popular products. Special prices with Kenya-wide delivery.',
	);
}

add_action( 'wp_head', 'tt_meta_description', 2 );
function tt_meta_description() {
	// Stand aside if a dedicated SEO plugin is active (Yoast, Rank Math, AIOSEO, SEOPress).
	if ( defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' ) ) { return; }
	$desc = '';
	if ( is_front_page() ) {
		$desc = get_bloginfo( 'description' );
		if ( '' === trim( (string) $desc ) ) {
			$desc = 'Buy power tools, solar and equipment in Kenya. Kenya-wide delivery. Pay via M-Pesa, bank transfer or cash on delivery.';
		}
	} elseif ( is_singular() ) {
		$post = get_queried_object();
		if ( $post && '' !== trim( (string) $post->post_excerpt ) ) {
			$desc = $post->post_excerpt;
		} elseif ( $post ) {
			$desc = wp_trim_words( wp_strip_all_tags( strip_shortcodes( $post->post_content ) ), 30, '' );
		}
	} else {
		$term = get_queried_object();
		if ( $term && ! empty( $term->description ) ) {
			$desc = wp_strip_all_tags( $term->description );
		} elseif ( function_exists( 'is_shop' ) && is_shop() ) {
			$desc = 'Shop power tools, solar and equipment at Toolstopia. Kenya-wide delivery, clear product information and customer support.';
		} elseif ( $term && isset( $term->name ) ) {
			$desc = 'Shop ' . $term->name . ' at Toolstopia. Clear product information and Kenya-wide delivery.';
		}
	}
	$desc = trim( preg_replace( '/\s+/', ' ', (string) $desc ) );
	if ( '' === $desc ) { return; }
	if ( function_exists( 'mb_strlen' ) && mb_strlen( $desc ) > 160 ) { $desc = rtrim( mb_substr( $desc, 0, 157 ) ) . '...'; }
	echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
}


/* ============================================================
   Toolstopia Child v1.8.1 - clean, compact admin Products list
   ============================================================ */
add_filter( 'manage_edit-product_columns', 'tt_admin_product_columns', 99 );
function tt_admin_product_columns( $columns ) {
	// Whitelist: Image, Name, SKU, Stock, Price, Categories, Featured, Date (plus bulk checkbox).
	$keep = array( 'cb', 'thumb', 'name', 'sku', 'is_in_stock', 'price', 'product_cat', 'featured', 'date' );
	$out = array();
	foreach ( $keep as $k ) {
		if ( isset( $columns[ $k ] ) ) { $out[ $k ] = $columns[ $k ]; }
	}
	return $out;
}

add_action( 'admin_head', 'tt_admin_product_list_css' );
function tt_admin_product_list_css() {
	$screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
	if ( ! $screen || 'edit-product' !== $screen->id ) { return; }
	echo '<style>
table.wp-list-table .column-thumb{width:56px !important;text-align:center}
table.wp-list-table .column-thumb img{width:44px !important;height:44px !important;max-width:44px !important;object-fit:contain;display:inline-block;vertical-align:middle}
table.wp-list-table td.column-thumb{padding:6px 8px}
table.wp-list-table .column-name{width:26%}
table.wp-list-table .column-sku{width:12%;white-space:nowrap}
table.wp-list-table .column-is_in_stock{width:9%}
table.wp-list-table .column-price{width:10%;white-space:nowrap}
table.wp-list-table .column-featured{width:70px;text-align:center}
</style>';
}


/* ============================================================
   Toolstopia Child v1.8.1 - make the homepage easily editable
   (Appearance > Customize > Toolstopia ...)
   ============================================================ */
function tt_sanitize_checkbox( $v ) { return ( isset( $v ) && $v ) ? 1 : 0; }

add_action( 'customize_register', 'tt_customize_full', 20 );
function tt_customize_full( $wp_customize ) {

    /* ---- Hero slider: 4 slides, each fully editable ---- */
    $wp_customize->add_section( 'tt_hero_slides', array( 'title' => 'Homepage Hero Slider', 'priority' => 31 ) );
    $sd = array(
        1 => array( "Kenya-wide delivery", "Tools & equipment for Kenya", "Shop power tools, solar equipment, generators, water pumps, welding equipment and more.", "Shop All Tools", "" ),
        2 => array( "Solar & power", "Power that never quits", "Panels, inverters and batteries for home, business and off-grid living.", "Shop Solar", "" ),
        3 => array( "Generators & pumps", "Reliable backup power & water", "Petrol generators and water pumps built for Kenyan conditions.", "Shop now", "" ),
        4 => array( "Kenya-wide delivery", "Fast delivery across Kenya", "Typically 2-5 business days countrywide. Pay by M-Pesa, bank transfer or cash on delivery.", "Delivery details", "/shipping-policy/" ),
    );
    foreach ( $sd as $i => $d ) {
        $img_default = get_stylesheet_directory_uri() . '/assets/slides/slide' . $i . '.jpg';
        $wp_customize->add_setting( "tt_slide{$i}_img", array( 'default' => $img_default, 'sanitize_callback' => 'esc_url_raw' ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "tt_slide{$i}_img", array( 'section' => 'tt_hero_slides', 'label' => "Slide {$i} background image" ) ) );
        $wp_customize->add_setting( "tt_slide{$i}_eyebrow", array( 'default' => $d[0], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "tt_slide{$i}_eyebrow", array( 'type' => 'text', 'section' => 'tt_hero_slides', 'label' => "Slide {$i} small label" ) );
        $wp_customize->add_setting( "tt_slide{$i}_heading", array( 'default' => $d[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "tt_slide{$i}_heading", array( 'type' => 'text', 'section' => 'tt_hero_slides', 'label' => "Slide {$i} heading" ) );
        $wp_customize->add_setting( "tt_slide{$i}_text", array( 'default' => $d[2], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "tt_slide{$i}_text", array( 'type' => 'textarea', 'section' => 'tt_hero_slides', 'label' => "Slide {$i} text" ) );
        $wp_customize->add_setting( "tt_slide{$i}_btn", array( 'default' => $d[3], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "tt_slide{$i}_btn", array( 'type' => 'text', 'section' => 'tt_hero_slides', 'label' => "Slide {$i} button label" ) );
        $wp_customize->add_setting( "tt_slide{$i}_url", array( 'default' => $d[4], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "tt_slide{$i}_url", array( 'type' => 'text', 'section' => 'tt_hero_slides', 'label' => "Slide {$i} button link (blank = Shop page)" ) );
    }

    /* Homepage statistics band removed in v1.9.0: unverified numbers are no longer displayed. */

    /* ---- Trust badges ---- */
    $wp_customize->add_section( 'tt_trust_sec', array( 'title' => 'Homepage Trust Badges', 'priority' => 33 ) );
    $wp_customize->add_setting( 'tt_certs_show', array( 'default' => 1, 'sanitize_callback' => 'tt_sanitize_checkbox' ) );
    $wp_customize->add_control( 'tt_certs_show', array( 'type' => 'checkbox', 'section' => 'tt_trust_sec', 'label' => 'Show the certifications band' ) );
    $ct = array( 1 => 'SSL Secure', 2 => 'Secure Payments', 3 => 'Warranty Information', 4 => 'Customer Support' );
    foreach ( $ct as $i => $d ) {
        $wp_customize->add_setting( "tt_cert{$i}", array( 'default' => $d, 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "tt_cert{$i}", array( 'type' => 'text', 'section' => 'tt_trust_sec', 'label' => "Badge {$i}" ) );
    }

    /* ---- Category count for the hero list (added to existing section) ---- */
    $wp_customize->add_setting( 'tt_cat_count', array( 'default' => 14, 'sanitize_callback' => 'absint' ) );
    $wp_customize->add_control( 'tt_cat_count', array( 'type' => 'number', 'section' => 'tt_home', 'label' => 'Categories shown in hero list', 'input_attrs' => array( 'min' => 4, 'max' => 30 ) ) );
}


/* ============================================================
   Toolstopia Child v1.8.1 - contact + business/legal (editable)
   ============================================================ */
add_action( 'customize_register', 'tt_customize_contact_legal', 21 );
function tt_customize_contact_legal( $wp_customize ) {
    $wp_customize->add_section( 'tt_contact_sec', array( 'title' => 'Contact Details', 'priority' => 34 ) );
    $wp_customize->add_setting( 'tt_phone', array( 'default' => '0719 261277', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_phone', array( 'type' => 'text', 'section' => 'tt_contact_sec', 'label' => 'Phone (as displayed)', 'description' => 'Shown in the top contact bar, e.g. 0719 261277' ) );
    $wp_customize->add_setting( 'tt_wa', array( 'default' => '254719261277', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_wa', array( 'type' => 'text', 'section' => 'tt_contact_sec', 'label' => 'WhatsApp / call number', 'description' => 'International, digits only, e.g. 254719261277. Used for WhatsApp and tap-to-call.' ) );
    $wp_customize->add_setting( 'tt_email', array( 'default' => 'info@toolstopia.co.ke', 'sanitize_callback' => 'sanitize_email' ) );
    $wp_customize->add_control( 'tt_email', array( 'type' => 'email', 'section' => 'tt_contact_sec', 'label' => 'Email address' ) );

    $wp_customize->add_section( 'tt_legal_sec', array( 'title' => 'Business / Legal Details', 'priority' => 35 ) );
    $wp_customize->add_setting( 'tt_reg_name', array( 'default' => 'Toolstopia', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_reg_name', array( 'type' => 'text', 'section' => 'tt_legal_sec', 'label' => 'Registered business name' ) );
    $wp_customize->add_setting( 'tt_reg_country', array( 'default' => 'Kenya', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_reg_country', array( 'type' => 'text', 'section' => 'tt_legal_sec', 'label' => 'Registered in (country)' ) );
    $wp_customize->add_setting( 'tt_reg_number', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_reg_number', array( 'type' => 'text', 'section' => 'tt_legal_sec', 'label' => 'Business registration number', 'description' => 'Leave blank to hide' ) );
    $wp_customize->add_setting( 'tt_kra_pin', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'tt_kra_pin', array( 'type' => 'text', 'section' => 'tt_legal_sec', 'label' => 'KRA PIN', 'description' => 'Leave blank to hide' ) );
}

/* Footer registration line */
add_action( 'wp_footer', 'tt_legal_line', 20 );
function tt_legal_line() {
    $name    = trim( get_theme_mod( 'tt_reg_name', 'Toolstopia' ) );
    $country = trim( get_theme_mod( 'tt_reg_country', 'Kenya' ) );
    $reg     = trim( get_theme_mod( 'tt_reg_number', '' ) );
    $pin     = trim( get_theme_mod( 'tt_kra_pin', '' ) );
    $parts = array();
    if ( '' !== $name )    { $parts[] = 'Registered business: ' . esc_html( $name ); }
    if ( '' !== $country ) { $parts[] = 'Registered in ' . esc_html( $country ); }
    if ( '' !== $reg )     { $parts[] = 'Reg No: ' . esc_html( $reg ); }
    if ( '' !== $pin )     { $parts[] = 'KRA PIN: ' . esc_html( $pin ); }
    if ( empty( $parts ) ) { return; }
    echo '<div class="tt-legal">' . implode( ' &middot; ', $parts ) . '</div>';
}

/* Auto-embed the Google Map on the Contact page (only if none is present yet) */
add_filter( 'the_content', 'tt_contact_map', 20 );
function tt_contact_map( $content ) {
    if ( ! is_page() || ! in_the_loop() || ! is_main_query() ) { return $content; }
    $post = get_post();
    if ( ! $post || 'contact-us' !== $post->post_name ) { return $content; }
    if ( false !== strpos( $content, 'tt-mapwrap' ) || false !== strpos( $content, 'tt_map' ) || false !== strpos( $content, 'google.com/maps' ) || false !== strpos( $content, 'maps.google' ) ) { return $content; }
    return $content . do_shortcode( '[tt_map]' );
}

/* One-time correction: fix the old 2:00pm cut-off on existing pages (only that string) */
add_action( 'admin_init', 'tt_fix_cutoff_once' );

function tt_fix_payments_once() {
    if ( get_option( 'tt_payments_fixed' ) ) { return; }
    $p = get_page_by_path( 'payment-methods' );
    if ( $p && false !== strpos( $p->post_content, 'Visa and Mastercard' ) ) {
        $bp = tt_pages_blueprint();
        if ( isset( $bp['payment-methods'] ) ) {
            wp_update_post( array( 'ID' => $p->ID, 'post_content' => "<!-- wp:html -->\n" . $bp['payment-methods'][1] . "\n<!-- /wp:html -->" ) );
        }
    }
    update_option( 'tt_payments_fixed', 1 );
}
add_action( 'admin_init', 'tt_fix_payments_once' );

function tt_privacy_html() {
    return <<<'TTPRIV'
<div class="ttx">
  <div class="ttx-intro">
    <h1>Privacy Policy</h1>
    <p>This Privacy Policy explains how Toolstopia ("we", "us", "our") collects, uses, stores and protects your personal information when you visit toolstopia.co.ke, contact us, or place an order. By using our website or buying from us, you agree to the practices described here.</p>
    <p><strong>Last updated:</strong> 4 August 2026</p>
  </div>
  <h2>Who we are</h2>
  <p>Toolstopia is a retailer of power tools, solar equipment and related products, based at Royal Palms Mall, Shop No. BG 55, Ronald Ngala Street, Nairobi, Kenya. For any privacy question, contact us at info@toolstopia.co.ke or 0719 261277.</p>
  <h2>Information we collect</h2>
  <p>We only collect the information we need to process your orders, deliver your products and support you. This may include:</p>
  <ul>
    <li><strong>Contact details</strong> &mdash; your name, phone number, WhatsApp number and email address.</li>
    <li><strong>Order information</strong> &mdash; the products you buy, order value and order history.</li>
    <li><strong>Shipping information</strong> &mdash; your delivery address, town or county, and any delivery instructions.</li>
    <li><strong>Payment information</strong> &mdash; the payment method you choose and confirmation of payment. We do <em>not</em> collect or store your M-PESA PIN, full card numbers or bank passwords.</li>
    <li><strong>Account information</strong> &mdash; if you create an account, your login details and saved preferences.</li>
    <li><strong>Technical information</strong> &mdash; basic data your browser sends, such as device type, browser and pages viewed, collected through cookies and analytics.</li>
    <li><strong>Messages</strong> &mdash; the content of enquiries you send us by WhatsApp, phone, email or our contact forms.</li>
  </ul>
  <h2>How payments are processed</h2>
  <p>We accept M-PESA, bank transfer and cash on delivery. M-PESA payments are processed securely through Safaricom; we receive confirmation of payment but never your PIN. Bank transfers are made directly to our account using the details on your invoice. Cash on delivery is paid to our delivery team on arrival. We do not store full card details on our servers.</p>
  <h2>Cookies</h2>
  <p>Our website uses cookies, small files stored on your device, to keep your shopping cart working, remember your preferences, keep you signed in and understand how the site is used. You can disable cookies in your browser settings, but some parts of the site, such as checkout, may not work correctly without them.</p>
  <h2>Google Analytics</h2>
  <p>We may use Google Analytics to understand how visitors use our website, for example which pages are popular and how people arrive at our site. Google Analytics collects anonymised usage data and does not identify you personally. You can opt out using Google's browser add-on.</p>
  <h2>Facebook Pixel and advertising</h2>
  <p>We may use the Facebook (Meta) Pixel and similar tools to measure the effectiveness of our advertising and to show relevant products to people who have visited our site. These tools use cookies. You can manage ad preferences in your Facebook settings and through your browser.</p>
  <h2>Customer accounts</h2>
  <p>If you create an account, we store the details you provide so you can check out faster and view your order history. You can update or request deletion of your account at any time by contacting us.</p>
  <h2>Marketing emails and messages</h2>
  <p>We only send marketing emails or WhatsApp messages if you have asked to hear from us or are an existing customer. Every marketing email includes an unsubscribe link, and you can opt out of WhatsApp updates at any time by replying STOP or contacting us. We will never sell your contact details.</p>
  <h2>How we use your information</h2>
  <ul>
    <li>To process, deliver and support your orders.</li>
    <li>To contact you about your order, quote or enquiry.</li>
    <li>To provide warranty, returns and after-sales service.</li>
    <li>To improve our website, products and service.</li>
    <li>To send updates or offers, where you have agreed to receive them.</li>
    <li>To meet our legal and tax obligations.</li>
  </ul>
  <h2>Who we share your information with</h2>
  <p>We share your information only where necessary to serve you, including with delivery and courier partners (to deliver your order); payment providers such as Safaricom M-PESA and our bank (to confirm payment); and service providers who help us run our website and analytics. We may also disclose information where required by law. We do not sell your personal data to anyone.</p>
  <h2>How we protect your information</h2>
  <p>We use secure connections and reasonable technical and organisational measures to protect your information against loss, misuse or unauthorised access. No system is completely secure, but we work to keep your data safe and limit access to those who need it.</p>
  <h2>How long we keep your information</h2>
  <p>We keep order and customer records for as long as needed to provide our service, honour warranties and returns, and meet legal and tax requirements. When information is no longer needed, we delete or anonymise it.</p>
  <h2>Your rights</h2>
  <p>You have the right to access the personal information we hold about you, ask us to correct or delete it, and object to certain uses such as marketing. To make a request, contact us at info@toolstopia.co.ke. We handle personal data in line with the Kenya Data Protection Act, 2019.</p>
  <h2>Children</h2>
  <p>Our website and products are intended for adults. We do not knowingly collect personal information from children.</p>
  <h2>Changes to this policy</h2>
  <p>We may update this Privacy Policy from time to time. The latest version will always be posted on this page with the date it was last updated.</p>
  <div class="ttx-cta"><b>Questions about your privacy?</b>
    <a href="https://wa.me/254719261277">WhatsApp 0719 261277</a><a href="tel:0719261277">Call us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTPRIV;
}

function tt_fix_privacy_once() {
    if ( get_option( 'tt_privacy_v185' ) ) { return; }
    $html = tt_privacy_html();
    $content = "<!-- wp:html -->\n" . $html . "\n<!-- /wp:html -->";
    $excerpt = 'Toolstopia privacy policy: what we collect, how M-PESA and bank payments are handled, cookies, analytics, marketing, and your data rights under the Kenya Data Protection Act, 2019.';
    $id = (int) get_option( 'wp_page_for_privacy_policy' );
    if ( ! $id ) {
        $p = get_page_by_path( 'privacy-policy' );
        if ( $p ) { $id = $p->ID; }
    }
    if ( $id ) {
        $post = get_post( $id );
        if ( $post ) {
            $c = (string) $post->post_content;
            $is_default = ( '' === trim( $c ) || false !== strpos( $c, 'Suggested text' ) || false !== strpos( $c, 'Embedded content from other websites' ) || false !== strpos( $c, 'This sample language' ) );
            if ( $is_default ) {
                wp_update_post( array( 'ID' => $id, 'post_content' => $content, 'post_excerpt' => $excerpt, 'post_status' => 'publish' ) );
            }
        }
    } else {
        $new = wp_insert_post( array( 'post_title' => 'Privacy Policy', 'post_name' => 'privacy-policy', 'post_status' => 'publish', 'post_type' => 'page', 'post_content' => $content, 'post_excerpt' => $excerpt ) );
        if ( $new && ! is_wp_error( $new ) ) { update_option( 'wp_page_for_privacy_policy', $new ); }
    }
    update_option( 'tt_privacy_v185', 1 );
}
add_action( 'admin_init', 'tt_fix_privacy_once' );

function tt_fix_contact_hours_once() {
    if ( get_option( 'tt_contact_hours_v185' ) ) { return; }
    $p = get_page_by_path( 'contact-us' );
    if ( $p ) {
        $c = (string) $p->post_content;
        if ( false === strpos( $c, 'Average response time' ) ) {
            $block = '<div class="ttx-cards"><div class="ttx-card"><b>Business hours</b><small>Monday to Saturday: 7:00am to 6:00pm<br>Sunday: Closed</small></div><div class="ttx-card"><b>Average response time</b><small>WhatsApp: within 5 minutes during business hours<br>Email: within 24 hours</small></div></div>';
            if ( false !== strpos( $c, '<div class="ttx-map"' ) ) {
                $c = str_replace( '<div class="ttx-map"', $block . '<div class="ttx-map"', $c );
            } elseif ( false !== strpos( $c, '<div class="ttx-cta"' ) ) {
                $c = str_replace( '<div class="ttx-cta"', $block . '<div class="ttx-cta"', $c );
            } else {
                $c = $c . $block;
            }
            wp_update_post( array( 'ID' => $p->ID, 'post_content' => $c ) );
        }
    }
    update_option( 'tt_contact_hours_v185', 1 );
}
add_action( 'admin_init', 'tt_fix_contact_hours_once' );

function tt_sc_about_stats() {
    $rows = array( array( get_theme_mod( 'tt_about_years', '' ), 'Years in business' ), array( get_theme_mod( 'tt_about_products', '' ), 'Products in stock' ), array( get_theme_mod( 'tt_about_coverage', 'Countrywide' ), 'Delivery coverage' ) );
    $out = '';
    foreach ( $rows as $r ) {
        if ( '' !== trim( (string) $r[0] ) ) {
            $out .= '<div class="ttx-card"><span class="n">' . esc_html( $r[0] ) . '</span><b>' . esc_html( $r[1] ) . '</b></div>';
        }
    }
    if ( '' === $out ) { return ''; }
    return '<div class="ttx-cards">' . $out . '</div>';
}
add_shortcode( 'tt_about_stats', 'tt_sc_about_stats' );

function tt_sc_about_media() {
    $imgs = array( array( get_theme_mod( 'tt_about_store_photo', '' ), 'Our store' ), array( get_theme_mod( 'tt_about_warehouse_photo', '' ), 'Our warehouse' ), array( get_theme_mod( 'tt_about_team_photo', '' ), 'Our team' ) );
    $out = '';
    foreach ( $imgs as $im ) {
        if ( $im[0] ) {
            $out .= '<figure class="tt-photo"><img src="' . esc_url( $im[0] ) . '" alt="' . esc_attr( $im[1] ) . ' - Toolstopia" loading="lazy"><figcaption>' . esc_html( $im[1] ) . '</figcaption></figure>';
        }
    }
    if ( '' === $out ) { return ''; }
    return '<h2>Our store, warehouse &amp; team</h2><div class="tt-photos">' . $out . '</div>';
}
add_shortcode( 'tt_about_media', 'tt_sc_about_media' );

function tt_customize_about( $wp ) {
    $wp->add_section( 'tt_about', array( 'title' => 'About Page', 'priority' => 164 ) );
    $wp->add_setting( 'tt_about_years', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp->add_control( 'tt_about_years', array( 'label' => 'Years in business (e.g. 8+)', 'type' => 'text', 'section' => 'tt_about' ) );
    $wp->add_setting( 'tt_about_products', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp->add_control( 'tt_about_products', array( 'label' => 'Number of products (e.g. 5,000+)', 'type' => 'text', 'section' => 'tt_about' ) );
    $wp->add_setting( 'tt_about_coverage', array( 'default' => 'Countrywide', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp->add_control( 'tt_about_coverage', array( 'label' => 'Delivery coverage (e.g. All 47 counties)', 'type' => 'text', 'section' => 'tt_about' ) );
    $wp->add_setting( 'tt_about_store_photo', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp->add_control( new WP_Customize_Image_Control( $wp, 'tt_about_store_photo', array( 'label' => 'Store photo', 'section' => 'tt_about' ) ) );
    $wp->add_setting( 'tt_about_warehouse_photo', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp->add_control( new WP_Customize_Image_Control( $wp, 'tt_about_warehouse_photo', array( 'label' => 'Warehouse photo', 'section' => 'tt_about' ) ) );
    $wp->add_setting( 'tt_about_team_photo', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp->add_control( new WP_Customize_Image_Control( $wp, 'tt_about_team_photo', array( 'label' => 'Team photo (optional)', 'section' => 'tt_about' ) ) );
}
add_action( 'customize_register', 'tt_customize_about' );

function tt_fix_about_once() {
    if ( get_option( 'tt_about_v185' ) ) { return; }
    $p = get_page_by_path( 'about-us' );
    if ( $p ) {
        $c = (string) $p->post_content;
        if ( false === strpos( $c, '[tt_about_stats]' ) ) {
            $block = '[tt_about_stats]' . "\n" . '[tt_about_media]' . "\n";
            if ( false !== strpos( $c, '<div class="ttx-cta"' ) ) {
                $c = str_replace( '<div class="ttx-cta"', $block . '<div class="ttx-cta"', $c );
            } else {
                $c = $c . $block;
            }
            wp_update_post( array( 'ID' => $p->ID, 'post_content' => $c ) );
        }
    }
    update_option( 'tt_about_v185', 1 );
}
add_action( 'admin_init', 'tt_fix_about_once' );


function tt_fix_cutoff_once() {
    if ( get_option( 'tt_cutoff_fixed' ) ) { return; }
    foreach ( array( 'shipping-policy', 'delivery-installation' ) as $slug ) {
        $p = get_page_by_path( $slug );
        if ( $p && false !== strpos( $p->post_content, '2:00pm' ) ) {
            wp_update_post( array( 'ID' => $p->ID, 'post_content' => str_replace( '2:00pm', '5:00pm', $p->post_content ) ) );
        }
    }
    update_option( 'tt_cutoff_fixed', 1 );
}


function tt_customize_brands( $wp ) {
    $wp->add_section( 'tt_brands', array( 'title' => 'Shop by Brand Logos', 'priority' => 162 ) );
    $brands = array( 'bosch'=>'BOSCH','makita'=>'MAKITA','dewalt'=>'DeWALT','ingco'=>'INGCO','total'=>'TOTAL','honda'=>'HONDA','tolsen'=>'TOLSEN','crown'=>'CROWN','stanley'=>'STANLEY' );
    foreach ( $brands as $slug => $label ) {
        $wp->add_setting( 'tt_brand_' . $slug . '_logo', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
        $wp->add_control( new WP_Customize_Image_Control( $wp, 'tt_brand_' . $slug . '_logo', array( 'label' => $label . ' logo', 'description' => 'Transparent PNG, about 200x100px', 'section' => 'tt_brands' ) ) );
        $wp->add_setting( 'tt_brand_' . $slug . '_url', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
        $wp->add_control( 'tt_brand_' . $slug . '_url', array( 'label' => $label . ' link (optional)', 'type' => 'url', 'section' => 'tt_brands' ) );
    }
}
add_action( 'customize_register', 'tt_customize_brands' );


/* ============================================================
   v1.9.0 - one-time content refresh
   The blueprint above never overwrites pages you have already
   edited, so this runs once (gated by an option) to update the
   theme-managed information pages to the current, compliance-
   reviewed copy: unsupported "genuine / authorised distributor /
   warranty-backed" claims removed and delivery / returns wording
   made consistent. Runs a single time after this version deploys.
   ============================================================ */
function tt_refresh_pages_v190() {
    if ( get_option( 'tt_pages_refresh_v190' ) ) { return; }
    if ( \! function_exists( 'tt_pages_blueprint' ) ) { return; }
    $bp    = tt_pages_blueprint();
    $slugs = array(
        'about-us', 'shipping-policy', 'returns-refund-policy', 'delivery-installation',
        'contact-us', 'faq', 'why-choose-tools-topia', 'authorized-brands',
        'wholesale-bulk', 'request-a-quote', 'todays-deals',
    );
    foreach ( $slugs as $slug ) {
        if ( \! isset( $bp[ $slug ] ) ) { continue; }
        $p = get_page_by_path( $slug );
        if ( \! $p ) { continue; }
        $update = array(
            'ID'           => $p->ID,
            'post_content' => "<\!-- wp:html -->\n" . $bp[ $slug ][1] . "\n<\!-- /wp:html -->",
        );
        // The "Authorized Brands" page is renamed to "Brands We Carry" (its slug stays the same).
        if ( 'authorized-brands' === $slug && 'Authorized Brands' === $p->post_title ) {
            $update['post_title'] = $bp[ $slug ][0];
        }
        wp_update_post( $update );
    }
    update_option( 'tt_pages_refresh_v190', 1 );
}
add_action( 'admin_init', 'tt_refresh_pages_v190' );

