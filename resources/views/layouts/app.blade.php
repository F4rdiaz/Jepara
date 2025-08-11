<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Pemerintah Kota Jepara') }}</title>

    <!-- Load Dark Mode Setting -->
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col overflow-x-hidden bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full z-50">
        <nav class="backdrop-blur-lg bg-white/30 dark:bg-gray-800/30 border-b border-white/20 dark:border-gray-700/20 shadow-sm">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between px-6 py-3">
                
                <!-- Logo + Title -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo-jepara.png') }}" alt="Logo Jepara" class="h-10 w-auto">
                    <span class="text-lg font-bold text-black dark:text-white">Pemerintah Kota Jepara</span>
                </div>

                <!-- Menu -->
                <div class="hidden md:flex items-center space-x-8 font-medium">

                    <!-- Beranda -->
                    <a href="{{ route('home') }}" class="nav-link">Beranda</a>

                    <!-- Dropdown Profil Kota -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="nav-link flex items-center space-x-1 focus:outline-none">
                            <span>Profil Kota</span>
                            <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false"
                             x-transition
                             class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-md overflow-hidden z-50">
                            <a href="{{ route('profil.sambutan') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">
                                Sambutan Walikota
                            </a>
                            <a href="{{ route('profil.sejarah') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">
                                Sejarah Kota
                            </a>
                            <a href="{{ route('profil.visimisi') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">
                                Visi & Misi
                            </a>
                        </div>
                    </div>

                    <!-- Layanan Publik -->
                    <a href="{{ route('layanan') }}" class="nav-link">Layanan Publik</a>

                    <!-- Dropdown Informasi Publik -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="nav-link flex items-center space-x-1 focus:outline-none">
                            <span>Informasi Publik</span>
                            <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false"
                             x-transition
                             class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-md overflow-hidden z-50">
                            <a href="{{ route('berita.index') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">
                                Berita
                            </a>
                            <a href="{{ url('/informasi-publik/ppid') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">
                                PPID
                            </a>
                        </div>
                    </div>

                    <!-- Dokumen & Galeri -->
                    <a href="#" class="nav-link">Dokumen</a>
                    <a href="{{ route('galeri') }}" class="nav-link">Galeri</a>
                </div>

                <!-- Dark Mode Toggle -->
                <button id="theme-toggle" class="p-2 rounded-full hover:bg-white/40 dark:hover:bg-gray-600/50 transition-all">
                    <img id="theme-toggle-icon" src="{{ asset('images/matahari.png') }}" alt="Toggle Theme" class="h-6 w-6">
                </button>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow w-full pt-20">
        @yield('content')
    </main>
  <footer class="bg-gradient-to-br from-[#4E342E] to-[#3E2723] text-white">
    <div class="max-w-screen-xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-semibold mb-4 border-b-2 border-yellow-400 inline-block pb-1">
                Kontak Pemkab Jepara
            </h3>
            <p class="text-sm leading-relaxed">
                Gedung OPD Bersama<br>
                Jl. Kartini No. 1 Jepara, Jawa Tengah<br>
                Email:
                <a href="mailto:diskominfo@jepara.go.id" class="text-yellow-400 hover:underline">
                    diskominfo@jepara.go.id
                </a><br>
                Telepon Darurat: <span class="font-bold">112</span>
            </p>
        </div>

        <!-- Aplikasi -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 border-b-2 border-yellow-400 inline-block pb-1">
                        Aplikasi Resmi
                    </h3>
                    <a href="https://play.google.com/store/apps/details?id=com.diskominfojepara.samudra_jepara"
                    target="_blank"
                    class="flex items-center bg-black rounded-lg px-4 py-2 w-fit hover:scale-105 transform transition duration-300">
                        <img src="{{ asset('images/playstore.png') }}" alt="Google Play" class="w-8 h-8 mr-3">
                        <div class="flex flex-col leading-tight">
                            <span class="text-xs">Dapatkan Aplikasi Kami di</span>
                            <span class="text-lg font-semibold">Google Play</span>
                        </div>
                    </a>
                </div>


        <!-- Sosial Media -->
        <div>
            <h3 class="text-lg font-semibold mb-4 border-b-2 border-yellow-400 inline-block pb-1">
                Sosial Media
            </h3>
            <div class="flex space-x-4">
                <a href="https://instagram.com" target="_blank" class="hover:scale-110 transition">
                    <img src="{{ asset('images/ig.png') }}" class="w-8">
                </a>
                <a href="https://facebook.com" target="_blank" class="hover:scale-110 transition">
                    <img src="{{ asset('images/fb.png') }}" class="w-8">
                </a>
                <a href="https://x.com" target="_blank" class="hover:scale-110 transition">
                    <img src="{{ asset('images/x.png') }}" class="w-8">
                </a>
                <a href="https://youtube.com" target="_blank" class="hover:scale-110 transition">
                    <img src="{{ asset('images/yt.png') }}" class="w-8">
                </a>
            </div>
        </div>

        <!-- Peta -->
        <div>
            <h3 class="text-lg font-semibold mb-4 border-b-2 border-yellow-400 inline-block pb-1">
                Peta Lokasi
            </h3>
            <div class="rounded-lg overflow-hidden shadow-lg border border-white/20">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2064290544033!2d110.66471327571126!3d-6.587611093404082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c5fcd73a0c33%3A0x97b5a5c33b95b55!2sKantor%20Bupati%20Jepara!5e0!3m2!1sid!2sid!4v1691160400000!5m2!1sid!2sid"
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-black/30 border-t border-white/10 py-4 text-center text-sm">
        <p>&copy; {{ date('Y') }} Pemerintah Kabupaten Jepara. Semua Hak Dilindungi.</p>
    </div>
</footer>



    <!-- Dark Mode Script -->
    <script>
        const html = document.documentElement;
        const toggleBtn = document.getElementById('theme-toggle');
        const toggleIcon = document.getElementById('theme-toggle-icon');

        function updateIcon() {
            if (html.classList.contains('dark')) {
                toggleIcon.src = "{{ asset('images/matahari.png') }}";
            } else {
                toggleIcon.src = "{{ asset('images/bulan.png') }}";
            }
        }

        updateIcon();

        toggleBtn.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
            updateIcon();
        });
    </script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Tailwind Utility for Hover Effect -->
    <style>
        .nav-link {
            position: relative;
            color: inherit;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            height: 2px;
            width: 0;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>

</body>
</html>
