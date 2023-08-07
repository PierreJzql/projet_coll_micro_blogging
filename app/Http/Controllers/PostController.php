<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index () {
        
        return view('/profil/profil', [
            'posts' => Post::all()
        ]);
    }

    public function show (Post $post){

        return view('/profil/article',[
            'article'=> $post
        ]);
    }
}
