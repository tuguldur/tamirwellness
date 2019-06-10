@extends('layouts.main')
@section('content')
@section('title','Tamir Wellness Tourist Camp')

    <!--Main container-->
    <div class="container top-container" style="padding-bottom:1%;">
      <!--carousel slider-->
    <div id="wrapper" class="bg-grey">
      </div>
        <div id="slider-area" class="owl-carousel owl-theme">
            <div style="background-image: url(image/car3.jpg);"></div>
            <div style="background-image: url(image/car2.jpg);"></div>
            <div style="background-image: url(image/car1.jpg);"></div>
        </div>
    </div>
     <!--Around-->
     <div class="container" style="padding-bottom:1%; padding-top:1%">
     <div id="around" class="bg-white">
       
         <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">around</h1>
         <div class="text-border-bottom"></div>
       <!--gallery-->
       <section class="gallery-block compact-gallery">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image1.jpg" data-caption="Hello this is description of image 1">
                          <img class="img-fluid image" src="image/image1.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image2.jpg" data-caption="Hello this is description of image 2">
                          <img class="img-fluid image" src="image/image2.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image3.jpg" data-caption="Hello this is description of image 3">
                          <img class="img-fluid image" src="image/image3.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image4.jpg" data-caption="Hello this is description of image 4">
                          <img class="img-fluid image" src="image/image4.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                          </a>
                      </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image5.jpg" data-caption="Hello this is description of image 5">
                          <img class="img-fluid image" src="image/image5.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image6.jpg" data-caption="Hello this is description of image 6">
                          <img class="img-fluid image" src="image/image6.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image7.jpg" data-caption="Hello this is description of image 7">
                          <img class="img-fluid image" src="image/image7.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image8.jpg" data-caption="Hello this is description of image 8">
                          <img class="img-fluid image" src="image/image8.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="image/image9.jpg" data-caption="Hello this is description of image 9">
                          <img class="img-fluid image" src="image/image9.jpg">
                          <span class="description">
                              <span class="description-heading">Lorem Ipsum</span>
                              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                          </span>
                      </a>
                  </div>
              </div>
          </div>
      </section>
  
      <script>
          baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
      </script>
    </div>
    </div>
       <!--around gallery-->
       
     <!--Customer's comment-->
     <div class="container" style="padding-bottom:1%; padding-top:1%">
     <div id="Customer" class="bg-white">
          <h3 class="font" style="text-align: center; padding-top:2%; color:rgb(84, 85, 85)">what our customers are say</h3>
          <div class="text-border-bottom"></div>
        <!--Customer slide-->
          <div id="customer-area" class="owl-carousel owl-theme">
            <div class="customer">
              <img src="image/user.jpg" style="display: block; width:20%; height: 20%">
              <p style="padding-left:2%">This is area for the customer's comment</p>
            </div>
            <div class="customer">
              <img src="image/user2.png" style="display: block; width:20%; height: 20%">
              <p style="padding-left:2%">This is area for the customer's comment</p>
          </div>
          <div class="customer">
              <img src="image/user2.png" style="display: block; width:20%; height: 20%">
              <p style="padding-left:2%">This is area for the customer's comment</p>
          </div>
          <div class="customer">
              <img src="user2.png" style="display: block; width:20%; height: 20%">
              <p style="padding-left:2%">This is area for the customer's comment</p>
          </div>
          <div class="customer">
              <img src="user2.png" style="display: block; width:20%; height: 20%">
              <p style="padding-left:2%">This is area for the customer's comment</p>
          </div>
          <div class="customer">
              <img src="user2.png" style="display: block; width:20%; height: 20%">
              <p style="padding-left:2%">This is area for the customer's comment</p>
          </div>
     </div>
    </div>
    </div>
    <!--Contact-->
    <div class="container" style="padding-bottom:1%; padding-top:1%">
    <div class="container">
        <div class="row bg-white">
            <div class="col-md-12" style="text-align: center"><h1 class="font" style="padding-top: 2%">Contact</h1></div>
            <div class="col-md-12" style="padding-left:5%">
              <div class="col-md-6">
                <h1 class="font" style="padding-left: 5%">Address</h1>
              </div>
            </div>
            <div class="col-md-6 contact-info">
              <div class="col-md-12" style="display: flex">
                  <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">phone</i>
                  <p>+976 9911 2044</p>
              </div>
              <div class="col-md-12" style="display: flex">
                  <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">location_on</i>
                  <p>Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia</p>
              </div>
              <div class="col-md-12" style="display: flex">
                  <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">mail</i>
                  <p> info@tamirwellness.com</p>
              </div>
              <div class="col-md-12" style="height: 75%;">
                <iframe src="https://maps.google.com/maps?q=tamir%20wellness&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12"><p class="send-us formcss font" style="padding-bottom:2%">Send us your booking request</p></div>
              <div class="col-md-12" id="formcss"><input type="text" class="form-control" id="name form" placeholder="name" name="name"></div>
              <div class="col-md-12" id="formcss"><input type="email" class="form-control" id="email form" placeholder="email" name="email"></div>
              <div class="col-md-12" id="formcss"><input type="phone" class="form-control" id="number form" placeholder="phone number" name="number"></div>
              <div class="col-md-12" id="formcss"><textarea type="text" class="form-control" id="messagse form" placeholder="message" name="message" style="height: 110px"></textarea></div>
              <div class="col-md-12"><button type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white;">Send</button></div>
            </div>
          </div>
    </div>
    </div>
@endsection