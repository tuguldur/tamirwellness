<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Home_header;
use App\ServiceEnglish;
class index extends Controller
{
    public function index(){
        $contact = Contact::first()->get();
        $home_header= Home_header::all();
        $serviceEn = ServiceEnglish::all();
        return view('client/index',['contact' => $contact[0],'home' =>$home_header,'serviceEng'=>$serviceEn]);
    }
}
