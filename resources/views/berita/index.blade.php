@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-10">

    {{-- Header & jumlah publikasi --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100">
            Berita Terkini
        </h1>
        <p class="text-sm text-gray-500 dark:text-gray-300">
            {{ number_format($beritas->total()) }} Publikasi ditemukan
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        
        {{-- MAIN --}}
        <section class="lg:col-span-8 space-y-8">
            {{-- LIST BERITA --}}
            @forelse($beritas as $b)
                <article class="rounded-2xl bg-white dark:bg-gray-800 shadow hover:shadow-lg transition overflow-hidden ring-1 ring-gray-100 dark:ring-gray-700/40">
                    <a href="{{ route('berita.show',$b) }}" class="flex flex-col md:flex-row">
                        {{-- Gambar --}}
                        <div class="md:w-5/12">
                            @if($b->gambar)
                                <img src="{{ asset('storage/'.$b->gambar) }}" alt="{{ $b->judul }}"
                                     class="w-full h-56 md:h-full object-cover transition-transform duration-300 hover:scale-105">
                            @else
                                <div class="w-full h-56 md:h-full bg-gray-200 dark:bg-gray-700 grid place-items-center text-gray-500">Tidak ada gambar</div>
                            @endif
                        </div>
                        {{-- Konten --}}
                        <div class="md:w-7/12 p-6 flex flex-col justify-between">
                            <div>
                                <h2 class="text-xl md:text-2xl font-bold leading-snug text-gray-900 dark:text-gray-50">
                                    {{ $b->judul }}
                                </h2>
                                <p class="mt-4 text-gray-700 dark:text-gray-300 text-sm leading-relaxed line-clamp-3">
                                    {{ Str::limit(strip_tags($b->konten), 280) }}
                                </p>
                            </div>
                            <div class="mt-5 flex items-center gap-3 text-sm">
                                <span class="text-gray-500 dark:text-gray-400">
                                    {{ \Carbon\Carbon::parse($b->created_at)->translatedFormat('l, d F Y') }}
                                </span>
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-semibold bg-orange-100 text-orange-700 dark:bg-orange-900/40 dark:text-orange-300">
                                    {{ ucfirst($b->kategori) }}
                                </span>
                            </div>
                        </div>
                    </a>
                </article>
            @empty
                <div class="rounded-xl bg-white dark:bg-gray-800 p-10 text-center text-gray-500 dark:text-gray-300">
                    Tidak ada berita ditemukan.
                </div>
            @endforelse

            {{-- Pagination --}}
            @if($beritas->hasPages())
                <div class="pt-4">
                    {{ $beritas->onEachSide(1)->links('vendor.pagination.berita') }}
                </div>
            @endif
        </section>

        {{-- SIDEBAR --}}
        <aside class="lg:col-span-4 space-y-8">
            {{-- Populer --}}
            <div class="rounded-2xl bg-white dark:bg-gray-800 shadow-sm ring-1 ring-gray-100 dark:ring-gray-700/40 p-6">
                <h3 class="font-bold text-lg mb-5 text-gray-900 dark:text-gray-100">
                    Berita <span class="text-orange-500">Populer</span>
                </h3>
                @php
                    $populer = $populer ?? $beritas->getCollection()->take(5);
                @endphp
                <div class="space-y-4">
                    @forelse($populer as $i=>$p)
                        <a href="{{ route('berita.show',$p) }}" class="flex gap-3 group">
                            <div class="w-24 h-16 rounded-md overflow-hidden bg-gray-200 dark:bg-gray-700 shrink-0">
                                @if($p->gambar)
                                    <img src="{{ asset('storage/'.$p->gambar) }}" alt="{{ $p->judul }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition">
                                @endif
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold leading-snug text-gray-900 dark:text-gray-100 group-hover:underline line-clamp-2">
                                    {{ $p->judul }}
                                </h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                    {{ \Carbon\Carbon::parse($p->created_at)->translatedFormat('l, d F Y') }}
                                </p>
                            </div>
                        </a>
                    @empty
                        <p class="text-gray-500 dark:text-gray-400 text-sm">Belum ada data populer.</p>
                    @endforelse
                </div>
            </div>
        </aside>
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
