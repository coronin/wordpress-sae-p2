<?php get_header(); ?>

<div id="content">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
            <h1 class="page-title"><?php the_title(); ?></h1>

            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('category-thumb'); ?>
            <?php the_content(); ?>

            <div class="clear"> </div>
            <div class="up-bottom-border">
            <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> <?php the_tags('<br />Tags: ', ', ', '<br />'); ?></p>
            <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
            <div class="content-ver-sep"> </div>
            <div class="floatleft"><?php previous_post_link('&laquo; %link (Previous Post)'); ?></div>
            <div class="floatright"><?php next_post_link('(Next Post) %link &raquo;'); ?></div><br />
            <div class="floatleft"><?php previous_image_link( false, '&laquo; Previous Image' ); ?></div>
            <div class="floatright"><?php next_image_link( false, 'Next Image &raquo;' ); ?></div>
            </div></div>

            <?php endwhile;?>

          <!-- End the Loop. -->

            <?php comments_template( '', true ); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>