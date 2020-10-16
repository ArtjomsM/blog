<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    @include ('includes.default-styles')
    @include ('includes.style')

</head>

<body>
    <header class="bg-dark d-flex justify-content-center align-items-center text-center">
        <h1 class="text-uppercase text-white font-weight-bold">
            <small>Welcome to</small><br>My blog
        </h1>
    </header>

    @include ('includes.nav')

    <main>
        <div class="container">
            <div class="row py-5">

                <div class="col">
                    <div class="row text-center ">
                        <div class="col text-uppercase pb-3">
                            <h2>Recent posts</h2>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($first_post as $first)

                        <div class="col translatey  p-2">
                            <div class="border p-2">
                                <a href="http://127.0.0.1:8001/post/{{ $first->id }}">
                                    <div class="first-image" style="background-image: url({{ $first->image }});"></div>
                                </a>
                                <h3 class="pt-2">{{ $first->title }}</h3>
                                <div class="d-flex justify-content-between">
                                    <p>{{ $first->created_at->diffForHumans() }}</p>
                                    <a href="http://127.0.0.1:8001/post/{{ $first->id }}">Read more...</a>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="row d-flex flex-wrap">
                        @foreach ($posts as $post)

                        @if ($post != $first)
                        <div class="col-6 col-lg-4 col-xl-3 translatey p-2">
                            <div class="border p-2">
                                <a href="http://127.0.0.1:8001/post/{{ $post->id }}">
                                    <div class="post-image" style="background-image: url({{ $post->image }});"></div>
                                </a>
                                <h3 class="pt-2">{{ $post->title }}</h3>
                                <div class="d-flex justify-content-between">
                                    <p>{{ $post->created_at->diffForHumans() }}</p>
                                    <a href="http://127.0.0.1:8001/post/{{ $post->id }}">Read more...</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
        </div>
    </main>

    @include ('includes.footer')
</body>

</html>