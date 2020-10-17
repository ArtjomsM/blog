@extends('layouts.main')

@section('title', 'About')

@section('content')

@include ('includes.nav')

<main class="container about">
    <div class="row">
        <div class="col text-center text-uppercase py-5">
            <h2>About</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Hi! Welcome to my blog! Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magnam placeat tempora harum laudantium repellat veritatis sapiente quas obcaecati! Distinctio, perspiciatis eius? Quaerat obcaecati eos minima nulla maxime iste omnis atque. Aspernatur iure in vel. Sint nam voluptas ullam ipsa!</p>
        </div>
    </div>
    <div class="row pt-5">
        <div class="d-none d-md-block col-md-4 px-3">
            <div class="about-image about-image1"></div>
        </div>
        <div class="col-6 col-md-4 px-3">
            <div class="about-image about-image2"></div>
        </div>
        <div class="col-6 col-md-4 px-3">
            <div class="about-image about-image3"></div>
        </div>
        
    </div>
</main>

@endsection