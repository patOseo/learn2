<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-result-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-result-block';
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


?>


<section class="sec grey program-meta">
    <div class="container text-center">
        <p class="text-uppercase h1"><?= $heading; ?></p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?= $description; ?>
            </div>
        </div>
    </div>
</section>