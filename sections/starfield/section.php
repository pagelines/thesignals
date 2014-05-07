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
		<div class="starfield-container pl-window-height">
			<div class="starfield ">	</div>
			<div class="pl-area-wrap starfield-content">
				<div class="pl-animation-group">
					<div class="sigs-image pl-animation pla-from-top"><img src="<?php echo $this->base_url.'/thesignals.png'; ?>"></div>
					<div class="sigs-text pl-animation pla-from-top">Be Excellent To Each Other</div>
				</div>
				
				<div class="sigs-icons pl-animation-group">
					<a target="_blank" class="sigs-icon pl-animation pla-from-top subtle" href="http://www.facebook.com/itsthesignals"><i class="icon icon-facebook-square"></i></a>
					
					<a target="_blank" class="sigs-icon pl-animation pla-from-top subtle" href="http://www.youtube.com/user/itsthesignals"><i class="icon icon-youtube-square"></i></a>
					<a target="_blank" class="sigs-icon pl-animation pla-from-top subtle" href="http://www.twitter.com/itsthesignals"><i class="icon icon-twitter-square"></i></a>
					<a target="_blank" class="sigs-icon pl-animation pla-from-top subtle" href="http://www.soundcloud.com/itsthesignals"><i class="icon icon-cloud"></i></a>
					
				</div>
			</div>
			<div class="more-info">
				<div class="follow-us">
				<?php
				echo do_shortcode( sprintf( '[like_button url="http://www.facebook.com/%s"]', 'itsthesignals' ));
				echo do_shortcode('[twitter_button type="follow"]');
				?>
				</div>
				<div class="scroll-for-more move-up-down"><span class="scroll-tag-icon"><i class="icon-caret-down icon"></i></span></div>
			</div>
			
		</div>
	
		<?php 
	

	}
}


