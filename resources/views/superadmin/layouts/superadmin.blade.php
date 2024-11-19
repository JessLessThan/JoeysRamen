<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        
        <link rel="shortcut icon" href="{{asset('img\Reservation\icons\icon.png')}}" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('superadmin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
    </head>
    <body  class="sb-nav-fixed">
        
        @include('superadmin.layouts.partials.navbar');

            <div id="layoutSidenav">

                <div id="layoutSidenav_nav">
                    @include('superadmin.layouts.partials.sidebar');
                </div>


                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-3">
                            @yield('content')
                        </div>
                    </main>
                    
                    @include('superadmin.layouts.partials.footer');
                    
                </div>
            </div>


        @stack('js')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('superadmin/js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('superadmin/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
