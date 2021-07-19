<?php if( have_rows('contact') ): ?>
    <?php while( have_rows('contact') ): the_row(); 

        // Get sub field values.
        $title       = get_sub_field('title');
        $description = get_sub_field('description');
        $button      = get_sub_field('button');
        $button_link = get_sub_field('button_link');
        $left_side_image = get_sub_field('left_side_image');

        ?>

        <section class="contact-meta">
            <div class="social container">
                <ul class="align-items-center justify-content-between nav">
                    
                    <?php
                    // Check rows exists.
                    if( have_rows('social_icons') ):
                        // Loop through rows.
                        while( have_rows('social_icons') ) : the_row();

                        $social_icon   = get_sub_field('social_icon');
                        $social_link = get_sub_field('social_link');
                       
                    ?>
                        <li>
                            <a href="<?= $social_link; ?>">
                                <img src="<?= $social_icon; ?>">
                            </a>
                        </li>
                    
                    <?php
                         endwhile;
                    
                    endif;

                    ?>            


                </ul>
            </div>
            <div class="container-xl foot-contact">
                <div class="row">
                    <div class="align-self-center col-md-6 d-flex justify-content-center">
                        <div class="img"><img src="<?= $left_side_image; ?>" alt="" class="w-100"></div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-uppercase text-white"><?= $title; ?></h2>
                        <?= $description; ?>
                        <a href="/contact/" class="cta d-inline-flex text-uppercase"><?= $button ?></a>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
