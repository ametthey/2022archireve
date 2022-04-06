<?php
    $term_image = $term->slug;
    if ( $term_image ) {
?>
    <img decoding="async" loading="lazy" class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/typologie/<?php echo $term->slug; ?>.svg">
<?php
    }
?>
