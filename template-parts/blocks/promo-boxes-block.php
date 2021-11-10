<?php 

$b1_bg = get_field('box_1_background_image');
$b1_bg_color = get_field('box_1_background_color');
$b1_heading = get_field('box_1_heading');
$b1_paragraph = get_field('box_1_paragraph');
$b1_btn_text = get_field('box_1_button_text');
$b1_btn_link = get_field('box_1_button_link');
$b2_bg = get_field('box_2_background_image');
$b2_bg_color = get_field('box_2_background_color');
$b2_heading = get_field('box_2_heading');
$b2_paragraph = get_field('box_2_paragraph');
$b2_btn_text = get_field('box_2_button_text');
$b2_btn_link = get_field('box_2_button_link');

?>

<div class="promoted-link container-xl">
   <div class="row">
       <div class="col-md-6 px-0">
           <div class="align-items-center box d-flex flex-column h-100 justify-content-between text-center" style="background-image:url('<?php echo $b1_bg; ?>');<?php if($b1_bg_color): ?>background-color:<?php echo $b1_bg_color; endif; ?>">
               <div class="copy flex-grow-1">
                   <h2><?php echo $b1_heading; ?></h2>
                   <p><?php echo $b1_paragraph; ?></p>
               </div>
               <a href="<?= $b1_btn_link; ?>" class="align-items-center blue cta d-inline-flex mt-4 text-uppercase text-white" target="_blank" rel="noopener,noreferrer"><span aria-hidden="true" class="icon">
                 </span><?php echo $b1_btn_text; ?></a>
           </div>
       </div>
       <div class="col-md-6 px-0">
           <div class="align-items-center box d-flex flex-column h-100 justify-content-between text-center" style="background-image:url('<?php echo $b2_bg; ?>');<?php if($b2_bg_color): ?>background-color:<?php echo $b2_bg_color; endif; ?>">
               <div class="copy flex-grow-1">
                   <h2><?= $b2_heading; ?></h2>
                   <p><?= $b2_paragraph; ?></p>
               </div>
               <a href="<?= $b2_btn_link; ?>" class="align-items-center cta d-inline-flex gold mt-4 text-uppercase text-white"><span aria-hidden="true" class="icon">
                     </span><?php echo $b2_btn_text; ?></a>
           </div>
       </div>
   </div>
</div>