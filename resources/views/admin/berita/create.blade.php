@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Tambah Berita</h1>

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data"
          class="space-y-6 bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
        @csrf

        <!-- Judul -->
        <div>
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Judul</label>
            <input type="text" name="judul" value="{{ old('judul') }}" 
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600" required>
        </div>

        <!-- Isi Berita -->
        <div>
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Isi Berita</label>
            <textarea name="isi" rows="6" 
                      class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600" required>{{ old('isi') }}</textarea>
        </div>

        <!-- Upload Gambar -->
        <div>
            <label class="block text-gray-700 dark:text-gray-300 mb-2">Gambar Berita</label>
            <input type="file" name="gambar" accept="image/*"
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600">

            <!-- Preview Gambar -->
            <div class="mt-3">
                <img id="preview-gambar" class="hidden max-h-60 rounded-lg shadow-md" alt="Preview Gambar">
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.berita.index') }}" 
               class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">
                Batal
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Simpan
            </button>
        </div>
    </form>
</div>

{{-- Script Preview Gambar --}}
<script>
    const inputGambar = document.querySelector('input[name="gambar"]');
    const previewGambar = document.getElementById('preview-gambar');

    inputGambar.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            previewGambar.src = URL.createObjectURL(file);
            previewGambar.classList.remove('hidden');
        }
    });
</script>
@endsection
