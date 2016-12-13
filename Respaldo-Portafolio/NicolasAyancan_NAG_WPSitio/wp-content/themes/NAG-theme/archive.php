<?php get_header(); ?>
  
   <section class="inner-main">
      <div class="container-fluid">
          <div class="row text-center">
              <!--title page-->
              <h1 class="inner-title col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Portafolio</h1>
          </div>
      </div>
   </section>
   
   <section class="portfolio-container">
       <div class="portfolio col-lg-12">
          <!--project-->
          <?php
           
           if (have_posts())
            {
                $args = array( 'posts_per_page' => -1, 'orderby'=> 'date', 'order' => 'ASC' );
                $glossaryposts = get_posts( $args ); 
            }
            foreach( $glossaryposts as $post ) :	setup_postdata($post); 
           ?>
           <figure class="portfolio-proj col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img src="<?php the_post_thumbnail_url(); ?>" alt="Imagen proyecto" class="img-responsive">
               <figcaption class="text-center">
                   <h3 class="portfolio-title col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                       <?php the_title(); ?>
                   </h3>
                   <button onclick="location.href='<?php the_permalink(); ?>';" title="Ver detalles del proyecto" class="inner-btn col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Ver proyecto</button>
               </figcaption>
           </figure>
           <?php endforeach;?>
       </div>
       
       <!--button HIDDEN-->
       <div class="portfolio-btn" hidden="hidden">
           <button class="inner-btn bg-btn col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Ver más proyectos</button>
       </div>
   </section>

<?php get_footer(); ?>