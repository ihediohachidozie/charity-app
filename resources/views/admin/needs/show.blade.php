@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $needhelp->picture) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form method="Post" action="{{ route('needhelps.update', $needhelp->id) }}">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title">Support For {{ $needhelp->type }}</h5>
                        <p class="card-text">{{ $needhelp->description }}</p>
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <span class="text-success small pt-1 fw-bold">Country:</span> <span
                                        class="text-muted small pt-2 ps-1">{{ $needhelp->country }}</span>
                                </div>
                                <div class="ps-3">
                                    <span class="text-success small pt-1 fw-bold">Province/City:</span> <span
                                        class="text-muted small pt-2 ps-1">{{ $needhelp->province }}</span>
                                </div>
                                <div class="ps-3">
                                    <span class="text-success small pt-1 fw-bold">Value:</span> <span
                                        class="text-muted small pt-2 ps-1">@money($needhelp->monetary)</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input ps-1" type="radio" name="status" value=1>
                                    <label class="form-check-label text-muted small" for="gridRadios1">
                                        Pending
                                    </label>
                                </div>
                                <div class="form-check mx-2">
                                    <input class="form-check-input" type="radio" name="status" value=2>
                                    <label class="form-check-label text-muted small" for="gridRadios2">
                                        Reject
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value=3>
                                    <label class="form-check-label text-muted small" for="gridRadios3">
                                        Approved
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary">Update</button>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
