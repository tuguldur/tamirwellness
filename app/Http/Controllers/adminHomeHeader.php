<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homeHeader;
class adminHomeHeader extends Controller
{   
    // admin/home->get
    public function index(){
        return view('admin/home');
    }
    // admin/home/header->get
    public function getHeader(){
        $homeHeader = homeHeader::all();
        return response()->json($homeHeader);
    }
    // admin/home/header/{id}->get
    public function find($id){
        $homeHeader = homeHeader::findOrFail($id);
        return response()->json($homeHeader);
    }
    // admin/home/header/->post
     public function save(Request $request){
        $status = '';
        $id = $request->id;
        // THIS SHIT WILL UPDATE
        if(empty($request->hasFile('file'))){
            $homeHeader = homeHeader::findOrFail($id);
            $homeHeader->name= $request->name;
            $homeHeader->save();
            $status = 'text updated';
        } 
        else if($id!=='0' && $request->hasFile('file')){
            $homeHeader = homeHeader::findOrFail($id);
            $path = $request->file('file')->store('public/image');
            $homeHeader->name= $request->name;
            $homeHeader->src = $path;
            $homeHeader->save();
            $status = 'updated';
        }
        else{
            $homeHeader = new homeHeader;
            $path = $request->file('file')->store('public/image');
            $homeHeader->name= $request->name;
            $homeHeader->src = $path;
            $homeHeader->save();
            $status = 'added';
        }
       return response()->json($status);
    }
    //admin/home/header/edit->post
    public function delete($id){
        $homeHeader = homeHeader::find($id);
        $homeHeader->delete();
        return 'ok';
    }
}
