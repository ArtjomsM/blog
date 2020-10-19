<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function new(Request $request)
    {
        $post = new Post();
        $post->title = htmlentities(trim($request->title));
        $post->text = trim($request->text);
        $post->image = htmlentities(trim($request->image));
        $post->topic = htmlentities(trim($request->topic));

        $post->save();

        return redirect('/');
    }

    public function get_single_post($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::orderBy('created_at', 'DESC')
            ->where('post_id', $id)
            ->get();

        return view('single-post', [
            'post' => $post,
            'comments' => $comments
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
