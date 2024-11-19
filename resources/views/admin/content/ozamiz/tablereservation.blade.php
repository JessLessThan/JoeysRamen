@extends('admin.layouts.admin')
@section('title', 'Dashboard')
@section('content')
<h1 class="mt-4">Table reservation - Ozamiz</h1>
<p class="fs-4">Today's Order</p>

<div class="container-fluid">
    @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif  

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Table Number</th>
                <th>Capacity</th>
                <th>Reservation Date</th>
                <th>Reservation Time</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reservations as $reservation)
            <tr>
                <td>{{ $reservation->table_id }}</td>
                <td>{{ $reservation->table_number }}</td>
                <td>{{ $reservation->number_of_persons }}</td>
                <td>{{ $reservation->reservation_date }}</td>
                <td>{{ $reservation->reservation_time }}</td>
                <td>{{ $reservation->description }}</td>
                <td>
                    <!-- Example actions -->
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">No reservations found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


<div class="mt-3">
    {{ $reservations->links() }}
</div>


@endsection