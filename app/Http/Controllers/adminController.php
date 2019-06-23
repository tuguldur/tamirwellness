<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Home_header;
use App\commentEnglish;
use App\commentMongolia;
use App\Contact;
use App\Blank;
use App\ServiceEnglish;
use App\ServiceMongolia;
use App\User;
class adminController extends Controller
{
  
 public function __construct()
    {
     $this->middleware('auth');
 }
       public function index()
    {   
        $book = count(Book::where('status','new'));
        $home = count(Home_header::all());
        $comment = count(array(commentEnglish::all(), commentMongolia::all()));
        $contact = Contact::find(1);
        $blank = Blank::find(1);
        $service  =count(array(ServiceEnglish::all(),ServiceMongolia::all()));
        $user = count(User::all());
        return view('admin/dashboard',['book' => $book,'home' => $home,'total_comment'=>$comment,'contact' => $contact,'blank'=>$blank,
        'service'=>$service,'user'=>$user]);
    }
}
