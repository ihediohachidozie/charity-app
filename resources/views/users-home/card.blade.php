<!-- Revenue Card -->
<div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">

        <div class="card-body">
            <h5 class="card-title">Total Request Value </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                    <h6>@money($requested_value[0] ?? 0)</h6>
                    <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                </div>
            </div>
        </div>

    </div>
</div><!-- End Revenue Card -->
<!-- Donations Card -->
<div class="col-xxl-4 col-md-6">
    <div class="card info-card revenue-card">

        <div class="card-body">
            <h5 class="card-title">Donations </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-basket"></i>
                </div>
                <div class="ps-3">
                    <h6>{{ count($donations) }}</h6>
                    <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                </div>
            </div>
        </div>

    </div>
</div><!-- End Revenue Card -->
<!-- Total Requests Card -->
<div class="col-xxl-4 col-xl-12">

    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Total Requests </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-layers"></i>
                </div>
                <div class="ps-3">
                    <h6>{{ count($needs) }}</h6>
                    <span class="text-danger small pt-1 fw-bold"></span>
                    <a href="{{ route('needs.index') }}">
                        <span class="text-muted small pt-2 ps-1">view</span>
                    </a>

                </div>
            </div>

        </div>
    </div>

</div><!-- End Total Request Card -->

