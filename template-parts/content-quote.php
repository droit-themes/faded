<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package faded
 */

$allowed_html = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
    'br' => array(),
    'em' => array(),
    'strong' => array(),
    'iframe' => array(
        'src' => array(),
    )
);
?>

<div <?php post_class( 'blog_quote' ); ?> data-aos="fade-up" data-aos-delay="100">
    <blockquote><?php faded_get_html_tag( 'blockquote', get_the_content()); ?></blockquote>
</div>