@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    <title>Manajemen Data Event Sekolah | Manajemen Website</title>

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
                            Panel Manajemen Data Event Sekolah
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabel Data Event</strong>
                                <p class="mt-2">Halaman utama data event, search data event, serta menu panel
                                    tambah, ubah
                                    &
                                    hapus data event sekolah.</p>
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.create.event') }}"
                                            class="btn btn-outline-primary mt-4">Tambah
                                            Data
                                            Event</a>
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
                                                <th class="text-center">Judul</th>
                                                <th width="15%" class="text-center">Foto</th>
                                                <th class="text-center">Penyelenggara</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Lokasi</th>
                                                <th width="15%" class="text-center">Status</th>
                                                <th width="15%" class="text-center">Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($event as $itemEvent)
                                                <tr class="shadow-sm">
                                                    <td class="text-center">{{ $no }}</td>
                                                    <td class="text-center">{{ $itemEvent->judul_event }}</td>
                                                    <td class="text-center"><img
                                                            src="{{ asset('images/event/' . $itemEvent->foto_event) }}"
                                                            alt="" class="img-fluid rounded"></td>
                                                    <td class="text-center">{{ $itemEvent->penyelenggara_event }}</td>
                                                    <td class="text-center">{{ dateConversion($itemEvent->tanggal_event) }}
                                                    </td>
                                                    <td class="text-center">{{ $itemEvent->lokasi_event }}</td>
                                                    <td class="text-center">{{ $itemEvent->status_event }}</td>
                                                    <td class="text-center">
                                                        <div class="btn-group-vertical" role="group"
                                                            aria-label="Basic example">
                                                            <a href="{{ route('admin.edit.event', $itemEvent->id) }}"
                                                                type="button"
                                                                class="btn btn-inverse-success py-3 px-3">Edit</a>
                                                            <a href="{{ route('admin.delete.event', $itemEvent->id) }}"
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
