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