<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Session;
use App\category_post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        $meta_title = "Blog";
        $meta_description = "Magyar nyelvű tutorialok, oktatóanyagok Keresőoptimalizálás (SEO), Facebook és Google Ads PPC, Honlapkészítés témában.";


        for ($i = 0; $i < sizeof($posts); $i++) {
            $c = category_post::where('post_id', $posts[$i]['id'])->get()->first();
            $posts[$i]['category_name'] = Category::where('id', $c['category_id'])->get()->first()['name'];
        }
        return view('posts', compact('posts', 'meta_title', 'meta_description'));
    }

    public function postByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category', compact('category'));
    }
}
