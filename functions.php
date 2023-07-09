<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_styles' );
function enqueue_parent_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Check if Elementor is installed and active
if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    // Elementor is active
    // Your code or actions when Elementor is installed and activated
    // Example: enqueue custom styles or scripts
    /*
    add_action('wp_enqueue_scripts', 'my_custom_styles');
    function my_custom_styles() {
        wp_enqueue_style('my-custom-styles', get_stylesheet_directory_uri() . '/custom-styles.css');
    }
    */

    // Add Custom Addons
 
    include_once('elementor-addons/addons.php');

    // Add admin notice
    function my_custom_admin_notice(){

        ?>
        <div class="notice notice-info">
            <p style="background-color:yellow;"><?php echo 'Happy journy of elementor'; ?></p>
        </div>

        <?php
    }
    add_action('admin_notices', 'my_custom_admin_notice');

}


 else {
    // Elementor is not active
    // Your code or actions when Elementor is not installed or activated
    // Example: fallback functionality or alternate design

       // Add admin notice
       function my_custom_admin_notice(){
        ?>
        <div class="notice notice-worning">
            <p style="background-color:red;"><?php echo 'This theme requres elementor to be installd'; ?></p>
        </div>
        <?php

    }
    add_action('admin_notices', 'my_custom_admin_notice');
}
