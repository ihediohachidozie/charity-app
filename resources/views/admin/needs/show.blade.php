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
                        <h5 class="card-title">Support Type: {{ $needhelp->type }}</h5>
                        <p class="card-text">{{ $needhelp->description }}</p>
                        <div class="row card-text">
                            <div class="col-lg-3 col-md-4 label">Country</div>
                            <div class="col-lg-9 col-md-8">{{ $needhelp->country }}</div>
                        </div>
                        <div class="row card-text">
                            <div class="col-lg-3 col-md-4 label">Province/City</div>
                            <div class="col-lg-9 col-md-8">{{ $needhelp->province }}</div>
                        </div>
                        <div class="row card-text">
                            <div class="col-lg-3 col-md-4 label">Value:</div>
                            <div class="col-lg-9 col-md-8">{{ $needhelp->monetary }}</div>
                        </div>
                        <fieldset class="row mb-3 mt-4">
                            <legend class="col-form-label col-sm-3 pt-0">Approval Status</legend>
                            <div class="col-sm-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1" value=1 >
                                <label class="form-check-label" for="gridRadios1">
                                  First radio
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value=2>
                                <label class="form-check-label" for="gridRadios2">
                                  Second radio
                                </label>
                              </div>
                              <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value=3 >
                                <label class="form-check-label" for="gridRadios3">
                                  Third disabled radio
                                </label>
                              </div>
                            </div>
                          </fieldset>
                        <div class="row card-text">
                            <div class="col-lg-3 col-md-4 label">Status:</div>
                            <div class="col-lg-9 col-md-8">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="1" checked>Pending
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="2">Reject
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="3">Approve
                                </label>
                            </div>
                        </div>
                        <p class="card-text"><button type="submit" class="btn btn-primary mt-4">Button</button></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
