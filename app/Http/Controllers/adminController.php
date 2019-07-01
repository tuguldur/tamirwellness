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
        $book = Book::where('status','new')->count();
        $home = count(Home_header::all());
        $a = commentEnglish::count();
        $b = commentMongolia::count();
        $comment = $a+$b;
        $contact = Contact::find(1);
        $blank = Blank::find(1);
       
        $c = ServiceEnglish::count();
        $d =ServiceMongolia::count();
        $service = $c+$d;
        $user = User::count();
        return view('admin/dashboard',['book' => $book,'home' => $home,'total_comment'=>$comment,'contact' => $contact,'blank'=>$blank,
        'service'=>$service,'user'=>$user]);
    }
}
