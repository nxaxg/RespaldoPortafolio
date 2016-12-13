<?php get_header(); ?>
   
   <section class="main-project">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
       <div class="wrap-project">
          <!--thumbnail-->
           <style>
                .wrap-project{
                    position: absolute;
                    content: "";
                    height: 100%;
                    width: 100%;
                    background: url('<?php the_post_thumbnail_url() ?>');
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center;
                    z-index: -1;
                    transition: 5s ease;
                    overflow: hidden;
                }
            </style>
       </div>
       <div class="project text-center col-lg-12">
           <!--title-->
            <div class="row">
                <h1 class="project-title col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1"><?php the_title();?></h1>
            </div>
            <div class="row">
                <div class="project-link text-center col-lg-12">
                   <!--link a proyecto-->
                   <?php $link = get_post_custom_values('link');
                        $behance = get_post_custom_values('behance');
                        $git = get_post_custom_values('git');
                        if($link){?>
                            <a href="<?php echo $link[0]; ?>" title="Link a proyecto" target="_blank"><span class="fa fa-link"></span></a>
                       <?php } if($git){ ?>
                           <a href="<?php echo $git[0]; ?>" title="Link a proyecto" target="_blank"><span class="fa fa-github"></span></a>
                    <?php } if($behance){ ?>
                            <a href="<?php echo $behance[0]; ?>" title="Link a proyecto" target="_blank"><span class="fa fa-behance"></span></a>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
               <!--tags-->
                <ul class="project-tags list-inline col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <!--project tags-->
                    <?php the_tags('<li>', '</li> <li>', '</li>'); ?>
                </ul>
            </div>
            <div class="row">
               <!--fecha-->
               <?php $fecha = get_post_custom_values('fecha'); ?>
                <p class="project-date">
                   <span class="fa fa-calendar-o"></span> 
                    <?php
                        if (isset($fecha[0])) {  
                            echo $fecha[0];  
                        }
                    ?>
                </p>
            </div>
       </div>
   </section>
   
   <section class="project-description">
       <div class="container-fluid col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
          <!-- the content-->
           <div class="content-description">
               <div class="title-description text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h3>Descripción</h3>
               </div>
               <div class="inner-par col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <?php the_content();?>
               </div>
           </div>
       </div>
   </section>
   
   <div class="portfolio-btn">
        <button onclick="history.back(-1)" class="inner-btn bg-btn col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Volver a proyectos</button>
    </div>
    
   <?php endwhile; endif; ?>

<script>
    $(".nav li:nth-child(3)").addClass('nav-selected');
</script>
<?php get_footer();?>