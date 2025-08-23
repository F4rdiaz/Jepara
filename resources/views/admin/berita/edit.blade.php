@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Edit Berita</h1>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" class="space-y-6 bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" 
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600" required>
        </div>

        <div>
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Isi Berita</label>
            <textarea name="isi" rows="6" 
                      class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.berita.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">
                Batal
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
