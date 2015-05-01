<?php get_header(); ?>

<h1 class="page-title">Not Found</h1>
<h3 class="arc-src"><span>Apologies, but the page you requested could not be found. Perhaps searching will help.</span></h3>

<?php get_search_form(); ?>
<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; Or Return to the Home Page</a></p><br /><br />

<h2 class="post-title-color">You can also Visit the Following. These are the Featured Contents</h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>

<?php get_footer(); ?>