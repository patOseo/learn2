<?php

$description = get_field('description');

$top_section = get_field('option');
?>


<?php  if($top_section == 'image' || $top_section == 'video'){ ?>

     <?php if($top_section == 'video') : ?>
     
      <div class="yt-place shadow">
        <iframe loading="lazy" width="560" height="315" src="<?= get_field('video') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
   
    <?php endif; ?>
    
    <?php if($top_section == 'image') : ?>
   
      <img class="w-100" src="<?= get_field('image') ?>" width="1024" height="483">   
   
    <?php endif;  ?>   

<?php } ?>


<?=  $description; ?>












