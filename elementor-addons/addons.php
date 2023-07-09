<?php

function ashraf_tt_one_child_widgets( $widgets_manager){
    
	require_once( __DIR__ . '/widgets/hello-world.php' );

	$widgets_manager->register( new \Ashraf_Elementor_Addon_Hello_World() );
}
add_action('elementor/widgets/register', 'ashraf_tt_one_child_widgets');