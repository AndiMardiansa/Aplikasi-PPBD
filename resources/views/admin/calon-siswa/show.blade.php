@extends('layouts.admin')

@section('title', 'Detail Calon Siswa')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Detail Calon Siswa</h1>
    <a href="{{ route('admin.calon-siswa') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 rounded-md text-sm text-gray-700 hover:bg-gray-300 transition">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Profile card -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
            <div class="flex justify-center">
                @if($student->pas_foto)
                <img class="h-32 w-32 rounded-full border-4 border-white shadow-lg object-cover" src="{{ route('ppdb.download', ['type' => 'pas_foto', 'filename' => basename($student->pas_foto)]) }}" alt="Pas Foto">
                @else
                <div class="h-32 w-32 rounded-full border-4 border-white bg-white text-gray-400 flex items-center justify-center text-5xl font-bold">{{ strtoupper(substr($student->nama_lengkap, 0, 1)) }}</div>
                @endif
            </div>
            <h2 class="text-white text-center mt-4 text-xl font-semibold">{{ $student->nama_lengkap }}</h2>
            <p class="text-blue-100 text-center text-sm">NISN: {{ $student->nisn }}</p>
            <div class="flex justify-center mt-4">
                @if($student->status === 'verified')
                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 text-sm font-semibold">Terverifikasi</span>
                @elseif($student->status === 'rejected')
                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-800 text-sm font-semibold">Ditolak</span>
                @else
                    <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-sm font-semibold">Pending</span>
                @endif
            </div>
        </div>
        <div class="p-6">
            <form method="POST" action="{{ route('admin.calon-siswa.status', $student) }}">
                @csrf
                @method('PATCH')
                <label class="block text-sm font-medium text-gray-700 mb-2">Ubah Status</label>
                <div class="flex space-x-2">
                    <select name="status" class="flex-1 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                        <option value="pending" {{ $student->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="verified" {{ $student->status === 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                        <option value="rejected" {{ $student->status === 'rejected' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Detail -->
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-800">Informasi Pribadi</h3>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <div><span class="text-gray-500">Tempat, Tanggal Lahir</span><p class="font-medium text-gray-900">{{ $student->tempat_lahir }}, {{ \Carbon\Carbon::parse($student->tanggal_lahir)->format('d M Y') }}</p></div>
                <div><span class="text-gray-500">Jenis Kelamin</span><p class="font-medium text-gray-900">{{ $student->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</p></div>
                <div><span class="text-gray-500">Agama</span><p class="font-medium text-gray-900">{{ $student->agama }}</p></div>
                <div><span class="text-gray-500">No. Telepon</span><p class="font-medium text-gray-900">{{ $student->no_telepon }}</p></div>
                <div><span class="text-gray-500">Alamat</span><p class="font-medium text-gray-900">{{ $student->alamat }}</p></div>
                <div><span class="text-gray-500">Asal Sekolah</span><p class="font-medium text-gray-900">{{ $student->asal_sekolah }}</p></div>
                <div><span class="text-gray-500">Jurusan Pilihan</span><p class="font-medium text-gray-900">{{ $student->jurusan->nama_jurusan ?? '-' }}</p></div>
                <div><span class="text-gray-500">Email Akun</span><p class="font-medium text-gray-900">{{ $student->user->email ?? '-' }}</p></div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-800">Data Orang Tua</h3>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <div><span class="text-gray-500">Nama Ayah</span><p class="font-medium text-gray-900">{{ $student->nama_ayah }}</p></div>
                <div><span class="text-gray-500">Pekerjaan Ayah</span><p class="font-medium text-gray-900">{{ $student->pekerjaan_ayah }}</p></div>
                <div><span class="text-gray-500">Nama Ibu</span><p class="font-medium text-gray-900">{{ $student->nama_ibu }}</p></div>
                <div><span class="text-gray-500">Pekerjaan Ibu</span><p class="font-medium text-gray-900">{{ $student->pekerjaan_ibu }}</p></div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-800">Kelengkapan Dokumen</h3>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                @php
                    $docs = [
                        'pas_foto' => 'Pas Foto',
                        'surat_keterangan_lulus' => 'Surat Keterangan Lulus',
                        'ijazah' => 'Ijazah',
                        'kartu_keluarga' => 'Kartu Keluarga',
                        'akte_kelahiran' => 'Akte Kelahiran',
                    ];
                    $types = [
                        'pas_foto' => 'pas_foto',
                        'surat_keterangan_lulus' => 'surat_lulus',
                        'ijazah' => 'ijazah',
                        'kartu_keluarga' => 'kartu_keluarga',
                        'akte_kelahiran' => 'akte_kelahiran',
                    ];
                @endphp
                @foreach ($docs as $field => $label)
                <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3">
                    <div class="min-w-0">
                        <p class="font-medium text-gray-900">{{ $label }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ $student->{$field} ? basename($student->{$field}) : '-' }}</p>
                    </div>
                    @if($student->{$field})
                    <a href="{{ route('ppdb.download', ['type' => $types[$field], 'filename' => basename($student->{$field})]) }}" target="_blank"
                       class="ml-3 inline-flex items-center px-3 py-1.5 bg-green-500 hover:bg-green-600 text-white text-xs rounded-md transition">Lihat</a>
                    @else
                    <span class="ml-3 inline-flex items-center px-3 py-1.5 bg-gray-100 text-gray-500 text-xs rounded-md">Belum ada</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
