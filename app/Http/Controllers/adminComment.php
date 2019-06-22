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
            $path = $request->file('file')->store('public/image');
            $comment_header->name= $request->name;
            $comment_header->src = $path;
            $comment_header->save();
            $status = 'updated';
        }
        else{
            $comment_header = new commentHeader;
            $path = $request->file('file')->store('public/image');
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
