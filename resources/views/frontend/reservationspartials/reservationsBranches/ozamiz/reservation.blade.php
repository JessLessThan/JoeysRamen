@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')
            <h2 class="fw-bold fs-1 mt-3">Joeys Ramen <span class="text-danger fw-bold">House</span> - Ozamiz</h2>

            
            
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>

            <div class="d-lg-none ">
                
                <div class="d-flex flex-row justify-content-center gap-3 align-items-center my-5">
                    <div class="d-flex flex-column">
                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables1->id]) : route('login')  }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables1->table}}</h5>
                            </a>
                        </div>
                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables3->id]) : route('login')  }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables3->table}}</h5>
                            </a>
                        </div>

                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables5->id]) : route('login') }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables5->table}}</h5>
                            </a>
                        </div>

                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables7->id]) : route('login')  }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables7->table}}</h5>
                            </a>
                        </div>
                        
                    </div>
                    <div class="d-flex flex-column ">
                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables2->id]) : route('login')  }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables2->table}}</h5>
                            </a>
                        </div>
                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables4->id]) : route('login')  }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables4->table}}</h5>
                            </a>
                        </div>
                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables6->id]) : route('login')  }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables6->table}}</h5>
                            </a>
                        </div>
                        <div class="rounded-2 bg-success px-5 my-2">
                            <a href="{{Auth::check() ? route('tablereservation', ['id' => $ozamizTables8->id]) : route('login') }}" class="text-decoration-none">
                                <h5 class="text-white">Table {{$ozamizTables8->table}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="bg-secondary w-50 mx-auto  mt-4 text-white ">Entrance</h5>
                </div>
               
            </div>
           

           

            <div class="mt-lg-5 d-lg-block d-none">
               <div class="row">
                <div
                class="col-lg-3 col-4 border-success rounded-2 col-md-4 col-sm-6 border d-flex justify-content-center align-items-center clickable-card"
                style="width: 80%; max-width: 300px; margin: auto; cursor: pointer"

            >
                
                <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables1->id]) : route('login')  }}" class="text-decoration-none">
                   <div class="d-flex justify-content-center align-items-center">
                    <div class="row py-2 text-center" style="width: 100%;">
                        <div class="col-4 d-flex flex-column align-items-center">
                            <div class="bg-black" style="height: 80px; width: 80px;"></div>
                            <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center">
                            <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables1->table}}</h4>
                            </div>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center">
                            <div class="bg-black" style="height: 80px; width: 80px;"></div>
                            <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                        </div>
                    </div>
                   </div>
                       
                    </a>

                    </div>
                
                
                <div class="col-lg-4  d-flex justify-content-center  mb-lg-3 align-items-center">
                    <img src="{{ asset('img/Reservation/icons/icon.png') }}" alt="">
                </div>
                    
                   
                    <div class="col-lg-3 mb-lg-4 mt-3 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center " style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $ozamizTables2->id]) : route('login') }}" class="text-decoration-none">
                            <div class="d-flex justify-content-center align-items-center">
                            <div class="row py-2 text-center" style="width: 100%;">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables2->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{  Auth::check() ? route('tablereservation', ['id' => $ozamizTables3->id])  : route('login') }}" class="text-decoration-none">
                            <div class="d-flex justify-content-center align-items-center">
                            <div class="row py-2 text-center" style="width: 100%;">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables3->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                    
                    
                    <div class="col-lg-4  mb-lg-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/Reservation/icons/icon.png') }}" alt="">
                    </div>
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{  Auth::check() ? route('tablereservation', ['id' => $ozamizTables4->id])  : route('login') }}" class="text-decoration-none">
                            <div class="d-flex justify-content-center align-items-center">
                            <div class="row py-2 text-center" style="width: 100%;">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables4->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{  Auth::check() ? route('tablereservation', ['id' => $ozamizTables5->id])  : route('login') }}" class="text-decoration-none">
                            <div class="d-flex justify-content-center align-items-center">
                            <div class="row py-2 text-center" style="width: 100%;">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables5->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4  mb-lg-4  d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/Reservation/icons/icon.png') }}" alt="">
                    </div>

                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{  Auth::check() ? route('tablereservation', ['id' => $ozamizTables6->id])  : route('login') }}" class="text-decoration-none">
                            <div class="d-flex justify-content-center align-items-center">
                            <div class="row py-2 text-center" style="width: 100%;">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables6->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{  Auth::check() ? route('tablereservation', ['id' => $ozamizTables7->id])  : route('login') }}" class="text-decoration-none">
                            <div class="d-flex justify-content-center align-items-center">
                            <div class="row py-2 text-center" style="width: 100%;">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$ozamizTables7->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                   
                    <div class="col-lg-8  border-success rounded-2  col-md-4 col-sm-6 border ">
                        <a href="{{  Auth::check() ? route('tablereservation', ['id' => $ozamizTables8->id])  : route('login') }}" class="text-decoration-none">
                   
                            <div class="row pt-4">
                                <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                    <div class="bg-black" style="height: 85px; width: 100px;"></div>
                                </div>
                                <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                    <div class="bg-black" style="height: 85px; width: 100px;"></div>
                                </div>
                                <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                    <div class="bg-black" style="height: 85px; width: 100px;"></div>
                                </div>
                                <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                    <div class="bg-black" style="height: 85px; width: 100px;"></div>
                                </div>
                                <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                    <div class="bg-black" style="height: 85px; width: 100px;"></div>
                                </div>
                                <div class="col-lg-2 d-flex flex-column  align-items-center mb-0"> <!-- Set margin bottom to 0 for this column -->
                                    <div class="bg-black rounded-top"  style="height: 120px; width: 100px;"></div>
                                </div>
                            
                                <div class="col-lg-12 pb-3 d-flex flex-column align-items-center">
                                    <div class="bg-black text-white d-flex justify-content-center align-items-center rounded-start rounded-bottom" style="height: 90px; max-width: 799px; width: 100%;">
                                        Table  {{$ozamizTables8->table}}
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        
                        
                        
                    </div>
                   
               </div>
               <div class="text-center">
                <h4 class="bg-secondary w-25 mx-auto absolute mt-4 text-white ">Entrance</h4>
            </div>
            
               
            </div>
            
@endsection
    