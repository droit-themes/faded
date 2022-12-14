<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'posts' => array(
        'title' => esc_html__('Single Post Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'blog-box' => array(
                'title' => esc_html__('Single Post Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    'single_post_title' => array(
                        'label' => esc_html__('Single Post Page Title', 'faded'),
                        'type' => 'text',
                        'value' => 'Blog details',
                        'desc' => esc_html__('Enter title for single blog post page title. This is the general, common title for all single posts.', 'faded'),
                    ),
                    'single_post_title_align' => array(
                        'label' => esc_html__('Title/Breadcrumb Alignment', 'faded'),
                        'type' => 'text',
                        'value' => 'left',
                        'desc' => esc_html__('Enter title for single blog post page title Alignment. left, right, center', 'faded'),
                    ),
                    'single_post_title_limit' => array(
                        'label' => esc_html__('Post Title Limit', 'faded'),
                        'type' => 'text',
                        'value' => '10',
                        'desc' => esc_html__('Enter Post  title text Limit', 'faded'),
                    ),
                    'is_single_breadcrumb' => array(
                        'label' => esc_html__('Breadcrumb Settings', 'faded'),
                        'type' => 'switch',
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('Yes', 'faded')
                        ),
                        'left-choice' => array(
                            'value' => '2',
                            'label' => esc_html__('No', 'faded')
                        ),
                        'value' => '2',
                        'desc' => esc_html__('Do you want to show breadcrumb?', 'faded'),
                    ),
                    'share_status' => array(
                        'label' => esc_html__('Social Sharing', 'faded'),
                        'type' => 'switch',
                        'right-choice' => array(
                            'value' => '1',
                            'label' => esc_html__('Yes', 'faded')
                        ),
                        'left-choice' => array(
                            'value' => '2',
                            'label' => esc_html__('No', 'faded')
                        ),
                        'value' => '2',
                        'desc' => esc_html__('Do you want to show social sharing options?', 'faded'),
                    ),
                    'share_buttons' => array(
                        'label' => esc_html__('Sharing Sources', 'faded'),
                        'type' => 'select-multiple',
                        'value' => array('1', '2', '3'),
                        'desc' => esc_html__('Select social medias that you want to enable sharing.', 'faded'),
                        'choices' => array(
                            1 => esc_html__('Twitter', 'faded'),
                            2 => esc_html__('Facebook', 'faded'),
                            3 => esc_html__('Google Plus', 'faded'),
                            4 => esc_html__('Pinterest', 'faded'),
                            5 => esc_html__('Linkedin', 'faded'),
                            6 => esc_html__('Reddit', 'faded')
                        ),
                    ),
                    'get_app_footer' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'get_app_item' => array(
                                'label' => esc_html__('Get App Settings', 'faded'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => '1',
                                    'label' => esc_html__('No', 'faded')
                                ),
                                'left-choice' => array(
                                    'value' => '2',
                                    'label' => esc_html__('Yes', 'faded')
                                ),
                                'value' => '2',
                                'desc' => esc_html__('If you want to show "Get App" option, please turn on this option and setup your contents', 'faded'),
                            )
                        ),
                        'choices' => array(
                            '1' => array(
                                'get_app_bg' => array(
                                    'label' => esc_html__('Get Section BG', 'faded'),
                                    'desc' => esc_html__('Upload "Get App" section background image if you want.', 'faded'),
                                    'type' => 'upload',
                                ),
                                'getapp_heading' => array(
                                    'label' => esc_html__('Get App Heading', 'faded'),
                                    'type' => 'text',
                                    'value' => 'Get app now',
                                    'desc' => esc_html__('"Get App" heading title', 'faded'),
                                ),
                                'getapp_param' => array(
                                    'label' => esc_html__('Get App Content', 'faded'),
                                    'type' => 'textarea',
                                    'desc' => esc_html__('Enter "Get App" content', 'faded'),
                                ),
                                'getapp_dwnload' => array(
                                    'label' => esc_html__('Download Buttons Title', 'faded'),
                                    'type' => 'text',
                                    'value' => 'Download Form',
                                    'desc' => esc_html__('Enter title for app download buttons from various stores', 'faded'),
                                ),
                                'get_app_buttons' => array(
                                    'label' => esc_html__('Buttons', 'faded'),
                                    'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
                                    'desc' => esc_html__('Here you can add, remove and edit your Buttons.', 'faded'),
                                    'type' => 'addable-popup',
                                    'template' => '{{=head_title}}',
                                    'popup-options' => array(
                                        'head_title' => array(
                                            'label' => esc_html__('Button title', 'faded'),
                                            'desc' => esc_html__('Enter button title', 'faded'),
                                            'type' => 'text',
                                            'value' => ''
                                        ),
                                        'button_label' => array(
                                            'label' => esc_html__(' Button Image', 'faded'),
                                            'desc' => esc_html__('Enter button image', 'faded'),
                                            'type' => 'upload',
                                            'value' => ''
                                        ),
                                        'button_link' => array(
                                            'label' => esc_html__('Button Link', 'faded'),
                                            'desc' => esc_html__('Enter link URL related to the button', 'faded'),
                                            'type' => 'text',
                                            'value' => '#'
                                        )
                                    ),
                                ),
                                'get_app_right_bg' => array(
                                    'label' => esc_html__('Get Right Side Img', 'faded'),
                                    'desc' => esc_html__('Upload right side image for "Get App" section', 'faded'),
                                    'type' => 'upload',
                                ),
                            ),
                        ),
                        'show_borders' => false,
                    ),
                )
            ),
        )
    )
);
