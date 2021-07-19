<?php if( have_rows('testimonial_block') ): ?>
    <?php while( have_rows('testimonial_block') ): the_row(); 

        // Get sub field values.
        $title = get_sub_field('title');
        $testimonial_1 = get_sub_field('testimonial_1');
        $testimonial_2 = get_sub_field('testimonial_2');
        $testimonial_3 = get_sub_field('testimonial_3');

        

        ?>

        <section class="sec">
                <h2 class="text-center text-uppercase"><?= $title; ?></h2>
                <div class="container-xl">
                    <div class="row">
                        <div class="col-md-4 box">
                            <div class="yt-place"><iframe width="560" height="315" src="<?php the_field('youtube_link', $testimonial_1); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></div>
                            <h3 class="text-uppercase"><?= get_the_title($testimonial_1); ?></h3>
                            <h4 class="text-uppercase"><?php the_field('company_name', $testimonial_1); ?></h4>
                            <p><?= get_post_field('post_content', $testimonial_1);  ?></p>

                        </div>
                        <div class="col-md-4 box">
                            <div class="yt-place"><iframe width="560" height="315" src="<?php the_field('youtube_link', $testimonial_2); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></div>
                            <h3 class="text-uppercase"><?= get_the_title($testimonial_2); ?></h3>
                            <h4 class="text-uppercase"><?php the_field('company_name', $testimonial_2); ?></h4>
                            <p><?= get_post_field('post_content', $testimonial_2);  ?></p>
                        </div>
                        <div class="col-md-4 box">
                            <div class="yt-place"><iframe width="560" height="315" src="<?php the_field('youtube_link', $testimonial_3); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe></div>
                            <h3 class="text-uppercase"><?= get_the_title($testimonial_3); ?></h3>
                            <h4 class="text-uppercase"><?php the_field('company_name', $testimonial_3); ?></h4>
                            <p><?= get_post_field('post_content', $testimonial_3);  ?></p>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile; ?>
<?php endif; ?>
