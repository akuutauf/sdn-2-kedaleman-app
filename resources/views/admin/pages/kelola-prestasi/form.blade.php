@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    <title>Update Data Prestasi | Manajemen Website</title>
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
                            Panel Upate Data Prestasi
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Update Data Prestasi Siswa</strong>
                                <p class="mt-2">Formulir untuk mengubah data prestasi siswa, masukkan informasi yang ingin
                                    diubah, dan
                                    ketika ingin mengubah data maka mohon upload ulang foto prestasi.</p>
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
                        <h4 class="card-title">Form Data Prestasi</h4>
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
                                                        Prestasi Siswa
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="judul_prestasi">Judul</label>
                                                        <input type="text" class="form-control" id="judul_prestasi"
                                                            placeholder="Judul Prestasi" name="judul_prestasi"
                                                            value="{{ $prestasi->judul_prestasi }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image" class="medium">Foto Prestasi <span
                                                                class="fw-medium">(*max img
                                                                2Mb)</span>:</label>
                                                        <input type="file" class="form-control form-theme"
                                                            id="foto_prestasi" name="file" placeholder="Foto Prestasi"
                                                            value="{{ $prestasi->foto_prestasi }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama_perlombaan">Nama Perlombaan</label>
                                                        <input type="text" class="form-control" id="nama_perlombaan"
                                                            placeholder="Nama Lomba" name="nama_perlombaan"
                                                            value="{{ $prestasi->nama_perlombaan }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tanggal_prestasi">Tanggal Perlombaan</label>
                                                        <input type="date" class="form-control" id="tanggal_prestasi"
                                                            name="tanggal_prestasi" placeholder="tanggal/bulan/tahun"
                                                            value="{{ $prestasi->tanggal_prestasi }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="peraih_prestasi">Siswa Peraih Perlombaan </label>
                                                        <input type="text" class="form-control" id="peraih_prestasi"
                                                            placeholder="Nama Siswa Berprestasi" name="peraih_prestasi"
                                                            value="{{ $prestasi->peraih_prestasi }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="desc_prestasi">Deskripsi Prestasi</label>
                                                        <textarea class="form-control" id="desc_prestasi" rows="4" name="desc_prestasi">{{ $prestasi->desc_prestasi }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                            <a href="{{ route('admin.prestasi') }}"
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
