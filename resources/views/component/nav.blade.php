<header class="w-full bg-white shadow-md fixed top-0 left-0 right-0 z-50">
  <div class="container mx-auto px-4 sm:px-6 py-4">
    <div class="flex justify-between items-center">
      <!-- Logo -->
      <a href="#hero" class="flex items-center space-x-3 scroll-link">
        <img src="{{ asset('img/logosmkn3palu.png') }}" alt="SMKN 3 Palu Logo" class="h-12 w-auto">
        <span class="text-2xl font-bold text-[#f3274c]">SMKN3<span class="text-[#ffc222]">PALU</span></span>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="hidden md:flex space-x-10">
        <a href="#hero" class="text-base font-medium scroll-link" data-section="hero">Beranda</a>
        <a href="#jurusan" class="text-base font-medium scroll-link" data-section="jurusan">Jurusan</a>
        <a href="#persyaratan" class="text-base font-medium scroll-link" data-section="persyaratan">Persyaratan</a>
        <a href="#cara-daftar" class="text-base font-medium scroll-link" data-section="cara-daftar">Cara Daftar</a>
        <a href="#faq" class="text-base font-medium scroll-link" data-section="faq">FAQ</a>
      </nav>

      <!-- Auth Buttons for Desktop -->
      <div class="hidden md:flex items-center space-x-4">
        <a href="#" class="text-base font-medium text-[#212121] px-6 py-2 rounded-md border border-[#e5e5e5] hover:bg-[#212121] hover:text-white transition-all duration-300">Login</a>
        <a href="#" class="text-base font-medium text-white px-6 py-2  bg-green-500 rounded-lg hover:bg-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">Register</a>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="md:hidden flex items-center">
        <div class="w-6 h-0.5 bg-gray-600 my-1.5 transition-all"></div>
        <div class="w-6 h-0.5 bg-gray-600 my-1.5 transition-all"></div>
        <div class="w-6 h-0.5 bg-gray-600 my-1.5 transition-all"></div>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="mobile-menu md:hidden bg-white w-full absolute top-full left-0 shadow-lg z-20">
    <div class="container mx-auto px-4 py-4">
      <nav class="flex flex-col space-y-4">
        <a href="#hero" class="py-2 text-base font-medium scroll-link" data-section="hero">Beranda</a>
        <a href="#jurusan" class="py-2 text-base font-medium scroll-link" data-section="jurusan">Jurusan</a>
        <a href="#persyaratan" class="py-2 text-base font-medium scroll-link" data-section="persyaratan">Persyaratan</a>
        <a href="#cara-daftar" class="py-2 text-base font-medium scroll-link" data-section="cara-daftar">Cara Daftar</a>
        <a href="#faq" class="py-2 text-base font-medium scroll-link" data-section="faq">FAQ</a>
      </nav>
      <div class="mt-6 flex flex-col space-y-3">
        <a href="#" class="py-2 text-center text-base font-medium text-[#212121] rounded-md border border-[#e5e5e5] hover:bg-[#212121] hover:text-white transition-all duration-300">Login</a>
        <a href="#" class="py-2 text-center text-base font-medium text-white rounded-md bg-[#f3274c] hover:bg-[#e01c40] transition-all duration-300">Register</a>
      </div>
    </div>
  </div>
</header>