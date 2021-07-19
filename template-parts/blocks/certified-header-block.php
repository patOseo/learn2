<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'certified-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'certified-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$heading = get_field('heading');
$description = get_field('description');


?>


<section class="sec orangegrad">
    <div class="container-xl text-center">
        <h2 class="text-uppercase">WANT TO EXPAND YOUR OPPORTUNITIES BY FACILITATING AWARD-WINNING LEARN2 LIVE EXPERIENCES?</h2>
        <?= $description; ?>
    </div>
</section>