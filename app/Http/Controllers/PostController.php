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
        $post->topic = $request->topic;

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

    public function topic($topic)
    {
        $posts = Post::orderBy('created_at', 'DESC')
            ->where('topic', $topic)
            ->get();

        return view('single-topic', [
            'posts' => $posts,
            'topic' => $topic
        ]);
    }

    public function sort_asc($topic)
    {
        $posts = Post::orderBy('created_at', 'ASC')
            ->where('topic', $topic)
            ->get();

        return view('single-topic', [
            'posts' => $posts,
            'topic' => $topic
        ]);
    }

    public function get_all_posts()
    {

        $posts = Post::orderBy('created_at', 'DESC')
            ->get();

        $first_post = Post::orderBy('created_at', 'DESC')
            ->take(1)
            ->get();

        return view('all-posts', [
            'posts' => $posts,
            'first_post' => $first_post
        ]);
    }

    public function get_all_posts_asc()
    {

        $posts = Post::orderBy('created_at', 'ASC')
            ->get();

        $first_post = Post::orderBy('created_at', 'ASC')
            ->take(1)
            ->get();

        return view('all-posts', [
            'posts' => $posts,
            'first_post' => $first_post
        ]);
    }

}
