<x-user-view-layout>
    <div class="container bg-white mt-5 p-4 rounded-1">
        <div class="row text-center">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
                
                <!-- Location select dropdown -->
                <div class="col-lg-3 position-relative mt-4">
                    <form action="" method="GET">
                        <select id="locationSelect" class="form-control text-dark select-black" onchange="location = this.value;">
                            <option value="{{ url('reservation/ozamiz') }}" {{ request()->is('reservation/ozamiz', '/') ? 'selected' : '' }}>Ozamiz</option>
                            <option value="{{ url('reservation/pagadian') }}" {{ request()->is('reservation/pagadian') ? 'selected' : '' }}>Pagadian</option>
                        </select>
                        <!-- Chevron icon inside the select input -->
                        <i class="fa-solid fa-chevron-down position-absolute top-50 translate-middle-y" style="right: 20px;"></i>
                    </form>
                </div>                
            </div>
    
            <!-- Table section with padding -->
            <div class="col-lg-12 mt-4">
                <div class="text-center p-3 border border-dark rounded ">
                    
                    @yield('reservationBranches')
                    
                   
                </div>
            </div>
        </div>
    </div>

</x-user-view-layout>