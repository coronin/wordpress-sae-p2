<?php get_header(); ?>

<div id="content">
    <?php if (have_posts()) : ?>
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h1 class="arc-post-title"><?php single_cat_title(); ?></h1><h3 class="arc-src">now browsing by category</h3>
        <?php if(trim(category_description()) != "<br />" && trim(category_description()) != '') { ?>
        <div id="description"><?php echo category_description(); ?></div>
        <?php }?>
        <div class="clear">&nbsp;</div>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h1 class="arc-post-title"><?php single_tag_title(); ?></h1><h3 class="arc-src">now browsing by tag</h3>
        <div class="clear">&nbsp;</div>
        <div class="tagcloud"><?php wp_tag_cloud(''); ?></div>
        <div class="clear">&nbsp;</div>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h1 class="arc-post-title"><?php echo get_the_date('l, F jS, Y'); ?></h1><h3 class="arc-src">now browsing by day</h3>
        <div class="clear">&nbsp;</div>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h1 class="arc-post-title"><?php echo get_the_date('F, Y'); ?></h1><h3 class="arc-src">now browsing by month</h3>
        <div class="clear">&nbsp;</div>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h1 class="arc-post-title"><?php echo get_the_date('Y'); ?></h1><h3 class="arc-src">now browsing by year</h3>
        <div class="clear">&nbsp;</div>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h1 class="arc-post-title">Archives</h1><h3 class="arc-src">now browsing by author</h3>
        <div class="clear">&nbsp;</div>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h1 class="arc-post-title">Archives</h1><h3 class="arc-src">now browsing the general archives</h3>
        <?php } ?>

        <?php while (have_posts()) : the_post(); ?>

            <div <?php post_class(); ?>>
                <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <div class="content-ver-sep"> </div>
                <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php the_content('<p class="read-more">Read the rest of this page &raquo;</p>'); ?>

                <div class="clear"> </div>
                <div class="up-bottom-border">
                <p class="postmetadata">Viewed by <?php
  $c = new SaeCounter();
  $cc = the_time('Ym'); $cc = 'ym-'.$cc;
  if ( $c->create($cc) ) {
    $c->set($cc, 1); 
  } else {
    $c->incr($cc); }
  echo $c->get($cc);
?>; Posted on <?php the_time('F j, Y'); ?>; Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit', '| ', ''); ?> <!-- more --> <?php the_tags('<br />Tags: ', ', ', '<br />'); ?></p>
                </div></div>

                </div><!--close post class-->

        <?php endwhile; ?>

    <div id="page-nav">
    <div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
    <div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
    </div>

    <?php else : ?>

        <h1 class="arc-post-title">Sorry, we couldn't find anything that matched...</h1>

        <h3 class="arc-src"><span>You Can Try the Search...</span></h3>
        <?php get_search_form(); ?>
        <p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; Or Return to the Home Page</a></p><br />
        <h2 class="post-title-color">You can also Visit the Following. These are the Featured Contents</h2>
        <div class="content-ver-sep"></div><br />
        <?php get_template_part( 'featured-box' ); ?>

    <?php endif; ?>

</div><!--close content id-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
