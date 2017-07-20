<?php
/*
Plugin Name: Dashboard for Beginner
Plugin URI: http://wordpress.org/plugins/dashboard-for-beginer/
Description: For beginners easy to post articles simple dashboard
Version: 0.1
Author: aiooxx
Author URI: http://25egg.com
License: GPLv2
*/


//Create the function to output the contents of our Dashboard Widget.
function custom_dashboard_widget_function() {
        echo "<a href='post-new.php'>記事を投稿する</a>";
} 
function custom_add_dashboard_widgets() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'こちらから記事を投稿ください', 'custom_dashboard_widget_function');	
} 

//This function is hooked into the 'wp_dashboard_setup' action below.
add_action('wp_dashboard_setup', 'custom_add_dashboard_widgets' );


//Removing Dashboard Widgets
function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );

//Removing Welcome Panel
remove_action( 'welcome_panel', 'wp_welcome_panel' );
