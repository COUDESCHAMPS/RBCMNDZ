<?php
function myprefix_theme_enqueue_styles() {
    wp_enqueue_style( 'RBCMNDZ', get_template_directory_uri() . 'RBCMNDZ-child/style.css' );
}
add_action( 'wp_enqueue_scripts', 'myprefix_theme_enqueue_styles' ); ?>

<?php 


// Remove dashboard widgets
function remove_dashboard_meta() {
	if ( ! current_user_can( 'manage_options' ) ) {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 


?>