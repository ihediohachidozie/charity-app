<!DOCTYPE html>
<html lang="en">

@include('layouts.inc.head')

<body>


    <main>

        @yield('content')

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.inc.script')
</body>

</html>
