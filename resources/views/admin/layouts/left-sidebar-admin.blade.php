<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas fixed shadow-sm" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-house"></i>&ensp;&ensp;Beranda Admin</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-guru" aria-expanded="false"
                aria-controls="manajemen-guru">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-user"></i>&ensp;&ensp;Guru</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-guru">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.guru') }}">Data Guru</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.guru') }}">Tambah Guru</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-motivasi" aria-expanded="false"
                aria-controls="manajemen-motivasi">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-quote-left"></i>&ensp;&ensp;Motivasi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-motivasi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.motivasi') }}">Data Motivasi</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.motivasi') }}">Tambah
                            Motivasi</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-pengumuman" aria-expanded="false"
                aria-controls="manajemen-pengumuman">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-bell"></i>&ensp;&ensp;Pengumuman</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-pengumuman">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.pengumuman') }}">Data Pengumuman</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.pengumuman') }}">Tmbh
                            Pengumuman</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-arsip" aria-expanded="false"
                aria-controls="manajemen-arsip">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-folder-open"></i>&ensp;&ensp;Arsip</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-arsip">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.arsip') }}">Data Arsip</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.arsip') }}">Tambah Arsip</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-event" aria-expanded="false"
                aria-controls="manajemen-event">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-calendar"></i>&ensp;&ensp;Event</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-event">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.event') }}">Data Event</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.event') }}">Tambah
                            Event</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-prestasi" aria-expanded="false"
                aria-controls="manajemen-prestasi">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-trophy"></i>&ensp;&ensp;Prestasi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-prestasi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.prestasi') }}">Data Prestasi</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.prestasi') }}">Tambah
                            Prestasi</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-banner" aria-expanded="false"
                aria-controls="manajemen-banner">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-panorama"></i>&ensp;&ensp;Banner</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-banner">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.banner') }}">Data Banner</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.create.banner') }}">Tambah
                            Banner</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
