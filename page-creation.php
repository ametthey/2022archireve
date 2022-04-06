<?php
/*
 * Template Name: création
 */
?>
<?php get_header(); ?>

<div class="container-user-menu">

    <?php get_template_part( 'template-parts/administration/pseudo' ); ?>

    <div class="user-menu-nav">
        <a class="button-round-corner button-medium" href="<?php echo esc_url(  get_permalink( get_page_by_title( 'profil', OBJECT , 'page') )  ); ?>">Modifier le profil</a>
        <a class="button-round-corner button-medium" href="<?php echo esc_url( get_home_url() ); ?>">voir tout les rêves</a>
        <a class="button-round-corner button-medium" href="<?php echo wp_logout_url( get_home_url() ); ?>">se déconnecter</a>
    </div>

</div>

<div class="container-profile"><?php echo do_shortcode(' [advanced_form form="form_62491aae8a3b1"] '); ?></div>

<?php get_footer(); ?>
