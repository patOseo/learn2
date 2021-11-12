<?php $ctabar = get_field('add_call-to-action_bar');

if($ctabar):

$cta = get_field('select_cta');
$message = get_field('message');
$btn_text = get_field('button_text');
$btn_link = get_field('button_link');
$maincatslug = (str_replace(' ', '-', strtolower($maincatname)));

switch ($cta) {
	case 'strong_teams':
		$message = "A Strong Company Starts with a Strong Team.";
		$btn_text = "Plan Your Next " . $maincatname . " Experience";
		$btn_link = "/" . $maincatslug . "/";
		break;

	case 'transform':
		$message = "Transform your Leaders.";
		$btn_text = "Plan Your Next " . $maincatname . " Experience";
		$btn_link = "/" . $maincatslug . "/";
		break;

	case 'communicate':
		$message = "Communicate Better. Achieve More.";
		$btn_text = "Plan Your Next " . $maincatname . " Experience";
		$btn_link = "/" . $maincatslug . "/";
		break;

	case 'path_success':
		$message = "Find the Path to Success";
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
        <button data-toggle="modal" data-target="#contactModal" class="align-items-center cta d-inline-flex text-uppercase white"><?= $btn_text; ?></button>
    </div>
</section>
<?php endif; ?>

<?php if(is_singular('post')): ?>
<figure class="wp-block-image size-full is-resized mx-auto d-md-none text-center mt-4"><a href="https://www.save-the-titanic.com/" target="_blank"><img src="https://learn2.com/wp-content/uploads/2021/07/adimg.jpg" alt="Save The Titanic" class="wp-image-3414" width="365" height="365" srcset="https://www.learn2.com/wp-content/uploads/2021/07/adimg.jpg 730w, https://www.learn2.com/wp-content/uploads/2021/07/adimg-300x300.jpg 300w, https://www.learn2.com/wp-content/uploads/2021/07/adimg-150x150.jpg 150w, https://www.learn2.com/wp-content/uploads/2021/07/adimg-640x640.jpg 640w" sizes="(max-width: 365px) 100vw, 365px"></a></figure>
<?php endif; ?>