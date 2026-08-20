<?php
/**
 * Tooltopia Store Child - custom tabarak-style homepage.
 * Delete this file to restore the theme's default homepage.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$shop_url  = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$cats_raw  = get_theme_mod( 'tt_home_categories', "Hardware Tools\nSolar Panels\nWater Pumps\nIncubators\nGenerators\nBatteries" );
$cat_slugs = array_filter( array_map( 'trim', preg_split( '/[\r\n,]+/', $cats_raw ) ) );
$hero_title = get_theme_mod( 'tt_hero_title', 'Power tools, solar & equipment, delivered across Kenya' );
$hero_text  = get_theme_mod( 'tt_hero_text', "From the workshop to the site to the farm, Tooltopia Store stocks the power tools, solar kits, generators, pumps and welding gear Kenya runs on. Clear prices, honest advice and countrywide delivery." );

$slides_uri   = get_stylesheet_directory_uri() . '/assets/slides';
$cat_imgs_uri = get_stylesheet_directory_uri() . '/assets/categories';

get_header();
?>
<main class="tt-home">

  <section class="tt-hero">
    <aside class="tt-hero__cats">
      <h3>Shop All Categories</h3>
      <ul>
      <?php
      if ( taxonomy_exists( 'product_cat' ) ) {
          $terms = get_terms( array( 'taxonomy' => 'product_cat', 'hide_empty' => true, 'number' => intval( get_theme_mod( 'tt_cat_count', 14 ) ), 'orderby' => 'count', 'order' => 'DESC' ) );
          if ( ! is_wp_error( $terms ) && $terms ) {
              foreach ( $terms as $t ) {
                  echo '<li><a href="' . esc_url( get_term_link( $t ) ) . '">' . esc_html( $t->name ) . ' <span>' . intval( $t->count ) . '</span></a></li>';
              }
          }
      }
      ?>
      </ul>
      <a class="tt-btn tt-btn--full" href="<?php echo esc_url( $shop_url ); ?>">Shop All</a>
    </aside>

    <div class="tt-hero__slider">
      <button class="tt-nav prev" type="button" aria-label="Previous">&#10094;</button>
      <button class="tt-nav next" type="button" aria-label="Next">&#10095;</button>
      <div class="tt-slides">
        <?php
        $tt_wa_url = 'https://wa.me/254719261277';
        $tt_slides = array(
          array( get_theme_mod( 'tt_slide1_img', $slides_uri . '/slide1.jpg' ), get_theme_mod( 'tt_slide1_eyebrow', "Kenya-wide delivery" ), $hero_title, $hero_text, get_theme_mod( 'tt_slide1_btn', 'Shop All Tools' ), get_theme_mod( 'tt_slide1_url', '' ) ),
          array( get_theme_mod( 'tt_slide2_img', $slides_uri . '/slide2.jpg' ), get_theme_mod( 'tt_slide2_eyebrow', 'Solar & power' ), get_theme_mod( 'tt_slide2_heading', 'Solar power, sorted' ), get_theme_mod( 'tt_slide2_text', 'Panels, inverters and batteries sized for homes, shops and off-grid living, with guidance to get the setup right.' ), get_theme_mod( 'tt_slide2_btn', 'Shop Solar' ), get_theme_mod( 'tt_slide2_url', '' ) ),
          array( get_theme_mod( 'tt_slide3_img', $slides_uri . '/slide3.jpg' ), get_theme_mod( 'tt_slide3_eyebrow', 'Generators & pumps' ), get_theme_mod( 'tt_slide3_heading', 'Backup power and water, ready when you are' ), get_theme_mod( 'tt_slide3_text', 'Petrol generators and water pumps chosen for Kenyan conditions and backed by real support.' ), get_theme_mod( 'tt_slide3_btn', 'Shop now' ), get_theme_mod( 'tt_slide3_url', '' ) ),
          array( get_theme_mod( 'tt_slide4_img', $slides_uri . '/slide4.jpg' ), get_theme_mod( 'tt_slide4_eyebrow', 'Kenya-wide delivery' ), get_theme_mod( 'tt_slide4_heading', 'From our shop to your door, countrywide' ), get_theme_mod( 'tt_slide4_text', 'Typically 2-5 business days across Kenya. Pay by M-Pesa, bank transfer or cash on delivery.' ), get_theme_mod( 'tt_slide4_btn', 'Delivery details' ), get_theme_mod( 'tt_slide4_url', '/shipping-policy/' ) ),
        );
        $tt_i = 0;
        foreach ( $tt_slides as $sl ) {
          $tt_i++;
          $u = $sl[5] ? ( strpos( $sl[5], 'http' ) === 0 ? $sl[5] : home_url( $sl[5] ) ) : $shop_url;
          echo '<div class="tt-slide" style="background-image:url(' . esc_url( $sl[0] ) . ')"><div class="tt-slide__inner">';
          if ( $sl[1] ) { echo '<span class="eyebrow">' . esc_html( $sl[1] ) . '</span>'; }
          echo '<h2>' . esc_html( $sl[2] ) . '</h2>';
          if ( $sl[3] ) { echo '<p>' . esc_html( $sl[3] ) . '</p>'; }
          echo '<a class="tt-btn" href="' . esc_url( $u ) . '">' . esc_html( $sl[4] ) . '</a>';
          if ( $tt_i === 1 ) { echo '<a class="tt-btn tt-btn--wa" href="' . esc_url( $tt_wa_url ) . '">Order on WhatsApp</a>'; }
          echo '</div></div>';
        }
        ?>
      </div>
      <div class="tt-dots"></div>
    </div>
  </section>

  <section class="tt-trust tt-confidence" aria-label="Shop with confidence">
    <div><b>A real Nairobi shop</b><small>Visit us in person at Royal Palms Mall, Shop BG 55, not just online.</small></div>
    <div><b>Huge range in stock</b><small>Power tools, solar, pumps, generators, welding and more.</small></div>
    <div><b>Countrywide delivery</b><small>We send orders across Kenya, big or small.</small></div>
    <div><b>Help on tap</b><small>Call, WhatsApp or email us before and after you buy.</small></div>
  </section>

  <?php if ( get_theme_mod( 'tt_certs_show', 1 ) ) :
        $tt_certs = array(
          array( '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>', get_theme_mod( 'tt_cert1', 'SSL Secure' ) ),
          array( '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>', get_theme_mod( 'tt_cert2', 'Secure Payments' ) ),
          array( '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', get_theme_mod( 'tt_cert3', 'Warranty Information' ) ),
          array( '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="6"/><path d="M9 13l-2 8 5-3 5 3-2-8"/></svg>', get_theme_mod( 'tt_cert4', 'Customer Support' ) ),
        ); ?>
  <section class="tt-certs" aria-label="Trust and certifications">
    <?php foreach ( $tt_certs as $crt ) { echo '<div class="tt-cert"><span class="tt-cert__i">' . $crt[0] . '</span><b>' . esc_html( $crt[1] ) . '</b></div>'; } ?>
  </section>
  <?php endif; ?>

  <section class="tt-trust">
    <div><b>Kenya-wide delivery</b><small>Delivery times depend on your location, product availability and order confirmation.</small></div>
    <div><b>Trusted sourcing</b><small>Established suppliers and distributors</small></div>
    <div><b>Secure payments</b><small>M-Pesa, bank transfer or cash on delivery</small></div>
    <div><b>Expert support</b><small>Mon-Saturday 7:00am-6:00pm</small></div>
  </section>

  <section class="tt-sec">
    <div class="tt-sec__head"><h2>Shop by Category</h2><a href="<?php echo esc_url( $shop_url ); ?>">View all</a></div>
    <div class="tt-catgrid">
    <?php
    $tt_featured = array(
        array( 'Hardware Tools', 'hardware-tools.jpg' ),
        array( 'Solar Panels', 'solar-panels.jpg' ),
        array( 'Home Appliances', 'home-appliances.jpg' ),
        array( 'Batteries', 'batteries.jpg' ),
        array( 'Inverters', 'inverters.jpg' ),
        array( 'Electronics', 'electronics.jpg' ),
        array( 'Water Pumps', 'water-pump.jpg' ),
        array( 'Generators', 'generators.jpg' ),
        array( 'Incubators', 'incubators.jpg' ),
        array( 'Kitchen Utensils', 'kitchen-utensils.jpg' ),
        array( 'Agricultural Equipment', 'agricultural-appliances.jpg' ),
        array( 'Accessories', 'accessories.jpg' ),
    );
    foreach ( $tt_featured as $fc ) {
        $term = get_term_by( 'name', $fc[0], 'product_cat' );
        if ( ! $term ) { $term = get_term_by( 'slug', sanitize_title( $fc[0] ), 'product_cat' ); }
        $link  = $term ? get_term_link( $term ) : $shop_url;
        $label = $term ? $term->name : $fc[0];
        $img   = esc_url( $cat_imgs_uri . '/' . $fc[1] );
        echo '<a class="tt-cat" href="' . esc_url( $link ) . '"><span class="tt-cat__img" style="background-image:url(' . $img . ')"></span><span class="tt-cat__label">' . esc_html( $label ) . '</span></a>';
    }
    ?>
    </div>
  </section>

  <?php
  foreach ( $cat_slugs as $entry ) {
      $term = get_term_by( 'slug', $entry, 'product_cat' );
      if ( ! $term ) { $term = get_term_by( 'name', $entry, 'product_cat' ); }
      if ( ! $term ) { continue; }
      echo '<section class="tt-sec"><div class="tt-sec__head"><h2>' . esc_html( $term->name ) . '</h2><a href="' . esc_url( get_term_link( $term ) ) . '">View all</a></div>';
      echo '<div class="tt-scroll tt-products">' . do_shortcode( '[products category="' . esc_attr( $term->slug ) . '" limit="12" orderby="rand" columns="6"]' ) . '</div></section>';
  }
  ?>

  <section class="tt-sec">
    <div class="tt-sec__head"><h2>Shop by Brand</h2><a href="<?php echo esc_url( home_url( '/brands/' ) ); ?>">All brands</a></div>
    <div class="tt-scroll tt-brands">
      <?php
        $tt_brands = array( 'bosch'=>'BOSCH','makita'=>'MAKITA','dewalt'=>'DeWALT','ingco'=>'INGCO','total'=>'TOTAL','honda'=>'HONDA','tolsen'=>'TOLSEN','crown'=>'CROWN','stanley'=>'STANLEY' );
        foreach ( $tt_brands as $tt_bslug => $tt_blabel ) {
          $tt_blogo = get_theme_mod( 'tt_brand_' . $tt_bslug . '_logo', '' );
          $tt_blink = get_theme_mod( 'tt_brand_' . $tt_bslug . '_url', home_url( '/brands/' ) );
          if ( $tt_blink === '' ) { $tt_blink = home_url( '/brands/' ); }
          if ( $tt_blogo ) {
            echo '<a class="tt-brand tt-brand--logo" href="' . esc_url( $tt_blink ) . '" title="' . esc_attr( $tt_blabel ) . '"><img src="' . esc_url( $tt_blogo ) . '" alt="' . esc_attr( $tt_blabel ) . '" loading="lazy" onerror="this.style.display=&quot;none&quot;;var a=this.parentNode;a.classList.remove(&quot;tt-brand--logo&quot;);a.appendChild(document.createTextNode(this.alt));"></a>';
          } else {
            echo '<a class="tt-brand" href="' . esc_url( $tt_blink ) . '">' . esc_html( $tt_blabel ) . '</a>';
          }
        }
      ?>
    </div>
  </section>

  <section class="tt-sec tt-why">
    <h2>Why choose Tooltopia Store</h2>
    <div class="tt-trust">
      <div><b>Sourcing you can trust</b><small>Stocked through established suppliers and distributors.</small></div>
      <div><b>Kenya-wide delivery</b><small>Delivery times depend on your location, product availability and order confirmation.</small></div>
      <div><b>Honest pricing</b><small>Fair prices shown up front, no hidden extras.</small></div>
      <div><b>Real support</b><small>Reachable before and after your purchase.</small></div>
    </div>
    <p><a class="tt-btn" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">Read our FAQ</a> <a class="tt-btn tt-btn--wa" href="https://wa.me/254719261277">Order on WhatsApp</a></p>
  </section>

</main>
<script>
(function(){var s=document.querySelector('.tt-slides');if(s===null){return;}var n=s.children.length,i=0;var dots=document.querySelector('.tt-dots'),btns=[];if(dots){for(var k=0;k<n;k++){var b=document.createElement('button');b.type='button';dots.appendChild(b);btns.push(b);}}function paint(){for(var j=0;j<btns.length;j++){btns[j].className=(j===i)?'active':'';}}function go(x){i=(x+n)%n;s.scrollTo({left:s.clientWidth*i,behavior:'smooth'});paint();}for(var k2=0;k2<btns.length;k2++){(function(k2){btns[k2].addEventListener('click',function(){go(k2);});})(k2);}var pv=document.querySelector('.tt-nav.prev'),nx=document.querySelector('.tt-nav.next');if(pv){pv.addEventListener('click',function(){go(i-1);});}if(nx){nx.addEventListener('click',function(){go(i+1);});}var t=setInterval(function(){go(i+1);},6000);s.addEventListener('mouseenter',function(){clearInterval(t);});paint();})();
</script>
<?php
get_footer();
