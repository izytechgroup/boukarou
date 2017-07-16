<?php

namespace App\Http\Controllers\views\front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index ()
    {
        $posts = Post::orderBy('id', 'desc')
        ->whereStatus('published')
        ->take(24)
        ->get();

        return view('front.blog.index', compact('posts'));
    }


    public function show($slug)
    {
        $post = Post::where('slug', $slug)
        ->whereStatus('published')
        ->first();

        if (!$post) {
            // show 404
        }
        return view('front.blog.show', compact('post'));
    }
}
