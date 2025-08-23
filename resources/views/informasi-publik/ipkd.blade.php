{{-- resources/views/informasi-publik/ipkd.blade.php --}}
@extends('layouts.app')

@section('title', 'IPKD - Informasi Publik')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-8">📊 Informasi IPKD</h1>

    @php
        $ipkdList = [
            ['id' => 1, 'title' => 'Dokumen IPKD Tahun 2023', 'file' => asset('storage/ipkd/ipkd-2023.pdf')],
            ['id' => 2, 'title' => 'Dokumen IPKD Tahun 2024', 'file' => asset('storage/ipkd/ipkd-2024.pdf')],
            ['id' => 3, 'title' => 'Dokumen IPKD Tahun 2025', 'file' => asset('storage/ipkd/ipkd-2025.pdf')],
        ];
    @endphp

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($ipkdList as $item)
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-5 flex flex-col justify-between">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-3">{{ $item['title'] }}</h2>
                <a href="{{ route('informasi-publik.ipkd.show', $item['id']) }}"
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                   📄 Lihat Dokumen
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
