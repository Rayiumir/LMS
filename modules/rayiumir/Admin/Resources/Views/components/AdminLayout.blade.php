<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>میزکار آموزشی {{ $title ?? '' }} </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
</head>
<body>
<div class="d-flex" id="wrapper">

    @include('Admin::admin.inc.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

        @include('Admin::admin.inc.navbar')

        <div class="container">
            <div class="card-body mt-5">
                {{ $slot }}
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
