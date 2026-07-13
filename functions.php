<?php
/**
 * Hasooleilm LMS Theme Functions
 * 
 * @package Hasooleilm_LMS
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function hasooleilm_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );
    
    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );
    
    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    
    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    
    // HTML5 semantic markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    
    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hasooleilm-lms' ),
        'footer'  => __( 'Footer Menu', 'hasooleilm-lms' ),
    ) );
    
    // Set content width
    if ( ! isset( $content_width ) ) {
        $content_width = 800;
    }
}
add_action( 'after_setup_theme', 'hasooleilm_setup' );

/**
 * Fallback menu function
 */
function hasooleilm_fallback_menu() {
    echo '<ul id="primary-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'hasooleilm-lms' ) . '</a></li>';
    echo '</ul>';
}

/**
 * Enqueue scripts and styles
 */

function hasooleilm_enqueue_scripts() {
    $style_file = get_template_directory() . '/assets/css/style.css';
    $style_version = file_exists( $style_file ) ? filemtime( $style_file ) : '1.0.0';
    wp_enqueue_style( 
        'hasooleilm-style', 
        get_template_directory_uri() . '/assets/css/style.css', 
        array(), 
        $style_version 
    );

    wp_enqueue_script( 
        'hasooleilm-main-js', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        '1.0.0', 
        true 
    );

    wp_enqueue_script( 
        'hasooleilm-header-js', 
        get_template_directory_uri() . '/assets/js/header.js', 
        array('hasooleilm-main-js'), 
        '1.0.0', 
        true 
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'hasooleilm_enqueue_scripts' );

/**
 * Register widget areas
 */
function hasooleilm_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'hasooleilm-lms' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'hasooleilm-lms' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'hasooleilm_widgets_init' );

/**
 * Custom excerpt length
 */
function hasooleilm_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'hasooleilm_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function hasooleilm_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'hasooleilm_excerpt_more' );