<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {
        $posts = [

            [
                'titre' => 'ici mon titre',
                'contenu' => 'ici le contenu',
                'image' => 'voici une belle photo'
            ], 
            [
                'titre' => 'ici mon titre 2',
                'contenu' => 'ici le contenu 2',
                'image' => 'voici une belle photo 2'
            ],
            [
                'titre' => 'ici mon titre 3',
                'contenu' => 'ici le contenu 3',
                'image' => 'voici une belle photo 3'
            ],
        ];
        return view('/profil/profil', [
            'posts' => $posts
        ]);
    }
}
