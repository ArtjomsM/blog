@extends('layouts.main')

@section('title', 'Blog')

@section('content')

<header class="d-flex justify-content-center align-items-center text-center">
    <h1 class="text-uppercase text-white font-weight-bold">
        <small>Welcome to</small><br>My blog
    </h1>
</header>

@include ('includes.nav')

<main>
    <div class="container">
        <div class="row py-5">

            <div class="col">
                <div class="row text-center ">
                    <div class="col text-uppercase pb-3">
                        <h2>Recent posts</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col py-3 d-flex justify-content-between">
                        <div class="dropdown">
                            <div onclick="sortDropdown()" class="dropbtn position-relative">Sort by</div>
                            <div id="sort" class="dropdown-content position-absolute">
                                <a href="/" class="text-decoration-none d-block p-2">Newest first</a>
                                <a href="/asc" class="text-decoration-none d-block p-2">Oldest first</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div onclick="filterDropdown()" class="dropbtn position-relative mr-4">Filter by</div>
                            <div id="filter" class="dropdown-content position-absolute">
                                <a href="/topic/Business" class="text-decoration-none d-block p-2">Business</a>
                                <a href="/topic/Health" class="text-decoration-none d-block p-2">Health</a>
                                <a href="/topic/Technology" class="text-decoration-none d-block p-2">Technology</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($first_post as $first)

                    <div class="col translatey p-2">
                        <div class="border p-2 position-relative">
                            <a href="http://127.0.0.1:8000/post/{{ $first->id }}">
                                <div class="first-image" style="background-image: url( {{ $first->image }} );"></div>
                            </a>
                            <a href="/topic/{{ $first->topic }}"><span class="topic bg-white border border-dark text-uppercase py-2 px-4 position-absolute">{{ $first->topic }}</span></a>
                            <h3 class="pt-2">{{ $first->title }}</h3>
                            <p class="mb-2">{{ $first->created_at->diffForHumans() }}</p>
                            <q>{{ strip_tags(substr($first->text, 0, 307)) }}</q>
                            <a href="http://127.0.0.1:8000/post/{{ $first->id }}" class="text-info">Read more...</a>

                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="row d-flex flex-wrap">
                    @foreach ($posts as $post)

                    @if ($post != $first)
                    <div class="col-6 col-lg-4 col-xl-3 translatey p-2">
                        <div class="border p-2 position-relative">
                            <a href="http://127.0.0.1:8000/post/{{ $post->id }}">
                                <div class="post-image" style="background-image: url( {{ $post->image }} );"></div>
                            </a>
                            <a href="/topic/{{ $post->topic }}"><span class="topic bg-white border border-dark text-uppercase py-1 px-2 position-absolute">{{ $post->topic }}</span></a>
                            <h3 class="pt-2">{{ $post->title }}</h3>
                            <p class="mb-2">{{ $post->created_at->diffForHumans() }}</p>
                            <q>{{ strip_tags(substr($post->text, 0, 123)) }}</q>
                            <a href="http://127.0.0.1:8000/post/{{ $post->id }}" class="text-info">Read more...</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col pb-5 text-center">
                @if (count($posts) >= 9)
                <a href="/all-posts" class="btn btn-secondary text-uppercase py-3 px-5">All posts</a>
                @endif
            </div>
        </div>
    </div>

</main>

@endsection