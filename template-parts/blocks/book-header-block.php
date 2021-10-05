
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'book-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'book-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$background_image = get_field('background_image');



?>

<section class="sec greyblue bubble book-hero" style="background-image: url(<?= $background_image; ?>);">
    <div class="container-xl text-center text-uppercase">
        <h1 class="h2"><?= $heading; ?></h1>
        <h3><?= $sub_heading; ?></h3>
    </div>
</section>