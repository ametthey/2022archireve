<?php
/*
 * Template Name: profile
 */
?>
<?php get_header(); ?>
<?php
$user = wp_get_current_user();
$username = $user->user_nicename;
?>

<?php if ( is_user_logged_in() ) { ?>
<div class="container-user-menu">

    <?php get_template_part( 'template-parts/administration/pseudo' ); ?>

    <div class="user-menu-nav">
        <a class="button-round-corner button-medium" href="<?php echo esc_url( get_permalink(  get_page_by_title('administration', object , 'page') )  ); ?>">voir tout mes rêves</a>
        <a class="button-round-corner button-medium" href="<?php echo wp_logout_url( get_home_url() ); ?>">se déconnecter</a>
    </div>

</div>
<div class="container-profile"><?php echo do_shortcode(' [advanced_form form="form_6248328569951"] '); ?></div>
<?php } else { ?>
    <?php get_template_part( 'template-parts/404/404-content' ); ?>
<?php } ?>


<?php get_footer(); ?>
