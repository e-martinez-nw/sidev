<?php
/**
 * Plugin Name: Custom Widget
 * Plugin URI: http://nuevaweb.com.mx/widget-custom-video
 * Description: A widget that make custom links with icon, video, url and text.
 * Author: Carlos González
 * Author URI: http://nuevaweb.com.mx/
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'widget_custom_video' );

/**
 * Register our widget.
 * 'Custom_Video' is the widget class used below.
 *
 * @since 0.1
 */
function widget_custom_video() {
	register_widget( 'Custom_Video' );
}

/**
 * Custom Link class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class Custom_Video extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function Custom_Video() {
		/* Widget settings. */
		$widget_ops = array( 
			'classname' => 'CustomVideo', 
			'description' => __('Agrega un link con url, video, ícono fontawesome y/o texto.', 'CustomVideo') 
			);

		/* Widget control settings. */
		$control_ops = array( 
			'width' => 300,
		 	'height' => 350, 
		 	'id_base' => 'custom-video' 
		 	);

		/* Create the widget. */
		$this->WP_Widget( 'custom-video', __('Custom Video', 'CustomVideo'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('title', $instance['title'] );
		$link_title = $instance['link_title'];
		$url = $instance['url'];
		$url = $instance['url'];
		$icon = $instance['icon'];
		$video_url = $instance['video_url'];
		$custom_class = $instance['custom_class'];
	?>

	<div class="widget-custom-video <?php echo $custom_class ? $custom_class : ''; ?>">
		<?php echo $url ? '<a href="'.$url.'">':''; ?>


			<?php if($video_url): ?>
				<div class="widget-custom-video">
					<video autoplay loop>
						<source src="<?php echo $video_url; ?>" type="video/mp4">
					</video>
				</div><!-- end .widget-custom-video-video -->
			<?php endif; ?>

			<?php if($link_title): ?>
				<div class="widget-custom-video-title">
					<p>
						<?php echo $link_title; ?> 
						
						<?php if($icon): ?>
								<i class="<?php echo $icon; ?>"></i>
						<?php endif; ?>
					</p>
				</div><!-- end .widget-custom-video-title -->
			<?php endif; ?>

		<?php echo $url ? '</a>':''; ?>			
	</div>

	<?php	
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['link_title'] = strip_tags( $new_instance['link_title'] );
		$instance['url'] = strip_tags( $new_instance['url'] );
		$instance['icon'] = strip_tags( $new_instance['icon'] );
		$instance['video_url'] = strip_tags( $new_instance['video_url'] );
		$instance['custom_class'] = strip_tags( $new_instance['custom_class'] );

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
		 	'title' => __('My CustomVideo', 'CustomVideo'),
		 	'link_title' => __('', 'CustomVideo'),
			'url' => __('', 'CustomVideo'),
			'icon' => __('', 'CustomVideo'),
			'video_url' => __('', 'CustomVideo'),
			'custom_class' => __('', 'CustomVideo')

		 	);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<style type="text/css">
			.customVideo span{ font-size: .8em; }
		</style>

		<div class="customVideo">
			<!-- Widget Title: Text Input -->
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Widget Title:', 'hybrid'); ?></label>
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
				<span>This is the name of the widget. It wont be displayed on the website.</span>
			</p>

			<!-- Your Title: Text Input -->
			<p>
				<label for="<?php echo $this->get_field_id( 'link_title' ); ?>"><?php _e('Title:', 'CustomVideo'); ?></label>
				<input id="<?php echo $this->get_field_id( 'link_title' ); ?>" name="<?php echo $this->get_field_name( 'link_title' ); ?>" value="<?php echo $instance['link_title']; ?>" style="width:100%;" />
			</p>

			<!-- Your URL: Text Input -->
			<p>
				<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e('URL:', 'CustomVideo'); ?></label>
				<input id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" value="<?php echo $instance['url']; ?>" style="width:100%;" placeholder="http://www."/>
			</p>

			<!-- Your Icon: Text Input -->
			<p>
				<label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e('Icon:', 'CustomVideo'); ?></label>
				<input id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" value="<?php echo $instance['icon']; ?>" style="width:100%;" placeholder="fa fa-facebook"/>
				<span>Consigue el nombre del ícono de <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>. <strong>Recuerda</strong> agrega fa antes de tu fa-icon, p,ej: <strong>fa fa-facebook</strong></span>
			</p>

			<!-- Your Custom Css Class: Text Input -->
			<p>
				<label for="<?php echo $this->get_field_id( 'custom_class' ); ?>"><?php _e('Css Class:', 'CustomVideo'); ?></label>
				<input id="<?php echo $this->get_field_id( 'custom_class' ); ?>" name="<?php echo $this->get_field_name( 'custom_class' ); ?>" value="<?php echo $instance['custom_class']; ?>" style="width:100%;" placeholder="primary-btn small"/>
				<span>Agrega clases a tu link.</span>
			</p>

			<!-- Your video URL: Text Input -->
			<p>
				<label for="<?php echo $this->get_field_id( 'video_url' ); ?>"><?php _e('video URL:', 'CustomVideo'); ?></label>
				<input id="<?php echo $this->get_field_id( 'video_url' ); ?>" name="<?php echo $this->get_field_name( 'video_url' ); ?>" value="<?php echo $instance['video_url']; ?>" style="width:100%;" placeholder="http://www."/>
			</p>
		</div><!-- end .customVideo-->

	<?php
	}
}

?>