<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            

            <!-- Page Heading -->
            <nav class="navbar navbar-expand-lg" style="background-color: #04030F">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        
                      </li>
                      <li class="nav-item">
                        
                      </li>
                      <li class="nav-item dropdown">
                        
                        <ul class="dropdown-menu">
                         
                        </ul>
                      </li>
                      <li class="nav-item">
                        
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="text-white  text-decoration-none fs-5"
                                        >
                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="text-white text-decoration-none fs-5"
                                        >
                                            Log in
                                        </a>
                
                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="text-white  text-decoration-none  mx-3 fs-5"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </header>
                    </form>
                  </div>
                </div>
              </nav>    

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
