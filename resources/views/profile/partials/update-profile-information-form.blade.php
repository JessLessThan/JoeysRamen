@extends('profile.edit')

@section('edit')
<header>
    <h2 class="h3 fw-bold text-dark" style="border-bottom: 1px solid #919090;">
        {{ __('Profile Information') }}
    </h2>

    <p class="mt-2 text-muted">
        {{ __("Update your account's profile information and email address.") }}
    </p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-4">
    @csrf
    @method('patch')

    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input
            id="name"
            name="name"
            type="text"
            class="form-control"
            value="{{ old('name', $user->name) }}"
            required
            autofocus
            autocomplete="name"
        />
        @if ($errors->get('name'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input
            id="email"
            name="email"
            type="email"
            class="form-control"
            value="{{ old('email', $user->email) }}"
            required
            autocomplete="username"
        />
        @if ($errors->get('email'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('email') }}
            </div>
        @endif

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-2">
                <p class="text-muted mb-2">
                    {{ __('Your email address is unverified.') }}
                    <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="font-medium text-success">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
    </div>


    <div class="mb-3">
        <label for="phone" class="form-label">{{ __('phone') }}</label>
        <input
            id="phone"
            name="phone"
            type="text"
            class="form-control"
            value="{{ old('phone', $user->phone) }}"
            required
            autofocus
            autocomplete="phone"
        />
        @if ($errors->get('phone'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('phone') }}
            </div>
        @endif
    </div>



    <div class="mb-3 position-relative">
        <label for="location" class="form-label">{{ __('Location') }}</label>
        <select
            id="location"
            name="location"
            class="form-control pr-5"  
            required
            autofocus
            autocomplete="location"
        >
            <option value="ozamiz" {{ old('location', $user->location) == 'ozamiz' ? 'selected' : '' }}>Ozamiz</option>
            <option value="pagadian" {{ old('location', $user->location) == 'pagadian' ? 'selected' : '' }}>Pagadian</option>
        </select>
        @if ($errors->get('location'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('location') }}
            </div>
        @endif
        <span 
            class="position-absolute  mx-2" 
            style="right: 10px; top: 62%; transform: translateY(-50%); border: solid #000000; border-width: 0 2px 2px 0; padding: 4px; transform: rotate(45deg); pointer-events: none;">
        </span> <!-- Arrow placed absolutely with inline styles -->
    </div>

    

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

        @if (session('status') === 'profile-updated')
            <p class="text-muted mb-0" style="font-size: 0.875rem;">
                {{ __('Saved.') }}
            </p>
        @endif
    </div>
</form>

@endsection


   