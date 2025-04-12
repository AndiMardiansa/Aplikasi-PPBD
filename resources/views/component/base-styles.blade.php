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

  /* General Animations */
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }

  .animate-float {
    animation: float 3s ease-in-out infinite;
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  @keyframes fadeIn {
    from { opacity: 0.7; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* Basic Transitions */
  a, button, .bg-\[\#f3274c\], .bg-\[\#ffc222\] {
    transition: all 0.2s ease-in-out;
  }

  a:hover, button:hover {
    opacity: 0.85;
  }
</style> 