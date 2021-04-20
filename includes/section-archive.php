<div class="row">
<?php
if (have_posts()) : ?>
  <div class="col-lg-9">
    <?php
  while (have_posts()):
    the_post();
  ?>


    <div class="card mt-5 mb-3">
      <div class="card-body">

        <!-- featured image -->
        <?php if(has_post_thumbnail()): ?>
            <!-- This has a featured image -->
            <div>
              <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
            </div>
      <?php endif; ?>

    <h1> <?php the_title(); ?>   </h1>

    <?php
    the_excerpt();//cut of some portion of text
    ?>

    <a href="<?php the_permalink(); ?>" class="text-dark"> Read more </a>
  </div> <!--card-body-->

</div> <!--card-->



<?php endwhile;?>
</div>
<?php
 else:
endif;

?>

<div class="col-lg-3">

  <?php if(is_active_sidebar('blog-sidebar')) :?>
    <?php dynamic_sidebar('blog-sidebar'); ?>

  <?php endif; ?>
</div>
</div>
