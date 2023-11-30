<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EduBlink | Online Education Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("http://localhost/essaywritinginc/assets/images/favicon.png") }}">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/remixicon.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/magnifypopup.min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/odometer.min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/lightbox.min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/animation.min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/jqueru-ui-min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/swiper-bundle.min.css") }}">
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/vendor/tipped.min.css") }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset("http://localhost/essaywritinginc/assets/css/app.css") }}">

<script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=SUDzB6GYNpsdoNWxIy4HbH5Od19chx6ABiLntBumWrXyZwRzHL1oCGnBc7KXxH4XveE-rUD_GRlqXL1vW6ouDcx2itXpdg7d_c_G1cCqLVw" charset="UTF-8"></script></head>

<body class="sticky-header ">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

     <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="edu-header header-style-2">
            <div class="header-top-bar">
                <div class="container">
                    <div class="header-top">
                        <div class="header-top-left">
                            <ul class="header-info">
                                <li><a href="{{ url("tel:+011235641231") }}"><i class="icon-phone"></i>Call: 123 4561 5523</a></li>
                                <li><a href="{{ url("mailto:info@edublink.com") }}" target="_blank"><i class="icon-envelope"></i>Email: info@edublink.com</a></li>
                            </ul>
                        </div>
                        <div class="header-top-right">
                            <ul class="header-info">
                                <li><a href="{{ url("#") }}">Login</a></li>
                                <li><a href="{{ url("#") }}">Register</a></li>
                                <li class="header-btn">
                                	<a class="{{ edu-btn btn-secondary btn-medium is_active_menu('order_page') }}" href="{{ route('order_page') }}">Order Now<i class="icon-4"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="{{ url("index.html") }}">
                                    <img class="logo-light" src="{{ asset("http://localhost/essaywritinginc/assets/images/logo/logo-dark-2.png") }}" alt="Corporate Logo">
                                    <img class="logo-dark" src="{{ asset("http://localhost/essaywritinginc/assets/images/logo/logo-light-2.png") }}" alt="Corporate Logo">

                                </a>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                	<li><a class="{{ is_active_menu('homepage') }}" href="{{ route('homepage') }}">Home</a></li>
			                           <li><a  class="{{ is_active_menu('pricing') }}" href="{{ route('pricing') }}">Pricing</a></li>
			                           <li><a class="{{ is_active_menu('how_it_works') }}" href="{{ route('how_it_works') }}">How it works</a></li>
			                           <li><a class="{{ is_active_menu('faq') }}" href="{{ route('faq') }}">FAQ</a></li>
			                           <li><a class="{{ is_active_menu('contact') }}" href="{{ route('contact') }}">Contact</a></li>
			                           @if(!settings('disable_writer_application') && settings('show_writer_application_link_website_top_menu'))
			                           <li><a href="{{ route('writer_application_page') }}">{{ settings('writer_application_page_link_title') }}</a></li>
			                           @endif
			                           
                                </ul>  
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action">
                                <li class="icon search-icon">
                                    <a href="{{ url("javascript:void(0)") }}" class="search-trigger">
                                        <i class="icon-2"></i>
                                    </a>
                                </li>
                                <li class="icon cart-icon">
                                    <a href="{{ url("cart.html") }}" class="cart-icon">
                                        <i class="icon-3"></i>
                                        <span class="count">0</span>
                                    </a>
                                </li>
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                            <a href="{{ url("index.html") }}">
                                <img class="logo-light" src="{{ asset("http://localhost/essaywritinginc/assets/images/logo/logo-dark.png") }}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{ asset("http://localhost/essaywritinginc/assets/images/logo/logo-white.png") }}" alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="icon-73"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="mainmenu">
                        <li class="has-droupdown"><a href="{{ url("#") }}">Home</a>
                            <ul class="mega-menu mega-menu-one">
                                <li>
                                    <ul class="submenu mega-sub-menu mega-sub-menu-01">
                                        <li><a href="{{ url("index.html") }}">EduBlink Education <span class="badge-1">hot</span></a></li>
                                        <li><a href="{{ url("index-distant-learning.html") }}">Distant Learning</a></li>
                                        <li><a href="{{ url("index-university.html") }}">University</a></li>
                                        <li><a href="{{ url("index-online-academy.html") }}">Online Academy <span class="badge-1">hot</span></a></li>
                                        <li><a href="{{ url("index-modern-schooling.html") }}">Modern Schooling</a></li>
                                        <li><a href="{{ url("index-kitchen.html") }}">Kitchen Coach</a></li>
                                        <li><a href="{{ url("index-yoga.html") }}">Yoga Instructor</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="submenu mega-sub-menu mega-sub-menu-01">
                                        <li><a href="{{ url("index-kindergarten.html") }}">Kindergarten</a></li>
                                        <li><a href="{{ url("index-health-coach.html") }}">Health Coch <span class="badge">new</span></a></li>
                                        <li><a href="{{ url("index-language-academy.html") }}">Language Academy <span class="badge">new</span></a></li>
                                        <li><a href="{{ url("index-remote-training.html") }}">Remote Training <span class="badge">new</span></a></li>
                                        <li><a href="{{ url("index-photography.html") }}">Photography <span class="badge">new</span></a></li>
                                        <li><a href="https://edublink.html.dark.devsblink.com/" target="_blank">Dark Version</a></li>
                                        <li><a href="{{ url("index-landing.html") }}">Landing Demo</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="submenu mega-sub-menu-01">
                                        <li>
                                            <a href="https://1.envato.market/5bQ022">
                                                <img src="{{ asset("http://localhost/essaywritinginc/assets/images/others/mega-menu-image.webp") }}" alt="advertising Image">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-droupdown"><a href="{{ url("#") }}">Pages</a>
                            <ul class="mega-menu">
                                <li>
                                    <h6 class="menu-title">Inner Pages</h6>
                                    <ul class="submenu mega-sub-menu-01">
                                        <li><a href="{{ url("about-one.html") }}">About Us 1</a></li>
                                        <li><a href="{{ url("about-two.html") }}">About Us 2</a></li>
                                        <li><a href="{{ url("about-three.html") }}">About Us 3</a></li>
                                        <li><a href="{{ url("team-one.html") }}">Instructor 1</a></li>
                                        <li><a href="{{ url("team-two.html") }}">Instructor 2</a></li>
                                        <li><a href="{{ url("team-three.html") }}">Instructor 3</a></li>
                                        <li><a href="{{ url("team-details.html") }}">Instructor Profile</a></li>
                                        <li><a href="{{ url("faq.html") }}">Faq's</a></li>
                                        <li><a href="{{ url("404.html") }}">404 Error</a></li>
                                        <li><a href="{{ url("coming-soon.html") }}">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h6 class="menu-title">Inner Pages</h6>
                                    <ul class="submenu mega-sub-menu-01">
                                        <li><a href="{{ url("gallery-grid.html") }}">Gallery Grid</a></li>
                                        <li><a href="{{ url("gallery-masonry.html") }}">Gallery Masonry</a></li>
                                        <li><a href="{{ url("event-grid.html") }}">Event Grid</a></li>
                                        <li><a href="{{ url("event-list.html") }}">Event List</a></li>
                                        <li><a href="{{ url("event-details.html") }}">Event Details</a></li>
                                        <li><a href="{{ url("pricing-table.html") }}">Pricing Table</a></li>
                                        <li><a href="{{ url("purchase-guide.html") }}">Purchase Guide</a></li>
                                        <li><a href="{{ url("privacy-policy.html") }}">Privacy Policy</a></li>
                                        <li><a href="{{ url("terms-condition.html") }}">Terms & Condition</a></li>
                                        <li><a href="{{ url("my-account.html") }}">Sign In</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h6 class="menu-title">Shop Pages</h6>
                                    <ul class="submenu mega-sub-menu-01">
                                        <li><a href="{{ url("shop.html") }}">Shop</a></li>
                                        <li><a href="{{ url("product-details.html") }}">Product Details</a></li>
                                        <li><a href="{{ url("cart.html") }}">Cart</a></li>
                                        <li><a href="{{ url("wishlist.html") }}">Wishlist</a></li>
                                        <li><a href="{{ url("checkout.html") }}">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-droupdown"><a href="{{ url("#") }}">Courses</a>
                            <ul class="submenu">
                                <li><a href="{{ url("course-one.html") }}">Course Style 1</a></li>
                                <li><a href="{{ url("course-two.html") }}">Course Style 2</a></li>
                                <li><a href="{{ url("course-three.html") }}">Course Style 3</a></li>
                                <li><a href="{{ url("course-four.html") }}">Course Style 4</a></li>
                                <li><a href="{{ url("course-five.html") }}">Course Style 5</a></li>
                                <li><a href="{{ url("course-details.html") }}">Course Details 1</a></li>
                                <li><a href="{{ url("course-details-2.html") }}">Course Details 2</a></li>
                                <li><a href="{{ url("course-details-3.html") }}">Course Details 3</a></li>
                            </ul>
                        </li>

                        <li class="has-droupdown"><a href="{{ url("#") }}">Blog</a>
                            <ul class="submenu">
                                <li><a href="{{ url("blog-standard.html") }}">Blog Standard</a></li>
                                <li><a href="{{ url("blog-masonry.html") }}">Blog Masonry</a></li>
                                <li><a href="{{ url("blog-list.html") }}">Blog List</a></li>
                                <li><a href="{{ url("blog-details.html") }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown"><a href="{{ url("#") }}">Contact</a>
                            <ul class="submenu">
                                <li><a href="{{ url("contact-us.html") }}">Contact Us</a></li>
                                <li><a href="{{ url("contact-me.html") }}">Contact Me</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Search Popup  -->
            <div class="edu-search-popup">
                <div class="content-wrap">
                    <div class="site-logo">
                        <img class="logo-light" src="{{ asset("http://localhost/essaywritinginc/assets/images/logo/logo-dark.png") }}" alt="Corporate Logo">
                        <img class="logo-dark" src="{{ asset("http://localhost/essaywritinginc/assets/images/logo/logo-white.png") }}" alt="Corporate Logo">
                    </div>
                    <div class="close-button">
                        <button class="close-trigger"><i class="icon-73"></i></button>
                    </div>
                    <div class="inner">
                        <form class="search-form" action="#">
                            <input type="text" class="edublink-search-popup-field" placeholder="Search Here...">
                            <button class="submit-button"><i class="icon-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Search Popup  -->
        </header>