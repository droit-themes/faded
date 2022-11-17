<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package faded
 */

?>
<div class="thumbnail-blog animate fadeInUp">
    <?php
        if ( is_sticky() ) {
            echo '<h6 class="is_sticky sticky-label">'.esc_html__( 'Featured', 'faded' ).'</h6>';
        }
    ?>
    <?php  if( has_post_thumbnail() ){ ?>
        <a href="<?php the_permalink(); ?>" class="d-inline-block faded-post-thumb">
           
            <?php
               the_post_thumbnail();
            ?>
        </a>
    <?php  } ?>
    <div class="single_blog_content">
        <h2> <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 7 ); ?></a> </h2>
       <?php echo strip_shortcodes(the_excerpt('blog_excerpt', false)); ?>
        <div class="blog_btn">
            <a href="<?php the_permalink(); ?>" class="read_more_btn"> <?php echo esc_html__( 'Read More', 'faded' ); ?> &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</div>





