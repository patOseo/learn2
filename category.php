<?php

echo get_header();



?>

<div id="main-content">
    <section class="sec blogsec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h2 text-uppercase text-center"><?php single_cat_title(); ?> Blog</h1>
                </div>

            <?php
                   if (have_posts()):
                       while ( have_posts() ) : the_post();
             
                            $blogimg = get_the_post_thumbnail('','program-view', array('class' => 'w-100 h-auto'));
                            $defimg = get_field('default_featured_image', 600);
                            ?>
                            <div class="col-md-4">
                                <div class="box position-relative d-flex flex-column h-100 justify-content-between">
                                    <div class="img">
                                         <?php if($blogimg): echo $blogimg; else: echo wp_get_attachment_image($defimg, 'program-view', '', array('class' => 'w-100 h-auto')); endif; ?>
                                    </div>
                                    <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
                                        <div class="text">
                                            <h2><a href="<?= get_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h2>
                                            <p><?= get_the_excerpt(); ?></p>                                       </div>
                                       <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
                                    </div>
                                </div>
                            </div>
            
                       <?php endwhile;
                   endif;
               ?>
            </div>
        </div>
    </section>

</div> 

<?php

echo get_footer();
?>
