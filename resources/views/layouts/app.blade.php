<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Dashboard') | INSPINIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS Files -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">

    <!-- Font Awesome -->
    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendors.min.css') }} " rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jsvectormap/jsvectormap.min.css') }} ">

    @stack('styles')
</head>
<body>
    <!-- Begin page -->
    <div class="wrapper">

        {{-- Include Sidebar --}}
        @include('layouts.sidebar')

        {{-- Include Navbar --}}
        @include('layouts.navbar')

        {{-- Main Content --}}
        <div class="page-content">
            @yield('content')
        </div>

        {{-- Include Footer --}}
        @include('layouts.footer')

    </div>

    <!-- JS Files -->
  <script src="{{ asset('assets/js/config.js')}}"></script>

           <script src="{{ asset('assets/js/vendors.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js')}}"></script>

    <!-- E Charts js -->
    <script src="{{ asset('assets/plugins/echarts/echarts.min.js')}}"></script>

    <!-- JVector Maps-->
    <script src="asset('assets/plugins/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="asset('assets/js/maps/world.js')}}"></script>

    <!-- Custom table -->
    <script src="asset('assets/js/pages/custom-table.js')}}"></script>

   
    <!-- Dashboard Page js -->
    <script src="assets/js/pages/dashboard.js"></script>
    @stack('scripts')
</body>
</html>
