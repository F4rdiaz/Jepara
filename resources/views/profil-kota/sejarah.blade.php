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
<!-- Floating Button Pengaduan -->
<div class="fixed bottom-6 right-6 flex flex-col gap-4 z-50">

    <!-- Wadul Bupati -->
    <a href="https://wadul.jepara.go.id/" target="_blank" title="Wadul Bupati"
       class="relative bg-blue-500 hover:bg-blue-600 w-20 h-20 rounded-full shadow-2xl flex items-center justify-center transition-transform duration-300 hover:scale-110 animate-bounce-slow group">
        <img src="{{ asset('images/wadulbupati.png') }}" alt="Wadul Bupati" class="h-10 w-10">
        <!-- Tooltip -->
        <span class="absolute left-[-140%] top-1/2 -translate-y-1/2 bg-gray-800 text-white text-sm font-medium px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
            Wadul Bupati
        </span>
    </a>

    <!-- Lapor -->
    <a href="https://laporgub.jatengprov.go.id/" target="_blank" title="Lapor"
       class="relative bg-red-500 hover:bg-red-600 w-20 h-20 rounded-full shadow-2xl flex items-center justify-center transition-transform duration-300 hover:scale-110 animate-bounce-slow group">
        <img src="{{ asset('images/lapor.png') }}" alt="Lapor" class="h-10 w-10">
        <!-- Tooltip -->
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
</div>
@endsection
