@extends('frontend.menu')

@section('menusidebar')

<style>
    .list-group-item a div {
        padding: 10px;
        width: 100%;
        border-radius: 4px;
    }

    /* Apply gray background on hover */
    .list-group-item a div:hover {
        background-color: rgba(158, 157, 157, 0.322);
    }

    /* Set text and icon to white on hover */
    .list-group-item a div:hover p,
    .list-group-item a div:hover i {
        color: white;
    }

    /* Optional: Reset list item padding to remove extra space */
    .list-group-item {
        padding: 0;
    }
</style>

<div class="d-flex justify-content-between align-items-center d-lg-none py-2" style="background-color: #ECFFFD;">
    <div class="col-lg-12  position-relative">
        <form action="" method="GET">
            <select id="locationSelect" class="form-control pe-5 me-2 text-dark select-black" onchange="location = this.value;">
                <option value="" disabled>Select Location</option>
                <option value="{{ url('menu/ozamiz/ramen') }}" {{ request()->is('menu/ozamiz/ramen') ? 'selected' : '' }} >Ozamiz</option>
                <option value="{{ url('menu/pagadian/ramen') }}" {{ request()->is('menu/pagadian/ramen', 'menu/pagadian/drinks', 'menu/pagadian/desserts', 'menu/pagadian/sasshimi','menu/pagadian/susshi',) ? 'selected' : '' }}>Pagadian</option>
            </select>
        </form>
        <i class="fa-solid fa-chevron-down position-absolute img-fluid top-50 translate-middle-y mx-2" style="right: 20px;"></i>
    </div>

    <div class="d-flex align-items-center mt-2 justify-content-between">
        <a href="{{ route('menu.ramen') }}" class="text-decoration-none text-dark w-100 mb-2">
            <div class="d-flex align-items-center justify-content-center">
                <p class="ms-2 mb-0 text-dark" style="font-size: calc(0.6rem + 1vw); {{ Route::is('menu.ramen') ? 'border-bottom: 2px solid green;' : '' }}">Ramen</p>
            </div>
        </a>
    
        <a href="{{ route('menu.susshi') }}" class="text-decoration-none text-dark w-100 mb-2">
            <div class="d-flex align-items-center justify-content-center">
                <p class="ms-2 mb-0 text-dark" style="font-size: calc(0.6rem + 1vw); {{ Route::is('menu.susshi') ? 'border-bottom: 2px solid green;' : '' }}">Susshi</p>
            </div>
        </a>
    
        <a href="{{ route('menu.sasshimi') }}" class="text-decoration-none text-dark w-100 mb-2">
            <div class="d-flex align-items-center justify-content-center">
                <p class="ms-2 mb-0 text-dark" style="font-size: calc(0.6rem + 1vw); {{ Route::is('menu.sasshimi') ? 'border-bottom: 2px solid green;' : '' }}">Sasshimi</p>
            </div>
        </a>
    
        <a href="{{ route('menu.desserts') }}" class="text-decoration-none text-dark w-100 mb-2">
            <div class="d-flex align-items-center justify-content-center">
                <p class="ms-2 mb-0 text-dark" style="font-size: calc(0.6rem + 1vw); {{ Route::is('menu.desserts') ? 'border-bottom: 2px solid green;' : '' }}">Desserts</p>
            </div>
        </a>
    
        <a href="{{ route('menu.drinks') }}" class="text-decoration-none text-dark w-100 mb-2">
            <div class="d-flex align-items-center justify-content-center">
                <p class="ms-2 mb-0 text-dark" style="font-size: calc(0.6rem + 1vw); {{ Route::is('menu.drinks') ? 'border-bottom: 2px solid green;' : '' }}">Drinks</p>
            </div>
        </a>
    </div>
    
    
</div>

<div class="d-none d-lg-inline">
    <div class="col-lg-12 mt-3 position-relative">
        <form action="" method="GET">
            <select id="locationSelect" class="form-control pe-5 me-2 text-dark select-black" onchange="location = this.value;">
                <option value="" disabled>Select Location</option>
                <option value="{{ url('menu/ozamiz/ramen') }}" {{ request()->is('menu/ozamiz/ramen') ? 'selected' : '' }}>Ozamiz</option>
                <option value="{{ url('menu/pagadian/ramen') }}" {{ request()->is('menu/pagadian/ramen', 'menu/pagadian/drinks', 'menu/pagadian/desserts', 'menu/pagadian/sasshimi','menu/pagadian/susshi',) ? 'selected' : '' }}>Pagadian</option>
            </select>
        </form>
        <i class="fa-solid fa-chevron-down position-absolute img-fluid top-50 translate-middle-y mx-2" style="right: 20px;"></i>
    </div>
    <p class="text-white mt-2 fs-5 d-none d-lg-flex" style="font-size: 14px;">* Select Pagadian Or Ozamiz Menus</p>
    
    <div class="col-lg-12">
        <ul class="list-group list-group-flush rounded mt-2 pb-2">
            <h5 class="bg-danger text-white py-2">Food Category</h5>
            <li class="list-group-item {{ Request::routeIs('menu.ramen') ? 'bg-danger text-white' : '' }}">
                <a href="{{ route('menu.ramen') }}" class="text-decoration-none {{ Request::routeIs('menu.ramen') ? 'text-white' : 'text-dark' }}">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-bowl-rice" style="font-size: 24px; {{ Request::routeIs('menu.ramen') ? 'color: white;' : 'color: black;' }}"></i>
                        <p class="ms-2 mb-0 {{ Request::routeIs('menu.ramen') ? 'text-white' : 'text-dark' }}">Ramen</p>
                    </div>
                </a>
            </li>
            <li class="list-group-item {{ Request::routeIs('menu.susshi') ? 'bg-danger text-white' : '' }}">
                <a href="{{ route('menu.susshi') }}" class="text-decoration-none {{ Request::routeIs('menu.susshi') ? 'text-white' : 'text-dark' }}">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-fish" style="font-size: 24px; {{ Request::routeIs('menu.susshi') ? 'color: white;' : 'color: black;' }}"></i>
                        <p class="ms-2 mb-0 {{ Request::routeIs('menu.susshi') ? 'text-white' : 'text-dark' }}">Susshi</p>
                    </div>
                </a>
            </li>
            <li class="list-group-item {{ Request::routeIs('menu.sasshimi') ? 'bg-danger text-white' : '' }}">
                <a href="{{ route('menu.sasshimi') }}" class="text-decoration-none {{ Request::routeIs('menu.sasshimi') ? 'text-white' : 'text-dark' }}">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-bacon" style="font-size: 24px; {{ Request::routeIs('menu.sasshimi') ? 'color: white;' : 'color: black;' }}"></i>
                        <p class="ms-2 mb-0 {{ Request::routeIs('menu.sasshimi') ? 'text-white' : 'text-dark' }}">Sasshimi</p>
                    </div>
                </a>
            </li>
            <li class="list-group-item {{ Request::routeIs('menu.desserts') ? 'bg-danger text-white' : '' }}">
                <a href="{{ route('menu.desserts') }}" class="text-decoration-none {{ Request::routeIs('menu.desserts') ? 'text-white' : 'text-dark' }}">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-ice-cream" style="font-size: 24px; {{ Request::routeIs('menu.desserts') ? 'color: white;' : 'color: black;' }}"></i>
                        <p class="ms-2 mb-0 {{ Request::routeIs('menu.desserts') ? 'text-white' : 'text-dark' }}">Desserts</p>
                    </div>
                </a>
            </li>
            <li class="list-group-item {{ Request::routeIs('menu.drinks') ? 'bg-danger text-white' : '' }}">
                <a href="{{ route('menu.drinks') }}" class="text-decoration-none {{ Request::routeIs('menu.drinks') ? 'text-white' : 'text-dark' }}">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-martini-glass" style="font-size: 24px; {{ Request::routeIs('menu.drinks') ? 'color: white;' : 'color: black;' }}"></i>
                        <p class="ms-2 mb-0 {{ Request::routeIs('menu.drinks') ? 'text-white' : 'text-dark' }}">Drinks</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    
      
</div>

  
@endsection

