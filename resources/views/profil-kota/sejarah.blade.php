@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 my-10 space-y-12">

    <!-- Judul Halaman -->
    <div class="text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-3">
            Sejarah Kota Jepara
        </h1>
        <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
            Kota Jepara memiliki sejarah panjang yang kaya akan budaya, perjuangan, dan seni. 
            Dari masa kerajaan hingga era modern, Jepara terus menjadi pusat perdagangan, pelabuhan, dan seni ukir yang mendunia.
        </p>
    </div>

    <!-- Bagian 1 -->
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
            <img src="{{ asset('images/gambar4.png') }}" alt="Awal Mula dan Kerajaan Jepara" 
                 class="rounded-2xl shadow-lg">
        </div>
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Awal Mula dan Kerajaan Jepara</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                Kota Jepara terletak di pesisir utara Pulau Jawa bagian tengah dan dikenal sebagai kota 
                yang kaya akan sejarah dan budaya. Sejak abad ke-15, Jepara menjadi pusat perdagangan 
                dan pelabuhan penting di kawasan pesisir utara Jawa, bahkan menjadi bagian dari wilayah 
                Kerajaan Demak — kerajaan Islam pertama di Jawa.
            </p>
        </div>
    </div>

    <!-- Bagian 2 -->
    <div class="grid md:grid-cols-2 gap-8 items-center md:flex-row-reverse">
        <div class="order-2 md:order-1 space-y-4">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Masa Kerajaan dan Kesultanan Jepara</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                Pada abad ke-16, Jepara dipimpin oleh Ratu Kalinyamat (1549–1579), seorang tokoh perempuan 
                yang terkenal karena keberanian dan kepemimpinannya melawan kolonialisme Portugis dan Belanda. 
                Di masa itu, Jepara berkembang sebagai pusat perdagangan, pelayaran, dan budaya, 
                serta menjalin hubungan diplomatik dengan kerajaan-kerajaan besar di Nusantara.
            </p>
        </div>
        <div class="order-1 md:order-2">
            <img src="{{ asset('images/gambar2.png') }}" alt="Masa Kerajaan dan Kesultanan Jepara" 
                 class="rounded-2xl shadow-lg">
        </div>
    </div>

    <!-- Bagian 3 -->
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
            <img src="{{ asset('images/gambar3.png') }}" alt="Jepara di Era Modern" 
                 class="rounded-2xl shadow-lg">
        </div>
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Jepara di Era Modern</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                Setelah melewati masa kolonial dan kemerdekaan, Jepara berkembang sebagai pusat kerajinan ukir kayu, 
                pariwisata, dan perdagangan. Pemerintah daerah terus mengembangkan infrastruktur serta potensi 
                budaya untuk meningkatkan kesejahteraan masyarakat. Kini, Jepara menjadi destinasi wisata sejarah, 
                budaya, dan pantai yang menarik wisatawan dari seluruh dunia.
            </p>
        </div>
    </div>

</div>

@endsection
