<div class="apropos-section apropos-hero">
    <div class="apropos-hero-title"></div>

    <h2><?php the_field( 'a_propos_', 'option' ); ?></h2>

    <a class="button-round-corner button-round-corner-black button-big" href="<?php echo esc_url( get_permalink(  get_page_by_title('inscription', OBJECT , 'page') )  ); ?>">INSCRIPTION</a>

    <h2><?php the_field( 'a_propos_-_2eme_texte', 'option' ); ?></h2>
</div>
