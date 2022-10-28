@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $needhelp->picture) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$needhelp->type}}</h5>
                    <p class="card-text">{{$needhelp->description}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
