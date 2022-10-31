@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $need->picture) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title">{{ $need->caption }}</h5>
                    <p class="card-text">{{ $need->description }}</p>
                    <div class="card-body">
                        <div class="d-flex mb-2" style="justify-content:space-between">
                            <div>
                                <span class="text-success small pt-1 fw-bold">Country:</span> <span
                                    class="text-muted small pt-2 ps-1">{{ $need->country }}</span>
                            </div>
                            <div class="ps-3">
                                <span class="text-success small pt-1 fw-bold">Province/City:</span> <span
                                    class="text-muted small pt-2 ps-1">{{ $need->province }}</span>
                            </div>
                            <div class="ps-3">
                                <span class="text-success small pt-1 fw-bold">Value:</span> <span
                                    class="text-muted small pt-2 ps-1">@money($need->monetary)</span>
                            </div>
                            <div class="ps-3">
                                <span class="text-success small pt-1 fw-bold">Status:</span> <span
                                    class="text-muted small pt-2 ps-1">{{ $need->status }}</span>
                            </div>

                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ route('needs.index') }}" class="btn btn-dark">Back</a>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    @endsection
