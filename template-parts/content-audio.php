
<div <?php post_class('single_page_blog_post audio_post'); ?> >
    
    <div class="post_thumb">
        <div class="audio_post_content">
            <audio preload="auto" controls>
                <source src="https://www.w3schools.com/html/horse.mp3">
            </audio>
        </div>
    </div>
    <div class="single_blog_content">
        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <p> <?php echo strip_shortcodes(the_excerpt('blog_excerpt', false)); ?> </p>
        <div class="blog_btn">
        <a href="<?php the_permalink(); ?>" class="read_more_btn"><?php echo esc_html__( 'Read More', 'faded' ); ?>  <i class="flaticon-right-arrow"></i> </a>
        </div>
    </div>
</div>
