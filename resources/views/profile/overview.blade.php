<div class="card-body profile-card pt-4 d-flex flex-column align-items-center">


    @if ($user->profile == null)
    <img src="{{asset('assets/img/no-image.png')}}" alt="Profile" class="rounded-circle">
    @else
    <img src="{{asset('storage/'.$user->profile->image)}}" alt="Profile" class="rounded-circle">
    @endif
    <h2>{{ucwords($user->name)}}</h2>
    <h3>{{$user->profile->job ?? ''}}</h3>
    <div class="social-links mt-2">
        <a href="//{{$user->profile->twitter ?? '#'}}" class="twitter" target="blank"><i class="bi bi-twitter"></i></a>
        <a href="//{{$user->profile->facebook ?? '#'}}" class="facebook" target="blank"><i class="bi bi-facebook"></i></a>
        <a href="//{{$user->profile->instagram ?? '#'}}" class="instagram" target="blank"><i class="bi bi-instagram"></i></a>
        <a href="//{{$user->profile->linkedin ?? '#'}}" class="linkedin" target="blank"><i class="bi bi-linkedin"></i></a>
    </div>
</div>
