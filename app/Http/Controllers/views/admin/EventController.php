<?php

namespace App\Http\Controllers\views\admin;

use DB;
use Auth;
use App\Models\Event;
use App\Models\Category;
use App\Traits\SlugTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    use SlugTrait;

    /**
     * list pages
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        try
        {
            $status = null;
            if ( $request->has('status') && $request->status != '' ) {
                if ( in_array($request->status, ['published', 'unpublished']) ) {
                    $status = $request->status;
                }
            }

            $keywords = $request->keywords;


            $events = Event::when($keywords, function($query) use ($keywords) {
                return $query->where('title', 'like', $keywords);
            })
            ->when($status, function($query) use ($status) {
                return $query->where('status', $status);
            })
            ->with('category')
            ->orderBy('id', 'desc')
            ->paginate(50);

            return view('admin.events.index', ['events' => $events,]);
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }
    }



    /**
     * Create new event
     *
     * @return view()
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.events.create', compact('categories'));
    }


    /**
     * Store a new Event
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
            'category_id'   => 'required'
        ]);

        if($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Title & slug are required']);

        //Check if the slug exists using slug trait
        $slug = $this->getUniqueSlug($request->slug, 'events');

        $event = Event::create([
            'title'             => $request->title,
            'slug'              => $slug,
            'tags'              => $request->has('tags') ? $request->tags : null,
            'image'             => $request->has('image') ? $request->image : "",
            'template'          => $request->has('template') ? $request->template : 'default',
            'excerpt'           => $request->has('excerpt') ? $request->excerpt : substr($request->content, 0, 70),
            'content'           => $request->has('content') ? $request->content : "",
            'status'            => $request->status,
            'category_id'       => $request->category_id,
            'published_at'      => \Carbon\Carbon::now(),
            'last_updated_by'   => Auth::user()->id
        ]);

        return redirect()->route('events.edit', ['id' => $event->id]);
    }




    /**
     * Display page for editing
     *
     * @param  integer $id page's id
     *
     * @return view()
     */
    public function edit($id)
    {

        $event = Event::find($id);
        if ( !$event )
            return redirect()->route('events.index');

        $categories = Category::get();

        return view('admin.events.edit', ['event' => $event, 'categories' => $categories]);
    }



    /**
     * Update a Event
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


            $event = Event::find($id);
            if ( !$event )
                return redirect()->back()->withErrors(['error' => 'This event does not exist']);

            $event->tags             = $request->tags;
            $event->title            = $request->title;
            $event->image            = $request->image;
            $event->status           = $request->status;
            $event->template         = $request->template;
            $event->excerpt          = $request->excerpt;
            $event->content          = $request->content;
            $event->category_id      = $request->category_id;
            $event->last_updated_by  = Auth::user()->id;
            $event->save();

            return redirect()->back()->with('message', 'Event successfully update!');
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }

    }
}
