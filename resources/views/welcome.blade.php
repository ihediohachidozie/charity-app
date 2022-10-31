<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZenBlog Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="assetx/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="assetx/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetx/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetx/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assetx/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetx/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assetx/css/variables.css" rel="stylesheet">
    <link href="assetx/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo text-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assetx/img/logo.png" alt=""> -->
                <h1>Moren-O</h1>
                <div>
                    <span class="text-muted text-sm">Goodwill Foundation</span>
                </div>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="single-post.html">About Us</a></li>
                    <li class="dropdown"><a href="category.html"><span>Services</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Monetary Contributions</a></li>
                            <li><a href="#">Food Contributions</a></li>
                            <li><a href="#">Clothing Contributions</a></li>
                            <li><a href="#">Nonprofit Charitable Training</a></li>



                        </ul>
                    </li>


                    <li><a href="#">Contact</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
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

    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row mb-2">


                    <div class="d-md-flex post-entry-2 half mt-2">
                        {{-- <a href="#" class="me-4 thumbnail order-2">
                            <img src="assetx/img/post-landscape-1.jpg" alt="" class="img-fluid">
                        </a> --}}
                        <!-- Slides with fade transition -->
                        <div id="carouselExampleFade" class="carousel slide carousel-fade thumbnail order-2"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                </div>
                                {{--                    <div class="carousel-item">
                                    <img src="assetx/img/post-landscape-1.jpg" class="d-block w-100" alt="...">
                                </div> --}}
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div><!-- End Slides with fade transition -->
                        <div class="pe-md-5 mt-4 mt-md-0">
                            <div class="post-meta mt-4">Mission &amp; Vision</div>
                            <h2 class="mb-2 display-4">Mission &amp; Vision</h2>

                            <p>To be in the forefront of offerring succour to the underprivileged wherever they could be found round the world</p>
                            <p>To strive towards making the world better place through impactful charitable programmes that will alleviate the stuffering the poor and the vulnerable cross regions in developing countries round the world.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======= Hero Slider Section ======= -->
        <section class="bg-light">
            <div class="container-md" data-aos="fade-in">
                <div class="text-center mb-4">
                    <h2 class="display-4">Helping each other can make the world better</h2>
                    <p>We need your support to fund the following projects</p>
                </div>

                <div class="row">
                    @foreach ($needs as $need)
                        <div class="col-lg-2">
                            <div class="card border-0">
                                <img src="{{ asset('storage/' . $need->picture) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $need->caption }}</h6>

                                    <div class="d-flex mb-2" style="justify-content:space-between">
                                        <div>
                                            <span class="text-success small pt-1 fw-bold">Country:</span> <span
                                                class="text-muted small pt-2 ps-1">{{ $need->country }}</span>
                                        </div>

                                        <div class="ps-3">
                                            <span class="text-success small pt-1 fw-bold">Value:</span> <span
                                                class="text-muted small pt-2 ps-1">@money($need->monetary)</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary">Browse All</a>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About Moren-O</h3>
                        <p>MOREN-O Goodwill Foundation was incorporated in Nigeria three and half years ago as a non-profit organization with the main objective of assisting the underprivileged in the society through its charitable activities and programmes.
                            </p>
                        <p><a href="#" class="footer-link-more">Learn More</a></p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> About Us</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Services</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Contact</a></li>

                        </ul>
                    </div>


                    <div class="col-lg-4">
                        <h3 class="footer-heading">Recent Posts</h3>

                        <ul class="footer-links footer-blog-entry list-unstyled">
                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assetx/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>5 Great Startup Tips for Female Founders</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assetx/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>What is the son of Football Coach John Gruden, Deuce Gruden doing
                                            Now?</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assetx/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assetx/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>{{date('Y')}}</span></strong>. All Rights Reserved
                        </div>



                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetx/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetx/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetx/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetx/vendor/aos/aos.js"></script>
    <script src="assetx/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetx/js/main.js"></script>

</body>

</html>
