<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index (Request $request) {
        $user=$request->user();
        return view('/profil/profil', [
            'user' => $user,
            'posts' => Post::where('id_user', $user->id)->get()
        ]);
    }

    public function show (Post $post, Request $request){

        return view('/profil/article',[
            'article'=> $post,
            'user' => $request->user()
        ]);
    }

    public function allPost () {
        return view('dashboard',[
           'posts'=>Post::all() 
        ]);
    }
}
