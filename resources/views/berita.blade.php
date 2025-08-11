{{-- resources/views/berita.blade.php --}}
@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-96 flex items-center justify-center bg-cover bg-center"
        style="background-image: url('{{ asset('images/bg-berita.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center text-white">
            <h1 class="text-5xl font-bold">Berita</h1>
            <p class="mt-3 text-lg">Informasi Cepat, Aktual, dan Inspiratif</p>
            <!-- Breadcrumb -->
            <div class="mt-4 flex items-center justify-center space-x-2 text-sm">
                <a href="{{ route('home') }}" class="flex items-center hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
                    </svg>
                    Home
                </a>
                <span>›</span>
                <span class="text-orange-500 font-semibold">Berita</span>
            </div>
        </div>
    </section>

    <!-- Counter + List -->
    <section class="py-10 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 md:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <p class="text-lg mb-6">
                    <span class="text-orange-500 font-bold">{{ $totalPublikasi }}</span> Publikasi ditemukan
                </p>

                <div class="space-y-6">
                    @foreach ($berita as $item)
                        <div class="bg-white shadow rounded-lg overflow-hidden flex flex-col md:flex-row">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full md:w-56 h-40 object-cover">
                            <div class="p-4 flex-1">
                                <h3 class="font-bold text-lg mb-2 hover:text-orange-500 transition">
                                    <a href="{{ route('berita.show', $item->id) }}">{{ $item->judul }}</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-3">{{ Str::limit($item->isi, 150) }}</p>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">{{ $item->tanggal->translatedFormat('l, d F Y') }}</span>
                                    <span class="bg-orange-100 text-orange-500 px-2 py-1 rounded text-xs">Berita</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-6">
                    {{ $berita->links() }}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Pencarian -->
                <div class="bg-white shadow rounded-lg p-4">
                    <h4 class="font-bold text-lg mb-3">Pencarian <span class="text-orange-500">Berita</span></h4>
                    <form action="{{ route('berita.index') }}" method="GET">
                        <input type="text" name="q" placeholder="Ketik dan tekan enter"
                            class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </form>
                </div>

                <!-- Kategori -->
                <div class="bg-white shadow rounded-lg p-4">
                    <h4 class="font-bold text-lg mb-3">Semua <span class="text-orange-500">Kategori</span></h4>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="px-3 py-1 bg-orange-100 text-orange-500 rounded text-sm">Berita</a>
                        <a href="#" class="px-3 py-1 bg-orange-100 text-orange-500 rounded text-sm">Pengumuman</a>
                    </div>
                </div>

                <!-- Berita Populer -->
                <div class="bg-white shadow rounded-lg p-4">
                    <h4 class="font-bold text-lg mb-3">Berita <span class="text-orange-500">Populer</span></h4>
                    <div class="space-y-3">
                        @foreach ($beritaPopuler as $pop)
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('storage/' . $pop->gambar) }}" alt="{{ $pop->judul }}"
                                    class="w-16 h-12 object-cover rounded">
                                <div>
                                    <a href="{{ route('berita.show', $pop->id) }}"
                                        class="text-sm font-semibold hover:text-orange-500">{{ $pop->judul }}</a>
                                    <p class="text-xs text-gray-500">{{ $pop->tanggal->translatedFormat('l, d F Y') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
