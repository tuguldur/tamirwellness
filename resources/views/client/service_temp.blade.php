<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tamir wellness</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.8.1.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/compact-gallery.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    </style>
  </head>
  <!-----------------------------Booooody---------------------------------->
  <body>

    <!--navbar-->
    <nav class="navbar navbar-nav navbar-expand-lg navbar-white fixed-top bg-white dev-nav">
        <div class="container">
          <div class="d-flex w-50 order-0">
              <a class="navbar-brand mr-1" href="#"
                ><img id="logo" src="image/tamir-logo.png"/>
                <span>Tamir<br> wellness</span>
              </a>
            </div>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--links-->
          <ul class="collapse navbar-collapse navbar-nav ml-auto" id="navbarSupportedContent">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="service.html">Service</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Comment.html">Comment</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Contact.html">Contact</a>
            </li>
            <li>
                <button type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white" data-toggle="modal" data-target="#myModal">Book</button>
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
            <div class="modal-body" style="display:flex">
              <div class="col-md-6">
                <div class="col-md-12"><p class="formcss font" style="font-size:12px">Send us your booking request</p></div>
                <div class="col-md-12" id="formcss"><input type="text" class="form-control" id="name form" placeholder="name" name="name"></div>
                <div class="col-md-12" id="formcss"><input type="email" class="form-control" id="email form" placeholder="email" name="email"></div>
                <div class="col-md-12" id="formcss"><input type="phone" class="form-control" id="number form" placeholder="phone number" name="number"></div>
                <div class="col-md-12" id="formcss"><textarea type="text" class="form-control" id="messagse form" placeholder="message" name="message" style="height: 110px"></textarea></div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12">
                  <p class="font">When will you come?</p>
                  <input id="datepicker" width="100%" />
                  <script>
                      $('#datepicker').datepicker({
                          uiLibrary: 'bootstrap4'
                      });
                  </script>
                </div>
                <div class="col-md-12">
                    <p class="font">When will you leave?</p>
                    <input id="datepicker2" width="100%" />
                    <script>
                        $('#datepicker2').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>
                  </div>
              </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white;">Send</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
      <!--slider-->
    <div class="container bg-white" style="margin-top:2%">
      <!--image-->
      <div class="container">
        <!--carousel slider-->
      <div id="wrapper" class="bg-grey">
        </div>
          <div id="slider-area" class="owl-carousel owl-theme">
              <div style="background-image: url(image/image1.jpg); padding-top:48%"></div>
          </div>
      </div>
      
      <!--description-->
      <div class="container" style="padding-bottom:1%; padding-top:1%">
      <div id="around" style="padding-bottom:2%">
        
          <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">service 1</h1>
          <div class="text-border-bottom"></div>

          <div class="font" style="padding-top: 2%">
            <p>
              If you want to ride horse, we have friendly horses, and they will be your good friend
            </p>
            
          </div>
    
        <script>
            baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
        </script>
      </div>
      </div>
    </div>
  <!-- Footer -->
<footer class="page-footer font-small">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <div class="footer-text container" style="display:flex">
      <p>© 2019 Tamir Wellness. Ulaanbaatar, Mongolia. All rights reserved.</p>
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

    <!--script-->
    <script type="text/javascript">

      $("#slider-area").owlCarousel({
        responsive: {
          0: {
            items: 1
          },
        }
      });
    </script>
      
  </body>
</html>
