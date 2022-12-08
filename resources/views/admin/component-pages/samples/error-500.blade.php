@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}"> --}}

    <title>Eror 500 | Manajemen Website</title>
@endsection

@section('content')
    <div class="container">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper align-items-center text-center error-page bg-info">
                <div class="row pt-5 mt-5">
                    <div class="col-lg-4 mx-auto text-white">
                        <div class="row align-items-center d-flex flex-row">
                            <div class="col-lg-6 text-lg-right pr-lg-4">
                                <h1 class="display-1 mb-0">500</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4 my-auto text-white">
                        <h2>SORRY!</h2>
                        <h3 class="font-weight-light">Internal server error!</h3>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center mt-xl-2">
                        <a class="text-white font-weight-medium" href="../../index.html">Back to home</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-xl-2">
                        <p class="text-white font-weight-medium text-center">Copyright &copy; 2021 All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/settings.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/todolist.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script> --}}
@endsection
