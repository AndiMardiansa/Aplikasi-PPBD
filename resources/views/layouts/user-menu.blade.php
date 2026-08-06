<!-- Mobile overlay -->
<div x-cloak class="fixed inset-0 z-30 bg-black bg-opacity-50 md:hidden transition-opacity duration-300"
     :class="$store.sidebar.open ? 'opacity-100' : 'opacity-0 pointer-events-none'"
     @click="$store.sidebar.open = false"></div>

<!-- Sidebar -->
<div class="fixed inset-y-0 left-0 z-40 w-64 bg-[#121636] text-white flex flex-col transition-transform duration-300 md:translate-x-0"
     :class="$store.sidebar.open ? 'translate-x-0' : '-translate-x-full'">
    <!-- Logo -->
    <div class="p-4 flex items-center border-b border-gray-700">
        <div class="mr-3">
            <img src="{{ asset('img/logosmkn3palu.png') }}" alt="Logo" class="h-10 w-10">
        </div>
        <div>
            <div class="text-xl font-semibold">PPDB</div>
            <div class="text-xs opacity-70">SMK NEGERI 3 PAALU</div>
        </div>
    </div>

    <!-- Daftar Button -->
    <div class="p-4">
        <a href="{{ route('register.ppdb') }}" class="flex items-center justify-center bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Daftar
        </a>
    </div>

    <!-- Menu Items -->
    <nav class="flex-1 overflow-y-auto">
        <ul class="py-4">
            <li>
                <a href="{{ route('home') }}" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300 {{ request()->routeIs('home') ? 'bg-gray-800' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('ppdb.calon-siswa') }}" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300 {{ request()->routeIs('ppdb.calon-siswa') ? 'bg-gray-800' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    Calon siswa
                </a>
            </li>
            <li>
                <a href="{{ route('ppdb.biodata') }}" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300 {{ request()->routeIs('ppdb.biodata') ? 'bg-gray-800' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    Biodata
                </a>
            </li>
            <li>
                <a href="{{ route('ppdb.details') }}" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300 {{ request()->routeIs('ppdb.status') ? 'bg-gray-800' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                    Status
                </a>
            </li>
            <li>
                <a href="{{ route('ppdb.daftar-ulang') }}" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300 {{ request()->routeIs('ppdb.daftar-ulang') ? 'bg-gray-800' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Daftar ulang
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                    Notifikasi
                </a>
            </li>
        </ul>
    </nav>
    <div class="p-4 text-xs text-gray-400 border-t border-gray-700">
        Copyright © 2025 SMKN 3 Palu
    </div>
</div> 