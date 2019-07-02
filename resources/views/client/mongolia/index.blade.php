@extends('layouts.main-mn')
@section('content')
@section('title','Нүүр')
    <div class="container top-container" style="padding-bottom:1%;">
    <div id="wrapper" class="bg-grey">
      </div>
        <div id="slider-area" class="owl-carousel owl-theme">
           @foreach ($home as $item)
           <div style="background-image: url({{$item->src}}); padding-top: 40%" alt={{$item->title}}></div>
           @endforeach
        </div>
    </div>
    
     <!--service-->
     <div class="container" style="padding-bottom:1%; padding-top:1%">
     <div id="around" class="bg-white">
         <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">Үйлчилгээ</h1>
         <div class="text-border-bottom"></div>
       <!--gallery-->
       <section class="gallery-block compact-gallery">
          <div class="container">
              <div class="row no-gutters">
             @foreach ($serviceEng as $item)
             <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="font lightbox" href="/mn/service/{{$item->id}}">
                    <img class="img-fluid image" src="{{$item->src}}">
                    <span class="description">
                    <span class="description-heading">{{$item->title}}</span>
                        <span class="description-body">{{$item->desc}}</span>
                    </span>
                </a>
            </div>
             @endforeach
              </div>
          </div>
      </section>
    </div>
    </div>
       
     <!--Customer's comment-->
     <div class="container" style="padding-bottom:1%; padding-top:1%">
        <div id="Customer" class="bg-white">
            <div class="cus-header">
               <div class="col ul-col col-xs-12 col-md-2 col-sm-12">
     
               </div>
              <div class="cus-title col ul-col col-xs-12 col-md-8 col-sm-12 ">
                 <h3 class="font">Бидний үйлчлүүлэгчдийн сэтгэгдэл</h3>
              </div>
              <div class="cus-logo col ul-col col-xs-12 col-md-2 col-sm-12 ">
                 <a href="https://www.tripadvisor.com/Hotel_Review-g1236128-d2158092-Reviews-Tamir_Wellness_Tourist_Camp-Gorkhi_Terelj_National_Park_Tov_Province.html">
                   <i class="fa fa-tripadvisor" id="tripadvisor" style="color:rgba(40,175,40,.719);"></i>
                 </a>
              </div>
             </div>
           
            
               <div class="text-border-bottom"></div>
             <!--Customer slide-->
               <div id="customer-area" class="owl-carousel owl-theme pt-3">
               @foreach ($comment as $item)
               <div class="comment-index">
               <span class="comment-review-name">{{$item->name}}</span>
                  <p>{{$item->comment}}</p>
               </div>
               @endforeach
                
             </div>
               
          </div>
    </div>
    <!--Contact-->
    <div class="container top-container">
        <div class="wrapper bg-white" style="padding-bottom:10%; padding-top:0%; margin-bottom:2%">
            <div class="row" >
                <div class="col-md-12" style="text-align: center"><h1 class="font" style="padding-top: 2%">Холбоо барих</h1></div>
                <div class="col-md-12" style="padding-left:5%">
                </div>
                <div class="col-md-6 contact-info">
                    <div class="col-md-12" style="height: 75%;">
                        <iframe src="https://maps.google.com/maps?q=tamir%20wellness&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      </div>
                      <h3 class="font" style="text-align:center; padding-top: 2%; padding-bottom:1%">Хаяг</h3>
                  <div class="col-md-12" style="display: flex">
                      <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">phone</i>
                      <p class="font">{{$contact->phone_number}}</p>
                  </div>
                  <div class="col-md-12" style="display: flex">
                      <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">location_on</i>
                  <p class="font">{{$contact->location_mn}}</p>
                  </div>
                  <div class="col-md-12" style="display: flex">
                      <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">mail</i>
                  <p class="font">{{$contact->email}}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12"><p class="send-us formcss font" style="padding-bottom:2%">Санал хүсэлтээ илгээх</p></div>
                  <div class="col-md-12" id="formcss"><input type="text" class="form-control" id="name form" placeholder="Нэр" name="name"></div>
                  <div class="col-md-12" id="formcss"><input type="email" class="form-control" id="email form" placeholder="Цахим хаяг" name="email"></div>
                  <div class="col-md-12" id="formcss"><input type="phone" class="form-control" id="number form" placeholder="Утасны дугаар" name="number"></div>
                  <div class="col-md-12" id="formcss"><textarea type="text" class="form-control" id="messagse form" placeholder="Хүсэлт" name="message" style="height: 110px"></textarea></div>
                  <div class="col-md-12"><button type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white;">Илгээх</button></div>
                </div>
              </div>
        </div>
    </div>
    @endsection