    
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'book-call-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'book-call-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$description = get_field('description');
$vedio_link = get_field('vedio_link');
$button = get_field('button');
$button_link = get_field('button_link');
$background_image = get_field('background_image');
$background_color = get_field('background_color');

?>
<section class="sec grey bubble" style="background-image:url('<?php echo $background_image; ?>'); background-color: <?= $background_color;?>">
    <h2 class="text-center text-uppercase text-white"><?= $heading; ?><span class="orange"><?= $sub_heading; ?></span></h2>
    <div class="container">
        <?= $description; ?>
        <div class="row justify-content-center mt-5">
            <?php if($vedio_link): ?>
            <div class="col-md-9">
                <div class="yt-place shadow">
                    <iframe width="560" height="315" src="<?= $vedio_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-12 mt-4 text-center">
                <button class="align-items-center bigger cta d-inline-flex justify-content-center mt-4 orangegrad px-5 py-3 text-uppercase text-white" data-toggle="modal" data-target="#contactModal"><?= $button; ?></button>
            </div>
        </div>
    </div>
</section>