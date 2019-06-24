@extends('layouts.main')
@section('content')
@section('title','Service')
    <!--Service main title-->
    <div class="container" style="padding-top:2%">
        <div class="col-md-12 bg-white">
            <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877); margin:0">services</h1>
            <div class="text-border-bottom"></div>
            <div class="bg-white" style="padding-bottom:1%"></div>
        </div>
    </div>
    
    <!---->
    <div class="container" style="margin-bottom: 1%">
    <!--Service 1-->
    @foreach ($service as $item)
        @if($item->id%2)
        <div class="container col-md-12 bg-white" style="padding-top:2%; padding-bottom:2%">
            <div style="display: flex">
              <div class="col-md-8" >
                    <h2 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">{{$item->desc}}</h2>
                    <p class="font">{{$item->desc}}</p>
                        <a href="/service/{{$item->id}}" class="btn font" style="background-color:rgba(40, 175, 40, 0.719); color:white">Show more</a>
                </div>
                <div class="col-md-4">
                    <img src="{{asset($item->src)}}" style="width: 100%">
                </div>
                
            </div>
        </div>
        @else 
        <div class="container col-md-12 bg-white" style="padding-top:2%; padding-bottom:2%">
            <div style="display: flex">
                <div class="col-md-4">
                    <img src="{{asset($item->src)}}" style="width: 100%">
                </div>
                <div class="col-md-8" >
                    <h2 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877)">{{$item->desc}}</h2>
                        <p class="font">{{$item->desc}}</p>
                        <a href="/service/{{$item->id}}" class="btn font" style="background-color:rgba(40, 175, 40, 0.719); color:white">Show more</a>
                </div>
            </div>
        </div>
        @endif
    @endforeach
           
    </div>

    @endsection