@extends('layouts.base-pengunjung')

@section('title')
    <title>{{ $this_prestasi->judul_prestasi }} | SDN 2 Kedaleman</title>

    @php
        // fungsi konversi data tipe date ke tanggal
        function dateConversion($date)
        {
            $month = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            $slug = explode('-', $date);
            return $slug[2] . ' ' . $month[(int) $slug[1]] . ' ' . $slug[0];
        }
    @endphp
@endsection

@section('content-one')
    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs bg-theme mt-5 pt-5">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2><b>Prestasi Siswa</b></h2>
                        <ol>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li>Link</li>
                            <li>Data Prestasi Siswa</li>
                        </ol>
                    </div>
                </div>
            </section><!-- End Breadcrumbs -->

            <div class="container">
                <div class="row">
                    {{-- gambar prestasi --}}
                    <div class="col-lg-3 mt-5">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/prestasi/' . $this_prestasi->foto_prestasi) }}"
                                        class="rounded" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    {{-- isi prestasi --}}
                    <div class="col-lg-6 mt-3">
                        <div class="portfolio-description">
                            <div class="container">
                                <h2>{{ $this_prestasi->judul_prestasi }}</h2>
                                <p class="paragrhap-justify">
                                    {{ $this_prestasi->desc_prestasi }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="portfolio-info">
                            <h3>Detail Prestasi</h3>
                            <ul>
                                <li><strong>Tanggal</strong>: <i>{{ dateConversion($this_prestasi->tanggal_prestasi) }}</i>
                                </li>
                                <li><strong>Perlombaan</strong>: <i>{{ $this_prestasi->nama_perlombaan }}</i></li>
                                <li><strong>Siswa Berprestasi</strong>: <i>{{ $this_prestasi->peraih_prestasi }}</i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- konten prestasi yang lain --}}
                <div class="row section-bg py-4 mt-4 rounded shadow-sm">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme">

                            @foreach ($prestasi as $itemPrestasi)
                                <div class="item">
                                    {{-- card prestasi --}}
                                    <div class="card card-border-none shadow-sm bg-white">
                                        <div class="card-body">
                                            <div class="alert bg-card card-border-none text-white" role="alert"
                                                title="{{ $itemPrestasi->judul_prestasi }}">
                                                <b class="limit-text-title"><i
                                                        class="fa-solid fa-newspaper"></i>&ensp;{{ $itemPrestasi->judul_prestasi }}</b>
                                            </div>
                                            <img src="{{ asset('images/prestasi/' . $itemPrestasi->foto_prestasi) }}"
                                                class="img-fluid rounded" alt="">
                                            <span class="card-title text-secondary limit-text-title mt-3"
                                                title="{{ $itemPrestasi->nama_perlombaan }}">
                                                <b>Perlombaan :</b> {{ $itemPrestasi->nama_perlombaan }}
                                            </span>
                                            <p class="card-title text-secondary">
                                                <b>Tanggal :</b> {{ dateConversion($itemPrestasi->tanggal_prestasi) }}
                                            </p>

                                            <p class="card-text mt-3 text-secondary limit-text">
                                                {{ $itemPrestasi->desc_prestasi }}</p>

                                            <a href="{{ route('prestasi.show', $itemPrestasi->id) }}"
                                                class="btn bg-button-theme text-white mt-3">Lihat
                                                Prestasi&ensp;<i class="fa-solid fa-circle-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

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
