<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Home_header;
use App\ServiceEnglish;
use App\ServiceMongolia;
use App\commentEnglish;
use App\commentMongolia;
class index extends Controller
{
    public function index(){
        $contact = Contact::first()->get();
        $home_header= Home_header::all();
        $serviceEn = ServiceEnglish::all();
        $comment = commentEnglish::limit(6)->get();
        return view('client/english/index',['contact' => $contact[0],'home' =>$home_header,'serviceEng'=>$serviceEn ,'comment' => $comment]);
    }
    public function mongolia(){
        $contact = Contact::first()->get();
        $home_header= Home_header::all();
        $serviceEn = ServiceMongolia::all();
        $comment = commentMongolia::limit(6)->get();
        return view('client/mongolia/index',['contact' => $contact[0],'home' =>$home_header,'serviceEng'=>$serviceEn,'comment' => $comment]);
    }
}
