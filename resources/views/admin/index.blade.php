@extends('layouts.base-admin')

@section('title')
    <title>Dashboard Admin | Manajemen Website</title>
@endsection

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Selamat Datang {{ Auth::user()->name }}</h3>
                            <h6 class="font-weight-normal mb-0">Manajemen data sekolah SDN 2 Kedaleman -
                                Rogojampi
                            </h6>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white" type="button" id="dropdownMenuDate2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Today:
                                        <script>
                                            var d = (new Date()).toString().split(' ').splice(1, 3).join(' ');
                                            document.write(d)
                                        </script>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card shadow-sm mb-auto py-5" data-aos="zoom-in" data-aos-duration="1000"
                        data-aos-once='true'>
                        <center>
                            <div class="card-people pt-5">
                                <img src="{{ asset('img/ilustrator/ilustrator-dashboard.jpg') }}" alt="people">
                                <div class="weather-info">
                                    <div class="d-flex">
                                        <div class="ml-2">
                                            <h4 class="location font-weight-normal pb-2">Rogojampi</h4>
                                            <h6 class="font-weight-normal">Banyuwangi</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-sine" data-aos-once='true'>
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Guru</p>
                                    <p class="fs-30 mb-2">4006</p>
                                    <p>Kelola data guru dan staf</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-sine" data-aos-once='true'>
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Motivasi</p>
                                    <p class="fs-30 mb-2">61344</p>
                                    <p>Kelola data motivasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-sine" data-aos-once='true'>
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Pengumuman</p>
                                    <p class="fs-30 mb-2">34040</p>
                                    <p>Kelola data pengumuman</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-easing="ease-in-sine" data-aos-once='true'>
                            <div class="card card-light-danger shadow-sm">
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Arsip</p>
                                    <p class="fs-30 mb-2">47033</p>
                                    <p>Kelola data arsip sekolah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-sine" data-aos-once='true'>
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Event</p>
                                    <p class="fs-30 mb-2">4006</p>
                                    <p>Kelola data event sekolah</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-sine" data-aos-once='true'>
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Prestasi</p>
                                    <p class="fs-30 mb-2">61344</p>
                                    <p>Kelola data prestasi siswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-sine" data-aos-once='true'>
                                <div class="card-body">
                                    <p class="mb-4">Manajemen Banner</p>
                                    <p class="fs-30 mb-2">34040</p>
                                    <p>Kelola data gambar banner beranda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative shadow-sm" data-aos="zoom-out-up" data-aos-duration="1500"
                        data-aos-once='true'>
                        <div class="card-body">
                            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                                data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                <div class="ml-xl-4 mt-3">
                                                    <p class="card-title">Data Informasi Sekolah</p>
                                                    <h1 class="text-primary">$34040</h1>
                                                    <h3 class="font-weight-500 mb-xl-4 text-primary">North
                                                        America</h3>
                                                    <p class="mb-2 mb-xl-0">The total number of sessions within
                                                        the date range. It is the period time a user is actively
                                                        engaged with your website, page or app, etc</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-9">
                                                <div class="row">
                                                    <div class="col-md-6 border-right">
                                                        <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                            <table class="table table-borderless report-table">
                                                                <tr>
                                                                    <td class="text-muted">Guru dan Staf</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 70%"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">713
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Motivasi Guru</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-danger"
                                                                                role="progressbar" style="width: 75%"
                                                                                aria-valuenow="75" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">793
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Arsip Sekolah</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 40%"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">560
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Pengumuman</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-warning"
                                                                                role="progressbar" style="width: 30%"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">583
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Event Sekolah</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-danger"
                                                                                role="progressbar" style="width: 95%"
                                                                                aria-valuenow="95" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">924
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Prestasi Siswa</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-info"
                                                                                role="progressbar" style="width: 60%"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">664
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <canvas id="north-america-chart"></canvas>
                                                        <div id="north-america-legend"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                <div class="ml-xl-4 mt-3">
                                                    <p class="card-title">Data Informasi Website</p>
                                                    <h1 class="text-primary">$34040</h1>
                                                    <h3 class="font-weight-500 mb-xl-4 text-primary">North
                                                        America</h3>
                                                    <p class="mb-2 mb-xl-0">The total number of sessions within
                                                        the date range. It is the period time a user is actively
                                                        engaged with your website, page or app, etc</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-9">
                                                <div class="row">
                                                    <div class="col-md-6 border-right">
                                                        <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                            <table class="table table-borderless report-table">
                                                                <tr>
                                                                    <td class="text-muted">Illinois</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 70%"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">713
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Washington</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-warning"
                                                                                role="progressbar" style="width: 30%"
                                                                                aria-valuenow="30" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">583
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Mississippi</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-danger"
                                                                                role="progressbar" style="width: 95%"
                                                                                aria-valuenow="95" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">924
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">California</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-info"
                                                                                role="progressbar" style="width: 60%"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">664
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Maryland</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 40%"
                                                                                aria-valuenow="40" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">560
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Alaska</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-danger"
                                                                                role="progressbar" style="width: 75%"
                                                                                aria-valuenow="75" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">793
                                                                        </h5>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <canvas id="south-america-chart"></canvas>
                                                        <div id="south-america-legend"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#detailedReports" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#detailedReports" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card shadow-sm" data-aos="zoom-out-up" data-aos-duration="1500" data-aos-once='true'>
                        <div class="card-body">
                            <p class="card-title">Tabel Data Websitep</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="example" class="display expandable-table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Quote#</th>
                                                    <th>Product</th>
                                                    <th>Business type</th>
                                                    <th>Policy holder</th>
                                                    <th>Premium</th>
                                                    <th>Status</th>
                                                    <th>Updated at</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
@endsection
