@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    @can('admin_view')
                        @include('admin.home.cards')
                        <!-- Bar Chart -->
                        @include('admin.home.donationschart')
                        <!-- End Bar CHart -->

                        <!-- Pie Chart -->
                        @include('admin.home.piechart')
                        <!-- End Pie CHart -->
                    @endcan
                    @can('user_view')
                        @include('card')

                        @include('displayneeds')
                    @endcan

                    <!-- Recent Sales -->


                </div>
            </div><!-- End Left side columns -->


        </div>
    </section>
@endsection
