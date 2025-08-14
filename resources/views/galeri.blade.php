@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold text-center mb-10 text-black dark:text-white">Galeri</h1>

    <!-- Grid Galeri -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $galeri = [
                ['img'=>'galeri1.jpg','title'=>'Kegiatan 1'],
                ['img'=>'galeri2.jpg','title'=>'Kegiatan 2'],
                ['img'=>'galeri3.jpg','title'=>'Kegiatan 3'],
                ['img'=>'galeri4.jpg','title'=>'Kegiatan 4'],
                ['img'=>'galeri5.jpg','title'=>'Kegiatan 5'],
                ['img'=>'galeri6.jpg','title'=>'Kegiatan 6'],
            ];
        @endphp

        @foreach($galeri as $item)
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-xl overflow-hidden transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('images/'.$item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $item['title'] }}</h3>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
