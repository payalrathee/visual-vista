<?php

/*
* Class Media Gallery 
* Encapsulates functions and fields related to gallery
*/

// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
    exit;
}

class MediaGallery {

    /* 
    # Prefix used to filter the images from media gallery
    # In case prefix is empty, all the images from the media gallery are selected to get displayed
    */
    private $prefix;

    /* 
    # Template used for displaying the gallery
    # Available templates: grid, slider
    */
    private $template;

    /* 
    # Images from media gallery filtered using the prefix
    */
    private $gallery_images;

    public function __construct($prefix, $template) {
        $this->prefix = $prefix;
        $this->template = $template;

        // Get all images
        $args = array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'image',
            'post_status'    => 'inherit',
            'posts_per_page' => -1,
            'fields'         => 'ids'
        );

        $images = get_posts($args);

        $filetred_images = [];
        foreach($images as $img_id ) {
            $image_title = get_the_title($img_id);
            if (strpos($image_title, $this->prefix) === 0) {
                $filetred_images[] = $img_id;
            }
        }

        $this->gallery_images = $filetred_images;
    }

    /* 
    # This function returns the gallery containing the filtered images to be displayed based on the selected template
    */
    public function galleryContent() {
        $content = "";

        if($this->template == 'grid') {

            $content = Grid::gallery($this->gallery_images);

        } else if($this->template == 'slider') {

            $content = Slider::gallery($this->gallery_images);

        }

        return $content;
    }
}