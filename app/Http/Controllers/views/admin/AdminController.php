<?php

namespace App\Http\Controllers\views\admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function home()
    {
        $users = DB::table('users')->count();
        $posts = DB::table('posts')->count();
        $comments = DB::table('comments')->count();
        $pages = DB::table('pages')->count();
        $events = DB::table('events')->count();

        return view('admin.all.dashboard', compact('users', 'posts', 'comments', 'pages', 'events'));
    }




    public function files()
    {
        return view('admin.all.files');
    }
}
