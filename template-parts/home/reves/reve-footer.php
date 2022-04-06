<div class="reve-item-footer">
    <div class="reve-footer-typologie border-right-<?php echo $term->slug; ?>">
        <?php get_template_part( "template-parts/elements/typologie" ); ?>
    </div>

    <div class="reve-footer-tags">

        <?php $count = 20; ?>
        <?php foreach( range(1,$count) as $item){ ?>
        <div class="reve-tags-item">
            <span>parfait</span>
        </div>
        <?php } ?>

    </div>

    <div class="reve-footer-lucidite border-left-<?php echo $term->slug; ?>"><span class="button-round-corner button-no-hover button-medium border-<?php echo $term->slug; ?> color-<?php echo $term->slug; ?>"><?php echo $luc->name; ?></span></div>
</div>
