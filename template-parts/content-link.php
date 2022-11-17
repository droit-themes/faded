<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package faded
 */
?>

<div <?php post_class('blog_single_item bg_gray code_post faded_link_post wow fadeInUp'); ?> >
    <div class="blog_post">
        <div class="post_content">
            <a href="<?php the_permalink() ?>"><h4 class="blog_title"> <?php the_title() ?> </h4></a>
        </div>
    </div>
</div>

