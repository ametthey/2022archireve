<?php
/*
 * Template Name: formulaire profil
 */
?>
<?php get_header(); ?>
<?php
function prefill_form_field( $value, $field, $form, $args ) {

    $user = wp_get_current_user();
    $username = $user->user_nicename;
    return $username;
}
add_filter( 'af/field/prefill_value/name=post_title', 'prefill_form_field', 10, 4 );
?>

<div class="container-formulaire-profil">

<h1>QUESTIONNAIRE</h1>
<h3>bienvenue <?php echo $username; ?> sur archireve.fr, merci de compléter votre profil en quelques étapes</h3>

</div>

<div class="container-profile"><?php echo do_shortcode(' [advanced_form form="form_624d0033175f7" redirect="/administration" ] '); ?></div>


<?php get_footer(); ?>
