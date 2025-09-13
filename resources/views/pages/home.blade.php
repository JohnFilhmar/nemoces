@extends('layouts.app')
@section('content')


<main class="grow flex items-center justify-center text-center text-white overflow-y-auto overflow-x-hidden">
  <!-- Background Image with Parallax Effect -->

  <!-- Animated Content Container -->
  <div class="max-w-4xl px-6 py-12">
    <!-- Main Title with Glow Effect -->
    <div class="text-center mb-8">
      <img src="/images/nemoces.png" alt="N.E.M.O.C.E.S. Logo" class="mx-auto h-24 md:h-32 w-auto mb-6 hover:rotate-3 transition-transform duration-300">
      <h1 class="text-5xl md:text-7xl font-extrabold tracking-wide">
      <span class="bg-gradient-to-r from-cyan-400 via-teal-300 to-blue-400 bg-clip-text text-transparent drop-shadow-2xl">
        N.E.M.O.C.E.S.
      </span>
      </h1>
    </div>
    
    <!-- Subtitle with Enhanced Typography -->
    <h2 class="text-xl md:text-2xl font-medium mb-6 text-cyan-100 tracking-wider opacity-90">
      Navigational Environmental Monitoring Operator for Coral Ecosystem Surveillance
    </h2>
    
    <!-- Description with Better Spacing -->
    <p class="text-lg md:text-xl mb-10 leading-relaxed text-gray-100 max-w-3xl mx-auto">
      A cutting-edge technology-driven research project engineered to monitor, detect, and preserve 
      coral reef ecosystems through advanced IoT sensors, real-time imaging, and intelligent 
      automated data collection systems.
    </p>
    
    <!-- Enhanced Call-to-Action Button -->
    <div class="space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center">
      <a href="/about" 
         class="inline-block bg-gradient-to-r from-teal-500 to-cyan-600 hover:from-teal-600 hover:to-cyan-700 
                text-white font-bold px-8 py-4 rounded-full shadow-2xl 
                transform hover:scale-105 transition-all duration-300 
                border border-teal-400/30 hover:border-teal-300/50">
        <span class="flex items-center justify-center space-x-2">
          <span>Explore Our Mission</span>
          <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>

  <!-- Floating Particles Animation -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-cyan-400 rounded-full opacity-60 animate-float"></div>
    <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-teal-300 rounded-full opacity-40 animate-float-delayed"></div>
    <div class="absolute bottom-1/3 left-1/3 w-1.5 h-1.5 bg-blue-400 rounded-full opacity-50 animate-float-slow"></div>
  </div>
</main>


@endsection