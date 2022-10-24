<!DOCTYPE html>
<html lang="en">

@include('layouts.inc.head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.inc.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.inc.aside')
    <!-- End Sidebar-->

    <main id="main" class="main">

         @yield('content')
       {{--  {{ $slot }} --}}

    </main><!-- End #main -->

    @include('layouts.inc.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @livewireScripts
    @include('layouts.inc.script')
</body>

</html>
