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
     <!-- Page Header Start -->
     <div class="page-header" style="background: url({{ asset('img/banner1.jpg') }});">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">Contact professional</h2>
                <ol class="breadcrumb">
                  <li><a href="{{ route('index') }}"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Contact professional</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->   
      <div class="container">
        @if( auth()->check() )
        <br><br>
            <h2>Contact information:</h2><br>
            
            <h4>Contact name: </h4>
            <p>{{$userInformation->name}}</p><br>
            <h4>Email: </h4>
            <p>{{$userInformation->email}}</p><br> 
            <h4>Phone number: </h4>
            <p>{{$professionalInformation->phone_number}}</p><br>
            <div></div>
            <h5></h5>
        @else
        <br>
            <br><br><br>
            <center><h2 style="color:red;">Attention! You can not see this information. </h2>
            <h2>You have to be registered and with the session started.</h2>
            <br>
            
            <a href="{{ route('signup') }}" class="btn btn-common btn-rm"><i class="ti-pencil-alt"></i> Sign up</a>
            <a href="{{ route('login') }}" class="btn btn-common btn-rm"><i class="ti-lock"></i>  Log In</a></center>
            
            <br><br><br>
        @endif  
    </div>
    <br><br>
         @include('footer')
         @include('scripts')
  </body>
</html>