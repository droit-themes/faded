
<div class="col-lg-4 col-md-4 col-sm-6">
    <div <?php post_class( 'blog_grid' ) ?> data-aos="fade-up" data-aos-delay="100">
        <?php
        if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink() ?>" class="item_image">
                <?php the_post_thumbnail('faded_250x250', array('class' => 'img-fluid')) ?>
            </a>
            <h2 class="related_post_title"> <a href="<?php the_permalink(); ?>"><?php echo  wp_trim_words( get_the_title(), 4, false ); ?></a> </h2>
        <?php
        }
        ?>
    </div>
</div>