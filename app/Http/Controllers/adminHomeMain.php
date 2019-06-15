<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homeMain;
class adminHomeMain extends Controller
{
    public function get(){
        return response()->json(homeMain::all());
    }
    public function save(Request $request){
        $status = '';
        $id = $request->id;
        // THIS SHIT WILL UPDATE
        if(empty($request->hasFile('file'))){
            $home_main = homeMain::findOrFail($id);
            $home_main->name= $request->name;
            $home_main->desc= $request->desc;
            $home_main->save();
            $status = 'text updated';
        } 
        else if($id!=='0' && $request->hasFile('file')){
            $home_main = homeMain::findOrFail($id);
            $path = $request->file('file')->store('public/image');
            $home_main->name= $request->name;
            $home_main->desc= $request->desc;
            $home_main->src = $path;
            $home_main->save();
            $status = 'updated';
        }
        else{
            $home_main = new homeMain;
            $path = $request->file('file')->store('public/image');
            $home_main->name= $request->name;
            $home_main->desc= $request->desc;
            $home_main->src = $path;
            $home_main->save();
            $status = 'added';
        }
       return response()->json($status);
    }
    public function delete($id){
        $home_main = homeMain::findOrFail($id);
        $home_main->delete();
        return 'true';
    }
    public function find($id){
        return response()->json(homeMain::findOrFail($id));
    }
}
