<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    
    <title>WallaJob</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css') }}" type="text/css">  
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons.css') }}"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('extras/owl.theme.css') }}" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{ asset('extras/settings.css') }}" type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/red.css') }}" media="screen" />
    
  </head>

  <body>  
      <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <div class="logo-menu">
            <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand logo" href="{{ asset('/') }}"><img src="assets/img/logo.png" alt=""></a>
                  <a class="navbar-brand logo" style="width: 7%;" href="{{ asset('/') }}"><h3>WallaJob</h3></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                   <!-- Start Navigation List -->
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="{{ asset('/') }}">
                      Inicio <i class="fa fa-angle"></i>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('/about') }}">
                      WallaJob <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown">
                        <li>
                          <a href="{{ asset('/about') }}">
                          Acerca de
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('/privacyPolicy') }}">
                            Política de privacidad
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('/faq') }}">
                          FAQ
                          </a>
                        </li>
                        <li>
                          <a href="contact.html">
                          Contacto
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                      Ofertas <i class="fa fa-angle"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                      Profesionales <i class="fa fa-angle"></i>
                      </a>
                    </li>
                    <li>
                      <a class="active" href="{{ asset('/') }}">
                        <i class="fa fa-globe" style="font-size:18px"></i>
                      </a>
                      <ul class="dropdown">
                        <li>
                          <a href="{{ asset('/') }}">
                            English
                          </a>
                        </li>
                        <li>
                          <a class="active" href="{{ asset('/indexEs') }}">
                            Español
                          </a>                          
                        </li>
                        <li>
                          <a href="{{ asset('/indexCa') }}">
                            Catalán
                          </a>
                        </li>
                      </ul>
                  </ul>
                  <ul class="nav navbar-nav navbar-right float-right">
                    <li class="left"><a href="post-job.html"><i class="ti-pencil-alt"></i> Publicar un Empleo</a></li>
                    <li class="right"><a href="my-account.html"><i class="ti-lock"></i>  Acceder</a></li>
                  </ul>
                </div>
              </div>
              <!-- Mobile Menu Start -->
              <ul class="wpb-mobile-menu">
                <li>
                  <a class="active" href="{{ asset('/') }}">Inicio</a>
                  <ul>
                    <li><a href="{{ asset('/') }}">English</a></li>
                    <li><a class="active" href="{{ asset('/indexEs') }}">Español</a></li>
                    <li><a href="{{ asset('/indexCa') }}">Catalán</a></li>
                  </ul>                       
                </li>
                <li>
                  <a href="{{ asset('/about') }}">Páginas</a>
                  <ul>
                    <li><a href="{{ asset('/about') }}">Acerca de</a></li>
                    <li><a href="job-page.html">Página de Empleo</a></li>
                    <li><a href="job-details.html">Detalles del trabajo</a></li>
                    <li><a href="resume.html">Página de currículum</a></li>
                    <li><a href="{{ asset('/privacyPolicy') }}">Política de privacidad</a></li>
                    <li><a href="{{ asset('/faq') }}">FAQ</a></li>
                    <li><a href="pricing.html">Tablas de precios</a></li>
                    <li><a href="contact.html">Contacto</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Para los candidatos</a>
                  <ul>
                    <li><a href="browse-jobs.html">Para empleos</a></li>
                    <li><a href="browse-categories.html">Examinar las categorías</a></li>
                    <li><a href="add-resume.html">Añadir currículum</a></li>
                    <li><a href="manage-resumes.html">Administrar currículum</a></li>
                    <li><a href="job-alerts.html">Alertas de trabajo</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Para los empleadores</a>
                  <ul>
                    <li><a href="post-job.html">Agregar trabajo</a></li>
                    <li><a href="manage-jobs.html">Administrar trabajos</a></li>
                    <li><a href="manage-applications.html">Administrar aplicaciones</a></li>
                    <li><a href="browse-resumes.html">Buscar currículums</a></li>
                  </ul>
                </li> 
                <li>
                  <a href="blog.html">Blog</a>
                  <ul class="dropdown">
                    <li><a href="blog.html">Blog - Right Sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                    <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                    <li><a href="single-post.html">Blog Single Post</a></li>
                  </ul>
                </li>  
                <li class="btn-m"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>          
              </ul>
              <!-- Mobile Menu End --> 
            </nav>

            <!-- Off Canvas Navigation -->
            <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
            
      </div>

      
      <div class="search-container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Encuentra el trabajo que se adapte a tu vida</h1><br><h2>¡Más de <strong>12,000</strong> trabajos te están esperando en WallaJob!</h2>
              <div class="content">
                <form method="" action="">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="empleo / palabras clave / empresa">
                        <i class="ti-time"></i>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="ciudad / provincia / código postal">
                        <i class="ti-location-pin"></i>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker">
                            <option>Todas las Categorias</option>
                            <option>Finanzas</option>
                            <option>Ingeniería Informática</option>
                            <option>Educación / Entrenamiento</option>
                            <option>Diseño artístico</option>
                            <option>Venta / Marketing</option>
                            <option>Cuidado de la salud</option>
                            <option>Ciencia</option>                              
                            <option>Servicios de comida</option>
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-1 col-sm-6">
                      <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="popular-jobs">
                <b>Palabras clave populares: </b>
                <a href="#">Diseño web</a>
                <a href="#">Gerente</a>
                <a href="#">Programación</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->
    </div>
    
    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Trabajos populares</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Diseñador Web</a><span class="full-time">Tiempo Completo</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-brush"></i>Diseño artístico</a></span>
                      <span><i class="ti-location-pin"></i>Tarragona, España</span>
                      <span><i class="ti-time"></i>60/Horas</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Más Detalles</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-2.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Desarrollador de Front-End</a><span class="full-time">Tiempo Completo</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-desktop"></i>Tecnologías</a></span>
                      <span><i class="ti-location-pin"></i>Barcelona, España</span>
                      <span><i class="ti-time"></i>60/Horas</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Más Detalles</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Contador Senior</a><span class="part-time">Tiempo Partido</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-home"></i>Finanzas</a></span>
                      <span><i class="ti-location-pin"></i>Reus, España</span>
                      <span><i class="ti-time"></i>60/Horas</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Más Detalles</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-4.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Desarrollador web Fullstack </a><span class="full-time">Tiempo Completo</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-desktop"></i>Tecnologías</a></span>
                      <span><i class="ti-location-pin"></i>Madrid, España</span>
                      <span><i class="ti-time"></i>60/Horas</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Más Detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Mostrando <span>6-10</span> de 24 Trabajos</a>
            </div>                    
            <ul class="pagination pull-right">              
              <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> Anterior</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="active"><a href="#" class="btn btn-common">Siguiente <i class="ti-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Find Job Section End -->

    

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title"><img src="assets/img/logo.png" class="img-responsive" alt="Footer Logo"></h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Enlaces Rápidos</h3>
                <ul class="menu">
                  <li><a href="#">Sobre nosotros</a></li>
                  <li><a href="#">Apoyo</a></li>
                  <li><a href="#">Licencia</a></li>
                  <li><a href="#">Términos y condiciones</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Trabajos más buscados</h3>
                <ul class="menu">
                  <li><a href="#">Desarrollador Android</a></li>
                  <li><a href="#">Contador senior</a></li>
                  <li><a href="#">Desarrollador Front-End</a></li>
                  <li><a href="#">Junior Tester</a></li>
                  <li><a href="#">Gerente de Proyecto</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Síguenos</h3>
                <div class="bottom-social-icons social-icon">  
                  <a class="twitter" href="https://twitter.com"><i class="ti-twitter-alt"></i></a>
                  <a class="facebook" href="https://web.facebook.com"><i class="ti-facebook"></i></a>                   
                  <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                  <a class="linkedin" href="https://www.linkedin.com"><i class="ti-linkedin"></i></a>
                </div>  
                <p>¡Únase a nuestra lista de correo para estar al día y recibir avisos sobre nuestros nuevos lanzamientos!</p>
                <form class="subscribe-box">
                  <input type="text" placeholder="Tu correo electrónico">
                  <input type="submit" class="btn-system" value="Enviar">
                </form> 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>Todos los derechos reservados &copy; 2018 - Diseñado & Desarrollado por <a rel="nofollow" href="http://www.google.com">Judith & Andreu</a></p>
              </div>   
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>

    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>
        
    <!-- Main JS  -->
    <script type="text/javascript" src="{{ asset('js/jquery-min.js') }}"></script>      
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/material-kit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contact-form-script.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>

    
  </body>
</html>