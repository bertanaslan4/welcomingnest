<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-assets-path="{{ asset('dashboard/assets') }}/">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard </title>


    <meta name="description" content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template." />
    <meta name="keywords" content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
{{--    <link rel="canonical" href="https://1.envato.market/materialize_admin">--}}


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/materialize-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap" rel="stylesheet">
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('admin.partials.css')

</head>

<body>



<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

        <!-- Navbar -->
        @include('admin.partials.header')



        <!-- Layout container -->
        <div class="layout-page">





            @include('admin.partials.sidebar')



            <!-- Content wrapper -->
            <div class="content-wrapper">
                @yield('content')

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>



    <!-- Overlay -->
{{--    <div class="layout-overlay layout-menu-toggle"></div>--}}
{{--    --}}
{{--    <div class="drag-target"></div>--}}

</div>
<!-- / Layout wrapper -->


<script>
@if(session('success'))
    Swal.fire({
    title: 'Başarılı!',
    text: '{{ session("success") }}',
    icon: 'success',
    });
    @endif
</script>
@include('admin.partials.js')

</body>

</html>

<!-- beautify ignore:end -->

