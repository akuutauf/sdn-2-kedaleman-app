@extends('layouts.base-pengunjung')

@section('title')
    @foreach ($latest as $title)
        <title>{{ $title->judul_pengumuman }} | SDN 2 Kedaleman</title>
    @endforeach

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
                    @foreach ($latest as $item)
                        <div class="col-lg-8">
                            <div class="portfolio-description">
                                <div class="container">
                                    <h2>{{ $item->judul_pengumuman }}</h2>
                                    <p class="paragrhap-justify">
                                        {{ $item->isi_pengumuman }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="portfolio-info">
                                <h3>Detail Pengumuman</h3>
                                <ul>
                                    <li><strong>Perihal</strong>: <i>{{ $item->perihal_pengumuman }}</i></li>
                                    <li><strong>Pembuat</strong>: <i>{{ $item->pembuat_pengumuman }}</i></li>
                                    <li><strong>Penerima</strong>: <i>{{ $item->penerima_pengumuman }}</i></li>
                                    <li><strong>Tanggal</strong>: <i>{{ dateConversion($item->tanggal_pengumuman) }}</i>
                                    </li>
                                    <li><strong>Lampiran</strong>: <a
                                            href=" {{ asset('dokumen/pengumuman/' . $item->lampiran_pengumuman) }}"
                                            target="_blank">Lihat Lampiran File</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- konten pengumuman yang lain --}}
                <div class="row section-bg py-4 mt-4 rounded shadow-sm">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme">

                            @foreach ($pengumuman as $itemPengumuman)
                                <div class="item">
                                    {{-- card pengumuman --}}
                                    <div class="card card-border-none shadow-sm bg-white">
                                        <div class="card-body">
                                            <div class="alert bg-card card-border-none text-white" role="alert"
                                                title="{{ $itemPengumuman->judul_pengumuman }}">
                                                <b class="limit-text-title"><i
                                                        class="fa-solid fa-newspaper"></i>&ensp;{{ $itemPengumuman->judul_pengumuman }}</b>
                                            </div>
                                            <span class="card-title text-secondary limit-text-title"
                                                title="{{ $itemPengumuman->perihal_pengumuman }}">
                                                {{ $itemPengumuman->perihal_pengumuman }}
                                            </span>
                                            <p class="card-title text-secondary">
                                                {{ dateConversion($itemPengumuman->tanggal_pengumuman) }}
                                            </p>

                                            <p class="card-text mt-3 text-secondary limit-text">
                                                {{ $itemPengumuman->isi_pengumuman }}</p>

                                            <a href="" class="btn bg-button-theme text-white mt-3">Lihat
                                                Pengumuman&ensp;<i class="fa-solid fa-circle-arrow-right"></i></a>
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
