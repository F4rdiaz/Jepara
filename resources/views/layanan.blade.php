@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold text-center mb-10 text-black dark:text-white">
        {{ __('layanan.title') }}
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $layanan = [
                ['img'=>'layanankependudukan.png','title'=>__('layanan.kependudukan.title'),'desc'=>__('layanan.kependudukan.desc'),'bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananperizinan.png','title'=>__('layanan.perizinan.title'),'desc'=>__('layanan.perizinan.desc'),'bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananak1.png','title'=>__('layanan.ak1.title'),'desc'=>__('layanan.ak1.desc'),'bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layananopendata.png','title'=>__('layanan.opendata.title'),'desc'=>__('layanan.opendata.desc'),'bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layanandatastatistik.png','title'=>__('layanan.datastatistik.title'),'desc'=>__('layanan.datastatistik.desc'),'bg'=>'bg-white dark:bg-gray-800'],
                ['img'=>'layanankependudukan.png','title'=>__('layanan.pengaduan.title'),'desc'=>__('layanan.pengaduan.desc'),'bg'=>'bg-white dark:bg-gray-800'],
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
@endsection
