<section class="sec col-meta">
           <div class="container">
               <div class="row text-center">
<?php

// Check rows exists.
if( have_rows('blocks') ):

    while( have_rows('blocks') ) : the_row();

    $icon = get_sub_field('icon_class');
    $heading = get_sub_field('heading');
    $description = get_sub_field('description');
?>
   
                               <div class="col-md-4 box">
                                <div class="icon"><i class="<?= $icon; ?>" aria-hidden="true"></i></div>
                                <h2><?= $heading; ?></h2>
                                <?= $description; ?>
                            </div>                      
          
   
   <?php

    endwhile;
endif;
?>
        </div>
    </div>
</section> 

