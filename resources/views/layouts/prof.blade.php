<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AutoMate</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.1" rel="stylesheet">
    <!-- CSS -->
    <link type="text/css" href="./assets/css/docs.min.css" rel="stylesheet">
  </head>
  
  <body>
    <header class="header-global">
      <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent bg-default headroom">
        <div class="container">
          <a class="navbar-brand mr-lg-5" href="welcome">
            AutoMate
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  AutoMate
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
    
                </ul>
    
                <!-- Right Side Of Navbar -->
                
                    <!-- Authentication Links -->
        @guest
        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          </ul>
        @else
        <ul class="navbar-nav ml-auto">
            <li></i><a class="nav-link" href = "home">Home</a></li>
       </ul>
        <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            </i>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
          </li>
        </ul>
        
                    @endguest
          </div>

        </div>
      </nav>
  
    </header>
  <main class="profile-page">
      <div class="position-relative">
        <!-- Hero for FREE version -->
        <section class="section section-lg section-lg section-shaped">
          <!-- SVG separator -->
          <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
          </div>

        </section>
      </div>

      @yield('content')
    </main>
    <footer class="footer has-cards">
      <div class="container container-lg">
      <div class="container">
      
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              &copy; 2018
              <a>Team AutoMate</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>

    <!-- Core -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/vendor/headroom/headroom.min.js"></script>
    <!-- Optional JS -->
    <script src="./assets/vendor/onscreen/onscreen.min.js"></script>
    <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
    <script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Argon JS -->
    <script src="./assets/js/argon.js?v=1.0.1"></script>
  </body>
  
  </html>