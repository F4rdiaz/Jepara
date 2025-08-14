@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-cover bg-center h-[500px] md:h-[600px] lg:h-[700px]" style="background-image: url('{{ asset('images/jepara.png') }}')">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/60"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6 md:px-12">
        <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 drop-shadow-lg">
            Selamat Datang di Kabupaten Jepara
        </h1>
        <p class="text-md md:text-lg lg:text-xl text-gray-200 max-w-3xl mb-8 drop-shadow-md">
            Jelajahi keindahan dan budaya Jepara, dari seni ukir khas hingga destinasi wisata memikat.
        </p>

        <!-- Search Box -->
        <form action="{{ route('search') }}" method="GET" class="w-full max-w-md flex shadow-lg rounded-lg overflow-hidden">
            <input 
                type="text" 
                name="query" 
                placeholder="Cari informasi..." 
                class="flex-1 px-4 py-3 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
                required
            >
            <button type="submit" class="bg-sky-500 hover:bg-sky-600 text-white px-5 flex items-center justify-center transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </button>
        </form>
    </div>
</div>

<!-- Layanan Jepara Digital -->
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Layanan Jepara Digital</h2>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Mewujudkan <span class="text-blue-600 dark:text-blue-400">#JeparaDalamGenggaman</span></p>
    </div>

    <!-- Grid Layanan 3x3 -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $layanan = [
                ['img'=>'layanankependudukan.png','title'=>'Layanan Kependudukan','desc'=>'Pelayanan Administrasi Kependudukan di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananperizinan.png','title'=>'Layanan Perizinan','desc'=>'Pelayanan Perizinan Mandiri Yang Tidak Ada di OSS','bg'=>'bg-blue-50 dark:bg-gray-700'],
                ['img'=>'layananak1.png','title'=>'Layanan AK1','desc'=>'Pelayanan Surat AK1 Bagi Pencari Kerja Secara Mandiri','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananpengadaan.png','title'=>'Layanan Pengadaan','desc'=>'Portal Layanan Pengadaan di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananinformasidata.png','title'=>'Layanan Informasi Data','desc'=>'Portal Berbagai Informasi di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layanankependudukan.png','title'=>'Layanan Pengaduan','desc'=>'Portal Pengaduan Masyarakat di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananjdih.png','title'=>'JDIH','desc'=>'Jaringan Dokumentasi dan Informasi Hukum di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layanandokumen.png','title'=>'Dokumen','desc'=>'Publikasi Dokumen Pemerintah Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananbelitiketpesawat.png','title'=>'Beli Tiket Wisata','desc'=>'Pembelian Tiket Wisata Milik Pemerintah Kabupaten Secara Online','bg'=>'bg-white dark:bg-gray-800']
            ];
        @endphp

        @foreach($layanan as $item)
        <div class="p-6 {{ $item['bg'] }} rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 flex flex-col items-center text-center">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/'.$item['img']) }}" alt="{{ $item['title'] }}" class="h-20 w-20">
            </div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">{{ $item['desc'] }}</p>
        </div>
        @endforeach
    </div>

    <!-- Tombol Lainnya -->
    <div class="text-center mt-12">
        <a href="{{ route('layanan') }}" class="inline-block px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg shadow transition duration-300">
            Layanan Lainnya
        </a>
    </div>
</div>

<!-- Floating Button Pengaduan -->
<div class="fixed bottom-6 right-6 flex flex-col gap-4 z-50">

    <!-- Wadul Bupati -->
    <a href="https://wadul.jepara.go.id/" target="_blank" title="Wadul Bupati"
       class="relative bg-blue-500 hover:bg-blue-600 w-20 h-20 rounded-full shadow-2xl flex items-center justify-center transition-transform duration-300 hover:scale-110 animate-bounce-slow group">
        <img src="{{ asset('images/wadulbupati.png') }}" alt="Wadul Bupati" class="h-10 w-10">
        <span class="absolute left-[-140%] top-1/2 -translate-y-1/2 bg-gray-800 text-white text-sm font-medium px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
            Wadul Bupati
        </span>
    </a>

    <!-- Lapor -->
    <a href="https://laporgub.jatengprov.go.id/" target="_blank" title="Lapor"
       class="relative bg-red-500 hover:bg-red-600 w-20 h-20 rounded-full shadow-2xl flex items-center justify-center transition-transform duration-300 hover:scale-110 animate-bounce-slow group">
        <img src="{{ asset('images/lapor.png') }}" alt="Lapor" class="h-10 w-10">
        <span class="absolute left-[-140%] top-1/2 -translate-y-1/2 bg-gray-800 text-white text-sm font-medium px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
            Lapor
        </span>
    </a>
</div>

<!-- Tailwind Custom Animation -->
<style>
@keyframes bounce-slow {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-6px); }
}
.animate-bounce-slow {
  animation: bounce-slow 2s infinite;
}
</style>
@endsection
