<style>
    /* Outer active link style */
    .nav-link.active {
        background-color: rgba(235, 21, 21, 0.877) !important;
    }
    .nav-link:hover{
        background-color: rgba(160, 160, 160, 0.404);
    }
    /* Inner active link style */
    .nav-link.inner-active {
        background-color: rgb(100, 100, 100) !important; /* Change to preferred color */
    }
   
</style>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu" style="background-color: black;">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">
               
            </div>
            
            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('super-admin/dashboard') ? 'active' : '' }}" href="{{ url('super-admin/dashboard') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white fa-gauge-simple"></i></div>
                Dashboard
            </a>

            <a class="nav-link mt-lg-3 collapsed fs-5 text-start text-white " href="" data-bs-toggle="collapse" data-bs-target="#collapseLayoutso" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-solid text-white fs-5 fa-book"></i></div>
                Order History
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-white fs-5"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutso" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white " href="">Ozamiz</a>
                    <a class="nav-link text-white" href="">Pagadian</a>
                </nav>
            </div>

            <a class="nav-link mt-lg-3 collapsed fs-5 text-start text-white" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayoutst" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-solid text-white fs-5 fa-book"></i></div>
                Reserve History
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-white fs-5"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutst" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="">Ozamiz</a>
                    <a class="nav-link text-white" href="">Pagadian</a>
                </nav>
            </div>


            <a class="nav-link collapsed mt-lg-3 fs-5 text-start text-white {{ request()->is('super-admin/products') || request()->is('super-admin/pagadianproducts') ? 'active' : '' }}" 
                href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="{{ request()->is('super-admin/products') || request()->is('super-admin/pagadianproducts') ? 'true' : 'false' }}" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fa-solid text-white fs-5 fa-clock-rotate-left"></i></div>
                 Products
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-white fs-5"></i></div>
             </a>
             <div class="collapse mt-lg-3 {{ request()->is('super-admin/products') || request()->is('super-admin/pagadianproducts') ? 'show' : '' }}" 
                  id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link text-white {{ request()->is('super-admin/products') ? 'inner-active' : '' }}" 
                        href="{{ url('super-admin/products') }}">Ozamiz</a>
                     <a class="nav-link text-white {{ request()->is('super-admin/pagadianproducts') ? 'inner-active' : '' }}" 
                        href="{{ url('super-admin/pagadianproducts') }}">Pagadian</a>
                 </nav>
             </div>
             

            <a class="nav-link collapsed mt-lg-3 fs-5 text-start text-white {{ request()->is('super-admin/ozamiztabledatas') || request()->is('super-admin/pagadiantabledatas') ? 'active' : '' }}" 
                href="#" data-bs-toggle="collapse" data-bs-target="#collapseTableDatas" aria-expanded="{{ request()->is('super-admin/ozamiztabledatas') || request()->is('super-admin/pagadiantabledatas') ? 'true' : 'false' }}" aria-controls="collapseTableDatas">
                <div class="sb-nav-link-icon"><i class="fa-solid text-white fs-5 fa-table"></i></div>
                Table Datas
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-white fs-5"></i></div>
            </a>
            <div class="collapse mt-lg-3 {{ request()->is('super-admin/ozamiztabledatas') || request()->is('super-admin/pagadiantabledatas') ? 'show' : '' }}" 
                 id="collapseTableDatas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white {{ request()->is('super-admin/ozamiztabledatas') ? 'inner-active' : '' }}" 
                       href="{{ url('super-admin/ozamiztabledatas') }}">Ozamiz</a>
                    <a class="nav-link text-white {{ request()->is('super-admin/pagadiantabledatas') ? 'inner-active' : '' }}" 
                       href="{{ url('super-admin/pagadiantabledatas') }}">Pagadian</a>
                </nav>
            </div>
            
            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('super-admin/useraccounts') ? 'active' : '' }}" href="{{ url('super-admin/useraccounts') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white fs-5 fa-users"></i></div>
                User Accounts
            </a>

            <a class="nav-link mt-lg-3 fs-5 text-white  {{ request()->is('super-admin/Feedbacks') ? 'active' : '' }}"  href="{{url('super-admin/Feedbacks')}}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid fa-comment text-white"></i></div>
                Feedback
            </a>

            <a class="nav-link mt-lg-3 collapsed fs-5 text-start text-white" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsr" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-solid text-white fs-5 fa-book"></i></div>
                Reports
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-white fs-5"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutsr" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="">Ozamiz</a>
                    <a class="nav-link text-white" href="">Pagadian</a>
                </nav>
            </div>
            <hr class="text-white">
            <a class="nav-link mt-lg-3 fs-5 text-white" href="{{ url('super-admin/products') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid fa-bell text-white"></i></div>
                Notification
            </a>

        </div>
    </div>
   
</nav>