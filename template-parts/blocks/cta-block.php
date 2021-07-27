<?php 

$cta = get_field('select_cta');
$message = get_field('message');
$btn_text = get_field('button_text');
$btn_link = get_field('button_link');

switch ($cta) {
	case 'strong_teams':
		$message = "Strong Companies Start with Strong Teams.";
		$btn_text = "Get Started";
		$btn_link = "/book-a-call/";
		break;

	case 'path_success':
		$message = "Find the Path to Success";
		$btn_text = "Learn More";
		$btn_link = "/about/";
		break;

	case 'good_fit':
		$message = "Not a Good Fit?";
		$btn_text = "Find Your Solution";
		$btn_link = "/program/";
		break;

	case 'change_work':
		$message = "Change the Way You Work";
		$btn_text = "Get Started";
		$btn_link = "/book-a-call/";
		break;

	case 'custom':
		$message = get_field('message');
		$btn_text = get_field('button_text');
		$btn_link = get_field('button_link');
		break;
}


?>

<section class="bar-go">
    <div class="align-items-center container-xl d-flex flex-column flex-md-row justify-content-between">
        <h2 class="mb-4 mb-md-0 text-center text-md-start text-uppercase"><?= $message; ?></h2>
        <a href="<?= $btn_link; ?>" class="align-items-center cta d-inline-flex text-uppercase white"><?= $btn_text; ?></a>
    </div>
</section>