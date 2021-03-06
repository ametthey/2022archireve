<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <link rel="dns-prefetch" href="https://use.typekit.net">
        <link rel="stylesheet" href="https://use.typekit.net/gta0mfy.css">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> data-barba="wrapper">

    <main data-barba="container" data-barba-namespace="other">

        <header id="header-default">

            <!-- logo -->
            <a id="nav-logo" href="<?php echo esc_url( get_home_url() ); ?>">
            <?php get_template_part( 'template-parts/elements/logo-one-line' ); ?>
            </a>

        </header>
