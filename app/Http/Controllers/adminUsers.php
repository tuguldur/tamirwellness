<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminUsers extends Controller
{
    private $user;

    //Inject the $user module and store it in our private variable.
    public function __construct(User $user)
    {
        $this->user = $user;
    }

   public function index(){
       return view('admin/user');
   }
   public function get(){
    $users = $this->user->all();
    return response()->json($users);
   }
}
