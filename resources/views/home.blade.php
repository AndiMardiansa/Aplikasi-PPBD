<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./vars.css" />
    <link rel="stylesheet" href="./style.css" />
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com/3.2.0"></script>
    <script src="./tailwind.config.js"></script>
    
    <!-- Global Styles -->
    <style>
        /* Reset Styles */
        a, button, input, select, h1, h2, h3, h4, h5, * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: none;
            text-decoration: none;
            background: none;
            -webkit-font-smoothing: antialiased;
        }

        menu, ol, ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .mobile-hidden { display: none !important; }
            .mobile-block { display: block !important; }
            .mobile-flex { display: flex !important; }
            .mobile-w-full { width: 100% !important; }
            .mobile-mx-auto { 
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .mobile-text-center { text-align: center !important; }
            .mobile-text-sm { font-size: 0.875rem !important; }
            .mobile-relative { position: relative !important; }
            .mobile-static { position: static !important; }
        }

        @media (max-width: 480px) {
            .xs-text-xs { font-size: 0.75rem !important; }
            .xs-p-2 { padding: 0.5rem !important; }
            .xs-my-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .tablet-text-base { font-size: 1rem !important; }
            .tablet-w-auto { width: auto !important; }
        }

        /* Mobile Menu Animation */
        .mobile-menu {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transform: translateY(-100%);
            opacity: 0;
        }

        .mobile-menu.active {
            transform: translateY(0);
            opacity: 1;
        }

        /* Logo Marquee Animation */
        .marquee-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .marquee-content {
            display: flex;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }

        .marquee-content img {
            transition: all 0.3s ease;
        }

        .marquee-content img:hover {
            transform: scale(1.1);
            filter: grayscale(0);
        }

        /* Auth Button Effects */
        .hidden.md\:flex.items-center.space-x-4 a {
            position: relative;
            overflow: hidden;
        }

        .hidden.md\:flex.items-center.space-x-4 a:first-child::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(33, 33, 33, 0.1), transparent);
            transition: all 0.6s;
        }

        .hidden.md\:flex.items-center.space-x-4 a:first-child:hover::before {
            left: 100%;
        }

        .hidden.md\:flex.items-center.space-x-4 a:last-child::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s;
        }

        .hidden.md\:flex.items-center.space-x-4 a:last-child:hover::before {
            left: 100%;
        }

        .hidden.md\:flex.items-center.space-x-4 a:active {
            transform: scale(0.95) !important;
        }
    </style>
    <title>PPDB SMK Negeri 3 Palu</title>
</head>

<body>
  <!-- Header/Navigation -->
  <header class="w-full bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center justify-between px-3 sm:px-4 md:px-8 py-2 sm:py-3 max-w-[1920px] mx-auto">
      <!-- Logo -->
      <div class="flex items-center">
        <img class="h-10 sm:h-12 md:h-[67px] w-auto" src="../img/logo.png" alt="logo smk 3 palu" />
      </div>
  
      <!-- Mobile Menu Button -->
      <div class="block md:hidden">
        <button id="mobile-menu-button" class="w-[31px] h-[18px] relative" aria-label="Toggle menu">
          <div class="bg-[#212121] w-[15px] h-0.5 absolute left-4 top-0"></div>
          <div class="bg-[#212121] w-[30px] h-[11.11%] absolute left-0 bottom-[44.94%] top-[43.94%]"></div>
          <div class="bg-[#212121] w-[15px] h-0.5 absolute left-0 bottom-0"></div>
        </button>
      </div>
  
      <!-- Desktop Navigation -->
      <nav class="hidden md:flex items-center space-x-6">
        <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium">Beranda</a>
        <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium">Jurusan</a>
        <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium">Persyaratan</a>
        <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium">Cara Daftar</a>
        <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium">FAQ</a>
      </nav>
  
      <!-- Auth Buttons -->
      <div class="hidden md:flex items-center space-x-4">
        <a href="#" class="px-6 py-2 text-[#212121] font-medium border-2 border-[#212121] rounded-lg hover:bg-[#212121] hover:text-white transition-all duration-300 transform hover:scale-105">
          Login
        </a>
        <a href="#" class="px-6 py-2 text-white font-medium bg-green-500 rounded-lg hover:bg-green-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
          Register
        </a>
      </div>
  
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="mobile-menu bg-white w-full absolute left-0 right-0 z-40 shadow-lg">
        <div class="px-4 py-6 flex flex-col space-y-4">
          <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium py-2 border-b border-gray-100">Beranda</a>
          <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium py-2 border-b border-gray-100">Jurusan</a>
          <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium py-2 border-b border-gray-100">Persyaratan</a>
          <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium py-2 border-b border-gray-100">Cara Daftar</a>
          <a href="#" class="text-[#212121] text-left font-['Oswald-Medium',_sans-serif] text-lg leading-7 font-medium py-2 border-b border-gray-100">FAQ</a>
          <div class="hover:bg-[#212121] hover:text-white transition-all duration-300 transform hover:scale-105 rounded-[7px] px-6 py-3 text-[#212121] text-center font-['Oswald-SemiBold',_sans-serif] text-[17px] leading-[17px] font-semibold mt-4">
            Login
          </div>
          <div class="bg-green-500 rounded-[7px] px-6 py-3 text-[#ffffff] text-center font-['Oswald-SemiBold',_sans-serif] text-[17px] leading-[17px] font-semibold mt-4">
            Register
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="beranda" class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center" style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgeMb1qvTMpb7uAH23T4LAZzlj9a2HMk2OOwe2Q6x2L5TlcbvOfeE_rUZ0rg4RtqRmJDWBe-66fXuS8jF55NUk6M24e6Q2piGg4ZeuPGE1IvdXx3XfepQuWtVjWK8XSixVDaqjaaPquMmq_I0yC1Ks1oFxtXXQT09Zp2dHClHhFWM4y4dlj8FmzyyWq6Z9-/s1600/IMG-20240602-WA0004.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center px-6 md:px-12 max-w-2xl">
      <h1 class="text-4xl md:text-4xl font-extrabold text-white leading-tight drop-shadow-lg">
        Penerimaan Peserta Didik Baru
      </h1>
      <p class="mt-4 text-lg text-gray-200 drop-shadow-md">
        SMK NEGERI 3 PALU TA 2025/2026
      </p>
      <div class="mt-6 flex flex-col sm:flex-row justify-center gap-4">
        <a href="#menu" class="px-6 py-3 text-white bg-green-500 hover:bg-green-700 font-semibold rounded-lg transition duration-300">
          Daftar Sekarang
        </a>
      </div>
    </div>
  </section>

  <!-- Partner Section -->
  <section class="w-full bg-white py-8 overflow-hidden">
    <div class="max-w-[1920px] mx-auto px-4">
      <div class="text-center mb-8">
        <h2 class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-xl sm:text-2xl md:text-4xl leading-7 md:leading-9 font-extrabold">
          Partner Kami
        </h2>
      </div>

      <!-- Logo Slider Container -->
      <div class="logo-slider">
        <div class="logo-slide-track">
          <!-- Original Logos -->
          <div class="logo-slide">
            <img src="../img/yamaha.png" alt="Yamaha" loading="lazy">
          </div>
          <div class="logo-slide">
            <img src="../img/logo_hino.png" alt="Hino" loading="lazy">
          </div>
          <div class="logo-slide">
            <img src="../img/Kalla_Toyota_Logo_png.png" alt="Toyota" loading="lazy">
          </div>
          <div class="logo-slide">
            <img src="../img/Mitsubishi-logo.png" alt="Mitsubishi" loading="lazy">
          </div>

          <!-- Duplicated Logos for Infinite Scroll -->
          <div class="logo-slide">
            <img src="../img/yamaha.png" alt="Yamaha" loading="lazy">
          </div>
          <div class="logo-slide">
            <img src="../img/logo_hino.png" alt="Hino" loading="lazy">
          </div>
          <div class="logo-slide">
            <img src="../img/Kalla_Toyota_Logo_png.png" alt="Toyota" loading="lazy">
          </div>
          <div class="logo-slide">
            <img src="../img/Mitsubishi-logo.png" alt="Mitsubishi" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
  /* Logo Slider Styles */
  .logo-slider {
    background: white;
    padding: 20px 0;
    overflow: hidden;
    position: relative;
    width: 100%;
  }

  .logo-slide-track {
    display: flex;
    animation: scroll 25s linear infinite;
    width: calc(200px * 16);
  }

  .logo-slide {
    width: 200px;
    padding: 0 40px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .logo-slide img {
    height: 64px;
    width: auto;
    max-width: 100%;
    transition: all 0.3s ease;
    filter: grayscale(100%);
    opacity: 0.7;
    object-fit: contain;
  }

  .logo-slide:hover img {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.1);
  }

  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-200px * 8)); }
  }

  .logo-slide-track:hover {
    animation-play-state: paused;
  }

  /* Performance Optimizations */
  .logo-slide-track {
    -webkit-font-smoothing: antialiased;
    backface-visibility: hidden;
    transform: translateZ(0);
    will-change: transform;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .logo-slide {
      width: 150px;
      padding: 0 20px;
    }
    .logo-slide-track {
      width: calc(150px * 16);
    }
    @keyframes scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(calc(-150px * 8)); }
    }
    .logo-slide img {
      height: 48px;
    }
  }
  </style>

  <!-- Program Keahlian Section -->
  <section class="w-full md:w-11/12 lg:w-10/12 xl:w-full max-w-[1920px] mx-auto py-8 md:py-16 px-4 md:px-8 relative overflow-hidden">
    <div class="text-center mb-8">
      <h2 class="text-[#222222] text-center font-['Nunito-ExtraBold',_sans-serif] text-xl sm:text-2xl md:text-4xl leading-7 md:leading-9 font-extrabold">
        Program Keahlian
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
      <!-- Program Cards -->
      <!-- Teknik Informatika -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1518432031352-d6fc5c10da5a.jpeg" alt="Teknik Informatika" loading="lazy"/>
        </div>
        <div class="p-4">
          <h3 class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Rekayasa Perangkat Lunak
          </h3>
          <p class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Pemrograman, Jaringan & Database
          </p>
        </div>
      </div>

      <!-- Teknik Bangunan -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <div class="relative">
            <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1487958449943-2429e8be8625.jpeg" alt="Teknik Bangunan" />
          </div>
          <div class="p-4">
            <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
              Teknik Bangunan
            </div>
            <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
              Konstruksi & Arsitektur
            </div>
          </div>
        </div>

      <!-- Otomotif -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/Perusahaan-Otomotif-yang-Terdaftar-di-BEI.jpg" alt="Otomotif" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Otomotif
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Mesin & Kendaraan
          </div>
        </div>
      </div>

      <!-- Teknik Elektro -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1498084393753-b411b2d26b34.jpeg" alt="Teknik Elektro" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Teknik Elektro
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Elektronika & Robotika
          </div>
        </div>
      </div>

      <!-- Teknik Mesin -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1537462715879-360eeb61a0ad.jpeg" alt="Teknik Mesin" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Teknik Mesin
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Manufaktur & Produksi
          </div>
        </div>
      </div>

      <!-- Teknik Ketenagalistrikan -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1473341304170-971dccb5ac1e.jpeg" alt="Teknik Ketenagalistrikan" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Teknik Ketenagalistrikan
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Instalasi & Distribusi Listrik
          </div>
        </div>
      </div>

      <!-- Teknik Geospasial -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1521295121783-8a321d551ad2.jpeg" alt="Teknik Geospasial" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Teknik Geospasial
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Pemetaan & Survei
          </div>
        </div>
      </div>

      <!-- Teknik Pengelasan -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1504328345606-18bbc8c9d7d1.jpeg" alt="Teknik Pengelasan" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Teknik Pengelasan
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Fabrikasi & Konstruksi Logam
          </div>
        </div>
      </div>

      <!-- Desain Pemodelan -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1503387762-592deb58ef4e.jpeg" alt="Desain Pemodelan" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Desain Pemodelan
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Arsitektur & BIM
          </div>
        </div>
      </div>

      <!-- Bisnis Konstruksi -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="relative">
          <img class="w-full h-[200px] object-cover" src="../img/jurusan/photo-1541888946425-d81bb19240f5.jpeg" alt="Bisnis Konstruksi" />
        </div>
        <div class="p-4">
          <div class="text-[#222222] font-['Nunito-ExtraBold',_sans-serif] text-lg font-extrabold mb-2">
            Bisnis Konstruksi
          </div>
          <div class="text-[#555555] font-['Nunito-Regular',_sans-serif] text-sm mb-4">
            Manajemen Proyek & Properti
          </div>
        </div>
      </div>  

      
    </div>
  </section>

  <!-- Persyaratan Section -->
  <section id="persyaratan" class="py-16 bg-gray-50">
    <!-- ... (Existing persyaratan content) ... -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="mb-12">
        <div class="inline-block bg-green-500 text-white px-6 py-2 rounded-lg text-lg font-semibold mb-6">
          Persyaratan PPDB
        </div>
        <div class="relative">
          <!-- Decorative Icon -->
          <div class="absolute right-0 top-0 opacity-10 transform translate-x-20">
            <svg class="w-72 h-72" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z" stroke="#000000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M14.5 4.5V6.5C14.5 7.6 15.4 8.5 16.5 8.5H18.5" stroke="#000000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8 13H12" stroke="#000000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8 17H16" stroke="#000000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>
  
      <!-- Requirements List -->
      <div class="space-y-4 relative z-10 max-w-3xl">
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Warga Negara Indonesia</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Dinyatakan lulus dari SMP/MTS atau yang sederajat</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Calon peserta didik berusia maksimal 21 tahun pada saat pendaftaran</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Pas Foto 3x4 latar belakang merah</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Scan dokumen Surat Keterangan Lulus (SKL)</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Scan dokumen Ijazah, jika sudah memiliki</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Scan dokumen Akte Kelahiran</span>
        </div>
  
        <div class="flex items-start space-x-3">
          <svg class="w-6 h-6 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-gray-700">Scan dokumen Kartu Keluarga</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Cara Pendaftaran Section -->
  <section id="cara-daftar" class="py-16 bg-gray-50 overflow-hidden">
    <!-- ... (Existing cara pendaftaran content) ... -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <div class="inline-block  bg-green-500 text-white px-6 py-2 rounded-lg text-lg font-semibold mb-6">
          Cara Pendaftaran
        </div>
        <h2 class="text-3xl font-bold text-gray-900">Cara mudah melakukan PPDB</h2>
      </div>
  
      <!-- Steps Container -->
      <div class="relative">
        <!-- Connecting Line -->
        <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gray-200 hidden md:block"></div>
  
        <!-- Step 1 -->
        <div class="relative flex flex-col md:flex-row items-center mb-16 md:mb-24">
          <div class="w-full md:w-1/2 md:pr-16 text-center md:text-right order-2 md:order-1">
            <div class="bg-white rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
              <span class="inline-block bg-green-100 text-green-500 text-4xl font-bold rounded-full w-12 h-12 leading-10 mb-4">1</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4">Klik Button "Daftar Sekarang"</h3>
              <p class="text-gray-600 mb-4">Masukkkan Nama Lengkap, Email, Password dan Konfirmasi password</p>
              <ul class="space-y-3 text-left">
                <li class="flex items-center space-x-2">
                  <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span class="text-gray-600">Nama Lengkap sesuai dengan Kartu Identitas</span>
                </li>
                <li class="flex items-center space-x-2">
                  <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span class="text-gray-600">Pastikan email yang di daftarkan Aktif</span>
                </li>
                <li class="flex items-center space-x-2">
                  <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span class="text-gray-600">Jangan membagikan Kata sandi ke Orang lain</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full md:w-1/2 order-1 md:order-2">
            <div class="relative">
              <div class="bg-blue-100 rounded-full h-64 w-64 mx-auto mb-8 md:mb-0 overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png" alt="Register" class="w-40 h-40 object-contain absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              </div>
              <div class="absolute -top-4 -right-4 bg-yellow-300 rounded-full w-12 h-12 flex items-center justify-center animate-bounce">
                <svg class="w-6 h-6 text-yellow-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Step 2 -->
        <div class="relative flex flex-col md:flex-row items-center mb-16 md:mb-24">
          <div class="w-full md:w-1/2 order-2">
            <div class="relative">
              <div class="bg-purple-100 rounded-full h-64 w-64 mx-auto mb-8 md:mb-0 overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png" alt="Login" class="w-40 h-40 object-contain absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              </div>
              <div class="absolute -top-4 -left-4 bg-purple-300 rounded-full w-12 h-12 flex items-center justify-center animate-pulse">
                <svg class="w-6 h-6 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 md:pl-16 text-center md:text-left">
            <div class="bg-white rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
              <span class="inline-block bg-purple-100 text-purple-500 text-4xl font-bold rounded-full w-12 h-12 leading-10 mb-4">2</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4">Masuk ke Sistem Informasi PPDB</h3>
              <p class="text-gray-600">Masuk menggunakan Email dan Kata sandi yang telah didaftarkan sebelumnya untuk melanjutkan proses pendaftaran.</p>
            </div>
          </div>
        </div>
  
        <!-- Step 3 -->
        <div class="relative flex flex-col md:flex-row items-center mb-16 md:mb-24">
          <div class="w-full md:w-1/2 md:pr-16 text-center md:text-right order-2 md:order-1">
            <div class="bg-white rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
              <span class="inline-block bg-orange-100 text-orange-500 text-4xl font-bold rounded-full w-12 h-12 leading-10 mb-4">3</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4">Proses Pendaftaran Siswa</h3>
              <p class="text-gray-600">Isi data diri Siswa, Orang tua & Unggah Dokumen yang di perlukan dengan lengkap dan benar.</p>
            </div>
          </div>
          <div class="w-full md:w-1/2 order-1 md:order-2">
            <div class="relative">
              <div class="bg-orange-100 rounded-full h-64 w-64 mx-auto mb-8 md:mb-0 overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png" alt="Form" class="w-40 h-40 object-contain absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              </div>
              <div class="absolute -bottom-4 -right-4 bg-orange-300 rounded-full w-12 h-12 flex items-center justify-center animate-bounce">
                <svg class="w-6 h-6 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Step 4 -->
        <div class="relative flex flex-col md:flex-row items-center">
          <div class="w-full md:w-1/2 order-2">
            <div class="relative">
              <div class="bg-red-100 rounded-full h-64 w-64 mx-auto mb-8 md:mb-0 overflow-hidden">
                <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png" alt="Payment" class="w-40 h-40 object-contain absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              </div>
              <div class="absolute -bottom-4 -left-4 bg-red-300 rounded-full w-12 h-12 flex items-center justify-center animate-pulse">
                <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 md:pl-16 text-center md:text-left">
            <div class="bg-white rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
              <span class="inline-block bg-red-100 text-red-500 text-4xl font-bold rounded-full w-12 h-12 leading-10 mb-4">4</span>
              <h3 class="text-2xl font-bold text-gray-900 mb-4">Daftar Ulang</h3>
              <p class="text-gray-600">Daftar ulang dengan melakukan pembayaran sebesar Rp 245.000. Transfer ke rekening bank atau datang langsung ke SMK VIP Maarif NU 1 Kemiri.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="w-full max-w-[1920px] mx-auto py-8 sm:py-12 md:py-16 px-3 sm:px-4 md:px-8">
    <!-- ... (Existing FAQ content) ... -->
    <div class="w-full max-w-[1920px] mx-auto py-8 sm:py-12 md:py-16 px-3 sm:px-4 md:px-8">
      <div class="text-center mb-8 md:mb-12">
        <div class="text-green-500 text-center font-['Nunito-Bold',_sans-serif] text-sm sm:text-base leading-4 font-bold uppercase mb-4">
          FAQ PPDB
        </div>
        <div class="text-[#222222] text-center font-['Nunito-ExtraBold',_sans-serif] text-xl sm:text-2xl md:text-4xl leading-7 md:leading-9 font-extrabold">
          Frequently Asked Questions
        </div>
      </div>
    
      <div class="max-w-3xl mx-auto space-y-4">
        <!-- FAQ Item 1 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
          <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex items-center justify-between">
              <span class="text-lg font-semibold text-gray-800">Kapan pendaftaran PPDB dibuka?</span>
              <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer px-6 py-4 border-t border-gray-100 hidden bg-gray-50">
            <p class="text-gray-600">Pendaftaran PPDB dibuka pada bulan Juni-Juli setiap tahunnya. Untuk jadwal spesifik akan diumumkan melalui website resmi sekolah.</p>
          </div>
        </div>
    
        <!-- FAQ Item 2 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
          <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex items-center justify-between">
              <span class="text-lg font-semibold text-gray-800">Apa saja persyaratan yang dibutuhkan untuk mendaftar?</span>
              <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer px-6 py-4 border-t border-gray-100 hidden bg-gray-50">
            <p class="text-gray-600">Persyaratan utama meliputi: Ijazah/SKL SMP, Akta Kelahiran, Kartu Keluarga, Pas foto terbaru, dan dokumen pendukung lainnya sesuai jalur pendaftaran yang dipilih.</p>
          </div>
        </div>
    
        <!-- FAQ Item 3 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
          <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex items-center justify-between">
              <span class="text-lg font-semibold text-gray-800">Bagaimana cara melakukan pendaftaran online?</span>
              <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer px-6 py-4 border-t border-gray-100 hidden bg-gray-50">
            <p class="text-gray-600">Pendaftaran dapat dilakukan melalui website PPDB Online dengan mengisi formulir dan mengunggah dokumen yang diperlukan. Panduan lengkap dapat dilihat di menu "Cara Daftar".</p>
          </div>
        </div>
    
        <!-- FAQ Item 4 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
          <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex items-center justify-between">
              <span class="text-lg font-semibold text-gray-800">Apa saja jalur penerimaan yang tersedia?</span>
              <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer px-6 py-4 border-t border-gray-100 hidden bg-gray-50">
            <p class="text-gray-600">Tersedia beberapa jalur penerimaan: Jalur Prestasi Akademik, Jalur Prestasi Non-Akademik, Jalur Afirmasi, dan Jalur Zonasi. Setiap jalur memiliki persyaratan khusus.</p>
          </div>
        </div>
    
        <!-- FAQ Item 5 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
          <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex items-center justify-between">
              <span class="text-lg font-semibold text-gray-800">Bagaimana sistem seleksi dilakukan?</span>
              <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer px-6 py-4 border-t border-gray-100 hidden bg-gray-50">
            <p class="text-gray-600">Seleksi dilakukan berdasarkan kriteria masing-masing jalur pendaftaran. Untuk jalur prestasi akademik, nilai rapor dan ujian menjadi pertimbangan utama. Pengumuman hasil seleksi akan disampaikan melalui website.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="w-full bg-[#222222] text-white py-12">
    <!-- ... (Existing footer content) ... -->
    <div class="w-full max-w-[1920px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Column 1 - About -->
        <div>
          <div class="flex items-center mb-6">
            <img class="h-12 w-auto mr-3" src="../img/logo.png" alt="SMK Negeri 3 Palu" />
            <div class="text-white font-['FugazOne-Regular',_sans-serif] text-xl">
              SMK Negeri 3 Palu
            </div>
          </div>
          <p class="text-gray-400 text-sm mb-6">
            Sekolah Menengah Kejuruan Negeri 3 Palu merupakan salah satu Sekolah Menengah Kejuruan Negeri yang ada di Provinsi Sulawesi Tengah, Indonesia.
          </p>
          <div class="social-icons">
            <a href="#" aria-label="Facebook">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
              </svg>
            </a>
            <a href="#" aria-label="Twitter">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" aria-label="Instagram">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
          </div>
        </div>
  
        <!-- Column 2 - Quick Links -->
        <div>
          <h3 class="section-title">Quick Links</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Jurusan</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Persyaratan</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Cara Daftar</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
          </ul>
        </div>
  
        <!-- Column 3 - Contact Info -->
        <div>
          <h3 class="section-title">Contact Info</h3>
          <ul class="space-y-3">
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-gray-400">Jl. Tg. Santigi No. 19, Palu, Sulawesi Tengah</span>
            </li>
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <span class="text-gray-400">info@smkn3palu.sch.id</span>
            </li>
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span class="text-gray-400">(0451) 123456</span>
            </li>
          </ul>
        </div>
  
        <!-- Column 4 - Newsletter -->
        <div>
          <h3 class="section-title">Newsletter</h3>
          <p class="text-gray-400 mb-4">Berlangganan newsletter kami untuk mendapatkan informasi terbaru.</p>
          <form class="flex flex-col space-y-3">
            <input type="email" placeholder="Email address" class="bg-gray-800 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
              Subscribe
            </button>
          </form>
        </div>
      </div>
  
      <div class="border-t border-gray-800 mt-12 pt-8 text-center">
        <p class="text-gray-400 text-sm">© 2024 SMK Negeri 3 Palu. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Floating Action Button -->
  <div id="scrollToTopButton" class="bg-[#007a4a] w-10 h-10 sm:w-11 sm:h-[51px] fixed right-3 bottom-3 sm:right-4 sm:bottom-4 md:right-8 md:bottom-6 flex items-center justify-center rounded-full shadow-lg z-40 cursor-pointer">
    <img class="w-4 h-4 sm:w-5 sm:h-5" src="icon68.svg" alt="Scroll to top" />
  </div>

  <!-- Scripts -->
  <script>
    // ... (Existing JavaScript code) ...
    function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    const icon = button.querySelector('svg');
    const faqItem = button.closest('.bg-white.rounded-lg.shadow-sm');
    const allFaqItems = document.querySelectorAll('.bg-white.rounded-lg.shadow-sm');
    const allAnswers = document.querySelectorAll('.faq-answer');
    const allIcons = document.querySelectorAll('.transform.transition-transform');

    // Close all other answers
    allAnswers.forEach(item => {
      if (item !== answer) {
        item.classList.remove('active');
        item.classList.add('hidden');
      }
    });

    // Remove active state from all FAQ items
    allFaqItems.forEach(item => {
      if (item !== faqItem) {
        item.classList.remove('active');
      }
    });

    // Reset all icons
    allIcons.forEach(item => {
      if (item !== icon) {
        item.style.transform = 'rotate(0deg)';
      }
    });

    // Toggle current answer
    answer.classList.toggle('hidden');
    answer.classList.toggle('active');
    faqItem.classList.toggle('active');
    
    // Toggle icon rotation
    if (answer.classList.contains('active')) {
      icon.style.transform = 'rotate(180deg)';
    } else {
      icon.style.transform = 'rotate(0deg)';
    }

    // Add smooth scroll to the active FAQ item
    if (answer.classList.contains('active')) {
      const yOffset = -100; // Offset for fixed header if any
      const y = faqItem.getBoundingClientRect().top + window.pageYOffset + yOffset;
      window.scrollTo({top: y, behavior: 'smooth'});
    }
  }

  document.addEventListener("DOMContentLoaded", function () {
      // Mobile menu toggle
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");
      const mobileMenuLinks = mobileMenu.querySelectorAll("a");

      // Toggle menu when button is clicked
      mobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("active");
        document.body.classList.toggle("menu-open");
      });

      // Close menu when a link is clicked
      mobileMenuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
          mobileMenu.classList.remove("active");
          document.body.classList.remove("menu-open");
        });
      });

      // Sticky header on scroll
      const header = document.querySelector("header");
      let lastScrollTop = 0;

      window.addEventListener("scroll", function () {
        let scrollTop =
          window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
          header.classList.add("header-sticky");

          // Hide header when scrolling down, show when scrolling up
          if (scrollTop > lastScrollTop) {
            header.style.transform = "translateY(-100%)";
          } else {
            header.style.transform = "translateY(0)";
          }
        } else {
          header.classList.remove("header-sticky");
          header.style.transform = "translateY(0)";
        }

        lastScrollTop = scrollTop;
      });

      // Add to cart functionality
      const addToCartButtons = document.querySelectorAll(
        ".bg-[#f3274c].rounded-full"
      );
      const cartCount = document.createElement("div");
      cartCount.className =
        "absolute -top-2 -right-2 bg-[#ffc222] text-[#222222] text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center";
      cartCount.textContent = "0";

      // Find the floating action button to add a cart icon
      const floatingActionButton = document.querySelector(
        ".bg-[#007a4a].fixed"
      );
      if (floatingActionButton) {
        // Add a shopping cart badge
        floatingActionButton.style.position = "relative";
        floatingActionButton.appendChild(cartCount);

        // Add to cart animation and counter
        addToCartButtons.forEach((button) => {
          button.addEventListener("click", function (e) {
            e.preventDefault();

            // Animation effect
            const productElement = this.closest(".bg-white.rounded-lg");
            if (productElement) {
              productElement.classList.add("added-to-cart");
              setTimeout(() => {
                productElement.classList.remove("added-to-cart");
              }, 700);
            }

            // Increment cart counter
            let currentCount = parseInt(cartCount.textContent);
            cartCount.textContent = currentCount + 1;

            // Show notification
            showNotification("Item added to cart!");
          });
        });
      }

      // Scroll animations for sections
      const sections = document.querySelectorAll(".w-full.max-w-[1920px]");

      function checkScroll() {
        sections.forEach((section) => {
          const sectionTop = section.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;

          if (sectionTop < windowHeight * 0.75) {
            section.classList.add("fade-in-section");
          }
        });
      }

      // Run on load and scroll
      checkScroll();
      window.addEventListener("scroll", checkScroll);

      // Notification system
      function showNotification(message) {
        const notification = document.createElement("div");
        notification.className =
          "fixed top-24 right-4 bg-[#222222] text-white py-2 px-4 rounded-md shadow-lg z-50 transform transition-transform duration-300 translate-x-full";
        notification.textContent = message;
        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
          notification.style.transform = "translateX(0)";
        }, 10);

        // Remove after delay
        setTimeout(() => {
          notification.style.transform = "translateX(100%)";
          setTimeout(() => {
            document.body.removeChild(notification);
          }, 300);
        }, 3000);
      }

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();

          const targetId = this.getAttribute("href");
          if (targetId === "#") return;

          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            // Close mobile menu if open
            if (mobileMenu.classList.contains("active")) {
              mobileMenu.classList.remove("active");
              document.body.classList.remove("menu-open");
            }

            // Smooth scroll to target
            window.scrollTo({
              top: targetElement.offsetTop - 80, // Offset for header
              behavior: "smooth",
            });

            // Update URL without reloading
            history.pushState(null, null, targetId);
          }
        });
      });

      // Lazy loading for images
      const lazyImages = document.querySelectorAll("img");

      const lazyLoadObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const img = entry.target;
              if (img.getAttribute("data-src")) {
                img.src = img.getAttribute("data-src");
                img.removeAttribute("data-src");
              }
              observer.unobserve(img);
            }
          });
        },
        {
          rootMargin: "100px",
          threshold: 0.1,
        }
      );

      lazyImages.forEach((image) => {
        if (image.src) {
          image.setAttribute("data-src", image.src);
          image.src =
            "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="; // Transparent placeholder
          lazyLoadObserver.observe(image);
        }
      });

      // Add active menu item highlighting
      function setActiveMenuItem() {
        const scrollPosition = window.scrollY;

        // Get all sections and corresponding menu items
        const sections = document.querySelectorAll(".w-full.max-w-[1920px]");
        const menuItems = document.querySelectorAll("header nav a");

        sections.forEach((section, index) => {
          const sectionTop = section.offsetTop - 100;
          const sectionBottom = sectionTop + section.offsetHeight;

          if (
            scrollPosition >= sectionTop &&
            scrollPosition < sectionBottom
          ) {
            // Remove active class from all menu items
            menuItems.forEach((item) => {
              item.classList.remove("text-[#f3274c]");
            });

            // Add active class to corresponding menu item
            if (menuItems[index]) {
              menuItems[index].classList.add("text-[#f3274c]");
            }
          }
        });
      }

      window.addEventListener("scroll", setActiveMenuItem);
      setActiveMenuItem();

      // Add interactive counter for item quantities
      const addButtons = document.querySelectorAll(
        ".bg-[#f3274c].text-white.text-xs.rounded-full"
      );

      addButtons.forEach((button) => {
        // Create counter elements
        const counterContainer = document.createElement("div");
        counterContainer.className =
          "flex items-center justify-between mt-2 opacity-0 h-0 overflow-hidden transition-all duration-300";

        const decreaseBtn = document.createElement("button");
        decreaseBtn.className =
          "bg-gray-200 text-gray-700 w-6 h-6 rounded-full flex items-center justify-center";
        decreaseBtn.textContent = "-";

        const countEl = document.createElement("span");
        countEl.className = "text-gray-700 mx-2";
        countEl.textContent = "1";

        const increaseBtn = document.createElement("button");
        increaseBtn.className =
          "bg-gray-200 text-gray-700 w-6 h-6 rounded-full flex items-center justify-center";
        increaseBtn.textContent = "+";

        counterContainer.appendChild(decreaseBtn);
        counterContainer.appendChild(countEl);
        counterContainer.appendChild(increaseBtn);

        // Add counter after button
        const parentDiv = button.closest(
          ".flex.justify-between.items-center"
        );
        if (parentDiv) {
          parentDiv.parentNode.insertBefore(
            counterContainer,
            parentDiv.nextSibling
          );
        }

        // Toggle counter visibility on button click
        button.addEventListener("click", function () {
          const isVisible =
            counterContainer.classList.contains("opacity-100");

          if (!isVisible) {
            counterContainer.style.height = "auto";
            counterContainer.classList.add("opacity-100");
            counterContainer.classList.add("mt-4");
          }

          // Add event listeners for counter buttons
          increaseBtn.addEventListener("click", function () {
            let count = parseInt(countEl.textContent);
            countEl.textContent = count + 1;
          });

          decreaseBtn.addEventListener("click", function () {
            let count = parseInt(countEl.textContent);
            if (count > 1) {
              countEl.textContent = count - 1;
            } else {
              // Hide counter if count goes to 0
              counterContainer.classList.remove("opacity-100");
              counterContainer.classList.remove("mt-4");
              setTimeout(() => {
                counterContainer.style.height = "0";
              }, 300);
            }
          });
        });
      });

      // Add scroll-to-top functionality for the floating button
      const scrollToTopButton = document.getElementById("scrollToTopButton");

      // Initially hide the button when at the top
      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 300) {
          scrollToTopButton.style.opacity = "1";
        } else {
          scrollToTopButton.style.opacity = "0";
        }
      });

      // Hide button initially if at top
      if (window.pageYOffset <= 300) {
        scrollToTopButton.style.opacity = "0";
      }

      // Add click event to scroll to top
      scrollToTopButton.addEventListener("click", function () {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    });

    function toggleFAQ(button) {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('svg');
        const allAnswers = document.querySelectorAll('.faq-answer');
        const allIcons = document.querySelectorAll('.transform.transition-transform');

        // Close all other answers
        allAnswers.forEach(item => {
          if (item !== answer) {
            item.classList.remove('active');
            item.classList.add('hidden');
          }
        });

        // Reset all icons
        allIcons.forEach(item => {
          if (item !== icon) {
            item.style.transform = 'rotate(0deg)';
          }
        });

        // Toggle current answer
        answer.classList.toggle('hidden');
        answer.classList.toggle('active');
        
        // Toggle icon rotation
        if (answer.classList.contains('active')) {
          icon.style.transform = 'rotate(180deg)';
        } else {
          icon.style.transform = 'rotate(0deg)';
        }
      }

  </script>

  <!-- Styles -->
  <style>
    // ... (Existing CSS styles) ...
    @keyframes scroll {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-100%);
      }
    }

    .animate-scroll {
      animation: scroll 20s linear infinite;
    }

    /* FAQ Section Animations */
.flex.items-start {
  transition: all 0.3s ease;
}

.flex.items-start:hover {
  transform: translateX(10px);
  background: white;
  padding: 0.5rem 1rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.flex.items-start:hover svg {
  transform: scale(1.2);
}

/* Icon Animation */
.flex.items-start svg {
  transition: all 0.3s ease;
}

/* Background Icon Animation */
@keyframes float {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
  100% {
    transform: translateY(0px);
  }
}

.absolute.right-0.top-0 {
  animation: float 6s ease-in-out infinite;
}

/* Floating animation for decorative elements */
@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0px); }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

/* Gradient line animation */
.bg-gray-200 {
  background: linear-gradient(to bottom, #e5e7eb 45%, #10B981 45%, #10B981 55%, #e5e7eb 55%);
  background-size: 100% 20px;
  animation: moveStripes 1s linear infinite;
}

@keyframes moveStripes {
  0% { background-position: 0 0; }
  100% { background-position: 0 20px; }
}

/* Card hover effects */
.rounded-xl {
  transition: all 0.3s ease;
}

.rounded-xl:hover {
  transform: translateY(-5px) scale(1.02);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Image container hover effects */
.rounded-full {
  transition: all 0.3s ease;
}

.rounded-full:hover {
  transform: scale(1.05);
}

/* Number hover effect */
.inline-block {
  transition: all 0.3s ease;
}

.inline-block:hover {
  transform: rotate(10deg) scale(1.1);
}

/* Checkmark animation */
.text-green-500 {
  transition: all 0.2s ease;
}

li:hover .text-green-500 {
  transform: scale(1.2) rotate(5deg);
}

 /* FAQ Animations and Styles */
 .faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease-out;
    opacity: 0;
    transform: translateY(-10px);
  }

  .faq-answer.active {
    max-height: 500px;
    opacity: 1;
    transform: translateY(0);
    transition: all 0.5s ease-in;
  }

  .bg-white.rounded-lg {
    transition: all 0.3s ease;
  }

  .bg-white.rounded-lg:hover {
    transform: translateX(10px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .transform.transition-transform {
    transition: transform 0.3s ease;
  }

  button[aria-expanded="true"] svg {
    transform: rotate(180deg);
  }

  /* FAQ Item hover effect */
  .bg-white.rounded-lg.shadow-sm {
    border-left: 4px solid transparent;
    transition: all 0.3s ease;
  }

  .bg-white.rounded-lg.shadow-sm:hover {
    border-left-color: #10B981;
  }

  /* Active FAQ state */
  .bg-white.rounded-lg.shadow-sm.active {
    border-left-color: #10B981;
    background-color: #fafafa;
  }
  /* Sticky header */
  .header-sticky {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    /* Cart animation */
    .added-to-cart {
      animation: pulse 0.7s ease-in-out;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Section fade in */
    .fade-in-section {
      animation: fadeIn 0.8s ease-out forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0.7;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Menu open body state */
    body.menu-open {
      overflow: hidden;
    }

    /* Smooth transitions */
    a,
    button,
    .bg-\[\#f3274c\],
    .bg-\[\#ffc222\] {
      transition: all 0.2s ease-in-out;
    }

    a:hover,
    button:hover {
      opacity: 0.85;
    }

    /* Product Item Hover Effects */
    .bg-white.rounded-lg.shadow-md {
      transition: all 0.3s ease;
    }

    .bg-white.rounded-lg.shadow-md:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Category Item Hover Effects */
    .border-solid.border-\[\#e5e5e5\].border-r.border-b {
      transition: all 0.3s ease;
    }

    .border-solid.border-\[\#e5e5e5\].border-r.border-b:hover {
      background-color: rgba(243, 39, 76, 0.03);
      transform: translateY(-5px);
    }

    /* Testimonial Item Hover */
    .bg-white.p-4.sm\:p-6.rounded-lg.shadow-sm {
      transition: all 0.3s ease;
    }

    .bg-white.p-4.sm\:p-6.rounded-lg.shadow-sm:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
    }

    /* Discount Card Hover */
    .bg-\[\#f8f8f8\].rounded-lg.p-4.md\:p-6 {
      transition: all 0.3s ease;
      overflow: hidden;
      position: relative;
    }

    .bg-\[\#f8f8f8\].rounded-lg.p-4.md\:p-6:hover {
      background-color: #f1f1f1;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.05);
    }

    .bg-\[\#f8f8f8\].rounded-lg.p-4.md\:p-6:hover::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: linear-gradient(to right, #f3274c, #ffc222);
    }

    /* Button Hover Effects */
    .bg-\[\#f3274c\].rounded-md {
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .bg-\[\#f3274c\].rounded-md:hover {
      background-color: #e01c40 !important;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(243, 39, 76, 0.3);
    }

    .bg-\[\#f3274c\].rounded-md:active {
      transform: translateY(0);
    }

    /* Add to cart button hover */
    .bg-\[\#f3274c\].text-white.text-xs.rounded-full {
      transition: all 0.3s ease;
    }

    .bg-\[\#f3274c\].text-white.text-xs.rounded-full:hover {
      transform: rotate(90deg) scale(1.1);
      background-color: #e01c40 !important;
    }

    /* Images hover effects */
    .w-full.h-\[200px\].object-cover {
      transition: all 0.5s ease;
    }

    .bg-white.rounded-lg.shadow-md:hover .w-full.h-\[200px\].object-cover {
      transform: scale(1.05);
    }

    /* Price tag hover effect */
    .text-\[\#f3274c\].font-\[\'Nunito-Bold\'\,_sans-serif\].text-base.font-bold {
      transition: all 0.3s ease;
    }

    .bg-white.rounded-lg.shadow-md:hover .text-\[\#f3274c\].font-\[\'Nunito-Bold\'\,_sans-serif\].text-base.font-bold {
      transform: scale(1.1);
    }

/* Footer Styles */
footer {
  background: linear-gradient(to right, #1a1a1a, #2d2d2d);
  border-top: 3px solid #007a4a;
}

footer .grid {
  gap: 2rem;
}

/* Footer Links Container */
footer .footer-links {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 2rem;
}

/* Footer Link Styles */
footer a.text-gray-400 {
  transition: all 0.3s ease;
  display: inline-block;
  position: relative;
  padding-left: 0;
}

footer a.text-gray-400:hover {
  color: #007a4a !important;
  transform: translateX(5px);
}

/* Footer Social Icons */
footer .social-icons {
  display: flex;
  gap: 1rem;
}

footer .social-icons a {
  background: #007a4a;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

footer .social-icons a:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 122, 74, 0.4);
}

/* Footer Bottom Border */
footer .border-t {
  border-color: rgba(255, 255, 255, 0.1);
}

/* Footer Section Titles */
footer .section-title {
  color: white;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 1.5rem;
  position: relative;
}

footer .section-title::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -8px;
  width: 40px;
  height: 3px;
  background: #007a4a;
}

    /* Food category image hover effects */
    .border-solid.border-\[\#e5e5e5\].border-r.border-b img {
      transition: transform 0.4s ease, filter 0.4s ease;
      filter: brightness(0.98);
    }

    .border-solid.border-\[\#e5e5e5\].border-r.border-b:hover img {
      transform: scale(1.08) rotate(2deg);
      filter: brightness(1.05);
    }

    /* Food category price hover effects */
    .text-\[\#f3274c\].text-center.font-\[\'Nunito-Bold\'\,_sans-serif\].text-sm.leading-6.font-bold.mb-2 {
      transition: all 0.3s ease;
    }

    .border-solid.border-\[\#e5e5e5\].border-r.border-b:hover .text-\[\#f3274c\].text-center.font-\[\'Nunito-Bold\'\,_sans-serif\].text-sm.leading-6.font-bold.mb-2 {
      transform: scale(1.05);
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    /* Header navigation items hover effects */
    header nav a.text-\[\#212121\] {
      position: relative;
      transition: all 0.3s ease;
    }

    header nav a.text-\[\#212121\]::after {
      content: "";
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: #10d76a;
      transition: width 0.3s ease;
    }

    header nav a.text-\[\#212121\]:hover {
      color: #10d76a !important;
    }

    header nav a.text-\[\#212121\]:hover::after {
      width: 100%;
    }

    /* Contact us button hover effect */
    .bg-\[\#ffc222\].rounded-\[7px\] {
      transition: all 0.3s ease;
      overflow: hidden;
      position: relative;
      z-index: 1;
    }

    .bg-\[\#ffc222\].rounded-\[7px\]::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, #f3274c, #ffc222);
      transition: all 0.4s ease;
      z-index: -1;
    }

    .bg-\[\#ffc222\].rounded-\[7px\]:hover::before {
      left: 0;
    }

    .bg-\[\#ffc222\].rounded-\[7px\]:hover {
      box-shadow: 0 4px 10px rgba(255, 194, 34, 0.4);
      transform: translateY(-3px);
    }

    /* Floating action button hover effect */
    .bg-\[\#007a4a\].w-10.h-10.sm\:w-11.sm\:h-\[51px\].fixed {
      transition: all 0.3s ease;
      opacity: 1;
      /* Will be controlled by JS */
    }

    .bg-\[\#007a4a\].w-10.h-10.sm\:w-11.sm\:h-\[51px\].fixed:hover {
      transform: scale(1.1);
      box-shadow: 0 5px 15px rgba(0, 122, 74, 0.4);
    }

    /* View all menu button hover effect */
    .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md {
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 0;
      background-color: rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      z-index: -1;
    }

    .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md:hover::after {
      height: 100%;
    }

    .inline-block.bg-\[\#f3274c\].text-white.font-medium.px-6.py-3.rounded-md:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(243, 39, 76, 0.3);
    }
  </style>
</body>

</html>
