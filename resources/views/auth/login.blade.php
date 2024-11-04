<x-guest-layout>
    <x-slot:title>
        Login
    </x-slot>
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />
    <section class="d-flex align-items-center justify-content-center" style="min-height: 65vh;">
        <!-- Jumbotron -->

          <div class="container">
            <div class="row gx-lg-5 align-items-center justify-content-center">
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card border-1 my-3 ">
                  <div class="card-body py-4 py-lg-5 px-md-5">
                    <div class="text-center">
                      <h1 class=" display-3 fw-bold ls-tight d-inline d-lg-none" style="font-size: calc(1.8rem + 0.3vw)">
                        Login
                      
                      </h1>
                    </div>
                   
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                            @if ($errors->get('email'))
                                <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                            @if ($errors->get('password'))
                                <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                    
                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                            <label class="form-check-label" for="remember_me">
                                {{ __('Remember me') }}
                            </label>
                        </div>
                    
                        <!-- Forgot Password and Submit Button -->
                        <div>
                            <div class="d-flex justify-content-end mb-3">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        
                            <button type="submit" class="btn btn-danger d-block w-100 mb-2">
                                {{ __('Log in') }}
                            </button>
                            
                            <div class="text-center mt-4">
                                <p class="mt-2" style="color: #393f81;">Have Account? <a href="{{route('register')}}"
                                  style="color: #393f81;">Register</a></p>
                               
                              </div>
                        
                        </div>
                        
                    </form>
                    
                  </div>
                </div>
              </div>
    
              <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-start d-none d-lg-block">
                <h1 class="my-2 display-3 fw-bold ls-tight">
                  JOEY'S <br> RAMEN HOUSE <br />
                  <span class="" style="color: #cd0c18">JAPANESE CUISINE</span>
                </h1>
                <p style="color:  #908486">
                  Japanese and Korean cuisines are to guests' taste at this restaurant. Many guests of Joey’s 
                  Ramen House state that nicely cooked ramen, takoyaki, and california rolls are offered here. 
                  The attentive staff works hard, stays positive, and makes this place great.
                </p>
              </div>
            </div>
          </div>
        
        <!-- Jumbotron -->
    </section>
    
    
</x-guest-layout>
