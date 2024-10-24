

<x-user-view-layout>
    <x-slot:title>
        @yield('title')
    </x-slot> 
    <div class="text-center container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #04030F">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-5 mt-4">
                            <!-- Image 1 with overlay letter "M" -->
                            <div class="position-relative">
                                <img src="{{asset('img/joeysPhotos/menu/menuWordPics/mImage1.png')}}" class="img-fluid" alt="Menu Image 1">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-6 fw-bold text-white">M</span>
                                </div>
                            </div>
                        
                            <!-- Image 2 with overlay letter "E" -->
                            <div class="position-relative">
                                <img src="{{asset('img/joeysPhotos/menu/menuWordPics/mImage2.png')}}" class="img-fluid" alt="Menu Image 2">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-6 fw-bold  text-white" >E</span>
                                </div>
                            </div>
                        
                            <!-- Image 3 with overlay letter "N" -->
                            <div class="position-relative">
                                <img src="{{asset('img/joeysPhotos/menu/menuWordPics/mImage3.png')}}" class="img-fluid" alt="Menu Image 3">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-6 fw-bold  text-white" >N</span>
                                </div>
                            </div>
                        
                            <!-- Image 4 with overlay letter "U" -->
                            <div class="position-relative">
                                <img src="{{asset('img/joeysPhotos/menu/menuWordPics/mImage4.png')}}" class="img-fluid" alt="Menu Image 4">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-5 fw-bold  text-white" >U</span>
                                </div>
                            </div>
                            {{--<div class="position-relative">
                                <img src="{{asset('img\MenuMenus\MenuPhoto\image9.png')}}" class="img-fluid" alt="Menu Image 4">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="row">
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
                    <p class="text-white mt-2 fs-5" style="font-size: 14px;">* Select Pagadian Or Ozamiz Menus</p>
  
                    @yield('menusidebar')
                
                  </div>  
            </div>
            <div class="col-lg-10">
                @yield('content') <!-- Change 'menus' to 'content' -->
            </div>
        </div>
    </div>
</x-user-view-layout>
