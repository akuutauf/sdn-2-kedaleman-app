<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    {{-- Custom title in every page --}}
    @yield('title')
    <link rel="shortcut icon" class="taskbar-icon" href="{{ asset('img/logo/tut-wuri-handayani-logo.png') }}" />

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pengunjung/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('pengunjung/assets/css/style.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pengunjung/assets/vendor/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pengunjung/assets/vendor/vendor/swiper/swiper-bundle.min.cs') }}" rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link href="{{ asset('pengunjung/assets/vendor/css/style.css') }}" rel="stylesheet">

    {{-- Font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    {{-- Navbar pengunjung --}}
    @include('pengunjung.layouts.navbar-pengunjung')

    {{-- Custome content one in every page --}}
    @yield('content-one')

    {{-- Custom content two in every page --}}
    @yield('content-two')

    {{-- Include footer pengunjung --}}
    @include('pengunjung.layouts.footer-pengunjung')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('pengunjung/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('pengunjung/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('pengunjung/assets/js/main.js') }}"></script>

    {{-- Include script for running in every page --}}
    @yield('script')

</body>

</html>
