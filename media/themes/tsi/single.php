<?php get_header(); ?>

<div id="content">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('category-thumb'); ?>
            <?php the_content(); ?>

            <div class="clear"> </div>
            <div class="up-bottom-border">
            <p class="postmetadata">Viewed by <?php
  $c = new SaeCounter();
  $cc = 'c'.get_the_date('Ym');
  if ( $c->create($cc) ) {
    $c->set($cc, 1); 
  } else {
    $c->incr($cc); }
  echo $c->get($cc);
?>; Posted on <a href="<?php echo get_month_link('', ''); ?>"><?php the_time('F j, Y'); ?></a>; Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit', '| ', ''); ?> <!-- more --> <?php the_tags('<br />Tags: ', ', ', '<br />'); ?></p>
            <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
            <div class="content-ver-sep"> </div>
            <div class="floatleft"><?php previous_post_link('&laquo; %link'); ?></div>
            <div class="floatright"><?php next_post_link('%link &raquo;'); ?></div>
            </div></div>

            <?php endwhile;?>

          <!-- End the Loop. -->

            <?php comments_template( '', true ); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>