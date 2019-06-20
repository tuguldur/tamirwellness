<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class adminContact extends Controller
{
  public function index(){
      $contact = Contact::find(1);
      return view('admin/contact',['contact' => $contact]);
   
  }
  public function save(Request $r){
    $contact = Contact::find(1);
    $contact->phone_number = $r->phone_number;
    $contact->email = $r->email;
    $contact->location = $r->location;
    $contact->location_mn = $r->location_mn;
    $contact->save();
    return back();
  }
}
