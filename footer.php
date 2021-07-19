<footer class="footer">
    <div class="social container">
        <?php 
            $args = array(
                'menu_class' => 'align-items-center justify-content-between nav',        
                'menu' => 'social-menu'
            );
            wp_nav_menu( $args ); 
        ?>

        

    </div>
    
    <div class="container-xl foot-contact">
        <div class="row">
            

            <div class="align-items-center align-self-center col-md-6 d-flex flex-column justify-content-center px-5">
              

                <?php if (is_active_sidebar( 'footer-logo-section-about' ) ) { 
                       dynamic_sidebar( 'footer-logo-section' );
                    }       
                ?>
               
              <?php if( $_SERVER['REDIRECT_URL'] == '/about-page/' || $_SERVER['REDIRECT_URL'] == '/our-team/') : ?>
                <?php if (is_active_sidebar( 'footer-logo-section-text' ) ) { 
                       dynamic_sidebar( 'footer-logo-section-text' );
                    }       
                ?>
              <?php endif; ?>
            
            </div>
            <div class="col-md-6">
                <?php if (is_active_sidebar( 'footer-copy-right-text' ) ) { 
                       dynamic_sidebar( 'footer-contact-text' );
                    }       
                ?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <?php if (is_active_sidebar( 'footer-copy-right-text' ) ) { 
                   dynamic_sidebar( 'footer-copy-right-text' );
                }       
            ?>
        </div>
       
    </div>
</footer>

<script type="text/javascript">
    jQuery('p:empty'). remove();
    jQuery( "a[href~='http://www.learn2.cybertronindia.com/programs/meetings-that-produce-results/']" ).attr('href','/');
    jQuery( "a[href~='http://www.learn2.cybertronindia.com/programs/save-the-titanic/']" ).attr('href','https://www.save-the-titanic.com/');
</script>

<?php wp_footer(); ?>

</body>
</html>


