<?php

namespace App\Http\Controllers\views\admin;

use Auth;
use App\Models\Project;
use App\Traits\SlugTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    use SlugTrait;

    public function index (Request $request)
    {
        $projects = [];

        try
        {
            $status = null;
            if ( $request->has('status') && $request->status != '' ) {
                if ( in_array($request->status, ['published', 'unpublished']) ) {
                    $status = $request->status;
                }
            }

            $keywords = $request->keywords;


            $projects = Project::when($keywords, function($query) use ($keywords) {
                return $query->where('title', 'like', $keywords);
            })
            ->when($status, function($query) use ($status) {
                return $query->where('status', $status);
            })
            ->orderBy('id', 'desc')
            ->paginate(50);

            return view('admin.projects.index', ['projects' => $projects]);
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }
    }



    public function create ()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a new page
     *
     * @param  Request $request
     *
     * @return redirect()
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'slug'          => 'required',
            'description'   => 'required',
            'owner'         => 'required'
        ]);

        if($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Title & slug are required']);

        //Check if the slug exists using slug trait
        $slug = $this->getUniqueSlug($request->slug, 'projects');

        $project = Project::create([
            'title'         => $request->title,
            'slug'          => $slug,
            'tags'          => $request->has('tags') ? $request->tags : null,
            'image'         => $request->has('image') ? $request->image : "",
            'description'   => $request->has('description') ? $request->description : "",
            'idea'          => $request->has('idea') ? $request->idea : "",
            'project_dev'   => $request->has('project_dev') ? $request->project_dev : "",
            'owner'         => $request->has('owner') ? $request->owner : "",
            'contact'       => $request->has('contact') ? $request->contact : "",
            'published_at'  => \Carbon\Carbon::now(),
            'status'        => $request->has('status') ? $request->status : "",
            'last_updated_by'   => Auth::user()->id
        ]);

        return redirect()->route('projects.edit', ['id' => $project->id]);
    }


    /**
     * Display Project for editing
     *
     * @param  integer $id page's id
     *
     * @return view()
     */
    public function edit($id)
    {
        $project = Project::find($id);
        if ( !$project )
            return redirect()->route('project.index');

        return view('admin.projects.edit', ['project' => $project]);
    }

    /**
     * Update a Project
     * @param  Request $request [description]
     * @param  [type]  $id      [description]
     * @return [type]           [description]
     */
    public function update(Request $request, $id)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required'
            ]);

            if($validator->fails())
                return redirect()->back()->withErrors(['validator' => 'Title is required']);


            $project = Project::find($id);
            if ( !$project )
                return redirect()->back()->withErrors(['error' => 'This project does not exist']);

            $project->tags          = $request->tags;
            $project->title         = $request->title;
            $project->image         = $request->image;
            $project->status        = $request->status;
            $project->description   = $request->description;
            $project->idea          = $request->idea;
            $project->project_dev   = $request->has('project_dev') ? $request->project_dev : "";
            $project->owner         = $request->has('owner') ? $request->owner : "";
            $project->contact       = $request->has('contact') ? $request->contact : "";
            $project->last_updated_by  = Auth::user()->id;
            $project->save();

            return redirect()->back()->with('message', 'Projet successfully update !');
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }

    }
}
