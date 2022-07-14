<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //dd($posts);

        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        //$post = Post::findOrFail($id);
        $post = Post::where('title', '=', 'expedita libero dicta et laborum illo')->first();
        //dd($post);
        /*$posts = [
            1 => 'Mon titre n°1',
            2 => 'Mon titre n°2'
        ];

        $post = $posts[$id] ?? 'pas de titre'; 
*/
        return view('article', [
            'post' => $post 
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
