<div class="bandeau" id="container-reves">

    <!-- TITRE DU BANDEAU -->
    <div class="container-cover container-cover-reves">
        <p class="container-cover-title">LES RÊVES</p>
    </div>


    <!-- LES REVES -->
    <div id="wrapper-reves">

        <?php $count = 10; ?>
        <?php foreach( range(1,$count) as $item){ ?>
        <div class="reve-item">
            <?php get_template_part( 'template-parts/home/reves/reve-header' ); ?>
            <?php get_template_part( 'template-parts/home/reves/reve-content' ); ?>
            <?php get_template_part( 'template-parts/home/reves/reve-footer' ); ?>
        </div>
        <?php } ?>


        <!-- MODAL POUR TELECHARGER LES REVES -->
        <?php get_template_part( 'template-parts/home/reves/reve-telecharger' ); ?>
    </div>
</div>
