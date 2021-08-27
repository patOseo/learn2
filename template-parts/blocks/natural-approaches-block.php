<?php if( have_rows('natural_approaches') ): ?>
    <?php while( have_rows('natural_approaches') ): the_row(); 

        // Get sub field values.
        $title = get_sub_field('title');
        $heading = get_sub_field('heading');
        $background_image = get_sub_field('background_image');    
        

        ?>


<section class="hero team-hero" style="background-image:url('<?php echo $background_image; ?>');">
    <div class="container-xl text-center">
        <div class="circle-center">
            <div class="align-items-center center d-inline-flex justify-content-center text-center">
                <?= $title; ?>
            </div>
        </div>
        <div class="row row-approach">
            <h2 class="text-white"><?= $heading; ?></h2>
            
            <?php

            if( have_rows('approaches_lists') ):

                while( have_rows('approaches_lists') ) : the_row();
                $image = get_sub_field('image');  
            ?>
                    
                  
                  <div class="col-md-3 d-flex justify-content-center mt-5">
                      <a href="<?= get_sub_field('button_link'); ?>" class="circle d-flex flex-column <?= get_sub_field('color_code'); ?>">
                          <span class="icon">
                              <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-100 h-auto')); ?>
                              </span>
                          <span class="go text-uppercase"><?= get_sub_field('button_text'); ?></span>
                      </a>
                  </div>

            
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>


