
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-content-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-content-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 
$description = get_field('description');


?>

<section class="sec content pt-0">
            <div class="container">
                <?= $description; ?>
            </div>
</section>