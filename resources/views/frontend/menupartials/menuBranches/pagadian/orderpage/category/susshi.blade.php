@extends('frontend.menupartials.menuBranches.ozamizmenu')
@section('title', 'Order-pagadian')
@section('ramenCategory')
<h5 class="text-white bg-danger rounded-1 py-3 px-3 fs-1 text-center"><strong>Pagadian Branch</strong></h5>
<div class="row pb-4 rounded-1" style="background-color:white;">
<h5 class="text-white bg-success py-3 px-3 fs-1 text-center mt-3"><strong>Susshi</strong></h5>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gx-4 pt-2">
            <!-- Ozamiz Menu Items -->
            <div class="col-3">
                <div class="card text-center mt-3">
                    <img src="{{asset('img/joeysPhotos/imageGallery/ig-1.png')}}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height:auto;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title text-start text-dark">Tandem Ramen</h5>
                            <p class="fs-4 text-dark"><strong>₱299</strong></p>
                        </div>
                        
                        <button class="btn btn-success text-white w-100"><strong>Add To Cart</strong></button>
                    </div>                    
                </div>
            </div> 

            <div class="col-3">
                <div class="card text-center mt-3">
                    <img src="{{asset('img/joeysPhotos/imageGallery/ig-1.png')}}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height:auto;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title text-start text-dark">Tandem Ramen</h5>
                            <p class="fs-4 text-dark"><strong>₱299</strong></p>
                        </div>
                        
                        <button class="btn btn-success text-white w-100"><strong>Add To Cart</strong></button>
                    </div>                    
                </div>
            </div> 

            <div class="col-3">
                <div class="card text-center mt-3">
                    <img src="{{asset('img/joeysPhotos/imageGallery/ig-1.png')}}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height:auto;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title text-start text-dark">Tandem Ramen</h5>
                            <p class="fs-4 text-dark"><strong>₱299</strong></p>
                        </div>
                        
                        <button class="btn btn-success text-white w-100"><strong>Add To Cart</strong></button>
                    </div>                    
                </div>
            </div> 


            <div class="col-3">
                <div class="card text-center mt-3">
                    <img src="{{asset('img/joeysPhotos/imageGallery/ig-1.png')}}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height:auto;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title text-start text-dark">Tandem Ramen</h5>
                            <p class="fs-4 text-dark"><strong>₱299</strong></p>
                        </div>
                        
                        <button class="btn btn-success text-white w-100"><strong>Add To Cart</strong></button>
                    </div>                    
                </div>
            </div> 
    </div>
</div>
@endsection