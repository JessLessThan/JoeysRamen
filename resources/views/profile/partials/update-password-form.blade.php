@extends('profile.edit')

@section('edit')
<header>
    <h2 class="h3 fw-bold text-dark" style="border-bottom: 1px solid #919090;">
        {{ __('Change Password') }}
    </h2>

    <p class="mt-2 text-muted">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>
</header>

<form method="post" action="{{ route('password.update') }}" class="mt-4">
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
        <input
            id="update_password_current_password"
            name="current_password"
            type="password"
            class="form-control"
            autocomplete="current-password"
        />
        @if ($errors->updatePassword->has('current_password'))
            <div class="invalid-feedback d-block">
                {{ $errors->updatePassword->first('current_password') }}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
        <input
            id="update_password_password"
            name="password"
            type="password"
            class="form-control"
            autocomplete="new-password"
        />
        @if ($errors->updatePassword->has('password'))
            <div class="invalid-feedback d-block">
                {{ $errors->updatePassword->first('password') }}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
        <input
            id="update_password_password_confirmation"
            name="password_confirmation"
            type="password"
            class="form-control"
            autocomplete="new-password"
        />
        @if ($errors->updatePassword->has('password_confirmation'))
            <div class="invalid-feedback d-block">
                {{ $errors->updatePassword->first('password_confirmation') }}
            </div>
        @endif
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

        @if (session('status') === 'password-updated')
            <p class="text-muted mb-0" style="font-size: 0.875rem;">
                {{ __('Saved.') }}
            </p>
        @endif
    </div>
</form>

@endsection

   