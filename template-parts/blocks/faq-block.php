<?php 

$qtag = get_field('q_tag');

?>

<?php if(have_rows('faq')): ?>
<section class="sec accordions">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php while(have_rows('faq')): the_row(); ?>
					<?php $question = get_sub_field('question'); $answer = get_sub_field('answer'); ?>
					<div class="acc-box">
            		    <div class="acc-head align-items-center d-flex">
            		    	<?php if($qtag == 'h2'): ?>
            		        	<h2 class="h4"><?= $question; ?></h2>
            		        <?php elseif($qtag == 'h3'): ?>
            		        	<h3 class="h4"><?= $question; ?></h3>
            		        <?php else: ?>
            		        	<h4><?= $question; ?></h4>
            		        <?php endif; ?>
            		        <span class="arrow"></span>
            		    </div>
            		    <div class="acc-content">
            		        <p><?= $answer; ?></p>
            		    </div>
            		</div>
            	<?php endwhile; ?>
            </div>
		</div>
	</div>
</section>
<?php endif; ?>