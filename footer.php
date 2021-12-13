
<footer class="footer">

    <?php if(!get_field('hide_footer')): ?>
    <div class="social container">
        <?php 
            // $args = array(
            //     'menu_class' => 'align-items-center justify-content-between nav',        
            //     'menu' => 'social-menu'
            // );
            // wp_nav_menu( $args ); 
        ?>

        <div class="row">
            <div class="col-3 text-center">
                <a href="https://www.facebook.com/Learn2Solutions/" target="_blank" rel="noopener,noreferrer">
                    <svg width="20" x="0px" y="0px" viewBox="-139 -56 320 512">
                    <path fill="#fff" d="M140.1,232l14.2-92.7H65.5V79.2c0-25.3,12.4-50.1,52.2-50.1h40.4v-78.9c0,0-36.7-6.3-71.7-6.3C13.1-56-34.7-11.6-34.7,68.7
                        v70.6h-81.4V232h81.4v224H65.4V232H140.1z"/>
                    </svg>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="https://twitter.com/learn2solutions" target="_blank" rel="noopener,noreferrer">
                    <svg width="34" x="0px" y="0px" viewBox="-43 -56 512 512">
                    <path fill="#fff" d="M416.4,95.7c0.3,4.5,0.3,9.1,0.3,13.6c0,138.7-105.6,298.6-298.6,298.6c-59.5,0-114.7-17.2-161.1-47.1
                        c8.4,1,16.6,1.3,25.3,1.3c49.1,0,94.2-16.6,130.3-44.8c-46.1-1-84.8-31.2-98.1-72.8c6.5,1,13,1.6,19.8,1.6c9.4,0,18.8-1.3,27.6-3.6
                        c-48.1-9.7-84.1-52-84.1-103v-1.3c14,7.8,30.2,12.7,47.4,13.3c-28.3-18.8-46.8-51-46.8-87.4c0-19.5,5.2-37.4,14.3-53
                        C44.4,74.9,122,116.5,209.1,121.1c-1.6-7.8-2.6-15.9-2.6-24c0-57.8,46.8-104.9,104.9-104.9c30.2,0,57.5,12.7,76.7,33.1
                        c23.7-4.5,46.5-13.3,66.6-25.3c-7.8,24.4-24.4,44.8-46.1,57.8c21.1-2.3,41.6-8.1,60.4-16.2C454.7,62.3,436.8,80.8,416.4,95.7
                        L416.4,95.7z"/>
                    </svg>
                </a>

            </div>
            <div class="col-3 text-center">
                <a href="https://www.youtube.com/user/Learn2Inc" target="_blank" rel="noopener,noreferrer">
                    <svg width="36" x="0px" y="0px" viewBox="-11 -56 576 512">
                    <path fill="#fff" d="M538.7,68.1c-6.3-23.7-24.8-42.3-48.3-48.6C447.8,8,277,8,277,8S106.2,8,63.6,19.5c-23.5,6.3-42,24.9-48.3,48.6
                        C3.9,110.9,3.9,200.4,3.9,200.4s0,89.4,11.4,132.3c6.3,23.6,24.8,41.5,48.3,47.8C106.2,392,277,392,277,392s170.8,0,213.4-11.5
                        c23.5-6.3,42-24.2,48.3-47.8c11.4-42.9,11.4-132.3,11.4-132.3S550.1,110.9,538.7,68.1z M221.1,281.6V119.2l142.7,81.2L221.1,281.6
                        L221.1,281.6z"/>
                    </svg>
                </a>

            </div>
            <div class="col-3 text-center">
                <a href="http://www.linkedin.com/company/ilearn2" target="_blank" rel="noopener,noreferrer">
                    <svg width="32" x="0px" y="0px" viewBox="-75 -56 448 512">
                    <path fill="#fff" d="M25.3,392h-92.9V92.9h92.9V392z M-21.2,52.1C-50.9,52.1-75,27.5-75-2.2C-75-31.9-50.9-56-21.2-56C8.5-56,32.6-31.9,32.6-2.2
                        C32.6,27.5,8.5,52.1-21.2,52.1z M372.9,392h-92.7V246.4c0-34.7-0.7-79.2-48.3-79.2c-48.3,0-55.7,37.7-55.7,76.7V392H83.5V92.9h89.1
                        v40.8h1.3c12.4-23.5,42.7-48.3,87.9-48.3c94,0,111.3,61.9,111.3,142.3V392H372.9z"/>
                    </svg>
                </a>

            </div>
        </div>

        

    </div>
    
    <div class="container-xl foot-contact">
        <div class="row">
            

            <div class="align-items-center align-self-center col-md-6 d-flex flex-column justify-content-center px-5">
            
            </div>
            <div class="col-md-6">
                <?php if (is_active_sidebar( 'footer-copy-right-text' ) ) { 
                       dynamic_sidebar( 'footer-contact-text' );
                    }       
                ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="copyright">
        <div class="container">
            <?php if (is_active_sidebar( 'footer-copy-right-text' ) ) { 
                   dynamic_sidebar( 'footer-copy-right-text' );
                }       
            ?>
        </div>
       
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle"><?php if(is_single(5625)): ?>Ready to talk to an actual Save the Titanic facilitator to see if this is a good fit for your organization?<?php else: ?>Get Started<?php endif; ?></h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if(is_single(5625)): ?>
            <p>Provide your contact details and we will be in touch soon.</p>
            <?php gravity_form(22, false, false, false, '', false); ?>
        <?php else: ?>
            <?php gravity_form(1, false, false, false, '', false); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '649628025');
    vgo('setTrackByDefault', true);
    vgo('process');
</script>
</body>
</html>


