<?php
/* template name: blog */ 
get_header();
?>

<?php 
   $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	//the query
	$wpb_all_query = new wp_query(array(
		'post_type'  => 'post',
		'post_status'=> 'publish',
		'posts_per_page' => 15,
		'order' => 'DESC',
		'paged'      => $paged
	));
    
    $total = $wpb_all_query->max_num_pages;
?>



<section class="sec blogsec">
    <h2 class="text-center text-uppercase"><?= the_title(); ?></h2>
    <div class="container">
        <div class="row">
            

	    	<?php if ($wpb_all_query -> have_posts()) : ?>  

	    		<?php 
	    		    while ($wpb_all_query-> have_posts() ) :
	    			$wpb_all_query -> the_post();
	    		?>
	    		    			            
			        <div class="col-md-4">
		                <div class="box d-flex flex-column h-100 justify-content-between">
		                    <div class="img">
	                        	 <img src="<?= get_the_post_thumbnail_url('','medium'); ?>" alt="" class="w-100">
	                        </div>
		                    <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
		                    	<div class="text">
		                        	<h2><a href="<?= get_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h2>
		                        	<h3 class="author"><i>by <a href="#"><?php the_author(); ?></a></i></h3>
		                        	<p><?= get_the_excerpt(); ?></p>
		                       </div>
		                       <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
		                    </div>
		                </div>
			        </div>
	    		
	    	   <?php endwhile; ?>
	        <?php endif; ?>
	        

            
           <div class="col-12 d-flex justify-content-between">
      	        <?php if($paged <=  $total && $paged > 1  ) : ?>
      		        <a href="/blog/page/<?= max( 1, get_query_var('paged') - 1 ); ?>" class="cta d-inline-flex justify-content-center lightblue mt-4 text-uppercase text-white">&lt;&lt; Latest Entries</a>
      	        <?php endif;  ?>
      	        
      	        

                  <?php if($paged <  $total ) : ?>
      		        <a href="/blog/page/<?= max( 1, get_query_var('paged') ) + 1; ?>" class="cta d-inline-flex justify-content-center lightblue mt-4 text-uppercase text-white">Older Entries &gt;&gt;</a>
      	        <?php endif;  ?>
           </div>

	        
	       

	    </div>
    </div>
</section>




	
<?php get_footer(); ?>


