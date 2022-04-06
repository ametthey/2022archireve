<div id="container-filtres-info">

    <div id="wrapper-filtres-info">

        <?php get_template_part( 'template-parts/elements/close-black' ); ?>

        <div class="wrapper-filtres-info-content">

            <div class="info-content-taxonomy info-content-lucidite">
                <h3>Niveau de lucidité</h3>

                <?php if ( have_rows( 'lucidite', 'option' ) ) : ?>
                    <?php while ( have_rows( 'lucidite', 'option' ) ) : the_row(); ?>
                        <p class="info-description"><?php the_sub_field( 'description' ); ?></p>

                        <?php $lucidite_terms = get_terms([
                            'taxonomy' => 'lucidite',
                            'hide_empty' => false,
                        ]);?>

                        <?php

                        foreach( $lucidite_terms as $term ) {
                            $field = get_sub_field( $term->slug );
                            echo '<div class="info-content-lucidite-item info-content-taxonomy-item">';
                            echo '<button class="button-round-corner button-medium button-background-' .  $term->slug . '">' . $term->name . '</button>';
                            echo '<p>' . $field . '</p>';
                            echo '</div>';
                        }
                        ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="info-content-taxonomy info-content-typologie">

                <h3>Typologie de rêve</h3>

                <?php if ( have_rows( 'typologie', 'option' ) ) : ?>
                    <?php while ( have_rows( 'typologie', 'option' ) ) : the_row(); ?>
                        <p class="info-description"><?php the_sub_field( 'descritption' ); ?></p>

                        <?php $typologie_terms = get_terms([
                            'taxonomy' => 'typologie',
                            'hide_empty' => false,
                        ]);?>

                        <?php

                        foreach( $typologie_terms as $term ) {
                            $field = get_sub_field( $term->slug );
                            echo '<div class="info-content-typologie-item info-content-taxonomy-item">';
                            echo '<button class="button-round-corner button-medium button-background-'. $term->slug . '">' . $term->name . '</button>';
                            echo '<p>' . $field . '</p>';
                            echo '</div>';
                        }
                        ?>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </div>
    </div>

</div>
