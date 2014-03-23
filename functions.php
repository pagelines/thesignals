<?php
/*
 *	Tell DMS we are in a subfolder and fire up the flux capacitors!
**/
if( ! defined( 'DMS_CORE' ) )
	define( 'DMS_CORE', true );


require_once( 'dms/functions.php' );

add_action( 'wp_enqueue_scripts', 'thesignals_register_js' );
function thesignals_register_js(){
	wp_enqueue_script( 'windows', PL_THEME_URL.'/js/windows.js', array('jquery'), PL_CORE_VERSION, true );
	wp_enqueue_script( 'thesignals', PL_THEME_URL.'/js/thesignals.js', array('jquery'),  PL_CORE_VERSION, true );	
}



