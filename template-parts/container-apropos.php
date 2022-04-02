<div class="bandeau" id="container-apropos">
    <div class="container-cover container-cover-apropos">
        <p class="container-cover-title">A PROPOS</p>

        <div class="bandeaux-apropos-credits">
            <p>©ARCHIREVE<?php echo date( 'Y' ); ?></p>
            <span>-</span>
            <a href="mailto: <?php the_field( 'email', 'option' ); ?>" target="_blank">CONTACT</a>
            <span>-</span>
            <a href="<?php the_field( 'instagram', 'option' ); ?>" target="_blank">INSTAGRAM</a>
        </div>
    </div>

    <div class="apropos-container">
        <?php get_template_part( 'template-parts/home/apropos/apropos-hero' ); ?>
        <?php get_template_part( 'template-parts/home/apropos/apropos-explication' ); ?>
        <?php get_template_part( 'template-parts/home/apropos/apropos-footer' ); ?>
    </div>

    <?php get_template_part( 'template-parts/elements/close-white' ); ?>

</div>
