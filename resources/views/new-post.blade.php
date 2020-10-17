@extends('layouts.main')

@section('title', 'Add new post')

@section('content')

@include ('includes.nav')

@auth
<main class="container">
    <div class="row pt-5">
        <div class="col-12 col-md-8">
            <h3 class="pb-4">Create new post</h3>

            <form action="\new" method="post" class="pb-5">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title.." required>
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="url" class="form-control" id="image" name="image" placeholder="image url.." value="https://picsum.photos/id/000/1920/1080" required>
                </div>
                <div class="form-group">
                    <label for="topic">Topic</label>
                    <select class="form-control" id="topic" name="topic" placeholder="topic.." required>
                        <option value="Business">Business</option>
                        <option value="Technology">Technology</option>
                        <option value="Health">Health</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Body</label>
                    <textarea class="form-control" id="text" name="text" placeholder="body text.." rows="20" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col-12 col-md-4">

        </div>
    </div>

</main>
@else
<div class="container">
    <h2 class="text-center pt-5 text-uppercase">Permission denied</h2>
    <a href="{{ route('login') }}" class="text-sm text-body underline">Login</a>
</div>

@endif


@endsection