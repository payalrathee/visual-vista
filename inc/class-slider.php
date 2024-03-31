<?php

/*
*Shortcodes to dipslay image gallery
*/

// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
    exit;
}

/* 
# Class Slider
# Provides gallery content in slider format
*/
class Slider {
    public static function gallery($images) {
        $content = "";

        $content = '<div class="selected-image-slider">';
        $content .= '<div class="vsvt_slider_wrapper vsvt_image_gallery">';

        foreach ($images as $image_id) {
            $image_url = wp_get_attachment_url($image_id);
            if ($image_url) {
                $content .= '<div class="vsvt_image_wrapper">';
                $content .= '<img src="' . esc_url($image_url) . '" />';
                $content .= '</div>';
            }
        }

        $content .= '</div>'; 
        $content .= '<div class="swiper-pagination"></div>';
        $content .= '</div>'; 

        return $content;
    }
}