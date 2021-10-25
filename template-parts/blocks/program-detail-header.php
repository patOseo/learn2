
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-header-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$side_heading = get_field('side_heading');
$description = get_field('description');
$image = get_field('image');
$video = get_field('video');
$sidebar = get_field('sidebar');


?>


<section class="sec intro bluewhitegrad">
    <div class="container">
        <h1 class="text-center text-uppercase h2"><?= $heading; ?></h1>
        <div class="row align-items-center">
            <div class="align-self-center col-md-6">
                <h3 class="text-uppercase"><?= $side_heading; ?></h3>
                <p><?= $description; ?></p>
            </div>
            
            <?php if( !empty($sidebar) && $sidebar !== 'option' ) :   ?>

                <div class="col-md-6">
                
                    <?php if(!empty($image)) : ?>
                     <div class="program-img"><?php echo wp_get_attachment_image($image, 'full', "", ["class" => "w-100 h-auto"]); ?><!-- <img src="<?= $image; ?>" alt="" class="w-100"> --></div>
                    <?php endif; ?>

                    <?php if(!empty($video)) : ?>
                        <div class="yt-place shadow">
                           <iframe loading="lazy" width="560" height="315" src="<?= $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                   <?php endif; ?>
               
                </div>
          
           <?php endif; ?>
        
        </div>
    </div>
</section>