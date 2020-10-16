<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $post->title }}</title>

    @include ('includes.default-styles')
    @include ('includes.style')

</head>

<body>

    @include ('includes.nav')

    <main>
        <div class="container">
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
        </div>
        
    </main>

    @include ('includes.footer')
</body>

</html>