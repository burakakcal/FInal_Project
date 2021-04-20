<div class="bg-light mt-5 text-dark ">
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>

<p class="text-dark">
<?php  //echo get_the_date('l, h:i:s d/m/Y'); //check php date format ?>
</p>


<?php
    the_content();
    // the_author();
?>
<?php
  $fname = get_the_author_meta('first_name');
  $lname = get_the_author_meta('last_name');
  ?>
  <p class="text-dark"> <?php echo 'Posted by ' . $fname . ' ' . $lname; ?> </p>

  <?php
    $tags = get_the_tags();
    ?>
      <p class="text-danger "> Tags:
        <?php
        echo ' ';
    if($tags):
    foreach($tags as $tag):?>

      <a class="text-dark mr-5" href="<?php echo get_tag_link($tag -> term_id);  ?>">
        <?php echo  $tag -> name; ?>
      </a>

<?php endforeach;
else:
endif;
?>
</p>

<?php
  $categories = get_the_category();
  ?>
    <p class="text-danger"> Categories:
      <?php
      echo ' ';
  foreach($categories as $cat):?>

  <a class="text-dark mr-3" href="<?php echo get_category_link($cat->term_id); ?>">
    <?php echo $cat->name; //go and add single_cat_title() in archive ?>
  </a>
<?php endforeach; ?>
</p>

<?php //comments_template();?>
<!-- /to get multiple parts of a page add this in single.php -->

<?php

  endwhile;
 else:
endif;

?>
</div>
