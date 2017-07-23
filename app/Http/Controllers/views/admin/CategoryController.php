<?php

namespace App\Http\Controllers\views\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        $categories = Category::with('parent')->get();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.categories.create', compact('categories'));
    }

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'slug'          => 'required',
        ]);

        if($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Name & slug are required']);

        //Check if the slug exists using slug trait
        $category = Category::where('slug', $request->slug)->first();

        if ( $category )
            return redirect()->back()->withErrors(['error' => 'This category already exists']);


        $cat = Category::create([
            'name'              => $request->name,
            'slug'              => $request->slug,
            'parent_id'         => $request->has('parent_id') ? $request->parent_id : null
        ]);

        return redirect()->route('categories.edit', ['id' => $cat->id]);
    }

/**
 * [edit description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function edit($id)
    {
        $category = Category::find($id);
        if ( !$category )
            return redirect()->route('categories.index');

        $categories = Category::get();

        return view('admin.categories.edit', ['category' => $category, 'categories' => $categories]);
    }

/**
 * [update description]
 * @param  Request $request [description]
 * @param  [type]  $id      [description]
 * @return [type]           [description]
 */
    public function update(Request $request, $id)
    {
        try
        {

            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ]);

            if($validator->fails())
                return redirect()->back()->withErrors(['validator' => 'Name is required']);


            $cat = Category::find($id);
            if ( !$cat )
                return redirect()->back()->withErrors(['error' => 'This category does not exist']);

            $cat->name          = $request->name;
            $cat->parent_id     = (int)$request->parent_id != 0 ? $request->parent_id : null;

            $cat->update();

            return redirect()->back()->with('message', 'Category successfully update!');
        }
        catch (Exception $e) {
            return redirect()->back()->withErrors($e);
        }

    }
}
