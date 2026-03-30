<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
   <footer class="site-footer">
      <hr class="my-2 hr_4">
      <div class="row" style="align-items: center;">
         <div class="col-lg-6 footer-link">
            <?php wp_nav_menu( array('menu' => 'footer menu','menu_class' => 'footer_nav' )); ?>
         </div>
         <div class="col-lg-2 footer-social">
            <a href="<?php echo get_option( 'ex_contact_meta_demo_facebook', '' ); ?>" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.jpg" alt="Facebook" border="0" width="32" height="32">
            </a>&nbsp;&nbsp; 
			 <a href="<?php echo get_option( 'ex_contact_meta_twitter', '' ); ?>" target="_blank">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/twitter.jpg" alt="Twitter" border="0" width="32" height="32">
			</a>
         </div>
         <div class="col-lg-4 text-right" style="font-size: 14px;color: #820006;">
            &#169; 2024<?//php echo date('Y'); ?> <strong><?php echo get_option( 'ex_contact_meta_store_copyright', '' ); ?></strong>
         </div>
	<?php if (is_page(14)) { ?>
       <div class="custom-footer-text">Serving All of Anaheim Bail Bonds and surrounding communities: 92801, 92802, 92803, 92804, 92805, 92806, 92807, 92808, 92809, 92812, 92814, 92815, 92816, 92817, 92825, 92850, 92899, Aliso Viejo, Anaheim, Brea, Buena Park, Cypress, Dana Point, Fountain Valley, Fullerton, Garden Grove, La Habra, La Habra Heights, La Palma, Laguna Hills, Laguna Woods, Lake Forest, Los Alamitos, Mission Viejo</div>
    <?php } ?>  
      </div>
   </footer>
</div>  <!-- container contant-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
