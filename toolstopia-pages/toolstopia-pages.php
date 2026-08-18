<?php
/*
Plugin Name: Tools Topia Pages
Description: Creates and keeps up to date all Tools Topia information pages (About, Shipping, Returns, Delivery & Installation, Contact, FAQ, Why Choose) with detailed, designed content. Does NOT change your homepage or design. Edit any page normally afterwards.
Version: 1.0.0
Author: Tools Topia
*/
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'TT_PAGES_LOADED' ) ) {
define( 'TT_PAGES_LOADED', 1 );
define( 'TT_PAGES_VERSION', '1.0.0' );

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
    <h1>Kenya's home for genuine tools, solar &amp; equipment</h1>
    <p>Tools Topia helps homes, businesses and workshops across Kenya buy the right tools and equipment with confidence, genuine, warranty-backed products at honest prices, delivered and supported by a team you can actually call.</p>
  </div>
  <div class="ttx-cards">
    <div class="ttx-card"><span class="n">100%</span><b>Genuine</b><small>Warranty-backed products</small></div>
    <div class="ttx-card"><span class="n">Nationwide</span><b>Delivery</b><small>Nairobi &amp; all major towns</small></div>
    <div class="ttx-card"><span class="n">7-Day</span><b>Easy returns</b><small>Shop with confidence</small></div>
    <div class="ttx-card"><span class="n">M-Pesa</span><b>Bank &amp; Cash</b><small>Flexible payment</small></div>
  </div>
  <h2>Who we are</h2>
  <p>Tools Topia is a Nairobi-based retailer of genuine power tools, solar equipment, water pumps, incubators, welding machines, grinders and related accessories. From our shop at Royal Palms Mall, Shop No. BG 55, Nairobi, we serve contractors, farmers, fundis, workshops and homeowners across the country.</p>
  <p>We started with a simple idea: buying tools and equipment in Kenya should be safe, clear and fair, no fake products, no hidden costs, and no disappearing after the sale. Just genuine goods, real prices, and a team you can reach on phone or WhatsApp.</p>
  <h2>Why shop with us</h2>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Genuine products</b><small>Every item is authentic and warranty-backed, sourced through trusted channels.</small></div>
    <div class="ttx-card"><b>Honest prices</b><small>Fair, competitive pricing. What you see is what you pay.</small></div>
    <div class="ttx-card"><b>Fast delivery</b><small>Next-day in Nairobi and reliable delivery to all major towns.</small></div>
    <div class="ttx-card"><b>Real support</b><small>Advice before you buy and genuine help after, just call or WhatsApp.</small></div>
  </div>
  <div class="ttx-cta">
    <b>Visit us or order from home</b>
    Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya. Open Mon-Saturday, 7:00am-6:00pm.<br>
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
  <div class="ttx-intro"><p>Here is exactly how your order gets to you: processing times, coverage, costs and what to expect. For delivery to your specific area, just ask us on WhatsApp (0719 261277).</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Order processing</b><small>Orders are confirmed and prepared within a few hours on business days after payment or confirmation.</small></div>
    <div class="ttx-card"><b>Dispatch</b><small>Same or next-day dispatch in Nairobi; upcountry orders leave within 1-2 business days.</small></div>
    <div class="ttx-card"><b>Tracking</b><small>We keep you updated by call or WhatsApp from dispatch until the item is in your hands.</small></div>
  </div>
  <h2>Where we deliver &amp; how long it takes</h2>
  <ul class="ttx-list good">
    <li><b>Nairobi &amp; metro:</b> same-day or next-day on orders placed before 2:00pm.</li>
    <li><b>Major towns</b> (Mombasa, Kisumu, Nakuru, Eldoret, Thika, etc.): 1-3 business days.</li>
    <li><b>Other towns countrywide:</b> 2-5 business days via trusted courier partners.</li>
  </ul>
  <h2>Shipping costs</h2>
  <ul class="ttx-list">
    <li>Calculated at checkout based on your location and the size of the items.</li>
    <li>Nairobi CBD and nearby estates enjoy a low flat rate.</li>
    <li>Large or heavy equipment may attract a handling fee to guarantee safe transport.</li>
  </ul>
  <h2>What to expect</h2>
  <ul class="ttx-list good">
    <li>A confirmation call or WhatsApp before dispatch to verify your address and timing.</li>
    <li>Careful, secure packaging, especially for solar panels, glass and delicate parts.</li>
    <li>Please inspect major items on delivery and report any transit damage immediately.</li>
  </ul>
  <h2>Failed or delayed deliveries</h2>
  <ul class="ttx-list bad">
    <li>Please give an accurate address and a reachable phone number to avoid delays.</li>
    <li>If a delivery cannot be completed, we will reschedule; repeat failed attempts may attract a re-delivery fee.</li>
    <li>Rare delays due to weather, courier or stock issues will always be communicated to you.</li>
  </ul>
  <div class="ttx-cta"><b>Want a delivery estimate for your area?</b>Payment methods: M-Pesa, Bank transfer &amp; Cash on Delivery.<br>
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
  <div class="ttx-intro"><p>We want you to shop with total confidence. Every product is genuine and warranty-backed, and if something is not right we will make it right. Please read the simple steps below.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><span class="n">7-Day</span><b>Returns</b><small>Return most items within 7 days of delivery for a refund, exchange or store credit.</small></div>
    <div class="ttx-card"><span class="n">Warranty</span><b>Cover</b><small>Manufacturer or supplier warranty on applicable products.</small></div>
    <div class="ttx-card"><span class="n">Free</span><b>Fault pickup</b><small>If an item arrives damaged or faulty, we arrange collection at no cost to you.</small></div>
  </div>
  <h2>What can be returned</h2>
  <ul class="ttx-list good">
    <li>Items that are unused, in original packaging with all accessories and the receipt.</li>
    <li>Items delivered damaged, defective, or different from what you ordered.</li>
    <li>Products that develop a fault covered by the manufacturer or supplier warranty.</li>
  </ul>
  <h2>What cannot be returned</h2>
  <ul class="ttx-list bad">
    <li>Items damaged through misuse, accident, or unauthorised repair.</li>
    <li>Products returned after 7 days without a warranty claim, or without proof of purchase.</li>
    <li>Consumables, installed items, and items with broken security seals (hygiene and safety).</li>
  </ul>
  <h2>How to start a return</h2>
  <ol class="ttx-steps">
    <li>Contact us within 7 days with your order number and a short description, a photo helps for damage (0719 261277 or info@toolstopia.co.ke).</li>
    <li>We confirm the return and, for faulty items, arrange free pickup.</li>
    <li>Once checked, we process your refund, exchange or store credit within 3-5 business days.</li>
  </ol>
  <h2>Refunds &amp; warranty</h2>
  <p>Approved refunds are made to your original payment method or by M-Pesa, usually within 3-5 business days of the returned item being received and inspected. Applicable products carry a manufacturer or supplier warranty; we do not operate an in-house service centre, so warranty repairs are handled through the manufacturer or supplier.</p>
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
  <div class="ttx-intro"><p>Tools Topia delivers across Kenya with fast next-day delivery in Nairobi and major towns. For equipment that needs setup, our team will advise so everything works from day one.</p></div>
  <h2>Delivery coverage</h2>
  <ul class="ttx-list good">
    <li>Next-day delivery within Nairobi on most orders.</li>
    <li>Countrywide delivery to all major towns through trusted couriers.</li>
    <li>Careful handling and secure packaging for tools, solar kits, pumps, welding machines and grinders.</li>
  </ul>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Nairobi &amp; metro</b><small>Same-day or next-day on orders before 2:00pm.</small></div>
    <div class="ttx-card"><b>Major towns</b><small>1-3 business days.</small></div>
    <div class="ttx-card"><b>Other areas</b><small>2-5 business days via courier.</small></div>
  </div>
  <h2>Installation &amp; setup support</h2>
  <p>For equipment such as solar systems, water pumps and welding machines, we guide you on correct installation and safe operation. Where on-site setup is available, talk to our team when ordering and we will advise on options and any charges. Please note: we advise on installation but do not operate a physical service centre, warranty repairs are handled through the manufacturer or supplier.</p>
  <div class="ttx-cta"><b>Arrange your delivery</b>Available Mon-Saturday, 7:00am-6:00pm.<br>
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
  <div class="ttx-intro"><p>We are here to help you find the right tools and get them delivered fast. Reach us by phone, WhatsApp, email, or visit our shop.</p></div>
  <div class="ttx-cards">
    <div class="ttx-card"><b>Visit our shop</b><small>Royal Palms Mall, Shop No. BG 55, Nairobi, Kenya. Open Mon-Saturday, 7:00am-6:00pm.</small></div>
    <div class="ttx-card"><b>Phone &amp; WhatsApp</b><small>0719 261277, the fastest way to order or check stock.</small></div>
    <div class="ttx-card"><b>Email</b><small>info@toolstopia.co.ke</small></div>
    <div class="ttx-card"><b>Payment options</b><small>M-Pesa, Bank transfer &amp; Cash on Delivery.</small></div>
  </div>
  <div class="ttx-cta"><b>Talk to us now</b>
    <a href="tel:0719261277">Call 0719 261277</a><a href="https://wa.me/254719261277">WhatsApp us</a><a href="mailto:info@toolstopia.co.ke">info@toolstopia.co.ke</a></div>
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
  <details class="ttx-faq" open><summary>Are your products genuine?</summary><p>Yes. Every product we sell is genuine and warranty-backed, sourced through trusted suppliers and authorised channels.</p></details>
  <details class="ttx-faq"><summary>Which areas do you deliver to?</summary><p>We deliver countrywide. Nairobi enjoys same-day or next-day delivery; major towns receive orders in 1-3 business days and other areas in 2-5 business days.</p></details>
  <details class="ttx-faq"><summary>How much is delivery?</summary><p>Delivery is calculated at checkout based on your location and item size. Nairobi CBD and nearby estates enjoy a low flat rate. For an exact quote, WhatsApp 0719 261277.</p></details>
  <details class="ttx-faq"><summary>What payment methods do you accept?</summary><p>M-Pesa, Bank transfer, and Cash on Delivery.</p></details>
  <details class="ttx-faq"><summary>Do your products have a warranty?</summary><p>Yes. Applicable products carry a manufacturer or supplier warranty. Keep your receipt, if a covered fault appears, contact us and we will guide you through the warranty process.</p></details>
  <details class="ttx-faq"><summary>What is your returns policy?</summary><p>You can return most items within 7 days of delivery for a refund, exchange or store credit, subject to our Returns &amp; Refund Policy.</p></details>
  <details class="ttx-faq"><summary>Do you help with installation?</summary><p>For equipment like solar systems, water pumps and welding machines, we advise on correct installation and safe use. Ask our team when ordering.</p></details>
  <details class="ttx-faq"><summary>Can I order on WhatsApp?</summary><p>Yes. Message 0719 261277 with the item you want and your location, and we will confirm price, stock and delivery.</p></details>
  <details class="ttx-faq"><summary>What are your opening hours?</summary><p>Monday to Saturday, 7:00am to 6:00pm.</p></details>
</div>
TTBODY
    ),
    'why-choose-tools-topia' => array( 'Why Choose Tools Topia', <<<'TTBODY'
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
    <div class="ttx-card"><b>Genuine &amp; warranty-backed</b><small>Authentic tools and equipment you can trust.</small></div>
    <div class="ttx-card"><b>Fast delivery</b><small>Next-day in Nairobi and countrywide.</small></div>
    <div class="ttx-card"><b>Honest pricing</b><small>Fair prices, no hidden costs.</small></div>
    <div class="ttx-card"><b>Wide range</b><small>Power tools, solar, water pumps, incubators, welding machines and grinders.</small></div>
    <div class="ttx-card"><b>Easy ordering</b><small>Order on WhatsApp; pay by M-Pesa, Bank or Cash on Delivery.</small></div>
    <div class="ttx-card"><b>Real support</b><small>Reachable help before and after your purchase.</small></div>
  </div>
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
            wp_update_post( array( 'ID' => $id, 'post_content' => $content ) );
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
    echo '<div class="notice notice-success is-dismissible"><p><strong>Tools Topia pages are set up.</strong> Click any page to view it:</p><ul style="margin:6px 0 6px 18px;list-style:disc">';
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
