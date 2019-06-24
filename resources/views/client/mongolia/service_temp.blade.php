@extends('layouts.main-mn')
@section('content')
@section('title', $service->title)
    <div class="container bg-white" style="margin-top:2%">
      <!--image-->
      <div class="container">
        <!--carousel slider-->
      <div id="wrapper" class="bg-grey">
        </div>
          <div id="slider-area" class="owl-carousel owl-theme">
              <div style="background-image: url({{asset($service->src)}}); padding-top:48%"></div>
          </div>
      </div>
      
      <!--description-->
      <div class="container" style="padding-bottom:1%; padding-top:1%">
      <div id="around" style="padding-bottom:2%">
        
      <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">{{$service->title}}</h1>
          <div class="text-border-bottom"></div>

          <div class="font" style="padding-top: 2%">
            <p>{{$service->desc}}</p>
          </div>
    <div style="min-height: 13vh">{!! $service->data !!}</div>
        <script>
            baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
        </script>
      </div>
      </div>
    </div>
@endsection