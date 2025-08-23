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
                <strong class="text-red-600">jepara.go.id</strong>.
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


@endsection
