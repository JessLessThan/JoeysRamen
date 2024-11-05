@extends('superadmin.layouts.superadmin')

@section('title', 'Accounts - Ozamiz')

@section('content')
<h1 class="mb-4">User Accounts</h1>
<div class="card">
    
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Accounts</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Profile Picture</th>
                        <th scope="col">Password</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if ($user->profile_picture)
                                    <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $user->password }}</td> <!-- Note: Displaying passwords directly is insecure and typically not recommended. -->
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->location }}</td> <!-- Displaying the user's location -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <div class="d-flex justify-content-center">
            
        </div>
    </div>
</div
@endsection