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

  <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">
        <br>
            <h2 class="section-title" style="color:#337ab7;">Result search</h2><br>
            @foreach($search as $s)
            <h4 name="name"> {{$s->name}} </h4>
            @endforeach
        

        </div>
    </section>
  <!-- Find Job Section End -->

         @include('footer')
         @include('scripts')
  </body>
</html>