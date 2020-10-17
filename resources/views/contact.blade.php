@extends('layouts.main')

@section('title', 'About')

@section('content')

<main class="container">
    <div class="row">
        <div class="col text-center text-uppercase py-5">
            <h2>Contact</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/send" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="your name..." required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="your e-mail..." required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary px-4 text-uppercase">Send</button>
            </form>
            @if (session('message'))
            <div class="alert alert-success pt-3">
                {{ session('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif
        </div>
    </div>
</main>

@endsection