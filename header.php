<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> >

    <header id="header-default">

        <!-- logo -->
        <a id="nav-logo" href="<?php echo esc_url( get_home_url() ); ?>" target="_blank">
        <?php get_template_part( 'template-parts/elements/logo-one-line' ); ?>
        </a>

    </header>
