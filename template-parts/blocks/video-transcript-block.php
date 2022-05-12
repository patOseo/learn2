<?php

$title = get_field('title');
$transcript = get_field('transcription');

?>

<div class="transcript-block accordions">
	<div class="row my-4">
		<div class="col-12">
			<div class="acc-box">
				<div class="acc-head align-items-center d-flex">
					<h3 class="mt-0 h4 text-uppercase"><?php echo $title; ?></h3>
					<span class="arrow"></span>
				</div>
				<div class="acc-content text-light">
					<?php echo $transcript; ?>
				</div>
			</div>			
		</div>
	</div>
</div>