<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceEnglish;
class service extends Controller
{
    public function index(){
        return view ('client/service');
    }
    public function find($id){
        $service = ServiceEnglish::findOrFail($id);
        return view('client/service_temp',['service'=>$service]);
    }
}
