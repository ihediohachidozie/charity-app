@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Users' Needs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Users' Needs</li>
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
                                <h5 class="card-title">All Requests</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Picture</th>
                                            <th scope="col">User</th>

                                            <th scope="col">Project</th>
                                            <th scope="col" class="text-center">Value</th>
                                            <th scope="col" class="text-center">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($needs) > 0)
                                            @foreach ($needs as $need)
                                                <tr>

                                                    <th scope="row" class="text-center">
                                                        <a href="{{ route('needhelps.show', $need) }}" class="text-primary">
                                                            <img src="{{ asset('storage/' . $need->picture) }}"
                                                                class="rounded" width="50px" height="50px">
                                                        </a>
                                                    </th>

                                                    <td>
                                                        <a href="{{ route('users.show', $need->user->id) }}">
                                                            {{ $need->user->name }}
                                                        </a>
                                                    </td>
                                                    <td><a href="{{ route('needhelps.show', $need) }}"
                                                            class="text-primary">{{ $need->caption }}</a>
                                                    </td>
                                                    <td class="text-center">@money($need->monetary)</td>
                                                    <td class="text-center">
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

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-center">
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
