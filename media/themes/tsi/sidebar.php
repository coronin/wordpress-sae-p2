<?php
/*
  Theme's Right Sidebar Area
 */
?>

<div id="right-sidebar"><!-- from sidebar.php -->
<?php if ( is_page() ) { ?>

  <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
    <aside class="widget">
        <h3 class="widget-title">Archives</h3>
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly', 'order'=> 'DESC') ); ?>
        </ul>
    </aside>
  <?php endif; ?>

<?php } elseif ( is_single() ) { ?>

  <?php $display_categories = array(3,2);
        foreach ($display_categories as $category) { ?>

    <aside class="widget">
    <?php query_posts("showposts=5&cat=$category"); ?>
        <h3 class="widget-title">
          <a href="<?php echo get_category_link($category); ?>">
          TSI <?php single_cat_title(); ?> </a>
        </h3>
        <ul>
        <?php while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="/?p=<?php the_ID(); ?>">
            <?php the_title(); ?> </a>
          </li>
        <?php endwhile; wp_reset_query(); ?>
        </ul>
    </aside>

  <?php } ?>

<?php } else { ?>

    <aside class="widget">
        <h3 class="widget-title">TSI Updates</h3>
        <ul>
            <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 4 ) ); ?>
        </ul>
    </aside>

    <aside class="widget">
        <h3 class="widget-title">Archives</h3>
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly', 'order' => 'DESC' ) ); ?>
        </ul>
    </aside>

<?php } ?>
</div>