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
    @include ('includes.nav')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    
                </div>
                <div class="col-12 col-md-4">

                </div>
            </div>
        </div>

    </main>

    @include ('includes.footer')
</body>

</html>