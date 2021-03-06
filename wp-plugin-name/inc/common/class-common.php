<?php

namespace WP_Plugin_Name\Inc\Common;

/**
 * The common/shared functionality of the plugin.
 *
 * Defines an example custom post type
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @author    Your Name or Your Company
 */
class Common {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The text domain of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_text_domain    The text domain of this plugin.
	 */
	private $plugin_text_domain;

	/**
	 * The current environment of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $environment    The current environment of this plugin.
	 */
	private $environment;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since       1.0.0
	 * @param       string $plugin_name        The name of this plugin.
	 * @param       string $version            The version of this plugin.
	 * @param       string $plugin_text_domain The text domain of this plugin.
	 */
	public function __construct( $plugin_name, $version, $plugin_text_domain, $environment ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->plugin_text_domain = $plugin_text_domain;
		$this->environment = $environment;

	}

	/**
	 * Register custom post types
	 *
	 * @since    1.0.0
	 */
	public function register_post_types() {

		$labels = array( 
			'name' => _x( 'Galleries', 'gallery' ),
			'singular_name' => _x( 'Gallery', 'gallery' ),
			'add_new' => _x( 'Add New', 'gallery' ),
			'add_new_item' => _x( 'Add New Gallery', 'gallery' ),
			'edit_item' => _x( 'Edit Gallery', 'gallery' ),
			'new_item' => _x( 'New Gallery', 'gallery' ),
			'view_item' => _x( 'View Gallery', 'gallery' ),
			'search_items' => _x( 'Search Galleries', 'gallery' ),
			'not_found' => _x( 'No galleries found', 'gallery' ),
			'not_found_in_trash' => _x( 'No galleries found in Trash', 'gallery' ),
			'parent_item_colon' => _x( 'Parent Gallery:', 'gallery' ),
			'menu_name' => _x( 'Galleries', 'gallery' ),
		);
		
		
    
        $args = array(
            "label" => __( "Custom Posts", "" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "has_archive" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "rewrite" => array( "slug" => "custom-post-type", "with_front" => true ),
            "query_var" => true,
        );
    
        register_post_type( "custom-post-type", $args );
	}

}
