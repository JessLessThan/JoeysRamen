<style>
  .content p {
    color: black;
    text-decoration: none;
  }
</style>

<div class="content" style="background-color: #04030F"> <!-- content container -->
  <div class="row"> <!-- content -->
    <div class="col-lg-2"> <!-- search and menu -->
      <div class="row">
        <div class="col-lg-12 mt-3 position-relative">
          <select id="locationSelect" class="form-control pe-5 me-2 text-dark select-black">
            <option value="" disabled selected>Select Location</option>
            <option value="ozamiz">Ozamiz</option>
            <option value="pagadian">Pagadian</option> <!-- If I click this the menu content will change to pagadian content -->
          </select>
          <i class="fa-solid fa-chevron-down position-absolute img-fluid top-50 translate-middle-y mx-2" style="right: 20px;"></i>
        </div>

        <p class="text-white mt-2" style="font-size: 14px;">* Menu selections are different among respective branches</p>

        <div class="col-lg-12">
          <ul class="list-group list-group-flush rounded mt-2 pb-2">
            <h5 class="bg-danger text-white py-2">Food Category</h5>
            <li class="list-group-item">
              <a href="" class="text-decoration-none">
                <div class="position-relative d-flex justify-content-center align-items-center">
                  <img class="position-absolute img-fluid top-50 translate-middle-y" width="40px" src="img/MenuMenus/icons/best seller.png" alt="" style="left: 0;">
                  <p class="ms-5">Ramen</p>
                </div>
              </a>
            </li>
            <li class="list-group-item">
              <a href="">
                <div class="position-relative">
                  <img class="position-absolute img-fluid top-50 translate-middle-y " width="40px" src="img\MenuMenus\icons\image 41sassahimireal.png" alt="" style="left: 0;">
                  <p class="ms-5">Sushi</p>
                </div>
              </a>                      
            </li>
            <li class="list-group-item">
              <a href="">
                <div class="position-relative">
                  <img class="position-absolute img-fluid top-50 translate-middle-y " width="40px" src="img\MenuMenus\icons\sassshimi.png" alt="" style="left: 0;">
                  <p class="ms-5">Sasshimi</p>
                </div>
              </a>
                                    
            </li>
            
            <li class="list-group-item">
              <a href="">
                <div class="position-relative">
                  <img class="position-absolute img-fluid top-50 translate-middle-y " width="40px" src="img\MenuMenus\icons\image 45dessert.png" alt="" style="left: 0;">
                  <p class="ms-5">Desserts</p>
                </div>
              </a>                
            </li>
            <li class="list-group-item">
              <a href="">
                <div class="position-relative">
                  <img class="position-absolute img-fluid top-50 translate-middle-y " width="40px" src="img\MenuMenus\icons\image 46drinks.png" alt="" style="left: 0;">
                  <p class="ms-5">Drinks</p>
                </div>
              </a>                    
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- search and menu -->

   
    <!-- Menus for Ozamiz and Pagadian -->
    <div class="col-lg-10"> <!-- content area -->
      <div class="row" style="margin: 0;"> <!-- Removed padding -->
        <!-- Ozamiz Menu -->
        <div id="ozamizMenu" class="col-lg-12 menu rounded-2">
          <div class="menu-header mt-3 rounded-1">
            <h5 class="text-white bg-danger rounded-1 py-3 px-3 fs-3 text-start"><strong>Best Seller Ramen - Ozamiz Branch</strong></h5>
          </div>
          <div class="row rounded-1" style="background-color:white;">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gx-4 pt-2">
              <!-- Ozamiz Menu Items -->
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-1.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </div>
    
        <!-- Pagadian Menu (Initially Hidden) -->
        <div id="pagadianMenu" class="col-lg-12 menu rounded-2 " style="display: none;">
          <div class="menu-header mt-3 rounded-1">
            <h5 class="text-white bg-danger rounded-1 py-3 px-3 fs-3 text-start"><strong>Best Seller Ramen - Pagadian Branch</strong></h5>
          </div>
          <div class="row rounded-4 mb-5" style="background-color:white;">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gx-4 pt-2">
              <!-- Pagadian Menu Items -->
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title text-start">Tandem Ramen</h5>
                      <p class="fs-4"><strong>₱299</strong></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <div class="d-flex align-items-center">
                        <h5 class="mx-1">Quantity: </h5>
                        <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                        <span id="quantity" class="mx-2">0</span> <!-- Initial quantity is 1 -->
                        <button class="btn btn-outline-secondary px-3" onclick="increaseQuantity()">+</button>
                      </div>
                      <button class="btn btn-success button-menu  text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <h5 class="card-title">Pagadian Special Ramen</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="fs-4"><strong>₱350</strong></p>
                      <button class="btn btn-success button-menu px-5 text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <h5 class="card-title">Pagadian Special Ramen</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="fs-4"><strong>₱350</strong></p>
                      <button class="btn btn-success button-menu px-5 text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <h5 class="card-title">Pagadian Special Ramen</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="fs-4"><strong>₱350</strong></p>
                      <button class="btn btn-success button-menu px-5 text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <h5 class="card-title">Pagadian Special Ramen</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="fs-4"><strong>₱350</strong></p>
                      <button class="btn btn-success button-menu px-5 text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <h5 class="card-title">Pagadian Special Ramen</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="fs-4"><strong>₱350</strong></p>
                      <button class="btn btn-success button-menu px-5 text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center mt-3">
                  <img src="img/joeysPhotos/imageGallery/ig-2.png" class="card-img-top img-fluid" alt="..." style="object-fit: cover; max-height:230px; height: auto;">
                  <div class="card-body">
                    <h5 class="card-title">Pagadian Special Ramen</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <p class="fs-4"><strong>₱350</strong></p>
                      <button class="btn btn-success button-menu px-5 text-white w-md-auto"><strong>Add To Chart</strong></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- content area -->
    
  </div><!-- content -->
</div> <!-- content container -->

<script>
  // JavaScript to toggle between Ozamiz and Pagadian menus
  const locationSelect = document.getElementById('locationSelect');
  const ozamizMenu = document.getElementById('ozamizMenu');
  const pagadianMenu = document.getElementById('pagadianMenu');

  locationSelect.addEventListener('change', function() {
    if (this.value === 'ozamiz') {
      ozamizMenu.style.display = 'block';
      pagadianMenu.style.display = 'none';
    } else if (this.value === 'pagadian') {
      ozamizMenu.style.display = 'none';
      pagadianMenu.style.display = 'block';
    }
  });

//order quantity
  let quantity = 0;

function increaseQuantity() {
  quantity++;
  document.getElementById("quantity").textContent = quantity;
}

function decreaseQuantity() {
  if (quantity > 0) {
    quantity--;
    document.getElementById("quantity").textContent = quantity;
  }
}
</script>
