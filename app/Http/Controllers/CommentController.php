<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function post_comment(Request $request)
    {
        $comment = new Comment();
        $comment->name = htmlentities(trim($request->name));
        $comment->comment = htmlentities(trim($request->comment));
        $comment->post_id = $request->post_id;

        $comment->save();

        return back();
    }
}
