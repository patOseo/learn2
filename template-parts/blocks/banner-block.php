<?php
$banner_title = get_field('banner_title');
$button = get_field('button');
$button_link = get_field('button_link');
?> 

<section class="bar-go">
        <div class="align-items-center container-xl d-flex flex-column flex-md-row justify-content-between">
            <h2 class="mb-4 mb-md-0 text-center text-md-start text-uppercase"><?= $banner_title; ?></h2>
            <a href="<?= $button_link; ?>" class="align-items-center cta d-inline-flex text-uppercase white"><?= $button; ?></a>
        </div>
    </section>