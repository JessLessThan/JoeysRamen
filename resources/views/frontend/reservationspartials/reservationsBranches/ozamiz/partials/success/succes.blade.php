@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')
<div class="container bg-white rounded-2 mt-4">
    <div class="d-flex align-items-center justify-content-center flex-column"></div>
    <div class="text-center bg-black rounded py-5">
        <h2 class="mt-4 text-light">Thank You <strong>{{Auth::user()->name}}</strong> For Your Reservation!</h2>
        <h5 class=" text-light">{{$reservation->location}} Branch</h5>
        <h5 class="text-light">ご注文ありがとうございます</h5>
    </div>

    <div class="p-5">
        <div class="row ">
            <div class="col-6 border-end border-black">
                <div class="border rounded-1  d-flex justify-content-between align-items-center px-3 py-2 flex-row border-black">
                    <h5 class="">reservation id</h5>

                    <h5>{{$reservation->id ?? 'N/a'}}</h5>
                    
                </div>

                <div class="border rounded-1 mt-4 d-flex justify-content-between align-items-center px-3 py-2 flex-row border-black">
                    <h5 class="">Table</h5>

                    <h5>{{$reservation->table_number ?? 'N/a'}}</h5>

                </div>

                <div class="border rounded-1 mt-4 d-flex justify-content-between align-items-center px-3 py-2 flex-row border-black">
                    <h5 class="">date</h5>

                    <h5>{{$reservation->reservation_date ?? 'N/a'}}</h5>
                </div>

                <div class="border rounded-1 mt-4 d-flex justify-content-between align-items-center px-3 py-2 flex-row border-black">
                    <h5 class="">time</h5>

                    <h5>{{$reservation->reservation_time ?? 'N/a'}}</h5>
                </div>

                <div class="border rounded-1 mt-4 d-flex justify-content-between align-items-center px-3 py-2 flex-row border-black">
                    <h5 class="">Numbers.Of People</h5>

                    <h5>{{$reservation->number_of_persons ?? 'N/a'}}</h5>
                </div>
            </div>

            <div class="col-6">
                <div class=" border rounded-top-2 border-black">
                    <h3 class="fw-bold text-start bg-dark text-light px-3 rounded-top-1 py-2">Pre Order</h3>
                    <div class="m-3">
                        <table class="table ">
                            <thead>
                              <tr>
                                <th scope="col">Quantity</th>
                                <th scope="col">Pre-Orders</th>
                                <th scope="col">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{ ($reservation->pre_order_quantity == 0 || $reservation->pre_order_quantity === null) ? 'N/A' : $reservation->pre_order_quantity }}x</td>
                                <td>{{ $reservation->pre_order_ordername ?? 'N/A' }}</td>
                                <td>{{ ($reservation->pre_order_total == 0 || $reservation->pre_order_total === null) ? 'N/A' : $reservation->pre_order_total }}</td>

                              </tr>
                            </tbody>
                          </table>
                          <div class="d-flex flex-row justify-content-between  mt-3">
                            <h5 class="fw-bold">Total:</h5>
                            <h5 class="fw-bold">18.00</h5>
                          </div>
                    </div>
                    
                      
                </div>
            </div>
        </div>
    </div>
   <div class="text-end">
    <a class="btn btn-danger " href="{{route('reservation')}}"><i class="fa-solid fa-arrow-left mx-2"></i>back Reservation  </a>
   </div>
    

</div>

@endsection