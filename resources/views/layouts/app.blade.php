<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Cineminfo</title>

     <link rel="stylesheet" href="/css/main.css">
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
 
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
 
      <title>{{ config('app.name', 'Laravel') }}</title>
  
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="../assets/img/favicon/logo.ico" />
      <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
      
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
      />
  
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
      <!-- Core CSS -->
      <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="../assets/css/demo.css" />
  
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  
      <!-- Page CSS -->
      <!-- Page -->
      <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
      <!-- Helpers -->
      <script src="../assets/vendor/js/helpers.js"></script>
  
      <script src="../assets/js/config.js"></script>
</head>
<body>
    <div id="app" style="background-color: #333333">
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #333333">
            <div class="container-fluid">
                <a href="{{ route('movies.index') }}">
                    <img src="/assets/img/logo/logo.png" style="width:10vw">
                </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                </ul>
                @guest
                    <a class="nav-link btn btn-outline-primary mx-3"  href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}>
                            <i class="bx bx-power-off me-2"></i>
                            {{-- <span class="align-middle">Log Out</span> --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                        </li>
                        </ul>
                    </li>
                @endguest
              </div>
            </div>
          </nav>

        <main class="py-4" style="background-color: #424242">
            @yield('content')
        </main>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
