<?php
/**
 * 	Small Business Options Page
 * 	@ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = 'smallbusiness';
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'smallbusiness'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */


function optionsframework_options() {
	
	// add_filter( 'wp_default_editor', create_function('', 'return "html";') ); 
	
	$options[] = array(
		'name' => 'Small Business Options',
		'type' => 'heading');
		
	$options[] = array(
		'desc' => '<div class="infohead"><span class="donation">If you like this FREEE Theme You can consider for a small Donation to us. Your Donation will be spent for the Disadvantaged Children and Students. You can visit our <a href="http://d5creation.com/donate/" target="_blank"><strong>DONATION PAGE</strong></a> and Take your decision.</span><br /><br /><span class="donation">Need Logo Inserter, More Slides, More Control, More Features and Options? Try <a href="http://d5creation.com/theme/smallbusiness/" target="_blank"><strong>Small Business Pro or Extend Edition</strong></a> for Many Exciting Features with Dedicated Support from D5 Creation team. There are Promotional Offers. You can avail those promotions from <a href="http://d5creation.com/" target="_blank">D5 Creation Site</a>.</span><br /><br /><span class="donation"><a href="http://demo.d5creation.com/themes/?theme=Small%20Business" target="_blank">Live Demo</a> of Small Business with the Pro version.</span><br /><br /><span class="donation"><a href="http://d5creation.com/forum/member-support-group2/general-support-forum6/how-to-show-the-small-business-slide-show-thread72" target="_blank">Tutorial</a> For Featured Image and Sliding.</span></div>',
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Front Page Heading',
		'desc' => 'Input your heading text here. Plese limit it within 100 Letters.',
		'id' => 'heading_text',
		'std' => 'Go with Small Business Pro for exciting Post Options, Theme Options and Extra Functionalities.',
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
		'std' => 'Small Business Theme',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Featured Description',
		'desc' => 'Input the description of Featured Areas. Please limit the words within 30 so that the layout should be clean and attractive. You can also input any HTML, Videos or iframe here. But Please keep in mind about the limitation of Width of the box.',
		'id' => 'featured-description' . $fbsinumber,
		'std' => 'The Customizable Background and other options of Small Business will give the WordPress Driven Site an attractive look.  Small Business Pro will give your Extra Freedom and Functionality which you must love.',
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