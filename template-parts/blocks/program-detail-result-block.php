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
$button = get_field('button');
$button_link = get_field('button_link');


?>


<section class="sec grey program-meta">
    <div class="container text-center">
        <h2 class="text-uppercase h1"><?= $heading; ?></h2>
        <?= $description; ?>
        <?php if($button_link): ?><a href="<?= $button_link;?>" class="bigger cta d-inline-flex justify-content-center orangegrad px-5 py-3 text-uppercase text-white"><?= $button; ?></a><?php endif; ?>
    </div>
</section>