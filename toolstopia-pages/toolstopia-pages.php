<?php
/*
Plugin Name: Toolstopia Pages
Description: Creates and keeps up to date all Toolstopia information pages (About, Shipping, Returns, Delivery & Installation, Contact, FAQ, Why Choose, Brands We Carry, Wholesale & Bulk, Request a Quote, Payment Methods, Today's Deals) with clean, compliant content. Does NOT change your homepage or design. Bump the version to re-sync all pages.
Version: 1.9.0
Author: Toolstopia
*/
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'TT_PAGES_LOADED' ) ) {
define( 'TT_PAGES_LOADED', 1 );
define( 'TT_PAGES_VERSION', '1.9.0' );

function tt_pages_blueprint(){
  return array(
    'about-us' => array( 'About Us', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h1,.ttx h2{color:#14243a;line-height:1.25}
.ttx h1{font-size:1.8rem;margin:0 0 10px}
.ttx h2{font-size:1.5rem;margin:28px 0 12px}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
</style>
<div class="ttx">
  <div class="ttx-intro">
    <h1>About Toolstopia</h1>
    <p><b>Tools and equipment for homes, businesses and professionals in Kenya.</b></p>
    <p>Toolstopia is a Kenya-based retailer supplying power tools, hand tools, solar equipment, water pumps, generators, welding equipment, agricultural equipment, accessories and other related products. From our shop at Royal Palms Mall, Shop No. BG 55, Nairobi, we serve contractors, farmers, fundis, workshops and homeowners across the country.</p>
    <p>We help customers compare products, understand specifications and place orders through our store, phone and WhatsApp. Our aim is simple: clear product information, transparent pricing and accessible customer support from order to delivery.</p>
  </div>
  <h2>What we offer</h2>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Power and hand tools</b></div>
    <div class="ttx-card"><b>Solar equipment</b></div>
    <div class="ttx-card"><b>Generators</b></div>
    <div class="ttx-card"><b>Water pumps</b></div>
    <div class="ttx-card"><b>Welding equipment</b></div>
    <div class="ttx-card"><b>Agricultural and workshop equipment</b></div>
  </div>
  <h2>Why shop with us</h2>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Clear product information</b><small>We provide available specifications, pricing and product details to help you choose.</small></div>
    <div class="ttx-card"><b>Kenya-wide delivery</b><small>Delivery to Nairobi and locations across Kenya through our delivery partners.</small></div>
    <div class="ttx-card"><b>Customer support</b><small>Reach us by phone, WhatsApp or email before or after you order.</small></div>
    <div class="ttx-card"><b>Flexible payment</b><small>M-Pesa, bank transfer and cash on delivery where available.</small></div>
  </div>
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
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><p>Here is how your order reaches you: processing times, coverage, costs and what to expect. Delivery times are typical estimates and can vary with location, courier and stock. For delivery to your specific area, ask us on WhatsApp (0719 261277).</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Order processing</b><small>Orders are usually confirmed and prepared within a few hours on business days after payment or confirmation.</small></div>
    <div class="ttx-card"><b>Dispatch</b><small>Same or next-day dispatch in Nairobi in most cases; upcountry orders typically leave within 1-2 business days.</small></div>
    <div class="ttx-card"><b>Updates</b><small>We keep you updated by call or WhatsApp from dispatch until the item reaches you.</small></div>
  </div>
  <h2>Where we deliver and typical timelines</h2>
  <ul class="ttx-list good">
    <li><b>Nairobi and metro:</b> typically same-day or next-day for orders placed during business hours.</li>
    <li><b>Major towns</b> (Mombasa, Kisumu, Nakuru, Eldoret, Thika, and others): typically 1-3 business days.</li>
    <li><b>Other towns countrywide:</b> typically 2-5 business days via courier partners.</li>
  </ul>
  <h2>Shipping costs</h2>
  <ul class="ttx-list">
    <li>Calculated at checkout based on your location and the size of the items.</li>
    <li>Nairobi CBD and nearby estates typically enjoy a lower flat rate.</li>
    <li>Large or heavy equipment may attract a handling fee to help cover safe transport.</li>
  </ul>
  <h2>What to expect</h2>
  <ul class="ttx-list good">
    <li>A confirmation call or WhatsApp before dispatch to verify your address and timing.</li>
    <li>Careful, secure packaging, especially for solar panels, glass and delicate parts.</li>
    <li>Please inspect major items on delivery and report any transit damage promptly.</li>
  </ul>
  <h2>Failed or delayed deliveries</h2>
  <ul class="ttx-list bad">
    <li>Please give an accurate address and a reachable phone number to avoid delays.</li>
    <li>If a delivery cannot be completed, we will reschedule; repeat failed attempts may attract a re-delivery fee.</li>
    <li>Occasional delays due to weather, courier or stock issues will be communicated to you.</li>
  </ul>
  <div class="ttx-cta"><b>Want a delivery estimate for your area?</b>Payment methods: M-Pesa, bank transfer and cash on delivery.<br>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a></div>
</div>
TTBODY
    ),
    'returns-refund-policy' => array( 'Returns & Refund Policy', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><p>We want you to shop with confidence. If an item arrives damaged, defective or not as described, we will help put it right. Please read the simple steps below.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><span class="n">7-Day</span><b>Returns</b><small>Request a return within 7 days of delivery for eligible items, subject to the conditions below.</small></div>
    <div class="ttx-card"><span class="n">Warranty</span><b>Cover</b><small>Where a manufacturer or supplier warranty applies, we help you access it.</small></div>
    <div class="ttx-card"><span class="n">Support</span><b>We help</b><small>Contact us and we will guide you through the returns process.</small></div>
  </div>
  <h2>What can be returned</h2>
  <ul class="ttx-list good">
    <li>Items that are unused, in original packaging with all accessories and the receipt.</li>
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
    <li>We confirm whether the item is eligible and advise on the next steps, including how the item should be returned.</li>
    <li>Once checked, we process your refund, exchange or store credit, typically within 3-5 business days.</li>
  </ol>
  <h2>Refunds and warranty</h2>
  <p>Approved refunds are made to your original payment method or by M-Pesa, usually within 3-5 business days of the returned item being received and inspected. Where products carry a manufacturer or supplier warranty, warranty claims and repairs are handled through the manufacturer or supplier, as we do not operate an in-house service centre.</p>
  <div class="ttx-cta"><b>Need to start a return or ask a question?</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'delivery-installation' => array( 'Delivery & Installation', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><p>Toolstopia delivers across Kenya, with typical next-day delivery in Nairobi and major towns. For equipment that needs setup, our team can advise so you can get started with confidence.</p></div>
  <h2>Delivery coverage</h2>
  <ul class="ttx-list good">
    <li>Typical next-day delivery within Nairobi on most orders.</li>
    <li>Countrywide delivery to major towns through our courier partners.</li>
    <li>Careful handling and secure packaging for tools, solar kits, pumps, welding machines and grinders.</li>
  </ul>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Nairobi and metro</b><small>Typically same-day or next-day for orders placed during business hours.</small></div>
    <div class="ttx-card"><b>Major towns</b><small>Typically 1-3 business days.</small></div>
    <div class="ttx-card"><b>Other areas</b><small>Typically 2-5 business days via courier.</small></div>
  </div>
  <h2>Installation and setup support</h2>
  <p>For equipment such as solar systems, water pumps and welding machines, we can guide you on correct installation and safe operation. Where on-site setup is available, talk to our team when ordering and we will advise on options and any charges. Please note: we advise on installation but do not operate a physical service centre, and warranty repairs are handled through the manufacturer or supplier.</p>
  <div class="ttx-cta"><b>Arrange your delivery</b>Available Monday to Saturday, 7:00am-6:00pm.<br>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'contact-us' => array( 'Contact Us', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><p>We are here to help you find the right tools and get them delivered. Reach us by phone, WhatsApp, email, or visit our shop.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Visit our shop</b><small>Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya.</small></div>
    <div class="ttx-card"><b>Phone &amp; WhatsApp</b><small>0719 261277, the fastest way to order or check stock.</small></div>
    <div class="ttx-card"><b>Email</b><small>info@toolstopia.co.ke</small></div>
    <div class="ttx-card"><b>Payment options</b><small>M-Pesa, bank transfer and cash on delivery where available.</small></div>
  </div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Business hours</b><small>Monday to Saturday: 7:00am to 6:00pm<br>Sunday: Closed</small></div>
    <div class="ttx-card"><b>Response times</b><small>WhatsApp and phone during business hours; email replies typically within 24 hours.</small></div>
  </div>
  <div class="ttx-cta"><b>Talk to us now</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
  <h2>Find us on the map</h2>
  <p>Royal Palms Mall, Shop No. BG 55, Ronald Ngala Street, Nairobi.</p>
  <div style="border-radius:14px;overflow:hidden;border:1px solid #e6eaf0;margin-top:8px"><iframe title="Toolstopia location" src="https://www.google.com/maps?q=Royal%20Palms%20Mall%2C%20Ronald%20Ngala%20Street%2C%20Nairobi%2C%20Kenya&amp;output=embed" width="100%" height="340" style="border:0;display:block" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
TTBODY
    ),
    'faq' => array( 'FAQ', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <details class="ttx-faq" open><summary>Where do your products come from?</summary><p>We source our products through suppliers and distributors. If you need details about a specific product or its warranty, contact us and we will share the information we have.</p></details>
  <details class="ttx-faq"><summary>Which areas do you deliver to?</summary><p>We deliver countrywide. Nairobi enjoys same-day or next-day delivery; major towns receive orders in 1-3 business days and other areas in 2-5 business days.</p></details>
  <details class="ttx-faq"><summary>How much is delivery?</summary><p>Delivery is calculated at checkout based on your location and item size. Nairobi CBD and nearby estates enjoy a low flat rate. For an exact quote, WhatsApp 0719 261277.</p></details>
  <details class="ttx-faq"><summary>What payment methods do you accept?</summary><p>M-Pesa, Bank transfer, and Cash on Delivery.</p></details>
  <details class="ttx-faq"><summary>Do your products have a warranty?</summary><p>Some products carry a manufacturer or supplier warranty. Keep your receipt; if a covered fault appears, contact us and we will guide you through the warranty process.</p></details>
  <details class="ttx-faq"><summary>What is your returns policy?</summary><p>You can return most items within 7 days of delivery for a refund, exchange or store credit, subject to our Returns &amp; Refund Policy.</p></details>
  <details class="ttx-faq"><summary>Do you help with installation?</summary><p>For equipment like solar systems, water pumps and welding machines, we advise on correct installation and safe use. Ask our team when ordering.</p></details>
  <details class="ttx-faq"><summary>Can I order on WhatsApp?</summary><p>Yes. Message 0719 261277 with the item you want and your location, and we will confirm price, stock and delivery.</p></details>
  <details class="ttx-faq"><summary>What are your opening hours?</summary><p>Monday to Saturday, 7:00am to 6:00pm.</p></details>
</div>
TTBODY
    ),
    'why-choose-tools-topia' => array( 'Why Choose Toolstopia', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-cards">
    <div class="ttx-card"><b>Wide product range</b><small>Power tools, solar, water pumps, welding machines, grinders and more in one place.</small></div>
    <div class="ttx-card"><b>Fast delivery</b><small>Next-day in Nairobi and countrywide.</small></div>
    <div class="ttx-card"><b>Honest pricing</b><small>Fair prices, no hidden costs.</small></div>
    <div class="ttx-card"><b>Trusted suppliers</b><small>We source products through our suppliers and distributors.</small></div>
    <div class="ttx-card"><b>Easy ordering</b><small>Order on WhatsApp; pay by M-Pesa, Bank or Cash on Delivery.</small></div>
    <div class="ttx-card"><b>Real support</b><small>Reachable help before and after your purchase.</small></div>
  </div>
</div>
TTBODY
    ),
    'authorized-brands' => array( 'Brands We Carry', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><h1>Brands We Carry</h1><p>We stock and source tools and equipment from a range of well-known manufacturers. Brand availability changes over time, so contact us to confirm current stock for a specific brand or model.</p></div>
  <h2>Brands you will often find with us</h2>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Power tools</b><small>A selection of leading power-tool brands, subject to availability.</small></div>
    <div class="ttx-card"><b>Solar equipment</b><small>Panels, batteries and accessories from various suppliers.</small></div>
    <div class="ttx-card"><b>Welding and workshop</b><small>Welding machines, grinders and related equipment.</small></div>
    <div class="ttx-card"><b>Pumps and agriculture</b><small>Water pumps and agricultural equipment for home and farm use.</small></div>
  </div>
  <p>Looking for a specific brand or model? Send us the details and we will confirm availability, pricing and lead time.</p>
  <div class="ttx-cta"><b>Looking for a specific brand?</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'wholesale-bulk' => array( 'Wholesale & Bulk Orders', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><h1>Wholesale &amp; Bulk Orders</h1><p>Buying in larger quantities for a project, business or resale? Contact us for bulk pricing on eligible products. Bulk pricing depends on the product, quantity and availability.</p></div>
  <h2>How bulk orders work</h2>
  <ol class="ttx-steps">
    <li>Send us the products and quantities you need by phone, WhatsApp or email.</li>
    <li>We check availability and prepare a quote with pricing and lead time.</li>
    <li>Once you confirm, we arrange payment, dispatch and delivery.</li>
  </ol>
  <h2>Who bulk orders suit</h2>
  <ul class="ttx-list good">
    <li>Contractors and workshops equipping a project or team.</li>
    <li>Businesses and institutions buying multiple units.</li>
    <li>Resellers looking for repeat supply.</li>
  </ul>
  <p>Bulk discounts, lead times and delivery terms are agreed per order. Contact us for a quote tailored to your requirements.</p>
  <div class="ttx-cta"><b>Get a bulk price</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'request-a-quote' => array( 'Request a Quote', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><h1>Request a Quote</h1><p>Need pricing on a specific product, a bulk order or an item you cannot find on the site? Tell us what you need and we will prepare a quote.</p></div>
  <h2>What to include</h2>
  <ul class="ttx-list good">
    <li>The product name, model or a short description.</li>
    <li>The quantity you need.</li>
    <li>Your location for delivery.</li>
    <li>Any specifications or preferences.</li>
  </ul>
  <h2>Sourcing and warranty</h2>
  <p>Some items are stocked and others are sourced to order through our suppliers. For sourced items, availability, pricing and lead time are confirmed at the time of quoting. Where a product carries a manufacturer or supplier warranty, we will let you know and help you access it if a covered fault appears.</p>
  <h2>How to send your request</h2>
  <ol class="ttx-steps">
    <li>Message us on WhatsApp or email with the details above.</li>
    <li>We confirm availability, pricing and lead time.</li>
    <li>Once you approve, we arrange payment and delivery.</li>
  </ol>
  <div class="ttx-cta"><b>Send your request</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'payment-methods' => array( 'Payment Methods', <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><h1>Payment Methods</h1><p>We offer flexible, convenient ways to pay. Choose the option that works best for you.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>M-Pesa</b><small>Pay by M-Pesa for a fast, familiar checkout. Ask us for the current till or paybill details when ordering.</small></div>
    <div class="ttx-card"><b>Bank transfer</b><small>Pay directly to our business bank account. We share the details on request.</small></div>
    <div class="ttx-card"><b>Cash on delivery</b><small>Available in selected areas. Confirm with us when you place your order.</small></div>
  </div>
  <h2>Good to know</h2>
  <ul class="ttx-list good">
    <li>We confirm payment before dispatch to keep your order secure.</li>
    <li>Keep your payment confirmation as proof of purchase for returns or warranty.</li>
    <li>If you are unsure which option to use, contact us and we will help.</li>
  </ul>
  <div class="ttx-cta"><b>Questions about payment?</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
</div>
TTBODY
    ),
    'todays-deals' => array( "Today's Deals", <<<'TTBODY'
<style>
.ttx{font-family:inherit;color:#243244;max-width:1000px;margin:0 auto;line-height:1.6}
.ttx h2{color:#14243a;font-size:1.5rem;margin:28px 0 12px;line-height:1.25}
.ttx p{margin:0 0 14px}
.ttx-intro{background:#eef4fc;border-left:4px solid #4a90e2;border-radius:10px;padding:16px 20px;margin:0 0 22px}
.ttx-cards{display:flex;flex-wrap:wrap;gap:16px;margin:8px 0}
.ttx-card{flex:1 1 210px;background:#fff;border:1px solid #e6eaf0;border-radius:14px;padding:18px 20px;box-shadow:0 1px 3px rgba(20,36,58,.06)}
.ttx-card .n{display:inline-block;background:#4a90e2;color:#fff;font-weight:700;border-radius:8px;padding:6px 12px;margin-bottom:10px}
.ttx-card b{display:block;margin-bottom:4px;color:#14243a}
.ttx-card small{color:#5b6b80;font-size:.92rem}
.ttx-list{list-style:none;padding:0;margin:0 0 14px}
.ttx-list li{padding:9px 14px;margin:0 0 8px;border-radius:8px;background:#f7f9fc}
.ttx-list.good li{border-left:4px solid #1f9d55}
.ttx-list.bad li{border-left:4px solid #d64545}
.ttx-steps{counter-reset:s;list-style:none;padding:0;margin:0 0 14px}
.ttx-steps li{position:relative;padding:8px 0 8px 44px;margin:0 0 8px}
.ttx-steps li:before{counter-increment:s;content:counter(s);position:absolute;left:0;top:6px;width:28px;height:28px;border-radius:50%;background:#4a90e2;color:#fff;text-align:center;line-height:28px;font-weight:700}
.ttx-cta{background:#14243a;color:#fff;border-radius:14px;padding:22px 24px;margin:22px 0}
.ttx-cta b{color:#fff;font-size:1.1rem;display:block;margin-bottom:6px}
.ttx-cta a{color:#cfe0f7;text-decoration:none;font-weight:600;margin-right:16px}
.ttx-faq{border:1px solid #e6eaf0;border-radius:10px;padding:2px 18px;margin:0 0 10px;background:#fff}
.ttx-faq summary{font-weight:700;color:#14243a;cursor:pointer;padding:12px 0;list-style:none}
.ttx-faq summary::-webkit-details-marker{display:none}
.ttx-faq[open]{border-color:#4a90e2}
.ttx-faq p{margin:0 0 12px;color:#4a5666}
</style>
<div class="ttx">
  <div class="ttx-intro"><h1>Today's Deals</h1><p>Current offers and discounted products, updated regularly. Prices and availability can change, so order early to avoid missing out.</p></div>
  <h2>On sale now</h2>
  [sale_products per_page="12" columns="4" orderby="date"]
  <h2>Popular products</h2>
  [best_selling_products per_page="8" columns="4"]
  <div class="ttx-cta"><b>Looking for a specific deal?</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
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
    $done = array();
    foreach ( tt_pages_blueprint() as $slug => $d ) {
        $title = $d[0];
        $html  = $d[1];
        $content = "<!-- wp:html -->\n" . $html . "\n<!-- /wp:html -->";
        $id = tt_find_page( $slug, $title );
        if ( $id ) {
            wp_update_post( array( 'ID' => $id, 'post_title' => $title, 'post_content' => $content ) );
            $done[] = array( $title, get_permalink( $id ), 'updated' );
        } else {
            $new = wp_insert_post( array(
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_content' => $content,
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ) );
            if ( $new && ! is_wp_error( $new ) ) {
                $done[] = array( $title, get_permalink( $new ), 'created' );
            }
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

// Remove the word "card" from the product-page payment line (you asked for this).
add_action( 'template_redirect', function () {
    if ( is_admin() ) { return; }
    ob_start( function ( $html ) {
        return str_replace(
            'Pay via M-PESA, card, bank transfer or cash on delivery',
            'Pay via M-PESA, bank transfer or cash on delivery',
            $html
        );
    } );
} );

} // end TT_PAGES_LOADED guard

register_activation_hook( __FILE__, 'tt_sync_pages' );
