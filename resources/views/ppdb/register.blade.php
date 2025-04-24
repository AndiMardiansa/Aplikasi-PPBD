{{-- @extends('layouts.app') --}}

@extends('layouts.dashboard')
@section('title', 'Pendaftaran PPDB - SMK NEGERI 3 PALU')

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
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="bg-white shadow-sm z-10">
            <div class="flex items-center justify-between h-16 px-6">
                <h1 class="text-2xl font-semibold text-gray-800">Pendaftaran PPDB</h1>
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
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
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
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb Navigation -->
                <div class="mb-8">
                    <div class="flex items-center space-x-2">
                        <span class="font-medium text-gray-500" id="step1">Biodata Siswa</span>
                        <span class="text-gray-500">&gt;</span>
                        <span class="font-medium text-gray-500" id="step2">Biodata Orangtua</span>
                        <span class="text-gray-500">&gt;</span>
                        <span class="font-medium text-gray-500" id="step3">Unggah Dokumen</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-[#f3274c] to-[#ffae22] py-6 px-6">
                        <div class="flex justify-center">
                            <img src="{{ asset('img/logosmkn3palu.png') }}" alt="SMKN 3 Palu Logo" class="h-20 w-auto">
                        </div>
                        <h2 class="mt-4 text-center text-3xl font-extrabold text-white">
                            Formulir Pendaftaran Peserta Didik Baru
                        </h2>
                        <p class="mt-2 text-center text-sm text-white opacity-80">
                            SMK NEGERI 3 PALU
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

                        <form id="registrationForm" class="space-y-6" action="{{ route('register.ppdb.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Step 1: Biodata Siswa -->
                            <div class="step-content" data-step="1">
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
                                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
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
                                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
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

                                    <div class="mt-4">
                                        <label for="jurusan_id" class="block text-sm font-medium text-gray-700">
                                            Pilihan Jurusan
                                        </label>
                                        <div class="mt-1">
                                            <select id="jurusan_id" name="jurusan_id" required
                                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#f3274c] focus:border-[#f3274c] sm:text-sm">
                                                <option value="">Pilih Jurusan</option>
                                                @foreach($jurusans as $j)
                                                    <option value="{{ $j->id }}" {{ old('jurusan_id') == $j->id ? 'selected' : '' }}>
                                                        {{ $j->nama_jurusan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Biodata Orangtua -->
                            <div class="step-content hidden" data-step="2">
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
                            </div>

                            <!-- Step 3: Unggah Dokumen -->
                            <div class="step-content" id="step3">
                                <h2 class="text-2xl font-bold mb-6">Unggah Dokumen</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Pas Foto -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-medium text-gray-700">Pas Foto</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="file" name="pas_foto" id="pas_foto" accept="image/*" class="hidden" required>
                                            <label for="pas_foto" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Pilih File
                                            </label>
                                            <span id="pas_foto_name" class="ml-3 text-sm text-gray-500">Belum ada file dipilih</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Format: JPG/PNG, Maksimal 2MB</p>
                                    </div>

                                    <!-- Surat Keterangan LULUS -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-medium text-gray-700">Surat Keterangan LULUS</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="file" name="surat_keterangan_lulus" id="surat_keterangan_lulus" accept=".pdf,.doc,.docx" class="hidden" required>
                                            <label for="surat_keterangan_lulus" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Pilih File
                                            </label>
                                            <span id="surat_keterangan_lulus_name" class="ml-3 text-sm text-gray-500">Belum ada file dipilih</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Format: PDF/DOC, Maksimal 5MB</p>
                                    </div>

                                    <!-- Ijazah -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-medium text-gray-700">Ijazah</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="file" name="ijazah" id="ijazah" accept=".pdf,.doc,.docx" class="hidden" required>
                                            <label for="ijazah" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Pilih File
                                            </label>
                                            <span id="ijazah_name" class="ml-3 text-sm text-gray-500">Belum ada file dipilih</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Format: PDF/DOC, Maksimal 5MB</p>
                                    </div>

                                    <!-- Kartu Keluarga -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-medium text-gray-700">Kartu Keluarga</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="file" name="kartu_keluarga" id="kartu_keluarga" accept=".pdf,.doc,.docx" class="hidden" required>
                                            <label for="kartu_keluarga" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Pilih File
                                            </label>
                                            <span id="kartu_keluarga_name" class="ml-3 text-sm text-gray-500">Belum ada file dipilih</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Format: PDF/DOC, Maksimal 5MB</p>
                                    </div>

                                    <!-- Akte Kelahiran -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-medium text-gray-700">Akte Kelahiran</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="file" name="akte_kelahiran" id="akte_kelahiran" accept=".pdf,.doc,.docx" class="hidden" required>
                                            <label for="akte_kelahiran" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Pilih File
                                            </label>
                                            <span id="akte_kelahiran_name" class="ml-3 text-sm text-gray-500">Belum ada file dipilih</span>
                                        </div>
                                        <p class="text-xs text-gray-500">Format: PDF/DOC, Maksimal 5MB</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="flex justify-between mt-6">
                                <button type="button" id="prevBtn" onclick="prevStep()" class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Sebelumnya</button>
                                <button type="button" id="nextBtn" onclick="nextStep()" class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Selanjutnya</button>
                                <button type="submit" id="submitBtn" class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 hidden">Daftar PPDB</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@push('styles')
<style>
    /* Styling untuk dropdown */
    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    
    select:focus {
        border-color: #f3274c;
        outline: none;
        box-shadow: 0 0 0 2px rgba(243, 39, 76, 0.2);
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let currentStep = 1;
    const totalSteps = 3;

    function updateBreadcrumb() {
        // Reset all steps to inactive
        for (let i = 1; i <= totalSteps; i++) {
            document.getElementById(`step${i}`).classList.remove('text-green-500');
            document.getElementById(`step${i}`).classList.add('text-gray-500');
        }
        
        // Set current step as active
        document.getElementById(`step${currentStep}`).classList.remove('text-gray-500');
        document.getElementById(`step${currentStep}`).classList.add('text-green-500');
        
        // Set completed steps as greenstatus
        for (let i = 1; i < currentStep; i++) {
            document.getElementById(`step${i}`).classList.remove('text-gray-500');
            document.getElementById(`step${i}`).classList.add('text-green-500');
        }
    }

    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.step-content').forEach(el => el.classList.add('hidden'));
        
        // Show current step
        document.querySelector(`.step-content[data-step="${step}"]`).classList.remove('hidden');
        
        // Update buttons
        document.getElementById('prevBtn').style.display = step === 1 ? 'none' : 'block';
        document.getElementById('nextBtn').style.display = step === totalSteps ? 'none' : 'block';
        document.getElementById('submitBtn').style.display = step === totalSteps ? 'block' : 'none';
        
        // Update breadcrumb
        currentStep = step;
        updateBreadcrumb();
    }

    function validateStep(step) {
        const stepContent = document.querySelector(`.step-content[data-step="${step}"]`);
        const requiredFields = stepContent.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;
        let emptyFields = [];

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('border-red-500');
                // Get the field label
                const label = field.previousElementSibling ? 
                             field.previousElementSibling.textContent.trim() : 
                             field.getAttribute('name');
                emptyFields.push(label);
            } else {
                field.classList.remove('border-red-500');
            }
        });

        if (!isValid) {
            Swal.fire({
                title: 'Mohon Lengkapi Data',
                // html: `Silakan lengkapi field berikut:<br><br>${emptyFields.join('<br>')}`,
                icon: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#f3274c'
            });
        }

        return isValid;
    }

    function nextStep() {
        if (validateStep(currentStep) && currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', () => {
        showStep(1);
    });
</script>
@endpush
@endsection 