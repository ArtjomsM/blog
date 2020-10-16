<footer class="container-fluid bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-8 col-md-6 col-xl-4">
                <h5 class="font-weight-bold text-uppercase text-center pb-3 text-white">subscribe to newsletters</h5>
                <form>
                    <div class="form-group d-flex">
                        <input type="email" class="form-control" id="email" placeholder="e-mail">
                        <button type="submit" class="btn btn-primary ml-1">Submit</button>
                    </div>
                </form>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>