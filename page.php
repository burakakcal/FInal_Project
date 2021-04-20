<?php get_header(); ?>
<div class="container">

  <section class="pt-3">
    <div class="my-5">
      <h1 class="text-center my-4"> <?php the_title(); ?>   </h1>

        <br>

      <?php if(has_post_thumbnail()): ?>
          <!-- This has a featured image -->
          <div>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
          </div>
      <?php endif; ?>

    <div class="mx-auto">
      <?php get_template_part('includes/section','content'); ?>
    </div>

    </div>
</section>

</div>

<?php get_footer(); ?>
