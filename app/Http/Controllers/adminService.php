<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminService extends Controller
{
    public function index(){
        return view('admin/service');
    }
    public function create(){
        return view('admin/servicecreate');
    }
}
