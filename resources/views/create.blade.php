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
 @include('navigation_bar')

      <section class="section text-center" >
      <div class="container">
                <!-- Start Animations Text -->


            <!-- Sing up form -->
                <form  id="form_login" form method="POST" action="{{ route('createUser') }}" style="border:1px solid #ccc">
                    {{ csrf_field() }}
                  <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">                    
                        <label for="type_user">Do you offer work or do you want work? <br>
                        <input type="radio" name="type_user" value="0" checked> Professional user.<br>
                        <input type="radio" name="type_user" value="1"> Company user.<br>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"> 
                    </div>
             
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                    </div>            
                    
                    <label>
                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>
                    
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                  <center><div class="g-recaptcha" data-sitekey="6Ld_7FUUAAAAANcFtavQIZXBFqkE3U_ysHBF2W-g"></div></center>
                    <div class="clearfix">
                      <button type="reset" class="btn btn-common btn-large">Cancel</button>
                      <button style="cursor:pointer" type="submit" class="btn btn-common btn-large">Sign Up</button>
                      <!-- <button type="submit" class="btn btn-common btn-large">Sign Up</button> -->
                    </div>
                  </div>
                </form>
                
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