@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')
<div class="text-start">
    <a href="{{ url()->previous() }}" class="btn btn-danger "><i class="fa-solid fa-arrow-left mx-2"></i>Back</a>

</div>

<div class="m-3 border text-start  mx-3 border-black rounded-2">
    <h3 class="py-2 px-2 fw-bold  bg-dark text-light">Reservation Details</h3>
    <div class="row">
        <div class="col-5">
            <div class="px-3 mt-2">
                <div class="d-flex justify-content-between">
                    <h4 class="fw-bold">Reservation ID: </h4>
                    <h4>{{ $reservation->id }} </h4>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <h4 class="fw-bold">Table: </h4>
                    <h4>{{ $reservation->table_number }} </h4>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <h4 class="fw-bold">Date: </h4>
                    <h4>{{$reservation->reservation_date}} </h4>
                </div>
                <div class="d-flex mt-2  justify-content-between">
                    <h4 class="fw-bold">Time: </h4>
                    <h4>{{$reservation->reservation_time}} </h4>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <h4 class="fw-bold">Description: </h4>
                    <h4>{{$reservation->description}} </h4>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <h4 class="fw-bold">Location: </h4>
                    <h4>{{$reservation->location}} </h4>
                </div>
                <div class="d-flex mt-2 justify-content-between">
                    <h4 class="fw-bold">status: </h4>
                    <h4>{{$reservation->status}} </h4>
                </div>

                <div>
                    <a class="btn btn-danger mb-3 mt-5" href="">Cancel Reservation</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h4 class="fw-bold">Pre-Order</h4>
            <div class="px-3 mt-2 text-center">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Quantity</th>
                              <th scope="col">Product Name</th>
                              <th scope="col">Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>{{ ($reservation->pre_order_quantity == 0 || $reservation->pre_order_quantity === null) ? 'N/A' : $reservation->pre_order_quantity }}</td>
                                <td>{{ empty($reservation->pre_order_productname) ? 'N/A' : $reservation->pre_order_productname }}</td>
                                <td>{{ ($reservation->pre_order_total == 0 || $reservation->pre_order_total === null) ? 'N/A' : $reservation->pre_order_total }}</td>



                            </tr>
                          </tbody>
                    </table>

                   
                  </div>
                  
            </div>
            
        </div>
        
    </div>
   
</div>
  
   
    


@endsection