<?php

namespace App\Http\Controllers\views\front;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function loadPage ($slug)
    {
        $page = Page::where('slug', $slug)
            ->whereStatus('published')
            ->first();

        return view('front.pages.show', compact('page'));
    }
}
