<!-- Primary Navigation Menu -->
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-md fixed w-full top-0 z-50">
  <div class="container mx-auto px-4 sm:px-6 py-4">
      <div class="flex justify-between items-center">
          <!-- Logo -->
          <div class="shrink-0 flex items-center">
              <a href="{{ route('home') }}" class="flex items-center space-x-3">
                  <img src="{{ asset('img/logosmkn3palu.png') }}" alt="Logo" class="h-12 w-auto">
                  <div>
                      <span class="text-2xl font-bold text-[#f3274c]">SMK NEGERI 3</span>
                      <span class="text-2xl font-bold text-[#ffae22]">PALU</span>
                  </div>
              </a>
          </div>

          <!-- Navigation Links -->
          <div class="hidden md:flex space-x-10">
              <a href="{{ route('home') }}" 
                  class="text-base font-medium text-gray-700 hover:text-[#f3274c] transition-all duration-300 border-b-2 border-transparent hover:border-[#f3274c] {{ request()->routeIs('home') ? 'border-[#f3274c] text-[#f3274c]' : '' }}">
                  Beranda
              </a>
              <a href="#" 
                  class="text-base font-medium text-gray-700 hover:text-[#f3274c] transition-all duration-300 border-b-2 border-transparent hover:border-[#f3274c]">
                  Jurusan
              </a>
              <a href="#" 
                  class="text-base font-medium text-gray-700 hover:text-[#f3274c] transition-all duration-300 border-b-2 border-transparent hover:border-[#f3274c]">
                  Persyaratan
              </a>
              <a href="#" 
                  class="text-base font-medium text-gray-700 hover:text-[#f3274c] transition-all duration-300 border-b-2 border-transparent hover:border-[#f3274c]">
                  Cara Daftar
              </a>
              <a href="#" 
                  class="text-base font-medium text-gray-700 hover:text-[#f3274c] transition-all duration-300 border-b-2 border-transparent hover:border-[#f3274c]">
                  FAQ
              </a>
          </div>

          <!-- Auth Buttons -->
          <div class="hidden md:flex items-center space-x-4">
              @auth
                  <!-- User Dropdown -->
                  <div class="relative" x-data="{ open: false }">
                      <button @click="open = !open" class="flex items-center space-x-3 text-gray-700 hover:text-[#f3274c] transition-all duration-300">
                          <img class="h-10 w-10 rounded-full object-cover border-2 border-gray-200" 
                              src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" 
                              alt="{{ Auth::user()->name }}">
                          <span class="text-base font-medium">{{ Auth::user()->name }}</span>
                          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                          </svg>
                      </button>

                      <div x-show="open" 
                          @click.away="open = false"
                          class="origin-top-right absolute right-0 mt-2 w-48 rounded-lg shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                          role="menu">
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit" class="w-full text-left px-4 py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300">
                                  Logout
                              </button>
                          </form>
                      </div>
                  </div>
              @else
                  <a href="{{ route('login') }}" 
                      class="text-base font-medium text-[#212121] px-6 py-2 rounded-md border border-[#e5e5e5] hover:bg-[#212121] hover:text-white transition-all duration-300">
                      Login
                  </a>
                  <a href="{{ route('register') }}" 
                      class="text-base font-medium text-white px-6 py-2 bg-green-500 rounded-lg hover:bg-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                      Register
                  </a>
              @endauth
          </div>

          <!-- Hamburger -->
          <button @click="open = !open" class="md:hidden inline-flex items-center justify-center p-2">
              <div class="w-6 h-0.5 bg-gray-600 my-1.5 transition-all" :class="{'rotate-45 translate-y-2': open}"></div>
              <div class="w-6 h-0.5 bg-gray-600 my-1.5 transition-all" :class="{'opacity-0': open}"></div>
              <div class="w-6 h-0.5 bg-gray-600 my-1.5 transition-all" :class="{'-rotate-45 -translate-y-2': open}"></div>
          </button>
      </div>
  </div>

  <!-- Mobile menu -->
  <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
      <div class="px-4 pt-2 pb-3 space-y-1">
          <a href="{{ route('home') }}" 
              class="block py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300 {{ request()->routeIs('home') ? 'text-[#f3274c]' : '' }}">
              Beranda
          </a>
          <a href="#" 
              class="block py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300">
              Jurusan
          </a>
          <a href="#" 
              class="block py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300">
              Persyaratan
          </a>
          <a href="#" 
              class="block py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300">
              Cara Daftar
          </a>
          <a href="#" 
              class="block py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300">
              FAQ
          </a>
      </div>

      <!-- Mobile auth buttons -->
      <div class="pt-4 pb-3 border-t border-gray-200">
          @auth
              <div class="flex items-center px-4">
                  <div class="flex-shrink-0">
                      <img class="h-10 w-10 rounded-full object-cover border-2 border-gray-200" 
                          src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" 
                          alt="{{ Auth::user()->name }}">
                  </div>
                  <div class="ml-3">
                      <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                      <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                  </div>
              </div>
              <div class="mt-3 space-y-1">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="w-full text-left px-4 py-2 text-base font-medium text-gray-700 hover:text-[#f3274c] hover:bg-gray-50 transition-all duration-300">
                          Logout
                      </button>
                  </form>
              </div>
          @else
              <div class="space-y-3 px-4">
                  <a href="{{ route('login') }}" 
                      class="block w-full text-center py-2 text-base font-medium text-[#212121] rounded-md border border-[#e5e5e5] hover:bg-[#212121] hover:text-white transition-all duration-300">
                      Login
                  </a>
                  <a href="{{ route('register') }}" 
                      class="block w-full text-center py-2 text-base font-medium text-white bg-green-500 rounded-lg hover:bg-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                      Register
                  </a>
              </div>
          @endauth
      </div>
  </div>
</nav>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div class="h-20"></div>