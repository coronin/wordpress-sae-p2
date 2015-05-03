<?php
/*
  Theme's Single Page to display single page or post
 */
get_header(); ?>

<div id="content"><!-- from single.php -->
<main class="site-main" role="main">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
     // Start the loop.
     while ( have_posts() ) : the_post(); ?>
            <header class="entry-header">
            <?php the_title( '<h1 class="page-title" style="text-transform:none;">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="content-ver-sep"> </div>

            <div class="entrytext">
              <?php the_post_thumbnail('category-thumb');
                    the_content(); ?>

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
              </div><!-- .up-bottom-border -->
            </div><!-- .entrytext -->

            <?php edit_post_link('Edit This Entry', '<p>', '</p>');
                  comments_template( '', true ); ?>

     <?php
     // End the loop.
     endwhile; ?>

</article><!-- #post-## -->
</main><!-- .site-main -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>