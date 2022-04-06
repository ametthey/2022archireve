<section class="section-filtres section-filtres-periode">
    <!-- Titre -->
    <h4>Période</h4>

    <!-- Toutes les typologies de rêve -->
    <div id="period-slider" class="glide">
      <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
            <li class="glide__slide">
                <div id="filtres-period-calendar" data-year="2022">
                    <h4>2022</h4>
                    <?php get_template_part( 'template-parts/home/filtres/period-calendar' ); ?>
                </div>
            </li>
            <li class="glide__slide">
                <div id="filtres-period-calendar" data-year="2023">
                    <h4>2023</h4>
                    <?php get_template_part( 'template-parts/home/filtres/period-calendar' ); ?>
                </div>
            </li>
            <li class="glide__slide">
                <div id="filtres-period-calendar" data-year="2024">
                    <h4>2024</h4>
                    <?php get_template_part( 'template-parts/home/filtres/period-calendar' ); ?>
                </div>
            </li>
        </ul>
      </div>
    <div class="glide__arrows glide__arrows_prev" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <?php get_template_part( 'template-parts/elements/arrow-left' ); ?>
        </button>
    </div>
    <div class="glide__arrows glide__arrows_next" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <?php get_template_part( 'template-parts/elements/arrow-right' ); ?>
        </button>
    </div>
    </div>
</section>
