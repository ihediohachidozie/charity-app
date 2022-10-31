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

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">


                            </div>

                            <div class="card-body">
                                <h5 class="card-title">All Users</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Profile Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($users) > 0)
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row" class="text-center">
                                                        <a href="{{ route('users.show', $user->id) }}" class="text-primary">
                                                            @if ($user->profile == null)
                                                            <img src="{{asset('assets/img/no-image.png')}}" alt="Profile" class="rounded-circle" width="50px" height="50px">
                                                            @else

                                                            <img src="{{ asset('storage/' . $user->profile->image)}}" class="rounded-circle" width="50px" height="50px">
                                                            @endif
                                                        </a>
                                                    </th>
                                                    <td>{{ $user->name }}</td>
                                                    <td><a href="{{ route('users.show', $user->id) }}"
                                                            class="text-primary">{{ $user->email }}</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3" class="text-center">
                                                    No record found
                                                </td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>

                            </div>



                        </div><!-- End Disabled Backdrop Modal-->
                    </div>
                </div><!-- End Recent Sales -->


            </div>
        </div>
    </section>
@endsection
