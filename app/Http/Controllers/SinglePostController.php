<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class SinglePostController extends Controller
{
    public function details($slug)
    {

        $post = Post::where('slug', $slug)->first();
        //$randomposts = Post::all()->random(3);

        for ($i = 0; $i < sizeof($post['comments']); $i++) {

            $replys = json_decode($post['comments'][$i]['reply']);
            for ($j = 0; $j < sizeof($replys); $j++) {
                $replys[$j]->name = User::find($replys[$j]->user_id)->first()->name;
            }

            $post['comments'][$i]['reply'] = $replys;
        }
        $categories = Category::all();
        return view('post', compact('post', 'categories'));
    }
}
