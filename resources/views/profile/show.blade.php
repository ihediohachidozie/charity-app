@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    @include('profile.overview')
                </div>

                <div class="card">
                    <!-- Change Password Form -->
                    <div class="card-body pt-3">
                        @include('profile.changepassword')
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">


                        <!-- Profile Edit Form -->
                        @include('profile.profileinformation')
                        <!-- End Profile Edit Form -->




                    </div>

                </div><!-- End Bordered Tabs -->



            </div>
        </div>

        </div>
        </div>
    </section>
@endsection
