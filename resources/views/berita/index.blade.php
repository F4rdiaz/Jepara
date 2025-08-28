@extends('layouts.app')

@section('title', 'Berita Terkini')

@section('content')
<div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-10">

    {{-- Header --}}
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Berita Terkini</h1>
        <p class="text-gray-600 dark:text-gray-300 mt-2">Informasi terbaru dari Pemerintah Kabupaten Jepara</p>
    </div>

    {{-- Pencarian --}}
    <form method="GET" action="{{ route('berita.index') }}" class="mb-8 flex gap-3">
        <input type="text" name="search" value="{{ request('search') }}" 
               placeholder="Cari berita..." 
               class="flex-1 p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Cari
        </button>
    </form>

    {{-- Grid berita --}}
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($beritas as $b)
            <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
                <a href="{{ route('berita.show', $b) }}">
                    @if($b->gambar)
                        <img src="{{ asset('storage/'.$b->gambar) }}" alt="{{ $b->judul }}" 
                             class="w-full h-56 object-cover">
                    @else
                        <div class="w-full h-56 bg-gray-200 dark:bg-gray-700 grid place-items-center text-gray-500">Tidak ada gambar</div>
                    @endif
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-3 hover:text-blue-600 transition">
                            {{ Str::limit($b->judul, 70) }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($b->konten), 100) }}
                        </p>
                        <div class="flex items-center justify-between text-gray-500 dark:text-gray-400 text-xs">
                            <span>{{ \Carbon\Carbon::parse($b->created_at)->translatedFormat('d F Y') }}</span>
                            <span class="text-blue-600 font-semibold">Selengkapnya →</span>
                        </div>
                    </div>
                </a>
            </article>
        @empty
            <div class="col-span-full text-center text-gray-500 dark:text-gray-400">
                Tidak ada berita yang ditemukan.
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-10">
        {{ $beritas->links('pagination::tailwind') }}
    </div>
</div>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection
