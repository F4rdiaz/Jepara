@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8 px-4 text-white">
    <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>

    <!-- Daftar Kategori -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-10">
        @foreach ($categories as $cat)
            <a href="{{ route('informasi-publik.dokumen.kategori', $cat['id']) }}"
               class="p-4 bg-gray-800 rounded-xl hover:bg-gray-700 transition block text-center
               {{ $cat['nama'] === $title ? 'border border-blue-400' : '' }}">
                {{ $cat['nama'] }}
            </a>
        @endforeach
    </div>

    <!-- Daftar Dokumen -->
    <div class="space-y-4">
        @forelse ($dokumens as $dok)
            <div class="p-4 bg-gray-900 rounded-xl flex justify-between items-center">
                <span class="font-semibold">{{ $dok->judul }}</span>
                <a href="{{ asset('storage/dokumen/'.$dok->file) }}" target="_blank" 
                   class="text-blue-400 hover:underline">
                    Lihat File
                </a>
            </div>
        @empty
            <p class="text-gray-400">Belum ada dokumen.</p>
        @endforelse
    </div>
</div>
@endsection
