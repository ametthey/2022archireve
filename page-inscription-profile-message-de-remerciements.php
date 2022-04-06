<?php
/*
 * Template Name: formulaire profil merci
 */
?>
<?php get_header(); ?>
<?php
$user = wp_get_current_user();
$username = $user->user_nicename;
$editor = current_user_can( 'editor' );
?>

<div class="container-formulaire-profil">

<p>Super ! On en sait un peu plus sur vous !

C'est le moment de poster votre 1er rêve !

Cliquer sur le <a class="underline" href=" <?php echo esc_url(  get_permalink( get_page_by_title( 'administration', OBJECT , 'page') )  ); ?> ">lien</a>
</p>

</div>


<?php get_footer(); ?>
