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
                        <div class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
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