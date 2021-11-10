<!doctype html>
<html lang="en">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K2QJPQS');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Y6SSa4q37DLJH3BQ8PrqWYDjRqaL-eHPY0K2nEtMD5M" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>
    <title>Learn2 – A Team Building Company that Inspires Real Change</title>
</head>

<body <?php body_class(); ?>>
    <header class="header shadow">
    <div class="d-none d-xl-flex justify-content-end top-nav">
        <?php 
                    $args = array(
                        'menu_class' => 'nav',        
                        'menu' => 'top-header-menu'
                    );
                    wp_nav_menu( $args ); 
                    ?>
    </div>
        <nav class="navbar" aria-label="navbar">
           <?php $custom_logo_url = '';

                 if( has_custom_logo() ):  ?>
                  <?php 
                      // Get Custom Logo URL
                      $custom_logo_id = get_theme_mod( 'custom_logo' );
                      $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                      $custom_logo_url = $custom_logo_data[0];
                  ?>
            <?php endif; ?>      
            <a class="brand" href="/" aria-label="Learn2 logo"><img src="<?php echo $custom_logo_url; ?>" alt="Learn2 Logo" class="w-100"></a>
            <div class="align-items-center d-flex flex-grow-1 flex-xl-grow-0 justify-content-end main-nav">
                

                        <?php 
                        $args = array(
                            'menu_class' => 'nav text-uppercase',        
                            'menu_id' => 'mainnav',        
                            'menu' => 'header-menu'
                        );
                        wp_nav_menu( $args ); 
                        ?>

                
                <div class="icon d-xl-none" id="navcall" id="navcall">
                    <div class="ham"><span></span><span></span><span></span></div>
                    <div class="icon-cross">&#x2715;</div>
                </div>
                
                <div class="srhbox" id="srhbox">
                    <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                </div>
               <div class="d-flex srhcall" id="srhcall">
                    <svg width="14" x="0px" y="0px" viewBox="-43 -56 512 512">
                    <path fill="#212529" d="M462,386.7L362.3,287c-4.5-4.5-10.6-7-17-7H329c27.6-35.3,44-79.7,44-128c0-114.9-93.1-208-208-208S-43,37.1-43,152
                        s93.1,208,208,208c48.3,0,92.7-16.4,128-44v16.3c0,6.4,2.5,12.5,7,17l99.7,99.7c9.4,9.4,24.6,9.4,33.9,0l28.3-28.3
                        C471.3,411.3,471.3,396.1,462,386.7z M165,280c-70.7,0-128-57.2-128-128C37,81.3,94.2,24,165,24c70.7,0,128,57.2,128,128
                        C293,222.7,235.8,280,165,280z"/>
                    </svg>

               </div>
               
            </div>
        </nav>
        
    </header>

    <div class="d-none d-md-flex justify-content-end top-nav sub-nav bg-orange text-uppercase">
        <?php 
                    $subargs = array(
                        'menu_class' => 'nav',        
                        'menu' => 'subnav-menu'
                    );
                    wp_nav_menu( $subargs ); 
                    ?>
        </div>

