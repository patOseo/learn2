<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'contact-description-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'align-items-center';
if( !empty($block['className']) ) {
    $className = $block['className'];
}


$background = get_field('background');

$style = '';

if($background == 'color' || $background == 'image'){
 $style = $background == 'color' ? "style='background-color:".get_field('background_color')."'" : 'style="background-image: url('.get_field('background_image').');"'; 
} 

// section 1
$description = get_field('description');


?>

<section class="<?= $className; ?>" <?= $style; ?>>
        <?= $description; ?>
</section>