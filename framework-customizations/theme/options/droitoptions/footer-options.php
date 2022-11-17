<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'footer' => array(
        'title' => esc_html__('Footer Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => esc_html__('Footer Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    
                    'footer_bg' => array(
                        'label' => esc_html__('Background', 'faded'),
                        'desc' => esc_html__('Upload footer section background image if you want.', 'faded'),
                        'type' => 'upload',
                    ),
					'footer_bg_color' => array(
                        'label' => esc_html__('Background Color', 'faded'),
                        'desc' => esc_html__('Select bg color of footer. Default color is #4776e6.', 'faded'),
                        'type' => 'color-picker',
                        'value' => ''
                    ),

                    'footer_widget_font_color' => array(
                        'label' => esc_html__('Widget Font Color ', 'faded'),
                        'desc' => esc_html__('Add footer Font Color if you want.', 'faded'),
                        'type' => 'color-picker',
                    ),
                            
                    'is_news_sub_show' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                                'footer_newsletter_options' => array(
                                'label' => esc_html__('Footer Newsletter Options', 'faded'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => '1',
                                    'label' => esc_html__('Yes', 'faded')
                                ),
                                'left-choice' => array(
                                    'value' => '2',
                                    'label' => esc_html__('No', 'faded')
                                ),
                                'value' => '1',
                                'desc' => esc_html__('Do you want to show Footer Newsletter?', 'faded'),
                            ),
                        ),
                        'choices' => array(
                            '1' => array(
                                 'footer_title' => array(
                                'type' => 'text',
                                'label' => esc_html__('Footer Title', 'faded'),
                                'desc' => esc_html__('Enter footer title.', 'faded')
                                ),
                                'title_color' => array(
                                    'label' => esc_html__('Title Color', 'faded'),
                                    'desc' => esc_html__('Select color of footer title. Default color is #000.', 'faded'),
                                    'type' => 'color-picker',
                                    'value' => ''
                                ),
                                'title_font_size' => array(
                                    'label' => esc_html__('Title Font Size', 'faded'),
                                    'desc' => esc_html__('Select footer title font size. No need to insert "px". Default font size is 46px.', 'faded'),
                                    'type' => 'text',
                                    'value' => ''
                                ),
                                'footer_subtitle' => array(
                                    'type' => 'textarea',
                                    'label' => esc_html__('Footer Text', 'faded'),
                                    'desc' => esc_html__('Enter footer text.', 'faded')
                                ),
                                'footer_sub_title_color' => array(
                                    'label' => esc_html__('Text Color', 'faded'),
                                    'desc' => esc_html__('Enter footer text color. Default color is #b89841.', 'faded'),
                                    'type' => 'color-picker',
                                    'value' => ''
                                ),
                                'footer_sub_font_size' => array(
                                    'label' => esc_html__('Text Font Size', 'faded'),
                                    'desc' => esc_html__('Enter font size of  footer text. No need to insert "px". Default font size is 16px.', 'faded'),
                                    'type' => 'text',
                                    'value' => ''
                                ),
                            ),
                        ),
                        
                        'show_borders' => false,
                    ),
                    

                   
                    'site_info' => array(
                        'label' => esc_html__('Copyright Info', 'faded'),
                        'type' => 'wp-editor',
                        'value' => 'Copyright &copy; by <strong>Faded</strong> 2018. All right reserved.',
                        'desc' => esc_html__('Insert Copyright Info.', 'faded'),
                        'reinit' => true,
                    ),
                    'footer_bottom_bg_color' => array(
                        'label' => esc_html__('Copyright Area Background Color', 'faded'),
                        'desc' => esc_html__('Select bg color of footer bottom. Default color is #d1d1d1.', 'faded'),
                        'type' => 'color-picker',
                        'value' => ''
                    ),
                    'footer_bottom_font_color' => array(
                        'label' => esc_html__('Copyright Area Font Color', 'faded'),
                        'desc' => esc_html__('Select font color of footer bottom. Default color is #f7f7f7.', 'faded'),
                        'type' => 'color-picker',
                        'value' => ''
                    ),

                    // Social url 

                    'footer_fb_url' => array(
                        'type' => 'text',
                        'label' => esc_html__('Footer Facebook URL', 'faded'),
                        'desc' => esc_html__('Enter footer Facebook URL.', 'faded')
                    ),
                    'footer_instagram_url' => array(
                        'type' => 'text',
                        'label' => esc_html__('Footer Instagram URL', 'faded'),
                        'desc' => esc_html__('Enter footer Instagram URL.', 'faded')
                    ),
                    'footer_tiktok_url' => array(
                        'type' => 'text',
                        'label' => esc_html__('Footer TikTok URL', 'faded'),
                        'desc' => esc_html__('Enter footer TikTok URL.', 'faded')
                    ),
                    'footer_youtube_url' => array(
                        'type' => 'text',
                        'label' => esc_html__('Footer YouTube  URL', 'faded'),
                        'desc' => esc_html__('Enter footer YouTube  URL.', 'faded')
                    ),
                    'footer_linkedin_url' => array(
                        'type' => 'text',
                        'label' => esc_html__('Footer Linkedin URL', 'faded'),
                        'desc' => esc_html__('Enter footer Linkedin URL.', 'faded')
                    ),
                )
            ),
        )
    )
);
