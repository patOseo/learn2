<?php

add_theme_support('align-wide');
add_theme_support( 'post-thumbnails' );
add_theme_support('responsive-embeds');
add_image_size( 'my-custom-image-size', 640, 999 );
add_image_size( 'program-view', 363, 204, true);
add_image_size( 'square', 400, 400, true);
the_post_thumbnail( 'my-custom-image-size' );

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );


add_theme_support(
    'custom-logo',
    array(
        'flex-height' => true,
        'flex-width'  => true,
    )
);


 // menus register----------------->
function custom_menus(){

    // menu register code
    register_nav_menus(
        array(
            'top-header-menu' => __('Top Header Menu'),
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
            'social-menu' => __('Social Menu'),
            'subnav-menu' => __('Subnav Menu')

            )
    );
}
add_action('init','custom_menus');


// add active class to the menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


function theme_widget() {
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Contact Section', 'learn2' ),
        'id'            => 'footer-contact-text',
        'description'   => esc_html__( 'Footer Contact Section', 'learn2' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Copy Right', 'learn2' ),
        'id'            => 'footer-copy-right-text',
        'description'   => esc_html__( 'Footer Contact Section', 'learn2' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Logo Section', 'learn2' ),
        'id'            => 'footer-logo-section',
        'description'   => esc_html__( 'Footer Contact Section', 'learn2' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Logo Section Text', 'learn2' ),
        'id'            => 'footer-logo-section-text',
        'description'   => esc_html__( 'Footer Contact Section', 'learn2' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'learn2' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Blog Sidebar', 'learn2' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action('widgets_init', 'theme_widget');




// style and script enqueue -------------->

function wpdocs_theme_name_scripts() {
   
    wp_enqueue_style( 'style-name1', get_template_directory_uri() . '/css/css.css' );
   
    wp_enqueue_style('font-awesome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '');
    
    if(is_singular('programs')) {
        wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css' );
    }

    wp_enqueue_script('jquery-min-js',  'https://code.jquery.com/jquery-3.6.0.js', array('jquery'), '', true);
    
    wp_enqueue_script('jquery-min-js-1',  'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array('jquery'), '', true);
   
   
   
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

    wp_enqueue_script( 'ajax-script', get_stylesheet_directory_uri() . '/js/ajax-script.js', array(), '', true );
    wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
   

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_action("wp_ajax_get_page_data", "get_page_data");
add_action("wp_ajax_nopriv_get_page_data", "get_page_data");

function get_page_data() {  
    $page = get_page_by_path( $_POST['page_slug'], OBJECT, ['page', 'post']);
    echo $page->post_content;
   die();

}
 


// Register block gutenberg

// about block ------------->

function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

    
       acf_register_block_type(array(
            'name'              => 'color_switcher',
            'title'             => __('color switcher'),
            'description'       => __('color switcher block.'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/color-switcher-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'color switcher','index' ),
        ));

       acf_register_block_type(array(
            'name'              => 'testimonial_block',
            'title'             => __('testimonial block'),
            'description'       => __('testimonial block.'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/testimonial-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial block','index' ),
        ));

       acf_register_block_type(array(
            'name'              => 'banner_block',
            'title'             => __('banner block'),
            'description'       => __('banner block.'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/banner-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'banner-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'recent-posts-block',
            'title'             => __(' recent posts block'),
            'description'       => __('recent posts block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/recent-posts-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'recent-posts-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'contact-block',
            'title'             => __('contact block'),
            'description'       => __('contact block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/contact-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'about-block',
            'title'             => __('about block'),
            'description'       => __('about block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/about-logo-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'about-intro-block',
            'title'             => __('about-intro-block'),
            'description'       => __('about-intro-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/about-intro-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-intro-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'about-banner-block',
            'title'             => __('about-banner-block'),
            'description'       => __('about-intro-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/about-banner-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-banner-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'content-block',
            'title'             => __('content-block'),
            'description'       => __('content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/content-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'content-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'book-call-block',
            'title'             => __('book-call-block'),
            'description'       => __('book-call-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/book-call-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'book-call-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'natural-approaches-block',
            'title'             => __('natural-approaches-block'),
            'description'       => __('natural-approaches-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/natural-approaches-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'natural-approaches-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'team-member-block',
            'title'             => __('team-member-block'),
            'description'       => __('team-member-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/team-member-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'team-member-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'program-header-block',
            'title'             => __('program-header-block'),
            'description'       => __('program-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-header-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'featured-programs-block',
            'title'             => __('featured-programs-block'),
            'description'       => __('featured-programs-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/featured-programs-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'featured-programs-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'find-solutions-block',
            'title'             => __('find-solutions-block'),
            'description'       => __('find-solutions-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/find-solutions-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'find-solutions-block' ),
        ));

       acf_register_block_type(array(
            'name'              => 'blog-content-block',
            'title'             => __('blog-content-block'),
            'description'       => __('blog-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/blog-content-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'blog-content-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'contact-description-block',
            'title'             => __('contact-description-block'),
            'description'       => __('contact-description-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/contact-description-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-description-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'promo-header-block',
            'title'             => __('promo-header-block'),
            'description'       => __('promo-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/promo-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'promo-header-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'promo-content-block',
            'title'             => __('promo-content-block'),
            'description'       => __('promo-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/promo-content-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'promo-content-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'promo-footer-block',
            'title'             => __('promo-footer-block'),
            'description'       => __('promo-footer-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/promo-footer-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'promo-footer-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'unique-header-block',
            'title'             => __('unique-header-block'),
            'description'       => __('unique-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/unique-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'unique-header-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'unique-content-block',
            'title'             => __('unique-content-block'),
            'description'       => __('unique-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/unique-content-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'unique-content-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'unique-blocks-block',
            'title'             => __('unique-blocks-block'),
            'description'       => __('unique-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/unique-blocks-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'unique-blocks-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'unique-footer-block',
            'title'             => __('unique-footer-block'),
            'description'       => __('unique-footer-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/unique-footer-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'unique-footer-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'certified-header-block',
            'title'             => __('certified-header-block'),
            'description'       => __('certified-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/certified-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'certified-header-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'certified-header-block',
            'title'             => __('certified-header-block'),
            'description'       => __('certified-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/certified-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'certified-header-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'certified-content-block',
            'title'             => __('certified-content-block'),
            'description'       => __('certified-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/certified-content-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'certified-content-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'certified-banner-block',
            'title'             => __('certified-banner-block'),
            'description'       => __('certified-banner-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/certified-banner-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'certified-banner-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'terms-block',
            'title'             => __('terms-block'),
            'description'       => __('terms-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/terms-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'terms-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-header-block',
            'title'             => __('program-detail-header-block'),
            'description'       => __('program-detail-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-header.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-header' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-content-block',
            'title'             => __('program-detail-content-block'),
            'description'       => __('program-detail-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-content.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-result-block',
            'title'             => __('program-detail-result-block'),
            'description'       => __('program-detail-result-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-result-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-result-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-client-block',
            'title'             => __('program-detail-client-block'),
            'description'       => __('program-detail-client-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-client-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-client-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-slider-block',
            'title'             => __('program-detail-slider-block'),
            'description'       => __('program-detail-slider-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-slider-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-slider-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-action-block',
            'title'             => __('program-detail-action-block'),
            'description'       => __('program-detail-action-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-action-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-action-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-faq-block',
            'title'             => __('program-detail-faq-block'),
            'description'       => __('program-detail-faq-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-faq-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-faq-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'program-detail-footer-block',
            'title'             => __('program-detail-footer-block'),
            'description'       => __('program-detail-footer-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/program-detail-footer-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'program-detail-footer-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'contact-form-block',
            'title'             => __('contact-form-block'),
            'description'       => __('contact-form-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/contact-form-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-form-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'book-header-block',
            'title'             => __('book-header-block'),
            'description'       => __('book-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/book-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'book-header-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'book-ready-block',
            'title'             => __('book-ready-block'),
            'description'       => __('book-ready-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/book-ready-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'book-ready-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'book-form-block',
            'title'             => __('book-form-block'),
            'description'       => __('book-form-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/book-form-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'book-form-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'natural-approaches-detail-block',
            'title'             => __('natural-approaches-detail-block'),
            'description'       => __('natural-approaches-detail-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/natural-approaches-detail-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'natural-approaches-detail-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'orchestrate-header-block',
            'title'             => __('orchestrate-header-block'),
            'description'       => __('orchestrate-header-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/orchestrate-header-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'orchestrate-header-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'orchestrate-content-block',
            'title'             => __('orchestrate-content-block'),
            'description'       => __('orchestrate-content-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/orchestrate-content-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'orchestrate-content-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'orchestrate-result-block',
            'title'             => __('orchestrate-result-block'),
            'description'       => __('orchestrate-result-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/orchestrate-result-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'orchestrate-result-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'orchestrate-footer-block',
            'title'             => __('orchestrate-footer-block'),
            'description'       => __('orchestrate-footer-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/orchestrate-footer-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'orchestrate-footer-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'programs-block',
            'title'             => __('Programs Block'),
            'description'       => __('programs-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/programs-block.php',
            'category'          => 'layout',
            'icon'              => 'tablet',
            'keywords'          => array( 'programs' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'faq-block',
            'title'             => __('FAQ Block'),
            'description'       => __('faq-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/faq-block.php',
            'category'          => 'layout',
            'icon'              => 'menu-alt3',
            'keywords'          => array( 'faq', 'accordion' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'cta-block',
            'title'             => __('CTA Block'),
            'description'       => __('cta-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/cta-block.php',
            'category'          => 'layout',
            'icon'              => 'button',
            'keywords'          => array( 'cta', 'contact', 'call to action' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'counter-block',
            'title'             => __('Counter'),
            'description'       => __('counter-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/counter-block.php',
            'category'          => 'layout',
            'icon'              => 'dashboard',
            'keywords'          => array( 'number', 'counter' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'promo-boxes-block',
            'title'             => __('Promo Boxes'),
            'description'       => __('promo-boxes-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/promo-boxes-block.php',
            'category'          => 'layout',
            'icon'              => 'columns',
            'keywords'          => array( 'boxes', 'promo' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'timeline-block',
            'title'             => __('Timeline'),
            'description'       => __('timeline-block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/timeline-block.php',
            'category'          => 'layout',
            'icon'              => 'clock',
            'keywords'          => array( 'timeline' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'video-slider-block',
            'title'             => __('Video Slider'),
            'description'       => __('Video Slider Block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/video-slider-block.php',
            'category'          => 'layout',
            'icon'              => 'embed-video',
            'keywords'          => array( 'video', 'slider' ),
            'mode'              => 'edit'
        ));


        acf_register_block_type(array(
            'name'              => 'modal-link-block',
            'title'             => __('Modal Link'),
            'description'       => __('Modal Link Block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/modal-link-block.php',
            'category'          => 'layout',
            'icon'              => 'cover-image',
            'keywords'          => array( 'modal', 'link' ),
            'mode'              => 'edit'
        ));

        acf_register_block_type(array(
            'name'              => 'blog-feed-block',
            'title'             => __('Blog Feed'),
            'description'       => __('Blog Feed Block'),
            'render_template'   => 'wp-content/themes/learn2/template-parts/blocks/blog-feed-block.php',
            'category'          => 'layout',
            'icon'              => 'grid-view',
            'keywords'          => array( 'blog', 'feed' ),
            'mode'              => 'edit'
        ));

    }
}
add_action('acf/init', 'my_acf_init_block_types');


// Testimonial Custom Post Type
function register_custom_post_types() {
    // set up Testimonial labels
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'all_items' => 'All Testimonials',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonial',
        'not_found' =>  'No Testimonial Found',
        'not_found_in_trash' => 'No Testimonial found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Testimonials',
        'publicly_queryable'  => false
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'testimonial'),
        'query_var' => true,
        'menu_icon' => 'dashicons-format-status',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'testimonial', $args );



    // set up Staff labels
    $staff_labels = array(
        'name' => 'Staff',
        'singular_name' => 'Staff Member',
        'add_new' => 'Add New Staff',
        'add_new_item' => 'Add Staff Member',
        'edit_item' => 'Edit Staff',
        'new_item' => 'New Staff',
        'all_items' => 'All Staff',
        'view_item' => 'View Staff',
        'search_items' => 'Search Staff',
        'not_found' =>  'No Staff Found',
        'not_found_in_trash' => 'No Staff found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Staff',
    );
    
    // register post type
    $staff_args = array(
        'labels' => $staff_labels,
        'public' => true,
        'has_archive' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        // 'show_in_rest' => true,
        // 'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'staff'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'trackbacks',
            'custom-fields',
            'comments',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'staff', $staff_args );



    // set up Testimonial labels
    $progam_label = array(
        'name' => 'Programs',
        'singular_name' => 'Program',
        'add_new' => 'Add New Program',
        'add_new_item' => 'Add New Program',
        'edit_item' => 'Edit Program',
        'new_item' => 'New Program',
        'all_items' => 'All Programs',
        'view_item' => 'View Program',
        'search_items' => 'Search Program',
        'not_found' =>  'No Program Found',
        'not_found_in_trash' => 'No Program found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Programs',
    );
    
    // register post type
    $program_args = array(
        'labels' => $progam_label,
        'public' => true,
        'has_archive' => false,
        'show_ui' => true,
        'capability_type' => 'post',
		'show_in_rest' => true,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'programs'),
        'query_var' => true,
        'menu_icon' => 'dashicons-align-center',
		'template' => array(
			array( 'acf/program-detail-header-block', array( 'align' => '', 'mode' => 'edit' ) ),
			array( 'acf/program-detail-content-block', array( 'mode' => 'edit' ) ),
			array( 'acf/program-detail-result-block', array( 'mode' => 'edit', 'className' => 'grey' ) ),
			array( 'acf/program-detail-client-block', array( 'mode' => 'edit' ) ),
			array( 'acf/program-detail-slider-block', array( 'mode' => 'edit' ) ),
			array( 'acf/program-detail-action-block', array( 'mode' => 'edit' ) ),
			array( 'acf/program-detail-faq-block', array( 'mode' => 'edit' ) ),
			array( 'acf/program-detail-footer-block', array( 'data' => array('background_image' => 1743, 'button' => 'APPLY TO GET CERTIFIED', 'button_link' => '/get-certified/'), 'mode' => 'edit' ) )
		),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'programs', $program_args );

    $labels = array(
        'name' => _x( 'Programs', 'taxonomy general name' ),
        'singular_name' => _x( 'Program', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Programs' ),
        'popular_items' => __( 'Popular Programs' ),
        'all_items' => __( 'All Programs' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Program' ), 
        'update_item' => __( 'Update Program' ),
        'add_new_item' => __( 'Add New Program' ),
        'new_item_name' => __( 'New Program Name' ),
        'separate_items_with_commas' => __( 'Separate programs with commas' ),
        'add_or_remove_items' => __( 'Add or remove programs' ),
        'choose_from_most_used' => __( 'Choose from the most used programs' ),
        'menu_name' => __( 'Program Category' ),
      ); 
     
    // Now register the non-hierarchical taxonomy like tag
     
      register_taxonomy('program','programs',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'program' ),
      ));



}
add_action( 'init', 'register_custom_post_types' );



// Setting page template for Gutenberg blocks
// function set_page_block_template() {
//     $post_type_object = get_post_type_object( 'page' );
//     $post_type_object->template = array(
//         array( 'core/cover', array('url' => '/wp-content/uploads/2021/07/daria-nepriakhina-235583.jpeg', 'align' => 'full'), array(array('core/heading', array('level' => '1', 'content' => 'Add H1 page title here...'))) ),
//         array( 'core/columns', array(), array(array('core/column', array('width' => '100%'))) ),
//     );
//     $post_type_object->template_lock = 'all';
// }
// add_action( 'init', 'set_page_block_template' );
