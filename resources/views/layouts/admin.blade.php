<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <link href="{{asset('assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('assets/image/apple-touch-icon.png')}}" sizes="180x180"/>
    <link rel="icon" href="{{asset('assets/image/favicon-32x32.png')}}" sizes="32x32" type="image/png"/>
    <link rel="icon" href="{{asset('assets/image/favicon-16x16.png')}}" sizes="16x16" type="image/png"/>
    <link rel="manifest" href="{{asset('assets/js/manifest.json')}}"/>
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9"/>
    <link rel="icon" href="{{asset('assets/image/favicon.ico')}}"/>
    <meta name="theme-color" content="#712cf9"/>
    <link rel="stylesheet" href="{{asset('assets/css/tg.css')}}"/>
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/dashboard.rtl.css') }}" rel="stylesheet">
</head>
<body>

@include('admin.shared.header')

<div class="container-fluid">

    <div class="row">
        @include('admin.shared.nav')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>


<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js')}}"></script>
<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>
</html>
