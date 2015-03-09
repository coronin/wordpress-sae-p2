<?php get_header(); ?>

    <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post();
  $c = new SaeCounter();
  $cc = 'page'.$post->ID;
  if ( $c->create($cc) ) {
    $c->set($cc, 1); 
  } else {
    $c->incr($cc); }
?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="content-ver-sep"> </div>
            <div class="entrytext">
 <?php the_post_thumbnail('category-thumb'); ?>
 <?php the_content('<p class="read-more">Read the rest of this page &raquo;</p>'); ?>

                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

            </div>
        </div>
        <?php endwhile; ?><div class="clear"> </div>
    <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
    <?php comments_template('', true); ?>
    <?php else: ?>
        <p>Sorry, no pages matched your criteria.</p>
    <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>