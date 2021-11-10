<?php if(have_rows('timeline')): ?>

	<div class="timeline">
	<?php while(have_rows('timeline')): the_row(); ?>
		<?php
			$heading = get_sub_field('heading');
			$paragraph = get_sub_field('paragraph');
			$color = get_sub_field('icon_color');
		?>
		<div class="timeline-block">
			<div class="timeline-icon">
				<svg width="44" x="0px" y="0px" viewBox="-43 -56 512 512">
				<path fill="<?php echo $color; ?>" d="M213-48C76-48-35,63-35,200S76,448,213,448s248-111,248-248S350-48,213-48z"/>
				</svg>

			</div>
			<div class="timeline-content">
				<h2 class="timeline-heading"><?php echo $heading; ?></h2>
				<p class="timeline-paragraph"><?php echo $paragraph; ?></p>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
<?php endif; ?>