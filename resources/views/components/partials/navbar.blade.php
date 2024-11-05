<style>
  /*hover nav botton */

/* Custom navigation link styling */
.nav-link-custom {
  position: relative;
  color: white;
  text-decoration: none;
  transition: color 0.2s ease-in-out;
  padding-top: 3px;
  padding-bottom: 3px;
}

/* Hide the lines initially */
.nav-link-custom::before, .nav-link-custom::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  background-color: black;
  left: 50%;
  transition: width 0.3s ease-in-out;
}

/* Top line */
.nav-link-custom::before {
  top: 0;
  transform: translateX(-50%);
}

/* Bottom line */
.nav-link-custom::after {
  bottom: 0;
  transform: translateX(-50%);
}

/* Hover effect: expand the lines */
.nav-link-custom:hover::before, .nav-link-custom:hover::after {
  width: 100%;
}

/* Active link: lines stay */
.nav-link-custom.active::before, .nav-link-custom.active::after {
  width: 100%;
}

/* Make sure the nav items are responsive */
@media (max-width: 768px) {
  .navbar-nav {
    flex-direction: column;
    gap: 1rem;
  }
}   

</style>
<!--1st Navbar -->
<header class="sticky-top">
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #04030F;">
    <div class="container-fluid">
        <!-- Left-aligned logo or brand -->
        <div>
          @auth
          <i class="fa-regular fa-bell text-white fs-sm-1 fs-4"></i>
          <i class="fa-solid fa-cart-shopping text-white fs-sm-1 fs-4 mx-3"></i>
          @endauth  
        </div>
        
       

        <!-- Right-aligned form and profile/login links -->
        <div class="d-flex justify-content-start align-items-center">
          @if (Route::has('login'))
              <nav class="d-flex align-items-center">
                  @auth
                  <!-- Profile with modal trigger -->
                  <a href="#" class="text-white text-decoration-none fs-5 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#profileModal">
                      <span class="mx-3">{{ Auth::user()->name }}</span>
                      <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                  </a>
                  @else
                  <a href="{{ route('login') }}" class="text-white text-decoration-none me-3" style="font-size: calc(1rem + 0.3vw);">Log in</a>
                  <!-- Vertical line divider -->
                  <span class="text-white me-3">|</span>
                  <a href="{{ route('register') }}" class="text-white text-decoration-none" style="font-size: calc(1rem + 0.3vw);">Register</a>
                  @endauth
              </nav>
          @endif
      </div>
      
    </div>
</nav>


<nav class="navbar navbar-expand-lg sticky-top " style="background-color: #FCFCFC; border-bottom: black 1px solid;">
  <div class="container-fluid">
      <!-- Logo aligned to the left -->
      <a class="navbar-brand d-none d-lg-flex" href="#">
          <img src="{{ asset('img/logo/logo2.png') }}" alt="" height="50px">
      </a>

      <!-- Navigation items -->
      <div class="d-flex justify-content-center justify-content-lg-end align-items-center flex-wrap gap-3 w-100">
          <a href="{{ route('home') }}" 
             class="text-decoration-none text-dark nav-link-custom mx-lg-2 mx-1 fw-bold {{ Request::routeIs('home') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Home
          </a>
          <a href="{{ route('menu.ramen') }}" 
             class="text-decoration-none text-dark nav-link-custom mx-lg-2 mx-1 fw-bold {{ Request::routeIs('menu.ramen') || Request::routeIs('menu.susshi') || Request::routeIs('menu.sasshimi') || Request::routeIs('menu.desserts') || Request::routeIs('menu.drinks') || Request::routeIs('menu.pagadian.ramen') || Request::routeIs('menu.pagadian.susshi') || Request::routeIs('menu.pagadian.sasshimi') || Request::routeIs('menu.pagadian.desserts') || Request::routeIs('menu.pagadian.drinks') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Order
          </a>
          <a href="{{ route('reservation') }}" 
             class="text-decoration-none text-dark nav-link-custom fw-bold mx-1 mx-lg-2 {{ Request::routeIs('reservation') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Reservation
          </a>
          <a href="{{ route('location') }}" 
             class="text-decoration-none text-dark nav-link-custom fw-bold mx-1 mx-lg-2 {{ Request::routeIs('location') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Location
          </a>
      </div>
  </div>
</nav>




</header>







  
  
  <!-- Modal Structure -->
  @auth
  <!-- Profile Modal Structure -->
  <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center border-danger p-3 bg-black">
        <div class="modal-body py-4" id="modalBodyContent">
          <!-- Profile Picture -->
          <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
  
          <!-- Profile Name -->
          <div class="d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-pen text-white me-2" id="editProfileBtn" style="cursor: pointer;"></i>
            <h4 class="text-white">{{ Auth::user()->name }}</h4>
          </div>
  
          <!-- Phone Number -->
          <p class="text-white">{{ Auth::user()->phone_number }}</p>
  
          <!-- White Section with Three Inline Buttons -->
          <div class="bg-light p-3 mb-4 rounded-2 d-flex justify-content-center align-items-center">
            <a href="#" class="mx-2 text-decoration-none text-black text-center" onclick="showFoodOrderContent()">
              <i class="fas fa-utensils" style="font-size: 1.5rem;"></i><br>
              Food Orders
            </a>
            <a href="#" class="mx-2 text-decoration-none text-black text-center" onclick="showReservationContent()">
              <i class="fas fa-calendar-check" style="font-size: 1.5rem;"></i><br>
              Reservation
            </a>
          </div>
  
          <!-- Order History and Reservation Buttons -->
          <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-primary w-100 me-2" href="{{ route('profile.edit') }}">Order History</a>
            <a class="btn btn-secondary w-100" href="#">Reservation History</a>
          </div>
  
          <!-- Log Out Form -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger w-100" type="submit">Log Out</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Edit Profile Modal Content (Initially Hidden) -->
  <div id="editProfileContent" style="display: none;">
    <div class="modal-header">
      <!-- Back Arrow -->
      <i class="fa-solid fa-arrow-left text-white me-3 fs-3" id="backToProfile" style="cursor: pointer; position: absolute; top: 10px; left: 10px;"></i>
      <h5 class="modal-title w-100 text-white" id="editProfileModalLabel">Edit Profile</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body bg-white rounded-1">
      <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
      </form>
  
      <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')
  
        <div class="mb-4">
          <input id="name" name="name" type="text" 
                 class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500 focus:outline-none" 
                 placeholder="{{ __('Name') }}" 
                 value="{{ old('name', Auth::user()->name) }}" 
                 required autofocus autocomplete="name" />
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
  
        <div class="mb-4">
          <input id="email" name="email" type="email" 
                 class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500 focus:outline-none" 
                 placeholder="{{ __('Email') }}" 
                 value="{{ old('email', Auth::user()->email) }}" 
                 required autocomplete="username" />
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
  
          @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! Auth::user()->hasVerifiedEmail())
            <div class="mt-2 text-gray-700 text-sm">
              {{ __('Your email address is unverified.') }}
              <button form="send-verification" 
                      class="underline text-gray-600 hover:text-gray-900">
                {{ __('Click here to re-send the verification email.') }}
              </button>
            </div>
            @if (session('status') === 'verification-link-sent')
              <p class="mt-2 text-green-600 text-sm">
                {{ __('A new verification link has been sent to your email address.') }}
              </p>
            @endif
          @endif
        </div>
  
        <div class="flex justify-between items-center">
          <button type="submit" 
                  class="bg-blue-600 text-white rounded-md px-4 py-2 hover:bg-blue-700 transition duration-200 ease-in-out">
            {{ __('Save') }}
          </button>
  
          @if (session('status') === 'profile-updated')
            <p class="text-green-600 text-sm">
              {{ __('Saved.') }}
            </p>
          @endif
        </div>
      </form>
    </div>
  </div>
  
  <!-- Food Orders Content (Initially Hidden) -->
  <div id="foodOrderContent" style="display: none;">
    <div class="modal-header">
      <!-- Back Arrow -->
      <i class="fa-solid fa-arrow-left text-white me-3 fs-3" id="backToMainFood" style="cursor: pointer; position: absolute; top: 10px; left: 10px;"></i>
      <h5 class="modal-title w-100 text-white">Food Orders</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body bg-white rounded-1">
      <img src="{{asset('img\ModalPics\lady.png')}}" class="card-img-top img-fluid" alt="..." style="width: 160px;">
  
      <h3 class="mt-4">NO Food Orders Yet</h3>
      <p class="text-black mt-2">Hungry? Place an order and it’ll show here.</p>
     
    </div>
  </div>
  
  <!-- Reservation Content (Initially Hidden) -->
  <div id="reservationContent" style="display: none;">
    <div class="modal-header">
      <!-- Back Arrow -->
      <i class="fa-solid fa-arrow-left text-white me-3 fs-3" id="backToMainReservation" style="cursor: pointer; position: absolute; top: 10px; left: 10px;"></i>
      <h5 class="modal-title w-100 text-white">Reservation</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body bg-white rounded-1">
      <img src="{{asset('img\ModalPics\lady.png')}}" class="card-img-top img-fluid" alt="..." style="width: 160px;">
  
      <h3 class="mt-4">NO Set Reservation  Yet</h3>
      <p class="text-black mt-2">Hungry? Place an order and it’ll show here.</p>
     
    </div>
  </div>
  
  <script>
    // Store the original profile content
    var originalContent = document.getElementById('modalBodyContent').innerHTML;
  
    // Function to switch to food order view
    function showFoodOrderContent() {
      var modalBody = document.getElementById('modalBodyContent');
      modalBody.innerHTML = document.getElementById('foodOrderContent').innerHTML;
  
      // Add event listener for the back arrow to return to main modal content
      document.getElementById('backToMainFood').onclick = function () {
        modalBody.innerHTML = originalContent; // Go back to original content
        reinitializeEventListeners(); // Reinitialize buttons to ensure they work again
      };
    }
  
    // Function to switch to reservation view
    function showReservationContent() {
      var modalBody = document.getElementById('modalBodyContent');
      modalBody.innerHTML = document.getElementById('reservationContent').innerHTML;
  
      // Add event listener for the back arrow to return to main modal content
      document.getElementById('backToMainReservation').onclick = function () {
        modalBody.innerHTML = originalContent; // Go back to original content
        reinitializeEventListeners(); // Reinitialize buttons to ensure they work again
      };
    }
  
    // Function to switch to edit profile view
    function showEditProfile() {
      var profileContent = document.getElementById('modalBodyContent');
      profileContent.innerHTML = document.getElementById('editProfileContent').innerHTML;
  
      // Add event listener for the back arrow
      document.getElementById('backToProfile').onclick = function () {
        profileContent.innerHTML = originalContent; // Go back to original content
        reinitializeEventListeners(); // Reinitialize buttons to ensure they work again
      };
    }
  
    // Reinitialize event listeners when going back to the main content
    function reinitializeEventListeners() {
      document.getElementById('editProfileBtn').addEventListener('click', showEditProfile);
    }
  
    // Initialize event listeners
    document.getElementById('editProfileBtn').addEventListener('click', showEditProfile);
  </script>
  
  
  
  @endauth
  
  
  
  <!--2nd Navbar -->
  

