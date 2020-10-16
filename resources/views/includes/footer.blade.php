<footer class="container-fluid bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-8 col-md-6 col-lg-5 col-xl-4">
                <h5 class="font-weight-bold text-uppercase text-center pb-3 text-white">subscribe to newsletters</h5>
                <form action="/email" method="post" class="form-group d-flex">
                    {{ csrf_field() }}
                    <input type="email" class="form-control" name="email" placeholder="e-mail" required>
                    <button type="submit" class="btn btn-primary ml-1">Submit</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end pr-3">
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/new') }}" class="text-sm text-white-50 underline">Add new post</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-white-50 underline">Login</a>
        @endif
        @endif
    </div>
    <p class="text-right text-white-50 pr-3">&COPY;A.M. 2020</p>

</footer>