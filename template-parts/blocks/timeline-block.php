<?php if(have_rows('timeline')): ?>

	<div class="timeline">
	<?php while(have_rows('timeline')): the_row(); ?>
		<?php
			$heading = get_sub_field('heading');
			$paragraph = get_sub_field('paragraph');
			$color = get_sub_field('icon_color');
		?>
		<div class="timeline-block">
			<div class="timeline-icon"><span class="fa fa-circle" style="color:<?php echo $color; ?>"></span></div>
			<div class="timeline-content">
				<h2 class="timeline-heading"><?php echo $heading; ?></h2>
				<p class="timeline-paragraph"><?php echo $paragraph; ?></p>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
<?php endif; ?>