<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-900 text-white">
        <div class="flex items-center p-4 border-b border-gray-800">
            <img src="{{ asset('img/logosmkn3palu.png') }}" alt="Logo" class="w-10 h-10 mr-3">
            <div>
                <h1 class="font-bold text-xl">PPDB</h1>
                <p class="text-xs text-gray-400">SMK NEGERI 3 PAALU</p>
            </div>
        </div>
        
        
        <nav class="mt-6">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 border-l-4 border-green-500' : 'hover:bg-gray-800' }} transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Beranda
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Calon siswa
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                Status
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Daftar ulang
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Siswa
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Kelas
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                FAQ
            </a>
        </nav>
        
        <div class="absolute bottom-0 w-64 p-4 text-xs text-gray-400">
            Copyright © 2025 Ali Mochtar Development System
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Navigation -->
        <header class="flex justify-between items-center p-4 bg-white border-b">
            <button class="text-gray-500 focus:outline-none">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            
            <div class="flex items-center">
                <span id="current-time" class="mr-2 text-gray-700 font-medium">{{ date('H:i:s') }}</span>
                <span class="mr-4 text-gray-700">|</span>
                <span id="current-date" class="mr-8 text-gray-700">{{ date('l, d F Y') }}</span>
                
                <div class="relative">
                    <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
                        <span class="mr-2 text-gray-700">{{ Auth::user()->name }}</span>
                        <svg class="h-4 w-4 text-gray-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <img class="h-8 w-8 rounded-full ml-2" src="https://ui-avatars.com/api/?name={{urlencode(Auth::user()->name)}}&background=random" alt="Profile">
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Profile
                            </div>
                        </a>
                        <div class="border-t border-gray-100"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <div class="flex items-center text-red-600">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Logout
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Content -->
        <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
            @yield('content')
        </main>
    </div>
    
    <!-- Scripts -->
    <script>
        // Dropdown toggle function
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }
        
        // Close dropdown when clicking outside
        window.addEventListener('click', function(e) {
            const dropdown = document.getElementById('profileDropdown');
            const button = document.querySelector('button[onclick="toggleDropdown()"]');
            
            if (dropdown && !dropdown.contains(e.target) && !button.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
        
        // Update time
        function updateTime() {
            const now = new Date();
            
            // Format time: HH:MM:SS
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds}`;
            
            // Format date: Weekday, DD Month YYYY
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('current-date').textContent = now.toLocaleDateString('id-ID', options);
            
            setTimeout(updateTime, 1000);
        }
        
        // Run when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            updateTime();
            
            // Add active class to current menu item
            const currentPath = window.location.pathname;
            const menuItems = document.querySelectorAll('nav a');
            menuItems.forEach(item => {
                if (item.getAttribute('href') === currentPath) {
                    item.classList.add('bg-gray-800', 'border-l-4', 'border-green-500');
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html> 