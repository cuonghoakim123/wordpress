<?php
/**
 * Hand in Hand Foundation Theme Functions
 */

// Theme Setup
function handinhand_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'handinhand'),
    ));
    
    // Set thumbnail sizes
    set_post_thumbnail_size(800, 600, true);
    add_image_size('service-thumb', 300, 300, true);
    add_image_size('news-thumb', 600, 400, true);
}
add_action('after_setup_theme', 'handinhand_setup');

// Enqueue Scripts and Styles
function handinhand_scripts() {
    wp_enqueue_style('handinhand-style', get_stylesheet_uri(), array(), '1.0.1');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', array(), null);
    
    // Main JavaScript
    wp_enqueue_script('handinhand-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.1', true);
    
    // Additional JavaScript files
    wp_enqueue_script('handinhand-content', get_template_directory_uri() . '/js/content.js', array(), '1.0.0', true);
    wp_enqueue_script('handinhand-onboarding', get_template_directory_uri() . '/js/onboarding.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('handinhand-script', 'handinhand_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('handinhand_nonce'),
        'home_url' => home_url(),
    ));
}
add_action('wp_enqueue_scripts', 'handinhand_scripts');

// Register Widget Areas
function handinhand_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'handinhand'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'handinhand'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer', 'handinhand'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'handinhand'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'handinhand_widgets_init');

// Custom Excerpt Length
function handinhand_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'handinhand_excerpt_length');

// Custom Excerpt More
function handinhand_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'handinhand_excerpt_more');

// Custom Post Types - Services
function handinhand_register_services() {
    $labels = array(
        'name'               => 'Dịch vụ',
        'singular_name'      => 'Dịch vụ',
        'menu_name'          => 'Dịch vụ',
        'add_new'            => 'Thêm mới',
        'add_new_item'       => 'Thêm dịch vụ mới',
        'edit_item'          => 'Sửa dịch vụ',
        'new_item'           => 'Dịch vụ mới',
        'view_item'          => 'Xem dịch vụ',
        'search_items'       => 'Tìm dịch vụ',
        'not_found'          => 'Không tìm thấy dịch vụ',
        'not_found_in_trash' => 'Không có dịch vụ trong thùng rác'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'dich-vu'),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('service', $args);
}
add_action('init', 'handinhand_register_services');

// Add Active Class to Menu Items
function handinhand_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'handinhand_nav_class', 10, 2);

// Custom function to get page by slug
function handinhand_get_page_link($slug) {
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return home_url('/' . $slug);
}
