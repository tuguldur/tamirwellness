<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

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
}
