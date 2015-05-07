<?php
/*
  Theme's Search Page
 */
get_header(); ?>

<?php if (have_posts()) : ?>

<main class="site-main" role="main">
<div id="content"><!-- from search.php -->
        <header class="page-header">
        <h1 class="arc-post-title">Search Results</h1>
        </header><!-- .page-header -->

        <?php $counter = 0;
              query_posts($query_string . "&posts_per_page=20");
              // Start the loop.
              while (have_posts()) : the_post();
              if ($counter == 0) {
                $numposts = $wp_query->found_posts; ?>

                <h3 class="arc-src"><span>Search Term: </span><?php the_search_query(); ?></h3>
                <h3 class="arc-src"><span>Number of Results: </span><?php echo $numposts; ?></h3><br />

              <?php } // endif ?>

                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                  <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                  <div class="content-ver-sep"></div>
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
                  </div></div>
                  </div><!--close post class-->

        <?php $counter++;
              // End the loop.
              endwhile; ?>

</div><!-- #content -->
</main><!-- .site-main -->
<?php get_sidebar();
      else: ?>

      <header class="page-header">
      <h1 class="arc-post-title" style="text-transform:none;">Sorry, we find nothing.</h1>
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

<?php get_template_part( 'featured-box' );
      endif; ?>

<?php get_footer(); ?>