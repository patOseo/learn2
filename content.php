    <?php if(!empty(get_field('full_image'))) :  ?>
    
    <section class="hero blog-hero align-items-end d-flex " style="background-image:url('http://learn2.ihearttraffic.ca/wp-content/uploads/2021/07/blog-bg-39.jpg')">
        <div class="container-xl">
            <p class="text-center text-uppercase text-white h1">Blog</p>
        </div>
    </section>
   
   <?php endif;  ?>
 

    <section class="sec blog-content">
        <div class="container">
            <ul class="nav social">
                <li class="linkedin">
                    <a href="http://www.linkedin.com/company/ilearn2/" target="_blank" class="align-items-center d-flex justify-content-center">
                         <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="facebook">
                    <a href="https://www.facebook.com/Learn2Solutions/" target="_blank" class="align-items-center d-flex justify-content-center"> 
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/learn2solutions/" target="_blank" class="align-items-center d-flex justify-content-center">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                       
                </li>
                <li class="youtube">
                    <a href="https://www.youtube.com/user/Learn2Inc/" target="_blank" class="align-items-center d-flex justify-content-center">
                       <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="heading">
                        <h1 class="text-uppercase"><?= get_the_title(); ?></h1>
                        <h3>By <a href="#"><?= ucfirst(get_the_author()); ?></a></h3>
                    </div>
                    <div class="blog-content">
                        <?php the_content();  ?>
                    </div>
                    
                    <?php if( !empty(get_field('author_image')) && !empty(get_field('description')) ) :  ?>
                    <div class="align-items-start author-meta d-flex">
                        <div class="author-image">
                            <img width="60" height="60" src="<?= get_field('author_image'); ?>" alt="" class="w-100">
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
                        <form action="" class="d-flex">
                            <input type="text" name="" id="" placeholder="Search..." class="border-0 flex-grow-1 px-3">
                            <button class="bg-transparent border-0 px-3" type="submit">
                                
                                <svg width="18" height="18" viewBox="0 0 32.24800109863281 32.24800109863281" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g><path d="M 19,0C 11.82,0, 6,5.82, 6,13c0,3.090, 1.084,5.926, 2.884,8.158l-8.592,8.592c-0.54,0.54-0.54,1.418,0,1.958 c 0.54,0.54, 1.418,0.54, 1.958,0l 8.592-8.592C 13.074,24.916, 15.91,26, 19,26c 7.18,0, 13-5.82, 13-13S 26.18,0, 19,0z M 19,24 C 12.934,24, 8,19.066, 8,13S 12.934,2, 19,2S 30,6.934, 30,13S 25.066,24, 19,24z"></path></g></svg>
                            </button>
                        </form>
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