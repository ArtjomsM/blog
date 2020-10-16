<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\Models\Post;
use App\Models\Email;

class HomeController extends Controller
{
    public function index() {

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

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('new-post');
    }

    public function get_email(Request $request) {
        $email = new Email();
        $email->email = $request->email;

        $email->save();

        $request->session()->flash('message', 'You have successfully subscribed!');
        return redirect('/');
    }
}
