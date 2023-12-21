<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- google-font -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Open+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap-icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- stellarnav -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stellarnav.css">
    <!-- custom-css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- responsive -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <!-- header -->


    <header class="header-top fixed-top d-transparent">

        <!-- carosel -->

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-3">
                    <div class="logo">
                        <a href="<?php echo get_site_url(); ?>">Rent Further</a>
                    </div>
                </div>
                <div class="col-md-9 col-9">

                    <div class="h-menu">
                        <div class="stellarnav">
                        	<?php wp_nav_menu( array('menu' => 'Header_Menu', 'container' => '', 'items_wrap' => '<ul class="">%3$s</ul>' )); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
