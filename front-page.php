<?php get_header(); ?>

<?php if(has_header_image()): ?>
  <div class="container-fluid p-0">
    <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">

    </div>
  </div>

  <section class="container page-wrap m-auto">


    <div class="mx-auto">

      <h1 class="frontHeading text-center my-3"> <?php the_title(); ?>   </h1>
      <div class="text">
      <?php get_template_part('includes/section','content'); ?>
      </div>

    </div>

  </section>

<?php endif; ?>


<?php get_footer(); ?>
