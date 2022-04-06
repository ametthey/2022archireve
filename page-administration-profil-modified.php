<?php
/*
 * Template Name: administration profil modified
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/administration/profil-submitted' ); ?>

<div class="container-user-menu">

    <?php get_template_part( 'template-parts/administration/pseudo' ); ?>

    <div class="user-menu-nav">

        <?php
            $user = wp_get_current_user();
            $username = $user->user_nicename;
        ?>

        <a class="button-round-corner button-medium" href=" <?php echo esc_url(  get_permalink( get_page_by_title( $username, OBJECT , 'reveur') )  ); ?>">Modifier le profil</a>
        <a class="button-round-corner button-medium" href="<?php echo esc_url( get_home_url() ); ?>">voir tout les rêves</a>
        <a class="button-round-corner button-medium" href="<?php echo wp_logout_url( get_home_url() ); ?>">se déconnecter</a>

    </div>

<a class="button-round-corner button-big button-publish-new-dream" href="<?php echo esc_url( get_permalink( get_page_by_path( 'creation-dun-reve' ) ) ); ?>">publier un nouveau rêve <span>H</span></a>

</div>

<div class="container-administration">

</div>

<?php get_footer(); ?>
