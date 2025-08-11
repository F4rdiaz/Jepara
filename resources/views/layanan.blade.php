@extends('layouts.app') {{-- pastikan layout ini ada. Jika belum, gunakan versi tanpa @extends --}}

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Daftar Layanan</h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Contoh layanan -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2 text-blue-700">Layanan Informasi Publik</h2>
            <p class="text-gray-600">Memberikan akses informasi bagi masyarakat sesuai UU KIP.</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2 text-blue-700">Layanan Pengaduan</h2>
            <p class="text-gray-600">Menampung aspirasi dan keluhan masyarakat terhadap pelayanan publik.</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2 text-blue-700">Layanan IT & Digitalisasi</h2>
            <p class="text-gray-600">Menyediakan dukungan teknis dan digitalisasi layanan OPD.</p>
        </div>

        <!-- Tambahkan lebih banyak layanan sesuai kebutuhan -->
    </div>
</div>
@endsection
