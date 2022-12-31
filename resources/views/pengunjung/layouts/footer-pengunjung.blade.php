<!-- ======= Footer ======= -->
<footer id="footer">
    {{-- <hr> --}}
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>SDN 2 Kedaleman</h3>
                    <p>
                        Jl. Cawang Dusun Puspan, Kedaleman, <br>
                        Kec. Rogojampi, Kab. Banyuwangi <br>
                        Prov. Jawa Timur <br><br>
                        <strong>Telp:</strong> 08x-xxx-xxx-xxx<br>
                        <strong>Email:</strong> <a class="text-decoration-none text-secondary"
                            href="mailto: sdn2kedaleman@gmail.com" target="_blank">sdn2kedaleman@gmail.com</a><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero" class="scrollto">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#tentang" class="scrollto">Tentang sekolah</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#layanan" class="scrollto">Layanan Sekolah</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#kegiatan" class="scrollto">Kegiatan
                                Sekolah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#kontak" class="scrollto">Kontak
                                Sekolah</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Konten Website</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#sejarah">Sejarah Sekolah</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#guru">Guru dan Staf</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#motivasi">Motivasi Guru</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#kegiatan">Event Sekolah</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#kegiatan">Prestasi Siswa</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link Website</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="{{ route('guru') }}">Guru dan
                                Staf
                                Sekolah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto"
                                href="{{ route('pengumuman') }}">Info Pengumuman</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="{{ route('arsip') }}">Data
                                Arsip
                                Sekolah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="{{ route('event') }}">Info
                                Event
                                Sekolah</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="{{ route('prestasi') }}">Data
                                Prestasi
                                Siswa</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-3">

        <div class="me-md-auto text-center text-md-start pt-4">
            <div class="copyright">
                Copyright &copy; {{ now()->year }} <strong><span>SD Negeri 2 Kedaleman</span></strong>. All
                Rights Reserved
            </div>
        </div>
        {{-- link social media sekolah --}}
        {{-- <div class="social-links text-center text-md-right pt-2">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> --}}
    </div>
</footer><!-- End Footer -->
