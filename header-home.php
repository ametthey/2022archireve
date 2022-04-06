<?php
$user = wp_get_current_user();
$username = $user->user_nicename;
$editor = current_user_can( 'editor' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <link rel="dns-prefetch" href="https://use.typekit.net">
        <link rel="preload" href="https://use.typekit.net/gta0mfy.css" as="style">
        <link rel="stylesheet" href="https://use.typekit.net/gta0mfy.css">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class( 'home' ) ?> data-barba="wrapper">

        <main data-barba="container" data-barba-namespace="home">

            <!-- WELCOME ANIMATION -->
            <?php get_template_part( 'template-parts/home/page-load-animation' ); ?>

            <header id="header-home">

                <!-- NAVIGATION DESKTOP -->
                <nav id="nav-desktop">

                    <!-- CONNEXION -->
                    <?php if ( is_user_logged_in() && $editor ) { ?>
                    <a id="nav-desktop-connexion" class="button-round-corner button-small" href="<?php echo esc_url(  get_permalink( get_page_by_title( 'profil', OBJECT , 'page') )  ); ?>"><?php echo $username; ?></a>
                    <?php } else { ?>
                    <a id="nav-desktop-connexion" class="button-round-corner button-small" href="<?php echo esc_url( get_permalink(  get_page_by_title('connexion', OBJECT , 'page') )  ); ?>">Connexion</a>
                    <?php } ?>


                    <!-- INSCRIPTION -->
                    <?php if ( is_user_logged_in() && $editor ) { ?>
                    <a id="nav-desktop-connexion" class="button-round-corner button-small" href="<?php echo esc_url( get_permalink(  get_page_by_title('administration', object , 'page') )  ); ?>">Mes rêves</a>
                    <?php } else { ?>
                    <a id="nav-desktop-inscription" class="button-round-corner button-small" href="<?php echo esc_url( get_permalink(  get_page_by_title('inscription', OBJECT , 'page') )  ); ?>">Inscription</a>
                    <?php } ?>

                </nav>

                <div id="nav-mobile-apropos-button" class="button-round-circle circle-big"></div>

                <!-- logo -->
                <a id="nav-logo" href="<?php echo esc_url( get_home_url() ); ?>">
                <?php get_template_part( 'template-parts/elements/logo-one-line' ); ?>
                </a>

                <!-- CONNEXION -->
                <?php if ( is_user_logged_in() && $editor ) { ?>
                <a id="nav-mobile-connexion" class="button-round-corner button-small" href="<?php echo esc_url(  get_permalink( get_page_by_title( 'profil', OBJECT , 'page') )  ); ?>"><?php echo $username; ?></a>
                <?php } else { ?>
                <a id="nav-mobile-connexion" class="button-round-corner button-small" href="<?php echo esc_url( get_permalink(  get_page_by_title('connexion', OBJECT , 'page') )  ); ?>">Connexion</a>
                <?php } ?>

                <nav id="nav-desktop-empty"></nav>

            </header>


            <header id="header-mobile-apropos-content">
                <div class="apropos-container apropos-container-header-mobile">
                    <?php get_template_part( 'template-parts/home/apropos/apropos-hero-header-mobile' ); ?>
                    <?php get_template_part( 'template-parts/home/apropos/apropos-explication' ); ?>
                    <?php get_template_part( 'template-parts/home/apropos/apropos-footer' ); ?>
                </div>
            </header>

