<?php

namespace App\Http\Controllers\views\front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function getPostByCat($category_id){
        $first = Post::orderBy('id', 'desc')
        ->where('status', 'published')
        ->where('category_id', $category_id)
        ->first();

        $posts = [];
        if ( $first)
            $posts = Post::orderBy('id', 'desc')
                ->with('category')
                ->whereStatus('published')
                ->where('id', '!=', $first->id)
                ->take(10)
                ->get();


        return view('front.blog.index', compact('posts', 'first'));
    }

    public function index ()
    {
        $first = Post::orderBy('id', 'desc')
        ->where('status', 'published')
        ->first();

        $posts = [];
        if ( $first)
            $posts = Post::orderBy('id', 'desc')
                ->with('category')
                ->whereStatus('published')
                ->where('id', '!=', $first->id)
                ->take(10)
                ->get();

        return view('front.blog.index', compact('posts', 'first'));
    }


    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->whereStatus('published')
            ->first();

        $posts = Post::whereStatus('published')
            ->where('category_id', $post->category_id)
            ->where('slug', '!=', $post->slug)
            ->with('category')
            ->select(
                'title',
                'slug',
                'image'
            )
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        if (!$post) {
            return redirect()->back()->withErrors(['message' => 'Not existing post !']);
        }
        return view('front.blog.show', compact('post', 'posts'));
    }
}
