<?php
/*
 *	Tell DMS we are in a subfolder and fire up the flux capacitors!
**/
if( ! defined( 'DMS_CORE' ) )
	define( 'DMS_CORE', true );


require_once( 'dms/functions.php' );

add_action( 'wp_enqueue_scripts', 'thesignals_register_js' );
function thesignals_register_js(){
	wp_enqueue_script( 'thesignals', PL_THEME_URL.'/js/thesignals.js', array('jquery'),  PL_CORE_VERSION, true );	
}

//add_action( 'wp_head', 'thesignals_stratus_bar' );
function thesignals_stratus_bar(){
	?>
	<script type="text/javascript" src="http://stratus.sc/stratus.js"></script>
	<script type="text/javascript">
	  jQuery(document).ready(function(){
	    jQuery.stratus({
	      	links: 'http://soundcloud.com/foofighters/sets/wasting-light'
			, align: 'top'
	    });
	  });
	</script>
	
	<?php 
}
