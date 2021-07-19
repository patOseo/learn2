<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'book-ready-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'book-ready-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');
$button = get_field('button');
$button_link = get_field('button_link');


?>

<section class="sec orangegrad book-call">
    <div class="container text-center">
        <h2 class="text-uppercase"><?= $heading; ?></h2>
        <p><?= $description; ?></p>
        <a href="<?= $button_link; ?>" class="bigger cta d-inline-flex justify-content-center orangegrad shadow px-5 py-3 text-uppercase text-white"><?= $button; ?> </a>
    </div> 
</section>