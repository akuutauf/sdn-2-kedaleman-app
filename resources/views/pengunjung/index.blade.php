@extends('layouts.base-pengunjung')

@section('title')
    <title>Beranda | SDN 2 Kedaleman</title>

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
    <!-- ======= Beranda Hero Section Ilustator ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container bg-white p-5 shadow-sm rounded">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <span>Selamat Datang di Website Sekolah</span>
                        <h1 class="pt-2">
                            SDN 2 Kedaleman
                        </h1>
                        <h2>Website ini meliputi informasi sekolah seperti profil, event, pengumuman dan segala bentuk
                            informasi sekolah yang lainnya.<br><br>
                            Yuk cek sekarang.
                        </h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="#tentang" class="btn-theme nav-link scrollto py-2 px-1 text-center mt-3"><i
                                        class="fa-solid fa-school"></i>&ensp;
                                    Profil Sekolah</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#kegiatan" class="btn-theme-two nav-link scrollto py-2 px-1 text-center mt-3"><i
                                        class="fa-regular fa-calendar-minus"></i>&ensp; Event
                                    Sekolah</a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <center class="">
                        <div class="owl-carousel owl-1">
                            <div>
                                <img src="{{ asset('pengunjung/assets/img/school-ilustration-1.png') }}" alt="Image"
                                    class="img-fluid shadow-sm rounded">
                            </div>
                            @foreach ($banner as $itemBanner)
                                <div><img src="{{ asset('images/banner/' . $itemBanner->foto_banner) }}" alt="Image"
                                        class="img-fluid shadow-sm rounded" title="{{ $itemBanner->nama_banner }}"></div>
                            @endforeach
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Sejarah Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative section-bg shadow-sm rounded p-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center mt-3">
                <div class="col-xl-8 col-lg-9 text-center">
                    <h1>Sejarah Sekolah <br>SDN 2 Kedaleman - Rogojampi</h1>
                    <h2 class="mt-4">Berdirinya sekolah SDN 2 Kedaleman berdasarkan instruksi Presiden atau Impress tahun
                        1975 dan digunakan mulai Tahun Ajaran 1976/1977.</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#tentang" class="btn-get-started scrollto">Tentang Sekolah</a>
            </div>

            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href="{{ route('pengumuman') }}">Pengumuman Sekolah</a></h4>
                        <p class="description text-justify">Pengumuman berisikan informasi penting terkait dengan hal hal
                            yang perlu di
                            sampaikan oleh sekolah kepada siswa.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-palette-line"></i></div>
                        <h4 class="title"><a href="">Agenda Sekolah</a></h4>
                        <p class="description text-justify">Berbagai jenis kegiatan atau event yang pernah atau akan
                            dilaksanakan
                            sekolah, akan di sampaikan di website sekolah SDN 2 Kedaleman.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-command-line"></i></div>
                        <h4 class="title"><a href="">Layanan Sekolah</a></h4>
                        <p class="description text-justify">Berbagai jenis pelayanan atau fasilitas sekolah yang dapat
                            digunakan oleh
                            guru maupun siswa untuk kegiatan pembelajaran.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-fingerprint-line"></i></div>
                        <h4 class="title"><a href="">Kehidupan Siswa</a></h4>
                        <p class="description text-justify">Segala aktifitas yang dilakukan oleh siswa sebagai bentuk
                            kegiatan
                            pembelajaran dan berkreasi yang siswa lakukan semasa di sekolah.</p>
                    </div>
                </div>

            </div>
            <div id="sejarah"></div>
        </div>
    </section><!-- End Hero -->
@endsection

@section('content-two')
    <main id="main">

        <!-- ======= Tentang Section ======= -->
        <section id="tentang" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Sekolah </h2>
                    <p>Informasi profil singkat SDN 2 Kedaleman.</p>
                </div>

                <div class="row content justify-content-center">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            SDN 2 Kedaleman bertempat di RT.01 RW 0.2 Dusun Puspan Desa Kedaleman, Kecamatan Rogojampi dan
                            Kabupaten Banyuwangi.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row justify-content-end">

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $count_guru }}"
                                data-purecounter-duration="2" class="purecounter"></span>
                            <p>Guru dan Staf</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $count_event }}"
                                data-purecounter-duration="2" class="purecounter"></span>
                            <p>Event Sekolah</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $count_arsip }}"
                                data-purecounter-duration="2" class="purecounter"></span>
                            <p>Arsip Sekolah</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $count_prestasi }}"
                                data-purecounter-duration="2" class="purecounter"></span>
                            <p>Prestasi Siswa</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= About Video Section ======= -->
        <section id="about-video" class="about-video">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    {{-- video profile sekolah --}}
                    <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('pengunjung/assets/img/video-profil-sekolah.jpg') }}"
                            class="img-fluid rounded border shadow-sm" alt="">
                        <a href="https://youtu.be/vRLa2jUOBnI" class="glightbox play-btn mb-4" data-vbtype="video"
                            data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Video Profil SDN 2 Kedaleman.</h3>
                        <p class="text-justify mb-4">
                            Yuk lebih dekat dengan SDN 2 Kedaleman, berikut adalah video mengenai profil singkat, atau video
                            kegiatan yang pernah dilaksanakan guru dan siswa semasa di sekolah loh. Pokoknya bakal seru dan
                            menarik, yuk lihat video nya bersama.
                        </p>

                        {{-- video kegiatan siswa sekolah --}}
                        <div class="col-lg-12 video-box align-self-baseline" data-aos="fade-left" data-aos-delay="100">
                            <img src="{{ asset('pengunjung/assets/img/contoh-profile-sekolah.jpg') }}"
                                class="img-fluid rounded border" alt="">
                            <a href="https://youtu.be/vRLa2jUOBnI" class="glightbox play-btn mb-4" data-vbtype="video"
                                data-autoplay="true"></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End About Video Section -->

        <!-- ======= Layanan Section ======= -->
        <section id="layanan" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Layanan Sekolah</h2>
                    <p>Informasi layanan atau fasilitas yang terdapat pada SDN 2 Kedaleman.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue rounded">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <h4><a href="">Kantor Guru</a></h4>
                            <p class="text-center">Mengakomodasi segala bentuk tempat untuk aktifitas guru, untuk menerima
                                pengajuan dari siswa
                                maupun wali murid, dan mengakomodasi tempat penerimaan tamu.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange  rounded">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="fa-solid fa-mountain-sun"></i>
                            </div>
                            <h4><a href="">Lapangan Sekolah</a></h4>
                            <p class="text-center">Sebagai tempat untuk sarana berkumpul dalam melakukan semua kegiatan
                                baik upacara, olahraga,
                                maupun kegiatan-kegiatan sekolah yang lain</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink rounded">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="fa-solid fa-house-chimney-medical"></i>
                            </div>
                            <h4><a href="">UKS Sekolah</a></h4>
                            <p class="text-center">Sebagai tempat untuk meningkatkan mutu pendidikan dan prestasi belajar
                                peserta didik yang
                                tercermin dalam kehidupan prilaku hidup bersih dan sehat.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow rounded">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="fa-solid fa-utensils"></i>
                            </div>
                            <h4><a href="">Kantin Sekolah</a></h4>
                            <p class="text-center">Membantu pertumbuhan dan kesehatan siswa dengan jalan menyediakan
                                makanan yang sehat, bergizi
                                dan praktis. Mendorong siswa untuk memilih makanan yang cukup dan seimbang</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red rounded">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="fa-solid fa-mosque"></i>
                            </div>
                            <h4><a href="">Mushola Sekolah</a></h4>
                            <p class="text-center">Sebagai tempat untuk membina generasi yang madani, sarana ukhuwah
                                islamiyah, sebagai sarana membantu pendidikan non formal
                                yang memberi dampak positif kepada warga Sekolah dan masyarakat di lingkungan sekolah.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal rounded">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="fa-solid fa-square-parking"></i>
                            </div>
                            <h4><a href="">Area Parkir Sekolah</a></h4>
                            <p class="text-center">Mengakomodasi untuk meletakkan kendaraan baik mobil, motor, maupun
                                sepeda milik siswa, guru, karyawan, tamu dan semua warga sekolah.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Sevices Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients bg-secondary">
            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">
                        <img src="{{ asset('img/logo/poliwangi-logo-text-only.svg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                        data-aos="zoom-in">
                        <img src="{{ asset('pengunjung/assets/img/clients/logo-ti-poliwangi.png') }}" class="img-fluid"
                            alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Guru Section ======= -->
        <section id="guru" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Guru Sekolah</h2>
                    <p>Informasi guru dan pengurus SDN 2 Kedaleman.</p>
                </div>

                <div class="row mb-2 justify-content-center">
                    @foreach ($kepsek as $item)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/guru/' . $item->foto_guru) }}" alt="Foto Kepala Sekolah"
                                        class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                    <div class="pb-4">
                                        <a class=""><b>{{ $item->nama_guru }}</b></a>
                                        <div class="mt-3">NIP : {{ $item->nip_guru }}
                                        </div>
                                        <div>Jabatan : {{ $item->jabatan_guru }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($guru as $itemGuru)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/guru/' . $itemGuru->foto_guru) }}"
                                        alt="Foto Kepala Sekolah" class="p-3 img-fluid rounded" title="Kepala Sekolah">
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                    <div class="pb-4">
                                        <a class=""><b>{{ $itemGuru->nama_guru }}</b></a>
                                        <div class="mt-3">NIP : {{ $itemGuru->nip_guru }}
                                        </div>
                                        <div>Jabatan : {{ $itemGuru->jabatan_guru }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="motivasi" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Motivasi Guru</h2>
                    <p>Ungkapan penyemangat atau kata-kata bijak guru SDN 2 Kedaleman.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($motivasi as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $item->pesan_motivasi }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('images/guru/' . $item->guru->foto_guru) }}"
                                        class="testimonial-img" alt="">
                                    <h3>{{ $item->guru->nama_guru }}</h3>
                                    {{-- <h4>Ceo &amp; Founder</h4> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Kegiatan Section ======= -->
        <section id="kegiatan" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kegiatan Sekolah</h2>
                    <p>Informasi kegiatan, pengumuman, dan prestasi siswa SDN 2 Kedaleman.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-app">Event</li>
                            <li data-filter=".filter-card">Pengumuman</li>
                            <li data-filter=".filter-web">Prestasi</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

                    {{-- data katalog event --}}
                    @foreach ($latest_event as $itemEvent)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('images/event/' . $itemEvent->foto_event) }}"
                                    class="img-fluid shadow-sm rounded" alt="">
                                <div class="portfolio-info" title="{{ $itemEvent->judul_event }}">
                                    <h4 class="limit-text-title">{{ $itemEvent->judul_event }}</h4>
                                    <p>{{ dateConversion($itemEvent->tanggal_event) }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('images/event/' . $itemEvent->foto_event) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $itemEvent->desc_event }}"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- data katalog pengumuman --}}
                    @foreach ($latest_pengumuman as $itemPengumuman)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('pengunjung/assets/img/pengumuman-image.jpg') }}"
                                    class="img-fluid shadow-sm rounded" alt="">
                                <div class="portfolio-info" title="{{ $itemPengumuman->judul_pengumuman }}">
                                    <h4 class="limit-text-title">{{ $itemPengumuman->judul_pengumuman }}</h4>
                                    <p>{{ dateConversion($itemPengumuman->tanggal_pengumuman) }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('pengunjung/assets/img/pengumuman-image.jpg') }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $itemPengumuman->isi_pengumuman }}"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- data katalog prestasi --}}
                    @foreach ($latest_prestasi as $itemPrestasi)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('images/prestasi/' . $itemPrestasi->foto_prestasi) }}"
                                    class="img-fluid shadow-sm rounded" alt="">
                                <div class="portfolio-info" title="{{ $itemPrestasi->judul_prestasi }}">
                                    <h4 class="limit-text-title">{{ $itemPrestasi->judul_prestasi }}</h4>
                                    <p>{{ dateConversion($itemPrestasi->tanggal_prestasi) }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('images/prestasi/' . $itemPrestasi->foto_prestasi) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $itemPrestasi->desc_prestasi }}"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Pertanyaan Section ======= -->
        <section id="pertanyaan" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pertanyaan Tentang Sekolah</h2>
                    <p>Beberapa pertanyaan seputar SDN 2 Kedaleman.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" class="shadow-sm">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                    non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                    purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100" class="shadow-sm">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim
                                nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200" class="shadow-sm">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing
                                elit? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                    Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                    tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300" class="shadow-sm">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam
                                aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                    est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400" class="shadow-sm">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare.
                                Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Kontak Section ======= -->
        <section id="kontak" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Informasi kontak sekolah, dan informasi lokasi sekolah.</p>
                </div>

                <div class="col-lg-12 mt-5 mt-lg-0">
                    <div>
                        <iframe style="border:0; width: 100%; height: 270px;" class="shadow-sm rounded"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15791.338514544084!2d114.2841109!3d-8.3192265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9e0bf6140aa1a70!2sSD%20Negeri%202%20Kedaleman!5e0!3m2!1sen!2sid!4v1670228458226!5m2!1sen!2sid"
                            frameborder="0" allowfullscreen></iframe>
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15791.338514544084!2d114.2841109!3d-8.3192265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9e0bf6140aa1a70!2sSD%20Negeri%202%20Kedaleman!5e0!3m2!1sen!2sid!4v1670228458226!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe> --}}
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->

        <hr>
    </main><!-- End #main -->
@endsection

@section('script')
    <script src="{{ asset('pengunjung/assets/carousel/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/popper.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/carousel/js/main.js') }}"></script>
@endsection
