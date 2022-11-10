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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <style type="text/css">
        .container {
            margin-top: 40px;
        }

        .panel-heading {
            display: inline;
            font-weight: bold;
        }

        .flex-table {
            display: table;
        }

        .display-tr {
            display: table-row;
        }

        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 55%;
        }

        .card-title {
            font-size: 20px;
        }

        .d-flex {
            font-size: 15px;
        }

        a {
            color: black;
        }

        a:hover {
            text-decoration-line: none;
        }

    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between"
            style="justify-content:space-between">

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
                    <li><a href="{{ route('welcome') }}">Home</a></li>
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
                    <div class="col-md-6">
                        <div class="card border-0 shadow">
                            <img src="{{ asset('storage/' . $need->picture) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">{{ $need->caption }}</h6>

                                <div class="d-flex mb-2" style="justify-content:space-between">
                                    <div>
                                        <span class="text-success small pt-1 fw-bold">Value:</span> <span
                                            class="text-muted small pt-2 ps-1">@money($need->monetary)</span>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-success small pt-1 fw-bold">Donations:</span> <span
                                            class="text-muted small pt-2 ps-1">{{ $need->donations->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row text-center">
                                    <h3 class="panel-heading">We appreciate your kind gesture</h3>
                                </div>
                            </div>
                            <div class="panel-body">

                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert"
                                            aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif

                                <form role="form" action="{{ route('donate.store') }}" method="post"
                                    class="validation" data-cc-on-file="false"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                    @csrf
                                    <input type="hidden" name="need_id" value="{{ $need->id }}">
                                    <input type="hidden" name="caption" value="{{ $need->caption }}">
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Email</label> <input class='form-control'
                                                size='4' type='email' name="email">
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input
                                                class='form-control' size='4' type='text' name="name">
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Amount</label> <input class='form-control'
                                                size='4' type='number' name="amount" min="50">
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                                class='form-control card-num' size='20' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label>
                                            <input autocomplete='off' class='form-control card-cvc'
                                                placeholder='e.g 415' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM'
                                                size='2' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-expiry-year' placeholder='YYYY'
                                                size='4' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-row row'>
                                        <div class='col-md-12 hide error form-group'>
                                            <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-danger btn-lg btn-block" type="submit">Pay Now
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
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
                                    <img src="zenblog/assets/img/post-sq-1.jpg" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>5 Great Startup Tips for Female Founders</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="zenblog/assets/img/post-sq-2.jpg" alt=""
                                        class="img-fluid me-3">
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
                                    <img src="zenblog/assets/img/post-sq-3.jpg" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="zenblog/assets/img/post-sq-4.jpg" alt=""
                                        class="img-fluid me-3">
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

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {
            var $form = $(".validation");
            $('form.validation').bind('submit', function(e) {
                var $form = $(".validation"),
                    inputVal = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputVal),
                    $errorStatus = $form.find('div.error'),
                    valid = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorStatus.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-num').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeHandleResponse);
                }

            });

            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>

</body>

</html>
