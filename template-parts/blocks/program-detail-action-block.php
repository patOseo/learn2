
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-action-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-action-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$background_image = get_field('background_image');
$button = get_field('button');
$button_link = get_field('button_link');



?>


<section class="align-items-center d-flex parallax justify-content-center" style="background-image: url(<?= $background_image; ?>);">
    <div class="container my-5 text-center">
        <h2 class="text-uppercase text-white bigger"><?= $heading; ?></h2><br><br>
        <?php if($button_link): ?><a href="<?= $button_link; ?>" class="bigger cta d-inline-flex justify-content-center orangegrad px-5 py-3 text-uppercase text-white"><?= $button; ?></a><?php endif; ?>
</section>


