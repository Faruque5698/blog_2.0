<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::all();

//        return $posts;

        return view('frontend.home.home',[
            'posts'=>$posts
        ]);
    }
    public function about(){
        return view('frontend.about.about');
    }

    public function  contact(){
        return view('frontend.contact.contact');
    }

    public function post(){
        return view('frontend.post.post');
    }

    public function post_details($id){
        $post = Post::with('user')->find($id);
//        return $post;
        return view('frontend.post.post_details',[
            'post' => $post
        ]);
    }
}
