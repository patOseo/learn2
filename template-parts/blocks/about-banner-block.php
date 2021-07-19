
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'about-banner-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-banner-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$paragraph = get_field('paragraph');
$background_color = get_field('background_color');

?>

<section class="sec gray" style="background-color: <?= $background_color; ?>;">
        <h2 class="text-center text-uppercase text-white"><?php echo $heading; ?></h2>
        <div class="container">
            <?php echo $paragraph; ?>
        </div>
    </section>