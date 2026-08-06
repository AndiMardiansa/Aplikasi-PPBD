@extends('layouts.admin')

@section('title', 'Edit FAQ')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Edit FAQ</h1>
    <a href="{{ route('admin.faq.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 rounded-md text-sm text-gray-700 hover:bg-gray-300 transition">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>
</div>

<div class="max-w-3xl bg-white rounded-lg shadow overflow-hidden">
    <form method="POST" action="{{ route('admin.faq.update', $faq) }}" class="p-6 space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="question" class="block text-sm font-medium text-gray-700">Pertanyaan</label>
            <input type="text" name="question" id="question" value="{{ old('question', $faq->question) }}" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
            @error('question')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="answer" class="block text-sm font-medium text-gray-700">Jawaban</label>
            <textarea name="answer" id="answer" rows="5" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">{{ old('answer', $faq->answer) }}</textarea>
            @error('answer')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="order" class="block text-sm font-medium text-gray-700">Urutan</label>
                <input type="number" name="order" id="order" value="{{ old('order', $faq->order) }}" min="0"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div class="flex items-end">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }} class="h-4 w-4 text-green-600 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-700">Aktif</span>
                </label>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md text-sm font-medium transition">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
