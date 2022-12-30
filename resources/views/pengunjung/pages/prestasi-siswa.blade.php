@extends('layouts.base-pengunjung')

@section('title')
    <title>Prestasi Siswa | SDN 2 Kedaleman</title>
@endsection

@section('content-one')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">
                    @foreach ($prestasi as $item)
                        <h2>{{ $item->judul_prestasi }}</h2>
                        <div class="col-lg-8">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/prestasi/' . $item->foto_prestasi) }}" alt="">
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="portfolio-info">
                                <h2> Prestasi Siswa</h2>
                                <ul>
                                    <li><strong>Nama Perlombaan </strong>: {{ $item->nama_perlombaan }}</li>
                                    <li><strong>Nama Siswa</strong>: {{ $item->peraih_prestasi }}</li>
                                    <li><strong>Tanggal Perlombaan</strong>: {{ $item->tanggal_prestasi }}</li>

                                </ul>
                            </div>
                            <div class="portfolio-description">
                                <h2>Deskirpsi Perlombaan</h2>
                                <p>
                                    {{ $item->desc_prestasi }}
                                </p>
                            </div>
                        </div>
                    @endforeach
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
@endsection
