<?php
/*
 * Template Name: formulaire profil
 */
?>
<?php get_header(); ?>
<?php
$user = wp_get_current_user();
$username = $user->user_nicename;
$editor = current_user_can( 'editor' );
?>

<div class="container-formulaire-profil">

<h1>QUESTIONNAIRE</h1>
<h3>bienvenue <?php echo $username; ?> sur archireve.fr, merci de compléter votre profil en quelques étapes</h3>

</div>

<div class="container-profile"><?php echo do_shortcode(' [advanced_form form="form_6248328569951"] '); ?></div>

<?php get_footer(); ?>
