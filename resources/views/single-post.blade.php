@extends('layouts.main')

@section('title')
{{ $post->title }}
@endsection

@section('content')

<main class="container">
    <div class="row">
        <div class="col text-center text-uppercase py-5">
            <h2>{{ $post->title }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <a href="/{{ $post->topic }}"><span class="topic bg-white border border-dark text-uppercase py-2 px-4 position-absolute">{{ $post->topic }}</span></a>
            <div class="image" style="background-image: url({{ $post->image }});"></div>
        </div>
    </div>
    <div class="row">
        <div class="col text-right">
            {{ $post->created_at->diffForHumans() }}
        </div>
    </div>
    <div class="row">
        <div class="col py-4">
            {!! $post->text !!}
        </div>
    </div>
</main>



@endsection