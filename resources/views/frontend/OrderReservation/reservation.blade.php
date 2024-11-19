@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')
<div class="d-flex flex-row align-items-center justify-content-between mb-4 border-bottom border-black">
    <h4 class="">Your Reservations <strong class="fs-3">{{ Auth::user()->name }}</strong></h4>
    <h4 class="">
        Total Reservations: <strong class="fs-3">{{ $reservations->count() }}</strong>
    </h4>
</div>




@if($reservations->isEmpty())
    <h3 class="text-black">No reservations found.</h3>
@else
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr class="bg-dark table-dark">
                <th style="padding: 8px;">Table Number</th>
                <th style="padding: 8px;">Date yyyy/mm/d</th>
                <th style="padding: 8px;">Time</th>
                <th style="padding: 8px;">status</th>
                <th style="padding: 8px;">Action</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td style="padding: 8px;">{{ $reservation->table_number }}</td>
                    <td style="padding: 8px;">{{ $reservation->reservation_date }}</td>
                    <td style="padding: 8px;">{{ $reservation->reservation_time }}</td>
                    <td style="padding: 8px;">{{ $reservation->status }}</td>
                    <td style="padding: 8px;">
                        <a class="btn btn-success" href="{{ route('reservations.show', $reservation->id) }}">Show Details</a>
                    </td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection