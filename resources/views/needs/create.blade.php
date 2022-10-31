@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Project</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST" action="{{ route('needs.store') }}" enctype="multipart/form-data">
                @csrf
                @include('needs.form')
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('needs.index')}}" class="btn btn-secondary">Back</a>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
@endsection
