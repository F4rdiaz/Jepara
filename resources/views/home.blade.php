@extends('layouts.app')

@section('title', 'Beranda - Pemerintah Kota Jepara')

@section('content')
<!-- Hero Section -->
<section 
    class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-center" 
    style="background-image: url('{{ asset('images/jepara.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 text-white max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Website Resmi Pemerintah Kota Jepara</h1>
        <p class="text-lg md:text-xl text-gray-200 mb-6">
            Informasi resmi, berita terkini, dan agenda penting seputar Kota Jepara.
        </p>
        <a href="#berita" 
           class="px-6 py-3 bg-yellow-500 text-black rounded-full font-semibold hover:bg-yellow-400 transition">
            Lihat Berita Terbaru
        </a>
    </div>
</section>

<!-- Berita Terbaru -->
<section id="berita" class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Berita Terbaru</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ([
            ['kategori' => 'Pemerintahan', 'judul' => 'Jepara Gelar Festival Kartini 2025', 'deskripsi' => 'Festival Kartini 2025 sukses digelar dengan rangkaian acara budaya, pameran UMKM, dan pertunjukan seni tradisional.', 'tanggal' => '2025-08-07 08:30:00', 'gambar' => 'https://via.placeholder.com/600x400'],
            ['kategori' => 'Ekonomi', 'judul' => 'Pelatihan UMKM untuk Pengusaha Muda Jepara', 'deskripsi' => 'Pemerintah Kota Jepara mengadakan pelatihan UMKM untuk meningkatkan daya saing pengusaha muda di pasar global.', 'tanggal' => '2025-08-06 14:15:00', 'gambar' => 'https://via.placeholder.com/600x400'],
            ['kategori' => 'Pariwisata', 'judul' => 'Pantai Kartini Masuk Destinasi Wisata Nasional', 'deskripsi' => 'Pantai Kartini resmi ditetapkan sebagai salah satu destinasi wisata unggulan nasional oleh Kementerian Pariwisata.', 'tanggal' => '2025-08-05 09:45:00', 'gambar' => 'https://via.placeholder.com/600x400']
        ] as $berita)
        <div class="bg-white bg-opacity-80 backdrop-blur-lg rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
            <img src="{{ $berita['gambar'] }}" alt="Gambar Berita" class="w-full h-48 object-cover">
            <div class="p-5">
                <span class="inline-block bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded mb-3">
                    {{ $berita['kategori'] }}
                </span>
                <h3 class="font-bold text-lg mb-2 hover:text-yellow-600 cursor-pointer line-clamp-2">
                    {{ $berita['judul'] }}
                </h3>
                <p class="text-sm text-gray-700 mb-3 line-clamp-3">{{ $berita['deskripsi'] }}</p>
                <p class="text-xs text-gray-500">{{ $berita['tanggal'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Tentang Jepara -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Jepara_Town_Hall.jpg" 
                 alt="Balai Kota Jepara" 
                 class="rounded-xl shadow-lg">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Tentang Kota Jepara</h2>
            <p class="text-gray-600 mb-6">
                Jepara dikenal sebagai Kota Ukir dengan kekayaan budaya, sejarah, dan keindahan alamnya. 
                Pemerintah Kota Jepara berkomitmen untuk membangun kota yang maju, sejahtera, dan lestari, 
                dengan memanfaatkan potensi daerah serta menjaga tradisi.
            </p>
            <a href="#" class="px-6 py-3 bg-yellow-500 text-black rounded-full font-semibold hover:bg-yellow-400 transition">
                Selengkapnya
            </a>
        </div>
    </div>
</section>
@endsection
