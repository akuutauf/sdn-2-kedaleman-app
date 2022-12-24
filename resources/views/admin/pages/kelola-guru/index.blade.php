@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    <title>Manajemen Data Guru dan Staf | Manajemen Website</title>
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
                            Panel Manajemen Data Guru dan Staf
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabel Data Guru dan Staf</strong>
                                <p class="mt-2">Halaman utama data guru dan staf, search data guru, serta menu panel
                                    tambah, ubah
                                    &
                                    hapus data guru dan staf.</p>
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.create.guru') }}"
                                            class="btn btn-outline-primary mt-4">Tambah Data
                                            Guru</a>
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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr class="mx-auto">
                                                <th width="5%" class="text-center">No</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Nip</th>
                                                <th width="15%" class="text-center">Foto</th>
                                                <th class="text-center">Email</th>
                                                <th width="15%" class="text-center">Status</th>
                                                <th width="15%" class="text-center">Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($guru as $itemGuru)
                                                <tr class="shadow-sm">
                                                    <td class="text-center">{{ $no }}</td>
                                                    <td class="text-center">{{ $itemGuru->nama_guru }}</td>
                                                    <td class="text-center">{{ $itemGuru->nip_guru }}</td>
                                                    <td class="text-center"><img
                                                            src="{{ asset('images/guru/' . $itemGuru->foto_guru) }}"
                                                            alt="" class="img-fluid rounded"></td>
                                                    <td class="text-center">{{ $itemGuru->email_guru }}</td>
                                                    <td class="text-center">{{ $itemGuru->status_guru }}</td>
                                                    <td class="text-center">
                                                        <div class="btn-group-vertical" role="group"
                                                            aria-label="Basic example">
                                                            <a href="{{ route('admin.edit.guru', $itemGuru->id) }}"
                                                                type="button"
                                                                class="btn btn-inverse-success py-3 px-3">Edit</a>
                                                            <a href="{{ route('admin.delete.guru', $itemGuru->id) }}"
                                                                type="button"
                                                                class="btn btn-inverse-danger py-3 px-3">Delete</a>
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

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
