<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <!-- base:css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('warehouse/vendors/typicons.font/font/typicons.css')}}">
        <link rel="stylesheet" href="{{asset('warehouse/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('warehouse/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject --> 
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('warehouse/css/vertical-layout-light/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('warehouse/images/noBgBlack.png')}}" />
        
    </head>
    <body>
        <div class="container-scroller">
            @include('layouts.header')
            <div class="container-fluid page-body-wrapper">
                @include('layouts.navigation')
                <div class="main-panel">
                    <div class="content-wrapper">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div> 

        <!-- container-scroller -->
        <!-- base:js -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="{{asset('warehouse/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/progressbar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{asset('warehouse/js/off-canvas.js')}}"></script>
        <script src="{{asset('warehouse/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('warehouse/js/template.js')}}"></script>
        <script src="{{asset('warehouse/js/settings.js')}}"></script>
        <script src="{{asset('warehouse/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <script src="{{asset('warehouse/vendors/progressbar.js/progressbar.min.js')}}"></script>
        <script src="{{asset('warehouse/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <script src="{{asset('warehouse/js/dashboard.js')}}"></script>
        <script src="{{asset('warehouse/js/main_.js')}}"></script>
        <!-- End custom js for this page-->
        @yield('additional_js')

    </body>
</html>
