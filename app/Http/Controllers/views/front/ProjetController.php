<?php

namespace App\Http\Controllers\views\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetController extends Controller
{
    public function index ()
    {
        return view('front.projets.index');
    }


    public function show ($slug)
    {
        return view('front.projets.show');
    }
}
