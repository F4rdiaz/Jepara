@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <!-- Hero / Judul -->
    <header class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 dark:text-gray-100">
            Visi &amp; Misi Pemerintah Kota Jepara
        </h1>
        <p class="mt-3 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
            Arah pembangunan untuk meningkatkan kesejahteraan, menumbuhkan ekonomi kreatif, dan menjaga budaya serta lingkungan berkelanjutan.
        </p>
    </header>

    <!-- Visi (highlight box) -->
    <section class="mb-10">
        <div class="bg-gradient-to-r from-red-600 to-rose-500 text-white rounded-2xl p-6 shadow-lg">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold">Visi Kota Jepara</h2>
                    <p class="mt-3 text-lg sm:text-xl leading-relaxed">
                        “Jepara Maju, Sejahtera, dan Berbudaya Berbasis Ekonomi Kreatif dan Pariwisata Berkelanjutan.”
                    </p>
                </div>

                <div class="text-sm md:text-base text-white/90 max-w-md">
                    <h3 class="font-semibold mt-2 md:mt-0">Artinya</h3>
                    <p class="mt-2 leading-relaxed">
                        Menjadikan Jepara sebagai kota yang maju dalam pembangunan ekonomi, sosial, dan budaya
                        dengan mengoptimalkan potensi ekonomi kreatif dan pariwisata yang berkelanjutan untuk
                        meningkatkan kesejahteraan masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi (grid cards) -->
    <section>
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Misi Kota Jepara</h2>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-red-50 dark:bg-red-900/30 rounded-lg p-3">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-red-600 dark:text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5 12.083 12.083 0 015.84 10.578L12 14z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Meningkatkan Kualitas SDM</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Pendidikan berkualitas, pelatihan keterampilan, dan pengembangan kapasitas agar masyarakat mampu bersaing.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M3 7l9 6 9-6"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Mengembangkan Ekonomi Kreatif &amp; UMKM</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Mendukung UMKM dan kerajinan ukir Jepara sebagai penggerak ekonomi lokal dan pencipta lapangan kerja.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-green-50 dark:bg-green-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3M16 7V3M3 11h18M5 21h14a2 2 0 002-2V11H3v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Optimalkan Pariwisata Berkelanjutan</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Mengembangkan pariwisata budaya dan alam sambil menjaga kelestarian lingkungan dan komunitas lokal.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c0-1.657 1.343-3 3-3s3 1.343 3 3M3 21v-6a9 9 0 0118 0v6"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Tata Kelola Pemerintahan yang Baik</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Menjalankan pemerintahan yang bersih, transparan, dan akuntabel untuk melayani publik lebih baik.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 5 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 7h18M3 12h18M5 17h14"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Infrastruktur &amp; Konektivitas</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Meningkatkan infrastruktur publik—jalan, transportasi, sanitasi, dan koneksi digital—untuk mendukung aktivitas sosial ekonomi.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 6 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-pink-50 dark:bg-pink-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-pink-600 dark:text-pink-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Pelestarian Budaya &amp; Lingkungan</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Melindungi, melestarikan, dan mempromosikan seni, budaya, serta pengelolaan lingkungan yang bertanggung jawab.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 7 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-teal-50 dark:bg-teal-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-teal-600 dark:text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Kesejahteraan Sosial &amp; Kesehatan</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Menjamin akses layanan kesehatan, sosial, dan perlindungan bagi seluruh warga.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Card 8 -->
            <article class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-gray-50 dark:bg-gray-900/20 rounded-lg p-3">
                        <svg class="w-6 h-6 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 2l4 8-4 8-4-8 4-8z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100">Keamanan &amp; Ketertiban</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Menjamin ketertiban, keamanan, dan suasana kondusif sebagai prasyarat pembangunan berkelanjutan.
                        </p>
                    </div>
                </div>
            </article>
        </div>

        <!-- Penutup / Call to Action -->
        <div class="mt-10 text-center">
            <p class="text-gray-700 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Visi dan misi ini menjadi pedoman bersama — pemerintah, pelaku usaha, dan masyarakat — untuk membangun Jepara
                yang lebih maju, sejahtera, dan berbudaya. Mari bersinergi mewujudkannya.
            </p>
        </div>
    </section>
</div>

@endsection
