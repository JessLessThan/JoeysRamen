

<x-user-view-layout>
    <x-slot:title>
        Menu
    </x-slot> 
    <div class="text-center container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #04030F">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-5 mt-4">
                            <!-- Image 1 with overlay letter "M" -->
                            <div class="position-relative">
                                <img src="img/joeysPhotos/menu/menuWordPics/mImage1.png" class="img-fluid" alt="Menu Image 1">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-6 fw-bold text-white">M</span>
                                </div>
                            </div>
                        
                            <!-- Image 2 with overlay letter "E" -->
                            <div class="position-relative">
                                <img src="img/joeysPhotos/menu/menuWordPics/mImage2.png" class="img-fluid" alt="Menu Image 2">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-6 fw-bold  text-white" >E</span>
                                </div>
                            </div>
                        
                            <!-- Image 3 with overlay letter "N" -->
                            <div class="position-relative">
                                <img src="img/joeysPhotos/menu/menuWordPics/mImage3.png" class="img-fluid" alt="Menu Image 3">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-6 fw-bold  text-white" >N</span>
                                </div>
                            </div>
                        
                            <!-- Image 4 with overlay letter "U" -->
                            <div class="position-relative">
                                <img src="img/joeysPhotos/menu/menuWordPics/mImage4.png" class="img-fluid" alt="Menu Image 4">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.514);">
                                    <span class="display-5 fw-bold  text-white" >U</span>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                    <div class="col-lg-12">
                        <div class="container my-4">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="input-group mt-2">
                                        <!-- Search input -->
                                        <input type="text" class="form-control p-2" placeholder="Search" aria-label="Search" aria-describedby="search-button" style="font-size: 1.25rem;">
                                        <!-- Search button with icon -->
                                        <button class="btn btn-danger p-3 px-5" type="button" id="search-button">
                                            <i class="fas fa-search" style="font-size: 1.25rem;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- Include FontAwesome for search icon -->
                        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
                        
                        <br>
                        
                    </div>
                </div>
                1st
            </div>
            <div class="col-lg-12">
                
                <x-menu.menuMenus/>
                
            </div>
        </div>
    </div>
</x-user-view-layout>