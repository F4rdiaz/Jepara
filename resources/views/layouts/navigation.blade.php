<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-jepara.png') }}" alt="Logo Jepara" class="me-2" style="height: 40px;">
            Pemerintah Kota Jepara
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- Beranda --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'text-danger' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                {{-- Profil Kota --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('profil/*') ? 'text-danger' : '' }}"
                       href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Kota
                    </a>
                    <ul class="dropdown-menu border-0 shadow rounded-3" aria-labelledby="profilDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->is('profil/sambutan-walikota') ? 'text-danger' : 'text-dark' }}"
                               href="{{ route('profil.sambutan') }}">
                                Sambutan Walikota
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('profil/sejarah-kota') ? 'text-danger' : 'text-dark' }}"
                               href="{{ route('profil.sejarah') }}">
                                Sejarah Kota
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('profil/visi-misi') ? 'text-danger' : 'text-dark' }}"
                               href="{{ route('profil.visimisi') }}">
                                Visi dan Misi
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Layanan Publik --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('layanan') ? 'text-danger' : '' }}" href="{{ route('layanan') }}">
                        Layanan Publik
                    </a>
                </li>

                {{-- Berita --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('berita.index') ? 'text-danger' : '' }}" href="{{ route('berita.index') }}">
                        Informasi Publik
                    </a>
                </li>

                {{-- Dokumen --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Dokumen</a>
                </li>

                {{-- Galeri --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galeri') ? 'text-danger' : '' }}" href="{{ route('galeri') }}">
                        Galeri
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .dropdown-menu {
        padding: 10px 0;
        min-width: 200px;
    }
    .dropdown-item {
        padding: 8px 16px;
        font-weight: 500;
    }
    .dropdown-item:hover {
        background-color: transparent;
        color: red !important;
    }
</style>
@include('navigation')
