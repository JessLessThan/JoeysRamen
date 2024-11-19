<x-user-view-layout>
    <x-slot:title>
        Edit Profile
    </x-slot>
<x-slot name="header">
    <h2 class="font-weight-bold display-6 text-primary text-center my-4">
        {{ __('Profile') }}
    </h2>
</x-slot>

<div class="py-5 d-flex justify-content-center align-items-center">
    <div class="container" style="min-height: 500px;"> <!-- Set a minimum height -->
        <!-- Update Profile Information Card -->
        <div class="row">
            <div class="col-lg-2 d-flex flex-column pt-3 text-center" style="background-color: white; height: 600px;">
                <h3 class="fw-bold pb-2">My Account</h3>
                <a href="{{url('profile/update')}}" 
                   class="text-decoration-none text-start text-black mx-2 
                   {{ Request::is('profile/update') ? 'bg-success text-white px-3 py-2 rounded-3' : 'px-3 py-2' }}">Update Profile Info</a>
                <a href="{{url('profile/reset-password')}}" 
                   class="text-decoration-none text-start text-black mx-2 mt-1 
                   {{ Request::is('profile/reset-password') ? 'bg-success text-white px-3 py-2 rounded-3' : 'px-3 py-2' }}">Change Password</a>
                <a href="{{url('profile/delete-account')}}" 
                   class="text-decoration-none text-start text-black mx-2 mt-1 
                   {{ Request::is('profile/delete-account') ? 'bg-success text-white px-3 py-2 rounded-3' : 'px-3 py-2' }}">Delete Account</a>
            </div>
            
    
            <div class="col-lg-10 pt-3 px-5" style="background-color: white; border-left: 1px solid #808080; min-height: 400px;">
                @yield('edit')
            </div>
        </div>
    </div>
    
</div>
</x-user-view-layout>

