<footer class="container-fluid bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-8 col-md-6 col-lg-5 col-xl-4">
                <h5 class="font-weight-bold text-uppercase text-center pb-3 text-white">subscribe to newsletters</h5>
                <form action="/email" method="post" class="form-group d-flex">
                    {{ csrf_field() }}
                    <input type="email" class="form-control" name="email" placeholder="e-mail" required>
                    <button type="submit" class="btn btn-info ml-1 text-uppercase">Submit</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                @endif
            </div>

            <div class="col-4 offset-md-3 col-md-3 offset-lg-5 col-lg-2 offset-xl-6 d-flex flex-column justify-content-end flex-wrap align-items-end">
                <div class="text-right">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/logout') }}" class="text-sm text-white-50 underline">Logout</a>
                    <br>
                    <a href="{{ url('/create') }}" class="text-sm text-white-50 underline">Add new post</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-white-50 underline">Login</a>
                    @endif
                    @endif
                </div>
                <div class="text-right text-white-50">&COPY;A.M. 2020</div>
            </div>

        </div>
    </div>

</footer>