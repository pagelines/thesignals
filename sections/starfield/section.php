<?php
/*
	Section: Starfield
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: A simple box with animated stars
	Class Name: PageLinesStarfield
	Filter: full-width
	Loading: active
*/

class PageLinesStarfield extends PageLinesSection {


	function section_styles(){

		wp_enqueue_script( 'starfield', $this->base_url.'/starfield.js', PL_CORE_VERSION, true );
		wp_enqueue_script( 'pl-starfield', $this->base_url.'/pl.starfield.js', PL_CORE_VERSION, true );

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

		$image = $this->opt('starfield_image');

		if( $image )
			$img = ($image) ? sprintf('<img class="starfield-image" data-sync="starfield_image" src="%s" />', $image) : '';
		else 
			$img = '';


		$align = $this->opt('starfield_align');
		
		if($align == 'right')
			$align_class = 'textright alignright';
		elseif($align == 'left')
			$align_class = 'textleft alignleft';
		elseif($align == 'none')
                        $align_class = '';
		else
			$align_class = 'center';


		$set_height = ( $this->opt('starfield_height') )  ? $this->opt('starfield_height') : 300;
		$height = sprintf('height: %spx', $set_height);
		
		$classes[] = ($this->opt('starfield_animation')) ? $this->opt('starfield_animation') : 'pla-fade';


		printf(
			'<div class="fullScreen %s starfield-container" id="fullScreen" style="%s">
	    		<canvas id="canvas2d" class="starfield-canvas %s"></canvas>
	    		%s
			</div>',
			join(' ', $classes),
			$height, 
			$align_class,
			$img			
		);


	}
}


