<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class contact extends Controller
{
    public function index(){
        $contact = \App\Contact::find(1);
        return view('client/contact', ['contact'=>$contact]);
    }
}
