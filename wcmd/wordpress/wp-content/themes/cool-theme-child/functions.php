<?php
function wcmd_child_after_setup_theme() {  
/**
    * Registering the Aside "Sidebar"
    */
    $wcmd_aside_sidebar = array(
        'name' => 'Aside Child',
        'id' => 'aside-child',
        'description' => 'Widgets placed here will go in the Right hand sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    );
    register_sidebar( $wcmd_aside_sidebar );

    function wcmd_child_wp_enqueue_scripts() {
  // Path to file is via get_stylesheet_directory_uri() active theme
  //                  ID for CSS File  , path to stylesheet  , array of dependencies    , use theme version number                , media="type"
  //wp_enqueue_style( string $handle   , string $src = ''    , string[] $deps = array() , string|bool|null $ver = false           , string $media = 'all' )
    wp_enqueue_style('wcmd-child-style', get_stylesheet_uri(), ['wcmd-style']           , wp_get_theme()->get('Version'), "all");  
    }  
    add_action('wp_enqueue_scripts', 'wcmd_child_wp_enqueue_scripts');

    function wcmd_child_widgets_init() {
        unregister_sidebar('header');  
        unregister_sidebar('footer-upper');
    }  
    add_action('widgets_init', 'wcmd_child_widgets_init', 11);

    // Path to image is via get_stylesheet_directory_uri() active theme
    $custom_header_args = array(
        'width' => 1280,
        'default-image' => get_stylesheet_directory_uri() . '/images/wcmd-child-custom-header-default.png',
        'uploads' => true,  );  
    add_theme_support('custom-header', $custom_header_args);

}
add_action( 'after_setup_theme', 'wcmd_child_after_setup_theme' );
?>