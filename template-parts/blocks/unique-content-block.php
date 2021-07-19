<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'unique-content-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'unique-content-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$vedio_link = get_field('vedio_link');


?>

<section class="sec content">
    <h2 class="text-center text-uppercase"><?= $heading; ?></h2>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-9">
                <div class="yt-place shadow">
                    <iframe width="560" height="315" src="<?= $vedio_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

