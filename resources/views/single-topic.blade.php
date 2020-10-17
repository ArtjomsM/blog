@extends('layouts.main')

@section('title')
{{ $topic }}
@endsection

@section('content')

@include ('includes.nav')

<main class="container">
    <div class="row">
        <div class="col text-center text-uppercase py-5">
            <h2>{{ $topic }}</h2>
        </div>
    </div>


    <div class="row d-flex flex-wrap">
        @foreach ($posts as $post)


        <div class="col-6 col-lg-4 col-xl-3 translatey p-2">
            <div class="border p-2 position-relative">
                <a href="http://127.0.0.1:8001/post/{{ $post->id }}">
                    <div class="post-image" style="background-image: url( {{ $post->image }} );"></div>
                </a>
                <a href="/topic/{{ $post->topic }}"><span class="topic bg-white border border-dark text-uppercase py-1 px-2 position-absolute">{{ $post->topic }}</span></a>
                <h3 class="pt-2">{{ $post->title }}</h3>
                <p class="mb-2">{{ $post->created_at->diffForHumans() }}</p>
                <q>{{ strip_tags(substr($post->text, 0, 160)) }}</q>
                <a href="http://127.0.0.1:8001/post/{{ $post->id }}" class="text-info">Read more...</a>

            </div>
        </div>

        @endforeach
    </div>
    </div>
</main>



@endsection