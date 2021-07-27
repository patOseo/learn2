<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'unique-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'unique-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$background_image = get_field('background_image');
$heading = get_field('heading');
$description = get_field('description');
$button = get_field('button');
$button_link = get_field('button_link');


?>

<section class="align-items-center d-flex hero justify-content-center unique-hero" style="background-image: url(<?= $background_image; ?>);">
    <div class="container text-center">
        <h1 class="text-uppercase"><?= $heading; ?></h1>
        <?= $description; ?>
        <a href="<?= $button_link; ?>" class="cta d-inline-flex mt-4 red-white red-white-color white-red-text"><?= $button; ?></a>
    </div>
</section>