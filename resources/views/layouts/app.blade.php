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

                <!-- Dropdown Profil -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="nav-link flex items-center space-x-1">
                        <span>Profil</span>
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

                <!-- Language Switcher -->
                @php
                    $currentLang = session('locale', 'en');
                @endphp
                <div class="relative" x-data="{ open: false, lang: '{{ $currentLang }}' }">
                    <button @click="open = !open" class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
                        <img :src="lang == 'en' ? '{{ asset('images/english.png') }}' : '{{ asset('images/indonesia.png') }}'"
                            class="h-5 w-5 rounded-full" alt="Language">
                        <span class="ml-2" x-text="lang.toUpperCase()"></span>
                        <svg class="w-4 h-4 ml-1 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 mt-2 bg-white dark:bg-gray-800 rounded shadow-lg z-50">
                        <a href="{{ url('/lang/id') }}" @click.prevent="lang='id'; window.location.href='{{ url('/lang/id') }}'" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">ID</a>
                        <a href="{{ url('/lang/en') }}" @click.prevent="lang='en'; window.location.href='{{ url('/lang/en') }}'" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">EN</a>
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

            <!-- Profil Accordion -->
            <div>
                <button @click="profilOpen = !profilOpen" class="w-full text-left flex justify-between items-center py-2">
                    <span>Profil</span>
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
<!-- Floating Button Pengaduan -->
<div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3">

  <!-- Tombol Wadul Bupati -->
  <a href="https://wadul.jepara.go.id/" target="_blank" title="Wadul Bupati"
     class="relative w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center 
            bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
            transform transition-all duration-300 hover:scale-110 hover:shadow-xl group">
    <img src="{{ asset('images/wadulbupati.png') }}" alt="Wadul Bupati" 
         class="h-6 w-6 md:h-8 md:w-8 transition-transform duration-500 group-hover:rotate-12">
    <span class="absolute right-[110%] top-1/2 -translate-y-1/2 
                 bg-gray-900/90 text-white text-xs md:text-sm font-semibold px-2 py-1 
                 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg whitespace-nowrap">
      Wadul Bupati
    </span>
  </a>

  <!-- Tombol Lapor -->
  <a href="https://laporgub.jatengprov.go.id/" target="_blank" title="Lapor"
     class="relative w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center 
            bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
            transform transition-all duration-300 hover:scale-110 hover:shadow-xl group">
    <img src="{{ asset('images/lapor.png') }}" alt="Lapor" 
         class="h-6 w-6 md:h-8 md:w-8 transition-transform duration-500 group-hover:rotate-12">
    <span class="absolute right-[110%] top-1/2 -translate-y-1/2 
                 bg-gray-900/90 text-white text-xs md:text-sm font-semibold px-2 py-1 
                 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg whitespace-nowrap">
      Lapor
    </span>
  </a>

</div>

<!-- Accessibility Tools (Kotak Biru di Kanan) -->
<div id="accessibility-wrapper" class="fixed top-1/3 right-0 z-50">
  <!-- Tombol Trigger -->
  <button id="accessibility-btn" 
          class="w-14 h-14 flex items-center justify-center 
                 bg-sky-600 hover:bg-sky-700 text-white shadow-lg 
                 rounded-l-xl transition-all duration-300">
    <img src="{{ asset('images/difabel.png') }}" alt="Aksesibilitas" class="w-8 h-8">
  </button>

  <!-- Panel Tools -->
  <div id="accessibility-panel" 
       class="hidden absolute top-0 right-16 bg-white dark:bg-gray-800 
              shadow-xl rounded-xl p-4 w-64 flex-col gap-3 border border-gray-200 dark:border-gray-700">
    <h3 class="text-sm font-bold text-gray-700 dark:text-gray-200 mb-2">Accessibility Tools</h3>
    
    <div class="flex flex-col gap-2">
      <button onclick="increaseText()" class="access-btn">Perbesar Teks</button>
      <button onclick="decreaseText()" class="access-btn">Perkecil Teks</button>
      <button onclick="toggleGrayscale()" class="access-btn">Grayscale</button>
      <button onclick="toggleHighContrast()" class="access-btn">High Contrast</button>
      <button onclick="toggleNegativeContrast()" class="access-btn">Negative Contrast</button>
      <button onclick="toggleUnderlineLinks()" class="access-btn">Underline Links</button>
      <button onclick="toggleReadableFont()" class="access-btn">Readable Font</button>
      <button onclick="resetAccessibility()" 
              class="access-btn bg-red-500 text-white hover:bg-red-600">Reset</button>
    </div>

    <!-- Tambahan Link Eksternal -->
    <div class="flex flex-col gap-3 mt-4">
      <!-- Wadul Bupati -->
      <a href="https://wadul.jepara.go.id/" target="_blank" title="Wadul Bupati"
         class="relative w-16 h-16 rounded-full flex items-center justify-center 
                bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
                transform transition-all duration-300 hover:scale-110 hover:shadow-xl group translate-y-5 opacity-0">
        <img src="{{ asset('images/wadulbupati.png') }}" alt="Wadul Bupati" 
             class="h-8 w-8 transition-transform duration-500 group-hover:rotate-12">
        <span class="absolute right-[110%] top-1/2 -translate-y-1/2 
                     bg-gray-900/90 text-white text-sm font-semibold px-3 py-1 
                     rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg">
          Wadul Bupati
        </span>
      </a>

      <!-- Lapor -->
      <a href="https://laporgub.jatengprov.go.id/" target="_blank" title="Lapor"
         class="relative w-16 h-16 rounded-full flex items-center justify-center 
                bg-white/20 backdrop-blur-md shadow-lg border border-white/30 
                transform transition-all duration-300 hover:scale-110 hover:shadow-xl group translate-y-5 opacity-0">
        <img src="{{ asset('images/lapor.png') }}" alt="Lapor" 
             class="h-8 w-8 transition-transform duration-500 group-hover:rotate-12">
        <span class="absolute right-[110%] top-1/2 -translate-y-1/2 
                     bg-gray-900/90 text-white text-sm font-semibold px-3 py-1 
                     rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-lg">
          Lapor
        </span>
      </a>
    </div>
  </div>
</div>

<style>
  .access-btn {
    @apply px-3 py-2 text-sm rounded-md bg-gray-100 dark:bg-gray-700 
           hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-100 text-left;
  }
  body.grayscale { filter: grayscale(100%); }
  body.high-contrast { background:#000 !important; color:#fff !important; }
  body.negative-contrast { filter: invert(100%); }
  body.underline-links a { text-decoration: underline !important; }
  body.readable-font { font-family: Arial, sans-serif !important; }
</style>

<script>
  const panel = document.getElementById("accessibility-panel");
  const btn = document.getElementById("accessibility-btn");
  const wrapper = document.getElementById("accessibility-wrapper");

  // Desktop: hover buka otomatis
  if (window.innerWidth >= 768) {
    wrapper.addEventListener("mouseenter", () => {
      panel.classList.remove("hidden");
      panel.classList.add("flex");
    });
    wrapper.addEventListener("mouseleave", () => {
      panel.classList.add("hidden");
      panel.classList.remove("flex");
    });
  } else {
    // Mobile: klik dulu
    btn.addEventListener("click", () => {
      panel.classList.toggle("hidden");
      panel.classList.toggle("flex");
    });
  }

  // Accessibility Functions
  function increaseText() {
    let size = parseFloat(localStorage.getItem("fontSize")) || 1;
    size += 0.1;
    document.documentElement.style.fontSize = `${size}em`;
    localStorage.setItem("fontSize", size);
  }
  function decreaseText() {
    let size = parseFloat(localStorage.getItem("fontSize")) || 1;
    size = Math.max(0.8, size - 0.1);
    document.documentElement.style.fontSize = `${size}em`;
    localStorage.setItem("fontSize", size);
  }
  function toggleGrayscale() {
    document.body.classList.toggle("grayscale");
    localStorage.setItem("grayscale", document.body.classList.contains("grayscale"));
  }
  function toggleHighContrast() {
    document.body.classList.toggle("high-contrast");
    localStorage.setItem("highContrast", document.body.classList.contains("high-contrast"));
  }
  function toggleNegativeContrast() {
    document.body.classList.toggle("negative-contrast");
    localStorage.setItem("negativeContrast", document.body.classList.contains("negative-contrast"));
  }
  function toggleUnderlineLinks() {
    document.body.classList.toggle("underline-links");
    localStorage.setItem("underlineLinks", document.body.classList.contains("underline-links"));
  }
  function toggleReadableFont() {
    document.body.classList.toggle("readable-font");
    localStorage.setItem("readableFont", document.body.classList.contains("readable-font"));
  }
  function resetAccessibility() {
    document.body.className = "";
    document.documentElement.style.fontSize = "1em";
    localStorage.clear();
  }

  // Load saved state
  window.onload = () => {
    if (localStorage.getItem("fontSize")) {
      document.documentElement.style.fontSize = `${localStorage.getItem("fontSize")}em`;
    }
    if (localStorage.getItem("grayscale") === "true") document.body.classList.add("grayscale");
    if (localStorage.getItem("highContrast") === "true") document.body.classList.add("high-contrast");
    if (localStorage.getItem("negativeContrast") === "true") document.body.classList.add("negative-contrast");
    if (localStorage.getItem("underlineLinks") === "true") document.body.classList.add("underline-links");
    if (localStorage.getItem("readableFont") === "true") document.body.classList.add("readable-font");
  };
</script>
