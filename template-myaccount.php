
<?php
/*
Template Name: MyAccount
*/
?>

<?php get_header(); ?>

<!--
<section class="page-wrap">-->
<div class="container">

  <section class="row">

    <div class="">

      <h1> <?php the_title(); ?>   </h1>

      <?php //if(has_post_thumbnail()): ?>
          <!-- This has a featured image -->
          <!-- <div>
            <img src="<?php //the_post_thumbnail_url('blog-large'); ?>" alt="<?php// the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
          </div> -->
    <?php //endif; ?>

    <div><?php
      //the_content();
      ?>
      <?php get_template_part('includes/section','content'); ?>
    </div>

    </div>

    <div class="">

      <?php //if(is_active_sidebar('page-sidebar')) :?>
        <?php //dynamic_sidebar('page-sidebar'); ?>

      <?php //endif; ?>
    </div>

</section>

</div>
<?php get_footer(); ?>
