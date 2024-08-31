<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<!-- Mirrored from wowdash.wowtheme7.com/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 12:12:17 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Accueil Admin')
    </title>
    <link rel="icon" type="image/png" href="{{ asset('storage/assets_backend/images/favicon.png') }}" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/dataTables.min.css') }}">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/editor-katex.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/editor.atom-one-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/editor.quill.snow.css') }}">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/flatpickr.min.css') }}">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/full-calendar.css') }}">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/jquery-jvectormap-2.0.5.css') }}">
    <!-- Popup css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/magnific-popup.css') }}">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/slick.css') }}">
    <!-- prism css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/prism.css') }}">
    <!-- file upload css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/file-upload.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/lib/audioplayer.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('storage/assets_backend/css/style.css') }}">
</head>

<body>

    @include('backend.partials.sidebar')

    <main class="dashboard-main">

        @include('backend.partials.header-admin')


        <div class="dashboard-main-body">

           @yield('breadcrumb')
            @yield('content')
        </div>

        <footer class="d-footer">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <p class="mb-0">© {{ date('Y') }} Groupe Envol Sarl. All Rights Reserved.</p>
                </div>

            </div>
        </footer>
    </main>

    <!-- jQuery library js -->
    <script src="{{ asset('storage/assets_backend/js/lib/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('storage/assets_backend/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Apex Chart js -->
    <!-- <script src="{{ asset('storage/assets_backend/js/lib/apexcharts.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Data Table js -->
    <script src="{{ asset('storage/assets_backend/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('storage/assets_backend/js/lib/iconify-icon.min.js') }}"></script>
    <!-- jQuery UI js -->
    <script src="{{ asset('storage/assets_backend/js/lib/jquery-ui.min.js') }}"></script>
    <!-- Vector Map js -->
    <script src="{{ asset('storage/assets_backend/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('storage/assets_backend/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Popup js -->
    <script src="{{ asset('storage/assets_backend/js/lib/magnifc-popup.min.js') }}"></script>
    <!-- Slick Slider js -->
    <script src="{{ asset('storage/assets_backend/js/lib/slick.min.js') }}"></script>
    <!-- prism js -->
    <script src="{{ asset('storage/assets_backend/js/lib/prism.js') }}"></script>
    <!-- file upload js -->
    <script src="{{ asset('storage/assets_backend/js/lib/file-upload.js') }}"></script>
    <!-- audioplayer -->
    <script src="{{ asset('storage/assets_backend/js/lib/audioplayer.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('storage/assets_backend/js/app.js') }}"></script>

    <script src="{{ asset('storage/assets_backend/js/homeThreeChart.js') }}"></script>

</body>

<!-- Mirrored from wowdash.wowtheme7.com/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2024 12:12:20 GMT -->

</html>
