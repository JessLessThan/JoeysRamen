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

#profileModal .modal-dialog {
    max-width: 60%; /* Default custom width */
    margin: auto; /* Centers the modal horizontally */
    display: flex; /* Ensures proper vertical alignment */
    align-items: center; /* Centers the modal vertically */
    justify-content: center; /* Centers the modal horizontally (fallback) */
    min-height: 100vh; /* Ensures the modal takes up at least full viewport height */
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
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <!-- Left-aligned logo or brand -->
      <div>
          @auth
          <div style="position: relative; display: inline-block;">
              <!-- Notification Icon -->
              <i class="fa-solid fa-bell text-white fs-sm-1 fs-4 mx-3" style="cursor: pointer;"></i>
              <!-- Badge -->
              <span style="
                  position: absolute; 
                  top: -8px; 
                  right: 9px; 
                  background-color: red; 
                  color: white; 
                  width: 19px; 
                  height: 19px; 
                  display: inline-flex; 
                  align-items: center; 
                  justify-content: center; 
                  border-radius: 50%; 
                  font-weight: bold;
                  font-size: 0.8rem;">
                  9
              </span>
          </div>
  
          <!-- Cart Icon with Badge -->
          <div style="position: relative; display: inline-block;">
              <i id="cartIcon" class="fa-solid fa-cart-shopping text-white fs-sm-1 fs-4 mx-3" style="cursor: pointer;"></i>
              @if(!empty(session('cart')))
              <span style="
                  position: absolute; 
                  top: -8px; 
                  right: 9px; 
                  background-color: red; 
                  color: white; 
                  width: 19px; 
                  height: 19px; 
                  display: inline-flex; 
                  align-items: center; 
                  justify-content: center; 
                  border-radius: 50%; 
                  font-weight: bold;
                  font-size: 0.8rem;">
                  {{ count((array) session('cart')) }}
              </span>
              @endif
  
              <!-- Dropdown List -->
              <div class="text-center" id="dropdownList" style="
                  display: none; 
                  position: absolute; 
                  top: 39px; 
                  left: 0; 
                  background-color: white; 
                  border: 1px solid #ccc; 
                  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
                  width: 460px; 
                  z-index: 9999; 
                  padding: 10px;">
                  <div>
                      <h5 class="text-black fw-bold border-bottom border-black">My Orders</h5>
                  </div>
                  <!-- Order Table -->
                  <table class="px-3" style="width: 100%; margin-top: 10px; font-size: 0.9rem;">
                      <tbody>
                          @php $total = 0; @endphp
                          @if (session('cart') && count(session('cart')) > 0)
                              @foreach ((array) session('cart') as $id => $details)
                                  <tr>
                                      <td class="fw-bold" style="padding: 5px; text-align: center;">{{ $details['quantity'] }}x</td>
                                      <td class="fw-bold" style="padding: 5px; text-align: center;">
                                          <img src="{{ $details['image'] ?? '' }}" alt="product image" style="width: 50px; height: auto;">
                                      </td>
                                      <td style="padding: 5px;" class="fs-5 text-start fw-bold">{{ $details['product_name'] }}</td>
                                      <td class="fw-bold" style="padding: 5px; text-align: right;">₱{{ number_format($details['price'], 2) }}</td>
                                  </tr>
                                  @php $total += $details['price'] * $details['quantity']; @endphp
                              @endforeach
                          @else
                              <tr>
                                  <td colspan="4" class="text-center fw-bold" style="padding: 20px;">No orders yet.</td>
                              </tr>
                          @endif
                      </tbody>
                  </table>
                  @if (session('cart') && count(session('cart')) > 0)
                      <div class="d-flex flex-row justify-content-between mt-4 align-items-center">
                          <p class="text-black fw-bold" style="font-size: 15px;">Total: ₱{{ number_format($total, 2) }}</p>
                          <a href="{{ route('carts') }}" class="btn btn-success px-3 rounded-3">View My Cart</a>
                      </div>
                  @endif
              </div>
          </div>
          @endauth
      </div>
  
      <!-- Right-aligned links for profile/login/register -->
      <div class="d-flex align-items-center">
          @if (Route::has('login'))
          <nav>
              @auth
              <a href="#" class="text-white text-decoration-none fs-5 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#profileModal">
                  <span class="mx-3">{{ Auth::user()->name }}</span>
                  <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
              </a>
              @else
              <a href="{{ route('login') }}" class="text-white text-decoration-none me-2" style="font-size: calc(1rem + 0.3vw);">Log in</a>
              <span class="text-white me-2">|</span>
              <a href="{{ route('register') }}" class="text-white text-decoration-none" style="font-size: calc(1rem + 0.3vw);">Register</a>
              @endauth
          </nav>
          @endif
      </div>
  </div>
  
  </nav>




<nav class="navbar navbar-expand-lg " style="background-color: #FCFCFC; border-bottom: black 1px solid;">
  <div class="container-fluid">
      <!-- Logo aligned to the left -->
      <a class="navbar-brand d-none d-lg-flex" href="{{url('/home')}}">
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
             class="text-decoration-none text-dark nav-link-custom mx-lg-2 mx-1 fw-bold {{ Request::routeIs('menu.ramen') || Request::routeIs('menu.susshi') || Request::routeIs('menu.sasshimi') || Request::routeIs('menu.desserts') || Request::routeIs('menu.drinks') || Request::routeIs('menu.pagadian.ramen') || Request::routeIs('menu.pagadian.susshi') || Request::routeIs('menu.pagadian.sasshimi') || Request::routeIs('menu.pagadian.desserts') || Request::routeIs('menu.pagadian.drinks') || Request::routeIs('menu.ramen.product') || Request::routeIs('menu.ramen.product') || Request::routeIs('menu.pagadian.ramen.product') || Request::routeIs('carts')  || Request::routeIs('checkout') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Order
          </a>
          <a href="{{ route('reservation') }}" 
             class="text-decoration-none text-dark nav-link-custom fw-bold mx-1 mx-lg-2 {{ Request::routeIs('reservation') || Request::routeIs('pagadianreservation') || Request::routeIs('tablereservation') || Request::routeIs('reservationsummary') || Request::routeIs('reservationshistory') || Request::routeIs('reservations.show') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Reservation
          </a>
          <a href="{{ route('location') }}" 
             class="text-decoration-none text-dark nav-link-custom fw-bold mx-1 mx-lg-2 {{ Request::routeIs('location') ? 'active' : '' }}" 
             style="font-size: calc(1rem + 0.3vw);">
              Location
          </a>
          <a  href="{{ route('feedback') }}" 
          class="d-none d-lg-inline text-decoration-none text-dark nav-link-custom fw-bold mx-1 mx-lg-2 {{ Request::routeIs('feedback') || Request::routeIs('thankyou') ? 'active' : '' }}" 
          style="font-size: calc(1rem + 0.3vw);">
           Feedback
       </a>
      </div>
  </div> 
</nav>




</header>







  
  
  <!-- Modal Structure -->
  @auth
  <!-- Profile Modal Structure -->
  <div class="modal fade" id="profileModal"  tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center border-danger p-3 bg-black" style="width: 900px;">
        <div class="modal-body py-4" id="modalBodyContent">
          <!-- Profile Picture -->
          <img src="{{ asset('storage/' . Auth::user()->profile_picture) }} " alt="Profile" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
  
          <!-- Profile Name -->
          <div class="d-flex justify-content-center align-items-center">
            <a href="{{ route('profile.editprofile') }}"><i class="fa-solid fa-pen text-white me-2" id="editProfileBtn" style="cursor: pointer;"></i></a> 
            <h4 class="text-white">{{ Auth::user()->name }}</h4>
          </div>
  
          <!-- Phone Number -->
          <p class="text-white">{{ Auth::user()->phone}}</p>
  
          <!-- White Section with Three Inline Buttons -->
          <div class="bg-light p-3 mb-4 rounded-2 d-flex justify-content-center align-items-center">
            <a href="#" class="mx-2 text-decoration-none text-black text-center">
              <i class="fas fa-utensils" style="font-size: 1.5rem;"></i><br>
              Food Orders
            </a>
            <a href="{{route('reservationshistory')}}" class="mx-2 text-decoration-none text-black text-center">
              <i class="fas fa-calendar-check" style="font-size: 1.5rem;"></i><br>
              Reservation
            </a>
          </div>
  
          <!-- Order History and Reservation Buttons -->
          <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-primary w-100 me-2" href="">Order History</a>
            <a class="btn btn-secondary w-100" href="">Reservation History</a>
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

        <div>
          chatgpt i want to create table here just the quantity and product photo, order method, order price just display here the customr user equal to authentecated user
        </div>

        <div>
          <img src="{{asset('img\ModalPics\lady.png')}}" class="card-img-top img-fluid" alt="..." style="width: 160px;">
    
        <h3 class="mt-4">NO Food Orders Yet</h3>
        <p class="text-black mt-2">Hungry? Place an order and it’ll show here.</p>
        </div>
        
      
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
    <div class="modal-body bg-white rounded-1" >
        {{--<img src="{{ asset('img/ModalPics/lady.png') }}" class="card-img-top img-fluid" alt="..." style="width: 160px;">
    
        <h3 class="mt-4">Your Reservations</h3>
        <p class="text-black mt-2">Here are your current reservations:</p>--}}
  
        <!-- Table for reservation data -->
        <div class="table-responsive">
            <h4 class="text-start">Your Orders <strong class="fs-3">{{Auth::user()->name}}</strong> </h4>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>TableNO.</th>
                        <th>Numberof.Persons</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Placeholder row indicating no data -->
                    <tr>
                        <td>5</td>
                        <td>3</td>
                        <td>11/18/2024</td>
                        <td>08:00 - 09:30 Am</td>
                        <td><a href="" class="btn btn-success">Show Details</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>3</td>
                      <td>11/18/2024</td>
                      <td>08:00 - 09:30 Am</td>
                      <td><a href="" class="btn btn-success">Show Details</a></td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

  
  <script>
    // Store the original profile content
    var originalContent = document.getElementById('modalBodyContent').innerHTML;
  
    // Function to switch to food order view
   
  
   
  
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
   
  
    // Initialize event listeners
    

    document.getElementById("cartIcon").addEventListener("click", function() {
    const dropdown = document.getElementById("dropdownList");
    dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
  });

  document.addEventListener("click", function(event) {
    const cartIcon = document.getElementById("cartIcon");
    const dropdown = document.getElementById("dropdownList");
    if (!cartIcon.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.style.display = "none";
    }
  });
  </script>
  
  
  
  @endauth
  
  
  
  <!--2nd Navbar -->
  

