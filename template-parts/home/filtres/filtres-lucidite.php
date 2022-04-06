<section class="section-filtres section-filtres-lucidite">
    <!-- Titre -->
<h4>Niveau de lucidité <span class="section-filtres-info section-filtres-info-lucidite" data-info="lucidite">i</span></h4>

    <!-- Tout les niveaux de lucidités -->
    <div class="filtres-lucidite-items">
    <?php $lucidite_terms = get_terms([
        'taxonomy' => 'lucidite',
        'hide_empty' => false,
    ]);?>

    <?php

    foreach( $lucidite_terms as $term ) {
        echo '<button class="button-round-corner button-small ' . $term->slug . '" data-filter=".' . $term->slug .'" aria-hidden="true">' . $term->name . '</button>';
    }
    ?>
    </div>
</section>
