<nav class="sb-topnav navbar navbar-expand navbar-dark"  style="background-color: black;">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{url('admin/ozamiz/dashboard')}}"> <img src="{{asset('img/logo/logo2.png')}}" class="img-fluid  w-100" alt="" style="margin-bottom: -47px; margin-left: -12px;"></a>
    <!-- Sidebar Toggle-->
    
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="col-lg-12 position-relative">
            <form action="" method="GET">
                <div class="position-relative">
                    <select id="locationSelect" class="form-control pe-5 me-2 text-dark select-black" onchange="location = this.value;">
                        <option value="" disabled>Select Location</option>
                        <option value="{{ url('admin/ozamiz/dashboard') }}" {{ request()->is('admin/ozamiz/dashboard') ? 'selected' : '' }}>Ozamiz</option>
                        <option value="{{ url('admin/pagadian/dashboard') }}" {{ request()->is('admin/pagadian/dashboard', 'admin/pagadian/orders', 'admin/pagadian/tablereservation', 'admin/pagadian/feedback', 'admin/pagadian/notification') ? 'selected' : '' }}>Pagadian</option>
                    </select>
                    
                    <!-- Icon positioned inside the select -->
                    <i class="fa-solid fa-chevron-down position-absolute top-50 translate-middle-y" style="right: 15px; pointer-events: none;"></i>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf

                        <a class="dropdown-item" href="{{route('admin.logout')}}"
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