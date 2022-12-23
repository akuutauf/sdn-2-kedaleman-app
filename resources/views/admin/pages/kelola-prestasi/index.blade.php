@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    <title>Manajemen Data Prestasi Siswa | Manajemen Website</title>
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
                            Panel Manajemen Data Prestasi Siswa
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabel Data Prestasi</strong>
                                <p class="mt-2">Deskripsi manajemen data prestasi siswa...</p>
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div class="col-md-3">
                                        <a href="{{ route('admin.create.prestasi') }}"
                                            class="btn btn-outline-primary mt-4">Tambah Data
                                            Prestasi</a>
                                    </div>
                                    <div class="col-md-8">
                                        <form action="">
                                            <div class="form-group">
                                                <div class="input-group mt-4">
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukkan judul prestasi" aria-label="prestasi">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-sm btn-primary" type="button">Cari Data
                                                            Prestasi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr class="mx-auto">
                                                <th width="5%" class="text-center">No</th>
                                                <th class="text-center">Judul</th>
                                                <th width="15%" class="text-center">Foto</th>
                                                <th class="text-center">Nama Perlombaan</th>
                                                <th class="text-center" width="10%">Tanggal</th>
                                                <th class="text-center">Peraih Prestasi</th>
                                                <th width="15%" class="text-center">Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($prestasi as $itemPrestasi)
                                                <tr class="shadow-sm">
                                                    <td class="text-center">{{ $no }}</td>
                                                    <td class="text-center">{{ $itemPrestasi->judul_prestasi }}</td>
                                                    <td class="text-center"><img
                                                            src="{{ asset('images/prestasi/' . $itemPrestasi->foto_prestasi) }}"
                                                            alt="" class="img-fluid rounded"></td>
                                                    <td class="text-center">{{ $itemPrestasi->nama_perlombaan }}</td>
                                                    <td class="text-center">{{ $itemPrestasi->tanggal_prestasi }}</td>
                                                    <td class="text-center">{{ $itemPrestasi->peraih_prestasi }}</td>
                                                    <td class="text-center">
                                                        <div class="btn-group-vertical" role="group"
                                                            aria-label="Basic example">
                                                            <a href="{{ route('admin.edit.prestasi', $itemPrestasi->id) }}"
                                                                type="button" class="btn btn-inverse-success">Edit</a>
                                                            <a href="{{ route('admin.delete.prestasi', $itemPrestasi->id) }}"
                                                                type="button" class="btn btn-inverse-danger">Delete</a>
                                                        </div>
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
    <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
@endsection

@section('script')
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
@endsection
