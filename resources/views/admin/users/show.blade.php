@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>User Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">User Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    @include('profile.overview')
                </div>

            </div>




            <!-- Profile Edit Form -->
            @include('admin.users.preview')
            <!-- End Profile Edit Form -->







        </div>

        </div>
        </div>
    </section>
@endsection
