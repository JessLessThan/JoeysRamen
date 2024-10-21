<x-guest-layout>
    <div class="container d-flex align-items-center justify-content-center vh-50 mt-5">
        <div class="col-md-4 bg-black border border-danger p-4 rounded">
            {{-- Title --}}
            <h2 class="font-semibold text-xl text-white leading-tight text-center py-4">
                {{ __('Register') }}
            </h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')" class="text-white" />
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="btn btn-primary">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
