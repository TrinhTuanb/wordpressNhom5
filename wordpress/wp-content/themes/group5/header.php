
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Raavin - Shoes eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="Raavin – Shoe Store HTML Template is an ultimate eCommerce website template with all modern attributes. This responsive template is to showcase fashion shoes, sports shoes, climbing shoes, skating shoes, high hill, slippers, sneakers, Desert Boots, Diabetic Shoes, Court Shoes, and Kid’s Shoes etc. for the visitors.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://htmldemo.net/raavin/raavin/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/meanmenu.css">
        <!-- Nivo Slider CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/nivo-slider.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.min.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="https://htmldemo.net/raavin/raavin/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/responsive.css">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/main.scss">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/responsive.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/responsive.scss">
        <!-- Modernizr js -->
        <script src="<?php bloginfo('template_directory') ?>/js/modernizr-3.11.2.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Newsletter Popup Area -->
            <!-- <div class="popup_wrapper">
                <div class="test">
                    <span class="popup_off">Close</span>
                    <div class="subscribe_area text-center mt-40">
                        <h2>Newsletter</h2>
                        <p>Subscribe to the Makali mailing list to receive updates on new arrivals, special offers and other discount
                            information.</p>
                        <div class="subscribe-form-group">
                            <form action="#">
                                <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                        <div class="subscribe-bottom mt-15">
                            <input type="checkbox" id="newsletter-permission">
                            <label for="newsletter-permission">Don't show this popup again</label>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Newsletter Popup Area Here -->
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Main Header Area -->
                <div class="main-header stick header-sticky">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Begin Logo Area -->
                            <div class="col-lg-2 col-md-3 col-2">
                                <div class="logo">
                                    <a href="<?php bloginfo('url'); ?>">
                                        <img src="<?php bloginfo('stylesheet_directory') ?>/img/1.png" alt="<?php bloginfo('name'); ?>">
                                    </a>
                                </div>
                            </div>
                            <!-- Logo Area End Here -->
                            <!-- Begin Main Menu Area -->
                            <div class="col-lg-6 d-none d-lg-block d-xl-block">
                                <div class="main-menu">
                                    <nav>
                                    <?php wp_nav_menu( 
									array( 
										'theme_location' => 'header-menu', 
										'container' => 'false', 
										'menu_id' => 'header-menu', 
										'menu_class' => 'header-menu'
									) 
									); ?>
                                    </nav>
                                </div>
                            </div>
                            <!-- Main Menu Area End Here -->
                            <!-- Begin Header Right Area -->
                            <div class="col-lg-4 col-md-9 col-10">
                                <div class="header-right">
                                    <!-- Begin Mini Cart Area -->
                                  
                                    <!-- Mini Cart Area End Here -->
                                    <!-- Begin Header Search Area -->
                                    <div class="main-menu primary-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-search"></i>Search</a>
                                                    <ul class="dropdown header-search">
                                                        <li>
                                                            <form action="#">
                                                                <input type="text" name="Enter key words" value="Enter key words..." onblur="if(this.value==''){this.value='Enter key words...'}" onfocus="if(this.value=='Enter key words...'){this.value=''}">
                                                            </form>
                                                            <button><i class="fa fa-search"></i></button>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header Search Area End Here -->
                                    <!-- Begin User Account Area -->
                                   
                                    <!-- User Account Area End Here -->
                                </div>
                            </div>
                            <!-- Header Right Area End Here -->
                            <!-- Begin Mobile Menu Area -->
                            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                                <div class="mobile-menu">
                                    <nav>
                                    <?php wp_nav_menu( 
									array( 
										'theme_location' => 'header-menu', 
										'container' => 'false', 
										'menu_id' => 'header-menu', 
										'menu_class' => 'header-menu'
									) 
									); ?>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Main Header Area End Here -->
            </header>