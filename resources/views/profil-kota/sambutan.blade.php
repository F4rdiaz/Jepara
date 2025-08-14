@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 my-10">
    <div class="grid md:grid-cols-3 gap-8 items-start">
        
        <!-- Foto Bupati -->
        <div class="flex flex-col items-center">
            <div class="relative group">
                <img src="{{ asset('images/bupati-jepara.png') }}" 
                     alt="Bupati Jepara" 
                     class="rounded-2xl shadow-lg transform transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
            </div>
            <div class="bg-red-600 text-white text-center px-4 py-3 mt-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">H. Witiarso Utomo, S.E</h2>
                <p class="text-sm tracking-wide">BUPATI JEPARA</p>
            </div>
        </div>

        <!-- Sambutan -->
        <div class="md:col-span-2 bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg space-y-5">
            <h4 class="text-xl font-bold text-gray-800 dark:text-white">Assalamu’alaikum Wr. Wb.</h4>
            <p class="leading-relaxed text-gray-700 dark:text-gray-300">
                Sedulur Warga Kabupaten Jepara yang saya cintai dan banggakan,
                puji syukur kita panjatkan ke hadirat Allah SWT atas limpahan rahmat dan karunia-Nya.
                Pemerintah Kabupaten Jepara terus berupaya menghadirkan pelayanan publik yang transparan,
                akuntabel, dan mudah diakses melalui portal resmi
                <strong class="text-red-600">www.jeparakab.go.id</strong>.
            </p>
            <p class="leading-relaxed text-gray-700 dark:text-gray-300">
                Portal ini menjadi wadah informasi, dokumentasi, serta sarana komunikasi
                antara Pemerintah Daerah dan masyarakat. Melalui berbagai fitur dan layanan yang ada,
                kami berharap masyarakat dapat memperoleh informasi yang cepat, tepat, dan akurat
                mengenai program-program pembangunan di Kabupaten Jepara.
            </p>
            <p class="leading-relaxed text-gray-700 dark:text-gray-300">
                Kami juga membuka ruang partisipasi masyarakat untuk ikut serta dalam proses pembangunan,
                menyampaikan aspirasi, kritik, dan saran demi kemajuan bersama.
                Semoga portal ini dapat menjadi jembatan yang mempererat hubungan
                antara pemerintah dan masyarakat Jepara.
            </p>
            <p class="leading-relaxed text-gray-700 dark:text-gray-300">
                Terima kasih kepada seluruh pihak yang telah berkontribusi
                dalam pengembangan dan pengelolaan portal ini.
                Semoga Allah SWT senantiasa meridhoi setiap langkah kita.
            </p>
            <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Wassalamu’alaikum Wr. Wb.</h5>
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
