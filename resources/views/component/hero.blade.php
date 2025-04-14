<!-- Hero Section -->
<section id="beranda" class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center overflow-hidden" style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgeMb1qvTMpb7uAH23T4LAZzlj9a2HMk2OOwe2Q6x2L5TlcbvOfeE_rUZ0rg4RtqRmJDWBe-66fXuS8jF55NUk6M24e6Q2piGg4ZeuPGE1IvdXx3XfepQuWtVjWK8XSixVDaqjaaPquMmq_I0yC1Ks1oFxtXXQT09Zp2dHClHhFWM4y4dlj8FmzyyWq6Z9-/s1600/IMG-20240602-WA0004.jpg');">
  <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-black/80"></div>
  
  <!-- Animated particles -->
  <div class="particles absolute inset-0 z-0"></div>
  
  <div class="relative z-10 text-center px-6 md:px-12 max-w-3xl">
    <div class="hero-content animate-fade-in-up">
      <!-- Glowing badge -->
      <div class="inline-block px-4 py-1 rounded-full bg-gradient-to-r from-green-400 to-green-600 text-white text-sm font-medium tracking-wider mb-6 shadow-glow animate-pulse-slow">
        PPDB 2025/2026
      </div>
      
      <h1 class="text-5xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-white leading-tight drop-shadow-xl mb-4 animate-text">
        Penerimaan Peserta<br> Didik Baru
      </h1>
      
      <div class="w-24 h-1 bg-gradient-to-r from-green-400 via-green-500 to-green-400 mx-auto my-6 rounded-full"></div>
      
      <p class="mt-4 text-xl text-gray-200 drop-shadow-md font-medium tracking-wide typewriter">
        SMK NEGERI 3 PALU TA 2025/2026
      </p>
      
      <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
        <a href="{menu{ route('login') }}" class="hero-button relative overflow-hidden px-8 py-4 text-white bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 font-bold rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
          <span class="relative z-10">Daftar Sekarang</span>
          <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-green-400 to-green-600 rounded-lg blur opacity-0 group-hover:opacity-70 transition duration-1000 group-hover:duration-200 animate-pulse-slow"></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Tambahkan CSS untuk efek keren -->
<style>
  /* Animasi fade in untuk konten hero */
  .animate-fade-in-up {
    animation: fadeInUp 1.2s ease forwards;
  }
  
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(30px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Efek glowing shadow */
  .shadow-glow {
    box-shadow: 0 0 15px rgba(34, 197, 94, 0.6);
  }
  
  /* Animasi pulsing lambat */
  .animate-pulse-slow {
    animation: pulseSlow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
  }
  
  @keyframes pulseSlow {
    0%, 100% {
      opacity: 1;
    }
    50% {
      opacity: 0.8;
    }
  }
  
  /* Efek animasi gradient text */
  .animate-text {
    background-size: 200% auto;
    animation: textShine 3s linear infinite;
  }
  
  @keyframes textShine {
    0% {
      background-position: 0% center;
    }
    100% {
      background-position: 200% center;
    }
  }
  
  /* Efek typewriter untuk subtitle */
  .typewriter {
    overflow: hidden;
    border-right: 0.15em solid transparent;
    white-space: nowrap;
    margin: 0 auto;
    letter-spacing: 0.1em;
    animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
  }
  
  @keyframes typing {
    from { width: 0 }
    to { width: 100% }
  }
  
  @keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: #22c55e }
  }
  
  /* Efek particles */
  .particles {
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.3;
  }
  
  /* Efek hover untuk tombol daftar */
  .hero-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: 0.5s;
  }
  
  .hero-button:hover::before {
    left: 100%;
  }
</style> 