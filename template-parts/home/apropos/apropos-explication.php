<div class="apropos-section apropos-explication">
<?php if ( have_rows( 'tableau_#1', 'option' ) ) : ?>
	<?php while ( have_rows( 'tableau_#1', 'option' ) ) : the_row(); ?>

    <!-- QUESTIONNAIRE UTILISATEUR -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span>1</span><span>LE QUESTIONNAIRE UTILISATEUR</span></div>
        <div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'le_questionnaire_utilisateur' ); ?></div></div>
    </div>

    <!-- LES MODALITÉS DU SOMMEIL -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span>2</span><span>LES MODALITÉS DU SOMMEIL</span></div>
		<div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'les_modalites_du_sommeil' ); ?></div></div>
    </div>

    <!-- LUCIDITÉ -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span>3</span><span>LUCIDITÉ</span></div>
		<div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'lucidite' ); ?></div></div>
    </div>

    <!-- LES TYPOLOGIES DE RÊVES -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span>4</span><span>LES TYPOLOGIES DE RÊVES</span></div>
		<div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'les_typologies_de_reves' ); ?></div></div>
    </div>

    <!-- LE RAPPEL -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span>5</span><span>LE RAPPEL</span></div>
		<div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'le_rappel' ); ?></div></div>
    </div>

	<?php endwhile; ?>
<?php endif; ?>

    <p class="explication-tableau-1-texte"><?php the_field( 'texte_apres_le_1er_tableau', 'option' ); ?></p>


<?php if ( have_rows( 'tableau_#2', 'option' ) ) : ?>
	<?php while ( have_rows( 'tableau_#2', 'option' ) ) : the_row(); ?>
    <!-- QUESTIONNAIRE UTILISATEUR -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span class="gg">b</span><span>LE QUESTIONNAIRE UTILISATEUR</span></div>
        <div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'le_questionnaire_utilisateur' ); ?></div></div>
    </div>

    <!-- LA RECHERCHE -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span class="gg">g</span><span>LA RECHERCHE</span></div>
		<div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'la recherche' ); ?></div></div>
    </div>

    <!-- L'ÉQUIPE -->
    <div class="explication-toggle-item">
        <div class="explication-toggle-item-header"><span class="gg">H</span><span>L'ÉQUIPE</span></div>
		<div class="explication-toggle-item-content"><div class="explication-wrapper-content"><?php the_sub_field( 'lequipe' ); ?></div></div>
    </div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
