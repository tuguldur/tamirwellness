<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceEnglish;
use App\ServiceMongolia;
class adminService extends Controller
{
    public function index(){
        return view('admin/service');
    }
    public function saveEnglish(Request $req){
        $id = $req->id;

        // text update
        if(empty($req->hasFile('file'))){
            $service = ServiceEnglish::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $service->data = $req->data;
            $service->save();
        }
        // update
        else if($id!=='0' && $req->hasFile('file')){
            $service = ServiceEnglish::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $service->src = $path;
            $service->data = $req->data;
            $service->save();
        }
        // add
        else{
            $service = new ServiceEnglish;
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $service->src = $path;
            $service->data = $req->data;
            $service->save();
        }
        return back();
    }
    public function saveMongolia(Request $req){
        $id = $req->id;

        // text update
        if(empty($req->hasFile('file'))){
            $service = ServiceMongolia::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $service->data = $req->data;
            $service->save();
        }
        // update
        else if($id!=='0' && $req->hasFile('file')){
            $service = ServiceMongolia::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $service->src = $path;
            $service->data = $req->data;
            $service->save();
        }
        // add
        else{
            $service = new ServiceMongolia;
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $service->src = $path;
            $service->data = $req->data;
            $service->save();
        }
        return back();
    }
    public function getEnglish(){
        $service  = ServiceEnglish::all();
        return response()->json($service);
    }
    public function getMongolia(){
        $service  = ServiceMongolia::all();
        return response()->json($service);
    }
    public function deleteEnglish($id){
        $service = ServiceEnglish::find($id);
        $service->delete();
        return back();
    }
    public function deleteMongolia($id){
        $service = ServiceMongolia::find($id);
        $service->delete();
        return back();
    }
    public function findEnglish($id){
        $service = ServiceEnglish::find($id);
        return response()->json($service);
    }
    public function findMongolian($id){
        $service = ServiceMongolia::find($id);
        return response()->json($service);
    }
}
