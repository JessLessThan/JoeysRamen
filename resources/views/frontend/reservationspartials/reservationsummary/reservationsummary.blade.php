@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')

<div class="row">
    <div class="col-5">
        <div class="card">
            <input type="number">
            <input type="number">
            <input type="date">
            <input type="time">
            <input type="number">
        </div>
    </div>
    <div class="col-7">
        <div class="text-center">
            <h3>Pre-Order</h3>
            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">1x</th>
                    <td>Ramen</td>
                    <td>Price</td>
                  </tr>
                </tbody>
              </table>
        </div>
            <div class="d-flex flex-row justify-content-between">
                <h4>Total:</h4>
                <h4>$20</h4>
            </div>
        
    </div>
    <div class="text-end">
        <button class="btn btn-success w-25">Reserve</button>
    </div>
</div>
@endsection