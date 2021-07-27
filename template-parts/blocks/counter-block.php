<?php 
$number = get_field('number');
$description = get_field('description'); 
?>

<div class="shadow-text text-center">
	<div class="counter"><?= $number; ?></div>
	<p class="text-uppercase"><?= $description; ?></p>
</div>