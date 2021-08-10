<?php
	get_header();
?>

<?php
       $user_id     = get_field('assign_to_wordpress_user'); 
       $user_info   = get_field('position');
       $description = get_field('bio');
       $img   	    = get_field('profile_image');
       $email 		= get_field('email');
       $color 		= get_field('natural_approach');
?>
		
		<section class="sec bio <?php echo $color; ?>">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <div class="bio-img">
		                    <?php echo wp_get_attachment_image($img, 'full', '', array('class' => 'w-100 h-auto')); ?>
		                </div>
		            </div>
		            <div class="col-md-6 mt-4 mt-md-0">
		                <div class="bio-info">
		                    <div class="img">
		                        <!-- <img src="<?= $img_src2; ?>" alt="" class="icon"> -->
		                    </div>
		                    <div class="meta text-center">
		                        <h2><?php the_title(); ?></h2>
		                        <p><?php echo $user_info; ?></p>
		                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-12 mt-4">
		                <p><?= $description; ?></p>
		            </div>
		        </div>
		    </div>
		</section>
    


    <?php
	   
	   $args = new wp_query(array(
	   	'author'        =>  $user_id, 
	   	'post_type'  => 'post',
	   	'post_status'=> 'publish',
	   	'posts_per_page' => 3,
	   	'order'  =>  'DESC',
	   ));

    ?>
    	       
    <?php if ($args -> have_posts()) : ?>  
       <section class="sec blog">
       <h2 class="text-center text-uppercase">Recent Posts</h2>
       <div class="container-xl">
           <div class="row">

			     	<?php  while ($args-> have_posts() ) :
			     		$args->the_post();
			     	?>
	         
			        <div class="box col-md-4 d-flex flex-column justify-content-between">
			            <div class="upper">
			                <?php $image_src = get_the_post_thumbnail_url(get_the_ID()); ?>
			                <div class="img-place">
			                    <a href="#"><img src="<?= $image_src; ?>" alt="" class="w-100"></a>
			                </div>
			                <h3 class="text-uppercase"><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h3>
			                <p><?= get_the_excerpt();  ?></p>
			            </div>
			            <a href="<?= get_permalink(); ?>" class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</a>
			        </div>
	         
	            <?php endwhile; ?>
	       
	        </div>
	    </div>
	    </div>
	    </section>    
    <?php endif; ?>



<?php get_footer(); ?>