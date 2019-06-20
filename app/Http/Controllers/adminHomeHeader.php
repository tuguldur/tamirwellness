<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_header;
class adminHomeHeader extends Controller
{   
    // admin/home->get
    public function index(){
        return view('admin/home');
    }
    // admin/home/header->get
    public function getHeader(){
        $homeHeader = Home_header::all();
        return response()->json($homeHeader);
    }
    // admin/home/header/{id}->get
    public function find($id){
        $homeHeader = Home_header::findOrFail($id);
        return response()->json($homeHeader);
    }
    // admin/home/header/->post
     public function save(Request $request){
        $status = '';
        $id = $request->id;
        // THIS SHIT WILL UPDATE
        if(empty($request->hasFile('file'))){
            $homeHeader = Home_header::findOrFail($id);
            $homeHeader->name= $request->name;
            $homeHeader->save();
            $status = 'text updated';
        } 
        else if($id!=='0' && $request->hasFile('file')){
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $homeHeader = Home_header::findOrFail($id);
            $homeHeader->name= $request->name;
            $homeHeader->src = $path;
            $homeHeader->save();
            $status = 'updated';
        }
        else{
                 
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $homeHeader = new Home_header;
            $homeHeader->name= $request->name;
            $homeHeader->src = $path;
            $homeHeader->save();
            $status = 'added';
        }
       return response()->json($status);
    }
    //admin/home/header/edit->post
    public function delete($id){
        $homeHeader = Home_header::find($id);
        $homeHeader->delete();
        return 'ok';
    }
}
