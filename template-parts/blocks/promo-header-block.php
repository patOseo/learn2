<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'promo-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'promo-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$background_image = get_field('background_image');
$front_image = get_field('front_image');
$description = get_field('description');
$button = get_field('button');
$button_link = get_field('button_link');


?>
<section class="promotional-hero" style="background-image: url(<?= $background_image; ?>);">
    <div class="container-xl text-center">
        <?= $description; ?>
        <a href="<?= $button_link; ?>" class="align-items-center bigger bod cta d-inline-flex px-5 shadow text-uppercase white"><?= $button; ?></a>
        <div class="client-list-pic">
            <img src="<?= $front_image; ?>" alt="" class="w-100">
        </div>
    </div>
</section>