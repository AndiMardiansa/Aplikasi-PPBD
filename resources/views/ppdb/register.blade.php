@extends('layouts.app')

@section('title', 'Pendaftaran PPDB - SMK VIP Maarif NU 1 Kemiri')

@section('content')
<div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8 mt-16">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-[#f3274c] to-[#ffae22] py-6 px-6">
            <div class="flex justify-center">
                <img src="{{ asset('img/logosmkn3palu.png') }}" alt="SMKN 3 Palu Logo" class="h-20 w-auto">
            </div>
            <h2 class="mt-4 text-center text-3xl font-extrabold text-white">
                Pendaftaran Peserta Didik Baru
            </h2>
            <p class="mt-2 text-center text-sm text-white opacity-80">
                SMK VIP Maarif NU 1 Kemiri
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

            <form class="space-y-6" action="{{ route('register.ppdb.post') }}" method="POST">
                @csrf
                
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Data Pribadi</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">
                                Nama Lengkap
                            </label>
                            <div class="mt-1">
                                <input id="nama_lengkap" name="nama_lengkap" type="text" required value="{{ old('nama_lengkap') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="nisn" class="block text-sm font-medium text-gray-700">
                                NISN
                            </label>
                            <div class="mt-1">
                                <input id="nisn" name="nisn" type="text" required value="{{ old('nisn') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">
                                Tempat Lahir
                            </label>
                            <div class="mt-1">
                                <input id="tempat_lahir" name="tempat_lahir" type="text" required value="{{ old('tempat_lahir') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                                Tanggal Lahir
                            </label>
                            <div class="mt-1">
                                <input id="tanggal_lahir" name="tanggal_lahir" type="date" required value="{{ old('tanggal_lahir') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">
                                Jenis Kelamin
                            </label>
                            <div class="mt-1">
                                <select id="jenis_kelamin" name="jenis_kelamin" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="agama" class="block text-sm font-medium text-gray-700">
                                Agama
                            </label>
                            <div class="mt-1">
                                <select id="agama" name="agama" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">
                            Alamat Lengkap
                        </label>
                        <div class="mt-1">
                            <textarea id="alamat" name="alamat" rows="3" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">{{ old('alamat') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label for="no_telepon" class="block text-sm font-medium text-gray-700">
                                Nomor Telepon
                            </label>
                            <div class="mt-1">
                                <input id="no_telepon" name="no_telepon" type="text" required value="{{ old('no_telepon') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="asal_sekolah" class="block text-sm font-medium text-gray-700">
                                Asal Sekolah
                            </label>
                            <div class="mt-1">
                                <input id="asal_sekolah" name="asal_sekolah" type="text" required value="{{ old('asal_sekolah') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Data Orangtua/Wali</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ayah" class="block text-sm font-medium text-gray-700">
                                Nama Ayah
                            </label>
                            <div class="mt-1">
                                <input id="nama_ayah" name="nama_ayah" type="text" required value="{{ old('nama_ayah') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="nama_ibu" class="block text-sm font-medium text-gray-700">
                                Nama Ibu
                            </label>
                            <div class="mt-1">
                                <input id="nama_ibu" name="nama_ibu" type="text" required value="{{ old('nama_ibu') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700">
                                Pekerjaan Ayah
                            </label>
                            <div class="mt-1">
                                <input id="pekerjaan_ayah" name="pekerjaan_ayah" type="text" required value="{{ old('pekerjaan_ayah') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                        
                        <div>
                            <label for="pekerjaan_ibu" class="block text-sm font-medium text-gray-700">
                                Pekerjaan Ibu
                            </label>
                            <div class="mt-1">
                                <input id="pekerjaan_ibu" name="pekerjaan_ibu" type="text" required value="{{ old('pekerjaan_ibu') }}"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Pilihan Jurusan</h3>
                    
                    <div>
                        <label for="jurusan_id" class="block text-sm font-medium text-gray-700">
                            Jurusan Pilihan
                        </label>
                        <div class="mt-1">
                            <select id="jurusan_id" name="jurusan_id" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                                <option value="">Pilih Jurusan</option>
                                @foreach($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id }}" {{ old('jurusan_id') == $jurusan->id ? 'selected' : '' }}>
                                        {{ $jurusan->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-gradient-to-r from-[#f3274c] to-[#ffae22] hover:from-[#e01c40] hover:to-[#f39c00] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#f3274c] transition-all duration-300 transform hover:scale-105">
                        Daftar PPDB
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}" class="font-medium text-[#f3274c] hover:text-[#ffae22] transition-all duration-300">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 