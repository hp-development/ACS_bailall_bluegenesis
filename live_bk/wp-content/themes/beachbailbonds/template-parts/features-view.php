<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!-- header-section-start -->
<!----features-view start--->
<div class="features-view <?php echo (is_front_page() || is_shop() || is_cart())?'':'bg-two'; ?>">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="happy-clients">
              <div class="main-box-service one" data-aos="fade-right" data-aos-duration="1500">
                 <div class="box-clients one">
                 <div class="use-clientes">
                       <div class="text_wrap">
                          <h4> quality<br>  products</h4>
                          <span>MADE IN USA</span>
                       </div>
                       
                       <figure>
                        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
                           <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/quality1.png'); ?>">
                        </a>
                        </figure>
                 </div>
                 </div>
                 <div class="box-clients two">
                    <div class="use-clientes">
                       <div class="text_wrap">
                          <span>100% PURE</span>
                          <h4> NATURAL HERBAL<br>
                          INGREDIENTS</h4>
                       </div>
                       <figure>
                        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
                           <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/neatural.png'); ?>">
                        </a>
                        </figure>
                    </div>
                 </div>
              </div>

              <div class="worldwidee-clientes">
                 <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/happy clients.png'); ?>">
              </div>

              <div class="main-box-service three" data-aos="fade-left" data-aos-duration="1500">
                 <div class="box-clients three">
                    <div class="use-clientes">
                    <figure>
                     <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/shipping.png'); ?>">
                        </a>
                     </figure>
                 
                    <div class="text_wrap">
                    <h4> Discreet Shipping<br>
                       Worldwide </h4>
                       <span>US orders ship via USPS and<br>
                       arrive within 3-5 Business days</span>
                    </div>
                    </div>
                 </div>
     
                 <div class="box-clients four">
                    <div class="use-clientes">
                       <figure>
                        <a href="<?php echo get_permalink( 25 ); ?>">
                           <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/user1.png');?>">
                        </a>
                        </figure>
                       <div class="text_wrap">
                          <h4> Need Some Help? </h4>
                       <span>Click here for a super<br>
                          fast response</span>
                       </div>
                    </div>
                 </div>

              </div>

           </div>
        </div>
     </div>
  </div>
</div>