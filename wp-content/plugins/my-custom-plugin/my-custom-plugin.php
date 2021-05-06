<?php
/**
 * Plugin Name: My Custom Plugin
 * Plugin URI: http://www.wp.in/my-custom-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.wp.in
 */

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for Using My Plugin!</p>';
}