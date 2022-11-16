    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('welcome') }}" class="logo text-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('zenblog/assets/img/logo1.png') }}" alt="" width="110px" height="170px">
                {{--  <h1>Moren-O</h1>
                <div>
                    <span class="text-muted text-sm">Goodwill Foundation</span>
                </div> --}}
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('aboutus') }}">About Us</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('monetary') }}">Monetary Contributions</a></li>
                            <li><a href="{{ route('food') }}">Food Contributions</a></li>
                            <li><a href="{{ route('cloth') }}">Clothing Contributions</a></li>
                            <li><a href="{{route('training')}}">Nonprofit Charitable Training</a></li>



                        </ul>
                    </li>


                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="#" class="mx-2"><span class="bi-cart"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->
