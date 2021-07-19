
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'content-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'content-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$description = get_field('description');


?>


<section class="sec content">
    <div class="container">
      
        <?php

        // check if the repeater field has rows of data
        if( have_rows('content_block') ):

            // loop through the rows of data
            while ( have_rows('content_block') ) : the_row();

                // display a sub field value
                the_sub_field('sub_field_name');

        ?>
                
            <h2 class="text-center text-uppercase"><?= the_sub_field('heading'); ?></h2>
            <?= the_sub_field('description'); ?>

    

        <?php
            endwhile;
            endif;

        ?>

    </div>
</section>