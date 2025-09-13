<header class="relative z-10">
  <nav class="bg-gray-800 shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-20 py-4">
        <div class="flex items-center">
          <a href="{{ route('home') }}" class="text-white text-2xl font-bold hover:scale-105 transition-transform duration-200">
            <img src="{{ asset('images/nemoces.png') }}" alt="N.E.M.O.C.E.S. Logo" class="inline-block h-12 w-auto mr-3 hover:rotate-3 transition-transform duration-300">
            <span class="hover:text-blue-300 transition-colors duration-200">Nemoces</span>
          </a>

          <div class="hidden md:ml-12 md:flex md:space-x-8">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-3 text-lg font-medium rounded-md transition-all duration-200 transform hover:scale-105">Home</a>
            <a href="{{ route('about') }}" class="text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-3 text-lg font-medium rounded-md transition-all duration-200 transform hover:scale-105">About</a>
            <a href="#services" class="text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-3 text-lg font-medium rounded-md transition-all duration-200 transform hover:scale-105">Services</a>
            <a href="#contact" class="text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-3 text-lg font-medium rounded-md transition-all duration-200 transform hover:scale-105">Contact</a>
          </div>
        </div>

        <div class="flex items-center space-x-6">
          @auth
            <div class="relative">
              <button class="text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-3 text-lg font-medium focus:outline-none rounded-md transition-all duration-200 transform hover:scale-105"
                onclick="toggleDropdown()">
                {{ Auth::user()->name }}
                <svg class="w-5 h-5 inline ml-2 transform transition-transform duration-200" id="dropdown-arrow" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
              <div id="dropdown" class="hidden absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-xl py-2 transform opacity-0 scale-95 transition-all duration-200">
                <a href="#" class="block px-6 py-3 text-base text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">Profile</a>
                <a href="#" class="block px-6 py-3 text-base text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">Dashboard</a>
                <div class="border-t border-gray-200 my-1"></div>
                <form action="#" method="POST" class="block">
                  @csrf
                  <button type="submit"
                    class="w-full text-left px-6 py-3 text-base text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150">Logout</button>
                </form>
              </div>
            </div>
          @else
            <a href="#" class="text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-3 text-lg font-medium rounded-md transition-all duration-200 transform hover:scale-105 hidden md:block">Login</a>
          @endauth
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button class="text-gray-300 hover:text-white focus:outline-none p-2 rounded-md hover:bg-gray-700 transition-all duration-200" onclick="toggleMobileMenu()">
            <svg class="w-8 h-8 transform transition-transform duration-200" id="mobile-menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile menu -->
      <div id="mobile-menu" class="hidden md:hidden transform transition-all duration-300 ease-in-out">
        <div class="px-2 pt-2 pb-4 space-y-2">
          <a href="{{ route('home') }}" class="text-gray-300 hover:text-white hover:bg-gray-700 block px-4 py-3 text-lg font-medium rounded-md transition-all duration-200">Home</a>
          <a href="{{ route('about') }}" class="text-gray-300 hover:text-white hover:bg-gray-700 block px-4 py-3 text-lg font-medium rounded-md transition-all duration-200">About</a>
          <a href="#services" class="text-gray-300 hover:text-white hover:bg-gray-700 block px-4 py-3 text-lg font-medium rounded-md transition-all duration-200">Services</a>
          <a href="#contact" class="text-gray-300 hover:text-white hover:bg-gray-700 block px-4 py-3 text-lg font-medium rounded-md transition-all duration-200">Contact</a>
          <a href="#login" class="text-gray-300 hover:text-white hover:bg-gray-700 block px-4 py-3 text-lg font-medium rounded-md transition-all duration-200">Login</a>
        </div>
      </div>
    </div>
  </nav>
</header>