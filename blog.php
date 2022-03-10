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
		'posts_per_page' => 24,
		'order' => 'DESC',
		'paged'      => $paged
	));
    
    $total = $wpb_all_query->max_num_pages;
?>


<div class="container">
	<div class="row">
		<div class="col-12">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<section class="py-2 sec blogsec">
    <div class="container">
    	<div class="row">
    		<div class="col-12 align-self-center text-center">
            	<div class="cat-list">
            		<button class="btn btn-md btn-primary cat-list-item active mb-2 mx-2" data-slug="">All</button>
            		<?php $all_cats = get_categories(); ?>
    				<?php foreach($all_cats as $cat): ?>
    					<button class="btn btn-md btn-primary cat-list-item mb-2 mx-2" data-slug="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>
    				<?php endforeach; ?>
    			</div>
    		</div>
    	</div>

        <div class="row" id="postsGrid">
            
	    	<?php if ($wpb_all_query -> have_posts()) : ?>  

	    		<?php 
	    		    while ($wpb_all_query-> have_posts() ) :
	    			$wpb_all_query -> the_post();
	    			$blogimg = get_the_post_thumbnail('','program-view', array('class' => 'w-100 h-auto'));
	    			$defimg = get_field('default_featured_image', 600);

	    		?>
	    		    			            
			        <div class="col-md-4">
		                <div class="box d-flex flex-column h-100 justify-content-between">
		                    <div class="img">
	                        	 <?php if($blogimg): echo $blogimg; else: echo wp_get_attachment_image($defimg, 'program-view', '', array('class' => 'w-100 h-auto')); endif; ?>
	                        </div>
		                    <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
		                    	<div class="text">
		                        	<h2 class="text-uppercase"><a href="<?= get_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h2>
		                        	<h3 class="author"><i>by <?php the_author(); ?></i></h3>
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
      		        <a href="/blog/page/<?= max( 1, get_query_var('paged') - 1 ); ?>/" class="cta d-inline-flex justify-content-center lightblue mt-4 text-uppercase text-white">&lt;&lt; Latest Entries</a>
      	        <?php endif;  ?>
      	        
      	        

                  <?php if($paged <  $total ) : ?>
      		        <a href="/blog/page/<?= max( 1, get_query_var('paged') ) + 1; ?>/" class="cta d-inline-flex justify-content-center lightblue mt-4 text-uppercase text-white">Older Entries &gt;&gt;</a>
      	        <?php endif;  ?>
           </div>

	        
	       

	    </div>
    </div>
</section>




	
<?php get_footer(); ?>


