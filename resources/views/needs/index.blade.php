@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Projects</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">New Project</li>
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
                                <a href="{{ route('needs.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg me-1"></i>
                                    Add Project</a>
                                <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                            </div>

                            <div class="card-body">
                                <h5 class="card-title">All Projects</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Project</th>
                                            <th scope="col" class="text-center">Value</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($needs) > 0)
                                            @foreach ($needs as $need)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $need->id }}</a></th>

                                                    <td>{{ $need->type }}</td>
                                                    <td><a href="{{ route('needs.edit', $need->id) }}"
                                                            class="text-primary">{{ $need->caption }}</a>
                                                    </td>
                                                    <td class="text-center">@money($need->monetary)</td>

                                                    <td>

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
                                                    <td class="text-center">
                                                        <a href="{{ route('needs.edit', $need->id) }}" class="btn btn-primary"> <i class="bi bi-pencil-square"></i></a>
                                                       <a href="{{ route('needs.show', $need->id) }}" class="btn btn-info"> <i class="bi bi-eye-fill"></i></a>
                                                       {!! Share::page(url('need-help/'. $need->id), "Need Help")->facebook()->twitter()->whatsapp() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">
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
