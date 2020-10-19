@extends('layouts.main')

@section('title', 'About')

@section('content')

@include ('includes.nav')

<main class="container">
    <div class="row">
        <div class="col text-center text-uppercase py-5">
            <h2>Contact</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
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
            <div class="alert alert-success mt-3">
                {{ session('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col px-5 py-3">
                <h3 class="font-weight-bold text-uppercase text-center order-1 order-md-0">Follow on</h3>
                <div class="d-flex justify-content-between">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram-square fa-3x"></i></a>
                    <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-square fa-3x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 col-lg-6 pt-4 order-0 order-md-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.825442029487!2d24.128513399999992!3d56.95179189999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece32a19ef475%3A0x833d1a82529b6032!2sAleksandra%20%C4%8Caka%20iela%2030%2C%20Latgales%20priek%C5%A1pils%C4%93ta%2C%20R%C4%ABga%2C%20LV-1011!5e0!3m2!1slv!2slv!4v1602951688789!5m2!1slv!2slv" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="true" tabindex="0"></iframe>
        </div>
    </div>


</main>
<script src="https://kit.fontawesome.com/b7ff160b9c.js" crossorigin="anonymous"></script>
@endsection