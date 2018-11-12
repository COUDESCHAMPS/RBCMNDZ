<?php
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
	

		// This theme uses wp_nav_menu() in one location.	
		register_nav_menus( array(
		'header_menu' => 'Header menu',
		'side_menu' => 'Side menu',
		'footer_menu' => 'Footer menu',
		) );



		function wpb_custom_new_menu() {
		register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
		}
		add_action( 'init', 'wpb_custom_new_menu' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );




		/**
		 * Enqueue scripts and styles.
		 */
		function RBCMNDZ_scripts() {
			

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'RBCMNDZ_scripts' );


		/** 
		2. Add a Custom Dashboard Logo
		Want to white label your WordPress admin area? Adding a custom dashboard logo is the first step in the process.

		First you’ll need to upload your custom logo to your theme’s images folder as custom-logo.png. Make sure your custom logo is 16×16 pixels in size.

		After that you can add this code to your theme’s functions file.
		  **/

		function wpb_custom_logo() {
		echo '
		<style type="text/css">
		#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
		background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/custom-logo.png) !important;
		background-position: 3px 3px;
		background-repeat: no-repeat;
		color:rgba(0, 0, 0, 0);
		}
		#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
		background-position: 0 0;
		}
		</style>
		';
		}
		//hook into the administrative header output
		add_action('wp_before_admin_bar_render', 'wpb_custom_logo');


		/** 

		3. Change the Footer in WordPress Admin Panel
		The footer in WordPress admin area shows the message ‘Thank you for creating with WordPress’. You can change it to anything you want by adding this code.

		  **/

		function remove_footer_admin () {
		echo '<p>Creado por <a href="http://www.hdcmedia.es" target="_blank">HDCmedia</a></p>';
		}
		add_filter('admin_footer_text', 'remove_footer_admin');

		/**

		4. Add Custom Dashboard Widgets in WordPress
		You probably have seen widgets that numerous plugins and themes add in the WordPress dashboard. As a theme developer, you can add one yourself by pasting the following code:
		
		**/

		add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
		function my_custom_dashboard_widgets() {
		global $wp_meta_boxes;
		 
		wp_add_dashboard_widget('custom_help_widget', 'REBECA, ESTE ES EL SERVICO DE SOPORTE DE TU CMS', 'custom_dashboard_help');
		}
		 
		function custom_dashboard_help() {
		echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/soporte.png"></img><p><h3>Bienvenida a tu dashboard Rebeca! ¿Necesitas ayuda? Contacta conmigo<a href="mailto:hectorjdelcampo@gmail.com"> Aquí</a></h3></p>';
		}


		/** 

	12. Adding Widget Ready Areas or Sidebar in WordPress Themes
This is one of the most used ones and many developers already know about this. But it deserves to be in this list for those who don’t know. Paste the following code in your functions.php file:

		**/

		// Register Sidebars
		function custom_sidebars() {
		 
		    $args = array(
		        'id'            => 'customizado_sidebar',
		        'name'          => __( 'Widget de HDCmedia', 'text_domain' ),
		        'description'   => __( 'A custom widget area', 'text_domain' ),
		        'before_title'  => '<h3 class="widget-title">',
		        'after_title'   => '</h3>',
		        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		        'after_widget'  => '</aside>',
		    );
		    register_sidebar( $args );


		    $args2 = array(
		        'id'            => 'customizado_sidebar_2',
		        'name'          => __( 'Widget de HDCmedia 2', 'text_domain' ),
		        'description'   => __( 'A custom widget area', 'text_domain' ),
		        'before_title'  => '<h3 class="widget-title">',
		        'after_title'   => '</h3>',
		        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		        'after_widget'  => '</aside>',
		    );
		    register_sidebar( $args2 );


		    	$args3 = array(
		        'id'            => 'customizado_sidebar_3',
		        'name'          => __( 'Widget de HDCmedia 3', 'text_domain' ),
		        'description'   => __( 'A custom widget area', 'text_domain' ),
		        'before_title'  => '<h3 class="widget-title">',
		        'after_title'   => '</h3>',
		        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		        'after_widget'  => '</aside>',
		    );
		    register_sidebar( $args3 );


		    		    	$args4 = array(
		        'id'            => 'customizado_sidebar_4',
		        'name'          => __( 'Widget de HDCmedia 4', 'text_domain' ),
		        'description'   => __( 'A custom widget area', 'text_domain' ),
		        'before_title'  => '<h3 class="widget-title">',
		        'after_title'   => '</h3>',
		        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		        'after_widget'  => '</aside>',
		    );
		    register_sidebar( $args4 );


		 
		}
		add_action( 'widgets_init', 'custom_sidebars' );



		remove_action('welcome_panel', 'wp_welcome_panel');

		remove_action('postbox-container-2', 'postbox-container-2');



		/*
		* Define a constant path to our single template folder
		*/
		define(SINGLE_PATH, TEMPLATEPATH . '/single');
		 
		/**
		* Filter the single_template with our custom function
		*/
		add_filter('single_template', 'my_single_template');
		 
		/**
		* Single template function which will choose our template
		*/
		function my_single_template($single) {
		global $wp_query, $post;
		 
		/**
		* Checks for single template by category
		* Check by category slug and ID
		*/
		foreach((array)get_the_category() as $cat) :
		 
		if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
		return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
		 
		elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
		return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
		 
		endforeach;
		}


		wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/animate.css',false,'1.1','all');

		wp_enqueue_style( 'outter-space', get_template_directory_uri() . '/css/outter-space.css',false,'1.1','all');



		/**
 * Hides the custom post template for pages on WordPress 4.6 and older
 *
 * @param array $post_templates Array of page templates. Keys are filenames, values are translated names.
 * @return array Filtered array of page templates.
 */
function makewp_exclude_page_templates( $post_templates ) {
    if ( version_compare( $GLOBALS['wp_version'], '4.7', '&lt;' ) ) {
        unset( $post_templates['templates/my-full-width-post-template.php'] );
    }
  
    return $post_templates;
}
  
add_filter( 'theme_page_templates', 'makewp_exclude_page_templates' );



//Adding WordPress Custom Image Sizes in function.php

// Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'my_custom_image_sizes' );

function my_custom_image_sizes() {
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( "grandota", 600, 600, false );
 }
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
return array_merge( $sizes, array(
    'grandota' => __('Grandota')
) );
}



// Remove dashboard widgets
function remove_dashboard_meta() {
	if ( current_user_can( 'manage_options' ) ) {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );  // Quick Press
	}
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 














?>