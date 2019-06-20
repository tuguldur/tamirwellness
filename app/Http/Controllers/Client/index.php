<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Home_header;
class index extends Controller
{
    public function index(){
        $contact = Contact::first()->get();
        $home_header= Home_header::all();
        return view('client/index',['contact' => $contact[0],'home' =>$home_header]);
    }
}
