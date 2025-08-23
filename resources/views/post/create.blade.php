@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Judul</label>
            <input type="text" name="title" 
                   class="w-full border px-3 py-2 rounded" 
                   value="{{ old('title') }}" required>
            @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Konten</label>
            <textarea name="content" rows="5" 
                      class="w-full border px-3 py-2 rounded" required>{{ old('content') }}</textarea>
            @error('content') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" 
                class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('posts.index') }}" 
           class="ml-2 text-gray-600">Batal</a>
    </form>
</div>
@endsection
