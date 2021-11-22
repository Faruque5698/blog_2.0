<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct()
    {
//        $this->middleware('CheckRole');
        $this->middleware('checkRole:author');
    }

    public function dashboard(){
        return view('backend.author.dashboard');
    }
    public function comments(){
        return view('backend.author.comments');
    }
    public function post(){
        return view('backend.author.post');
    }
}
