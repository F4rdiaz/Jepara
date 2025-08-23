@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold text-center mb-10 text-black dark:text-white">
        {{ __('layanan.title') }}
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $layanan = [
                [
                    'img' => 'layanankependudukan.png',
                    'title' => 'Layanan Kependudukan',
                    'desc' => 'Pelayanan Administrasi Kependudukan di Kabupaten Jepara',
                    'bg' => 'bg-white dark:bg-gray-800',
                    'url' => 'https://pindangcemplung.jepara.go.id/'
                ],
                [
                    'img' => 'layananperizinan.png',
                    'title' => 'Layanan Perizinan',
                    'desc' => 'Pelayanan Perizinan Mandiri Yang Tidak Ada di OSS',
                    'bg' => 'bg-blue-50 dark:bg-gray-700',
                    'url' => 'https://joss.jepara.go.id/'
                ],
                [
                    'img' => 'layananak1.png',
                    'title' => 'Layanan AK1',
                    'desc' => 'Pelayanan Surat AK1 Bagi Pencari Kerja Secara Mandiri',
                    'bg' => 'bg-white dark:bg-gray-800',
                    'url' => 'https://yokerjo.jepara.go.id/'
                ],
                [
                    'img' => 'layananopendata.png',
                    'title' => __('layanan.opendata.title'),
                    'desc' => __('layanan.opendata.desc'),
                    'bg' => 'bg-white dark:bg-gray-800',
                    'url' => 'https://yokerjo.jepara.go.id/'
                ],
                [
                    'img' => 'layanandatastatistik.png',
                    'title' => __('layanan.datastatistik.title'),
                    'desc' => __('layanan.datastatistik.desc'),
                    'bg' => 'bg-white dark:bg-gray-800',
                    'url' => 'https://samudra.jepara.go.id/'
                ],
                [
                    'img' => 'layanankependudukan.png',
                    'title' => __('layanan.pengaduan.title'),
                    'desc' => __('layanan.pengaduan.desc'),
                    'bg' => 'bg-white dark:bg-gray-800',
                    'url' => 'https://wadul.jepara.go.id/'
                ],
            ];
        @endphp

        @foreach($layanan as $item)
            <a href="{{ $item['url'] }}" target="_blank" class="p-6 {{ $item['bg'] }} rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('images/'.$item['img']) }}" alt="{{ $item['title'] }}" class="h-20 w-20">
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm">{{ $item['desc'] }}</p>
            </a>
        @endforeach
    </div>
</div> 
@endsection
