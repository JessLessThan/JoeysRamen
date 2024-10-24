@extends('frontend.menu')

@section('menusidebar'  )

    <div class="col-lg-12">
        <ul class="list-group list-group-flush rounded mt-2 pb-2">
            <h5 class="bg-danger text-white py-2">Food Category</h5>
            <li class="list-group-item">
                <a href="{{route('menu.ramen')}}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-bowl-rice" style="font-size: 24px;"></i>
                        <p class="ms-2 mb-0 text-dark">Ramen</p>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{route('menu.susshi')}}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-fish" style="font-size: 24px;"></i>
                        <p class="ms-2 mb-0 text-dark">Susshi</p>
                    </div>
                </a>                      
            </li>
            <li class="list-group-item">
                <a href="{{route('menu.sasshimi')}}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center">
                      <i class="fa-solid fa-bacon" style="font-size: 24px;"></i>
                        <p class="ms-2 mb-0 text-dark">Sasshimi</p>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{route('menu.desserts')}}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-ice-cream" style="font-size: 24px;"></i>
                        <p class="ms-2 mb-0 text-dark">Desserts</p>
                    </div>
                </a>                
            </li>
            <li class="list-group-item">
                <a href="{{route('menu.drinks')}}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-martini-glass" style="font-size: 24px;"></i>
                        <p class="ms-2 mb-0 text-dark">Drinks</p>
                    </div>
                </a>                    
            </li>
        </ul>
    </div>
  
  
@endsection

