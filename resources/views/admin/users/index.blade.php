@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>All Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
        <div class="row">
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <div class="col-lg-3">
                        <!-- Card with an image on top -->
                        <a href="{{ route('users.show', $user->id) }}" class="text-primary">
                            <div class="card">
                                @if ($user->profile == null)
                                    <img src="{{ asset('assets/img/no-image.png') }}" alt="Profile" class="card-img-top"
                                        >
                                @else
                                    <img src="{{ asset('storage/' . $user->profile->image) }}" class="card-img-top"
                                        >
                                @endif
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">{{ $user->email }}</p>
                                </div>
                            </div><!-- End Card with an image on top -->
                        </a>
                    </div>
                    @endforeach
                    {{ $users->links() }}
            @endif
            <!-- Left side columns -->

        </div>
    </section>
@endsection
