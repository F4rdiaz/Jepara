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
<header class="fixed top-0 left-0 w-full z-50" 
        x-data="{ mobileMenu: false, profilOpen: false, infoOpen: false }">
    <nav class="backdrop-blur-lg bg-white/30 dark:bg-gray-800/30 border-b border-white/20 dark:border-gray-700/20 shadow-sm">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between px-6 py-3">
            
            <!-- Logo -->
            <div>
                <img src="{{ asset('images/logo-jepara1.png') }}" alt="Logo Jepara" class="h-14 w-auto transform scale-150 origin-left">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 font-medium">
                <a href="{{ route('home') }}" class="nav-link">Beranda</a>

                <!-- Dropdown Profil Kota -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="nav-link flex items-center space-x-1">
                        <span>Profil Kota</span>
                        <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                         x-transition
                         class="absolute left-0 mt-2 w-52 bg-white dark:bg-gray-800 shadow-lg rounded-md overflow-hidden z-50">
                        <a href="{{ route('profil.sambutan') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Sambutan Walikota</a>
                        <a href="{{ route('profil.sejarah') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Sejarah Kota</a>
                        <a href="{{ route('profil.visimisi') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Visi & Misi</a>
                    </div>
                </div>

                <a href="{{ route('layanan') }}" class="nav-link">Layanan Publik</a>

                <!-- Dropdown Informasi Publik -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="nav-link flex items-center space-x-1">
                        <span>Informasi Publik</span>
                        <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        x-transition
                        class="absolute left-0 mt-2 w-52 bg-white dark:bg-gray-800 shadow-lg rounded-md overflow-hidden z-50">
                        <a href="{{ route('berita.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Berita</a>
                        <a href="{{ url('/informasi-publik/ppid') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">PPID</a>
                        <a href="{{ url('/informasi-publik/apbd') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">APBD</a>
                        <a href="{{ url('/informasi-publik/ipkd') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">IPKD</a>
                        <a href="{{ url('/informasi-publik/dokumen') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Dokumen</a>
                    </div>
                </div>
                

                <a href="{{ route('galeri') }}" class="nav-link">Galeri</a>
            </div>

            <!-- Right Icons (Dark Mode + Language + Hamburger) -->
            <div class="flex items-center gap-3">
                <!-- Dark Mode Toggle -->
                <button id="theme-toggle" class="p-2 rounded-full hover:bg-white/40 dark:hover:bg-gray-600/50 transition-all">
                    <img id="theme-toggle-icon" src="{{ asset('images/matahari.png') }}" alt="Toggle Theme" class="h-6 w-6">
                </button>
@php
    $currentLang = session('locale', 'en');
@endphp

<!-- Language Switcher -->
<div class="relative" x-data="{ open: false, lang: '{{ $currentLang }}' }">
    <!-- Button -->
    <button @click="open = !open" class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
        <img :src="lang == 'en' ? '{{ asset('images/english.png') }}' : '{{ asset('images/indonesia.png') }}'"
             class="h-5 w-5 rounded-full" alt="Language">
        <span class="ml-2" x-text="lang.toUpperCase()"></span>
        <svg class="w-4 h-4 ml-1 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <!-- Dropdown -->
    <div x-show="open" @click.away="open = false"
         class="absolute right-0 mt-2 bg-white dark:bg-gray-800 rounded shadow-lg z-50">
        <a href="{{ url('/lang/id') }}"
           @click.prevent="lang='id'; window.location.href='{{ url('/lang/id') }}'"
           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">ID</a>
        <a href="{{ url('/lang/en') }}"
           @click.prevent="lang='en'; window.location.href='{{ url('/lang/en') }}'"
           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">EN</a>
    </div>
</div>


                <!-- Hamburger -->
                <button @click="mobileMenu = !mobileMenu" class="md:hidden p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-transition class="md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 px-6 py-4 space-y-3">
            <a href="{{ route('home') }}" class="block">Beranda</a>

            <!-- Profil Kota Accordion -->
            <div>
                <button @click="profilOpen = !profilOpen" class="w-full text-left flex justify-between items-center py-2">
                    <span>Profil Kota</span>
                    <svg class="w-4 h-4" :class="profilOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="profilOpen" x-transition class="ml-4 space-y-2">
                    <a href="{{ route('profil.sambutan') }}" class="block text-sm">Sambutan Walikota</a>
                    <a href="{{ route('profil.sejarah') }}" class="block text-sm">Sejarah Kota</a>
                    <a href="{{ route('profil.visimisi') }}" class="block text-sm">Visi & Misi</a>
                </div>
            </div>

            <a href="{{ route('layanan') }}" class="block">Layanan Publik</a>

            <!-- Informasi Publik Accordion -->
            <div>
                <button @click="infoOpen = !infoOpen" class="w-full text-left flex justify-between items-center py-2">
                    <span>Informasi Publik</span>
                    <svg class="w-4 h-4" :class="infoOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="infoOpen" x-transition class="ml-4 space-y-2">
                    <a href="{{ route('berita.index') }}" class="block text-sm">Berita</a>
                    <a href="{{ url('/informasi-publik/ppid') }}" class="block text-sm">PPID</a>
                    <a href="{{ url('/informasi-publik/apbd') }}" class="block text-sm">APBD</a>
                    <a href="{{ url('/informasi-publik/ipkd') }}" class="block text-sm">IPKD</a>
                    <a href="{{ url('/informasi-publik/dokumen') }}" class="block text-sm">Dokumen</a>
                </div>
            </div>

            <a href="{{ route('galeri') }}" class="block">Galeri</a>
        </div>
    </nav>
</header>




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


    <!-- Main Content -->
    <main class="flex-grow w-full pt-20">
        @yield('content')
    </main>
<footer class="bg-cover bg-center text-white" style="background-image: url('{{ asset('images/gambar1.png') }}');"> 
    <div class="bg-black/50">
        <div class="max-w-screen-xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

            <!-- Kolom 1: Logo & Alamat -->
            <div>
                <h3 class="text-xl font-bold mb-4">Pemerintah Kabupaten Jepara</h3>
                <div class="flex items-start gap-4">
                    <img src="{{ asset('images/logo-jepara.png') }}" alt="Logo Jepara" class="w-20 h-auto">
                    <p class="text-sm leading-relaxed">
                        Jl. Kartini No.1,<br>
                        Kecamatan Jepara,<br>
                        Kabupaten Jepara,<br>
                        Jawa Tengah 59411<br>
                        Telepon : 0291-591492
                    </p>
                </div>
            </div>

            <!-- Kolom 2: Link Terkait -->
            <div>
                <h3 class="text-xl font-bold mb-4">Link Terkait</h3>
                <ul class="space-y-2">
                    <li><a href="https://spbe.jepara.go.id/" class="hover:text-yellow-300">SPBE Jepara</a></li>
                    <li><a href="https://csirt.jepara.go.id/" class="hover:text-yellow-300">CSIRT Jepara</a></li>
                    <li><a href="#" class="hover:text-yellow-300">Privacy and Policy</a></li>
                    <li><a href="#" class="hover:text-yellow-300">Term and Condition</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Peta Lokasi -->
            <div>
                <h3 class="text-xl font-bold mb-4">Lokasi Kami</h3>
                <div class="rounded-lg overflow-hidden border border-white/30 shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2445122972566!2d110.6651681766803!3d-6.591509693396055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f0321765631%3A0x79188af8cb42f959!2sDinas%20Komunikasi%20dan%20Informatika%20(DISKOMINFO)%20Kabupaten%20Jepara!5e0!3m2!1sid!2sid!4v1691160400000!5m2!1sid!2sid" 
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="bg-black/40 border-t border-white/10 py-4 text-center text-sm">
            <p>1549 – {{ date('Y') }} Kabupaten Jepara | Made by diskominfo kabupaten Jepara</p>
        </div>
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
<!-- Floating Buttons -->
<div class="fixed bottom-6 right-6 flex flex-col gap-4 z-50">

  <!-- Accessibility -->
  <button id="toggle-toolbar" title="Accessibility"
    class="relative w-20 h-20 rounded-full flex items-center justify-center 
           bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
           transition-transform duration-300 hover:scale-110 hover:shadow-xl group">
    <img src="{{ asset('images/difabel.png') }}" alt="Accessibility" 
         class="h-10 w-10 transition-transform duration-500 group-hover:rotate-12">
    <span class="absolute left-[-170%] top-1/2 -translate-y-1/2 
                 bg-gray-900/90 text-white text-sm font-semibold px-3 py-1 
                 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg">
      Aksesibilitas
    </span>
  </button>

  <!-- Wadul Bupati -->
  <a href="https://wadul.jepara.go.id/" target="_blank" title="Wadul Bupati"
     class="relative w-20 h-20 rounded-full flex items-center justify-center 
            bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
            transition-transform duration-300 hover:scale-110 hover:shadow-xl group">
    <img src="{{ asset('images/wadulbupati.png') }}" alt="Wadul Bupati" 
         class="h-10 w-10 transition-transform duration-500 group-hover:rotate-12">
    <span class="absolute left-[-150%] top-1/2 -translate-y-1/2 
                 bg-gray-900/90 text-white text-sm font-semibold px-3 py-1 
                 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg">
      Wadul Bupati
    </span>
  </a>

  <!-- Lapor -->
  <a href="https://laporgub.jatengprov.go.id/" target="_blank" title="Lapor"
     class="relative w-20 h-20 rounded-full flex items-center justify-center 
            bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
            transition-transform duration-300 hover:scale-110 hover:shadow-xl group">
    <img src="{{ asset('images/lapor.png') }}" alt="Lapor" 
         class="h-10 w-10 transition-transform duration-500 group-hover:rotate-12">
    <span class="absolute left-[-150%] top-1/2 -translate-y-1/2 
                 bg-gray-900/90 text-white text-sm font-semibold px-3 py-1 
                 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg">
      Lapor
    </span>
  </a>
</div>

<!-- Accessibility Menu -->
<div id="toolbar-menu" 
     class="fixed bottom-28 right-28 bg-white dark:bg-gray-800 shadow-2xl 
            rounded-2xl p-4 w-72 space-y-2 z-[9999] 
            opacity-0 scale-95 pointer-events-none 
            transition-all duration-300">

  <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-3 border-b pb-2">
    Difabel Tools
  </h3>

  <button onclick="increaseText()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">🔍 Perbesar Teks</button>

  <button onclick="decreaseText()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">🔎 Perkecil Teks</button>

  <button onclick="readableFont()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">📖 Font Mudah Dibaca</button>

  <button onclick="toggleGrayscale()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">⚫ Grayscale</button>

  <button onclick="toggleHighContrast()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">🌗 Kontras Tinggi</button>

  <button onclick="toggleNegative()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">🌑 Kontras Negatif</button>

  <button onclick="lightBackground()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">☀️ Latar Terang</button>

  <button onclick="underlineLinks()" 
          class="w-full p-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-left 
                 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">🔗 Garisbawahi Link</button>

  <button onclick="resetAccessibility()" 
          class="w-full p-2 rounded-lg bg-red-500 text-white hover:bg-red-600 text-left">♻️ Reset</button>
</div>

<script>
  const toggleToolbar = document.getElementById("toggle-toolbar");
  const toolbarMenu = document.getElementById("toolbar-menu");

  toggleToolbar.addEventListener("click", (e) => {
    e.stopPropagation();
    toolbarMenu.classList.toggle("opacity-0");
    toolbarMenu.classList.toggle("scale-95");
    toolbarMenu.classList.toggle("pointer-events-none");
  });

  document.addEventListener("click", (e) => {
    if (!toolbarMenu.contains(e.target) && !toggleToolbar.contains(e.target)) {
      toolbarMenu.classList.add("opacity-0", "scale-95", "pointer-events-none");
    }
  });

  // ================== Fungsi Aksesibilitas ==================
  let currentFontSize = 100;

  function increaseText() {
    currentFontSize += 10;
    document.body.style.fontSize = currentFontSize + "%";
  }

  function decreaseText() {
    currentFontSize -= 10;
    if (currentFontSize < 50) currentFontSize = 50;
    document.body.style.fontSize = currentFontSize + "%";
  }

  function readableFont() {
    document.body.style.fontFamily = "'Arial','Verdana',sans-serif";
  }

  function toggleGrayscale() {
    document.body.classList.toggle("grayscale");
  }

  function toggleHighContrast() {
    document.body.classList.toggle("high-contrast");
  }

  function toggleNegative() {
    document.body.classList.toggle("negative-contrast");
  }

  function lightBackground() {
    document.body.style.backgroundColor = "#ffffff";
    document.body.style.color = "#000000";
  }

  function underlineLinks() {
    document.querySelectorAll("a").forEach(a => {
      a.style.textDecoration = "underline";
    });
  }

  function resetAccessibility() {
    currentFontSize = 100;
    document.body.style.fontSize = "100%";
    document.body.style.fontFamily = "";
    document.body.style.backgroundColor = "";
    document.body.style.color = "";
    document.body.classList.remove("grayscale", "high-contrast", "negative-contrast");
    document.querySelectorAll("a").forEach(a => {
      a.style.textDecoration = "";
    });
  }
</script>

<style>
  .grayscale { filter: grayscale(100%); }
  .high-contrast { background-color:#000 !important; color:#fff !important; }
  .negative-contrast { filter: invert(100%) hue-rotate(180deg); }
</style>
