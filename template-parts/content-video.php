<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package faded
 */
?>
<div <?php post_class('single_page_blog_post video_post'); ?> >
    
    <?php if( has_post_thumbnail() ){ ?>
    <div class="post_thumb">
        <a href="<?php the_permalink(); ?>" class="d-inline-block">
            <?php the_post_thumbnail('faded_740x480', array('class' => 'img-fluid')) ?> 
        </a>
        <a href="https://www.youtube.com/watch?v=x4q86IjJFag" class="video_popup">
            <span class="polygon_shape"></span></a>
    </div>
    <?php } ?>
    <div class="single_blog_content">
        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <?php echo strip_shortcodes(the_excerpt('blog_excerpt', false)); ?>
        <div class="blog_btn">
            <a href="<?php the_permalink(); ?>" class="read_more_btn"><?php echo esc_html__( 'Read More', 'faded' ); ?>  <i class="flaticon-right-arrow"></i> </a>
        </div>
    </div>
</div>
