<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo(name); ?> <?php wp_title(); ?></title>
    <link href="<?php bloginfo(stylesheet_url); ?>" rel="stylesheet" type="text/css">
    <!--META-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Portfolio de proyectos Nicolas Ayancan Guerrero -> NAG">
    <meta name="keywords" content="portfolio, diseño, desarrollo, web, proyectos, portafolio, projects, diseño web, desarrollo web">
    <meta name="robots" content="all">
    <!--Google analytics shortcode-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87916377-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- recaptcha
    <script src='https://www.google.com/recaptcha/api.js'></script>-->
    <?php wp_head(); ?>
</head>
<body>
    <header id="top">
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                   <!--icon bar-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-clps">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--/icon bar-->
                    <!--logo-->
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>" title="Take me home">
                        <img src="<?php bloginfo('template_url')?>/img/logo-white.png" alt="NAG" class="img-responsive" alt="Logo NAG">
                    </a>
                    <!--/logo-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php
                            $settings = array(
                                        'theme_location'  => '',
                                        'menu'            => 'nav-menu', 
                                        'container'       => 'div', 
                                        'container_class' => 'collapse navbar-collapse nav-clps navbar-right text-center', 
                                        'container_id'    => '',
                                        'menu_class'      => 'nav navbar-nav', 
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => '')
                                        ;
                            wp_nav_menu($settings);
                        ?>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
   </header>