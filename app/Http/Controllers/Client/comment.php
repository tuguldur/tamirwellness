<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\commentEnglish;
use App\commentHeader;
class comment extends Controller
{
    public function index(){
        $comment = commentEnglish::all();
        $comment_header = commentHeader::all();
        return view('client/comment',['comment'=>$comment,'comment_header'=>$comment_header]);
    }
}
