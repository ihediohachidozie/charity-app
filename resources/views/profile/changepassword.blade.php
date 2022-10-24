<form method="POST" action="{{ route('profile.pw') }}">
    @csrf
    <div class="row mb-3">

        <div class="col-md-12">
            <input name="currentpassword" type="password" class="form-control" placeholder="Current Password">
        </div>
        @error('currentpassword')
            <span class="error text-sm text-danger">{{ 'The current password field is required.' }}</span>
        @enderror
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <input name="password" type="password" class="form-control" placeholder="New Password">
        </div>
        @error('password')
            <span class="error text-sm text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="row mb-3">

        <div class="col-md-12">
            <input name="password_confirmation" type="password" class="form-control" placeholder="Repeat New Password">
        </div>

    </div>
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Change Password</button>
    </div>
</form><!-- End Change Password Form -->
