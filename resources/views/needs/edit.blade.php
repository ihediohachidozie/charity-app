@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST" action="{{ route('needs.update', $need->id) }}" enctype="multipart/form-data">
                @csrf
                @include('needs.form')
                @method('PUT')
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('needs.index')}}" class="btn btn-secondary">Back</a>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
@endsection
