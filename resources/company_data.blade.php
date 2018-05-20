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
    
    <!-- ReCaptcha  -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

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
                <a class="navbar-brand logo" href="{{ route('index') }}"><img src= "{{ asset('img/logo.png') }}" alt=""></a>
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
                    <a href="{{ route('about') }}">
                    WallaJob <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="{{ route('about') }}">
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
                    <a href="#">
                    Offers <i class="fa fa-angle"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    Freelancer <i class="fa fa-angle"></i>
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
                          <a class="nav-link font-weight-bold" href="#">Hi {{ $name }}!</a>
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
                <a class="active" href="{{ route('index') }}">Home</a>
                <ul>
                  <li><a class="active" href="{{ route('index') }}">Home 1</a></li>
                  <li><a href="{{ asset('/indexEs') }}">Home 2</a></li>
                  <li><a href="{{ asset('/indexCa') }}">Home 3</a></li>
                  <li><a href="index-04.html">Home 4</a></li>
                </ul>                       
              </li>
              <li>
                <a href="{{ route('about') }}">Pages</a>
                <ul>
                  <li><a href="{{ route('about') }}">About</a></li>
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
              <li class="btn-m"><a href="{{ route('signup') }}"><i class="ti-pencil-alt"></i> Sign up</a></li>
              <li class="btn-m"><a href="{{ route('login') }}"><i class="ti-lock"></i>  Log In</a></li>          
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
                <h2 class="product-title">Register</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Register</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->   

      <section class="section text-center" >
      <div class="container">
       
        <!-- company data form -->
           

          <form id="form_login" name="miform" method="post" action="">
            <h1>Company data</h1>
            <hr>
            <div class="imgcontainer">
            </div>            
            <div class="container">
              
          <label ><b>Company Name:</b></label> <br />
          <input type="text" name="name" value="" size="20" maxlength="30" />


          <br />
          <label ><b>CIF:</b></label> <br />
          <input type="text" name="cif" value="" size="10" maxlength="9" />

          <br/>

              <label ><b>Country:</b></label> <br />

              <input type="text" name="country" value="" size="50" maxlength="80" />
        
              <br/>

              <label ><b>City:</b></label> <br />

              <input type="text" name="city" value="" size="50" maxlength="80" />

              <br/>

              <label ><b>Direction Company:</b></label> <br />

              <input type="text" name="direction" value="" size="50" maxlength="80" />              

              <br/>

              <label ><b>Phone Number:</b></label> <br />

              <input type="text" name="phoneNumber" value="" size="50" maxlength="15" />

              <label ><b>Contact Name:</b></label> <br />

              <input type="text" name="contact_name" value="" size="50" maxlength="15" />
         
              <br/><br/>
              
              <label ><b>Upload Image:</b></label>
              <div class="container" id="img_up" >
              <input type="file" name="foto" style=" display:  initial; " />
              </div>

          
          <br/><br/>
          <input type="reset" class="btn btn-common btn-large" name="limpiar" value="CANCEL" />
          <input type="submit" class="btn btn-common btn-large" name="enviar" value="SAVE" />

          </form>
        </div>
      </div>
    </section>  

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