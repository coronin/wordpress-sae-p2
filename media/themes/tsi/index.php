<?php
/*
  Theme's Index Page
 */
get_header(); ?>

<div id="content"><!-- from index.php -->
<main class="site-main" role="main">

    <?php if (have_posts()) :
    // Start the loop.
    while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <p class="postmetadataw">Posted on <?php the_time('F j, Y'); ?></p>
    <header class="entry-header">
    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    </header><!-- .entry-header -->

    <div class="content-ver-sep"> </div>

    <div class="entrytext">
        <?php the_post_thumbnail('thumbnail');
              the_content('<p class="read-more">Read the rest of this page &raquo;</p>'); ?>
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
        </div>
    </div></div>

<?php
    // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'tsi' ),
        'next_text'          => __( 'Next page', 'tsi' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tsi' ) . ' </span>',
    ) );

    else: ?>

        <header class="page-header">
        <h1 class="arc-post-title" style="text-transform:none;">Sorry, we find nothing...</h1>
        </header><!-- .page-header -->

        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tsi' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'tsi' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tsi' ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>

        <div class="content-ver-sep"> </div><br/>
        <?php get_template_part( 'featured-box' ); ?>

<?php endif; ?>

</main><!-- .site-main -->
</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>