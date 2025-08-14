@extends('layouts.app')

@section('title', 'Berita Terkini')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Judul -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-3">Berita Terkini</h1>
        <p class="text-gray-600 text-lg">Informasi terbaru yang selalu update untuk masyarakat Jepara</p>
    </div>

    <!-- Pencarian -->
    <div class="mb-8">
        <form method="GET" action="{{ route('news.index') }}" class="flex items-center gap-3">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}" 
                placeholder="Cari berita..." 
                class="flex-1 p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
            >
            <button 
                type="submit" 
                class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700 transition">
                Cari
            </button>
        </form>
    </div>

    <!-- Grid Berita -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($news as $item)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
                <a href="{{ route('news.show', $item->id) }}">
                    <!-- Gambar -->
                    <img src="{{ asset('storage/'.$item->image) }}" 
                        alt="{{ $item->title }}" 
                        class="w-full h-56 object-cover">
                    
                    <!-- Konten -->
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-800 mb-3 hover:text-blue-600 transition">
                            {{ Str::limit($item->title, 60) }}
                        </h2>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($item->excerpt, 100) }}
                        </p>
                        <div class="flex items-center justify-between text-gray-500 text-xs">
                            <span>{{ $item->created_at->format('d M Y') }}</span>
                            <span>Baca selengkapnya →</span>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                Tidak ada berita yang ditemukan.
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-10">
        {{ $news->links('pagination::tailwind') }}
    </div>
</div>
@endsection
