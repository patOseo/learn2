</html>

 <h3><?= the_title(); ?> </h3>

 <?php
        if (have_posts()):
            while ( have_posts() ) : the_post();
  
                the_content();

            endwhile;
        endif;
    ?>
</html>