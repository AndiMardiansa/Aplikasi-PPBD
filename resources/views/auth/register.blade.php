@extends('layouts.app')

@section('title', 'Register - PPDB SMK Negeri 3 Palu')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 mt-16">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-[#f3274c] to-[#ffae22] py-6 px-6">
            <div class="flex justify-center">
                <img src="{{ asset('img/logosmkn3palu.png') }}" alt="SMKN 3 Palu Logo" class="h-20 w-auto">
            </div>
            <h2 class="mt-4 text-center text-3xl font-extrabold text-white">
                Daftar PPDB
            </h2>
            <p class="mt-2 text-center text-sm text-white opacity-80">
                SMK Negeri 3 Palu
            </p>
        </div>
        
        <div class="p-8">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="space-y-6" action="{{ route('register.post') }}" method="POST">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Nama Lengkap
                    </label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] transition-all duration-300">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] transition-all duration-300">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] transition-all duration-300">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                        Konfirmasi Password
                    </label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] transition-all duration-300">
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-gradient-to-r from-[#f3274c] to-[#ffae22] hover:from-[#e01c40] hover:to-[#f39c00] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#f3274c] transition-all duration-300 transform hover:scale-105">
                        Daftar
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Sudah punya akun? 
                    <a href="{{ route('login.show') }}" class="font-medium text-[#f3274c] hover:text-[#ffae22] transition-all duration-300">
                        Login sekarang
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection 