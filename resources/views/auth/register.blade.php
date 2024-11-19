<x-guest-layout>

    <x-slot:title>
        Register
    </x-slot>

    <section class=""  style="min-height: 90vh;">
        <!-- Jumbotron -->
        
          <div class="container py-4 py-lg-5">
            <div class="row gx-lg-5 align-items-center">
              <div class="col-lg-6 mb-5 mb-lg-0 d-none d-lg-block">
                <h1 class="my-2  display-3 fw-bold ls-tight">
                  JOEY'S <br> RAMEN HOUSE <br />
                  <span class="" style="color: #cd0c18">JAPANESE CUISINE</span>
                </h1>
                <p style="color:  #908486">
                  Japanese and Korean cuisines are to guests' taste at this restaurant. Many guests of Joey’s 
                  Ramen House state that nicely cooked ramen, takoyaki and california rolls are offered here. 
                  The attentive staff works hard, stays positive and makes this place great.
                </p>
              </div>
      
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card border-1 my-3"  >
                  <div class="card-body py-5 px-md-5">
                    <div class="text-center">
                      <h1 class=" display-3 fw-bold ls-tight d-inline d-lg-none" style="font-size: calc(1.8rem + 0.3vw)">
                        Register
                      
                      </h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      @csrf
                  
                      <!-- Name -->
                      <div class="mb-3">
                          <label for="name" class="form-label">{{ __('Name') }}</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                          @if ($errors->get('name'))
                              <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                          @endif
                      </div>
                  
                      <!-- Phone Number -->
                      <div class="mb-3">
                          <label for="phone" class="form-label">{{ __('Phone Number') }}</label>
                          <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                          @if ($errors->get('phone'))
                              <div class="text-danger mt-2">{{ $errors->first('phone') }}</div>
                          @endif
                      </div>
                  
                      <!-- Email Address -->
                      <div class="mb-3">
                          <label for="email" class="form-label">{{ __('Email') }}</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                          @if ($errors->get('email'))
                              <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                          @endif
                      </div>
                  
                      <!-- Profile Picture -->
                      <div class="mb-3">
                        <label for="profile_picture" class="form-label">{{ __('Profile Picture') }}</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*" onchange="previewImage(event)">
                        
                        @if ($errors->get('profile_picture'))
                            <div class="text-danger mt-2">{{ $errors->first('profile_picture') }}</div>
                        @endif
                        
                        <!-- Preview div for the uploaded image -->
                        <div id="image_preview" class="mt-3" style="display: none;">
                            <img id="preview" src="#" alt="Profile Image Preview" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    </div>
                  
                      <!-- Location -->
                      <div class="mb-3 position-relative">
                        <label for="location" class="form-label">{{ __('Branch Nearby') }}</label>
                        <select class="form-control" id="location" name="location" required>
                            <option value="" disabled selected>Select a location</option>
                            <option value="ozamiz" {{ old('location') == 'ozamiz' ? 'selected' : '' }}>Ozamiz</option>
                            <option value="pagadian" {{ old('location') == 'pagadian' ? 'selected' : '' }}>Pagadian</option>
                        </select>
                        <i class="fas fa-chevron-down position-absolute" style="right: 10px; top: 73%; transform: translateY(-50%); pointer-events: none;"></i>
                        @if ($errors->get('location'))
                            <div class="text-danger mt-2">{{ $errors->first('location') }}</div>
                        @endif
                    </div>
                    
                    
                  
                      <!-- Password -->
                      <div class="mb-3">
                          <label for="password" class="form-label">{{ __('Password') }}</label>
                          <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                          @if ($errors->get('password'))
                              <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                          @endif
                      </div>
                  
                      <!-- Confirm Password -->
                      <div class="mb-3">
                          <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                          @if ($errors->get('password_confirmation'))
                              <div class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</div>
                          @endif
                      </div>
                  
                      <!-- Register Button -->
                      <div class="d-flex flex-column align-items-center">
                          <button type="submit" class="btn btn-danger d-block w-100 mb-2">
                              {{ __('Register') }}
                          </button>
                  
                          <!-- Already Registered Link (below the button) -->
                          <a class="text-muted mt-2" href="{{ route('login') }}">
                              {{ __('Have Account?') }}
                          </a>
                      </div>
                  </form>
                  
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- Jumbotron -->
      </section>
      <!-- Section: Design Block -->
        



      

      <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview');
            const imagePreviewDiv = document.getElementById('image_preview');
        
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    imagePreviewDiv.style.display = 'block'; // Show the preview div
                }
        
                reader.readAsDataURL(file);
            } else {
                // Hide the preview if no file is selected
                imagePreviewDiv.style.display = 'none';
            }
        }
        </script>
    
</x-guest-layout>
