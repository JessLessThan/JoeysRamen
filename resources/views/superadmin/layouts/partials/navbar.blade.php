<nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color: black;">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{url('super-admin/dashboard')}}"> <img src="{{asset('img/logo/logo2.png')}}" class="img-fluid  w-100" alt="" style="margin-bottom: -47px; margin-left: -12px;"></a>
    <!-- Sidebar Toggle-->
    

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
       
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav  ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user text-white fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    
                    <form method="POST" action="{{ route('super-admin.logout') }}">
                        @csrf
    
                        <a class="dropdown-item" href="{{route('super-admin.logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>