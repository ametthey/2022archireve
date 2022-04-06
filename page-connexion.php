<?php
/*
 * Template Name: connexion
 */
?>
<?php get_header(); ?>

<div class="container-form">
    <h1>connexion</h1>

    <h3>entrer votre adresse mail ou votre pseudo pour vous connecter</h3>

    <form method="post" action="http://2022archireve.yo/wp-login.php" id="loginform" name="loginform">

        <div class="container-form-element">
            <label for="user_login">Mail / Pseudo</label>
            <input type="text" tabindex="10" size="20" value="" id="user_login" name="log">
        </div>

        <div class="container-form-element">
            <label for="user_pass">Mot de passe</label>
            <input type="password" tabindex="20" size="20" value="" id="user_pass" name="pwd">
        </div>

        <input type="submit" tabindex="100" value="Connexion" class="button-round-corner button-medium" id="wp-submit" name="wp-submit">

    </form>
</div>

<?php get_footer(); ?>
