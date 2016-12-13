<?php get_header(); ?>
   
   <style>
        .wrap-about{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: url('<?php bloginfo('template_url')?>/img/about-proceso.jpeg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            z-index: -1;
            transition: 5s ease;
            overflow: hidden;
        }
        .wrap-mercado{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: url('<?php bloginfo('template_url')?>/img/servicios-tiempos.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            z-index: -1;
            transition: 5s ease;
            overflow: hidden;
        }
   </style>
   
   <section class="inner-main">
      <div class="container-fluid">
          <div class="row text-center">
              <!--title page-->
              <h1 class="inner-title col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                  <?php the_title();?>
              </h1>
          </div>
      </div>
   </section>
   <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; endif;
    ?>

<?php get_footer(); ?>