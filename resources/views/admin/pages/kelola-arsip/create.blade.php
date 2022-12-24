@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    {{-- datedroppper js --}}
    <script src="{{ asset('admin/js-datedropper/datedropper-javascript.js') }}"></script>

    <title>Tambah Data Arsip | Manajemen Website</title>
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
                            Panel Tambah Data Arsip
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data Arsip Sekolah</strong>
                                <p class="mt-2">Formulir tambah data file arsip sekolah, masukkan informasi yang sesuai
                                    &
                                    mohon isi untuk semua field yang tertera.</p>
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
                        <h4 class="card-title">Form Data Arsip</h4>
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
                                                        Arsip Sekolah
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama_file_arsip">Nama File</label>
                                                        <input type="text" class="form-control" id="nama_file_arsip"
                                                            placeholder="Nama File Arsip" name="nama_file_arsip">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kode_file_arsip" class="medium"> File Arsip <span
                                                                class="fw-medium">(*max file
                                                                10Mb)</span>:</label>
                                                        <input type="file" class="form-control form-theme"
                                                            id="kode_file_arsip" name="file" placeholder=" File Arsip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tanggal_upload_arsip">Tanggal Upload</label>
                                                        <input type="date" class="form-control date-input"
                                                            data-dd-opt-custom-class="dd-theme-bootstrap"
                                                            id="tanggal_upload_arsip" name="tanggal_upload_arsip"
                                                            placeholder="tahun-bulan-tanggal" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jenis_file_arsip">Jenis Arsip</label>
                                                        <select class="form-control" id="jenis_file_arsip"
                                                            name="jenis_file_arsip">
                                                            <option>Pilih Jenis Arsip</option>
                                                            <option value="Arsip Guru">Arsip Guru</option>
                                                            <option value="Arsip Nilai">Arsip Nilai</option>
                                                            <option value="Arsip Siswa">Arsip Siswa</option>
                                                            <option value="Arsip Prestasi">Arsip Prestasi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="desc_file_arsip">Deskripsi Arsip</label>
                                                        <textarea class="form-control" id="desc_file_arsip" rows="4" name="desc_file_arsip"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                                            <a href="{{ route('admin.arsip') }}"
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

    {{-- Inisiasi datedroppper --}}
    <script>
        dateDropper({
            selector: '.date-input',
            expandedDefault: true,
            expandable: true,
            overlay: true,
            showArrowsOnHover: true,
            autoFill: false
        });
    </script>
@endsection
