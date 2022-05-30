<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'promo-footer-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'promo-footer-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');
$background_color = get_field('background_color');
$button = get_field('button');
$button_link = get_field('button_link');
$sub_description = get_field('sub_description');
$image = get_field('image');


?>
<section class="sec content grey">
    <div class="container">
        <h2 class="text-center text-uppercase"><?= $heading; ?></h2>
        <?= $description; ?>
        <div class="high-cta text-center"><a href="<?= $button_link; ?>" class="bigger bodred cta d-inline-flex grey px-5 red-white-text text-uppercase"><?= $button; ?></a></div>
        <?= $sub_description; ?>
        <div class="client-list-pic">
            <img src="<?= $image; ?>" alt="" class="w-100 h-auto">
        </div>
    </div>
</section>
