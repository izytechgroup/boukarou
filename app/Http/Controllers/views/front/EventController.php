<?php

namespace App\Http\Controllers\views\front;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index ()
    {
        $first = Event::orderBy('id', 'desc')
        ->where('status', 'published')
        ->first();

        $events = [];
        if ( $first)
            $events = Event::orderBy('id', 'desc')
                ->with('category')
                ->whereStatus('published')
                ->where('id', '!=', $first->id)
                ->paginate(10);

        return view('front.events.index', compact('events', 'first'));
    }


    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->whereStatus('published')
            ->first();

        $events = Event::whereStatus('published')
            ->where('category_id', $event->category_id)
            ->where('slug', '!=', $event->slug)
            ->with('category')
            ->select(
                'title',
                'slug',
                'image'
            )
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        if (!$event) {
            return redirect()->back()->withErrors(['message' => 'Not existing event !']);
        }
        return view('front.events.show', compact('event', 'events'));
    }
}
