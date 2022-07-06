<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'featured-programs-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-programs-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$heading = get_field('heading');
$background_color = get_field('background_color');






?>

<section class="sec bluegrad">
        <?php if($heading): ?><h2 class="text-center text-uppercase"><?= $heading; ?> </h2><?php endif; ?>
        <div class="container featured">
            <div class="justify-content-around row">          
            <?php

            if( have_rows('boxes') ):

                $count = 0;
                while( have_rows('boxes') ) : the_row();

                    // section 1
                    $heading1 = get_sub_field('heading1');
                    $background_image = get_sub_field('background_image');
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $count++;
                    $color = get_sub_field('heading_color');
            ?>
                    
                  
                  <div class="col-md-6 col-lg-5 box">
                    <?php if($heading1): ?><h3 class="text-center text-uppercase"><?= $heading1; ?> </h3><?php endif; ?>
                    <a href="<?= $link; ?>" class="d-block img-feature">
                        <?php echo wp_get_attachment_image($background_image, 'full'); ?>
                        <h2 class="mb-0 text-center text-uppercase" <?php if($color): ?>style="color:<?php echo $color; endif; ?>"><?= $title; ?> </h2>
                    </a>
                </div>

            
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
            