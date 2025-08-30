<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>N.E.M.O.C.E.S. | Coral Ecosystem Monitoring</title>

  <!-- SEO Meta -->
  <meta name="description" content="N.E.M.O.C.E.S. (Navigational Environmental Monitoring Operator for Coral Ecosystem Surveillance) is a research project designed to monitor and preserve coral reef ecosystems using IoT and real-time data collection.">
  <meta name="keywords" content="NEMOCES, coral reef monitoring, environmental monitoring, IoT, marine conservation, Puerto Galera National High School, Practical Research 2">
  <meta name="author" content="Senior High School Department, Puerto Galera National High School">

  <!-- Open Graph (Facebook / LinkedIn) -->
  <meta property="og:title" content="N.E.M.O.C.E.S. | Coral Ecosystem Monitoring">
  <meta property="og:description" content="An innovative coral reef monitoring system powered by IoT and real-time imaging, developed by Senior High School researchers at Puerto Galera NHS.">
  <meta property="og:image" content="{{ asset('images/nemoces.png') }}">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="N.E.M.O.C.E.S.">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="N.E.M.O.C.E.S. | Coral Ecosystem Monitoring">
  <meta name="twitter:description" content="IoT-powered coral reef monitoring project for sustainable marine ecosystem preservation.">
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

<body class="flex flex-col min-h-screen">
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
</body>

</html>
