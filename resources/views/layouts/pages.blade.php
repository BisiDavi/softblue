<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

  <script>
    particlesJS.load('particles-js', '{{ asset('js/particlesConfig.json') }}', function() {
      console.log('callback - particles.js config loaded');
    });

  </script>
  <title>Softblue | @yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.mediaquery.css') }}" />
  @yield('cssLink')
</head>

<body class="container-fluid indexpage">
  <div class="row content">
    <div class="mainbanner">
      <div class="container-fluid" id="particles-js"></div>
      <section class="container-fluid hero">
        <div class="hero-content position-relative">
          <header class="container-fluid">
            <nav class="navbar navbar-expand-lg">
              <a href="{{ url('/index') }}" class="navbar-brand">
                <img src="{{ asset('images/softblue_logo.png') }}" class="site-logo" alt="site-logo" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div id="menuNav" class="navbar-nav">
                  <a class="nav-link text-white" href="{{ url('/about') }}">
                    <h4>ABOUT US</h4>
                  </a>
                  <a class="nav-link text-white" href="{{ url('/services') }}">
                    <h4>SERVICES</h4>
                  </a>
                  <a class="nav-link text-white" href="{{ url('/contact') }}">
                    <h4>CONTACT</h4>
                  </a>
                </div>
              </div>
              <span onclick="showMenuLinks()" id="hamburgerMenu" class="hamburger-menu">
                <i class="hamburger-bars"></i>
              </span>
            </nav>
          </header>
          @yield('page-banner')
        </div>
      </section>
    </div>
  </div>

  @yield('content')

  @include('partials.footer')

  @yield('typewriter-script')
</body>

</html>
