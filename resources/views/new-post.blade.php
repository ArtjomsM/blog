@extends('layouts.main')

@section('title', 'Add new post')

@section('content')
@auth
<main class="container">
    <div class="row pt-5">
        <div class="col-12 col-md-8">
            <h3 class="pb-4">Create new post</h3>

            <form action="\create" method="post" class="pb-5">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title.." required>
                </div>
                <div class="form-group">
                    <label for="text">Body</label>
                    <textarea class="form-control" id="text" name="text" placeholder="body text.." rows="20" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="image url.." required>
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