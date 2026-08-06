@extends('layouts.dashboard')

@section('title', 'Daftar Ulang')

@section('content')
<div class="flex h-screen bg-gray-100" x-data>
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
                    <h1 class="text-base sm:text-2xl font-semibold text-gray-800 truncate">Daftar Ulang</h1>
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
                                <a href="{{ route('user.profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
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
        <main class="flex-1 overflow-y-auto bg-gray-100">
            <div class="container mx-auto px-4 sm:px-6 py-6 sm:py-8">
                <!-- Info card -->
                <div class="bg-white shadow rounded-lg p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pendaftaran</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Nama Lengkap</p>
                            <p class="text-sm font-medium text-gray-900">{{ $registration->nama_lengkap }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">NISN</p>
                            <p class="text-sm font-medium text-gray-900">{{ $registration->nisn }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Jurusan</p>
                            <p class="text-sm font-medium text-gray-900">{{ $registration->jurusan->nama_jurusan ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Status Pendaftaran</p>
                            <p>
                                @if($registration->status === 'verified')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terverifikasi</span>
                                @elseif($registration->status === 'rejected')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Ditolak</span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Daftar ulang status card -->
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Status Daftar Ulang</h2>
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <div class="flex items-center gap-3">
                            <span class="relative flex h-4 w-4">
                                @if($registration->daftar_ulang === 'completed')
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                @endif
                                <span class="relative inline-flex rounded-full h-4 w-4
                                    {{ $registration->daftar_ulang === 'completed' ? 'bg-green-500' : ($registration->daftar_ulang === 'paid' ? 'bg-blue-500' : 'bg-amber-500') }}">
                                </span>
                            </span>
                            @if($registration->daftar_ulang === 'completed')
                                <span class="px-3 inline-flex text-sm leading-6 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                            @elseif($registration->daftar_ulang === 'paid')
                                <span class="px-3 inline-flex text-sm leading-6 font-semibold rounded-full bg-blue-100 text-blue-800">Sudah Bayar</span>
                            @else
                                <span class="px-3 inline-flex text-sm leading-6 font-semibold rounded-full bg-amber-100 text-amber-800">Belum Daftar Ulang</span>
                            @endif
                        </div>
                        <p class="text-sm text-gray-500">Status daftar ulang dikonfirmasi oleh pihak sekolah.</p>
                    </div>

                    @if($registration->status === 'verified')
                    <div class="mt-6 border-t border-gray-200 pt-6">
                        <h3 class="text-sm font-semibold text-gray-800 mb-3">Tahapan Daftar Ulang</h3>
                        <ol class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="flex items-center justify-center h-6 w-6 rounded-full bg-blue-500 text-white text-xs font-bold">1</span>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Pembayaran</p>
                                    <p class="text-sm text-gray-500">Lakukan pembayaran biaya daftar ulang sesuai ketentuan sekolah.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex items-center justify-center h-6 w-6 rounded-full bg-blue-500 text-white text-xs font-bold">2</span>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Konfirmasi ke Sekolah</p>
                                    <p class="text-sm text-gray-500">Datang ke sekolah untuk verifikasi berkas dan konfirmasi daftar ulang.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex items-center justify-center h-6 w-6 rounded-full {{ $registration->daftar_ulang === 'completed' ? 'bg-green-500' : 'bg-gray-300' }} text-white text-xs font-bold">3</span>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Selesai</p>
                                    <p class="text-sm text-gray-500">Status daftar ulang Anda akan diperbarui menjadi "Selesai".</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                    @else
                    <div class="mt-6 border-t border-gray-200 pt-6">
                        <p class="text-sm text-gray-500">
                            Daftar ulang hanya dapat dilakukan setelah status pendaftaran Anda <span class="font-semibold text-gray-800">Terverifikasi</span>.
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
