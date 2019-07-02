@extends('layouts.main')
@section('content')
@section('title', $service->title)
    <div class="container bg-white" style="margin-top:2%">
      <!--image-->
      <div class="container pt-2 hero-bg">
     
              <div style="background-image: url({{asset($service->src)}}); background-size: cover; padding-top:48%"></div>
       
     
      <div id="around" style="padding-bottom:2%">
        
      <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">{{$service->title}}</h1>
          <div class="text-border-bottom"></div>

          <div class="font" style="padding-top: 2%">
            <p>{{$service->desc}}</p>
          </div>
       <div>{!! $service->data !!}</div>
      </div>
      </div>
    </div>
@endsection