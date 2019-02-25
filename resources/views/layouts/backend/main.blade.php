<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="concept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>@yield('title', 'E-Learning')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      @include('layouts.backend.header')

      @include('layouts.backend.sidebar')

      @yield('content')

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="concept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="concept/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="concept/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="concept/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="concept/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="concept/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="concept/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="concept/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="concept/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="concept/assets/libs/js/dashboard-influencer.js"></script>
</body>

</html>
