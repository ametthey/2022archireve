<div class="bandeau" id="container-filtres">

    <!-- COVER -->
    <div class="container-cover container-cover-filtres">
        <p class="container-cover-title">FILTRES</p>
    </div>

    <!-- ENSEMBLES DES FILTRES -->
    <div class="wrapper-filtres">
        <?php get_template_part( 'template-parts/home/filtres/filtres-tag' ); ?>
        <?php get_template_part( 'template-parts/home/filtres/filtres-lucidite' ); ?>
        <?php get_template_part( 'template-parts/home/filtres/filtres-typologie' ); ?>
        <?php get_template_part( 'template-parts/home/filtres/filtres-periode' ); ?>
        <?php get_template_part( 'template-parts/home/filtres/filtres-reset' ); ?>
    </div>

    <!-- BOUTON CLOSE -->
    <div class="filtres-close">
        <?php get_template_part( 'template-parts/elements/close-black' ); ?>
    </div>
</div>

<?php get_template_part( 'template-parts/home/filtres/filtres-info' ); ?>
