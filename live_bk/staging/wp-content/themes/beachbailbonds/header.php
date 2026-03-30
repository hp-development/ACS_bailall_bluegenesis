<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6715399-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-6715399-4');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KH5RYD4MYB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KH5RYD4MYB');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon icon -->
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/favicon.ico'); ?>">
    <!-- style CSS -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <div style="" id="loadingDiv"><div class="loader">Loading...</div></div> -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
<div class="container contant-wrapper">
<?php get_template_part( 'template-parts/header/site-header' ); ?>
<section class="banner">
    <?php if (has_post_thumbnail( ) ): ?> <!-- $post->ID -->
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <img src="<?php echo $image[0]; ?>" class="mx-auto d-block w-100">
    <?php endif; ?>
</section>