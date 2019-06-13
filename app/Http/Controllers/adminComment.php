<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Comment;
use App\commentHeader;
class adminComment extends Controller
{
    public function index(){
        return view('admin/comment');
    }
    public function get(){
        $comment = Comment::all();
        return response()->json($comment);
    }
    public function view($id){
        $comment = Comment::findOrFail($id);
        return response()->json($comment);
    }
    public function save(Request $request){
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->comment=$request->comment;
        $comment->save();
        return 'true';
    }
    public function delete($id){
        Comment::findOrFail($id)->delete();
        return 'ok';
    }
    public function update(Request $request){
        $comment = Comment::find($request->id);
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
        $id = $request->id;
        $comment_header;
        if($id==0) $comment_header = new commentHeader;
        else $comment_header = commentHeader::findOrFail($id);
        
        $path = $request->file('file')->store('public/image');
        $comment_header->name= $request->name;
        $comment_header->src = $path;
        $comment_header->save();
       return response()->json($comment_header);
    }
}
