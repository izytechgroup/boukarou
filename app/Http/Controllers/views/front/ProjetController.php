<?php

namespace App\Http\Controllers\views\front;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetController extends Controller
{
    public function index ()
    {
        $projects = Project::orderBy('id', 'desc')
            ->paginate(10);

        return view('front.projects.index', ['projects' => $projects]);
    }


    public function show ($slug)
    {
        $project = Project::where('slug', $slug)
            ->first();

        $recent_id = $project->id - 1;

        if ($recent_id < 1)
            $recent_id += 2;

        $most_recent = Project::find($recent_id);

        if (!$project)
            return redirect()->back()->withErrors(['message' => 'Not existing post !']);

        return view('front.projects.show', compact('project', 'most_recent'));
    }
}
