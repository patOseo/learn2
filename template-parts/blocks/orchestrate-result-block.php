<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'orchestrate-result-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'orchestrate-result-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');
$sub_heading = get_field('sub_heading');


?>
<section class="sec intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="text-center text-uppercase mb-md-5"><?= $heading; ?></h2>
                <?= $description; ?>
                <h3 class="text-uppercase"><?= $sub_heading; ?>
                </h3>
            </div>
            <div class="acc-public col-md-10 mt-3 mt-md-5">

                <?php

                    if( have_rows('blocks') ):

                        while( have_rows('blocks') ) : the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                ?>
                    <div class="acc-box">
                        <div class="acc-head">
                            <h2 class="text-uppercase"><?= $question;?></h2>
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
        </div>
    </div>
</section>