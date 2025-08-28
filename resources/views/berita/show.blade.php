@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-10 grid grid-cols-1 lg:grid-cols-12 gap-10">

    {{-- ISI BERITA --}}
    <article class="lg:col-span-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4 leading-snug">
            {{ $berita->judul }}
        </h1>

        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
            {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }} •
            Kategori: <span class="capitalize">{{ $berita->kategori }}</span>
        </p>

        {{-- Gambar --}}
        @if($berita->gambar)
            <div class="mb-6 rounded-xl overflow-hidden shadow">
                <img src="{{ asset('storage/'.$berita->gambar) }}" 
                     alt="{{ $berita->judul }}" 
                     class="w-full h-auto object-cover">
            </div>
        @endif

        {{-- Isi konten --}}
        <div class="prose dark:prose-invert max-w-none text-justify leading-relaxed">
            {!! nl2br(e($berita->konten)) !!}
        </div>
    </article>

    {{-- SIDEBAR --}}
    <aside class="lg:col-span-4 space-y-8">
        <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6">
            <h3 class="font-bold text-lg mb-5 text-gray-900 dark:text-gray-100">
                Berita <span class="text-blue-600">Populer</span>
            </h3>

            @forelse($populer as $p)
                <a href="{{ route('berita.show', $p) }}" class="flex gap-3 mb-4 group">
                    <div class="w-24 h-16 rounded-md overflow-hidden bg-gray-200 dark:bg-gray-700 shrink-0">
                        @if($p->gambar)
                            <img src="{{ asset('storage/'.$p->gambar) }}" 
                                 alt="{{ $p->judul }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition">
                        @endif
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold leading-snug text-gray-900 dark:text-gray-100 group-hover:underline line-clamp-2">
                            {{ $p->judul }}
                        </h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                            {{ \Carbon\Carbon::parse($p->created_at)->translatedFormat('d M Y') }}
                        </p>
                    </div>
                </a>
            @empty
                <p class="text-sm text-gray-500 dark:text-gray-400">Belum ada berita populer.</p>
            @endforelse
        </div>
    </aside>

</div>
@endsection
