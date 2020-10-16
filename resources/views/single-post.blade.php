@extends('layouts.main')

@section('title', '{{ $post->title }}')

@section('content')

<main class="container">
    <div class="row">
        <div class="col text-center text-uppercase py-5">
            <h2>{{ $post->title }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
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