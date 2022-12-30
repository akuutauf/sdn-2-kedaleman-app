@extends('layouts.base-pengunjung')

@section('title')
    {{-- Link bootstrap online --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Arsip Sekolah | SDN 2 Kedaleman</title>

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
                        <h2><b>Arsip Sekolah</b></h2>
                        <ol>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li>Link</li>
                            <li>Data Arsip Sekolah</li>
                        </ol>
                    </div>
                </div>
            </section><!-- End Breadcrumbs -->

            <div class="container">
                <div class="row">

                    {{-- content arsip dinamis data table --}}
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card card-border-none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="example" class="table display expandable-table"
                                                    style="width:100%">
                                                    <thead class="thead-theme">
                                                        <tr class="mx-auto">
                                                            <th width="5%" class="text-center">No</th>
                                                            <th class="text-center">Nama Arsip</th>
                                                            <th class="text-center">Jenis Arsip</th>
                                                            <th class="text-center">File Arsip</th>
                                                            <th class="text-center">Tanggal</th>
                                                            <th class="text-center">Deskripsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        @foreach ($arsip as $itemArsip)
                                                            <tr class="shadow-sm">
                                                                <td class="text-center">{{ $no }}</td>
                                                                <td class="text-center">{{ $itemArsip->nama_file_arsip }}
                                                                </td>
                                                                <td class="text-center">{{ $itemArsip->jenis_file_arsip }}
                                                                </td>
                                                                <td class="text-center"><a
                                                                        href="{{ asset('dokumen/arsip/' . $itemArsip->kode_file_arsip) }}"
                                                                        target="_blank">[ Lihat ]</a>
                                                                </td>
                                                                <td class="text-center">
                                                                    {{ dateConversion($itemArsip->tanggal_upload_arsip) }}
                                                                </td>
                                                                <td class="text-center">{{ $itemArsip->desc_file_arsip }}
                                                                </td>
                                                            </tr>
                                                            <br>
                                                            @php
                                                                $no++;
                                                            @endphp
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
