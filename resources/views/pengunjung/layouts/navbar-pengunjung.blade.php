<!-- ======= Header ======= -->
<header id="header" class="fixed-top shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">

        {{-- logo --}}
        <a href="" class="logo p-4">
            <img src="{{ asset('img/logo/tut-wuri-handayani-logo.png') }}" alt="" class="img-fluid">
        </a>
        <div class="ml-4">
            <center>
                <h3 class="logo"><a href=""><b>SDN 2 KEDALEMAN</b></a></h2>
            </center>
        </div>

        {{-- navbar --}}
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                <li><a class="nav-link scrollto" href="#guru">Guru</a></li>
                <li><a class="nav-link scrollto" href="#kegiatan">Kegiatan</a></li>
                <li><a class="nav-link scrollto" href="#pertanyaan">Pertanyaan</a></li>
                <li class="dropdown"><a href="#"><span>Link</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Guru dan Staf</a></li>
                        <li class="dropdown"><a href="#"><span>Info Sekolah</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Pengumuman Sekolah</a></li>
                                <li><a href="#">Event Sekolah</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Data Arsip Sekolah</a></li>
                        <li><a href="#">Data Prestasi Siswa</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
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
