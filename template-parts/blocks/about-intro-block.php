
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'about-intro-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-intro-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$paragraph = get_field('paragraph');
$vedio_link = get_field('vedio_link');
$paragraph_3 = get_field('paragraph_3');
$button = get_field('button');
$button_link = get_field('button_link');


?>

<section class="sec intro">
        <h2 class="text-center text-uppercase"><?php echo $heading; ?></h2>
        <div class="container">
            <?= $paragraph; ?>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="yt-place shadow">
                        <iframe width="560" height="315" src="<?= $vedio_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                    <a href="<?= $button_link; ?>" class="align-items-center bigger cta d-inline-flex justify-content-center mt-4 orangegrad px-5 py-3 text-uppercase text-white"> <?= $button; ?> </a>
                </div>
            </div>
        </div>
    </section>