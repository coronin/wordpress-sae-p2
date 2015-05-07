<?php
/* Comments Area for Single Pages */

    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
    if ( post_password_required() ) { ?>
<p class="nocomments"><?php 'This post is password protected. Enter the password to view comments.'; ?></p>
<?php
        return;
    }
?>

<div id="commentsbox">
<?php if ( have_comments() ) : ?>
    <h2 class="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?><?php _e(' to ','tsi'); ?> <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>
    <div class="comment-nav">
        <div class="floatleft">
            <?php previous_comments_link() ?>
        </div>
        <div class="floatright">
            <?php next_comments_link() ?>
        </div>
    </div>
<?php else : ?>
    <?php if ( ! comments_open() && ! is_page() ) : ?>
        <p class="watermark"><?php 'Comments are Closed'; ?></p>
    <?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
    <div id="comment-form">
        <?php comment_form(); ?>
    </div>
<?php endif; ?>
</div>
