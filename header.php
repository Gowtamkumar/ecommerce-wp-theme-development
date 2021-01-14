<!doctype html>
<html <?php language_attributes('en'); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( "description" )?>">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Gowtam kumar">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <!-- Font Awesome link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> -->
    <!-- Google Font link -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet"> -->
    <!-- favicon -->
    <link rel="icon" href="#" type="image/gif" sizes="16x16">
    <!-- favicon -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- header Option Start -->
    <div class="header">
        <!-- Header top start -->
        <div class="container-fluid categorey_product_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-md text-center">
                            <div class="container">
                                <div class="navbar_brand_top">
                                    <span><?php global $gkecommerce; echo $gkecommerce['top_mobile_number']; ?></span>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span><i class="fas fa-bars navbar-icon"></i></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <?php 
                                            wp_nav_menu( array(
                                                "theme_location" => "topmenu",
                                                'depth'             => 2,
                                                'container'         => '',
                                                "menu_class"        => "navbar-nav ml-auto",
                                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                'walker'            => new WP_Bootstrap_Navwalker(),
                                                
                                            ));
                                        ?>
                                    <!-- <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=""  class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=""  class="nav-link">Home</a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!-- Header top end -->
       <div class="container-fluid">
           <div class="container">
                <div class="row">
                    <div class="col-md-2 col-2">
                        <div class="brand_logo">
                            <a  class="navbar-brand" href="<?php bloginfo('fontpage')?>">
                                <img src="<?php global $gkecommerce; echo $gkecommerce['logo_uploader']['url']; ?>" alt="Web-Development-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-8">
                        <div class="serch_box p-3">
                           
                              <?php echo do_shortcode('[aws_search_form]'); ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-2">
                        <div class="shoping_card pt-3">
                            <!-- <i class="fas fa-shopping-cart"></i>  -->
                            <a href="http://localhost/custom-ecommerce/login/">LOGIN</a>/<a href="http://localhost/custom-ecommerce/register/">SIGNUP</a>
                        </div>
                    </div>
                </div>
           </div>
       </div>
       <div class="container-fluid categorey_product_section">
        <div class="container">
             <div class="row">
                 <div class="col-md-12 ">
                    <nav class="navbar navbar-expand-md text-center">
                        <div class="container">
                            <div class="second_navbar m-auto">

                                        <?php 
                                            wp_nav_menu( array(
                                                "theme_location" => "mainpmenu",
                                                'depth'             => 2,
                                                'container'         => 'div',
                                                "menu_class"        => "navbar-nav",
                                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                'walker'            => new WP_Bootstrap_Navwalker(),
                                                
                                            ));
                                        ?>   

<!-- 
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="" class="nav-link dropbtn">New Collection</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link dropbtn">New Collection</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link dropbtn"> New Product</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a href="shop.html" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link"> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Home</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </nav>
                 </div>
             </div>
        </div>
    </div>
    </div>
    <!-- Header End -->