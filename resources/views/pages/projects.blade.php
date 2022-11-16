<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.partials.head')

</head>

<body>

    @include('pages.partials.header')

    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section class="bg-light">
            <div class="container-md" data-aos="fade-in">
                {{--      <div class="text-center mb-4">
                    <h2 class="display-4">Helping each other can make the world better</h2>
                    <p>We need your support to fund the following projects</p>
                </div> --}}
                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>All Projects</h2>

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
                    {{ $needs->links() }}

                </div>

            </div>
        </section><!-- End Hero Slider Section -->
    </main><!-- End #main -->

    @include('pages.partials.footer')

</body>

</html>
