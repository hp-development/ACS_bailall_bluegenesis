<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<div class="how-itwork-banner shop-now wp_content_banner" style="<?php echo (!empty($image))?'background: url('.$image[0].') top center no-repeat;background-size: 100%;': ''; ?>">
	   <div class="container">
	      <h1 data-aos="fade-down" class="aos-init aos-animate">
	      	<?php the_title(); ?>
	      </h1>
	   </div>
	</div>
	<!-- breadcrum -->
	<div class="breadcrum">
	   <div class="container">
	      <ul>
	         <li><a href="<?php echo site_url(); ?>">Home<span>/</span></a></li>
	         <li><?php the_title(); ?></li>
	      </ul>
	   </div> 
	</div>

	<div class="out-wrok-content">
      	<div class="container">
			<?php
			the_content();
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
				)
			);
			?>
		</div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
<?php get_template_part( 'template-parts/features-view' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
