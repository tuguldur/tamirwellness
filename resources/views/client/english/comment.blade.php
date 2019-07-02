@extends('layouts.main')
@section('content')
@section('title','Comment')
    <!--slider-->
    <div class="container" style="padding-bottom:1%">
      <!--carousel slider-->
    <div id="wrapper" class="bg-grey">
      </div>
        <div id="slider-area" class="owl-carousel owl-theme">
            @foreach ($comment_header as $item)
            <div style="background-image: url({{asset($item->src)}});"></div>
            @endforeach
        </div>
    </div>
    
    <!--Around-->
    <div class="container hero-bg" style="padding-bottom:1%; padding-top:1%">
     <div id="around" class="bg-white">
         <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">Comments</h1>
         <div class="text-border-bottom"></div>
         <div class="container font bg-white comment" style="margin-top:2%; padding-bottom:2%">
           @foreach ($comment as $item)
           <h2>{{$item->name}}</h2>
           <p>{{$item->comment}}</p>
           @endforeach
         </div>
         </div>
    </div>
@endsection