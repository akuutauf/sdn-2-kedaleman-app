@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    <title>Tambah Data Pengumuman | Manajemen Website</title>
@endsection

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row justify-content-start">
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert" data-aos="fade-down">
                            <span class="badge badge-pill badge-success px-3 py-2">Selamat Datang
                                {{ Auth::user()->name }}</span>&ensp;
                            Panel Tambah Data Pengumuman
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data Pengumuman Sekolah</strong>
                                <p class="mt-2">Formulir tambah data pengumuman sekolah, masukkan informasi yang sesuai
                                    &
                                    mohon isi untuk semua field yang tertera. Untuk field lampiran file boleh dikosongkan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">Form Data Pengumuman</h4>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ $action }}" class="forms-sample" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-info alert-dismissible fade show">Data
                                                        Pengumuman Sekolah
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="judul_pengumuman">Judul</label>
                                                        <input type="text" class="form-control" id="judul_pengumuman"
                                                            placeholder="Judul Pengumuman" name="judul_pengumuman">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="perihal_pengumuman">Perihal</label>
                                                        <input type="text" class="form-control" id="perihal_pengumuman"
                                                            placeholder="Perihal Pengumuman" name="perihal_pengumuman">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="pembuat_pengumuman">Pembuat</label>
                                                        <input type="text" class="form-control" id="pembuat_pengumuman"
                                                            placeholder="Nama Pembuat Pengumuman" name="pembuat_pengumuman">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="penerima_pengumuman">Penerima</label>
                                                        <input type="text" class="form-control" id="penerima_pengumuman"
                                                            placeholder="Nama Penerima Pengumuman"
                                                            name="penerima_pengumuman">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tanggal_pengumuman">Tanggal Pengumuman</label>
                                                        <input type="date" class="form-control" id="tanggal_pengumuman"
                                                            name="tanggal_pengumuman" placeholder="tanggal/bulan/tahun" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lampiran_pengumuman" class="medium">Lampiran File <span
                                                                class="fw-medium">(*max file
                                                                10Mb)</span>:</label>
                                                        <input type="file" class="form-control form-theme"
                                                            id="lampiran_pengumuman" name="file"
                                                            placeholder="Lampiran File">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="isi_pengumuman">Isi Pesan Pengumuman</label>
                                                        <textarea class="form-control" id="isi_pengumuman" rows="4" name="isi_pengumuman"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                                            <a href="{{ route('admin.pengumuman') }}"
                                                class="btn btn-outline-primary shadow-sm">Batal</a>
                                        </form>
                                    </div>
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

@section('script')
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>

    <script src="{{ asset('admin/js/file-upload.js') }}"></script>
@endsection
