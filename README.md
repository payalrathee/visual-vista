# Visual Vista

Visual Vista is a WordPress plugin designed to display filtered images from the media gallery based on a prefix in different templates such as grid and slider.

### Grid 
[vsvt_image_gallery prefix="fashion" template="grid"]

![image](https://github.com/payalrathee/visual-vista/assets/68552642/108b62c8-53e1-4632-85e0-79849b191906)

### Slider
[vsvt_image_gallery prefix="fashion_template" template="slider"]

![image](https://github.com/payalrathee/visual-vista/assets/68552642/416378f6-0c64-4385-95fc-249e60350a65)


## Features

- Displays filtered images with a given prefix from the media gallery.
- Supports two templates: grid and slider.
- Shortcode integration for easy usage.
- Customizable prefix to filter images.
- Option to display all images if the prefix is empty.

## Shortcode

Use the following shortcode to display the image gallery:
[vsvt_image_gallery]

## Shortcode Parameters

- **prefix**: Prefix used to filter the images from the media gallery. If empty, all images will be selected.
- **template**: Template used for displaying the gallery. Available templates: grid, slider.

## Installation

1. Download the Visual Vista plugin from the [WordPress Plugin Directory](https://wordpress.org/plugins/visual-vista/).
2. Upload the plugin files to the `/wp-content/plugins/visual-vista` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress.
4. Use the `[vsvt_image_gallery]` shortcode in any post or page to display the image gallery.

## Requirements

- WordPress 6
- PHP 8.0.28
- MySQL
- External Libraries:
  - Slick Slider: A responsive carousel jQuery plugin.

## Author

Visual Vista is developed by [Payal Rathee](https://github.com/payalrathee).
