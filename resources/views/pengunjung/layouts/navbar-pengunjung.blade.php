<!-- ======= Header ======= -->
<header id="header" class="fixed-top shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">

        {{-- logo --}}
        <a href="{{ route('beranda') }}" class="logo p-4">
            <img src="{{ asset('img/logo/tut-wuri-handayani-logo.png') }}" alt="" class="img-fluid">
        </a>
        <div class="ml-4">
            <center>
                <h3 class="logo"><a href="{{ route('beranda') }}"><b>SDN 2 KEDALEMAN</b></a></h2>
            </center>
        </div>

        {{-- navbar --}}
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('beranda') }}#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="{{ route('beranda') }}#tentang">Tentang</a></li>
                <li><a class="nav-link scrollto" href="{{ route('beranda') }}#layanan">Layanan</a></li>
                <li><a class="nav-link scrollto" href="{{ route('beranda') }}#guru">Guru</a></li>
                <li><a class="nav-link scrollto" href="{{ route('beranda') }}#kegiatan">Kegiatan</a></li>
                <li><a class="nav-link scrollto" href="{{ route('beranda') }}#pertanyaan">Pertanyaan</a></li>
                <li class="dropdown"><a class="nav-link scrollto"><span>Link</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('guru') }}">Guru dan Staf</a></li>
                        <li class="dropdown"><a class="nav-link scrollto"><span>Info Sekolah</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a class="nav-link scrollto" href="{{ route('event') }}">Event</a></li>
                                <li><a class="nav-link scrollto" href="{{ route('pengumuman') }}">Pengumuman</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="{{ route('arsip') }}">Data Arsip Sekolah</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('prestasi') }}">Data Prestasi Siswa</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('beranda') }}#kontak">Kontak</a></li>
                @if (auth()->user() != null)
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                    </li>
                @else
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Masuk</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
