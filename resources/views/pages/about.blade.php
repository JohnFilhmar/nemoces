@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900/95 via-blue-900/90 to-teal-900/95 backdrop-blur-sm">
  <!-- Hero Section -->
  <div class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-teal-600/20"></div>
    <div class="container mx-auto px-4 py-16 lg:py-24">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-8">
          <div class="relative">
            <h1 class="text-5xl lg:text-7xl font-black text-white mb-6 leading-tight">
              About
              <span class="bg-gradient-to-r from-blue-400 to-teal-400 bg-clip-text text-transparent">
                N.E.M.O.C.E.S.
              </span>
            </h1>
            <div class="h-1 w-24 bg-gradient-to-r from-blue-400 to-teal-400 rounded-full"></div>
          </div>
          <p class="text-xl text-gray-300 leading-relaxed">
            <span class="font-bold text-blue-400">Navigational Environmental Monitoring Operator</span> for Coral Ecosystem Surveillance - A cutting-edge research initiative transforming coral reef conservation through IoT innovation and real-time environmental monitoring.
          </p>
          <div class="flex flex-wrap gap-4">
            <div class="px-4 py-2 bg-blue-500/20 border border-blue-400/30 rounded-full text-blue-300 text-sm font-medium">
              IoT Technology
            </div>
            <div class="px-4 py-2 bg-teal-500/20 border border-teal-400/30 rounded-full text-teal-300 text-sm font-medium">
              Real-time Monitoring
            </div>
            <div class="px-4 py-2 bg-purple-500/20 border border-purple-400/30 rounded-full text-purple-300 text-sm font-medium">
              Data Analytics
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="relative z-10 bg-gradient-to-br from-blue-500/20 to-teal-500/20 p-8 rounded-3xl backdrop-blur-sm border border-white/20">
            <img src="{{ asset('images/nemoces-preview.png') }}" alt="NEMOCES Coral Monitoring" 
                 class="w-full h-80 object-cover rounded-2xl shadow-2xl">
          </div>
          <div class="absolute top-4 left-4 w-32 h-32 bg-blue-400/10 rounded-full blur-xl"></div>
          <div class="absolute bottom-4 right-4 w-24 h-24 bg-teal-400/10 rounded-full blur-xl"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Features Grid -->
  <div class="container mx-auto px-4 py-16">
    <div class="grid lg:grid-cols-2 gap-8">
      <!-- Vision & Mission Card -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-3xl blur-xl transition-all duration-300 group-hover:blur-2xl"></div>
        <div class="relative bg-slate-800/80 backdrop-blur-sm border border-white/10 rounded-3xl p-8 transition-all duration-300 hover:border-blue-400/30">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-bold text-white">Our Vision</h2>
          </div>
          <p class="text-gray-300 mb-8 leading-relaxed">
            To be a leading force in coral reef conservation, inspiring the next generation of environmental stewards through innovative technology and hands-on education.
          </p>
          
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-green-500 rounded-2xl flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-bold text-white">Our Mission</h2>
          </div>
          <p class="text-gray-300 leading-relaxed">
            To provide accessible, real-time monitoring and data-driven insights for coral reef health, supporting both scientific research and local community awareness.
          </p>
        </div>
      </div>

      <!-- What We Do Card -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-cyan-500/20 rounded-3xl blur-xl transition-all duration-300 group-hover:blur-2xl"></div>
        <div class="relative bg-slate-800/80 backdrop-blur-sm border border-white/10 rounded-3xl p-8 transition-all duration-300 hover:border-teal-400/30">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-bold text-white">What We Do</h2>
          </div>
          <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5">
              <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
              <p class="text-gray-300">Deploy IoT sensors for real-time coral reef monitoring</p>
            </div>
            <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5">
              <div class="w-2 h-2 bg-teal-400 rounded-full mt-2 flex-shrink-0"></div>
              <p class="text-gray-300">Collect and store coral images and environmental data</p>
            </div>
            <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5">
              <div class="w-2 h-2 bg-purple-400 rounded-full mt-2 flex-shrink-0"></div>
              <p class="text-gray-300">Provide secure, user-friendly platform for data visualization</p>
            </div>
            <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5">
              <div class="w-2 h-2 bg-green-400 rounded-full mt-2 flex-shrink-0"></div>
              <p class="text-gray-300">Support research and educational projects focused on marine conservation</p>
            </div>
            <div class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5">
              <div class="w-2 h-2 bg-orange-400 rounded-full mt-2 flex-shrink-0"></div>
              <p class="text-gray-300">Engage community through outreach and educational programs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="container mx-auto px-4 py-16">
    <div class="relative">
      <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-teal-500/10 rounded-3xl blur-2xl"></div>
      <div class="relative bg-slate-800/80 backdrop-blur-sm border border-white/10 rounded-3xl overflow-hidden">
        <div class="grid lg:grid-cols-2 gap-0">
          <div class="p-12 space-y-8">
            <div>
              <h2 class="text-4xl font-bold text-white mb-4">Get In Touch</h2>
              <p class="text-gray-300 text-lg">Ready to collaborate on coral reef conservation? Connect with our research team.</p>
            </div>
            
            <div class="space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-white font-semibold mb-1">Location</h3>
                  <p class="text-gray-300">Senior High School Department<br>Puerto Galera National High School<br>Puerto Galera, Oriental Mindoro, Philippines</p>
                </div>
              </div>
              
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-teal-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-white font-semibold mb-1">Email</h3>
                  <a href="mailto:nemoces.project@gmail.com" class="text-teal-400 hover:text-teal-300 transition-colors">
                    nemoces.project@gmail.com
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="relative h-80 lg:h-auto">
            <img src="{{ asset('images/corals2.jpg') }}" alt="Coral Reef" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
