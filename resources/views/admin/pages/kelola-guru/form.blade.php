@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    {{-- datedroppper js --}}
    <script src="{{ asset('admin/js-datedropper/datedropper-javascript.js') }}"></script>

    <title>Update Data Guru dan Staf | Manajemen Website</title>
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
                            Panel Update Data Guru dan Staf
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Update Data Guru dan Staf</strong>
                                <p class="mt-2">Formulir untuk mengubah data guru dan staf, masukkan informasi yang ingin
                                    diubah, dan
                                    ketika ingin mengubah data maka mohon upload ulang foro guru.</p>
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
                        <h4 class="card-title">Form Data Guru</h4>
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
                                                        Pribadi Guru
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama_guru">Nama Guru</label>
                                                        <input type="text" class="form-control" id="nama_guru"
                                                            placeholder="Nama Lengkap" name="nama_guru"
                                                            value="{{ $guru->nama_guru }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image" class="medium" for="foto_guru">Foto Guru <span
                                                                class="fw-medium">(*max img
                                                                2Mb)</span>:</label>
                                                        <input type="file" class="form-control form-theme" id="foto_guru"
                                                            name="file" placeholder="Foto Guru"
                                                            value="{{ $guru->foto_guru }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nik_guru">NIK</label>
                                                        <input type="number" class="form-control" id="nik_guru"
                                                            placeholder="Nomor NIK" name="nik_guru"
                                                            value="{{ $guru->nik_guru }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="gender_guru">Gender</label>
                                                        <select class="form-control" id="gender_guru" name="gender_guru">
                                                            <option>Pilih Gender</option>
                                                            <option value="Laki-laki"
                                                                {{ $guru->gender_guru == 'Laki-laki' ? 'selected' : '' }}>
                                                                Laki-laki</option>
                                                            <option value="Perempuan"
                                                                {{ $guru->gender_guru == 'Perempuan' ? 'selected' : '' }}>
                                                                Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir_guru">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="tempat_lahir_guru"
                                                            placeholder="Tempat Lahir" name="tempat_lahir_guru"
                                                            value="{{ $guru->tempat_lahir_guru }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir_guru">Tanggal Lahir</label>
                                                        <input type="date" class="form-control date-input"
                                                            data-dd-opt-custom-class="dd-theme-bootstrap"
                                                            id="tanggal_lahir_guru" name="tanggal_lahir_guru"
                                                            placeholder="tahun-bulan-tanggal"
                                                            value="{{ $guru->tanggal_lahir_guru }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-info alert-dismissible fade show">Data
                                                        Kepegawaian Guru
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nuptk_guru">NUPTK</label>
                                                        <input type="number" class="form-control" id="nuptk_guru"
                                                            placeholder="Nomor NUPTK" name="nuptk_guru"
                                                            value="{{ $guru->nuptk_guru }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nip_guru">NIP</label>
                                                        <input type="number" class="form-control" id="nip_guru"
                                                            placeholder="Nomor NIP" name="nip_guru"
                                                            value="{{ $guru->nip_guru }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jabatan_guru">Jabatan</label>
                                                        <select class="form-control" id="jabatan_guru"
                                                            name="jabatan_guru">
                                                            <option>Pilih Jabatan Guru</option>
                                                            <option value="Guru Pengajar"
                                                                {{ $guru->jabatan_guru == 'Guru Pengajar' ? 'selected' : '' }}>
                                                                Guru Pengajar</option>
                                                            <option value="Guru PNS"
                                                                {{ $guru->jabatan_guru == 'Guru PNS' ? 'selected' : '' }}>
                                                                Guru PNS</option>
                                                            <option value="Guru Honorer"
                                                                {{ $guru->jabatan_guru == 'Guru Honorer' ? 'selected' : '' }}>
                                                                Guru Honorer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="status_guru">Status</label>
                                                        <select class="form-control" id="status_guru" name="status_guru">
                                                            <option>Pilih Status Guru</option>
                                                            <option value="Aktif"
                                                                {{ $guru->status_guru == 'Aktif' ? 'selected' : '' }}>
                                                                Aktif</option>
                                                            <option value="Berhenti"
                                                                {{ $guru->status_guru == 'Berhenti' ? 'selected' : '' }}>
                                                                Berhenti</option>
                                                            <option value="Pindah Sekolah"
                                                                {{ $guru->status_guru == 'Pindah Sekolah' ? 'selected' : '' }}>
                                                                Pindah Sekolah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-info alert-dismissible fade show">Data
                                                        Kontak Guru
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email_guru">Email</label>
                                                        <input type="email" class="form-control" id="email_guru"
                                                            placeholder="Alamat Email" name="email_guru"
                                                            value="{{ $guru->email_guru }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="no_telp_guru">Nomor Telepon</label>
                                                        <input type="number" class="form-control" id="no_telp_guru"
                                                            placeholder="Nomor Handphone" name="no_telp_guru"
                                                            value="{{ $guru->no_telp_guru }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="alamat_guru">Alamat</label>
                                                        <textarea class="form-control" id="alamat_guru" rows="4" name="alamat_guru">{{ $guru->alamat_guru }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                            <a href="{{ route('admin.guru') }}"
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
