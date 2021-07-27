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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>
    <title>Learn2 – A Team Building Company that Inspires Real Change</title>
</head>

<body>
    <header class="header shadow">
    <div class="d-none d-md-flex justify-content-end top-nav">
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
            <a class="brand" href="/" aria-label="Learn2 logo"><img src="<?php echo $custom_logo_url; ?>" alt="" class="w-100"></a>
            <div class="align-items-center d-flex flex-grow-1 flex-md-grow-0 justify-content-end main-nav"">
                

                        <?php 
                        $args = array(
                            'menu_class' => 'nav text-uppercase',        
                            'menu_id' => 'mainnav',        
                            'menu' => 'header-menu'
                        );
                        wp_nav_menu( $args ); 
                        ?>

                
                <div class="icon d-md-none" id="navcall" id="navcall">
                    <div class="ham"><span></span><span></span><span></span></div>
                    <div class="icon-cross">&#x2715;</div>
                </div>
                <!-- 
                <div class="srhbox" id="srhbox">
                    <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                </div>
               <div class="d-flex srhcall" id="srhcall"><i class="fa fa-search" aria-hidden="true"></i></div>
                -->
            </div>
        </nav>
    </header>

