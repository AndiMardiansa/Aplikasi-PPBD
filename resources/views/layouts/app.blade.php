<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./vars.css" />
    <link rel="stylesheet" href="./style.css" />
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com/3.2.0"></script>
    <script src="./tailwind.config.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Global Styles -->
    @include('component.font-styles')
    @include('component.base-styles')
    @include('component.header-styles')
    @include('component.component-styles')
    @include('component.section-styles')
    @include('component.faq-styles')
    @include('component.footer-styles')
    @include('component.form-styles')
    
    <title>@yield('title', 'PPDB SMK Negeri 3 Palu')</title>
</head>
<body>
    @include('component.nav')
    
    @yield('content')
    
    @include('component.footer')
    
    <!-- Floating Action Button -->
    <div id="scrollToTopButton" class="bg-[#007a4a] w-10 h-10 sm:w-11 sm:h-[51px] fixed right-3 bottom-3 sm:right-4 sm:bottom-4 md:right-8 md:bottom-6 flex items-center justify-center rounded-full shadow-lg z-40 cursor-pointer">
        <img class="w-4 h-4 sm:w-5 sm:h-5" src="icon68.svg" alt="Scroll to top" />
    </div>
    
    @include('component.scripts')
    @stack('scripts')
    
    <script>
        // Initialize animations when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof initAnimations === 'function') {
                initAnimations();
            }
        });
    </script>
</body>
</html>
