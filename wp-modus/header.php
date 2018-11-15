<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-modus
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description"   content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>\css\bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>\css\font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>\css\bw.css">
	<?php wp_head(); ?>
</head>

<body id="home">

<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand mr-lg-0">
                <strong>MODUS</strong>
                <small>versus</small>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#navNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu(array(
                    'theme_location' => 'menu-1',
//                    'container'      => 'nav',
                    'container_class'=> 'collapse navbar-collapse',
                    'container_id'   => 'navNavbar',
                    'menu_class'     => 'navbar-nav ml-auto mb-5 mb-lg-0',
	                'before'         => '<li class="nav-item ml-xl-3 ml-lg-2 mr-auto mt-3 mt-lg-0">',
                    'after'          => '<li>',
	                'link_before'    => '<a href="" class="nav-link">'
            )); ?>

<!--            <div class="collapse navbar-collapse" id="navNavbar">-->
<!--                <ul class="navbar-nav ml-auto mb-5 mb-lg-0">-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mr-auto mt-3 mt-lg-0 active">-->
<!--                        <a href="index.html" class="nav-link">Home</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0">-->
<!--                        <a href="about.html" class="nav-link">about</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0">-->
<!--                        <a href="services.html" class="nav-link">services</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0 dropdown">-->
<!--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            <i class="fa fa-angle-down"></i> portfolio-->
<!--                        </a>-->
<!--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                            <a class="dropdown-item" href="portfolio-1col.html">-->
<!--                                <i class="fa fa-angle-right"></i> Portfolio 1 column page</a>-->
<!--                            <a class="dropdown-item" href="portfolio-2col.html">-->
<!--                                <i class="fa fa-angle-right"></i> Portfolio 2 column page</a>-->
<!--                            <a class="dropdown-item" href="portfolio-3col.html">-->
<!--                                <i class="fa fa-angle-right"></i> Portfolio 3 column page</a>-->
<!--                            <a class="dropdown-item" href="portfolio-4col.html">-->
<!--                                <i class="fa fa-angle-right"></i> Portfolio 4 column page</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0">-->
<!--                        <a href="blog.html" class="nav-link">blog</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0">-->
<!--                        <a href="features.html" class="nav-link">features</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0">-->
<!--                        <a href="contacts.html" class="nav-link">contacts</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item ml-xl-3 ml-lg-2 mt-3 mt-lg-0 mr-4 border-0 dropdown">-->
<!--                        <div class="search">-->
<!--                            <form class="form-group has-feedback my-auto">-->
<!--                                <div class="dropdown-menu" aria-labelledby="searchDropdown">-->
<!--                                    <input type="text" class="form-control" name="search" id="search" placeholder="Search the site">-->
<!--                                </div>-->
<!--                                <i class="fa fa-search form-control-feedback dropdown-toggle" href="#" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
            <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
    </nav>
    <!-- .navbar -->
</header>
<!-- END OF HEADER
=========================================== -->
