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
<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">
   <div class="logo">
      <a href="<?php echo site_url(); ?>">
         <img src="<?php echo get_custom_logo_url(); ?>" class="mx-auto d-block img-fluid logo-image">
      </a>
   </div>
	<div class="call_info">
		<a href="tel:714-772-2045"><strong>714-772-2045</strong></a> </br>
	<a href="tel:714-772-2045"><strong>CLICK TO CALL NOW</strong></a>
	</div>
	
   <h2 class="sub-heading text-center pb-4"><?php echo get_option( 'ex_contact_meta_contact_store_name', '' ); ?></h2>
	
   <nav class="main-menu bg-white" id="site-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
      <!-- <a href="" class="logo">CSS Nav</a> -->
      <input class="menu-btn" type="checkbox" id="menu-btn" />
      <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
      <?php wp_nav_menu( array('menu' => 'main menu','menu_class' => 'menu-list' )); ?>
   </nav>
</header>