<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feccawp
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="bg-head-blue mb-625" style="background-color: #44A0FF;">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center margin-header">
                    <div class="d-flex align-items-center col-md-4 col-4 mb-4 mb-md-0 me-md-auto logo-container">
                        <a href="/" class="text-dark text-decoration-none">
                            <img src="<?php the_field("logo"); ?>" alt="logo">
                        </a>
                        <span class="header-text"><?php the_field("Tagline"); ?></span>
                    </div>
                    <div class="col-md-8 col-12 row d-flex justify-content-end nav-list-container">                   
                            <?
                            my_nav_menu( [ 'theme_location'  => '' ] );
                            ?>
                            <!--<li class="nav-item btn btn-outline-secondary btn-lg px-4"><a href="#" class="nav-link">Get Started</a>-->
                            <div class="nav-item nav-item-b col-3 d-flex justify-content-end align-items-center">
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a href="#" class="text-decoration-none btn-link-style"><?php the_field("button_header"); ?></a></button>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mx-auto margin-bot">
                    <h1 class="fw-ligh h1-style"><?php the_field("general_title"); ?></h1>
                </div>
                <div class="col-lg-6 col-md-8 mx-auto text-center margin-bottom">
                    <a href="<?php the_field("header_link_button_appstore"); ?>" class="text-dark text-decoration-none"><img src="<?php the_field("appstore"); ?>" alt="AppStore"></a>
                    <a href="<?php the_field("header_link_button_google"); ?>" class="text-dark text-decoration-none"><img src="<?php the_field("googleplay"); ?>"
                            alt="GooglePlay"></a>
                </div>
                <div class="mx-auto text-center bg" style="background-image: url(<?php the_field("header_tel_bg"); ?>);">
                    <img class="iphone" src="<?php the_field("Iphone_photo"); ?>" alt="Iphone">
                </div>
            </div>
        </div>
    </header>
