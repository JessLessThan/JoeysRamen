<x-userView-layout>
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
</x-userView-layout>