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
       $colorurl 	= null;

       switch ($color) {
       		case 'green':
       			$colorurl = '/how-you-impact-other-people-green-planets/';
       			break;
       		case 'blue':
       			$colorurl = '/how-you-impact-other-people-blue-oceans/';
       			break;
       		case 'orange':
       			$colorurl = '/how-you-impact-other-people-orange-skies/';
       			break;
       		case 'yellow':
       			$colorurl = '/how-you-impact-other-people-gold-mines/';
       			break;
       }
?>
		
		<section class="sec bio <?php echo $color; ?>">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <div class="bio-img">
		                    <?php echo wp_get_attachment_image($img, 'square', '', array('class' => 'w-100 h-auto')); ?>
		                </div>
		            </div>
		            <div class="col-md-6 mt-4 mt-md-0 align-self-center">
		                <div class="bio-info">
		                    <div class="img">
		                        <a href="<?= $colorurl; ?>"><img src="/wp-content/uploads/<?= $color; ?>.png" alt="<?= $color; ?>" class="icon"></a>
		                    </div>
		                    <div class="meta text-center">
		                        <h1 class="h2 mb-0"><?php the_title(); ?></h1>
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
       <h2 class="text-center text-uppercase">Recent Posts by <?php the_title(); ?></h2>
       <div class="container-xl">
           <div class="row">

			     	<?php  while ($args-> have_posts() ) :
			     		$args->the_post();
			     		$blogimg = get_the_post_thumbnail('','program-view', array('class' => 'w-100 h-auto'));
	    				$defimg = get_field('default_featured_image', 600);
			     	?>
	         
			        <div class="box col-md-4 d-flex flex-column justify-content-between">
			            <div class="upper">
			                <?php $image_src = get_the_post_thumbnail_url(get_the_ID()); ?>
			                <div class="img-place">
			                    <?php if($blogimg): echo $blogimg; else: echo wp_get_attachment_image($defimg, 'program-view', '', array('class' => 'w-100 h-auto')); endif; ?>
			                </div>
			                <h3 class="text-uppercase"><a href="<?= get_permalink(); ?>" class="stretched-link"><?= get_the_title(); ?></a></h3>
			                <p><?= get_the_excerpt();  ?></p>
			            </div>
			            <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
			        </div>
	         
	            <?php endwhile; ?>
	       
	        </div>
	    </div>
	    </div>
	    </section>    
    <?php endif; ?>



<?php get_footer(); ?>