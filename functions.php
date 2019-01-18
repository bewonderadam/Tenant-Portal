<?php
function cptui_register_my_cpts_tenant_portal() {

	/**
	 * Post Type: Tenant Portal.
	 */

	$labels = array(
		"name" => __( "Tenant Portal", "" ),
		"singular_name" => __( "Tenant Portal", "" ),
	);

	$args = array(
		"label" => __( "Tenant Portal", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "tenant_portal", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "tenant_portal", $args );
}

add_action( 'init', 'cptui_register_my_cpts_tenant_portal' );

function cptui_register_my_taxes_tenant_portal_categories() {

	/**
	 * Taxonomy: Tenant Portal Categories.
	 */

	$labels = array(
		"name" => __( "Tenant Portal Categories", "" ),
		"singular_name" => __( "Tenant Portal Category", "" ),
	);

	$args = array(
		"label" => __( "Tenant Portal Categories", "" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'tenant_portal_categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "tenant_portal_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "tenant_portal_categories", array( "tenant_portal" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_tenant_portal_categories' );
?>
