<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $meta_title = "Categories Admin";
        return view('admin.categories.index', compact('categories', 'meta_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meta_title = "New Category";
        return view('admin.categories.create', compact('meta_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate submitted data
        $this->validate($request, [
            'name' => 'required|unique:categories', // unique in 'categories' table
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['meta_title'] = $request->meta_title;
        $data['meta_description'] = $request->meta_description;
        $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
        
        $category = DB::table('categories')->insert($data);

        return redirect(route('admin.categories.index'))->with('successMsg', 'Category has been saved successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $meta_title = "Edit Category";
        return view('admin.categories.edit', compact('category', 'meta_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name);
        $data['meta_title'] = $request->meta_title;
        $data['meta_description'] = $request->meta_description;
        $data['updated_at'] = \Carbon\Carbon::now();
        
        $category = DB::table('categories')->where('id', $id)->update($data);
        return redirect(route('admin.categories.index'))->with('successMsg', 'Category has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = DB::table('categories')->where('id', $id)->first();
       
        $category = DB::table('categories')->where('id', $id)->delete();

        return redirect(route('admin.categories.index'))->with('successMsg', 'Category has been deleted successfully!');

    }
}
