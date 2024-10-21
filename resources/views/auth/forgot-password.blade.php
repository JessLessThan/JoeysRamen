<x-guest-layout>
    <div style="background-color: white" class="container d-flex justify-content-center align-items-center min-vh-75 mt-5 mb-5">
        <div class="col-md-6">
            <div class="card p-4 border rounded">
                <div class="mb-4 text-sm text-gray-600 text-center">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
    
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
    
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
    
                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <div class="text-danger mt-1">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
    
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-danger">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
</x-guest-layout>
