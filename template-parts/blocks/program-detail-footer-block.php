<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-footer-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-footer-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$background_image = get_field('background_image');
$button = get_field('button');
$button_link = get_field('button_link');

?>

<section class="d-flex get-cta justify-content-center" style="background-image: url(<?= $background_image; ?>);">
       <a href="<?= $button_link; ?>" class="bigger cta d-inline-flex justify-content-center orangegrad px-md-5 py-3 text-nowrap text-uppercase text-white"><?= $button; ?></a>
</section>