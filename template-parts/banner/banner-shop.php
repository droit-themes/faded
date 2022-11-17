<?php 
 /**
  * Display page banner 
  */
$show_banner = asset_opt('shop_banner_toggle', 'show');
$show_banner_in_page = asset_page_meta('is_banner', get_the_ID(), 1);

$banner_url = asset_opt('shop_banner_img_upload');
$banner_url_page= asset_page_meta('banner_background_image', get_the_ID());  

$show_title = asset_opt('is_shop_banner_title', 'show');
$shop_banner_title = asset_opt('shop_banner_title', 'Shop Page');

$shop_single_banner_title = asset_opt('shop_single_banner_title', 'Product Details');

$show_breadcrumbs = asset_opt('shop_banner_breadcrumb', 'show');


if($banner_url_page && $banner_url_page != ''){
    $banner_background_url = $banner_url_page;
}elseif($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
if($show_banner == 'show'):
 if($show_banner_in_page):
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>       
    <div class="container">
        <div class="breadcrumb_content text-center">
            <?php if($show_title == 'show') : ?>
                <?php if(is_shop()) { ?>
                <h1 class="page_title"><?php echo esc_html($shop_banner_title); ?></h1>
                <?php }elseif( is_product_category() ){ ?>
                    <h1 class="page_title"><?php the_archive_title(); ?></h1>
                    <?php }elseif (is_tax( 'pwb-brand' )) { ?>
                    <h1 class="page_title"><?php the_archive_title(); ?></h1>
               <?php }else{?>
                <h1 class="page_title"><?php echo esc_html( $shop_single_banner_title );  ?></h1>
                <?php } ?> 
            <?php endif;
            if($show_breadcrumbs  == 'show') : 
            asset_breadcrumbs();
            endif; ?> 
        </div>
    </div>
</div>
<?php 
endif;
endif;
