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

  <!-- show publication Section Start -->
    <section class="find-job section">
        <div class="container">
        <br>
            <h2 class="section-title">{{ $publicationDetails->name }} 
            <br>
            @if($publicationDetails->type_professional === 0)
                <span class="full-time" name="type_professional">
                I'm Freelancer
                </span>
            </h2>
            @endif
            <br>
            <ul>
            <div class="row">               
                <div class="col-md-12">    
                <div class="job-list">
                    <div class="job-list-content">
                        <li name="name">
                                <h4>Short Description</h4>                                                           
                                <p>{{$publicationDetails->short_description}}</p>
                                <hr>
                                <h4>Description</h4>   
                                <p class="show_description">{{$publicationDetails->description}}</p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                                     
                                            <h5><span name="id_category" value="{{ $publicationDetails->id_category }}"><i class="ti-briefcase"></i>Category: 
                                            @foreach($offerCategories as $offerCategory)
                                                @if($offerCategory->id === $publicationDetails->id_category)
                                                    {{ $offerCategory->category }}
                                                @endif
                                            @endforeach
                                            </span></h5>                                                                                           
                                        <h5><span name="city"><i class="ti-location-pin"></i>City: {{ $publicationDetails->city }}</span></h5>
                                        @if($publicationDetails->price)
                                        <h5>
                                            <span name="price"><i class="ti-money"></i>
                                            Price: {{ $publicationDetails->price }}
                                            </span>
                                        </h5>
                                        @endif
                                        </div>
                                    </div>
                                                                       
                                    <div class="pull-right">  
                                                               
                                        <a href="{{ route('showContact', ['id'=>$professionalUser->id_user]) }}" class="btn btn-common btn-rm">Contact</a>
                                    
                                    </div>                                                                 
                                    
                                </div>
                            
                        </li>
                    </div>
                </div>
                </div>

                
                </div>
            </ul>
        
        </div>
    </section>
  <!-- Find Job Section End -->

         @include('footer')
         @include('scripts')
  </body>
</html>