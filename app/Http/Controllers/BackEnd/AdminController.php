<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
//        $this->middleware('CheckRole');
        $this->middleware('checkRole:admin');
    }

    public function index(){
        return view('backend.admin.dashboard');
    }

//    public function login(){
//        return view('login.login');
//    }

    public function post(){
        return view('backend.admin.post');
    }

    public function comments(){
        return view('backend.admin.comments');
    }

    public function user(){
        return view('backend.admin.user');
    }
}
