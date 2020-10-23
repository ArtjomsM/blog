@extends('layouts.main')

@section('title')
{{ $post->title }}
@endsection

@section('content')

@include ('includes.nav')

<main class="container py-5">
    <div class="row">
        <div class="col">
            <h2 class="text-center text-uppercase pb-5">{{ $post->title }}</h2>
            @auth
            <div class="pb-3 text-right">
                <a href="/delete-post/{{ $post->id }}" class="delete text-uppercase text-decoration-none font-weight-bold border border-danger py-1 px-3">X</a>
            </div>
            @endif
            <div class="position-relative">
                <a href="/topic/{{ $post->topic }}"><span class="topic bg-white border border-dark text-uppercase py-2 px-4 position-absolute">{{ $post->topic }}</span></a>
                <div class="image" style="background-image: url({{ $post->image }});"></div>
            </div>
            <div class="text-right font-weight-bold">Post added: {{ $post->created_at->diffForHumans() }}</div>
            <div class="py-4 ">{!! $post->text !!}</div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-6">
            <h3 class="text-uppercase pb-2">Comments</h3>
            <form action="/comment" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" name="comment" id="comment" rows="2" required></textarea>
                </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}" required>
                <button type="submit" class="btn btn-primary px-3 text-uppercase">add comment</button>
            </form>
        </div>
    </div>
    @if (count($comments) > 0)
    <div class="row pt-4">
        <div class="col-11">
            @foreach ($comments as $comment)
            <div class="border mb-2 p-2">
                <div class="d-flex">
                    <h5 class="pr-5">{{ $comment->name }}</h5>
                    <p class="m-0">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
                <p class="m-0">{{ $comment->comment }}</p>

            </div>

        </div>
        @auth
        <div class="col-1">
            <a href="/delete-comment/{{ $comment->id }}" class="delete text-uppercase text-decoration-none font-weight-bold border border-danger py-1 px-3">X</a>
        </div>
        @endif
        @endforeach
    </div>
    @endif
</main>



@endsection