<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class adminComment extends Controller
{
    public function index(){
        $comment = Comment::all();
        return view('admin/comment',['comment'=> $comment]);
    }
}
