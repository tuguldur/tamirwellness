<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class blank extends Controller
{
    public function index(){
       $blank = \App\Blank::find(1);
       return view('client/english/blank',['blank' => $blank]);
    }
}
