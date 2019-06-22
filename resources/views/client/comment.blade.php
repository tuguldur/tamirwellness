@extends('layouts.main')
@section('content')
@section('title','Comment')
    <!--slider-->
    <div class="container" style="padding-bottom:1%">
      <!--carousel slider-->
    <div id="wrapper" class="bg-grey">
      </div>
        <div id="slider-area" class="owl-carousel owl-theme">
            <div style="background-image: url(image/comment1.jpg);"></div>
            <div style="background-image: url(image/car2.jpg);"></div>
            <div style="background-image: url(image/car1.jpg);"></div>
        </div>
    </div>
    
    <!--Around-->
    <div class="container" style="padding-bottom:1%; padding-top:1%">
     <div id="around" class="bg-white">
       
         <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">Comments</h1>
         <div class="text-border-bottom"></div>
         <div class="container font bg-white" style="margin-top:2%; padding-bottom:2%">
             <h2 style="padding-left:5%">Here is the user's name</h2>
             <p>here is the some users comment bla bla bladfasfbjkasd
                 kdfakjdfhaljdf
                 kagfksdhfklgsdh
                 skjfdgbkjs
             </p>
         </div>
         </div>
       <!--gallery-->  
      <script>
          baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
      </script>
    </div>
@endsection