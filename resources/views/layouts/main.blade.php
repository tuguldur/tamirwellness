<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    {{-- OWN STYLES --}}
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.8.1.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/compact-gallery.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <style>
      .navbar-nav .nav-link.active::after {
       width: 100%;
      }
    </style>
</head>
<body>
       {{-- nav --}}
       <nav class="navbar navbar-expand-md navbar-white bg-white dev-nav" style="width:100%; position:fixed; top:0; z-index:2;">
        <div class="container">
        <div class="d-flex w-50 order-0">
        <a class="navbar-brand mr-1" href="#">
          <img id="logo" src="image/tamir-logo.png"/>
          <span>Tamir<br> wellness</span>
      </a>
      </div>
    
        <ul class="navbar-nav" style="font-size: 120%">
          <li class="nav-item" style="padding-top:3%">
            <a class="nav-link {{ Request::is('/') ? 'active ' : '' }}" href="/" style="font-size: 14px">Home</a>
          </li>
          <li class="nav-item" style="padding-top:3%">
            <a class="nav-link {{ Request::is('contact') ? 'active ' : '' }}" href="/contact" style="font-size: 14px">Contact</a>
          </li>
          <li>
              <button type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white">Book</button>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')

  <!-- Footer -->
  <footer class="page-footer font-small" style={{Request::is('contact')? 'position:absolute;bottom:0;width:100%; background-color: rgba(40, 175, 40, 0.719);':''}}>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      <div class="footer-text container" style="display:flex">
        <p>&copy; <script>var date = new Date(); document.write(date.getFullYear()); </script> Tamir Wellness. Ulaanbaatar, Mongolia. All rights reserved.</p>
      <a class="nav-link waves-effect waves-light px-2" href="https://www.facebook.com/tamirwellness" target="_blank">
        <i class="fab fa-facebook"></i>
      </a>
      <a class="nav-link waves-effect waves-light px-2" href="https://twitter.com/tamirwellness" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
    </div>
          
  </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  
      <!--script-->
      <script type="text/javascript">
  
        $("#slider-area").owlCarousel({
          loop: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 1
            }
          }
        });
        
        $("#customer-area").owlCarousel({
          loop: true,
          responsive: {
            0: {
              items: 2
            },
            800: {
              items: 2
            },
          }
        });
      </script>
        
    </body>
  </html>
  