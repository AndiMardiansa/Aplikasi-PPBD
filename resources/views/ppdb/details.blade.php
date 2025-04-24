{{-- @extends('layouts.app') --}}

@extends('layouts.dashboard')

@section('title', 'Detail Pendaftaran PPDB - SMK NEGERI 3 PALU')

@section('content')
<div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8 mt-16">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-[#f3274c] to-[#ffae22] py-6 px-6">
            <div class="flex justify-center">
                <img src="{{ asset('img/logosmkn3palu.png') }}" alt="SMKN 3 Palu Logo" class="h-20 w-auto">
            </div>
            <h2 class="mt-4 text-center text-3xl font-extrabold text-white">
                Detail Pendaftaran PPDB
            </h2>
            <p class="mt-2 text-center text-sm text-white opacity-80">
                SMK NEGERI 3 PALU
            </p>
        </div>
        
        <div class="p-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('info'))
                <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('info') }}</span>
                </div>
            @endif

            <div class="mb-6 flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-900">Status Pendaftaran</h3>
                <div class="px-4 py-2 rounded-full 
                    @if($registration->status == 'accepted') bg-green-100 text-green-800 
                    @elseif($registration->status == 'rejected') bg-red-100 text-red-800 
                    @else bg-yellow-100 text-yellow-800 @endif">
                    {{ $registration->status == 'accepted' ? 'Diterima' : ($registration->status == 'rejected' ? 'Ditolak' : 'Menunggu Verifikasi') }}
                </div>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Data Pribadi</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Nama Lengkap
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->nama_lengkap }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            NISN
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->nisn }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Tempat Lahir
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->tempat_lahir }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Tanggal Lahir
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ \Carbon\Carbon::parse($registration->tanggal_lahir)->format('d F Y') }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Jenis Kelamin
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Agama
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->agama }}
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        Alamat Lengkap
                    </label>
                    <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                        {{ $registration->alamat }}
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Nomor Telepon
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->no_telepon }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Asal Sekolah
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->asal_sekolah }}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Data Orangtua/Wali</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Nama Ayah
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->nama_ayah }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Nama Ibu
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->nama_ibu }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Pekerjaan Ayah
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->pekerjaan_ayah }}
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Pekerjaan Ibu
                        </label>
                        <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                            {{ $registration->pekerjaan_ibu }}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Pilihan Jurusan</h3>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Jurusan Pilihan
                    </label>
                    <div class="mt-1 py-2 px-3 bg-gray-100 rounded-md">
                        {{ $registration->jurusan->nama_jurusan }}
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-lg mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-6">Dokumen yang Diunggah</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Pas Foto (3x4)
                        </label>
                        <div class="mt-1 flex justify-center">
                            @if($registration->pas_foto)
                                <img src="{{ asset('storage/' . $registration->pas_foto) }}" 
                                     alt="Pas Foto" 
                                     class="h-48 w-auto object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            @else
                                <div class="h-48 w-36 flex items-center justify-center bg-gray-100 rounded-lg">
                                    <span class="text-gray-400">Foto belum diunggah</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Surat Keterangan LULUS
                        </label>
                        <div class="mt-1">
                            @if($registration->surat_lulus)
                                <a href="{{ asset('storage/' . $registration->surat_lulus) }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                    <svg class="w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"/>
                                        <path d="M3 8a2 2 0 012-2h2.93a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H5v6h10v-6h-2.93a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H15a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-900">Surat Keterangan LULUS</p>
                                        <p class="text-xs text-gray-500">Klik untuk melihat dokumen</p>
                                    </div>
                                </a>
                            @else
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <span class="text-gray-400">Dokumen belum diunggah</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Ijazah
                        </label>
                        <div class="mt-1">
                            @if($registration->ijazah)
                                <a href="{{ asset('storage/' . $registration->ijazah) }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                    <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"/>
                                        <path d="M3 8a2 2 0 012-2h2.93a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H5v6h10v-6h-2.93a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H15a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-900">Ijazah</p>
                                        <p class="text-xs text-gray-500">Klik untuk melihat dokumen</p>
                                    </div>
                                </a>
                            @else
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <span class="text-gray-400">Dokumen belum diunggah</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Kartu Keluarga
                        </label>
                        <div class="mt-1">
                            @if($registration->kartu_keluarga)
                                <a href="{{ asset('storage/' . $registration->kartu_keluarga) }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                    <svg class="w-8 h-8 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"/>
                                        <path d="M3 8a2 2 0 012-2h2.93a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H5v6h10v-6h-2.93a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H15a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-900">Kartu Keluarga</p>
                                        <p class="text-xs text-gray-500">Klik untuk melihat dokumen</p>
                                    </div>
                                </a>
                            @else
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <span class="text-gray-400">Dokumen belum diunggah</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Akte Kelahiran
                        </label>
                        <div class="mt-1">
                            @if($registration->akte_kelahiran)
                                <a href="{{ asset('storage/' . $registration->akte_kelahiran) }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                    <svg class="w-8 h-8 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"/>
                                        <path d="M3 8a2 2 0 012-2h2.93a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H5v6h10v-6h-2.93a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H15a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-900">Akte Kelahiran</p>
                                        <p class="text-xs text-gray-500">Klik untuk melihat dokumen</p>
                                    </div>
                                </a>
                            @else
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <span class="text-gray-400">Dokumen belum diunggah</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}" class="font-medium text-[#f3274c] hover:text-[#ffae22] transition-all duration-300">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 