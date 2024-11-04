<x-user-view-layout>

    <x-slot:title>
        Home
    </x-slot>  

    <style>
        /* Default height for large screens */
        .overlay-container {
            height: 65vh;
        }
    
        /* Adjusted height for smaller screens */
        @media (max-width: 768px) {
            .overlay-container {
                height: 30vh;
            }
        }

            .uniform-size {
            width: 100%;        /* Full width within the column */
            height: 350px;       /* Auto-adjust height for large screens */
            object-fit: cover;  /* Ensures images maintain proportions */
            }

            /* Media query for small devices */
            @media (max-width: 768px) {
                .uniform-size {
                    height: 150px; /* Sets a fixed height for images on small screens */
                    width: 100%;   /* Ensures all images have the same width */
                }
            }

                .border-lg {
                    border: 1px solid; /* Define your border style here */
                    color: white;
                }

                @media (max-width: 991px) {
                    .border-lg {
                        border: none;
                    }
                }


    </style>

        <div class="container-fluid " style="background-color: black">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="overlay-container" style="position: relative; text-align: center;">
                        <!-- Background image with slight blur -->
                        <img src="img/joeysPhotos/welcome/welcome-bg-pic.png" alt="Background" class="image-fluid" style="filter: blur(2px); width: 100%; height: 100%;">
                
                        <!-- Text overlay -->
                        <div class="overlay-text" style="position: absolute; top: 50%; left: 0; right: 0; transform: translateY(-50%); text-align: center; padding: 60px;">
                            <h1 style="color: white;">WELCOME</h1>
                            <p style="color: rgb(223, 222, 222); font-size: calc(0.4rem + 1vw);">JOEY’S RAMEN HOUSE IS A MODERN JAPANESE CUISINE</p>
                        </div>
                    </div>
                </div>
                
                  
                <div class="col-lg-12 mt-4 mt-lg-5">
                    <div id="carouselExample" class="carousel slide border border-white rounded-2 p-3 p-lg-5" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;"> <!-- Adjusted width for smaller devices -->
                                            <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;"> <!-- Reduced height -->
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6 d-none d-lg-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-flex  d-lg-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-none d-lg-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-flex  d-lg-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-4 d-none d-lg-flex justify-content-center">
                                        <div class="" style="width: 18rem;">
                                            <img src="img/joeysPhotos/imageGallery/ig-3.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: ;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        
                            <span class="visually-hidden">Next</span>
                        </button>
                        
                        <div class="text-center mt-3 mt-lg-5">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <hr class="text-white d-lg-flex d-none">
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn text-white btn-sm btn-success fs-1 px-5" onclick="window.location.href='{{ url('/menu/ozamiz/ramen') }}'">Order Now</button>
                                </div>
                                <div class="col-lg-4">
                                    <hr class="text-white d-lg-flex d-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                

                <div class="col-lg-12 mt-4 mb-5">
                    <div class="row">
                        <!-- VENUE column -->
                        <div class="col-lg-1 d-none d-lg-flex flex-column justify-content-center align-items-center text-center"> 
                            <img src="img/joeysPhotos/locationsPhotos/line/Line.png" alt="">
                            <h2 class="display-1 text-white fw-bold">V</h2>
                            <h2 class="display-1 text-white fw-bold">E</h2>
                            <h2 class="display-1 text-white fw-bold">N</h2>
                            <h2 class="display-1 text-white fw-bold">U</h2>
                            <h2 class="display-1 text-white fw-bold">E</h2>
                            <img src="img/joeysPhotos/locationsPhotos/line/Line.png" alt="">
                        </div>

                        <h1 class="text-white py-3 text-center d-inline d-lg-none">V E N U E</h1>
                
                        <!-- Main content (OZAMIZ CITY and PAGADIAN CITY sections) -->
                        <div class="col-lg-11">
                            <div class="row">
                                <!-- OZAMIZ CITY section -->
                                <div class="col-lg-12">
                                    <div class="row rounded p-lg-3 p-3 mx-1 mx-lg-0" style="background-color: #EDFDFB">
                                        <div class="col-lg-12 d-flex align-items-center">
                                            <img class="px-5 d-none d-lg-flex" src="img/joeysPhotos/locationsPhotos/HomeLocationICon/iicon.png" alt="">
                                            <h2 class="text-white flex-fill text-center p-1 p-lg-4 rounded" style="background-color: #04030F">OZAMIZ CITY</h2>
                                        </div>
                
                                        <div class="col-lg-12 text-center rounded mt-3 p-3  p-lg-3" style="background-color: #04030F;">
                                            <div class="row">
                                                <!-- Images set to same size on smaller screens -->
                                                <div class="col-lg-6 col-6 text-white mb-lg-3 mb-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/OzamizCity/homeLocationImage1.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-6 col-6 text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/OzamizCity/homeLocationImage2.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-6 text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/OzamizCity/homeLocationImage3.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-6 text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/OzamizCity/homeLocationImage4.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-6 d-none d-lg-flex text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/OzamizCity/homeLocationImage5.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button class="btn text-white  btn-success fs-1 px-5 mt-3" style="padding-left: ;"><a class="text-decoration-none text-white"  href="{{url('/menu/ozamiz/ramen')}}" >Reserve Now</a></button>

                                        
                                    </div>
                                </div>  
                
                                <!-- PAGADIAN CITY section -->
                                <div class="col-lg-12">
                                    <div class="row rounded mt-lg-5 mt-5 p-lg-3 p-3 mx-1 mx-lg-0" style="background-color: #EDFDFB">
                                        <div class="col-lg-12 d-flex align-items-center">
                                            <img class="px-5 d-none d-lg-flex" src="img/joeysPhotos/locationsPhotos/HomeLocationICon/iicon.png" alt="">
                                            <h2 class="text-white flex-fill text-center p-1 p-lg-4 rounded" style="background-color: #04030F">PAGADIAN CITY</h2>
                                        </div>
                                
                                        <div class="col-lg-12 text-center rounded mt-3 p-3 p-lg-3" style="background-color: #04030F;">
                                            <div class="row">
                                                <!-- Images set to same size on smaller screens -->
                                                <div class="col-lg-6 col-6 text-white mb-lg-3 mb-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/PagadianCity/homeLocationImage6.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-6 col-6 text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/PagadianCity/homeLocationImage7.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-6 text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/PagadianCity/homeLocationImage8.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-6 text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/PagadianCity/homeLocationImage9.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-6 d-none d-lg-flex text-white mb-lg-3">
                                                    <img src="img/joeysPhotos/locationsPhotos/PagadianCity/homeLocationImage10.png" 
                                                         class="img-fluid rounded-2 uniform-size" 
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button class="btn text-white btn-success fs-1 px-5 mt-3">
                                            <a class="text-decoration-none text-white" href="{{url('/menu/pagadian/ramen')}}">Reserve Now</a>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <h2 class="text-white display-4 mt-5">ACHIEVEMENTS</h2>
                            <div class="d-flex flex-wrap justify-content-center align-items-center p-3">
                                <img src="img/homePhots/Poster.png" class="img-fluid rounded-2 mb-3 mb-md-0" style="width: 230px;" alt="Poster">
                                <div class="border-lg mx-5 position-relative">
                                    <div class="p-3 p-md-5">
                                        <p class="text-white text-start fs-4">- 1st Japanese Cuisine in Ozamiz City</p>
                                        <p style="color: rgb(187, 187, 187);" class="d-none d-lg-flex">
                                            We have set the standard for authentic Japanese cuisine in the region and continue to be a favorite among locals.
                                        </p>
                                        <h3 class="text-white text-start mt-4 fs-4">- Best Sushi</h3>
                                        <p style="color: rgb(187, 187, 187);" class="text-center d-none d-lg-flex">
                                            Recognized as the Best in Sushi by Restaurant Guru in 2022, we take pride in delivering exceptional quality and flavor in every dish.
                                        </p>
                                    </div>
                                    <img src="img/homePhots/lady.png" class="img-fluid d-none d-lg-flex rounded-2 position-absolute" alt="lady image" style="right: -90px; bottom: -80px; width: 199px;">
                                </div>                                
                            </div>
                        </div>                        
                    </div>
                </div>
                
                
            </div>
        </div>
    
   
</x-user-view-layout>