@extends('layouts.dashboard')

@section('title', 'Dashboard PPDB - SMK NEGERI 3 PALU')

@section('content')
<div class="flex h-screen bg-gray-100" x-data>
    <!-- Include User Menu -->
    @include('layouts.user-menu')

    <!-- Main Content -->
    <div class="md:ml-64 flex-1 flex flex-col min-h-screen">
        <!-- Top Header -->
        <header class="bg-white shadow-sm z-10">
            <div class="flex items-center justify-between h-16 px-4 sm:px-6">
                <div class="flex items-center gap-2 min-w-0">
                    <button @click="$store.sidebar.open = true" type="button" class="md:hidden inline-flex items-center justify-center p-2 -ml-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h1 class="text-base sm:text-2xl font-semibold text-gray-800 truncate">Calon Peserta Didik Baru SMK NEGERI 3 PALU</h1>
                </div>
                <div class="flex items-center flex-shrink-0">
                    <div class="ml-4 relative flex items-center">
                        <div class="hidden sm:block text-right mr-4">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" 
                                    class="flex items-center focus:outline-none"
                                    type="button">
                                <img class="h-10 w-10 rounded-full bg-gray-300" 
                                     src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" 
                                     alt="User avatar">
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            
                            <!-- Dropdown menu -->
                            <div x-show="open" 
                                 @click.away="open = false"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <!-- Profile Link -->
                                <a href="{{ route('user.profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        Profile
                                    </div>
                                </a>
                                <div class="border-t border-gray-100"></div>
                                <!-- Logout Button -->
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
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100 p-4 sm:p-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-xl font-semibold mb-6 text-gray-700">Selamat Datang, {{ Auth::user()->name }}</h2>
                
                <!-- Status Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-medium text-gray-700">Status Pendaftaran</h3>
                                <p class="text-3xl font-bold mt-2 {{ $hasRegistered ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $hasRegistered ? 'Terdaftar' : 'Belum Terdaftar' }}
                                </p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-medium text-gray-700">Jurusan Dipilih</h3>
                                @if($hasRegistered && $registration->jurusan)
                                    <div class="mt-2">
                                        
                                        <p class="text-2xl font-bold text-gray-900">{{ $registration->jurusan->nama_jurusan }}</p>
                                    </div>
                                @else
                                    <p class="text-2xl font-bold mt-2 text-gray-400">-</p>
                                @endif
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-medium text-gray-700">Pengumuman</h3>
                                <p class="text-3xl font-bold mt-2 text-gray-800">Belum Ada</p>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Content Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="card bg-white rounded-lg shadow overflow-hidden col-span-2">
                        <div class="p-5 bg-gradient-to-r from-[#f3274c] to-[#ffae22] text-white">
                            <h3 class="text-lg font-medium">Panduan Pendaftaran PPDB</h3>
                        </div>
                        <div class="p-5">
                            <p class="text-gray-600 mb-4">Berikut ini adalah langkah-langkah pendaftaran PPDB online di SMK VIP Maarif NU 1 Kemiri:</p>
                            <ol class="list-decimal pl-5 space-y-2 text-gray-600">
                                <li>Daftar akun terlebih dahulu di website PPDB</li>
                                <li>Lengkapi formulir pendaftaran dengan data yang benar</li>
                                <li>Unggah dokumen persyaratan yang dibutuhkan</li>
                                <li>Konfirmasi pendaftaran melalui email</li>
                                <li>Pantau status pendaftaran melalui dashboard</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-5 bg-gradient-to-r from-[#f3274c] to-[#ffae22] text-white">
                            <h3 class="text-lg font-medium">Informasi Penting</h3>
                        </div>
                        <div class="p-5">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-600">Pendaftaran dibuka tanggal 1-30 Juni 2023</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-600">Pengumuman hasil seleksi tanggal 5 Juli 2023</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-600">Daftar ulang tanggal 6-10 Juli 2023</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@push('scripts')
<script>
    // Add any additional scripts here
</script>
@endpush
@endsection 