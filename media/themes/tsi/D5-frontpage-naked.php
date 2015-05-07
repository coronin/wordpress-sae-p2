<?php
/*
    Template Name: D5 Front Page Naked
    Use Theme's D5 Front Page style to display content
*/
?>

<?php get_header(); ?>

        <?php while (have_posts()) : the_post();
  $c = new SaeCounter();
  $cc = 'page'.$post->ID;
  if ( $c->create($cc) ) {
    $c->set($cc, 1);
  } else {
    $c->incr($cc); }
?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <div class="entrytext">
            <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile; ?>

<div class="clear"> </div>
<div id="customers-comment">
<blockquote><?php echo of_get_option('bottom-quotation', 'All the developers have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life -- Creation Team'); ?></blockquote>
</div>

<?php get_footer(); ?>