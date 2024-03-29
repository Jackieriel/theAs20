<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FSMXPBVREG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FSMXPBVREG');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="k8JbKK60eu-5Pr6ZvUsHUJ54JY9Wy4JNFFhpGjOvM8s" />

    <title>{{ config('app.name', 'theAs20') }} theAs20 - @yield('title')</title>

    <meta name="description" content="theA's20
    Emem & Idorenyin
    You're Invited to the Holy Matrimony and Traditional Marriage.
    28th, 26th November, 2020.">

    <meta name="keywords" content="Idorenyin,Amaunam,theA's, Emem Udofia, Wedding">


    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400,400i,700&display=swap" rel="stylesheet">
   
   
    {{-- <link href="{{ asset('css/hockup/css/main.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/hockup/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hockup/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/hockup/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hockup/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hockup/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/hockup/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/hockup/css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/hockup/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hockup/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hockup/css/style.css') }}">

    
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">

  <style>
    body{
      background: url(images/bb.jpg);
    }
  </style>

    
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    {{-- <div id="app"> --}}
       
            @yield('content')

             {{-- loader --}}
            <div id="loader-wrapper">
              <div id="loader"></div>
              <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>

            {{-- loader --}}

    {{-- </div> --}}

     <!-- Scripts -->
     <script src="{{ asset('js/hockup/js/jquery.min.js') }}"></script>

     <script src="{{ asset('js/hockup/js/jquery-migrate-3.0.1.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/popper.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/jquery.easing.1.3.js') }}"></script>
     <script src="{{ asset('js/hockup/js/jquery.waypoints.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/aos.js') }}"></script>
     <script src="{{ asset('js/hockup/js/jquery.animateNumber.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/jquery.mb.YTPlayer.min.js') }}"></script>
     <script src="{{ asset('js/hockup/js/scrollax.min.js') }}"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
     <script src="{{ asset('js/hockup/js/google-map.js') }}"></script>
     
     <script src="{{ asset('js/hockup/js/main.js') }}"></script>


{{-- music toggle --}}

<script>
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }


  // Loader

document.onreadystatechange = function() { 
            if (document.readyState !== "complete") { 
                document.querySelector( 
                  "body").style.visibility = "hidden"; 
                document.querySelector( 
                  "#loader-wrapper").style.visibility = "visible"; 
            } else { 
                document.querySelector( 
                  "#loader-wrapper").style.display = "none"; 
                document.querySelector( 
                  "body").style.visibility = "visible"; 
            } 
        }; 



// Loader
  </script>
 
</body>
</html>
