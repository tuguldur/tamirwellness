@extends('layouts.main-mn')
@section('content')
@section('title','Үйлчилгээ')
    <!--Service main title-->
    <div class="container" style="padding-top:2%">
        <div class="col-md-12 bg-white">
            <h1 class="font" style="text-align: center; padding-top:2%; color:rgba(84, 85, 85, 0.877); margin:0">Үйлчилгээ</h1>
            <div class="text-border-bottom"></div>
            <div class="bg-white" style="padding-bottom:1%"></div>
        </div>
    </div>
    
    <!---->
    <div class="container hero-bg" style="margin-bottom: 1%">
    <!--Service 1-->
    @foreach ($service as $item)
        @if($item->id%2)
        <div class="container col-md-12 bg-white" style="padding-top:2%; padding-bottom:2%">
            <div class="service-text-left">
              <div class="col-lg-8 col-sm-12" >
                    <h2 class="font" style="text-align: center; padding-top:2%; color:rgba(35, 35, 35, 0.877); font-size:16px">{{$item->title}}</h2>
                    <p class="font" style="font-size:14px">{{str_limit($item->desc,400)}} <a href="/mn/service/{{$item->id}}"> үзэх</a></p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <a href="/mn/service/{{$item->id}}">
                        <div style="background:url({{asset($item->src)}}) center center; background-size: cover;" class="service-picture"></div>
                    </a>
                </div>
                
            </div>
        </div>
        @else 
        <div class="container col-md-12 bg-white" style="padding-top:2%; padding-bottom:2%">
            <div class="service-text-right">
                <div class="col-lg-4 col-sm-12">
                        <a href="/mn/service/{{$item->id}}">
                            <div style="background:url({{asset($item->src)}}) center center; background-size: cover;" class="service-picture"></div>
                        </a>
                </div>
                <div class="col-lg-8 col-sm-12">
                        <h2 class="font" style="text-align: center; padding-top:2%; color:rgba(35, 35, 35, 0.877); font-size:16px">{{$item->title}}</h2>
                        <p class="font" style="font-size:14px">{{str_limit($item->desc,400)}} <a href="/mn/service/{{$item->id}}"> үзэх</a></p>
                </div>
            </div>
        </div>
        @endif
    @endforeach
           
    </div>

    @endsection