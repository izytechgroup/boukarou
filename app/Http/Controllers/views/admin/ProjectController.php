<?php

namespace App\Http\Controllers\views\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function index ()
    {
        $projects = [];

        return view('admin.projects.index', compact('projects'));
    }



    public function create ()
    {
        return view('admin.projects.create');
    }
}
