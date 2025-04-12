<style>
  /* Header/Navbar */
  .header-sticky {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  /* Header navigation items hover and active effects */
  header nav a, 
  nav a {
    position: relative;
    transition: all 0.3s ease;
    color: #212121;
  }

  header nav a::after,
  nav a::after {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #10d76a;
    transition: width 0.3s ease;
  }

  header nav a:hover,
  nav a:hover {
    color: #10d76a !important;
  }

  header nav a:hover::after,
  nav a:hover::after {
    width: 100%;
  }

  /* Active state for navbar items */
  header nav a.active,
  nav a.active {
    color: #10d76a !important;
  }

  header nav a.active::after,
  nav a.active::after {
    width: 100%;
    background-color: #10d76a;
  }

  /* Mobile menu link hover effects */
  #mobile-menu a {
    transition: all 0.3s ease;
  }

  #mobile-menu a:hover {
    background-color: rgba(16, 185, 129, 0.1);
    padding-left: 10px;
    color: #10B981;
  }

  /* Mobile menu button hover/active effects */
  #mobile-menu-button {
    transition: all 0.3s ease;
  }

  #mobile-menu-button:hover div {
    background-color: #10B981;
  }

  #mobile-menu-button:active {
    transform: scale(0.95);
  }

  /* Mobile menu active state */
  #mobile-menu a.active {
    color: #10d76a !important;
    background-color: rgba(16, 185, 129, 0.1);
    padding-left: 10px;
  }

  /* Mobile menu login/register buttons hover effects */
  #mobile-menu div.hover\:bg-\[\#212121\],
  #mobile-menu div.bg-green-500 {
    transition: all 0.3s ease;
  }

  #mobile-menu div.hover\:bg-\[\#212121\]:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }

  #mobile-menu div.bg-green-500:hover {
    transform: translateY(-2px);
    background-color: #0D9668 !important;
    box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
  }

  /* Menu open body state */
  body.menu-open {
    overflow: hidden;
  }
</style> 