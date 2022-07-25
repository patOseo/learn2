
<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'contact-form-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-form-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// section 1
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$left_side_image = get_field('left_side_image');
$left_side_heading = get_field('left_side_heading');
$left_side_description = get_field('left_side_description');
$contact_form_shortcode = get_field('contact_form_shortcode');
$background_image_left = get_field('background_image_left');


?>

<section class="sec contact pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4 pe-xl-5">
                    <div class="img-person w-100 mx-auto">
                        <img src="<?= $left_side_image; ?>" alt="Learn2 Logo" class="w-auto">
                    </div>
                    <div class="text">
                        <?= $left_side_heading; ?>
                        <?= $left_side_description; ?>
                        
                    </div>
                    
                        
                </div>
                    <div class="col-md-7 col-lg-8 contact-form">
                    <?= do_shortcode(''.$contact_form_shortcode.''); ?>

                </div>

                
            </div>
        </div>
    </section>
