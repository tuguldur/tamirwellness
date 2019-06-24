<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceEnglish;
use App\ServiceMongolia;
class service extends Controller
{
    public function index(){
        $service = ServiceEnglish::all();
        return view ('client/english/service',['service'=>$service]);
    }
    public function find($id){
        $service = ServiceEnglish::findOrFail($id);
        return view('client/english/service_temp',['service'=>$service]);
    }
    public function mongolia(){
        $service = ServiceMongolia::all();
        return view ('client/mongolia/service',['service'=>$service]);
    }
    public function findMongolia($id){
        $service = ServiceMongolia::findOrFail($id);
        return view('client/mongolia/service_temp',['service'=>$service]);
    }
}
