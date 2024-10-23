<div class="row">
  <div class="col-lg-12 mt-3 position-relative">
      <form action="" method="GET">
          <select id="locationSelect" class="form-control pe-5 me-2 text-dark select-black" onchange="location = this.value;">
              <option value="" disabled>Select Location</option>
              <option value="{{ url('menu/ozamiz') }}" {{ request()->is('menu/ozamiz') ? 'selected' : '' }}>Ozamiz</option>
              <option value="{{ url('menu/pagadian') }}" {{ request()->is('menu/pagadian') ? 'selected' : '' }}>Pagadian</option>
          </select>
      </form>
      <i class="fa-solid fa-chevron-down position-absolute img-fluid top-50 translate-middle-y mx-2" style="right: 20px;"></i>
  </div>

  <p class="text-white mt-2" style="font-size: 14px;">* Menu selections are different among respective branches</p>

  <div class="col-lg-12">
      <ul class="list-group list-group-flush rounded mt-2 pb-2">
          <h5 class="bg-danger text-white py-2">Food Category</h5>
          <li class="list-group-item">
              <a href="" class="text-decoration-none text-dark">
                  <div class="d-flex align-items-center">
                      <i class="fa-solid fa-bowl-rice" style="font-size: 24px;"></i>
                      <p class="ms-2 mb-0 text-dark">Ramen</p>
                  </div>
              </a>
          </li>
          <li class="list-group-item">
              <a href="" class="text-decoration-none text-dark">
                  <div class="d-flex align-items-center">
                      <i class="fa-solid fa-fish" style="font-size: 24px;"></i>
                      <p class="ms-2 mb-0 text-dark">Sushi</p>
                  </div>
              </a>                      
          </li>
          <li class="list-group-item">
              <a href="" class="text-decoration-none text-dark">
                  <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bacon" style="font-size: 24px;"></i>
                      <p class="ms-2 mb-0 text-dark">Sasshimi</p>
                  </div>
              </a>
          </li>
          <li class="list-group-item">
              <a href="" class="text-decoration-none text-dark">
                  <div class="d-flex align-items-center">
                      <i class="fa-solid fa-ice-cream" style="font-size: 24px;"></i>
                      <p class="ms-2 mb-0 text-dark">Desserts</p>
                  </div>
              </a>                
          </li>
          <li class="list-group-item">
              <a href="" class="text-decoration-none text-dark">
                  <div class="d-flex align-items-center">
                      <i class="fa-solid fa-martini-glass" style="font-size: 24px;"></i>
                      <p class="ms-2 mb-0 text-dark">Drinks</p>
                  </div>
              </a>                    
          </li>
      </ul>
  </div>
</div>
