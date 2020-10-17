<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('created_at', 'DESC')
            ->get();

        $first_post = Post::orderBy('created_at', 'DESC')
            ->take(1)
            ->get();

        return view('welcome', [
            'posts' => $posts,
            'first_post' => $first_post
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('new-post');
    }
}
