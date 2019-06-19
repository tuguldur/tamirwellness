<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blank;
class adminBlank extends Controller
{
    public function index(){
      return view('admin/blank');
    }
    public function get(){
        $blank = Blank::find(1);
        return $blank->data;
    }
    public function save(Request $request){
         $blank = Blank::find(1);
         $blank->data = urldecode($request->content);;
         $blank->save(); 
    }
    public function upload_image(Request $request){
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('image/upload'), $imageName);
        $path = "/image/upload/".$imageName;
        return response()->json(["link" => $path]);
    }
    public function upload_video(Request $request){
        $videoName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('video/upload'), $videoName);
        $path = "/video/upload/".$videoName;
        return response()->json(["link" => $path]);
    }
}