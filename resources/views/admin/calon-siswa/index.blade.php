@extends('layouts.admin')

@section('title', 'Calon Siswa')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Data Calon Siswa</h1>
    <span class="text-sm text-gray-500">Total: {{ $students->total() }} pendaftar</span>
</div>

<!-- Filter -->
<div class="bg-white rounded-lg shadow p-4 mb-6">
    <form method="GET" action="{{ route('admin.calon-siswa') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cari</label>
            <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" placeholder="Nama / NISN / Asal sekolah"
                class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                <option value="">Semua Status</option>
                <option value="pending" {{ ($filters['status'] ?? '') === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="verified" {{ ($filters['status'] ?? '') === 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                <option value="rejected" {{ ($filters['status'] ?? '') === 'rejected' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
            <select name="jurusan_id" class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
                <option value="">Semua Jurusan</option>
                @foreach ($jurusans as $j)
                    <option value="{{ $j->id }}" {{ (string)($filters['jurusan_id'] ?? '') === (string)$j->id ? 'selected' : '' }}>{{ $j->nama_jurusan }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-end">
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition">
                Filter
            </button>
        </div>
    </form>
</div>

<!-- Status Summary -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
        <p class="text-2xl font-bold text-amber-600">{{ $statusCounts['pending'] ?? 0 }}</p>
        <p class="text-sm text-amber-700">Menunggu Verifikasi</p>
    </div>
    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
        <p class="text-2xl font-bold text-green-600">{{ $statusCounts['verified'] ?? 0 }}</p>
        <p class="text-sm text-green-700">Terverifikasi</p>
    </div>
    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
        <p class="text-2xl font-bold text-red-600">{{ $statusCounts['rejected'] ?? 0 }}</p>
        <p class="text-sm text-red-700">Ditolak</p>
    </div>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asal Sekolah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($students as $i => $student)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $students->firstItem() + $i }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            @if($student->pas_foto)
                            <img class="h-10 w-10 rounded-full object-cover mr-3" src="{{ route('ppdb.download', ['type' => 'pas_foto', 'filename' => basename($student->pas_foto)]) }}" alt="">
                            @else
                            <div class="h-10 w-10 rounded-full bg-gray-300 mr-3 flex items-center justify-center text-gray-600 font-semibold">{{ strtoupper(substr($student->nama_lengkap, 0, 1)) }}</div>
                            @endif
                            <span class="text-sm font-medium text-gray-900">{{ $student->nama_lengkap }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->nisn }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->jurusan->nama_jurusan ?? '-' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->asal_sekolah }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($student->status === 'verified')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terverifikasi</span>
                        @elseif($student->status === 'rejected')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Ditolak</span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                        <a href="{{ route('admin.calon-siswa.show', $student) }}" class="text-green-600 hover:text-green-800">Detail</a>
                        @if($student->status !== 'verified')
                        <form method="POST" action="{{ route('admin.calon-siswa.status', $student) }}" class="inline">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="verified">
                            <button type="submit" onclick="return confirm('Terima pendaftaran {{ $student->nama_lengkap }}?')" class="text-blue-600 hover:text-blue-800">Terima</button>
                        </form>
                        @endif
                        @if($student->status !== 'rejected')
                        <form method="POST" action="{{ route('admin.calon-siswa.status', $student) }}" class="inline">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" onclick="return confirm('Tolak pendaftaran {{ $student->nama_lengkap }}?')" class="text-red-600 hover:text-red-800">Tolak</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-12 text-center text-gray-500">Belum ada data calon siswa</td>
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
