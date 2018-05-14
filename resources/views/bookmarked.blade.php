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
                    <a  class="active" href="#">
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
                   <li class="left"><a href="{{ route('signup') }}"><i class="ti-pencil-alt"></i> Sign up</a></li>                  
                  <li class="right"><a href="{{ route('login') }}" ><i class="ti-lock"></i>  Log In</a></li>
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

          
      </div>
      <!-- Header Section End -->  

      <!-- Page Header Start -->
      <div class="page-header" style="background: url({{ asset('img/banner1.jpg') }});">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">Job Alerts</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Job Alerts</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End --> 

    <section class="section text-center" >
      <div class="container">
                <!-- Start Animations Text -->
                <h1>

                    Page under construction
                </h1>
              <br>
                <!-- End Animations Text -->

                <!-- Start Buttons -->
                <a rel="nofollow" target="_blank" href="javascript:history.back(-1);" class="btn btn-common btn-large"><i class="fa fa-cart"></i> Go back</a>
        </div>
      </div>
    </section>

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
                <p id="text_footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed.</p>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Quick Links</h3>
  							<ul class="menu">
                  <li><a href="{{ route('about') }}">About Us</a></li>
                  <li><a href="{{ route('contact') }}">Support</a></li>
                  <li><a href="#">License</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Follow Us</h3>
                <div class="bottom-social-icons social-icon">  
                  <a class="twitter" href="https://twitter.com"><i class="ti-twitter-alt"></i></a>
                  <a class="facebook" href="https://web.facebook.com"><i class="ti-facebook"></i></a>                   
                  <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                  <a class="linkedin" href="https://www.linkedin.com"><i class="ti-linkedin"></i></a>
                </div>	
                <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                <form class="subscribe-box">
                  <input type="text" placeholder="Your email">
                  <input type="submit" class="btn-system" value="Send">
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
                <p>All Rights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="http://www.google.com">Judith & Andreu</a></p>
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