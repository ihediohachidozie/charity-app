@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>All Donations</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Donations</li>
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

                                <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                            </div>

                            <div class="card-body">
                                <h5 class="card-title">All Donations</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">#</th> --}}
                                            <th scope="col">Project</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" class="text-center">Amount</th>
                                            <th scope="col">Trans. ID</th>

                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-center">Receipt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($donations) > 0)
                                            @foreach ($donations as $donation)
                                                <tr>
                                                    {{-- <th scope="row"><a href="#">{{ $donation->id }}</a></th> --}}


                                                    <td><a href="{{ route('needs.edit', $donation->id) }}"
                                                            class="text-primary">@include('admin.donations.project')</a>
                                                    </td>
                                                    <td >{{ $donation->name }}</td>
                                                    <td >{{ $donation->email }}</td>
                                                    <td class="text-center">@money($donation->amount)</td>
                                                    <td >{{ $donation->trans_id }}</td>

                                                    <td >{{ $donation->status }}</td>

                                                    <td class="text-center">
                                                        <a href="{{ $donation->receipt_url }}" target="blank"
                                                            class="btn btn-primary"> <i class="bi bi-envelope-open"></i></a>


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
