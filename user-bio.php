<?php
	/**
	 * Template Name: User Bio
	 */
	get_header();
?>

<?php if(!empty($_GET['id'])) : 
       $user_id     = $_GET['id']; 
       $user_info   = get_userdata($user_id);
       $description =  get_user_meta($user_id)['description'][0];
       $img_src     =  get_field("profile_image",'user_'.$user_id.'');
       $img_src2    =  !empty($img_src) ? $img_src : get_avatar_url($user_id,['size' => '400']);
       $img_src1    =  !empty($img_src) ? $img_src : get_avatar_url($user_id,['size' => '1600']);
	 ?>
		
		<section class="sec bio <?= $_GET['color'];?>">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <div class="bio-img">
		                    <img src="<?= $img_src1; ?>" alt="" class="w-100">
		                </div>
		            </div>
		            <div class="col-md-6 mt-4 mt-md-0">
		                <div class="bio-info">
		                    <div class="img">
		                        <img src="<?= $img_src2; ?>" alt="" class="icon"></span>
		                    </div>
		                    <div class="meta text-center">
		                        <h2><?= $user_info->display_name; ?></h2>
		                        <p><?= the_field("user_info",'user_'.$user_id.''); ?></p>
		                        <a href="#">Doug@Learn2.com</a>
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
         

<?php endif; ?>



<?php get_footer(); ?>