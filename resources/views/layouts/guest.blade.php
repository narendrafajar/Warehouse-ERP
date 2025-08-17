<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- base:css -->
        <link rel="stylesheet" href="{{asset('warehouse/vendors/typicons.font/font/typicons.css')}}">
        <link rel="stylesheet" href="{{asset('warehouse/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('warehouse/css/vertical-layout-light/style.css')}}">
        <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('warehouse/images/noBgBlack.png')}}" />
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    {{$slot}}
                </div>
            <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </body>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src={{asset('warehouse/vendors/js/vendor.bundle.base.js')}}></script>
    <!-- endinject -->
    <!-- inject:js -->
    {{-- <script src="../../js/off-canvas.js"></script> --}}
    <script src="{{asset('warehouse/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('warehouse/js/template.js')}}"></script>
    <script src="{{asset('warehouse/js/settings.js')}}"></script>
    <script src="{{asset('warehouse/js/todolist.js')}}"></script>
    <!-- endinject -->
</html>
