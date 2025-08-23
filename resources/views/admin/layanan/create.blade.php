@extends('layouts.admin')

@section('title', 'Tambah Layanan')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Tambah Layanan</h1>

    <form action="{{ route('admin.layanan.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Nama Layanan</label>
            <input type="text" name="nama_layanan" value="{{ old('nama_layanan') }}"
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
            @error('nama_layanan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Deskripsi</label>
            <textarea name="deskripsi" rows="4"
                      class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">{{ old('deskripsi') }}</textarea>
        </div>

        <div>
            <label class="block mb-1 font-medium">Ikon (Font Awesome Class)</label>
            <input type="text" name="ikon" value="{{ old('ikon') }}"
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.layanan.index') }}" 
               class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                Batal
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
