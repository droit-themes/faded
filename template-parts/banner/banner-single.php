<?php 
 /**
  * Display page banner 
  */
$show_banner = asset_opt('single_blog_banner_toggle', 'show');
$show_banner_in_page = asset_page_meta('is_banner', get_the_ID(), 1);

$banner_url = asset_opt('single_blog_banner_img_upload');
$banner_url_page= asset_page_meta('banner_background_image', get_the_ID());  

$how_title = asset_opt('is_single_blog_banner_title', 'show');
$show_breadcrumbs = asset_opt('single_blog_banner_breadcrumb', 'show');

$banner_background_url = ASSET_IMAGES.'/blog/banner/breadcrumb_shap.png';

if($banner_url_page && $banner_url_page != ''){
    $banner_background_url = $banner_url_page;
}elseif($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
if($show_banner == 'show') :
 if($show_banner_in_page):
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two">
<div class="overlay_bg" data-bg-img="<?php echo esc_url($banner_background_url); ?>"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>        
        <div class="container">
            <div class="breadcrumb_content text-center">
               <?php if($how_title == 'show') : ?>
                <h1 class="page_title"><?php single_post_title(); ?></h1>
                <div class="post-meta">
                    <?php 
                    asset_posted_on();
                    asset_posted_by();
                    ?>
               </div>
               <?php endif; ?> 
            </div>
        </div>
</div>
<?php 
endif;
endif;
