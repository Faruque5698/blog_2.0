<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('backend.user.dashboard');

    }
    public function comments(){
        return view('backend.user.comments');
    }
}
