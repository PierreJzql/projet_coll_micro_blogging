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

    public function create (){
        return view('createpost');
    }

    public function send(Request $request)
    {
        $titre = $request->input('titre');
        $contenu = $request->input('contenu');
        $image = $request->file('image');
        $nomImg = $image->getClientOriginalName();
        $pathImg = '../img/'.time().$nomImg;
        move_uploaded_file($image, $pathImg);
        $user=$request->user();



        // $var = $request;
        // dd($var);

        $post = Post::create([
            'titre' => $titre,
            'contenu' => $contenu,
            'image' => $pathImg,
            'id_user' =>$user->id,

        ]);
        $post->save();

        return redirect('dashboard');

    }
}
