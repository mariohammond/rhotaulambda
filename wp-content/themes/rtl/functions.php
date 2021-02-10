<?php // RTL Theme Functions

	/* Set image size presets */
	add_action('after_setup_theme', 'thumbnail_setup');
	function thumbnail_setup() {
		add_theme_support('post-thumbnails');
		/*add_image_size('780x450', 780, 450, true);
		add_image_size('670x420', 670, 420, true);
		add_image_size('430x260', 430, 260, true);
		add_image_size('360x225', 360, 225, true);
		add_image_size('230x145', 230, 145, true);
		add_image_size('64x64', 64, 64, true);
		add_image_size('1x1', 1, 1, true);*/
	}
?>
