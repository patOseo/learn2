<?php

echo get_header();



?>

<div id="main-content">

  <?php
         if (have_posts()):
             while ( have_posts() ) : the_post();
   
                 the_content();

             endwhile;
         endif;
     ?>


</div>

<div class="modal-link call-to-action">
	<a href="/test/" class="modal-popup btn btn-primary" data-page="test">Click Me 3</a>
</div>

<?php

echo get_footer();
?>
