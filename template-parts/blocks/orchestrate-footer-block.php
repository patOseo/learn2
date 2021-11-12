<?php


$background_image = get_field('background_image');
$heading = get_field('heading');
$button = get_field('button');
$button_link = get_field('button_link');


?>

    <section class="align-items-center d-flex hero justify-content-center publicity-hero bottom" style="background-image: url('<?= $background_image; ?>');">
        <div class="container text-center">
            <h2 class="text-uppercase"><?= $heading; ?></h2>
            <button data-toggle="modal" data-target="#contactModal" class="cta d-inline-flex mt-4 mt-md-5 red-white red-white-color shadow white-red-text"><?= $button; ?></button>
        </div>
    </section>