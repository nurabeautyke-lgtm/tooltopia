<?php
/**
 * Front page (homepage). Falls back gracefully if WooCommerce is inactive.
 * Uses WooCommerce shortcodes for live product rails so it works out of the box.
 * @package Toolstopia
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

$has_wc = class_exists( 'WooCommerce' );

$categories = array(
	array( 'Power Tools', 'power-tools', 'cat-power-tools.jpg' ),
	array( 'Solar & Power', 'solar', 'cat-solar.jpg' ),
	array( 'Batteries & Inverters', 'batteries', 'cat-batteries.jpg' ),
	array( 'Water Pumps', 'water-pumps', 'cat-water-pumps.jpg' ),
	array( 'Generators', 'generators', 'cat-generators.jpg' ),
	array( 'Air Compressors', 'air-compressors', 'cat-compressors.jpg' ),
	array( 'Welding & Workshop', 'welding-machines', 'cat-welding.jpg' ),
	array( 'Hand Tools', 'hand-tools', 'cat-hand-tools.jpg' ),
	array( 'Home Appliances', 'home-appliances', 'cat-home-appliances.jpg' ),
	array( 'Construction', 'construction', 'cat-construction.jpg' ),
	array( 'Agriculture', 'agriculture', 'cat-agriculture.jpg' ),
	array( 'Security', 'security', 'cat-security.jpg' ),
);

$brands = array( 'BOSCH', 'MAKITA', 'DeWALT', 'INGCO', 'TOTAL', 'HONDA', 'TOLSEN', 'CROWN', 'STANLEY', 'MILWAUKEE', 'HILTI', 'RYOBI' );

$solutions = array(
	array( 'Construction', 'Complete kits for sites, formwork, breaking and finishing.' ),
	array( 'Engineering', 'Precision measuring, cutting and fabrication equipment.' ),
	array( 'Agriculture', 'Pumps, sprayers, chainsaws and irrigation power.' ),
	array( 'Manufacturing', 'Compressors, welding, and workshop machinery.' ),
	array( 'Home Improvement', 'Drills, sanders and everything for the weekend project.' ),
	array( 'Workshop Essentials', 'Storage, benches, safety gear and consumables.' ),
);

$reviews = array(
	array( 'James M.', 'Nairobi', 'Ordered a Makita drill on WhatsApp at 9am and it was delivered by 3pm the same day. Genuine product, fair price.' ),
	array( 'Grace W.', 'Nakuru', 'Bought a full generator for our shop. The team advised on the right size and it arrived well packed. Excellent service.' ),
	array( 'Kevin O.', 'Mombasa', 'I run a small welding business. Toolstopia is now my go-to for consumables. Reliable stock and honest advice.' ),
);
?>

<!-- ============ HERO ============ -->
<section class="ts-hero">
	<div class="ts-container">
		<div class="ts-hero__inner">
			<div class="ts-reveal">
				<span class="ts-eyebrow" style="color:#fb923c">Kenya's Premium Tool Store</span>
				<h1>Power every project with <em>professional-grade</em> tools.</h1>
				<p class="lead">Genuine Bosch, Makita, DeWalt, INGCO, Total and Honda. Expert advice, real stock, and fast nationwide delivery across Kenya &mdash; order online or on WhatsApp.</p>

				<div class="ts-hero__search">
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="ts-search" style="max-width:none">
						<input type="search" name="s" placeholder="Search drills, generators, pumps, brands…">
						<?php if ( $has_wc ) { ?><input type="hidden" name="post_type" value="product"><?php } ?>
						<button type="submit" aria-label="Search"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.2-3.2"/></svg></button>
					</form>
				</div>

				<div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:20px">
					<a class="ts-btn ts-btn--lg" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop All Tools</a>
					<a class="ts-btn ts-btn--wa ts-btn--lg" target="_blank" rel="noopener" href="<?php echo toolstopia_wa_url( 'Hello Toolstopia! I would like to place an order.' ); ?>">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Z"/></svg> Order on WhatsApp
					</a>
				</div>

				<div class="ts-hero__badges">
					<div class="ts-hero__badge"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg> 100% Genuine Products</div>
					<div class="ts-hero__badge"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h11v8H3zM14 10h4l3 3v2h-7"/><circle cx="7" cy="18" r="1.6"/><circle cx="17" cy="18" r="1.6"/></svg> Nationwide Delivery</div>
					<div class="ts-hero__badge"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3Z"/></svg> Secure M-PESA & Card</div>
				</div>
			</div>

			<div class="ts-hero__media ts-reveal">
				<img src="<?php echo esc_url( TOOLSTOPIA_URI . '/assets/images/hero.jpg' ); ?>" alt="Professional industrial power tools" width="800" height="600" fetchpriority="high" onerror="this.style.display='none';this.parentNode.style.background='linear-gradient(135deg,#1e293b,#0f172a)'">
				<div class="ts-hero__float ts-glass">
					<div style="display:flex;align-items:center;gap:10px">
						<div class="ts-review__ava">4.9</div>
						<div style="font-size:.82rem;color:#0f172a"><strong style="font-family:var(--ts-font-head)">Rated 4.9/5</strong><br><span style="color:#64748b">by 1,200+ Kenyan customers</span></div>
					</div>
					<a class="ts-btn ts-btn--sm" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop now</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ============ TRUST BAR ============ -->
<section class="ts-trust">
	<div class="ts-container">
		<div class="ts-trust__grid">
			<div class="ts-trust__item"><span class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h11v8H3zM14 10h4l3 3v2h-7"/><circle cx="7" cy="18" r="1.6"/><circle cx="17" cy="18" r="1.6"/></svg></span><div><b>Fast Delivery</b><span>Nationwide in 2&ndash;5 days</span></div></div>
			<div class="ts-trust__item"><span class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg></span><div><b>Genuine Brands</b><span>Authorised sourcing</span></div></div>
			<div class="ts-trust__item"><span class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></span><div><b>M-PESA & Card</b><span>Secure checkout</span></div></div>
			<div class="ts-trust__item"><span class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3Z"/></svg></span><div><b>Warranty</b><span>On eligible products</span></div></div>
		</div>
	</div>
</section>

<!-- ============ SHOP BY CATEGORY ============ -->
<section class="ts-section">
	<div class="ts-container">
		<div class="ts-section-head">
			<div><span class="ts-eyebrow">Browse</span><h2>Shop by Category</h2></div>
			<a class="ts-btn ts-btn--ghost ts-btn--sm" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">View all</a>
		</div>
		<div class="ts-grid ts-cats">
			<?php foreach ( $categories as $c ) :
				$link = $has_wc ? home_url( '/product-category/' . $c[1] . '/' ) : home_url( '/shop/' ); ?>
				<a class="ts-cat ts-reveal" href="<?php echo esc_url( $link ); ?>">
					<span class="ts-cat__banner"><img src="<?php echo esc_url( TOOLSTOPIA_URI . '/assets/images/' . $c[2] ); ?>" alt="<?php echo esc_attr( $c[0] ); ?>" loading="lazy" width="360" height="270"></span>
					<b><?php echo esc_html( $c[0] ); ?></b>
					<span>Shop range</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ SHOP BY BRAND ============ -->
<section class="ts-section" style="background:var(--ts-gray-050)">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow">Trusted worldwide</span><h2>Shop by Brand</h2></div><a class="ts-btn ts-btn--ghost ts-btn--sm" href="<?php echo esc_url( home_url( '/brands/' ) ); ?>">All brands</a></div>
		<div class="ts-grid ts-brands">
			<?php foreach ( $brands as $b ) : ?>
				<a class="ts-brand ts-reveal" href="<?php echo esc_url( home_url( '/brands/' ) ); ?>"><?php echo esc_html( $b ); ?></a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ TODAY'S DEALS ============ -->
<section class="ts-section">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow" style="color:var(--ts-danger)">Limited time</span><h2>Today's Deals</h2></div><a class="ts-btn ts-btn--ghost ts-btn--sm" href="<?php echo esc_url( home_url( '/deals/' ) ); ?>">All deals</a></div>
		<?php if ( $has_wc ) { echo do_shortcode( '[sale_products limit="8" columns="4"]' ); } else { toolstopia_placeholder_products(); } ?>
	</div>
</section>

<!-- ============ TOP RATED / POPULAR ============ -->
<section class="ts-section" style="background:var(--ts-gray-050)">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow">Customer favourites</span><h2>Top Rated Tools</h2></div><a class="ts-btn ts-btn--ghost ts-btn--sm" href="<?php echo esc_url( home_url( '/shop/?orderby=rating' ) ); ?>">See all</a></div>
		<?php if ( $has_wc ) { echo do_shortcode( '[top_rated_products limit="8" columns="4"]' ); } else { toolstopia_placeholder_products(); } ?>
	</div>
</section>

<!-- ============ PROFESSIONAL SOLUTIONS ============ -->
<section class="ts-section">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow">For every industry</span><h2>Professional Solutions</h2></div></div>
		<div class="ts-grid" style="grid-template-columns:repeat(3,1fr)">
			<?php foreach ( $solutions as $s ) : ?>
				<a class="ts-card ts-reveal" style="padding:26px;display:block" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">
					<div style="width:46px;height:46px;border-radius:var(--ts-r);background:var(--ts-primary-050);color:var(--ts-primary-600);display:grid;place-items:center;margin-bottom:14px"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 2 3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg></div>
					<h3 style="font-size:1.15rem;margin-bottom:6px"><?php echo esc_html( $s[0] ); ?></h3>
					<p class="ts-muted" style="margin:0"><?php echo esc_html( $s[1] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ RECOMMENDED / BEST SELLERS ============ -->
<section class="ts-section" style="background:var(--ts-gray-050)">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow">Recommended for you</span><h2>Best Sellers</h2></div><a class="ts-btn ts-btn--ghost ts-btn--sm" href="<?php echo esc_url( home_url( '/shop/?orderby=popularity' ) ); ?>">Shop all</a></div>
		<?php if ( $has_wc ) { echo do_shortcode( '[best_selling_products limit="8" columns="4"]' ); } else { toolstopia_placeholder_products(); } ?>
	</div>
</section>

<!-- ============ CUSTOMER REVIEWS ============ -->
<section class="ts-section">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow">Loved by pros</span><h2>What Our Customers Say</h2></div></div>
		<div class="ts-grid ts-reviews">
			<?php foreach ( $reviews as $r ) : ?>
				<div class="ts-review ts-reveal">
					<div class="ts-review__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
					<p style="margin:0">&ldquo;<?php echo esc_html( $r[2] ); ?>&rdquo;</p>
					<div class="ts-review__who"><span class="ts-review__ava"><?php echo esc_html( substr( $r[0], 0, 1 ) ); ?></span><div><b style="font-family:var(--ts-font-head)"><?php echo esc_html( $r[0] ); ?></b><br><span class="ts-muted" style="font-size:.82rem"><?php echo esc_html( $r[1] ); ?></span></div></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ VIDEO SECTION ============ -->
<section class="ts-section" style="background:var(--ts-secondary)">
	<div class="ts-container">
		<div class="ts-grid" style="grid-template-columns:1fr 1fr;gap:40px;align-items:center">
			<div>
				<span class="ts-eyebrow" style="color:#fb923c">See it in action</span>
				<h2 style="color:#fff">Built for the toughest jobs in Kenya</h2>
				<p style="color:#cbd5e1">From Nairobi construction sites to farms in the Rift Valley, our tools are chosen by professionals who can't afford downtime. Watch how the right equipment gets the job done faster.</p>
				<a class="ts-btn" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" style="margin-top:10px">Explore the range</a>
			</div>
			<div style="position:relative;border-radius:var(--ts-r-xl);overflow:hidden;aspect-ratio:16/9;background:#0b1220;display:grid;place-items:center">
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" aria-label="Watch" style="width:74px;height:74px;border-radius:var(--ts-r-full);background:var(--ts-primary);display:grid;place-items:center;box-shadow:var(--ts-shadow-primary)">
					<svg width="26" height="26" viewBox="0 0 24 24" fill="#fff"><path d="M8 5v14l11-7z"/></svg>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- ============ WHY TOOLSTOPIA ============ -->
<section class="ts-section">
	<div class="ts-container">
		<div class="ts-section-head"><div><span class="ts-eyebrow">The Toolstopia difference</span><h2>Why Buy From Us</h2></div></div>
		<div class="ts-grid ts-why">
			<div class="ts-why__item ts-reveal"><div class="ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m20 6-11 11-5-5"/></svg></div><h3 style="font-size:1.05rem">Genuine, Guaranteed</h3><p class="ts-muted" style="margin:0">Every product is sourced from authorised distributors with manufacturer warranty where applicable.</p></div>
			<div class="ts-why__item ts-reveal"><div class="ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h11v8H3zM14 10h4l3 3v2h-7"/></svg></div><h3 style="font-size:1.05rem">Fast Nationwide Delivery</h3><p class="ts-muted" style="margin:0">Same-day dispatch in Nairobi and 2&ndash;5 day delivery to every county in Kenya.</p></div>
			<div class="ts-why__item ts-reveal"><div class="ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20ZM12 8v4l3 2"/></svg></div><h3 style="font-size:1.05rem">Expert Advice</h3><p class="ts-muted" style="margin:0">Talk to real tool specialists on WhatsApp before you buy &mdash; get the right tool, first time.</p></div>
			<div class="ts-why__item ts-reveal"><div class="ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div><h3 style="font-size:1.05rem">Fair, Honest Pricing</h3><p class="ts-muted" style="margin:0">Competitive prices with wholesale and project rates for businesses and contractors.</p></div>
		</div>
	</div>
</section>

<!-- ============ CTA ============ -->
<section class="ts-section">
	<div class="ts-container">
		<div class="ts-cta ts-reveal">
			<span class="ts-eyebrow" style="color:#fff;opacity:.9">Businesses & contractors</span>
			<h2 style="max-width:20ch;margin-inline:auto">Buying in bulk? Get wholesale & project pricing.</h2>
			<p style="max-width:52ch;margin:0 auto 22px;color:#fff;opacity:.95">Open a business account for custom pricing, purchase orders, and a dedicated account manager.</p>
			<div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
				<a class="ts-btn ts-btn--dark" href="<?php echo esc_url( home_url( '/wholesale/' ) ); ?>">Wholesale Enquiry</a>
				<a class="ts-btn ts-btn--dark" href="<?php echo esc_url( home_url( '/request-quotation/' ) ); ?>">Request a Quote</a>
			</div>
		</div>
	</div>
</section>

<!-- ============ NEWSLETTER ============ -->
<section class="ts-section" style="padding-top:0">
	<div class="ts-container">
		<div class="ts-news ts-reveal">
			<div>
				<span class="ts-eyebrow" style="color:#fb923c">Stay sharp</span>
				<h2 style="margin:0 0 6px">Deals, new arrivals & pro tips</h2>
				<p style="margin:0;color:#cbd5e1">Join our newsletter and be first to know about flash sales and restocks.</p>
			</div>
			<form onsubmit="return false" aria-label="Newsletter signup">
				<input type="email" required placeholder="Your email address" aria-label="Email">
				<button class="ts-btn" type="submit">Subscribe</button>
			</form>
		</div>
	</div>
</section>

<?php get_footer();

/**
 * Placeholder product grid when WooCommerce is not active (so the homepage still looks complete).
 */
function toolstopia_placeholder_products() {
	$demo = array(
		array( 'Cordless Impact Drill 18V', '6,500' ),
		array( '2.5kVA Petrol Generator', '32,000' ),
		array( 'Angle Grinder 800W', '3,200' ),
		array( 'Submersible Water Pump 1HP', '9,800' ),
	);
	echo '<ul class="products" style="list-style:none">';
	foreach ( $demo as $d ) {
		echo '<li class="product ts-reveal">';
		echo '<div class="ts-product__img ts-skeleton" style="aspect-ratio:1/1"></div>';
		echo '<span class="woocommerce-loop-product__title">' . esc_html( $d[0] ) . '</span>';
		echo toolstopia_stars( 5 );
		echo '<div class="price">KSh ' . esc_html( $d[1] ) . '</div>';
		echo '<a class="button" href="' . esc_url( home_url( '/shop/' ) ) . '">View</a>';
		echo '</li>';
	}
	echo '</ul>';
}
