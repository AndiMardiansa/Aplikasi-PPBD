@extends('layouts.app')

@section('title', 'Login - PPDB SMK Negeri 3 Palu')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 mt-16">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-[#f3274c] to-[#ffae22] py-6 px-6">
            <div class="flex justify-center">
                <img src="{{ asset('img/logosmkn3palu.png') }}" alt="SMKN 3 Palu Logo" class="h-20 w-auto">
            </div>
            <h2 class="mt-4 text-center text-3xl font-extrabold text-white">
                Login ke PPDB
            </h2>
            <p class="mt-2 text-center text-sm text-white opacity-80">
                SMK Negeri 3 Palu
            </p>
        </div>
        
        <div class="p-8">
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            <form class="space-y-6" action="{{ route('login.post') }}" method="POST">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] transition-all duration-300">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required 
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] transition-all duration-300">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" 
                            class="h-4 w-4 text-[#f3274c] focus:ring-[#f3274c] border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                            Ingat saya
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#f3274c] hover:text-[#ffae22] transition-all duration-300">
                            Lupa password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-gradient-to-r from-[#f3274c] to-[#ffae22] hover:from-[#e01c40] hover:to-[#f39c00] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#f3274c] transition-all duration-300 transform hover:scale-105">
                        Login
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Belum punya akun? 
                    <a href="#" class="font-medium text-[#f3274c] hover:text-[#ffae22] transition-all duration-300">
                        Daftar sekarang
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection 