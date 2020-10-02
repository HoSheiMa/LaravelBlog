<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $post)
    {

        $this->validate($request, [
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back()->with('successMsg', 'Comment Successfully Published');
    }
    public function reply(Request $request, $post, $CommentId)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $comm = Comment::find($CommentId);
        $replys = json_decode($comm->reply);
        array_push($replys, array(
            "id" => sizeof($replys) + rand(0, 3333333333),
            "post_id" => $post,
            "user_id" => Auth::id(),
            "Comment_id" => $CommentId,
            "comment" => $request->comment
        ));
        $replys  = json_encode($replys);

        $comm->reply = $replys;
        $comm->save();


        return redirect()->back()->with('successMsg', 'Comment Successfully Published');
    }
}
