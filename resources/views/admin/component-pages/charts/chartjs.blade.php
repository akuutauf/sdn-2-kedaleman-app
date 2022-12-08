@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}"> --}}

    <title>Chart JS | Manajemen Website</title>
@endsection

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Line chart</h4>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bar chart</h4>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Area chart</h4>
                            <canvas id="areaChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Doughnut chart</h4>
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pie chart</h4>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Scatter chart</h4>
                            <canvas id="scatterChart"></canvas>
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
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/settings.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/todolist.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script> --}}
@endsection
