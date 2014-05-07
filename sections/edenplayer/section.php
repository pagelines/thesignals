<?php
/*
	Section: ToneEden Player
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description:
	Class Name: PLToneEden
	Filter: social
	Loading: active
*/

class PLToneEden extends PageLinesSection {


	function section_styles(){

		wp_enqueue_script( 'starfield', $this->base_url.'/starfield.js', array('jquery'), PL_CORE_VERSION, true );
		wp_enqueue_script( 'pl-starfield', $this->base_url.'/pl.starfield.js', array('jquery'),  PL_CORE_VERSION, true );

	}


	function section_opts(){
		$opts = array(
	
			array( 
				'type'	=> 'multi',
			
				'opts'	=> array(
					array(
						'type' 			=> 'image_upload',
						'key'			=> 'starfield_image',
						'label' 		=> __( 'Starfield Image', 'pagelines' ),
					),
					array(
						'type' 			=> 'select',
						'key'			=> 'starfield_align',
						'label' 		=> __( 'Image Alignment', 'pagelines' ),
						'opts'			=> array(
							'center'		=> array('name' => __( 'Align Center (Default)', 'pagelines' )),
							'left'			=> array('name' => __( 'Align Left', 'pagelines' )),
							'right'			=> array('name' => __( 'Align Right', 'pagelines' )),
							'none'          => array('name' => __( 'None', 'pagelines' )),
						)
					),	
					array(
						'type' 			=> 'text',
						'key'			=> 'starfield_height',
						'default'		=> '700',
						'label' 		=> __( 'Starfield Min Height (px)', 'pagelines' ),
						'help'			=> __( 'Required for "cover" mode. Otherwise the starfield will be drawn at the height of the media.', 'pagelines' )
					),
					array(
						'type' 			=> 'select_animation',
						'key'			=> 'starfield_animation',
						'label' 		=> __( 'Starfield Animation', 'pagelines' ),
						'help' 			=> __( 'Optionally animate the appearance of this section on view.', 'pagelines' ),
					),
				)
			),
		);

		return $opts;

	}

	function section_template() {

		?>
		<div id="edenPlayer">
			
		</div>
	
		<?php 
	

	}
	function section_foot() {

		?>
		<script>
		    (function() {
		        var script = document.createElement("script");

		        script.type = "text/javascript";
		        script.async = true;
		        script.src = "//sd.toneden.io/production/toneden.loader.js"

		        var entry = document.getElementsByTagName("script")[0];
		        entry.parentNode.insertBefore(script, entry);
		    }());

		    ToneDenReady = window.ToneDenReady || [];
		    ToneDenReady.push(function() {
		        // Modify the dom and urls parameters to position
		        // your player and select tracks/sets/artists to play.
		        ToneDen.player.create({
		            dom: "#edenPlayer",
					skin: "dark",
					eq: "waves",
		            urls: [
		                "https://soundcloud.com/itsthesignals"
		            ]
		        });
		    });
		</script>
		
	
		<?php 
	

	}
}


