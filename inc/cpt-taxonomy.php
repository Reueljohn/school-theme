<?php 
function fwd_register_custom_post_types() {
    
    // Register Staff CPT
    $labels = array(
        'name'                  => _x( 'Staff', 'post type general name' ),
        'singular_name'         => _x( 'Staff', 'post type singular name'),
        'menu_name'             => _x( 'Staff', 'admin menu' ),
        'name_admin_bar'        => _x( 'Staff', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'staff' ),
        'add_new_item'          => __( 'Add New Staff' ),
        'new_item'              => __( 'New Staff' ),
        'edit_item'             => __( 'Edit Staff' ),
        'view_item'             => __( 'View Staff' ),
        'all_items'             => __( 'All Staff' ),
        'search_items'          => __( 'Search Staff' ),
        'parent_item_colon'     => __( 'Parent Staff:' ),
        'not_found'             => __( 'No staff found.' ),
        'not_found_in_trash'    => __( 'No staff found in Trash.' ),
        'archives'              => __( 'Staff Archives'),
        'insert_into_item'      => __( 'Insert into staff'),
        'uploaded_to_this_item' => __( 'Uploaded to this staff'),
        'filter_item_list'      => __( 'Filter staff list'),
        'items_list_navigation' => __( 'Staff list navigation'),
        'items_list'            => __( 'Staff list'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'staff' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-businessperson',
        'supports'           => array( 'title' ),
    );

    register_post_type( 'school-staff', $args );

}
add_action( 'init', 'fwd_register_custom_post_types' );


function fwd_register_taxonomies() {

    // Add Staff Type taxonomy.
    $labels = array(
        'name'              => _x( 'Staff Type', 'taxonomy general name' ),
        'singular_name'     => _x( 'Staff Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Staff Type' ),
        'all_items'         => __( 'All Staff Types' ),
        'parent_item'       => __( 'Staff Type Featured' ),
        'parent_item_colon' => __( 'Staff Type Featured:' ),
        'edit_item'         => __( 'Edit Staff Type' ),
        'update_item'       => __( 'Update Staff Type' ),
        'add_new_item'      => __( 'Add New Staff Type' ),
        'new_item_name'     => __( 'New Work Staff Type' ),
        'menu_name'         => __( 'Staff Type' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'staff-type' ),
    );
    register_taxonomy( 'school-staff-type', array( 'school-staff' ), $args );

}
add_action( 'init', 'fwd_register_taxonomies');

 // Register Works
 $labels = array(
    'name'                  => _x( 'Students', 'post type general name' ),
    'singular_name'         => _x( 'Student', 'post type singular name'),
    'menu_name'             => _x( 'Students', 'admin menu' ),
    'name_admin_bar'        => _x( 'Student', 'add new on admin bar' ),
    'add_new'               => _x( 'Add New Student', 'student' ),
    'add_new_item'          => __( 'Add New Student' ),
    'new_item'              => __( 'New Student' ),
    'edit_item'             => __( 'Edit Student' ),
    'view_item'             => __( 'View Student' ),
    'all_items'             => __( 'All Students' ),
    'search_items'          => __( 'Search Students' ),
    'parent_item_colon'     => __( 'Parent Students:' ),
    'not_found'             => __( 'No students found.' ),
    'not_found_in_trash'    => __( 'No students found in Trash.' ),
    'archives'              => __( 'Student Archives'),
    'insert_into_item'      => __( 'Insert into student'),
    'uploaded_to_this_item' => __( 'Uploaded to this student'),
    'filter_item_list'      => __( 'Filter students list'),
    'items_list_navigation' => __( 'Students list navigation'),
    'items_list'            => __( 'Students list'),
    'featured_image'        => __( 'Student featured image'),
    'set_featured_image'    => __( 'Set student featured image'),
    'remove_featured_image' => __( 'Remove student featured image'),
    'use_featured_image'    => __( 'Use as featured image'),
    
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_nav_menus'  => true,
    'show_in_admin_bar'  => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'students' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-archive',
    'supports'           => array( 'title', 'thumbnail', 'editor' ),
    'template_lock'      => 'all'
);

register_post_type( 'school-student', $args );

add_action( 'init', 'register_custom_post_types' );


function register_taxonomies() {
// Add Role Category taxonomy
$labels = array(
    'name'              => _x( 'Role Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Role Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Role Categories' ),
    'all_items'         => __( 'All Role Category' ),
    'parent_item'       => __( 'Parent Role Category' ),
    'parent_item_colon' => __( 'Parent Role Category:' ),
    'edit_item'         => __( 'Edit Role Category' ),
    'view_item'         => __( 'View Role Category' ),
    'update_item'       => __( 'Update Role Category' ),
    'add_new_item'      => __( 'Add New Role Category' ),
    'new_item_name'     => __( 'New Role Category Name' ),
    'menu_name'         => __( 'Add Role Category' ),
);
$args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_in_menu'      => true,
    'show_in_nav_menu'  => true,
    'show_in_rest'      => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'student-categories' ),
);
register_taxonomy( 'school-student-category', array( 'school-student' ), $args );
}
add_action( 'init', 'register_taxonomies');



function fwd_rewrite_flush() {
    fwd_register_custom_post_types();
    fwd_register_taxonomies(); 
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fwd_rewrite_flush' );