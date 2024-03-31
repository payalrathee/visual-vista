<?php

/*
*Shortcodes to dipslay image gallery
*/

// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
    exit;
}

/* 
# Class Grid
# Provides gallery content in grid format
*/
class Grid {
    public static function gallery($images) {
        $content = "";

        $content = '<div class="vsvt_grid_wrapper vsvt_image_gallery">';

        foreach($images as $image_id) {
            
            $image_url = wp_get_attachment_url( $image_id );
            $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

            $content  .='
                    <div class="vsvt_image_wrapper">
                        <img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $image_alt ) . '" />
                    </div>    
                ';

        }

        $content .= '</div>';
        return $content;
    }
}