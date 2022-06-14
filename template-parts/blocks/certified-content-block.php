<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'certified-content-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'certified-content-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');




?>


<section class="sec get-acc">
    <div class="container">
     
        <?php  if(!empty($heading) && !empty($description) ) : ?>
     
            <h2 class="text-uppercase"><?= $heading; ?></h2>
            <p class="bigger"><?= $description; ?></p>
     
        <?php endif; ?>
     
        <div class="row <?= $className; ?>">
            <div class="col-md-8 col-xl-9 pe-xl-5">
                <?php

                    if( have_rows('questions') ):

                        while( have_rows('questions') ) : the_row();
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                ?>
                    <div class="acc-box">
                        <div class="acc-head">
                            <h2><?= $question; ?></h2>
                            <span class="arrow"></span>
                        </div>
                        <div class="acc-content" style="display: none;">
                            <?= $answer; ?>
                        </div>
                    </div>

                <?php
                        endwhile;

                    endif;
                ?>

                
            </div>
            <div class="col-md-4 col-xl-3">

                <div class="pic">
                    <?php echo wp_get_attachment_image($image_1, 'full', '', array('class' => 'w-100')); ?>
                </div>
                <div class="pic">
                    <?php echo wp_get_attachment_image($image_2, 'full', '', array('class' => 'w-100')); ?>
                </div>
            </div>
        </div>
    </div>
</section>