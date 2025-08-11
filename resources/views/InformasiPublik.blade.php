@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        
        <!-- Judul Halaman -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Informasi Publik</h1>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Akses berita terbaru dan informasi PPID resmi Pemerintah Kota Jepara
            </p>
        </div>

        <!-- Berita & PPID dalam satu baris -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Kolom Berita -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white border-b pb-3 mb-4">Berita Kota</h2>
                @foreach($berita as $item)
                    <div class="mb-4">
                        <a href="{{ route('berita.show', $item->id) }}" class="text-lg font-medium text-red-600 hover:underline">
                            {{ $item->judul }}
                        </a>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $item->created_at->format('d M Y') }}</p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300 line-clamp-2">
                            {{ Str::limit($item->konten, 120) }}
                        </p>
                    </div>
                @endforeach
                <a href="{{ route('berita.index') }}" class="mt-4 inline-block text-red-600 hover:underline">
                    Lihat Semua Berita →
                </a>
            </div>

            <!-- Kolom PPID -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white border-b pb-3 mb-4">PPID</h2>
                @foreach($ppid as $item)
                    <div class="mb-4">
                        <a href="{{ route('ppid.show', $item->id) }}" class="text-lg font-medium text-red-600 hover:underline">
                            {{ $item->judul }}
                        </a>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $item->created_at->format('d M Y') }}</p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300 line-clamp-2">
                            {{ Str::limit($item->konten, 120) }}
                        </p>
                    </div>
                @endforeach
                <a href="{{ route('ppid.index') }}" class="mt-4 inline-block text-red-600 hover:underline">
                    Lihat Semua PPID →
                </a>
            </div>

        </div>
    </div>
</section>
@endsection
