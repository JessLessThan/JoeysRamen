@extends('admin.layouts.admin')

@section('sidebar')
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
            
            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('admin/pagadian/dashboard') ? 'active' : '' }}" href="{{ url('admin/pagadian/dashboard') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white fa-gauge-simple"></i></div>
                Dashboard 
            </a>

            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('admin/pagadian/orders') ? 'active' : '' }}" href="{{ url('admin/pagadian/orders') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white fa-first-order fa-brands"></i></div>
                Orders 
            </a>


            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('admin/pagadian/tablereservation') ? 'active' : '' }}" href="{{ url('admin/pagadian/orders') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white  fa-table-list"></i></div>
                table Reservation
            </a>


            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('admin/pagadian/feedback') ? 'active' : '' }}" href="{{ url('admin/pagadian/feedback') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white fa-comment"></i></div>
                Feedback
            </a>

            <hr class="text-white">

            <a class="nav-link mt-lg-3 fs-5 text-start text-white  {{ request()->is('admin/pagadian/notification') ? 'active' : '' }}" href="{{ url('admin/pagadian/notification') }}">
                <div class="sb-nav-link-icon fs-5"><i class="fa-solid text-white fa-bell"></i></div>
                Notification
            </a>

        
           
           

        </div>
    </div>
   
</nav>
@endsection

