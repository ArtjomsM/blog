<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function new(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->image = $request->image;

        $post->save();

        return redirect('/');
    }


    public function view($id)
    {
        $post = Post::findOrFail($id);

        return view('single-post', [
            'post' => $post
        ]);
    }
}
