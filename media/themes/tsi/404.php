<?php
/*
  Theme's 404 Error Page
 */
get_header(); ?>

<main class="site-main" role="main">
<header class="page-header">
<h1 class="arc-post-title">Not Found</h1>
</header><!-- .page-header -->
<h3 class="arc-src" style="text-transform:none;">Apologies, sincerely.</h3>

<section class="error-404 not-found">
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tsi' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'tsi' ); ?></p>
            <?php get_search_form(); ?>

<?php else : ?>

            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tsi' ); ?></p>
            <?php get_search_form(); ?>

<?php endif; ?>
</section><!-- .error-404 -->

<div class="content-ver-sep"> </div><br/>
<?php get_template_part( 'featured-box' ); ?>
</main><!-- .site-main -->

<?php get_footer(); ?>