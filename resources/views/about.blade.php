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
                <a class="navbar-brand logo" href="{{ route('index') }}">  <img src= "{{ asset('img/logo.png') }}" alt=""></a>
                <a class="navbar-brand logo" style="width: 7%;" href="{{ route('index') }}"><h3>WallaJob</h3></a>
              </div>

              <div class="collapse navbar-collapse" id="navbar">              
                 <!-- Start Navigation List -->
                 <ul class="nav navbar-nav">
                  <li>
                    <a href="{{ route('index') }}">
                    Home <i class="fa fa-angle"></i>
                    </a>
                  </li>
                  <li>
                    <a class="active" href="{{ route('about') }}">
                    WallaJob <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a class="active" href="{{ route('about') }}">
                        About
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('privacyPolicy') }}">
                        Privacy Policy
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('faq') }}">
                        FAQ
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('contact') }}">
                        Contact
                        </a>
                      </li>
                    </ul>
                  </li>
                  
                  <li>
                    <a href="{{ route('offers') }}">
                    Offers <i class="fa fa-angle"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('publications') }}">
                    Professionals <i class="fa fa-angle"></i>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('index') }}">
                      <i class="fa fa-globe" style="font-size:18px"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="{{ route('index') }}">
                        English
                        </a>
                      </li>
                      <li>
                        <a href="{{ asset('/indexEs') }}">
                        Spanish
                        </a>                          
                      </li>
                      <li>
                        <a href="{{ asset('/indexCa') }}">
                        Catalan
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  @if( auth()->check() )
                      <li class="nav-item">
                          <a class="nav-link font-weight-bold" href="{{ route('myAccount') }}">Hi {{ auth()->user()->name }}!</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/logout">Log Out</a>
                      </li>
                  @else
                    <li class="left"><a href="{{ route('signup') }}"><i class="ti-pencil-alt"></i> Sign up</a></li>                
                    <li class="right"><a href="{{ route('login') }}" ><i class="ti-lock"></i>  Log In</a></li>
                  @endif 
                </ul>
              </div>                           
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a href="{{ route('index') }}">Home</a>
                <ul>
                  <li><a href="{{ route('index') }}">Home 1</a></li>
                  <li><a href="{{ asset('/indexEs') }}">Home 2</a></li>
                  <li><a href="{{ asset('/indexCa') }}">Home 3</a></li>
                  <li><a href="index-04.html">Home 4</a></li>
                </ul>                       
              </li>
              <li>
                <a class="active" href="{{ route('about') }}">Pages</a>
                <ul>
                  <li><a class="active" href="{{ route('about') }}">About</a></li>
                  <li><a href="job-page.html">Job Page</a></li>
                  <li><a href="{{ route('bookmarked') }}">Job Details</a></li>
                  <li><a href="resume.html">Resume Page</a></li>
                  <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                  <li><a href="{{ route('faq') }}">FAQ</a></li>
                  <li><a href="pricing.html">Pricing Tables</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Candidates</a>
                <ul>
                  <li><a href="browse-jobs.html">Browse Jobs</a></li>
                  <li><a href="browse-categories.html">Browse Categories</a></li>
                  <li><a href="add-resume.html">Add Resume</a></li>
                  <li><a href="manage-resumes.html">Manage Resumes</a></li>
                  <li><a href="job-alerts.html">Job Alerts</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Employers</a>
                <ul>
                  <li><a href="post-job.html">Add Job</a></li>
                  <li><a href="manage-jobs.html">Manage Jobs</a></li>
                  <li><a href="manage-applications.html">Manage Applications</a></li>
                  <li><a href="browse-resumes.html">Browse Resumes</a></li>
                </ul>
              </li> 
              <li>
                <a href="blog.html">Blog</a>
                <ul>
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

          
        </div>
      </div>
      <!-- Header Section End -->  

      <!-- Page Header Start -->
      
      

      <div class="page-header" style="background: url({{ asset('img/banner1.jpg') }});">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">About Us</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Home</a></li>
                  <li class="current">About Us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->        

      <!-- Main container Start -->  
      <div class="about section">
        <div class="container">
          <div class="row">          
            <div class="col-md-6 col-sm-12">
              <img src= "{{ asset('img/about/img1.jpg') }}" alt="">
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="about-content">
                <h2 class="medium-title">About Job Career</h2>
                <p class="desc">Consectuture adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat utwisi veniam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi, sapiente ex debitis quis dolorum unde, neque quibusdam eveniet nobis enim porro repudiandae nesciunt quidem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni delectus soluta adipisci beatae ullam quisquam, quia recusandae rem assumenda, praesentium porro sequi eaque doloremque tenetur incidunt officiis explicabo optio perferendis.</p>
                <a href="#" class="btn btn-common">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main container End -->  
      
      <!-- Service  Section -->
      <section id="service-main" class="section">
        <!-- Container Starts -->
        <div class="container">
          <h1 class="section-title text-center">
           Smart & Easy Place for job Seeker Poster & Recruters
          </h1> 
          <div class="row">        
            <div class="col-sm-6 col-md-4">
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="ti-search">
                  </i>
                </div>
                <h2>
                  Search Miloins of jobs
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eligendi consequuntur assumenda perferendis natus dolorem facere mollitia eius.
                </p>
              </div>
              <!-- Service-Block-1 Item Ends -->
            </div>

            <div class="col-sm-6 col-md-4">
              <!-- Service-Block-1 Item Starts -->
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="ti-world">
                  </i>
                </div>
                <h2>
                  Location Base Search
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eligendi consequuntur assumenda perferendis natus dolorem facere mollitia eius.
                </p>
              </div>             
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="service-item">
                <div class="icon-wrapper">
                  <i class="ti-stats-up">
                  </i>
                </div>
                <h2>
                  Top Careers
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eligendi consequuntur assumenda perferendis natus dolorem facere mollitia eius.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Service Main Section Ends -->

      <!-- Testimonial Section Start -->
      <section id="testimonial" class="section">
        <div class="container">
          <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
              <div class="item active text-center">  
                <!-- <img class="img-member" src="assets/img/testimonial/img1.jpg" alt="">  -->
                <img class="img-member" src="{{ asset('img/testimonial/img1.jpg') }}" alt=""> 
                <div class="client-info">
                 <h2 class="client-name">"John Smith  <span>(Project Menager)</span></h2>
                </div>
                <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
              </div>
              <div class="item text-center">
                <!-- <img class="img-member" src="assets/img/testimonial/img2.jpg" alt="">  -->
                <img class="img-member" src="{{ asset('img/testimonial/img2.jpg') }}" alt=""> 
                <div class="client-info">
                 <h2 class="client-name">"John Smith  <span>(Project Menager)</span></h2>
                </div>
                <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
              </div>
              <div class="item text-center">
                <!-- <img class="img-member" src="assets/img/testimonial/img3.jpg" alt="">  -->
                <img class="img-member" src="{{ asset('img/testimonial/img3.jpg') }}" alt=""> 
                <div class="client-info">
                  <h2 class="client-name">" Quan Ngyen <span>(Electricity Engineer)</span></h2>
                </div>
                <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonial Section End -->

      <!-- Clients Section -->
      <section class="clients section">
        <div class="container">
          <h2 class="section-title">
            Clients & Partners
          </h2>
          <div class="row"> 
            <div id="clients-scroller">
              <div class="items">
                <!-- <img src="assets/img/clients/img1.png" alt=""> -->
                <img src="{{ asset('img/clients/img1.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img2.png" alt=""> -->
                <img src="{{ asset('img/clients/img2.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img3.png" alt=""> -->
                <img src="{{ asset('img/clients/img3.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img4.png" alt=""> -->
                <img src="{{ asset('img/clients/img4.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img5.png" alt=""> -->
                <img src="{{ asset('img/clients/img5.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img6.png" alt=""> -->
                <img src="{{ asset('img/clients/img6.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img6.png" alt=""> -->
                <img src="{{ asset('img/clients/img6.png') }}" alt=""> 
              </div>
              <div class="items">
                <!-- <img src="assets/img/clients/img6.png" alt=""> -->
                <img src="{{ asset('img/clients/img6.png') }}" alt=""> 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Client Section End --> 

           @include('footer')
        
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