@extends('layouts.app')

@section('title', 'APBD & Lampirannya')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    {{-- Judul Halaman --}}
    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 dark:text-white mb-8">
        Kategori APBD
    </h1>

    {{-- Grid Card --}}
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($apbdList as $year => $item)
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300">
                <a href="{{ route('apbd.show', $year) }}">
                    {{-- Judul --}}
                    <div class="px-6 pt-6">
                        <h2 class="text-lg font-semibold text-slate-800 dark:text-white group-hover:text-rose-600 transition">
                            {{ $item['title'] }}
                        </h2>
                    </div>

                    {{-- Thumbnail --}}
                    <div class="mt-4">
                        <img src="{{ asset('images/apbd-thumb.png') }}" 
                             alt="APBD {{ $year }}" 
                             class="w-full h-48 object-cover">
                    </div>

                    {{-- Tanggal --}}
                    <div class="px-6 py-4 text-sm text-slate-500 dark:text-slate-300">
                        {{ $item['date'] }} / APBD
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
