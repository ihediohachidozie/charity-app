<form class="row g-3" method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data">
    @csrf
    <div cclass="row g-3"lass="row mb-3">

        <div class="col-md-8 col-lg-9">
            @if ($user->profile == null)
            <img src="{{asset('assets/img/no-image.png')}}" alt="Profile" width="120" height="120">
            @else
            <img src="{{asset('storage/'.$user->profile->image)}}" alt="Profile">
            @endif


        <div class="pt-2">
            <div class="col-sm-8">

                <input class="form-control" type="file" name="image">
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        <input name="name" placeholder="FullName" type="text" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $user->name }}" autocomplete="no">
    </div>
    <div class="col-md-6">

        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') ?? $user->email}}" readonly>
    </div>
    <div class="col-md-6">

        <input name="company" placeholder="Company" type="text" class="form-control @error('company') is-invalid @enderror"
            value="{{ old('company') ?? $user->profile->company ?? ''}}" autocomplete="no">
    </div>
    <div class="col-md-6">

        <input name="job" placeholder="Job" type="text" class="form-control @error('job') is-invalid @enderror"
            value="{{ old('job') ?? $user->profile->job ?? ''}}" autocomplete="no">
    </div>
    <div class="col-md-4">

        <input name="country" placeholder="Country" type="text" class="form-control @error('country') is-invalid @enderror"
            value="{{ old('country') ?? $user->profile->country ?? ''}}" autocomplete="no">
    </div>
    <div class="col-md-4">

        <input name="address" placeholder="Address" type="text" class="form-control @error('address') is-invalid @enderror"
            value="{{ old('address') ?? $user->profile->address ?? ''}}" autocomplete="no">
    </div>
    <div class="col-md-4">

        <input name="phone" placeholder="Phone" type="text" class="form-control @error('phone') is-invalid @enderror"
            value="{{ old('phone') ?? $user->profile->phone ?? ''}}" autocomplete="no">
    </div>

    <div class="col-md-6">

        <input name="twitter" placeholder="Twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" value="{{ old('twitter') ?? $user->profile->twitter ?? '' }}" autocomplete="no">
    </div>

    <div class="col-md-6">

        <input name="facebook" placeholder="Facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook') ?? $user->profile->facebook ?? ''}}" autocomplete="no">
    </div>

    <div class="col-md-6">

        <input name="instagram" placeholder="Instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') ?? $user->profile->instagram ?? '' }}" autocomplete="no">
    </div>

    <div class="col-md-6">

        <input name="linkedin" type="text" placeholder="LinkedIn" class="form-control @error('linkedin') is-invalid @enderror" value="{{ old('linkedin') ?? $user->profile->instagram ?? '' }}" autocomplete="no">
    </div>


    <div class="col-mb-12">

        <div class="col-md-12 col-lg-12">
            <textarea name="about" class="form-control" placeholder="About Me" style="height: 100px" autocomplete="no">{{ old('about') ?? $user->profile->about ?? '' }}</textarea>
        </div>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
</form>
