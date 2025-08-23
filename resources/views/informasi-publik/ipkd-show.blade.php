{{-- resources/views/informasi-publik/ipkd-show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail IPKD')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">📄 Detail Dokumen IPKD</h1>

    @php
        $ipkdList = [
            1 => ['title' => 'Dokumen IPKD Tahun 2023', 'file' => asset('storage/ipkd/ipkd-2023.pdf')],
            2 => ['title' => 'Dokumen IPKD Tahun 2024', 'file' => asset('storage/ipkd/ipkd-2024.pdf')],
            3 => ['title' => 'Dokumen IPKD Tahun 2025', 'file' => asset('storage/ipkd/ipkd-2025.pdf')],
        ];
    @endphp

    @if(isset($ipkdList[$id]))
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">{{ $ipkdList[$id]['title'] }}</h2>

            <iframe src="{{ $ipkdList[$id]['file'] }}" class="w-full h-[600px] rounded-md shadow"></iframe>

            <div class="mt-4">
                <a href="{{ route('informasi-publik.ipkd.index') }}"
                   class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                   ⬅️ Kembali ke Daftar
                </a>
            </div>
        </div>
    @else
        <p class="text-red-600 dark:text-red-400">❌ Dokumen tidak ditemukan.</p>
    @endif
</div>
@endsection
