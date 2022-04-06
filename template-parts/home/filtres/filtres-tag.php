<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<section class="section-filtres section-filtres-tags">
    <!-- Titre -->
    <h4>Tags</h4>

    <!-- Barre de recherche -->
    <div class="search-bar">
        <input type="" placeholder="RECHERCHER UN TAG..." name="search-tag" id="search-tag"/>
        <?php get_template_part( 'template-parts/elements/loupe' ); ?>
    </div>

    <!-- Sélection de tags -->
    <div class="filtres-tags-items">
        <?php $count = 20; ?>
        <?php foreach( range(1,$count) as $item){ ?>
        <div class="filtres-tags-item filtres-button">
            <span><?php echo generateRandomString(); ?></span>
        </div>
        <?php } ?>
    </div>
</section>
