@extends('layouts.admin')

@section('title', 'Daftar Ulang')

@section('content')
<h1 class="text-2xl font-semibold text-gray-800 mb-6">Manajemen Daftar Ulang</h1>

<!-- Summary cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <a href="{{ route('admin.daftar-ulang', ['daftar_ulang' => 'pending']) }}" class="bg-amber-50 border border-amber-200 rounded-lg p-5 hover:shadow transition">
        <p class="text-3xl font-bold text-amber-600">{{ $counts['pending'] ?? 0 }}</p>
        <p class="text-sm font-medium text-amber-700">Belum Daftar Ulang</p>
    </a>
    <a href="{{ route('admin.daftar-ulang', ['daftar_ulang' => 'paid']) }}" class="bg-blue-50 border border-blue-200 rounded-lg p-5 hover:shadow transition">
        <p class="text-3xl font-bold text-blue-600">{{ $counts['paid'] ?? 0 }}</p>
        <p class="text-sm font-medium text-blue-700">Sudah Bayar</p>
    </a>
    <a href="{{ route('admin.daftar-ulang', ['daftar_ulang' => 'completed']) }}" class="bg-green-50 border border-green-200 rounded-lg p-5 hover:shadow transition">
        <p class="text-3xl font-bold text-green-600">{{ $counts['completed'] ?? 0 }}</p>
        <p class="text-sm font-medium text-green-700">Selesai</p>
    </a>
</div>

<!-- Filter -->
<div class="bg-white rounded-lg shadow p-4 mb-6">
    <form method="GET" action="{{ route('admin.daftar-ulang') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cari</label>
            <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" placeholder="Nama / NISN"
                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status Daftar Ulang</label>
            <select name="daftar_ulang" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                <option value="">Semua Status</option>
                <option value="pending" {{ ($filters['daftar_ulang'] ?? '') === 'pending' ? 'selected' : '' }}>Belum Daftar Ulang</option>
                <option value="paid" {{ ($filters['daftar_ulang'] ?? '') === 'paid' ? 'selected' : '' }}>Sudah Bayar</option>
                <option value="completed" {{ ($filters['daftar_ulang'] ?? '') === 'completed' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <div class="flex items-end">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition">Filter</button>
        </div>
    </form>
</div>

<!-- Table -->
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NISN</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Pendaftaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Daftar Ulang</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ubah Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($students as $i => $student)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $students->firstItem() + $i }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $student->nama_lengkap }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->nisn }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->jurusan->nama_jurusan ?? '-' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($student->status === 'verified')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terverifikasi</span>
                        @elseif($student->status === 'rejected')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Ditolak</span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($student->daftar_ulang === 'completed')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                        @elseif($student->daftar_ulang === 'paid')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Sudah Bayar</span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Belum</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form method="POST" action="{{ route('admin.daftar-ulang.update', $student) }}" class="flex items-center space-x-2">
                            @csrf
                            @method('PATCH')
                            <select name="daftar_ulang" class="border border-gray-300 rounded-md shadow-sm py-1.5 px-2 text-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                <option value="pending" {{ $student->daftar_ulang === 'pending' ? 'selected' : '' }}>Belum</option>
                                <option value="paid" {{ $student->daftar_ulang === 'paid' ? 'selected' : '' }}>Sudah Bayar</option>
                                <option value="completed" {{ $student->daftar_ulang === 'completed' ? 'selected' : '' }}>Selesai</option>
                            </select>
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1.5 rounded-md text-sm transition">Simpan</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-12 text-center text-gray-500">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($students->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $students->links() }}
    </div>
    @endif
</div>
@endsection
