<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-faq-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-faq-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');



?>


<section class="sec accordions">
        <div class="container-xl">
            <h2 class="text-center text-uppercase">FAQ</h2>
            <div class="row">

                <?php
                    if( have_rows('blocks') ):
                        while( have_rows('blocks') ) : the_row();

                    $heading = get_sub_field('heading');

                ?>
                    <div class="col-md-4 mb-4 mb-md-0">
                    <h3><?= $heading; ?></h3>


                        <?php
                            if( have_rows('sub_blocks') ):
                                while( have_rows('sub_blocks') ) : the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');

                        ?>
                            <div class="acc-box">
                                <div class="acc-head align-items-center d-flex">
                                    <h4><?= $question; ?></h4><span class="arrow"></span>
                                </div>
                                <div class="acc-content">
                                    <p><?= $answer; ?></p>
                                </div>
                            </div>

                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div> 
                <?php
                        endwhile;
                    endif;
                ?>
                    
                </div>              
            </div>
        </div>
    </section>




