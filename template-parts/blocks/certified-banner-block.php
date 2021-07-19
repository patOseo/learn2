<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'certified-banner-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'certified-banner-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$button = get_field('button');
$button_link = get_field('button_link');


?>


<section class="bar-go greygrad no-bod">
    <div class="align-items-center container-xl d-flex flex-column flex-md-row justify-content-between">
        <h2 class="mb-4 mb-md-0 text-uppercase"><?= $heading; ?></h2>
        <a href="<?= $button_link; ?>" target="_blank" class="align-items-center cta d-inline-flex text-uppercase white"><?= $button; ?></a>
    </div>
</section>