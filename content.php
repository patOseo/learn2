
    
    <section class="hero blog-hero align-items-end d-flex " style="background-image:url('/wp-content/uploads/2021/07/blog-bg-39.jpg')">
        <div class="container-xl">
            <p class="text-center text-uppercase text-white h1">Blog</p>
        </div>
    </section>
 

    <section class="sec blog-content">
        <div class="container">
            <ul class="nav social">
                <li class="linkedin">
                    <a href="https://www.linkedin.com/company/ilearn2/" target="_blank" class="align-items-center d-flex justify-content-center" aria-label="Learn2 on LinkedIn">
                         <svg width="14" x="0px" y="0px" viewBox="-75 -56 448 512">
                         <path fill="#fff" d="M25.3,392h-92.9V92.9h92.9V392z M-21.2,52.1C-50.9,52.1-75,27.5-75-2.2C-75-31.9-50.9-56-21.2-56C8.5-56,32.6-31.9,32.6-2.2
                             C32.6,27.5,8.5,52.1-21.2,52.1z M372.9,392h-92.7V246.4c0-34.7-0.7-79.2-48.3-79.2c-48.3,0-55.7,37.7-55.7,76.7V392H83.5V92.9h89.1
                             v40.8h1.3c12.4-23.5,42.7-48.3,87.9-48.3c94,0,111.3,61.9,111.3,142.3V392H372.9z"/>
                         </svg>
                    </a>
                </li>
                <li class="facebook">
                    <a href="https://www.facebook.com/Learn2Solutions/" target="_blank" class="align-items-center d-flex justify-content-center" aria-label="Learn2 on Facebook"> 
                        <svg width="9" x="0px" y="0px" viewBox="-139 -56 320 512">
                        <path fill="#fff" d="M140.1,232l14.2-92.7H65.5V79.2c0-25.3,12.4-50.1,52.2-50.1h40.4v-78.9c0,0-36.7-6.3-71.7-6.3C13.1-56-34.7-11.6-34.7,68.7
                            v70.6h-81.4V232h81.4v224H65.4V232H140.1z"/>
                        </svg>
                    </a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/learn2solutions/" target="_blank" class="align-items-center d-flex justify-content-center" aria-label="Learn2 on Twitter">
                        <svg width="15" x="0px" y="0px" viewBox="-43 -56 512 512">
                        <path fill="#fff" d="M416.4,95.7c0.3,4.5,0.3,9.1,0.3,13.6c0,138.7-105.6,298.6-298.6,298.6c-59.5,0-114.7-17.2-161.1-47.1
                            c8.4,1,16.6,1.3,25.3,1.3c49.1,0,94.2-16.6,130.3-44.8c-46.1-1-84.8-31.2-98.1-72.8c6.5,1,13,1.6,19.8,1.6c9.4,0,18.8-1.3,27.6-3.6
                            c-48.1-9.7-84.1-52-84.1-103v-1.3c14,7.8,30.2,12.7,47.4,13.3c-28.3-18.8-46.8-51-46.8-87.4c0-19.5,5.2-37.4,14.3-53
                            C44.4,74.9,122,116.5,209.1,121.1c-1.6-7.8-2.6-15.9-2.6-24c0-57.8,46.8-104.9,104.9-104.9c30.2,0,57.5,12.7,76.7,33.1
                            c23.7-4.5,46.5-13.3,66.6-25.3c-7.8,24.4-24.4,44.8-46.1,57.8c21.1-2.3,41.6-8.1,60.4-16.2C454.7,62.3,436.8,80.8,416.4,95.7
                            L416.4,95.7z"/>
                        </svg>
                    </a>
                       
                </li>
                <li class="youtube">
                    <a href="https://www.youtube.com/user/Learn2Inc/" target="_blank" class="align-items-center d-flex justify-content-center" aria-label="Learn2 on YouTube">
                       <svg width="16" x="0px" y="0px" viewBox="-11 -56 576 512">
                        <path fill="#fff" d="M538.7,68.1c-6.3-23.7-24.8-42.3-48.3-48.6C447.8,8,277,8,277,8S106.2,8,63.6,19.5c-23.5,6.3-42,24.9-48.3,48.6
                            C3.9,110.9,3.9,200.4,3.9,200.4s0,89.4,11.4,132.3c6.3,23.6,24.8,41.5,48.3,47.8C106.2,392,277,392,277,392s170.8,0,213.4-11.5
                            c23.5-6.3,42-24.2,48.3-47.8c11.4-42.9,11.4-132.3,11.4-132.3S550.1,110.9,538.7,68.1z M221.1,281.6V119.2l142.7,81.2L221.1,281.6
                            L221.1,281.6z"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <p class="mt-0 mb-3">
                        <?php
                        $cat_string = get_the_category_list(', ');
                        $cat_array = explode(', ', $cat_string);

                        // echo $cat_array[0];

                            if(!in_array('Uncategorized', $cat_array)){
                                the_category(', ');
                            }
                        ?>
                    </p>

                    <div class="heading">
                        <h1 class="text-uppercase"><?= get_the_title(); ?></h1>
                        <h3>By <?= ucfirst(get_the_author()); ?></h3>
                    </div>
        
                    <div class="blog-content">
                        <?php the_content();  ?>
                    </div>
                    
                    <?php if( !empty(get_field('author_image')) && !empty(get_field('description')) ) :  ?>
                    <div class="align-items-start author-meta d-flex">
                        <div class="author-image">
                            <?php $auth_img = get_field('author_image'); ?>
                            <?php echo wp_get_attachment_image($auth_img, array('class' => 'w-100', 'width' => '60', 'height' => '60')); ?>
                        </div>
                        <div class="author-info">
                            <p><?= get_field('description'); ?></p>
                        </div>
                    </div>
                 <?php endif; ?>
                    
                    <div class="align-items-center d-flex justify-content-between visit-post">
                            <span class="nav-label"><?php previous_post_link(); ?></span>
                            <span class="nav-label"><?php next_post_link();?></span>
                    </div>
                    <div class="search-post">
                        <!-- <form action="" class="d-flex">
                            <input type="text" name="" id="" placeholder="Search..." class="border-0 flex-grow-1 px-3">
                            <button class="bg-transparent border-0 px-3" type="submit">
                                
                                <svg width="18" height="18" viewBox="0 0 32.24800109863281 32.24800109863281" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g><path d="M 19,0C 11.82,0, 6,5.82, 6,13c0,3.090, 1.084,5.926, 2.884,8.158l-8.592,8.592c-0.54,0.54-0.54,1.418,0,1.958 c 0.54,0.54, 1.418,0.54, 1.958,0l 8.592-8.592C 13.074,24.916, 15.91,26, 19,26c 7.18,0, 13-5.82, 13-13S 26.18,0, 19,0z M 19,24 C 12.934,24, 8,19.066, 8,13S 12.934,2, 19,2S 30,6.934, 30,13S 25.066,24, 19,24z"></path></g></svg>
                            </button>
                        </form> -->
                    </div>
                </div>
              
                

                <div class="col-md-4">
                    <div class="side">
                        <?php if (is_active_sidebar( 'blog-sidebar' ) ) { 
                       dynamic_sidebar( 'blog-sidebar' );
                    }       
                ?>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

<?php 
    $categories = get_the_category();
    $catslugs = wp_list_pluck($categories, 'slug');
    
    $primarycat = yoast_get_primary_term();

    if($primarycat) {
        $maincatname = $primarycat;
    } else {
        $maincatname = esc_html( $categories[0]->name );
    }
    
    $progargs = array(
        'post_type' => 'programs',
        'posts_per_page' => 3,
        'orderby' => array( 'menu_order' => 'ASC' ),
        'tax_query' => array(
            array(
                'taxonomy' => 'program',
                'field'    => 'slug',
                'terms'    => $catslugs,
                'include_children' => false
            ),
        )
    );

    $relatedprogs = new WP_Query($progargs);
?>

<?php include_once('template-parts/cta-blog.php'); ?>

<?php if($relatedprogs->have_posts()): ?>
    <section class="sec callsec">
        <div class="container">
            <div class="row">
                <h2 class="mx-auto text-uppercase text-center">Related Programs</h2>
                <?php while($relatedprogs->have_posts()): $relatedprogs->the_post(); ?>
                    <div class="col-md-4">
                        <div class="box d-flex flex-column h-100 justify-content-between">
                            <div class="img"><img src="<?php echo the_post_thumbnail_url('program-view'); ?>" alt="<?php the_title(); ?>" class="w-100"></div>
                            <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
                                <div class="text">
                                    <h2><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h2>
                                    <p><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                                </div>
                                <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- <div class="col-12 text-center">
                    <?php foreach($categories as $category): ?>
                    <a href="/<?php echo $category->slug; ?>/" class="align-items-center cta d-inline-flex justify-content-center lightblue text-uppercase text-white mt-4">View More Programs in <?php echo $category->name; ?></a>
                    <?php endforeach; ?>
                </div> -->
            </div>
        </div>
    </section>
<?php endif; ?>