<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 **/
$is_news_sub_show='';
$footer_newsletter_options='';
$footer_bg='';
$footer_bg_color='';
$footer_widget_font_color='';
$footer_bottom_bg_color='';
$footer_bottom_font_color='';
$footer_title='';
$title_color='';
$title_font_size='';
$footer_subtitle='';
$footer_sub_title_color='';
$footer_sub_font_size='';
$site_info = '&copy; by Faded 2022. All Rights Reserved.';
$mailchimp_key='';
$news_option='';
$custom_style_widget='';
$custom_style_footer='';

$footer_fb_url='';
$footer_instagram_url='';
$footer_tiktok_url='';
$footer_youtube_url='';
$footer_linkedin_url='';

if(defined('FW'))
{   
    $is_news_sub_show =fw_get_db_settings_option('is_news_sub_show',  array());
    $footer_bg=fw_get_db_settings_option('footer_bg','');
    $footer_newsletter_options=fw_get_db_settings_option('footer_newsletter_options', array());
    $footer_bg_color=fw_get_db_settings_option('footer_bg_color','');
    

    //  Social Information 

    $footer_fb_url          = fw_get_db_settings_option('footer_fb_url', '');
    $footer_instagram_url   = fw_get_db_settings_option('footer_instagram_url', '');
    $footer_tiktok_url      = fw_get_db_settings_option('footer_tiktok_url', '');
    $footer_youtube_url     = fw_get_db_settings_option('footer_youtube_url', '');
    $footer_linkedin_url    = fw_get_db_settings_option('footer_linkedin_url', '');

    /*Widget Area BG Color*/

    $footer_bg_color=fw_get_db_settings_option('footer_bg_color','');
    if(isset($footer_bg_color) && $footer_bg_color !='')
    {
        $footer_bg_color='background: '.$footer_bg_color.';';
    }
    

    $footer_widget_font_color=fw_get_db_settings_option('footer_widget_font_color','');

    if(isset($footer_widget_font_color) && $footer_widget_font_color !='')
    {
        $footer_widget_font_color='color: '.$footer_widget_font_color.';';
    } 

    $custom_style_widget = $footer_bg_color.''.$footer_widget_font_color;

    /* Style For Footer Bottom */
    $footer_bottom_bg_color=fw_get_db_settings_option('footer_bottom_bg_color','');
    
    if(isset($footer_bottom_bg_color) && $footer_bottom_bg_color !='')
    {
        $footer_bottom_bg_color='background: '.$footer_bottom_bg_color.';';
    } 

    $footer_bottom_font_color=fw_get_db_settings_option('footer_bottom_font_color','');

     if(isset($footer_bottom_font_color) && $footer_bottom_font_color !='')
    {
        $footer_bottom_font_color='color: '.$footer_bottom_font_color.';';
    } 

    $custom_style_footer = $footer_bottom_bg_color.''.$footer_bottom_font_color;

   

    $site_info = fw_get_db_settings_option('site_info', '');
    $mailchimp_key = fw_get_db_settings_option('mailchimp_key', '');
    if(isset($footer_bg_color) && $footer_bg_color !='')
    {
        $footer_bg_color='background: '.$footer_bg_color.';';
    }    
    if(isset($footer_bg) && $footer_bg != ''){
        $footer_bg_url='';
        $footer_bg_thum='';
        $thumImg = wp_get_attachment_image_src($footer_bg['attachment_id'], 'full');
        if (isset($thumImg[0]) && $thumImg[0] != '') {
            $footer_bg_url=$thumImg[0];            
            $footer_bg_thum = 'background: rgba(0, 0, 0, 0) url('.esc_url($footer_bg_url).') no-repeat scroll center top';
        }
    }


       

        $news_option = !empty($is_news_sub_show['footer_newsletter_options']) ? $is_news_sub_show['footer_newsletter_options'] : '1';

        $footer_title = !empty($is_news_sub_show[1]['footer_title']) ? $is_news_sub_show[1]['footer_title'] : '';
        $footer_subtitle = !empty($is_news_sub_show[1]['footer_subtitle']) ? $is_news_sub_show[1]['footer_subtitle'] : '';

        $title_color = !empty($is_news_sub_show[1]['title_color']) ? $is_news_sub_show[1]['title_color'] : '';
        if($title_color !='')
        {   
            $title_color='color: '.$title_color.';';
        }
        $title_font_size = !empty($is_news_sub_show[1]['title_font_size']) ? $is_news_sub_show[1]['title_font_size'] : '';
        if($title_font_size != '')
        {
             $title_font_size='font-size: '.$title_font_size.'px;';
        } 

        $footer_sub_title_color = !empty($is_news_sub_show[1]['footer_sub_title_color']) ? $is_news_sub_show[1]['footer_sub_title_color'] : '';
        if($footer_sub_title_color != '')
        {
             $footer_sub_title_color='color:'.$footer_sub_title_color.';';
        } 
        $footer_sub_font_size = !empty($is_news_sub_show[1]['footer_sub_font_size']) ? $is_news_sub_show[1]['footer_sub_font_size'] : '';
        if($footer_sub_font_size !='')
        {   
            $footer_sub_font_size='font-size: '.$footer_sub_font_size.'px;';
        }
}
        $allowed_html=array(
            'a'=>array(
                'href'=>array(),
                'title'=>array(),
            ),
            'strong'=>array(),
            'span'=>array(),
            'p'=>array()
        );

?>


<!-- FOOTER -->
<footer class="bg-img footer_area footer_widget_area" style="<?php echo esc_attr($custom_style_widget);?>">
     <?php if($news_option == '1' ) { ?>
        <div class="footer_subcription">
            <div class="bg-img" style="<?php if(isset($footer_bg_thum)  && $footer_bg_thum !='' ){ echo esc_attr($footer_bg_thum); } ?>"></div>
               
                    <?php if(!empty($footer_title) || !empty($footer_subtitle)) : ?>
                    <h2 class="sec-title" style="<?php echo esc_attr($title_color) . esc_attr($title_font_size); ?>"><?php echo esc_html($footer_title); ?></h2>
                    <div class="hr"></div>
                    <p class="subheader" style="<?php echo esc_attr($footer_sub_title_color) . esc_attr($footer_sub_font_size); ?>"><?php echo esc_html($footer_subtitle); ?></p>
                    <?php endif; ?>
                    <?php if(!empty($mailchimp_key)) : ?>
                    <div class="subscription">
                        <?php echo do_shortcode($mailchimp_key); ?>
                    </div>


                    <div class="sec-contact Footer">
                        <div class="contact">
                            <div class="social">
                                <?php if( !empty($footer_fb_url)): ?>
                                <a target="_blank" href="<?php echo $footer_fb_url; ?>"><i style="background-color:#4267b2;" class="fa fa-facebook" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            <?php if( !empty($footer_instagram_url)): ?>
                                <a target="_blank" href="<?php echo $footer_instagram_url; ?>"><i style="background-color:#1da1f2;" class="fa fa-instagram" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if( !empty($footer_tiktok_url)): ?>
                                <a target="_blank" href="<?php echo $footer_tiktok_url; ?>"><i style="background-color:#bd081c;" class="fa fa-tiktok" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if( !empty($footer_youtube_url)): ?>
                                <a target="_blank" href="<?php echo $footer_youtube_url; ?>"><i style="background-color:#f26522;" class="fa fa-youtube" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if( !empty($footer_linkedin_url)): ?>
                                <a target="_blank" href="<?php echo $footer_linkedin_url; ?>"><i style="background-color:#f26522;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
        <?php endif; ?>
            <h5 class="footer"><?php echo wp_kses($site_info, $allowed_html); ?></h5>
        </div>
     <?php  }else{ ?>
    <!-- For Footer Widget Style -->
    <?php  if (is_active_sidebar('footer_widgets')) { ?>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <?php  dynamic_sidebar('footer_widgets');   ?> 
            </div> 
        </div>
    </div>
    <?php } ?>
    
    <div class="footer_bottom" style="<?php echo esc_attr($custom_style_footer); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo wp_kses($site_info, $allowed_html); ?>
                </div>
            </div>
        </div>
    </div> 
    <?php } ?>
    
</footer>
<!-- END FOOTER -->
<a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<?php wp_footer(); ?>
</body>
</html>
