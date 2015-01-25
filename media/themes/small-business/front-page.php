<?php
/*
	Template Name: Front Page
	smallbusiness Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Small Business 1.0
*/
?>

<?php get_header(); wp_enqueue_script( 'slider-main', get_template_directory_uri() . '/js/slider.js' ); ?>
      <div id="slider">
         	<div id="slideshow"><ul class="bjqs">
			<?php $sbargs = smallbusiness_ppp(); query_posts( $sbargs ); 
			if (have_posts()) : while (have_posts()) : the_post();?>
            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-thumb'); ?><div class="post-slide"><h2><?php the_title(); ?></h2><?php  $sbExcerptLength=30; the_excerpt(); ?></div></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
            </ul></div>  
      	</div>
          
<h1 id="heading"><?php echo of_get_option('heading_text', 'Go with Small Business Pro for exciting Post Options, Theme Options and Extra Functionalities.'); ?></h1>

<?php get_template_part( 'featured-box' );  ?><br />

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post();?><div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title();?></h2><?php the_post_thumbnail('thumbnail'); ?></a><?php if (is_page()): the_content(); else: $sbExcerptLength=60; the_excerpt(); endif; ?>
</div> 
<br /><div class="clear"> </div>
 
 <?php endwhile; ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
</div>
 
<?php endif; ?>
 

</div>

<?php get_sidebar( 'frontpage' ); ?>
<div class="clear"> </div>

<?php if ( of_get_option('bottom-quotation', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team') != '' ) : ?>
<div class="content-ver-sep"> </div>
<div id="customers-comment">
<blockquote><?php echo of_get_option('bottom-quotation', 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team'); ?></blockquote>
</div>
<?php endif; ?>

<?php get_footer(); ?>