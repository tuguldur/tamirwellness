<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tamirwellness | @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" />
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.8.1.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="{{asset('css/compact-gallery.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/navbar-top-fixed.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  </head>
  <!-----------------------------Booooody---------------------------------->
  <body>

    <!--navbar-->
    <nav class="navbar navbar-nav dev-nav fixed-top navbar-expand-lg navbar-white bg-white">
      <div class="container">
          <div class="d-flex w-50 order-0">
              <a class="navbar-brand mr-1" href="/"
                ><img id="logo" src="{{asset('image/tamir-logo.png')}}"/>
                <span>Tamir<br> wellness</span>
              </a>
            </div>
            
            <div>
        <button id="book-btn-2" type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white" data-toggle="modal" data-target="#myModal">Book</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/service">Service</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/comment">Comment</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li>
                    <button id="book-btn-1" type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white" data-toggle="modal" data-target="#myModal">Book</button>
                </li>
          </ul>
        </div>
      </div>
      </nav>
    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Booking</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
          <form style="width:100%; display:flex" action="{{url('/book') }}" method="POST">
              @csrf
            <div class="col-md-6">
              <div class="col-md-12"><p class="formcss font" style="font-size:12px">Send us your booking request</p></div>
              <div class="col-md-12" id="formcss"><input type="text" class="form-control" id="name form" placeholder="name" name="name" required autocomplete="off"></div>
              <div class="col-md-12" id="formcss"><input type="email" class="form-control" id="email form" placeholder="email" name="email" required autocomplete="off"></div>
              <div class="col-md-12" id="formcss"><input type="phone" class="form-control" id="number form" placeholder="phone number" name="phone_number" required autocomplete="off"></div>
              <div class="col-md-12" id="formcss"><textarea type="text" class="form-control" id="messagse form" placeholder="message" name="message" style="height: 110px" required autocomplete="off"></textarea></div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <p class="font" style="font-size:14px">When will you come?</p>
                <input id="datepicker" width="100%" name="start_date" required autocomplete="off" />
                <script>
                    $('#datepicker').datepicker({format:'yyyy/mm/dd'});
                </script>
              </div>
              <div class="col-md-12" style="padding-top: 5%">
                  <p class="font" style="font-size:14px">When will you leave?</p>
                  <input id="datepicker2" width="100%" name="end_date" required autocomplete="off" />
                  <script>
                      $('#datepicker2').datepicker({format:'yyyy/mm/dd'});
                  </script>
                </div>
            </div>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white;">Send</button>
          </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
          
        </div>
      </div>
    </div>

@yield('content')
<footer class="page-footer font-small">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      <div class="footer-text container" style="display:flex">
      <a class="nav-link waves-effect waves-light px-2" href="/mn" target="_blank" style="padding-top:2%">
        <i class="fa fa-language"></i>
        <p style="line-height:75%">Монгол хэл</p>
      </a>
        <p style="line-height:500%">© 2019 Tamir Wellness. Ulaanbaatar, Mongolia. All rights reserved.</p>
      <a class="nav-link waves-effect waves-light px-2" href="https://www.facebook.com/tamirwellness" target="_blank">
        <i class="fab fa-facebook" style="line-height:450%"></i>
      </a>
      <a class="nav-link waves-effect waves-light px-2" href="https://twitter.com/tamirwellness" target="_blank">
        <i class="fab fa-twitter" style="line-height:450%"></i>
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
          loop: false,
          responsive: {
            0:{
              items:1
            },
            480: {
              items: 1
            },
            800: {
              items: 2
            },
          }
        });
      </script>
        
    </body>
  </html>
  