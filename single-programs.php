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

<?php

echo get_footer();
?>
