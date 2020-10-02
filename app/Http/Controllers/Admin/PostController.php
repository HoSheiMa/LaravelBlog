<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all data
        $posts = Post::latest()->paginate(10);
        $meta_title = "Posts Admin";
        return view('admin.posts.index', compact('posts', 'meta_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meta_title = "Create Post";
        $categories = Category::all();
        return view('admin.posts.create', compact('meta_title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,webp',
            'categories' => 'required',
            'body' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if(isset($image)) {

            $new_image_name = $slug . "-" . date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $new_image_full_name = $new_image_name . '.' . $ext;

            $upload_path = "public/assets/frontend/uploads/posts/";
            $image_url = $upload_path . $new_image_full_name;
            $do_upload_image = $image->move($upload_path, $new_image_full_name);

        } else {
            $new_image_name = "default.png";
        }
        
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->image = $image_url;
        $post->body = $request->body;
        $post->created_at = \Carbon\Carbon::now();
        $post->updated_at = \Carbon\Carbon::now();

        $post->save();

        $post->categories()->attach($request->categories);

        return redirect(route('admin.posts.index'))->with('successMsg', 'Post has been saved successfully!');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $meta_title = "Edit Post";
        $categories = Category::all();
        return view('admin.posts.edit', compact('meta_title', 'post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Validate incoming data
        $this->validate($request, [
            'title' => 'required',
            //'image' => 'required|mimes:jpeg,png,jpg,webp',
            'categories' => 'required',
            'body' => 'required',
        ]);

        $oldimage = $request->old_image;
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if(isset($image)) {
            unlink($oldimage);

            $new_image_name = $slug . "-" . date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $new_image_full_name = $new_image_name . '.' . $ext;

            $upload_path = "public/assets/frontend/uploads/posts/";
            $image_url = $upload_path . $new_image_full_name;
            $do_upload_image = $image->move($upload_path, $new_image_full_name);

        } else {
            $image_url = $oldimage;
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->image = $image_url;
        $post->body = $request->body;
        $post->updated_at = \Carbon\Carbon::now();

        $post->save();

        $post->categories()->sync($request->categories);

        return redirect(route('admin.posts.index'))->with('successMsg', 'Post has been updated successfully!');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        $image = $post->image;
        unlink($image);

        DB::table('posts')->where('id',$id)->delete();
 
         return redirect(route('admin.posts.index'))->with('successMsg', 'Post has been deleted successfully!');
    }
}
