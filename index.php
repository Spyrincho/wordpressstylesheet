<?php
// Add header
get_header();
?>

<div class="wrapper">

<?php
// Wordpress loop
if (have_posts()) :
  while (have_posts()) : the_post();
?>

<article class="post">
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <?php the_content(); ?>
</article>

<?php
  endwhile;
else :
  echo "<p>There aren't any posts</p>";
// Loop end
endif;
?>
</div>

<?php
//Add footer
get_footer();
?>
