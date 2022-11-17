<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package faded
 */

?>
<div class="single_page_blog_post">
	<?php  if( has_post_thumbnail() ){ ?>
        <?php the_post_thumbnail() ?>
	<?php } ?>
    <div class="single_blog_content">
        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <?php echo strip_shortcodes(the_excerpt('blog_excerpt', false)); ?>
        <div class="blog_btn">
        <a href="<?php the_permalink(); ?>" class="read_more_btn"><?php echo esc_html__( 'Read More', 'faded' ); ?>  <i class="flaticon-right-arrow"></i> </a>
        </div>
    </div>
</div>

