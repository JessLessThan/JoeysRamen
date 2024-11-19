@extends('admin.layouts.adminbootstrap')
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="col-md-4 bg-dark border border-danger p-4 rounded">
        <!-- Title -->
        <h2 class="font-weight-bold text-white text-center py-4">
            Super-admin - Login
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('super-admin.login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label text-white">Remember me</label>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger">
                    Log in
                </button>
            </div>
        </form>
    </div>
</div>
