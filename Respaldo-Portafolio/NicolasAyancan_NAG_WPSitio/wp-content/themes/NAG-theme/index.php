<?php get_header('home');?>
   
   <section id="main">
       <div class="wrap">
           <style>
               .wrap{
                    position: absolute;
                    content: "";
                    height: 100%;
                    width: 100%;
                    background: url('<?php bloginfo('template_url')?>/img/mid-back-2.jpg');
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center;
                    z-index: -1;
                    transition: 5s ease;
                    overflow: hidden;
                }
           </style>
       </div>
       <div class="container-fluid main">
           <div class="row">
              <figure class="text-center main-img">
                  <img src="<?php bloginfo('template_url')?>/img/logo-white.png" alt="Logo NAG" class="img-responsive text-center col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4 hidden-xs">
              </figure>
           </div>
           <div class="row">
               <h1 class="main-title text-center">Nicolas Ayancan Guerrero</h1>
           </div>
           <div class="row">
               <h2 class="main-subtitle text-center">Desarrollador Web</h2>
           </div>
           <div class="row">
                <ul class="list-inline rs-list text-center">
                    <li><a href="https://cl.linkedin.com/in/nxaxg" class="fa fa-linkedin" title="Link a Linkedin" target="_blank"></a></li>
                    <li><a href="https://github.com/nxaxg" class="fa fa-github-alt" title="Link a Github" target="_blank"></a></li>
                    <li><a href="https://www.behance.net/nxaxg" class="fa fa-behance" title="Link a Behance" target="_blank"></a></li>
                </ul>
            </div>
            <div class="row text-center">
                    <button onclick="location.href='/NAG/acerca/';" class="main-btn col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2" title="Cónoce más acerca de mi">Conóceme</button>
            </div>
       </div>
   </section>
   
<?php get_footer('hidden');?>