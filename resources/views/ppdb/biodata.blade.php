@extends('layouts.dashboard')

@section('title', 'Biodata Siswa')

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
                    <h1 class="text-base sm:text-2xl font-semibold text-gray-800 truncate">Biodata Calon Siswa</h1>
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
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                        <div class="flex items-center">
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
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Biodata Siswa -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-4">
                            <div class="flex justify-center">
                                <div class="relative">
                                    @if($registration->pas_foto)
                                    <img src="{{ route('ppdb.download', ['type' => 'pas_foto', 'filename' => basename($registration->pas_foto)]) }}" 
                                         alt="Pas Foto" 
                                         class="rounded-full w-32 h-32 border-4 border-white shadow-lg object-cover">
                                    @else
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($registration->nama_lengkap) }}&size=150&background=ffffff&color=4f46e5" 
                                         alt="Pas Foto" 
                                         class="rounded-full w-32 h-32 border-4 border-white shadow-lg">
                                    @endif
                                </div>
                            </div>
                            <h2 class="text-white text-center mt-4 text-xl font-semibold">{{ $registration->nama_lengkap }}</h2>
                            <p class="text-blue-100 text-center text-sm">ID: {{ $registration->id }} | NISN: {{ $registration->nisn }}</p>
                        </div>
                        
                        <div class="p-6">
                            <div class="grid grid-cols-1 gap-6">
                                <!-- Personal Information -->
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        Informasi Pribadi
                                    </h3>
                                    <table class="min-w-full">
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Tempat, Tgl Lahir</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->tempat_lahir }}, {{ \Carbon\Carbon::parse($registration->tanggal_lahir)->format('d F Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Jenis Kelamin</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Agama</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->agama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Nomor HP</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->no_telepon }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Academic Information -->
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                        Informasi Akademik
                                    </h3>
                                    <table class="min-w-full">
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Asal Sekolah</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->asal_sekolah }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Tahun Lulus</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ date('Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Jurusan</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->jurusan->nama_jurusan }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 text-sm text-gray-600">Kartu PIP</td>
                                                <td class="py-3 text-sm font-medium text-gray-900">{{ $registration->kartu_pip ? 'Ya' : 'Tidak' }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kelengkapan Dokumen -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-teal-600 p-4">
                            <h3 class="text-lg font-medium text-white flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Kelengkapan Dokumen
                            </h3>
                        </div>
                        
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Document Items -->
                                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden divide-y divide-gray-200">
                                    <!-- Pas Foto -->
                                    <div class="p-4 hover:bg-gray-50">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="flex-shrink-0">
                                                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900">Pas Foto</p>
                                                    <p class="text-xs text-gray-500 truncate">{{ $registration->pas_foto ? basename($registration->pas_foto) : '-' }}</p>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                @if($registration->pas_foto)
                                                <a href="{{ route('ppdb.download', ['type' => 'pas_foto', 'filename' => basename($registration->pas_foto)]) }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                    Lihat
                                                </a>
                                                @else
                                                <span class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-500 bg-gray-100">Belum Diunggah</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Surat Keterangan Lulus -->
                                    <div class="p-4 hover:bg-gray-50">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="flex-shrink-0">
                                                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900">Surat Keterangan Lulus</p>
                                                    <p class="text-xs text-gray-500 truncate">{{ $registration->surat_lulus ? basename($registration->surat_lulus) : '-' }}</p>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                @if($registration->surat_lulus)
                                                <a href="{{ route('ppdb.download', ['type' => 'surat_lulus', 'filename' => basename($registration->surat_lulus)]) }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                    Lihat
                                                </a>
                                                @else
                                                <span class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-500 bg-gray-100">Belum Diunggah</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ijazah -->
                                    <div class="p-4 hover:bg-gray-50">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="flex-shrink-0">
                                                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900">Ijazah</p>
                                                    <p class="text-xs text-gray-500 truncate">{{ $registration->ijazah ? basename($registration->ijazah) : '-' }}</p>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                @if($registration->ijazah)
                                                <a href="{{ route('ppdb.download', ['type' => 'ijazah', 'filename' => basename($registration->ijazah)]) }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                                    Lihat
                                                </a>
                                                @else
                                                <span class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-500 bg-gray-100">Belum Diunggah</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Kartu Keluarga -->
                                    <div class="p-4 hover:bg-gray-50">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="flex-shrink-0">
                                                    <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900">Kartu Keluarga</p>
                                                    <p class="text-xs text-gray-500 truncate">{{ $registration->kartu_keluarga ? basename($registration->kartu_keluarga) : '-' }}</p>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                @if($registration->kartu_keluarga)
                                                <a href="{{ route('ppdb.download', ['type' => 'kartu_keluarga', 'filename' => basename($registration->kartu_keluarga)]) }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                                    Lihat
                                                </a>
                                                @else
                                                <span class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-500 bg-gray-100">Belum Diunggah</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Akte Kelahiran -->
                                    <div class="p-4 hover:bg-gray-50">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="flex-shrink-0">
                                                    <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900">Akte Kelahiran</p>
                                                    <p class="text-xs text-gray-500 truncate">{{ $registration->akte_kelahiran ? basename($registration->akte_kelahiran) : '-' }}</p>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                @if($registration->akte_kelahiran)
                                                <a href="{{ route('ppdb.download', ['type' => 'akte_kelahiran', 'filename' => basename($registration->akte_kelahiran)]) }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                    Lihat
                                                </a>
                                                @else
                                                <span class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-500 bg-gray-100">Belum Diunggah</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bukti Pembayaran Daftar Ulang -->
                                <div class="bg-white rounded-lg border border-gray-200 p-4">
                                    <h4 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Bukti Pembayaran Daftar Ulang
                                    </h4>
                                    <div class="flex items-center justify-between bg-red-50 p-4 rounded-lg">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span class="ml-3 text-sm text-red-600">Anda belum melakukan daftar ulang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection 