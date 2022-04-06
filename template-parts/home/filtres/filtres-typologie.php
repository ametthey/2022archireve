<section class="section-filtres section-filtres-typologie">
    <!-- Titre -->
    <h4>Typologie de rêve <span class="section-filtres-info section-filtres-info-typologiea" data-info="typologie">i</span></h4>

    <!-- Toutes les typologies de rêve -->
<div class="filtres-typologie-items">
    <?php $typologie_terms = get_terms([
        'taxonomy' => 'typologie',
        'hide_empty' => false,
    ]);?>

    <?php
    foreach( $typologie_terms as $term ) {
        $img = '<img decoding="async" loading="lazy" class="lazyload" src="' . get_stylesheet_directory_uri() . '/dist/assets/images/typologie/' . $term->slug .'-noir.svg">';

        echo '<button class="button-round-corner button-small hover-' . $term->slug . '" data-filter=".' . $term->slug .'" aria-hidden="true">'. $img  . $term->name . '</button>';
    }
    ?>
    </div>

</section>
