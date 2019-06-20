<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;
use DateTime;

class adminBook extends Controller
{
   public function index(){
    $date = new DateTime;
    $date->modify('-20160 minutes');
    $formatted = $date->format('Y-m-d H:i:s');
    Book::where([['status', '=', 'archive'],['created_at', '<=', $formatted],])->delete();
    return view('admin/book');
   }
   public function save(Request $request)
   {  
       $book = new Book;
       $book->name = $request->name;
       $book->email = $request->email;
       $book->message = $request->message;
       $book->phone_number = $request->phone_number;
       $book->start_date = $request->start_date;
       $book->end_date =$request->end_date;
       $book->save();
       return back();
   }
   public function view($id){
       $data = Book::findOrFail($id);
       if($data->status=='new') $data->status = 'read';
       $data->save();
       $d = (object)array();
       $d->id = $data->id;
       $d->name = $data->name;
       $d->email = $data->email;
       $d->message = $data->message;
       $d->phone_number = $data->phone_number;
       $d->status = $data->status;
       $d->start_date = $data->start_date;
       $d->end_date = $data->end_date;
       $d->created_at = $data->created_at->diffForHumans();
       
       return response()->json($d);
   }
   public function update(Request $request){
       $type = $request->input('type');
       $id = $request->input('id');
       $book = Book::find($id);
       $book->status = 'archive';
       $book->save();
       return "moved to archive";
   }
   public function get(){
       $book = Book::all();
       return response()->json($book);
   }
}
