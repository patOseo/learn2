<?php
$cta = get_field('call-to-action');

$alignment = get_field('alignment');
$color = get_field('button_color');

?>

<?php if(have_rows('modal_link')): ?>
	<div class="wp-block-buttons is-content-justification-<?php echo $alignment; ?> text-center">
	<?php while(have_rows('modal_link')): the_row(); ?>
		<?php 
			$link = get_sub_field('page_link');
			$base_url = esc_url(home_url( '/' ));
			$str_link = str_replace($base_url, '', $link);
		?>
		<div class="wp-block-button mb-1">
			<a class="wp-block-button__link modal-popup <?php echo $color; ?>" <?php if($link): ?>data-page="<?php echo str_replace('/', '', $str_link); ?>" href="<?php echo $link; ?>"<?php endif; ?>><?php the_sub_field('button_text'); ?></a>
		</div>
	<?php endwhile; ?>
	</div>
<?php endif; ?>