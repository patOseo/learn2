<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



$heading = get_field('heading');
$description = get_field('description');


?>


<section class="sec intro">
    <?php if($heading): ?><h1 class="text-center text-uppercase h2"><?= $heading; ?></h1><?php endif; ?>
    <div class="container">
        <?= $description; ?>
    </div>
</section>