<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pemerintah Kota BALIKPAPAN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('public') }}/Up/assets/img/FESPATI KETAPANG.png" rel="icon">
    <link href="{{ url('public') }}/Up/assets/img/FESPATI KETAPANG.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('public') }}/Up/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/Up/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('public') }}/Up/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/Up/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('public') }}/Up/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/Up/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('public') }}/Up/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    {{-- Header --}}
    <x-layout.depan.header />
    <div class="row">
        <div class="container">
            <x-Layout.utils.notifdepan />
        </div>
        {{ $slot }}
    </div>
    {{-- end header --}}
    <!-- ======= Footer ======= -->
    <x-layout.depan.footer />
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <style>
        .scroll-top:hover {
            background: #124e55;
            color: #fff;
        }

        .scroll-top .bi:hover {
            color:#fff;
        }
    </style>

    <!-- Vendor JS Files -->
    <script src="{{ url('public') }}/Up/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/Up/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('public') }}/Up/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('public') }}/Up/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('public') }}/Up/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('public') }}/Up/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('public') }}/Up/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public') }}/Up/assets/js/main.js"></script>

</body>

</html>
