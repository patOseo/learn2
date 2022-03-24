<?php

$number_of_posts = get_field('number_of_posts_to_show');
$more_link = get_field('show_view_more_link');
$columns = get_field('columns_per_row');
$recent_or_custom = get_field('recent_or_custom_posts');
$excerpt = get_field('show_post_excerpt');
$category = get_field('select_category');

if($recent_or_custom == 1) {

	$selectposts = get_field('select_posts');

	$args = array(
		'post_type' => 'post',
		'post__in' => $selectposts,
	);


} else {
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => $number_of_posts,
		'order' => 'DESC',
		'orderby' => 'date',
	);

	if($category) {
		$args['tax_query'] = array(
			array(
				'taxonomy'	=> 'category',
				'field' => 'term_id',
				'terms' => $category,
			)
		);
	}
}

$blogposts = new WP_Query($args);

?>

<?php if($blogposts->have_posts()): ?>

	<section class="blogsec">
		<div class="container">
			<div class="row">
				<?php while($blogposts->have_posts()): $blogposts->the_post(); ?>
					<?php 
					$blogimg = get_the_post_thumbnail('','program-view', array('class' => 'w-100 h-auto'));
	    			$defimg = get_field('default_featured_image', 600);
					?>
					<div class="col-md-<?php echo $columns; ?>">
		                <div class="box position-relative d-flex flex-column h-100 justify-content-between">
		                    <div class="img">
	                        	 <?php if($blogimg): echo $blogimg; else: echo wp_get_attachment_image($defimg, 'program-view', '', array('class' => 'w-100 h-auto')); endif; ?>
	                        </div>
		                    <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
		                    	<div class="text">
		                        	<h2 class="text-uppercase"><a href="<?= get_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h2>
		                        	<?php if($excerpt == 1): ?><p><?= get_the_excerpt(); ?></p><?php endif; ?>
		                       </div>
		                       <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
		                    </div>
		                </div>
			        </div>
				<?php endwhile; ?>
			</div>
			<?php if($more_link): ?>
				<div class="row">
					<div class="col-12 text-center">
						<a href="/blog/" class="cta lightblue text-white text-uppercase">View All Blogs</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

<?php endif; ?>