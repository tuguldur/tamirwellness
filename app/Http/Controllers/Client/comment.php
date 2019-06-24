<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\commentEnglish;
use App\commentMongolia;
use App\commentHeader;
class comment extends Controller
{
    public function index(){
        $comment = commentEnglish::all();
        $comment_header = commentHeader::all();
        return view('client/english/comment',['comment'=>$comment,'comment_header'=>$comment_header]);
    }
    public function mongolia(){
        $comment = commentMongolia::all();
        $comment_header = commentHeader::all();
        return view('client/mongolia/comment',['comment'=>$comment,'comment_header'=>$comment_header]);
    }
}
