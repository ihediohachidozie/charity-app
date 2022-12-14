<div>
    <div class="pagetitle">
        <h1>Need Help</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Need Help</li>
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#disablebackdrop"><i class="bi bi-plus-lg me-1"></i>
                                    Request</button>
                                <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Requested needs</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($needs) > 0)
                                            @foreach ($needs as $need)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $need->id }}</a></th>
                                                    <td>{{ $helptype[$need->type] }}</td>
                                                    <td><a href="#"
                                                            class="text-primary">{{ $need->description }}</a></td>
                                                    <td>{{ $need->monetary }}</td>
                                                    <td>
                                                        @if ($need->status == 3)
                                                            <span class="badge bg-success"><i
                                                                    class="bi bi-check-circle me-1"></i>
                                                                {{ $status[$need->status] }}</span>
                                                        @elseif ($need->status == 2)
                                                            <span class="badge bg-danger"><i
                                                                    class="bi bi-exclamation-octagon me-1"></i>{{ $status[$need->status] }}</span>
                                                        @else
                                                            <span class="badge bg-warning text-dark"><i
                                                                    class="bi bi-exclamation-triangle me-1"></i>{{ $status[$need->status] }}</span>
                                                        @endif
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
                            @include('livewire.partials.needform')


                        </div><!-- End Disabled Backdrop Modal-->
                    </div>
                </div><!-- End Recent Sales -->


            </div>
        </div><!-- End Left side columns -->


</div>
</section>
</div>
