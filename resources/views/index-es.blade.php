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
                  <a class="navbar-brand logo" href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                  <a class="navbar-brand logo" style="width: 7%;" href="{{ route('index') }}"><h3>WallaJob</h3></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                   <!-- Start Navigation List -->
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="{{ route('index') }}">
                      Inicio <i class="fa fa-angle"></i>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('about') }}">
                      WallaJob <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown">
                        <li>
                          <a href="{{ route('about') }}">
                          Acerca de
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('privacyPolicy') }}">
                            Política de privacidad
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('faq') }}">
                          FAQ
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('contact') }}">
                          Contacto
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ route('offers') }}">
                      Ofertas <i class="fa fa-angle"></i>
                      </a>
                    </li>
                    <li>
                    <a href="{{ route('publications') }}">
                    Profesionales <i class="fa fa-angle"></i>
                    </a>
                    </li>
                    <li>
                      <a class="active" href="{{ route('index') }}">
                        <i class="fa fa-globe" style="font-size:18px"></i>
                      </a>
                      <ul class="dropdown">
                        <li>
                          <a href="{{ route('index') }}">
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
                  @if( auth()->check() )
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('myAccount') }}">Hola {{ auth()->user()->name }}!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Cerrar sesión</a>
                    </li>
                  @else
                    <li class="left"><a href="{{ route('signup') }}"><i class="ti-pencil-alt"></i> Registro</a></li>                
                    <li class="right"><a href="{{ route('login') }}" ><i class="ti-lock"></i>  Iniciar sesión</a></li>
                  @endif  
                  </ul>
                </div>
              </div>
              <!-- Mobile Menu Start -->
              <ul class="wpb-mobile-menu">
                <li>
                  <a class="active" href="{{ route('index') }}">Inicio</a>
                  <ul>
                    <li><a href="{{ route('index') }}">English</a></li>
                    <li><a class="active" href="{{ asset('/indexEs') }}">Español</a></li>
                    <li><a href="{{ asset('/indexCa') }}">Catalán</a></li>
                  </ul>                       
                </li>
                <li>
                  <a href="{{ route('about') }}">Páginas</a>
                  <ul>
                    <li><a href="{{ route('about') }}">Acerca de</a></li>
                    <li><a href="job-page.html">Página de Empleo</a></li>
                    <li><a href="{{ route('bookmarked') }}">Detalles del trabajo</a></li>
                    <li><a href="resume.html">Página de currículum</a></li>
                    <li><a href="{{ route('privacyPolicy') }}">Política de privacidad</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="pricing.html">Tablas de precios</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
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
                <li class="btn-m"><a href="{{ route('signup') }}"><i class="ti-pencil-alt"></i> Regístrate</a></li>
                <li class="btn-m"><a href="{{ route('login') }}"><i class="ti-lock"></i>  Inicia Sesión</a></li>            
              </ul>
              <!-- Mobile Menu End --> 
            </nav>

            
            
      </div>

      
      <div class="search-container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Encuentra el trabajo que se adapte a tu vida</h1><br><br>
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
            <h2 class="section-title">Nuevas ofertas</h2>
            <div style="width: 105%; height: 765px; overflow-y: scroll; overflow-x: hidden;">
              <ul>
              <div class="row">
                  @foreach($companyOffers as $offer)                
                  <div class="col-md-12">    
                  <div class="job-list">
                      <div class="job-list-content">
                          <li name="name">
                              <a href="offers/{{ $offer->id }}">
                                  <h4>{{ $offer->name }}<span class="full-time" name="work_schedule">{{$offer->work_schedule}}</span></h4>
                                  <p>{{$offer->short_description}}</p>
                                  <div class="job-tag">
                                      <div class="pull-left">
                                          <div class="meta-tag">
                                                      
                                              <span name="id_category" value="{{ $offer->id_category }}"><i class="ti-briefcase"></i>
                                              @foreach($offerCategories as $offerCategory)
                                                  @if($offerCategory->id === $offer->id_category)
                                                      {{ $offerCategory->category }}
                                                  @endif
                                              @endforeach
                                              </span>                         
                                        
                                          <span name="city"><i class="ti-location-pin"></i>{{ $offer->city }}</span>
                                          <span name="salary"><i class="ti-money"></i>{{ $offer->salary }}</span>
                                          </div>
                                      </div>
                                      <div class="pull-right">                                
                                          <a href="offers/{{ $offer->id }}" class="btn btn-common btn-rm">More Detail</a>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </div>
                  </div>
                  </div>
                  @endforeach
                  
                  </div>
              </ul>
          </div>               
        </div>
    </section>
    <!-- Find Job Section End -->

        <!-- Counter Section Start -->
        <section id="counter">
      <div class="container">
        <div class="row">          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-briefcase"></i>
              </div>
              <div class="desc">                
                <h2>Ofertes de feina</h2>
                <h1 class="counter">{{ count($companyOffers) }}</h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-user"></i>
              </div>
              <div class="desc">
                <h2>Professionals publicats</h2>
                <h1 class="counter">{{ count($publicationsProfessionals) }}</h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <div class="desc">
                <h2>Usuaris</h2>
                <h1 class="counter">{{count($users)}}</h1>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <p class="block-title"><img id="logo_footer" src="{{ asset('img/logo.png') }}" class="img-responsive" alt="Footer Logo"></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="textwidget">
                <p id="text_footer" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed.</p>
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