<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\category_post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $meta_title = "Webáruház és weboldal készítés | Honlapkészítés";
        $meta_description = "Modern webáruház és weboldal készítés kedvező áron, rövid határidővel. Profitorientált és mobilbarát design. Ingyenes betanítást biztosítunk.";
        $categories = Category::all();
        $posts = Post::latest()->take(3)->get();

        for ($i = 0; $i < sizeof($posts); $i++) {
            $c = category_post::where('post_id', $posts[$i]['id'])->get()->first();
            $posts[$i]['category_name'] = Category::where('id', $c['category_id'])->get()->first()['name'];
        }
        return view('welcome', compact('meta_title', 'meta_description', 'categories', 'posts'));
    }
}
