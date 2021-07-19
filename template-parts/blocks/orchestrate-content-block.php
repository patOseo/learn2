<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'orchestrate-content-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'orchestrate-content-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$background_color = get_field('background_color');
$heading = get_field('heading');
$description = get_field('description');
$sub_description = get_field('sub_description');



?>
<section class="sec grey intro" style="background-color: <?= $background_color; ?>;" >
    <div class="container">
        <h2 class="text-center text-uppercase mb-md-5"><?= $heading; ?></h2>
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <?= $description; ?>
            </div>
            <div class="acc-public col-md-10 mt-3 mt-md-5">

                <?php

                    if( have_rows('block') ):

                        while( have_rows('block') ) : the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                ?>

                            <div class="acc-box">
                                <div class="acc-head">
                                    <h2 class="text-uppercase"><?= $question; ?></h2>
                                    <span class="arrow"></span>
                                </div>
                                <div class="acc-content">
                                    
                                        <?= $answer; ?>
                                    
                                </div>
                           </div>


                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            
                <div class="col-md-10 text-center mt-2">
                    <p class="mt-0"><?= $sub_description; ?></p>
                </div>
            </div>
        </div>
</section>