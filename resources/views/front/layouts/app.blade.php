<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#2ddcd3" />
    <meta
        name="apple-mobile-web-app-status-bar-style"
        content="black-translucent"
    />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta
        name="description"
        content="Welcoming Nest"
    />
    <meta name="author" content="bekatos" />
    <meta
        name="keywords"
        content="Welcoming nest,roommate,find home,arkadas bul, oda arkadasi,ev arkadasi"/>
    <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Title -->
    <title>
        Welcoming Nest
    </title>

    @include('front.partials.css')
    <!-- Livewire Styles -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @livewireStyles
    <style>
        @media (max-width: 767px) {
            .cover-image {
                max-height: 200px;
            }
        }
    </style>
</head>
<body>
<div id="global-loader">
    <img src="images/loader.svg" class="loader-img floating" alt="" />
</div>
@include('front.partials.header')
@yield('content')
@include('front.partials.footer')
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>
<!-- JQuery js-->
<!-- Livewire Scripts -->
@livewireScripts
</body>
<script>
@if(session('success'))
    Swal.fire({
    title: 'Başarılı!',
    text: '{{ session("success") }}',
    icon: 'success',
    });
    @endif
    </script>
@include('front.partials.js')
</html>
