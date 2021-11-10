<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-client-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-client-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');



?>


<section class="sec col-meta">
    <h2 class="text-uppercase text-center"><?= $heading; ?></h2>
    <div class="container">
        <div class="row text-center">
            
            <?php


            if( have_rows('blocks') ):


                while( have_rows('blocks') ) : the_row();

               
                    $description = get_sub_field('description');
                    $user = get_sub_field('user');
                    $bio = get_sub_field('bio');
            ?>
                    <div class="col-md-4 box">
                        <div class="icon">
                            <svg width="42" x="0px" y="0px" viewBox="-51 -56 496 512">
                            <path fill="#f25000" d="M197-48C60-48-51,63-51,200S60,448,197,448s248-111,248-248S334-48,197-48z M197,48c48.6,0,88,39.4,88,88s-39.4,88-88,88
                                s-88-39.4-88-88S148.4,48,197,48z M197,392c-58.7,0-111.3-26.6-146.5-68.2C69.3,288.4,106.1,264,149,264c2.4,0,4.8,0.4,7.1,1.1
                                c13,4.2,26.6,6.9,40.9,6.9s28-2.7,40.9-6.9c2.3-0.7,4.7-1.1,7.1-1.1c42.9,0,79.7,24.4,98.5,59.8C308.3,365.4,255.7,392,197,392z"/>
                            </svg>
                        </div>
                        <?= $description; ?>
                        <p class="meta-user"><strong class="name"><?= $user; ?></strong>,<br> <?= $bio; ?></p>
                    </div>
            <?php
                endwhile;
            endif;
            ?>

            
        </div>
    </div>
</section>