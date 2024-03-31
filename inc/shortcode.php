<?php

/*
*Shortcodes to dipslay image gallery
*/

// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
    exit;
}

// Show all images from the gallery
add_shortcode('vsvt_image_gallery', 'vsvt_image_gallery_callback');
function vsvt_image_gallery_callback($atts) {
    if(!is_admin()) {

        // Get shortcode attributes
        $prefix = '';
        if(isset($atts['prefix'])){
            $prefix = $atts['prefix'];
        }

        $template = 'grid';
        if(isset($atts['template'])){
            $template = $atts['template'];
        }

        // Enqueue styles and scripts and other files based on template
        global $vsvt_plugin_path;
        wp_enqueue_style('vsvt-style');

        if($template == 'grid') {

            wp_enqueue_style('vsvt-grid-style');
            include($vsvt_plugin_path . 'inc/class-grid.php');

        } else if($template == 'slider') {

            wp_enqueue_style('vsvt-slider-style');
            wp_enqueue_script('vsvt-slider-script');
            wp_enqueue_style('slick-slider-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
            wp_enqueue_style('slick-slider-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
            wp_enqueue_script('slick-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
            include($vsvt_plugin_path . 'inc/class-slider.php');

        }

        $media_gallery = new MediaGallery($prefix, $template);

        $content = $media_gallery->galleryContent();
        return $content;
    }
}
