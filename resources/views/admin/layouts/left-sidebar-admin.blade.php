<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas fixed" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title"><i class="fa-solid fa-house"></i>&ensp;&ensp;Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-guru" aria-expanded="false"
                aria-controls="manajemen-guru">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Guru</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-guru">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.guru') }}">Data Guru</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-motivasi" aria-expanded="false"
                aria-controls="manajemen-motivasi">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Motivasi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-motivasi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.motivasi') }}">Data Motivasi</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-pengumuman" aria-expanded="false"
                aria-controls="manajemen-pengumuman">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Pengumuman</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-pengumuman">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.pengumuman') }}">Data Pengumuman</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-arsip" aria-expanded="false"
                aria-controls="manajemen-arsip">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Arsip</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-arsip">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.arsip') }}">Data Arsip</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-event" aria-expanded="false"
                aria-controls="manajemen-event">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Event</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-event">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.event') }}">Data Event</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-prestasi" aria-expanded="false"
                aria-controls="manajemen-prestasi">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Prestasi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-prestasi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.prestasi') }}">Data Prestasi</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manajemen-banner" aria-expanded="false"
                aria-controls="manajemen-banner">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kelola Banner</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manajemen-banner">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.banner') }}">Data Banner</a>
                    </li>
                </ul>
            </div>
        </li>
        <br>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('dropdowns') }}">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('typography') }}">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('basic_elements') }}">Basic
                            Elements</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('chart_js') }}">ChartJs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('basic_table') }}">Basic
                            table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('mdi_icons') }}">Mdi icons</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('sample_login') }}"> Login </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('sample_register') }}">
                            Register </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('error_404') }}"> 404
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('error_500') }}"> 500
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('documentation') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
