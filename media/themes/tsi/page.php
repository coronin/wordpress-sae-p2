<?php
/*
  Theme's General Page
 */
get_header(); ?>

    <div id="content">
    <main class="site-main" role="main">

        <?php
        // Start the loop.
        while (have_posts()) : the_post();
  $c = new SaeCounter();
  $cc = 'page'.$post->ID;
  if ( $c->create($cc) ) {
    $c->set($cc, 1); 
  } else {
    $c->incr($cc); }
?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <header class="entry-header">
            <?php the_title( '<h1 class="page-title" style="text-transform:none;">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="content-ver-sep"> </div>

            <div class="entrytext">
                <?php the_post_thumbnail('category-thumb');
                      the_content();
                      wp_link_pages( array(
                        'before' => '<p><strong>Pages:</strong> ',
                        'after' => '</p>',
                        'next_or_number' => 'number' ) ); ?>
                <br/><!-- 2015/5/4 bug fix -->
            </div>
        </div>
        <div class="clear"> </div>

        <?php edit_post_link('Edit This Entry', '<p>', '</p>');
              comments_template('', true); ?>

        <?php
        // End the loop.
        endwhile; ?>

    </main><!-- .site-main -->
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>