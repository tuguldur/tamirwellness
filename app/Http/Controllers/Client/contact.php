<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class contact extends Controller
{
    public function index(){
        $contact = \App\Contact::find(1);
        return view('client/english/contact', ['contact'=>$contact]);
    }
    public function mongolia(){
        $contact = \App\Contact::find(1);
        return view('client/mongolia/contact', ['contact'=>$contact]);
    }
}
