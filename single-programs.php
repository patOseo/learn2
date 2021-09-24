<?php

echo get_header();

$prog_cat_id = yoast_get_primary_term_id('program', get_the_ID());
$prog_cat = yoast_get_primary_term('program', get_the_ID());

?>

<div id="main-content">

<?php if($prog_cat): ?>
<div class="program-breadcrumbs">
	<div class="container">
		<a href="/program/">Team Building Programs</a> » <a href="<?php echo the_field('main_category_page', 'program_' . $prog_cat_id); ?>"><?php echo $prog_cat; ?></a> » <?php the_title(); ?>
	</div>
</div>
<?php endif; ?>

  <?php
         if (have_posts()):
             while ( have_posts() ) : the_post();
   
                 the_content();

             endwhile;
         endif;
     ?>


</div>

<?php

echo get_footer();
?>
