<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>N.E.M.O.C.E.S. | Coral Ecosystem Monitoring</title>

  <!-- SEO Meta -->
  <meta name="description"
    content="N.E.M.O.C.E.S. (Navigational Environmental Monitoring Operator for Coral Ecosystem Surveillance) is a research project designed to monitor and preserve coral reef ecosystems using IoT and real-time data collection.">
  <meta name="keywords"
    content="NEMOCES, coral reef monitoring, environmental monitoring, IoT, marine conservation, Puerto Galera National High School, Practical Research 2">
  <meta name="author" content="Senior High School Department, Puerto Galera National High School">

  <!-- Open Graph (Facebook / Messenger / LinkedIn) -->
  <meta property="og:title" content="N.E.M.O.C.E.S. | Coral Ecosystem Monitoring">
  <meta property="og:description"
    content="An innovative coral reef monitoring system powered by IoT and real-time imaging, developed by Senior High School researchers at Puerto Galera NHS.">
  <meta property="og:image" content="{{ asset('images/nemoces.png') }}">
  <meta property="og:url" content="{{ config('app.url') }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="N.E.M.O.C.E.S.">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="N.E.M.O.C.E.S. | Coral Ecosystem Monitoring">
  <meta name="twitter:description"
    content="IoT-powered coral reef monitoring project for sustainable marine ecosystem preservation.">
  <meta name="twitter:image" content="{{ asset('images/nemoces.png') }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/nemoces.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/nemoces.png') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Extra: Manifest for PWA (if needed) -->
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <meta name="theme-color" content="#1E3A8A">

  <!-- CSRF Token for Laravel -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home-carousel.css') }}">
  <script src="{{ asset('js/header.js') }}"></script>
</head>

<body>
  <div class="flex flex-col justify-between min-h-screen max-h-screen overflow-y-hidden">

    @include('layouts.header')

    <!-- Carousel Background covering the whole page -->
    <div class="absolute inset-0 carousel-container z-0 animate-fade-in">
      <div class="carousel-track">
        <div class="carousel-slide active">
          <img src="/images/corals1.jpg" alt="Coral Reef 1" class="w-full h-full object-cover">
        </div>
        <div class="carousel-slide">
          <img src="/images/corals2.jpg" alt="Coral Reef 2" class="w-full h-full object-cover">
        </div>
        <div class="carousel-slide">
          <img src="/images/corals3.jpg" alt="Coral Reef 3" class="w-full h-full object-cover">
        </div>
        <div class="carousel-slide">
          <img src="/images/corals4.jpg" alt="Coral Reef 4" class="w-full h-full object-cover">
        </div>
        <div class="carousel-slide">
          <img src="/images/corals5.jpg" alt="Coral Reef 5" class="w-full h-full object-cover">
        </div>
        <div class="carousel-slide">
          <img src="/images/corals6.jpg" alt="Coral Reef 6" class="w-full h-full object-cover">
        </div>
        <div class="carousel-slide">
          <img src="/images/corals7.jpg" alt="Coral Reef 7" class="w-full h-full object-cover">
        </div>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-blue-900/40 via-blue-800/50 to-teal-900/60"></div>
    </div>

    <div class="relative z-10 text-justify min-h-[635px] max-h-[635px] overflow-y-auto">
      @yield('content')
    </div>

    @include('layouts.footer')

  </div>
</body>

</html>
