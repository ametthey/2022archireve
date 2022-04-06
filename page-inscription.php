<?php
/*
 * Template Name: inscription
 */
?>
<?php get_header(); ?>


<div class="container-form">
    <h1>inscription</h1>

    <h3>ENTRER VOTRE PSEUDO ET VOTRE ADRESSE MAIL POUR CRÉER VOTRE COMPTE</h3>

    <p>nous vous conseillons d’utiliser un pseudo le plus éloigné de votre vie personnelle possible (pas de présence de nom de famille, de prénom, de ville, etc.), afin de renforcer votre anonymat.</p>

    <?php echo do_shortcode('[advanced_form form="form_6247f5ba8d7dd" redirect="/inscription-message-de-remerciements/" id="formulaire-inscription"] '); ?>

    <div class="logged-in-user">
        <p>Vous avez déjà un compte ? Aller sur la page de <a href="<?php echo esc_url(  get_permalink( get_page_by_title( 'connexion', OBJECT , 'page') )  ); ?>">connexion</a></p>
    </div>
</div>

<?php get_footer(); ?>
