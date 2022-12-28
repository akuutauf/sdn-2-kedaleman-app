@extends('layouts.base-pengunjung')

@section('title')
    <title>Guru dan Staf | SDN 2 Kedaleman</title>
@endsection

@section('content-one')
    <main id="main">
        <section class="inner-page bg-theme">
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs bg-theme mt-5 pt-5">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2><b>Guru dan Staf Sekolah</b></h2>
                        <ol>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li>Link</li>
                            <li>Guru dan Staf</li>
                        </ol>
                    </div>
                </div>
            </section><!-- End Breadcrumbs -->

            <div class="container">
                <div class="row mb-4 mt-2 justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center card p-3 card-border-non bg-card text-white">
                            <h2 class="">STRUKTUR ORGANISASI SEKOLAH<br>(TAHUN {{ now()->year }} -
                                {{ now()->year + 1 }})</h2>
                        </div>
                    </div>
                </div>
                {{-- Kepala Sekolah --}}
                <div class="row mb-4 justify-content-center mt-5">
                    <div class="col-md-3">
                        <div class="text-center card p-3 card-border-non bg-card text-white">
                            <h3 class="">KEPALA SEKOLAH</h3>
                        </div>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Dosen dan Staf --}}
                <div class="row mb-4 justify-content-center mt-3">
                    <div class="col-md-3">
                        <div class="text-center card p-3 card-border-non bg-card text-white">
                            <h3 class="">GURU DAN STAF</h3>
                        </div>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                        <div class="team_item">
                            <div class="team_body">
                                <img src="{{ asset('images/guru/image_210566796461_420903797995.jpg') }}"
                                    alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <div class="pb-4">
                                    <a class=""><b>Nama Guru S.Pd</b></a>
                                    <div class="mt-3">NIP :
                                        12345678
                                    </div>
                                    <div>Email : email@gmail.com</div>
                                    <div>Jabatan : Pegawai Negeri</div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection

@section('script')
    <script src="{{ asset('pengunjung/assets/carousel/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/popper.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/main.js') }}"></script>
@endsection
