<?php
/**
* Template Name: Home Page
*/   
get_header(); 
?>
<div class="row">
   <div class="col-md-4 mt-4">
      <aside class="mt-2">
         <?php if( have_rows('main_image') ): while( have_rows('main_image') ): the_row(); ?>
         <div class="inquiry_wrap" style="background: url(<?php echo get_sub_field('image'); ?>) no-repeat;background-size: cover;">
            <h2 class="text-center inquiry-t1"><?php echo get_sub_field('title'); ?></h2>
            <h4 class="text-center inquiry-t2"><?php echo get_sub_field('sub_title'); ?></h4>
            <h2 class="inquiry-t3"><?php echo get_sub_field('text'); ?></h2>
         </div>
         <?php endwhile; endif; if(get_field('content')){ ?>
         <div class="mt-4">
            <?php the_field('content'); ?>
         </div>
         <?php } if(get_field('other_image')){ ?>
         <hr class="my-2 hr_4">
         <img src="<?php the_field('other_image'); ?>" class="mx-auto d-block img-fluid">
         <?php } ?>
      </aside>
   </div>
   <div class="col-md-8 mt-4">
      <?php the_content(); ?>
   </div>
</div>
<?php
get_footer();