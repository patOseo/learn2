<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'program-detail-slider-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'program-detail-slider-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$button = get_field('button');
$button_link = get_field('button_link');


?>

    <section class="sec orangegrad slide">
        <div class="container text-center">
            <p class="text-center text-uppercase h2"><?= $heading;?></p>
            <div class="owl-carousel owl-loaded owl-drag">
                <?php
                    if( have_rows('blocks') ):
                        while( have_rows('blocks') ) : the_row();

                    $heading = get_sub_field('heading');
                    $description = get_sub_field('description');

            ?>
                    <div class="circle">
                        <p class="align-items-center d-flex justify-content-center h2"><?= $heading; ?></p>
                        <p><?= $description; ?></p>
                    </div>
                
                <?php
                        endwhile;
                    endif;
                ?>


            </div>
            <?php if($button_link): ?>
            <a href="<?= $button_link; ?>" class="bigger cta d-inline-flex justify-content-center orangegrad px-5 py-3 text-uppercase text-white"><?= $button; ?></a>
            <?php endif; ?>
        </div>
    </section>

 




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script type="text/javascript">
    if ($('.owl-carousel').length > 0) {
        $(".owl-carousel").owlCarousel({
            // dotsEach: true,
            autoplay: true,
            margin: 50,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3,
                }
            }
        });
    }
   </script>




                
           