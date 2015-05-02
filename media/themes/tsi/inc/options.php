<?php

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = 'tsi';
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */


function optionsframework_options() {
	
	// add_filter( 'wp_default_editor', create_function('', 'return "html";') ); 
	
	$options[] = array(
		'name' => 'Options',
		'type' => 'heading');
		
	$options[] = array(
		'desc' => '<div class="infohead">Based on http://d5creation.com/theme/smallbusiness/ Free Theme 2.0</div>',
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Front Page Heading',
		'desc' => 'Input your heading text here. Plese limit it within 100 Letters.',
		'id' => 'heading_text',
		'std' => 'TODO: exciting Post Options, Theme Options and Extra Functionalities.',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Quote Text',
		'desc' => 'Input your Front Page Bottom Quotation here. Plese limit it within 150 Letters.',
		'id' => 'bottom-quotation',
		'std' => 'All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => 'Show the Footer Sidebar.',
		'desc' => 'Uncheck this if you do not want to show the footer sidebar (Widgets) automatically.',
		'id' => 'fsidebar',
		'std' => '1',
		'type' => 'checkbox');

	$fbsin=array("1","2","3");
	foreach ($fbsin as $fbsinumber) {
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">' . 'Featured Box: 0' . $fbsinumber . '</span>',
		'type' => 'info');
	
	$options[] = array(
		'name' => 'Featured Title',
		'desc' => 'Input your Featured Title here. Plese limit it within 30 Letters. If you do not want to show anything here leave the box blank.',
		'id' => 'featured-title' . $fbsinumber,
		'std' => 'Theme',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Featured Description',
		'desc' => 'Input the description of Featured Areas. Please limit the words within 30 so that the layout should be clean and attractive. You can also input any HTML, Videos or iframe here. But Please keep in mind about the limitation of Width of the box.',
		'id' => 'featured-description' . $fbsinumber,
		'std' => 'The Customizable Background and other options will give the WordPress Driven Site an attractive look.  TODO: give your Extra Freedom and Functionality which you must love.',
		'type' => 'textarea', );

	$options[] = array(
		'name' => 'Featured Link',
		'desc' => 'Input your Featured Items URL here.',
		'id' => 'featured-link' . $fbsinumber,
		'std' => '#',
		'type' => 'text');
		
	}
	
	return $options;
}


?>