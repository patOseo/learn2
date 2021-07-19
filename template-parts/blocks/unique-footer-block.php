<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'unique-footer-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'unique-footer-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');
$vedio_link = get_field('vedio_link');
$button = get_field('button');
$button_link = get_field('button_link');


?>

<section class="sec">
    <h2 class="text-center text-uppercase"><?= $heading; ?></h2>
    <div class="container text-center">
        <?= $description;?>
        <div class="row justify-content-center mt-5">
            <div class="col-md-9">
                <div class="yt-place shadow">
                    <iframe width="560" height="315" src="<?= $vedio_link;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-12 mt-4 text-center">
                <a href="<?= $button_link; ?>" class="align-items-center bigger cta d-inline-flex justify-content-center mt-4 orangegrad px-5 py-3 text-uppercase text-white"><?= $button; ?></a>
            </div>
        </div>
    </div>
</section>