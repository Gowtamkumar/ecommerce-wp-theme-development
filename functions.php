<?php

function GKthemeecommerce(){
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    load_theme_textdomain( 'zboom', get_template_directory_uri().'/languages' );
    // Menu option
    register_nav_menus( array(
        'topmenu' => __('Top Menu','zboom'),
    ));
    register_nav_menus( array(
        'mainpmenu' => __('Primary Menu','zboom'),
    ));
    // Slider start
    register_post_type('GkEcommerceSlider', array(
        'labels' => array(
            'name'=> 'Sliders',
            'add_new_item'=> 'New slider add'
        ),
        'public' => true,
        'supports'=> array('title', 'thumbnail')
    ) );
    register_post_type('trusted', array(
        'labels' => array(
            'name'=> 'Trusted option',
            'add_new_item'=> 'New Trusted option'
        ),
        'public' => true,
        'supports'=> array('title', 'thumbnail')
    ) );

   

}
add_action('after_setup_theme', 'GKthemeecommerce');
   
//sidebar Register 
function gkecommercewidget(){
    register_sidebar(array(
        'name'=> 'Left sidebar',
        'description'=>'You can add sidebar',
        'id'=> 'Left-sidebar'
    ));
    register_sidebar(array(
        'name' => 'right sidebar',
        'description' => 'You can add sidebar',
        'id' => 'right-sidebar'
    ));
    // footer Widgets one
    register_sidebar(array(
        'name' => 'Footer Widgets One',
        'description' => 'You can add Footer Widgets One',
        'id' => 'footer_widget_one-sidebar'
    ));
     // footer Widgets two
    register_sidebar(array(
        'name' => 'Footer Widgets Two',
        'description' => 'You can add Footer Widgets Two',
        'id' => 'footer_widget_two-sidebar'
    ));
      // footer Widgets three
      register_sidebar(array(
        'name' => 'Footer Widgets three',
        'description' => 'You can add Footer Widgets Three',
        'id' => 'footer_widget_three-sidebar'
    ));
      // footer Widgets fore
      register_sidebar(array(
        'name' => 'Footer Widgets Fore',
        'description' => 'You can add Footer Widgets Fore',
        'id' => 'footer_widget_fore-sidebar'
    ));
}


add_action('widgets_init', 'gkecommercewidget');
// sidebar Register end

function Gktheme_css_js(){
    wp_register_style('style', get_template_directory_uri().'/css/style.css');
    wp_register_style('carousel', get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_register_style('owl', get_template_directory_uri().'/css/owl.theme.default.min.css');
    wp_register_style('animate', get_template_directory_uri().'/css/animate.css');
    wp_register_style('font_awesome', get_template_directory_uri().'/css/font_awesome.css');
    wp_register_style('boostrap', get_template_directory_uri().'/css/boostrap.min.css');
    wp_register_style('swiper', get_template_directory_uri().'/css/swiper.min.css');

    wp_register_script('bootstrapjs',  get_template_directory_uri().'/js/bootstrap.js', array('jquery'));
    wp_register_script('swiper',  get_template_directory_uri().'/js/swiper.min.js', array('jquery'));
    wp_register_script('owl',  get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'));
    wp_register_script('wow',  get_template_directory_uri().'/js/wow.min.js', array('jquery'));
    wp_register_script('custom',  get_template_directory_uri().'/js/custom.js', array('jquery'));
    wp_register_script('fontwsame',  get_template_directory_uri().'/js/fontwsame.js', array('jquery'));
    

    // css enqueue
    wp_enqueue_style('style');
    wp_enqueue_style('carousel');
    wp_enqueue_style('owl');
    wp_enqueue_style('animate');
    wp_enqueue_style('font_awesome');
    wp_enqueue_style('boostrap');
    wp_enqueue_style('swiper');
    // js enqueue
    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper');
    wp_enqueue_script('owl');
    wp_enqueue_script('bootstrapjs');
    wp_enqueue_script('wow');
    wp_enqueue_script('custom');
    wp_enqueue_script('fontwsame');
    
}
add_action('wp_enqueue_scripts', 'Gktheme_css_js');


    // * Register Custom Navigation Walker
    require_once('class-wp-bootstrap-navwalker.php');
    // redux framwork
    require_once('lib/redux-core/framework.php');
    require_once('lib/sample/config.php');
?>