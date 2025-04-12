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

  /* Responsive Adjustments for Logo Slider */
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

  /* Images hover effects */
  .w-full.h-\[200px\].object-cover {
    transition: all 0.5s ease;
  }

  .bg-white.rounded-lg.shadow-md:hover .w-full.h-\[200px\].object-cover {
    transform: scale(1.05);
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

  /* Button hover effects for requirements section */
  .inline-block.bg-green-500 {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .inline-block.bg-green-500::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: all 0.6s;
  }

  .inline-block.bg-green-500:hover::before {
    left: 100%;
  }

  .inline-block.bg-green-500:hover {
    background-color: #0D9668 !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.3);
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
  }

  .bg-\[\#007a4a\].w-10.h-10.sm\:w-11.sm\:h-\[51px\].fixed:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(0, 122, 74, 0.4);
  }

  /* Number hover effect */
  .inline-block.bg-green-100,
  .inline-block.bg-purple-100,
  .inline-block.bg-orange-100,
  .inline-block.bg-red-100 {
    transition: all 0.3s ease;
  }

  .inline-block:hover.bg-green-100,
  .inline-block:hover.bg-purple-100,
  .inline-block:hover.bg-orange-100,
  .inline-block:hover.bg-red-100 {
    transform: rotate(10deg) scale(1.1);
  }

  /* Scroll to top button additional effects */
  #scrollToTopButton {
    transition: all 0.3s ease;
  }

  #scrollToTopButton:hover {
    background-color: #10B981;
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
  }

  #scrollToTopButton:hover img {
    transform: scale(1.2);
  }

  #scrollToTopButton img {
    transition: all 0.3s ease;
  }
</style> 