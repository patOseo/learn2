<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'book-form-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'book-form-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$left_side_image = get_field('left_side_image');
$left_side_description = get_field('left_side_description');
$right_side_description = get_field('right_side_description');
$book_form_shortcode = get_field('book_form_shortcode');


?>

<section class="sec contact bubble">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-4 pe-xl-5">
                <div class="img-person mx-auto">
                    <?php echo wp_get_attachment_image($left_side_image, 'full', '', array('class' => 'w-100')); ?>
                </div>
                <div class="text">
                    <?= $left_side_description; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 contact-form">
                    <?= $right_side_description; ?>
                    <?= do_shortcode(''.$book_form_shortcode.''); ?>
            </div>
        </div>
    </div>
</section>

            