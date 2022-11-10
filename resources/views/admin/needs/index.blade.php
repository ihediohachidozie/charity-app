@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>All Projects</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Projects</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="row">
                @if (count($needs) > 0)
                    @foreach ($needs as $need)
                        <div class="col-lg-4">
                            <!-- Card with an image on top -->
                            <div class="card">
                                <a href="{{ route('needhelps.show', $need) }}">
                                    <img src="{{ asset('storage/' . $need->picture) }}" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $need->caption }}</h5>

                                    <div class="d-flex mb-2" style="justify-content:space-between">
                                        <div>
                                            <span class="text-success small pt-1 fw-bold">Project Value:</span> <span
                                                class="text-muted small pt-2 ps-1">@money($need->monetary)</span>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-success small pt-1 fw-bold">Status:</span>
                                            @if ($need->status == 'Pending')
                                                <span class="badge bg-warning text-dark"><i
                                                        class="bi bi-exclamation-triangle me-1"></i>{{ $need->status }}</span>
                                            @elseif ($need->status == 'Rejected')
                                                <span class="badge bg-danger text-white"><i
                                                        class="bi bi-exclamation-octagon me-1"></i>{{ $need->status }}</span>
                                            @else
                                                <span class="badge bg-success text-white"><i
                                                        class="bi bi-check-circle me-1"></i>{{ $need->status }}</span>
                                            @endif
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-success small pt-1 fw-bold">Donations:</span> <span
                                                class="text-muted small pt-2 ps-1">@money($need->donations_sum_amount)</span>
                                        </div>
                                    </div>


                                </div>
                            </div><!-- End Card with an image on top -->

                        </div>

                    @endforeach
                    {{ $needs->links() }}
                @endif
            </div>
        </div>
    </section>

@endsection
