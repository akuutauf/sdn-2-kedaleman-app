@extends('layouts.base-pengunjung')

@section('title')
    <title>Pengumuman Sekolah | SDN 2 Kedaleman</title>
@endsection

@section('content-one')
    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs bg-theme mt-5 pt-5">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2><b>Pengumuman Sekolah</b></h2>
                        <ol>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li>Link</li>
                            <li>Info Sekolah</li>
                            <li>Pengumuman</li>
                        </ol>
                    </div>
                </div>
            </section><!-- End Breadcrumbs -->

            <div class="container">
                <div class="row gy-4">
                    {{-- isi pengumuman --}}
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <div class="container">
                                <h2>Judul Pengumuman</h2>
                                <p class="paragrhap-justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eaque magnam id, officia
                                    doloremque numquam recusandae tenetur impedit. Eaque ipsa tenetur amet nostrum nemo
                                    possimus
                                    accusamus ipsum corporis harum quaerat non, eligendi similique hic expedita repudiandae
                                    atque necessitatibus voluptatibus! Totam quam voluptatem et, sapiente molestiae nostrum
                                    vel
                                    neque itaque rerum.
                                </p>
                                <p class="paragrhap-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi
                                    repudiandae dolorem deleniti
                                    optio fugit nulla iste numquam eum neque temporibus praesentium soluta quas doloribus
                                    qui
                                    officia, rem quae blanditiis. Atque, amet quaerat incidunt, quae, earum beatae aliquam
                                    autem
                                    fugiat voluptate ea consequatur repudiandae nulla aspernatur quisquam reiciendis
                                    impedit.
                                    Reiciendis accusantium earum distinctio fugit asperiores quas, omnis libero possimus.
                                    Repellendus pariatur officia id quibusdam, maiores doloremque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Detail Pengumuman</h3>
                            <ul>
                                <li><strong>Perihal</strong>: <i>Perihal Pengumuman</i></li>
                                <li><strong>Pembuat</strong>: <i>Si Fulan</i></li>
                                <li><strong>Penerima</strong>: <i>Siswa Kelas 1 SD</i></li>
                                <li><strong>Tanggal</strong>: 27 Desember 2022</li>
                                <li><strong>Lampiran</strong>: <a href="#" target="_blank">Lihat Lampiran File</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- konten pengumuman yang lain --}}
                <div class="row section-bg py-4 mt-4 rounded shadow-sm">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                {{-- card pengumuman --}}
                                <div class="card card-border-none shadow-sm bg-white">
                                    <div class="card-body">
                                        <div class="alert alert-success card-border-none text-center" role="alert">
                                            <b class="limit-text-title"><i class="fa-solid fa-newspaper"></i>&ensp;Judul
                                                Pengumuman</b>
                                        </div>
                                        <span class="card-title text-secondary limit-text-title">
                                            Perihal Pengumuman
                                        </span>
                                        <p class="card-title text-secondary">
                                            27 Desember 2022
                                        </p>

                                        <p class="card-text mt-3 text-secondary limit-text">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipisicing elit.
                                            Cumque vel saepe voluptatem deleniti amet, architecto culpa nihil velit quaerat
                                            consequatur.(Isi Pengumuman)</p>

                                        <a href="" class="btn bg-button-theme text-white mt-3">Lihat
                                            Pengumuman&ensp;<i class="fa-solid fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                {{-- card pengumuman --}}
                                <div class="card card-border-none shadow-sm bg-white">
                                    <div class="card-body">
                                        <div class="alert alert-success card-border-none text-center" role="alert">
                                            <b class="limit-text-title"><i class="fa-solid fa-newspaper"></i>&ensp;Judul
                                                Pengumuman 2</b>
                                        </div>
                                        <span class="card-title text-secondary limit-text-title">
                                            Perihal Pengumuman
                                        </span>
                                        <p class="card-title text-secondary">
                                            27 Desember 2022
                                        </p>

                                        <p class="card-text mt-3 text-secondary limit-text">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipisicing elit.
                                            Cumque vel saepe voluptatem deleniti amet, architecto culpa nihil velit quaerat
                                            consequatur.(Isi Pengumuman)</p>

                                        <a href="" class="btn bg-button-theme text-white mt-3">Lihat
                                            Pengumuman&ensp;<i class="fa-solid fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection

@section('script')
    <script src="{{ asset('pengunjung/assets/carousel/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/popper.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/main.js') }}"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    </script>
@endsection
