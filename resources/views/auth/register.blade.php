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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                            @if ($errors->get('name'))
                                <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
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
        





    
</x-guest-layout>
