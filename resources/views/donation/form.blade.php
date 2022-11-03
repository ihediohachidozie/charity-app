<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Moren-O - Goodwill Foundation</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('zenblog/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('zenblog/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('zenblog/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('zenblog/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('zenblog/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('zenblog/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{ asset('zenblog/assets/css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('zenblog/assets/css/main.css') }}" rel="stylesheet">

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

            <a href="{{ route('welcome') }}" class="logo text-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="zenblog/assets/img/logo.png" alt=""> -->
                <h1>Moren-O</h1>
                <div>
                    <span class="text-muted text-sm">Goodwill Foundation</span>
                </div>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Monetary Contributions</a></li>
                            <li><a href="#">Food Contributions</a></li>
                            <li><a href="#">Clothing Contributions</a></li>
                            <li><a href="#">Nonprofit Charitable Training</a></li>



                        </ul>
                    </li>


                    <li><a href="#">Contact</a></li>
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

    <main id="main">
        <!-- ======= Hero Slider Section ======= -->
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row mb-2">


                    <div class="d-md-flex post-entry-2 half mt-2">
                        {{-- <a href="#" class="me-4 thumbnail order-2">
                            <img src="zenblog/assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                        </a> --}}
                        <div class="php-email-form thumbnail order-2">

                            <div class="form mt-5">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="pe-md-5 mt-4 mt-md-0">
                            <div class="post-meta mt-4">Mission &amp; Vision</div>
                            <h2 class="mb-2 display-4">Mission &amp; Vision</h2>

                            <p>To be in the forefront of offerring succour to the underprivileged wherever they could be
                                found round the world</p>
                            <p>To strive towards making the world better place through impactful charitable programmes
                                that will alleviate the stuffering the poor and the vulnerable cross regions in
                                developing countries round the world.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About Moren-O</h3>
                        <p>MOREN-O Goodwill Foundation was incorporated in Nigeria three and half years ago as a
                            non-profit organization with the main objective of assisting the underprivileged in the
                            society through its charitable activities and programmes.
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
                            © Copyright <strong><span>{{ date('Y') }}</span></strong>. All Rights Reserved
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
    <script src="{{ asset('zenblog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('zenblog/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('zenblog/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('zenblog/assets/vendor/aos/aos.js') }}"></script>
    <script src="#"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('zenblog/assets/js/main.js') }}"></script>

</body>

</html>
