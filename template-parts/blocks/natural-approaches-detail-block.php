
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'natural-approaches-detail-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'natural-approaches-detail-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$background_image= get_field('background_image');
$heading = get_field('heading');
$vedio = get_field('vedio');
$description = get_field('description');
$button = get_field('button');
$button_link = get_field('button_link');




?>

<?php if(!empty($background_image)) : ?>
<style type="text/css">
	body{
	    background: url(<?= $background_image; ?>);
	}
</style>
<?php endif; ?>


<section class="hero align-items-center d-flex landing-hero">
    <div class="container-xl">
        <h1 class="text-center text-uppercase text-white"><?= $heading; ?></h1>
    </div>
</section>
<section class="landing-content pt-0 sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="yt-place shadow">
                    <iframe width="560" height="315" src="<?= $vedio; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-12 mt-4 text-center">
                <?= $description; ?>
            </div>
            <div class="col-12 mt-4 text-center">
                <a href="<?= $button_link; ?>" class="align-items-center bigger cta d-inline-flex justify-content-center mt-4 orangegrad px-md-5 py-3 text-uppercase text-white"><?= $button; ?></a>
            </div>
        </div>
    </div>
</section>
