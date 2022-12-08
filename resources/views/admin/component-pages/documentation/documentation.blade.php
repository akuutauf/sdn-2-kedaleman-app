@extends('layouts.base-admin')

@section('title')
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.   css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/codemirror/ambiance.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/pwstabs/jquery.pwstabs.min.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}"> --}}

    <title>Documentation | Manajemen Website</title>
@endsection

@section('content')
    <div class=" container">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="  documentation">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 pt-5">
                                <a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="ti-home mr-2"></i>Back
                                    to home</a>
                            </div>
                        </div>
                        <div class="row pt-5 mt-5">
                            <div class="col-12 pt-5 text-center">
                                <i class="text-primary mdi mdi-file-document-box-multiple-outline display-1"></i>
                                <h3 class="text-primary font-weight-light mt-5">
                                    The detailed documentation of Skydash Admin Template is provided at
                                    <a href="http://bootstrapdash.com/demo/skydash/docs/documentation.html" target="_blank"
                                        class="text-danger d-block text-truncate">
                                        http://bootstrapdash.com/demo/skydash/docs/documentation.html
                                    </a>
                                </h3>
                                <h4 class="mt-4 font-weight-light text-primary">
                                    In case you want to refer the documentation file, it is available at
                                    <span class="text-danger">/docs/documentation.html</span>
                                    in the downloaded folder
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/codeEditor.js') }}"></script>
    <script src="{{ asset('admin/js/tabs.js') }}"></script>
    <script src="{{ asset('admin/js/tooltips.js') }}"></script>
    <script src="{{ asset('admin/js/documentation.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/settings.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/todolist.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script> --}}
@endsection
