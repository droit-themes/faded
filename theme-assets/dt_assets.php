<?php

/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 */
/* * *******************************************
  Define & Initialization
 * ****************************************** */
define('DT_THEME_DIR', get_template_directory());
define('DT_THEME_URL', get_template_directory_uri());
define('DT_STYLESHEET_URL', get_stylesheet_uri());

define('THEME_STYLESHEET_URL', get_bloginfo('stylesheet_url'));
define('THEME_STYLESHEET_FILE', DT_THEME_DIR . '/style.css');

define('DT_FC_DIR', DT_THEME_DIR . '/framework-customizations');
define('DT_FC_URL', DT_THEME_URL . '/framework-customizations');

define('DT_THEMEDESK_DIR', DT_THEME_DIR . '/framework-customizations/theme-desk');
define('DT_THEMEDESK_URL', DT_THEME_URL . '/framework-customizations/theme-desk');

define('DT_ASSETS_DIR', DT_THEME_DIR . '/theme-assets');
define('DT_ASSETS_URL', DT_THEME_URL . '/theme-assets');


define('DT_ASSETS_CSS_DIR', DT_THEME_DIR . '/theme-assets/css');
define('DT_ASSETS_CSS_URL', DT_THEME_URL . '/theme-assets/css');

define('DT_ASSETS_JS_DIR', DT_THEME_DIR . '/theme-assets/js');
define('DT_ASSETS_JS_URL', DT_THEME_URL . '/theme-assets/js');

define('DT_ASSETS_IMAGES_DIR', DT_THEME_DIR . '/theme-assets/images');
define('DT_ASSETS_IMAGES_URL', DT_THEME_URL . '/theme-assets/images');

/* * *******************************************
  Load Custom Theme Functions
 * ****************************************** */
require_once DT_FC_DIR . '/dt_functions.php';

/* * *******************************************
  @return string Google fonts URL for the theme.
 * ****************************************** */
if (!function_exists('faded_fonts_url')) :

    function faded_fonts_url()
    {
        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Merriweather font: on or off', 'faded'))
        {
            $fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
        }
        
        if ('off' !== _x('on', 'Roboto font: on or off', 'faded'))
        {
            $fonts[] = 'Roboto:300,400,700,400italic';
        }
        
        if ('off' !== _x('on', 'PT+Sans font: on or off', 'faded'))
        {
            $fonts[] = 'PT+Sans:400,700,400italic,700italic';
        }
        
        if ('off' !== _x('on', 'Lato font: on or off', 'faded'))
        {
            $fonts[] = 'Lato:700';
        }

        /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Montserrat font: on or off', 'faded'))
        {
            $fonts[] = 'Montserrat:400,600,700';
        }

        /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Inconsolata font: on or off', 'faded'))
        {
            $fonts[] = 'Inconsolata:400';
        }

        if ($fonts)
        {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
                    ), 'https://fonts.googleapis.com/css');
        }

        return $fonts_url;
    }

endif;

/* * *******************************************
  Faded Load Styles
 * ****************************************** */

function faded_enqueue_styles()
{
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('faded-fonts', faded_fonts_url(), array(), null);
    // Add Genericons, used in the main stylesheet.
    wp_enqueue_style('genericons', DT_ASSETS_CSS_URL . '/genericons/genericons.css', array(), '3.4.1');
    // Theme stylesheet.
    wp_enqueue_style('faded-style', DT_STYLESHEET_URL);
    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style('faded-ie', DT_ASSETS_CSS_URL . '/ie.css', array('faded-style'), '20160816');
    wp_style_add_data('faded-ie', 'conditional', 'lt IE 10');
    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style('faded-ie8', DT_ASSETS_CSS_URL . '/ie8.css', array('faded-style'), '20160816');
    wp_style_add_data('faded-ie8', 'conditional', 'lt IE 9');
    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style('faded-ie7', DT_ASSETS_CSS_URL . '/ie7.css', array('faded-style'), '20160816');
    wp_style_add_data('faded-ie7', 'conditional', 'lt IE 8');
    //Load this theme Styles
    wp_enqueue_style('faded-bootstrap', DT_ASSETS_CSS_URL . '/bootstrap.min.css');
    wp_enqueue_style('custom_icon', DT_ASSETS_CSS_URL . '/custom_icon.css');
    wp_enqueue_style('magnific-popup', DT_ASSETS_CSS_URL . '/magnific-popup.css');
    wp_enqueue_style('owl.carousel', DT_ASSETS_CSS_URL . '/owl.carousel.css');
    wp_enqueue_style('preset.css', DT_ASSETS_CSS_URL . '/preset.css');
    wp_enqueue_style('scroll-animation', DT_ASSETS_CSS_URL . '/scroll-animation.css');
    wp_enqueue_style('unittest', DT_ASSETS_CSS_URL . '/unittest.css');
    wp_enqueue_style('faded_gutenburg', DT_ASSETS_CSS_URL . '/faded_gutenburg.css');
    wp_enqueue_style('theme-style', DT_ASSETS_CSS_URL . '/theme-style.css');
    wp_enqueue_style('custom-style', DT_ASSETS_CSS_URL . '/custom.css');
}

add_action('wp_enqueue_scripts', 'faded_enqueue_styles');


/* * *******************************************
  Faded Load Scripts
 * ****************************************** */

function faded_enqueue_scripts()
{
    // Load default for wordpress
    wp_enqueue_script('faded-html5', DT_ASSETS_JS_URL . '/html5.js', array(), '3.7.3');
    wp_script_add_data('faded-html5', 'conditional', 'lt IE 9');

    wp_enqueue_script('faded-skip-link-focus-fix', DT_ASSETS_JS_URL . '/skip-link-focus-fix.js', array(), '20160816', true);

    if (is_singular() && comments_open() && get_option('thread_comments'))
    {
        wp_enqueue_script('comment-reply');
    }

    if (is_singular() && wp_attachment_is_image())
    {
        wp_enqueue_script('faded-keyboard-image-navigation', DT_ASSETS_JS_URL . '/keyboard-image-navigation.js', array('jquery'), '20160816');
    }

    wp_enqueue_script('faded-script', DT_ASSETS_JS_URL . '/functions.js', array('jquery'), '20160816', true);

    wp_localize_script('faded-script', 'screenReaderText', array(
        'expand' => __('expand child menu', 'faded'),
        'collapse' => __('collapse child menu', 'faded'),
    ));
    //Load This theme Scripts    
    wp_enqueue_script('faded_bootstrap', DT_ASSETS_JS_URL . '/bootstrap.min.js', array('faded-script'), '', TRUE);
    wp_enqueue_script('jquery.waypoints', DT_ASSETS_JS_URL . '/jquery.waypoints.min.js', array('faded_bootstrap'), '', TRUE);
    wp_enqueue_script('jquery.magnific-popup', DT_ASSETS_JS_URL . '/jquery.magnific-popup.min.js', array('jquery.waypoints'), '', TRUE);
    wp_enqueue_script('owl.carousel', DT_ASSETS_JS_URL . '/owl.carousel.min.js', array('jquery.magnific-popup'), '', TRUE);
    wp_enqueue_script('faded_plugins', DT_ASSETS_JS_URL . '/plugins.js', array('owl.carousel'), '', TRUE);
    wp_enqueue_script('faded_gmap', DT_ASSETS_JS_URL . '/gmap.js', array('faded_plugins'), '', TRUE);
    wp_enqueue_script('ytp-min', DT_ASSETS_JS_URL . '/ytp-min.js', array('faded_plugins'), '', TRUE);
    wp_enqueue_script('custom-animations', DT_ASSETS_JS_URL . '/custom-animations.js', array('ytp-min'), '', TRUE);
    wp_enqueue_script('jquery.mixitup', DT_ASSETS_JS_URL . '/jquery.mixitup.js', array('custom-animations'), '', TRUE);
    wp_enqueue_script('faded_theme', DT_ASSETS_JS_URL . '/theme.js', array('jquery.mixitup'), '', TRUE);
}

add_action('wp_enqueue_scripts', 'faded_enqueue_scripts');
/* * ******************
 * Theme icon setup
 * ****************** */
require_once DT_ASSETS_DIR . '/multi-task/theme_icon_set.php';

/* * ******************
 * Admin Load
 * ****************** */

function load_custom_wp_admin_style()
{
    //css
    wp_enqueue_style('custom_icon', DT_ASSETS_CSS_URL . '/custom_icon.css');
    //script
    if (function_exists('wp_enqueue_media'))
    {
        wp_enqueue_media();
    }
    else
    {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }
    wp_enqueue_script('admin_theme_js', DT_ASSETS_JS_URL . '/admin_theme_js.js');
}

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/* * ******************
 * Login Admin Css
 * ****************** */
add_action('login_head', function()
{
    echo '<style type="text/css">
    body.login{
    background:#fff!important;
    }
    #login {
        box-shadow: 0px 4px 15px #aeaeae;
        margin: 15% auto 0;
        padding:0px;
        width: 320px;
    }
    #login h1 a{
        background-image: url(' . DT_ASSETS_IMAGES_URL . '/login-logo.png);
        background-position: center center;
        background-size: 180px auto;
        margin: 0 auto;
        width: 100%;
    }
    #login h1{
        background:#f1fafd;
    }
    #login form{
        margin-top:0px;
        border-bottom: 1px solid #f1f1f1;
        border-top: 1px solid #f1f1f1f1;
        box-shadow:none;
    }    
    #login p#nav {
        background: #f1fafd none repeat scroll 0 0;
        float: left;
        margin: 0;
        padding: 20px 26px;
        width: 38%;
    }
    #login p#backtoblog {
        background: #f1fafd none repeat scroll 0 0;
        margin: 0;
        padding: 20px 0 !important;
    }
    </style>';
});

/**
 * * Multipage menu walker
 * */


class faded_Navwalker extends Walker_Nav_Menu  {

    public function start_lvl( &$output, $depth = 0, $args = []) {

       $indent = str_repeat("\t", $depth);
       $output .= "\n$indent<ul class=\"dropdown-menu sub-menu submenu\">\n";
    }

    public function start_el(&$output, $page, $depth = 0, $args = [], $current_page = 0) {
         $indent = ($depth) ? str_repeat("\t", $depth) : '';
         $mega_menu = '';
         $mega_menu_width = '';
         if(class_exists('ACF')) {
            $mega_menu = get_field( 'mega_menu_select', $page->ID, true);
            $mega_menu_width = get_field( 'mega_menu_width', $page->ID, true);
         }
         
         $li_attributes = '';
         $class_names = $value = '';
         $classes =  empty($page->classes) ? array() : (array) $page->classes ;    
         $classes[] = 'nav-item' ;
         $classes[] = ($mega_menu != '') ? 'has-mega-menu': '' ;
         $classes[] = ($mega_menu != '' && $mega_menu_width != '') ? $mega_menu_width: '' ;
         $classes[]  =   ($args->walker->has_children) ? 'dropdown sub-menu submenu' : '';
         $classes[]  =   ($page->current || $page->current_item_ancestor) ? 'active current-menu-item current_item_ancestor' : '';
         $classes[]  =   'menu-item-'.$page->ID;
         if($depth && $args->walker->has_children) {
            $classes[] = 'dropdown dropdown-submenu';
         }
         $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter($classes), $page, $args));
         $class_names = 'class="'.esc_attr($class_names).'"';
 
         $id = apply_filters( 'nav_menu_item_id', 'menu-item'.$page->ID, $page, $args );
 
         $id = strlen($id) ? 'id="'.esc_attr($id).'"' : '';
 
         $output .= $indent. '<li '.$class_names. $id . $value. $li_attributes.'>';
 
        $attributes = ! empty( $page->attr_title ) ? ' title="' . esc_attr($page->attr_title) . '"' : '';
        $attributes .= ! empty( $page->target ) ? ' target="' . esc_attr($page->target) . '"' : '';
        $attributes .= ! empty( $page->xfn ) ? ' rel="' . esc_attr($page->xfn) . '"' : '';
        $attributes .= ! empty( $page->url ) ? ' href="' . esc_attr($page->url) . '"' : '';
        $attributes .= ( $args->walker->has_children ) ? 'data-toggle="dropdown"' : '';
        $href_class[] = 'nav-link';
        $href_class[] = ( $args->walker->has_children ) ? 'dropdown-toggle' : '';
       
        $href_class_attr = join(' ', $href_class);
        $attributes .= 'class="'.esc_attr( $href_class_attr ).'"';
        $has_child_icon = '';
 
        if($depth == 0 && $args->walker->has_children) {
 
            $has_child_icon = '<i class="fa-solid fa-angle-down  mobile_dropdown_icon"></i>';
 
        }elseif ($depth > 0 && $args->walker->has_children) {
 
            $has_child_icon = '<i class="fa-solid fa-angle-down mobile_dropdown_icon"></i>';
 
        }
         
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $page->title, $page->ID ) . $args->link_after;
        $item_output .='</a>'.$has_child_icon;
        $item_output .= $args->after;
 
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $page, $depth, $args );
    }

}