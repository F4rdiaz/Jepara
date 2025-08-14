@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold text-center mb-10 text-black dark:text-white">Layanan Publik</h1>

    <!-- Grid Layanan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $layanan = [
                // Ganti SVG ke IMG sesuai referensi
                ['img'=>'layanankependudukan.png','title'=>'Layanan Kependudukan','desc'=>'Pelayanan Administrasi Kependudukan di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananperizinan.png','title'=>'Layanan Perizinan','desc'=>'Pelayanan Perizinan Mandiri yang Tidak Ada di OSS','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananak1.png','title'=>'Layanan AK1','desc'=>'Pelayanan Surat AK1 Bagi Pencari Kerja Secara Mandiri','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananopendata.png','title'=>'Layanan Open Data','desc'=>'Portal Berbagai Dataset di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layanandatastatistik.png','title'=>'Layanan Data Statistik','desc'=>'Portal Berbagai Data Statistik di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layanankependudukan.png','title'=>'Layanan Pengaduan','desc'=>'Portal Pengaduan Masyarakat di Kabupaten Jepara','bg'=>'bg-white dark:bg-gray-800'],
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
