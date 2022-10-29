<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('needs.index') }}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
            </a>
        </li>


        @can('admin_view')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('users.index') }}">
                    <i class="bi bi-people"></i><span>Users</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('needhelps.index') }}">
                    <i class="bi bi-layers"></i><span>Users' Needs</span>
                </a>

            </li>
        @endcan
        <!-- End F.A.Q Page Nav -->


    </ul>

</aside>
