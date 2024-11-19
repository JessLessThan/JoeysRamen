@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')

            <h2 class="fw-bold">Joeys Ramen <span class="text-danger fw-bold">House</span> - Pagadian</h2>
            
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>


            <div class="d-lg-none my-2">
                
                <div class="row d-flex  align-items-center justify-content-center">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables1->id]) : route('login') }}" class="text-decoration-none">
                                <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                    
                                        <h5 class="text-white">Table {{$pagadianTables1->table}}</h5>
                                    
                                </div>
                            </a>
                            </div>
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables2->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables2->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables10->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables10->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables3->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables3->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables4->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables4->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables5->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables5->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables6->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables6->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('tablereservation', ['id' => $pagadianTables7->id]) }}" class="text-decoration-none">
                                <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                   
                                        <h5 class="text-white">Table {{$pagadianTables7->table}}</h5>
                                   
                                </div>
                            </a>
                            </div>
                            <div class="col-12">
                                <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                    <a href="{{ route('tablereservation', ['id' => $pagadianTables8->id]) }}" class="text-decoration-none">
                                        <h5 class="text-white">Table {{$pagadianTables8->table}}</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables9->id]) : route('login') }}" class="text-decoration-none">
                                    <div class="rounded-2 bg-success  px-3 py-2 my-2">
                                        
                                            <h5 class="text-white">Table {{$pagadianTables9->table}}</h5>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    
                   
                </div>
                <div class="text-center">
                    <h5 class="bg-secondary w-50 mx-auto py-0  mt-4 text-white ">Entrance</h5>
                </div>
               
            </div>

           
            <div class="row d-none d-lg-flex align-items-center justify-content-center">
                <div class="col-4">
                    <div class="row">
                        <div
                        class="col-lg-12 mb-lg-4 border-success rounded-2 col-md-4 col-sm-6 border d-flex justify-content-center align-items-center clickable-card"
                        style="width: 80%; max-width: 300px; margin: auto; cursor: pointer"
                    >
                    <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables1->id]) : route('login') }}" class="text-decoration-none">
                       <div class="row py-2">
                           <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                               <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                   <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                   <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                               </div>
                           </div>
       
                           <div class="col-12">
                               <div class="d-flex align-items-center justify-content-center">
                                   <div class="bg-black my-2 m rounded-2 d-flex align-items-center justify-content-center" style="height: 80px; width: 250px;">
                                       <h3 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables1->table}}</h3>
                                   </div>
                               </div>
                           </div>
       
                           <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                               <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                   <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                   <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                               </div>
                           </div>
                       </div>
       
                    </a>
                    </div>  
                    <div class="col-lg-12 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables2->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row py-2">
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="bg-black my-2 m rounded-2 d-flex align-items-center justify-content-center" style="height: 80px; width: 250px;">
                                            <h3 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables2->table}}</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                    </div>
                                </div>
                            </div>
            
                         </a>
                     </div>

                        <div class="col-12 ">
                            <h5 class="bg-secondary text-white">Wall</h5>
                        </div>

                        <div class="col-12 mb-lg-4 border-success rounded-2 mt-2 py-2 col-md-4 col-sm-6 border d-flex justify-content-center align-items-center"  style="width: 80%; max-width: 300px; margin: auto;">
                            <a href="{{Auth::check() ? route('tablereservation', ['id' => $pagadianTables10->id]) : route('login') }}" class="text-decoration-none">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-4">
                                    <div class="bg-black rounded-2 " style="height: 300px; width: 75px;"></div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-black rounded-2  d-flex align-items-center justify-content-center" style="height: 400px; width: 95px;">
                                        <h3 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables10->table}}</h3>
                                        
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="bg-black rounded-2" style="height: 60px; width: 80px;"></div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12 py-2 d-flex justify-content-center border border-success rounded-2  align-items-center">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables3->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row  text-center">
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables3->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-lg-12 py-2 d-flex mt-3 justify-content-center border border-success rounded-2  align-items-center">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables4->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row  text-center">
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables4->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-lg-12 py-2 d-flex mt-3 justify-content-center border border-success rounded-2  align-items-center">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables5->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row  text-center">
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables5->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-lg-12 py-2 d-flex mt-3 justify-content-center border border-success rounded-2  align-items-center">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables6->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row  text-center">
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                        <h4 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables6->table}}</h4>
                                    </div>
                                </div>
                                <div class="col-4 d-flex gap-4 flex-column align-items-center">
                                    <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                    <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                                </div>
                            </div>
                        </a>
                     </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center " style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables7->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row py-2">
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 197px;"></div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="bg-black my-2 m rounded-2 d-flex align-items-center justify-content-center" style="height: 80px; width: 250px;">
                                            <h3 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables7->table}}</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 197px;"></div>
                                    </div>
                                </div>
                            </div>
            
                         </a>
                     </div>

                     <div class="col-12">
                        <h5 class="bg-secondary  text-white">Wall</h5>
                    </div>

                     <div class="col-lg-12 mb-lg-4 border-success rounded-2 mt-3 col-md-4 col-sm-6 border d-flex justify-content-center align-items-center " style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables8->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row py-2">
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 197px;"></div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="bg-black my-2 m rounded-2 d-flex align-items-center justify-content-center" style="height: 80px; width: 250px;">
                                            <h3 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables8->table}}</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 197px;"></div>
                                    </div>
                                </div>
                            </div>
            
                         </a>
                     </div>

                      <div class="col-12">
                        <h5 class="bg-secondary  text-white">Wall</h5>
                    </div>

                     <div class="col-lg-12 mb-lg-4 border-success rounded-2 mt-3 col-md-4 col-sm-6 border d-flex justify-content-center align-items-center " style="width: 80%; max-width: 300px; margin: auto;">
                        <a href="{{ Auth::check() ? route('tablereservation', ['id' => $pagadianTables9->id]) : route('login')  }}" class="text-decoration-none">
                            <div class="row py-2">
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 197px;"></div>
                                    </div>
                                </div>
            
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="bg-black my-2 m rounded-2 d-flex align-items-center justify-content-center" style="height: 80px; width: 250px;">
                                            <h3 style="color: white; font-size: 14px; margin: 0;">Table {{$pagadianTables9->table}}</h3>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-12 d-flex flex-row align-items-center gap-5 justify-content-center">
                                    <div class="d-flex flex-row align-items-center gap-4 justify-content-center">
                                        <div class="bg-black rounded-2" style="height: 60px; width: 197px;"></div>
                                    </div>
                                </div>
                            </div>
            
                         </a>
                     </div>  
                    
                   

                </div>
                <div class="text-center">
                    <h5 class="bg-secondary w-25 mx-auto  mt-4 text-white ">Entrance</h5>
                </div>
            </div>

@endsection
    