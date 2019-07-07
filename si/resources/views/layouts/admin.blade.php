<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Marketplacer - Condor Sport</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('theme/admin/ample-admin-theme/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('theme/admin/ample-admin-theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}"
          rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('theme/admin/ample-admin-theme/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/ample-admin-theme/css/mystyle.css') }}" rel="stylesheet">
</head>
<body class="fix-header">
    <div id="wrapper">

        @include('layouts.nav')
        @include('layouts.leftsidebar')

        <div id="page-wrapper">
            <div class="container-fluid">

                @yield('content')

                <div class="row" id="product-list">
                </div>
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="{{ asset('theme/admin/ample-admin-theme/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('theme/admin/ample-admin-theme/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('theme/admin/ample-admin-theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('theme/admin/ample-admin-theme/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('theme/admin/ample-admin-theme/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('theme/admin/ample-admin-theme/js/custom.min.js') }}"></script>
<script src="{{ asset('theme/admin/js/app/api.js') }}"></script>
<script src="{{ asset('theme/admin/js/app/tools.js') }}"></script>