@extends('layouts.app')

@section('title', $apbd['title'])

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    {{-- Judul --}}
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-800 dark:text-white">
            {{ $apbd['title'] }}
        </h1>
        <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">
            Transparansi Anggaran · Dokumen Resmi
        </p>
    </div>

    {{-- PDF Viewer --}}
    <div class="bg-white dark:bg-slate-900 p-4 rounded-xl shadow-lg">
        <iframe src="{{ asset($apbd['file']) }}" 
                class="w-full h-[80vh] rounded-lg border border-slate-200 dark:border-slate-700"
                frameborder="0">
        </iframe>
    </div>

    {{-- Tombol Aksi --}}
    <div class="mt-6 flex flex-wrap gap-4">
        <a href="{{ asset($apbd['file']) }}" target="_blank"
           class="px-5 py-2.5 rounded-lg bg-rose-600 hover:bg-rose-700 text-white font-medium shadow transition">
            🔗 Buka di Tab Baru
        </a>
        <a href="{{ asset($apbd['file']) }}" download
           class="px-5 py-2.5 rounded-lg bg-amber-500 hover:bg-amber-600 text-white font-medium shadow transition">
            ⬇️ Unduh PDF
        </a>
        <a href="{{ route('apbd.index') }}"
           class="px-5 py-2.5 rounded-lg bg-slate-600 hover:bg-slate-700 text-white font-medium shadow transition">
            ⬅️ Kembali ke Daftar
        </a>
    </div>
</div>
@endsection
