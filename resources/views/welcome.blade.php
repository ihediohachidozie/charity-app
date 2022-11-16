<!DOCTYPE html>
<html lang="en">

<head>
@include('pages.partials.head')

</head>

<body>

    @include('pages.partials.header')

    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row mb-2">


                    <div class="d-md-flex post-entry-2 half mt-2">
                        {{-- <a href="#" class="me-4 thumbnail order-2">
                            <img src="zenblog/assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                        </a> --}}
                        <!-- Slides with fade transition -->
                        <div id="carouselExampleFade" class="carousel slide carousel-fade thumbnail order-2"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('zenblog/assets/img/image-1.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-2.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-3.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-4.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-5.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-6.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-7.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('zenblog/assets/img/image-8.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleFade" data-bs-slide="prev">
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
        <!-- ======= Hero Slider Section ======= -->
        <section class="bg-light">
            <div class="container-md" data-aos="fade-in">
           {{--      <div class="text-center mb-4">
                    <h2 class="display-4">Helping each other can make the world better</h2>
                    <p>We need your support to fund the following projects</p>
                </div> --}}
                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Projects</h2>
                    <div><a href="{{route('projects')}}" class="more">See All Projects</a></div>
                  </div>
                <div class="row">
                    @foreach ($needs as $need)
                        @if ($need->donations_sum_amount < $need->monetary)
                            <div class="col-lg-3">
                                <a href="{{ route('donate.form', $need->id) }}">
                                    <div class="card border-0 shadow">
                                        <img src="{{ asset('storage/' . $need->picture) }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">{{ $need->caption }}</h6>

                                            <div class="d-flex mb-2" style="justify-content:space-between">
                                                {{-- <div>
                                            <span class="text-success small pt-1 fw-bold">Country:</span> <span
                                                class="text-muted small pt-2 ps-1">{{ $need->country }}</span>
                                        </div> --}}

                                                <div class="">
                                                    <span class="text-success small pt-1 fw-bold">Value:</span> <span
                                                        class="text-muted small pt-2 ps-1">@money($need->monetary)</span>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="text-success small pt-1 fw-bold">Donations:</span>
                                                    <span
                                                        class="text-muted small pt-2 ps-1">{{ $need->donations->count() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach

                </div>

                <div class="text-center mt-4 mt-2">
                    {{$needs->links()}}

                </div>
                <div class="mt-4 mb-4 text-center">

                    <a href="{{route('projects')}}" class="btn btn-primary">Browse All</a>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">How it works</h2>
                                <p>See how fast and easy it is to get your projects funded through us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center mb-5">

                        <img src="{{ asset('zenblog/assets/img/register.png') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Register an account</h4>
                        {{-- <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span> --}}
                        <p>Sign up takes few minutes</p>
                    </div>
                    <div class="col-lg-3 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/updateprofile.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Update the profile</h4>
                        {{-- <span class="d-block mb-3 text-uppercase">Update Your Profile</span> --}}
                        <p>Update your account for easy identification</p>
                    </div>
                    <div class="col-lg-3 text-center mb-5">
                        <img src="{{ asset('zenblog/assets/img/newproject.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Create a Project</h4>
                        {{-- <span class="d-block mb-3 text-uppercase">Create a Project</span> --}}
                        <p>Add a project that you need help to fund</p>
                    </div>
                    <div class="col-lg-3 text-center mb-5">

                        <img src="{{ asset('zenblog/assets/img/share.jpg') }}" alt=""
                            class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Share with family and friends</h4>
                       {{--  <span class="d-block mb-3 text-captialize">Share with family and friends</span> --}}
                        <p>Share on social media with family and friends.</p>
                    </div>
                </div>
                <div class="mt-2 mb-4 text-center">

                    <a href="{{route('register')}}" class="btn btn-primary">Join Now</a>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    @include('pages.partials.footer')

</body>

</html>
