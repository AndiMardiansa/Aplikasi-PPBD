@extends('layouts.dashboard')

@section('title', 'Edit Profile')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed w-64 h-screen bg-[#121636] text-white">
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

    <div class="absolute bottom-0 w-64 p-4 text-xs text-gray-400">
      Copyright © 2025 SMKN 3 Palu
  </div>

    <!-- Main Content -->
    <div class="ml-64 flex-1 flex flex-col min-h-screen">
        <!-- Top Header -->
        <header class="flex justify-between items-center p-4 bg-white border-b">
            <div class="flex items-center">
                <button class="text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                        <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <h1 class="text-2xl font-semibold text-gray-800 ml-4">Edit Profile</h1>
            </div>
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center text-gray-600 hover:text-gray-800">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    KEMBALI
                </a>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
            <div class="container mx-auto px-6 py-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center space-x-6 mb-8">
                            <div class="bg-red-200 rounded-full w-20 h-20 flex items-center justify-center text-3xl text-red-600 font-bold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                                <p class="text-gray-600">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <!-- Profile Information -->
                            <div>
                                @if (session('status') === 'profile-updated')
                                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                                        Profile berhasil diperbarui.
                                    </div>
                                @endif

                                @if ($errors->has('name') || $errors->has('email'))
                                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                                        <ul class="list-disc list-inside">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="post" action="{{ route('user.profile.update') }}">
                                    @csrf
                                    @method('patch')

                                    <div class="grid gap-6">
                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Nama</label>
                                            <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm focus:outline-none focus:border-sky-500 @error('name') border-red-500 @enderror">
                                            @error('name')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Email</label>
                                            <input type="email" name="email" value="{{ old('email', $user->email) }}" 
                                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm focus:outline-none focus:border-sky-500 @error('email') border-red-500 @enderror">
                                            @error('email')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-6">
                                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Password Update -->
                            <div class="pt-6 border-t border-gray-200">
                                <h3 class="text-lg font-medium text-gray-900">
                                    Ubah Password
                                    <span class="text-sm font-normal text-gray-500">(opsional)</span>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    Kosongkan semua field password jika tidak ingin mengubah password
                                </p>

                                @if (session('status') === 'password-updated')
                                    <div class="mt-4 mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                                        Password berhasil diperbarui.
                                    </div>
                                @endif

                                @if ($errors->updatePassword->any())
                                    <div class="mt-4 mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                                        <ul class="list-disc list-inside">
                                            @foreach ($errors->updatePassword->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="post" action="{{ route('user.profile.password') }}" class="mt-6">
                                    @csrf
                                    @method('put')

                                    <div class="grid gap-6">
                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Password Saat Ini</label>
                                            <input type="password" name="current_password" 
                                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm focus:outline-none focus:border-sky-500 @error('current_password', 'updatePassword') border-red-500 @enderror">
                                            @error('current_password', 'updatePassword')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Password Baru</label>
                                            <input type="password" name="password" 
                                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm focus:outline-none focus:border-sky-500 @error('password', 'updatePassword') border-red-500 @enderror">
                                            @error('password', 'updatePassword')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="text-sm font-medium text-gray-700">Konfirmasi Password Baru</label>
                                            <input type="password" name="password_confirmation" 
                                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm focus:outline-none focus:border-sky-500">
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-6">
                                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                            Simpan Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection 