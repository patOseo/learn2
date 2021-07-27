<?php

echo get_header();



?>

<div id="main-content">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
<h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>
 
 
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<section class="sec callsec">
	<div class="container">
		<div class="row">
		<?php
		 
		// The Loop
		while ( have_posts() ) : the_post(); ?>
		
			<div class="col-md-4">
			    <div class="box d-flex flex-column h-100 justify-content-between">
			        <div class="img"><img src="<?php echo the_post_thumbnail_url('full'); ?>" class="w-100" alt="<?php the_permalink(); ?>"></div>
			        <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
			            <div class="text">
			                <h2><?php the_title(); ?></h2>
			                <p><?php the_excerpt(); ?></p>
			            </div>
			            <a href="<?php the_permalink(); ?>" class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4 stretched-link">read more</a>
			        </div>
			    </div>
			</div>
		
		<?php endwhile; ?>
	 
	 	</div>
	 </div>
</section>

<?php endif; ?>


</div> 

<?php

echo get_footer();
?>
