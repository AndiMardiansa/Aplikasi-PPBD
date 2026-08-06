@extends('layouts.admin')

@section('title', 'Manajemen FAQ')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Manajemen FAQ</h1>
    <a href="{{ route('admin.faq.create') }}" class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md text-sm font-medium transition">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Tambah FAQ
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pertanyaan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jawaban</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Urutan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($faqs as $i => $faq)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $faqs->firstItem() + $i }}</td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900 max-w-xs">{{ $faq->question }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500 max-w-md truncate">{{ $faq->answer }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $faq->order }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($faq->is_active)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-600">Nonaktif</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                        <a href="{{ route('admin.faq.edit', $faq) }}" class="text-green-600 hover:text-green-800">Edit</a>
                        <form method="POST" action="{{ route('admin.faq.destroy', $faq) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus FAQ ini?')" class="text-red-600 hover:text-red-800">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-gray-500">Belum ada FAQ. Klik "Tambah FAQ" untuk menambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($faqs->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $faqs->links() }}
    </div>
    @endif
</div>
@endsection
