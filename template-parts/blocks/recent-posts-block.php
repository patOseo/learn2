<?php if( have_rows('recent_posts_block') ): ?>
<?php while( have_rows('recent_posts_block') ): the_row(); 

    // Get sub field values.
    $title = get_sub_field('title');
    $recent_post_1 = get_sub_field('recent_post_1');
    $recent_post_2 = get_sub_field('recent_post_2');
    $recent_post_3 = get_sub_field('recent_post_3');

    

?>
 <section class="sec blog">
    <h2 class="text-center text-uppercase"><?= $title; ?></h2>
    <div class="container-xl">
        <div class="row">
            <div class="box col-md-4 d-flex flex-column justify-content-between">
                <div class="upper">
                    <div class="img-place">
                        <?php echo get_the_post_thumbnail($recent_post_1, 'medium', array('class' => 'w-100 h-auto')); ?>
                    </div>
                    <h3 class="text-uppercase"><a href="<?= get_permalink($recent_post_1); ?>"><?= get_the_title($recent_post_1); ?></a></h3>
                    <p><?= get_the_excerpt($recent_post_1);  ?></p>
                </div>
                <a href="<?= get_permalink($recent_post_1); ?>" class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4 stretched-link">read more</a>
            </div>
            <div class="box col-md-4 d-flex flex-column justify-content-between">
                <div class="upper">
                        <div class="img-place">
                            <?php echo get_the_post_thumbnail($recent_post_2, 'medium', array('class' => 'w-100 h-auto')); ?>
                        </div>
                    <h3 class="text-uppercase"><a href="<?= get_permalink($recent_post_2); ?>"><?= get_the_title($recent_post_2); ?></a></h3>
                    <p><?= get_the_excerpt($recent_post_2);  ?></p>
                </div>
                <a href="<?= get_permalink($recent_post_2); ?>" class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4 stretched-link">read more</a>
            </div>
            <div class="box col-md-4 d-flex flex-column justify-content-between">
                <div class="upper">
                    <div class="img-place">
                            <?php echo get_the_post_thumbnail($recent_post_3, 'medium', array('class' => 'w-100 h-auto')); ?>
                        </div>
                    <h3 class="text-uppercase"><a href="<?= get_permalink($recent_post_3); ?>"><?= get_the_title($recent_post_3); ?></a></h3>
                    <p><?= get_the_excerpt($recent_post_3);  ?></p>
                </div>
                <a href="<?= get_permalink($recent_post_3); ?>" class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4 stretched-link">read more</a>
            </div>
        
        </div>
    </div>
</div>
</section>
<?php endwhile; ?>
<?php endif; ?>