<div class="col-lg-4">
    <h3 class="footer-heading">Lets keep in touch</h3>
    <p>
        Subscribe to keep up with our exciting news and updates
    </p>

    <!-- No Labels Form -->
    <form class="row g-3" action="{{route('newsletter')}}" method="POST">
        @csrf

        <div class="col-md-8">
            <input type="email" class="form-control" name="email" placeholder="Enter your email address">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary" style="background-color: rgb(0, 132, 255)">Subscribe Now</button>
        </div>
    </form><!-- End No Labels Form -->
    <div class="my-3">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
        @endif


    </div>
</div>
