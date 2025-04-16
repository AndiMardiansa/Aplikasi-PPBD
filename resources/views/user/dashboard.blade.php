@extends('layouts.dashboard')

@section('title', 'Dashboard PPDB - SMK NEGERI 3 PALU')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-[#121636] text-white flex flex-col">
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
                    <a href="{{ route('home') }}" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        Calon siswa
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                        Biodata
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                        Status
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-gray-800 transition-all duration-300">
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
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden main-content">
        <!-- Top Header -->
        <header class="bg-white shadow-sm z-10">
            <div class="flex items-center justify-between h-16 px-6">
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard Calon Siswa</h1>
                <div class="flex items-center">
                    <div class="ml-4 relative flex items-center">
                        <div class="text-right mr-4">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center focus:outline-none">
                                <img class="h-10 w-10 rounded-full bg-gray-300" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" alt="User avatar">
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="open" 
                                 @click.away="open = false"
                                 class="dropdown-content absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100 p-6">
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

<!-- PPDB Registration Notification Modal - Only show if not registered -->
@if (!$hasRegistered)
<div id="registrationModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center z-50">
    <div class="relative mx-auto p-8 md:p-5 bg-white w-11/12 md:w-1/2 shadow-lg rounded-md">
        <div class="text-center">
            <!-- Close button -->
            <button id="closeModal" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <h3 class="text-xl font-bold text-gray-900 mb-5">Pemberitahuan</h3>
            <p class="text-gray-600 my-4">
                Anda belum mendaftar sebagai Calon peserta Didik Baru SMK NEGERI 3 PALU.
            </p>
            <div class="mt-6">
                <a href="{{ route('register.ppdb') }}" class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
@endif

<script>
    // Modal behavior
    document.addEventListener('DOMContentLoaded', function() {
        const closeModalBtn = document.getElementById('closeModal');
        if (closeModalBtn) {
            closeModalBtn.addEventListener('click', function() {
                document.getElementById('registrationModal').style.display = 'none';
            });
        }
    });
</script>
@endsection 