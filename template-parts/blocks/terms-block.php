
<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'terms-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'terms-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');


?>

<section class="sec content-only">
        <div class="container">
            <h1 class="text-uppercase"><?= $heading; ?></h1>
            <?= $description; ?>
        </div>
    </section>