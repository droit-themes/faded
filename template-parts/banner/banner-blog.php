<?php
/**
* Display page banner
*/

$show_banner = asset_opt('blog_banner_toggle', 'show')    ;
$banner_url = asset_opt('blog_banner_img_upload');
$show_title = asset_opt('is_blog_banner_title', 'show');
$title = asset_opt('blog_banner_title', get_bloginfo('name'));
$banner_background_url = ASSET_IMAGES.'/blog/banner/breadcrumb_shap.png';
  
if ( $banner_url && !empty($banner_url['url']) ) {
    $banner_background_url = $banner_url['url'];
}

if (!class_exists('Redux')) {
    $banner_background_url = '';
}

if ( $show_banner == 'show' ) {
    if ( $banner_background_url != '' ) {  ?>
        <div class="blog_breadcrumbs_area_two parallaxie">
        <div class="overlay_bg" data-bg-img="<?php echo esc_url($banner_background_url); ?>"></div>
        <?php
    } else { ?>
        <div class="blog_breadcrumbs_area_two banner-with-color">
            <?php
            }
            ?>
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <?php
                    if ($show_title == 'show') { ?>
                        <h1 class="page_title">
                            <?php echo esc_html( $title ); ?>
                        </h1>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
}

