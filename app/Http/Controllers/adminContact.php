<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class adminContact extends Controller
{
  public function index(){
      return view('admin/contact',['contact' => Contact::find(1)]);
  }
  public function save(Request $r){
    $contact = Contact::find(1);
    $contact->phone_number = $r->phone_number;
    $contact->email = $r->email;
    $contact->location = $r->location;
    $contact->save();
    return view('admin/contact');
  }
}
