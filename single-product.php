<?php get_header(); ?>

<section class="page-wrap  container m-auto mt-5">
    <h1 class="text-center"> <?php the_title(); ?>   </h1>
<div class="container row">

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
   </div>

    <div class="col text-dark">

      <?php get_template_part('includes/section','blogcontent'); ?>
         <?php wp_link_pages(); ?>
    </div>
</div>
</section>
<?php get_footer(); ?>
