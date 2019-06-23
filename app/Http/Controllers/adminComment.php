<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\commentEnglish;
use App\commentMongolia;
use App\commentHeader;
class adminComment extends Controller
{
    public function index(){
        return view('admin/comment');
    }
    public function getEnglish(){
        $comment = commentEnglish::all();
        return response()->json($comment);
    }
    public function viewEnglish($id){
        $comment = commentEnglish::findOrFail($id);
        return response()->json($comment);
    }
    public function saveEnglish(Request $request){
        $comment = new commentEnglish;
        $comment->name = $request->name;
        $comment->comment=$request->comment;
        $comment->save();
        return 'true';
    }
    public function deleteEnglish($id){
        commentEnglish::findOrFail($id)->delete();
        return 'ok';
    }
    public function updateEnglish(Request $request){
        $comment = commentEnglish::find($request->id);
        $comment->name = $request->name;
        $comment->comment=$request->comment;
        $comment->save();
        return 'ok';
    }
    // MONGOLIA
    public function getMongolia(){
        $comment = commentMongolia::all();
        return response()->json($comment);
    }
    public function viewMongolia($id){
        $comment = commentMongolia::findOrFail($id);
        return response()->json($comment);
    }
    public function saveMongolia(Request $request){
        $comment = new commentMongolia;
        $comment->name = $request->name;
        $comment->comment=$request->comment;
        $comment->save();
        return 'true';
    }
    public function deleteMongolia($id){
        commentMongolia::findOrFail($id)->delete();
        return 'ok';
    }
    public function updateMongolia(Request $request){
        $comment = commentMongolia::find($request->id);
        $comment->name = $request->name;
        $comment->comment=$request->comment;
        $comment->save();
        return 'ok';
    }
    public function header(){
       $comment = commentHeader::all();
       return response()->json($comment);
    }
    public function headerFind($id){
        $comment = commentHeader::find($id);
        return response()->json($comment);
    }
    public function updateheader(Request $request){
        $status = '';
        $id = $request->id;
        // THIS SHIT WILL UPDATE
        if(empty($request->hasFile('file'))){
            $comment_header = commentHeader::findOrFail($id);
            $comment_header->name= $request->name;
            $comment_header->save();
            $status = 'text updated';
        } 
        else if($id!=='0' && $request->hasFile('file')){
            $comment_header = commentHeader::findOrFail($id);
         
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/comment'), $imageName);
            $path = "/image/comment/".$imageName;

            $comment_header->name= $request->name;
            $comment_header->src = $path;
            $comment_header->save();
            $status = 'updated';
        }
        else{
            $comment_header = new commentHeader;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/comment'), $imageName);
            $path = "/image/comment/".$imageName;

            $comment_header->name= $request->name;
            $comment_header->src = $path;
            $comment_header->save();
            $status = 'added';
        }
       return response()->json($status);
    }
    public function deleteHeader($id){
        $comment_header = commentHeader::find($id);
        $comment_header->delete();
        return 'ok';
    }
}
