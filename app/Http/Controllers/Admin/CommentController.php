<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index() {
        $meta_title = "Comments";
        $comments = Comment::latest()->get();
        return view('admin.comments', compact('meta_title', 'comments'));
    }

    public function destroy($id) {
        Comment::findOrFail($id)->delete();
        return redirect()->back()->with('successMsg', 'Comment has been deleted successfully!');
    }
}
