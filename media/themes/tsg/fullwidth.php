<?php
/*
    Template Name: Full Width
    Theme's Full Width Page to show the Pages Selected Full Width
*/
?>

<?php get_header(); ?>
<div id="content-full">
 <?php if (have_posts()) : while (have_posts()) : the_post();
  $c = new SaeCounter();
  $cc = 'page'.$post->ID;
  if ( $c->create($cc) ) {
    $c->set($cc, 1);
  } else {
    $c->incr($cc); }
?> <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
 <h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('category-thumb'); ?>
 <?php the_content('<p class="read-more">Read the rest of this page &raquo;</p>'); ?>
 </div><div class="clear"> </div>
 <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
 <?php comments_template( '', true ); ?>
 <?php endwhile; endif; ?>


</div>
<?php get_footer(); ?>