<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('cool_admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('cool_admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('cool_admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('cool_admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('cool_admin/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('layouts.header_mobile')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('layouts.menu_sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('layouts.header_desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')

            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('cool_admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('cool_admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('cool_admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('cool_admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('cool_admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('cool_admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('cool_admin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('cool_admin/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
