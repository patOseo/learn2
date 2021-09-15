<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'color_switcher' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'color_switcher';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$paragraph = get_field('paragraph');
$vedio_link = get_field('vedio_link');
$heading_2 = get_field('heading_2');
$paragraph_2 = get_field('paragraph_2');
$background_image_left = get_field('background_image_left');
$heading_3 = get_field('heading_3');
$paragraph_3 = get_field('paragraph_3');
$button_1 = get_field('button_1');
$button_link_1 = get_field('button_link_1');
$background_image_right = get_field('background_image_right');
$heading_4 = get_field('heading_4');
$paragraph_4 = get_field('paragraph_4');
$button_2 = get_field('button_2');
$button_link_2 = get_field('button_link_2');
$button_3 = get_field('button_3');
$button_link_3 = get_field('button_link_3');
$number = get_field('number');
$paragraph_5 = get_field('paragraph_5');




?>

<section class="jumbo sec bluebg">
    <h1 class="text-uppercase text-center"> <?php echo $heading; ?></h1>
    <h2 class="text-uppercase text-center"> <?php echo $sub_heading; ?></h2>

    <div class="jumbo-content container">
        <div class="row">

            <div class="col-md-7 pe-lg-5">
                <p> <?php echo $paragraph; ?></p>
            </div>
            <div class="col-md-5">
                <div class="yt-place">
                    <?php if(!empty($vedio_link)) : ?>
                        <iframe width="560" height="315" src="<?= $vedio_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?> 
                    
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-uppercase text-center"> <?php echo $heading_2; ?></h2>
    <div class="jumbo-content container">
        <p> <?php echo $paragraph_2; ?></p>
    </div>

    <div class="promoted-link container-xl">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="align-items-center box d-flex flex-column h-100 justify-content-between text-center" style="background-image:url('<?php echo $background_image_left; ?>');">
                    <div class="copy flex-grow-1">
                        <h2><?php echo $heading_3; ?></h2>
                        <p><?php echo $paragraph_3; ?></p>
                    </div>
                    <a href="<?= $button_link_1; ?>" class="align-items-center blue cta d-inline-flex mt-4 text-uppercase text-white" target="_blank" rel="noopener,noreferrer"><span aria-hidden="true" class="icon">
                     <i class="fa fa-book" aria-hidden="true"></i> </span><?php echo $button_1; ?></a>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="align-items-center box d-flex flex-column h-100 justify-content-between text-center" style="background-image:url('<?php echo $background_image_right; ?>');">
                    <div class="copy flex-grow-1">
                        <h2><?= $heading_4; ?></h2>
                        <p><?= $paragraph_4; ?></p>
                    </div>
                    <a href="<?= $button_link_2; ?>" class="align-items-center cta d-inline-flex gold mt-4 text-uppercase text-white"><span aria-hidden="true" class="icon">
                         <i class="fa fa-music" aria-hidden="true"></i> </span><?php echo $button_2; ?></a>
                </div>
            </div>
        </div>
    </div>
     <div class="text-center">
        <a href="<?= $button_link_3; ?>" class="align-items-center cta d-inline-flex text-uppercase white mb-4"><?= $button_3; ?></a>
    </div>
    <div class="shadow-text text-center">
        <div class="counter"><?= $number; ?></div>
        <p class="text-uppercase"><strong><?= $paragraph_5; ?></strong></p>
    </div>
</section>

