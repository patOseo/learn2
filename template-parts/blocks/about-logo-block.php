<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'about-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$logo = get_field('logo');
$background_image = get_field('background_image');
$heading = get_field('heading');



?>

<section class="hero align-items-center d-flex" style="background-image:url('<?php echo $background_image; ?>');
">
    <div class="container-xl">
        <div class="img-hero">
        	<?php echo wp_get_attachment_image($logo, 'full'); ?>
        </div>
            
        <h1 class="text-uppercase text-white"><?php echo $heading; ?></h1>
    </div>
</section>

