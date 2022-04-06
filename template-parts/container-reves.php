<div class="bandeau" id="container-reves">

    <!-- TITRE DU BANDEAU -->
    <div class="container-cover container-cover-reves">
        <p class="container-cover-title">LES RÊVES</p>
    </div>


    <!-- LES REVES -->
    <div id="wrapper-reves">
        <?php $terms = get_terms([
            'taxonomy' => 'typologie',
            'hide_empty' => false,
        ]);?>
        <?php $lucs = get_terms([
            'taxonomy' => 'lucidite',
            'hide_empty' => false,
        ]);?>
        <?php // $count = 1; ?>
        <?php // foreach( range(1,$count) as $item){ ?>
            <?php foreach( $terms as $term){ ?>
                <?php foreach( $lucs as $luc){ ?>
                    <?php
                    set_query_var( 'term', $term );
                    set_query_var( 'luc', $luc );
                    ?>
                    <div class="reve-item border-<?php echo $term->slug ?>">
                        <?php get_template_part( 'template-parts/home/reves/reve-header' ); ?>
                        <?php get_template_part( 'template-parts/home/reves/reve-content' ); ?>
                        <?php get_template_part( 'template-parts/home/reves/reve-footer' ); ?>
                    </div>
                    <?php } ?>
            <?php } ?>
        <?php // } ?>


        <!-- MODAL POUR TELECHARGER LES REVES -->
        <?php get_template_part( 'template-parts/home/reves/reve-telecharger' ); ?>
    </div>
</div>
