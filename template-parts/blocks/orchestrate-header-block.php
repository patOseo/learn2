<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'orchestrate-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'orchestrate-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$background_image = get_field('background_image');
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$button = get_field('button');
$button_link = get_field('button_link');



?>
<section class="align-items-center d-flex hero justify-content-center publicity-hero" style="background-image: url('<?php echo $background_image; ?>');">
    <div class="container text-center">
        <h1 class="text-uppercase"><?= $heading; ?></h1>
        <h2><?= $sub_heading; ?></h2>
        <button data-toggle="modal" data-target="#contactModal" class="cta d-inline-flex mt-4 mt-md-5 red-white red-white-color shadow white-red-text"><?= $button; ?></button>
    </div>
</section>