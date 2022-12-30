@extends('layouts.base-pengunjung')

@section('title')
    @foreach ($latest as $title)
        <title>{{ $title->judul_event }} | SDN 2 Kedaleman</title>
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
                        <h2><b>Event Sekolah</b></h2>
                        <ol>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li>Link</li>
                            <li>Info Sekolah</li>
                            <li>Event</li>
                        </ol>
                    </div>
                </div>
            </section><!-- End Breadcrumbs -->

            <div class="container">
                <div class="row">
                    @foreach ($latest as $item)
                        {{-- gambar event --}}
                        <div class="col-lg-3 mt-5">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/event/' . $item->foto_event) }}" class="rounded"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        {{-- isi event --}}
                        <div class="col-lg-6 mt-3">
                            <div class="portfolio-description">
                                <div class="container">
                                    <h2>{{ $item->judul_event }}</h2>
                                    <p class="paragrhap-justify">
                                        {{ $item->desc_event }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mt-3">
                            <div class="portfolio-info">
                                <h3>Detail Event</h3>
                                <ul>
                                    <li><strong>Lokasi</strong>: <i>{{ $item->lokasi_event }}</i></li>
                                    <li><strong>Tanggal</strong>: <i>{{ dateConversion($item->tanggal_event) }}</i>
                                    </li>
                                    <li><strong>Penyelenggara</strong>: <i>{{ $item->penyelenggara_event }}</i></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- konten event yang lain --}}
                <div class="row section-bg py-4 mt-4 rounded shadow-sm">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme">

                            @foreach ($event as $itemEvent)
                                <div class="item">
                                    {{-- card event --}}
                                    <div class="card card-border-none shadow-sm bg-white">
                                        <div class="card-body">
                                            <div class="alert bg-card card-border-none text-white" role="alert"
                                                title="{{ $itemEvent->judul_event }}">
                                                <b class="limit-text-title"><i
                                                        class="fa-solid fa-newspaper"></i>&ensp;{{ $itemEvent->judul_event }}</b>
                                            </div>
                                            <img src="{{ asset('images/event/' . $item->foto_event) }}"
                                                class="img-fluid rounded" alt="">
                                            <span class="card-title text-secondary limit-text-title mt-3">
                                                <b>Lokasi :</b> {{ $itemEvent->lokasi_event }}
                                            </span>
                                            <p class="card-title text-secondary">
                                                <b>Tanggal :</b> {{ dateConversion($itemEvent->tanggal_event) }}
                                            </p>

                                            <p class="card-text mt-3 text-secondary limit-text">
                                                {{ $itemEvent->desc_event }}</p>

                                            <a href="" class="btn bg-button-theme text-white mt-3">Lihat
                                                Event&ensp;<i class="fa-solid fa-circle-arrow-right"></i></a>
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
