<?php
$user = Auth::user();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>INSURANCE - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('dashboard/img/icon.png') }}" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">

    <!-- Font Awesome -->
    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendors.min.css') }} " rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jsvectormap/jsvectormap.min.css') }} ">

    <!-- Additional CSS for your app -->
    @stack('styles')


    @push('styles')
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css"> -->
    @endpush

    @push('scripts')
   
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
    @endpush


</head>

<body>

    <div class="wrapper">

        <!-- Navbar -->


         @if ($user->role == 1)
            @include('dashboard.include.sidebar')
        @elseif ($user->role == 2)
            @include('dashboard.include.sub-admin-sidebar')
        @elseif ($user->role == 3)
            @include('dashboard.include.executive-sidebar')
        @endif

        @include('dashboard.include.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
       

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    @yield('page-header') {{-- Optional section for page header --}}
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('dashboard.include.footer')

        <!-- Control Sidebar (optional) -->
       
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Scroll to Top Button-->
    <!-- <a id="scrollToTopBtn" href="#" class="btn btn-primary btn-sm scroll-to-top">
        <i class="fas fa-angle-up"></i>
    </a> -->

    <!-- Logout Modal -->
    @include('dashboard.include.logout')

    

    <!-- Additional scripts -->
    @stack('scripts')

    <script>
        // Scroll to Top Button
        var mybutton = document.getElementById("scrollToTopBtn");

        window.onscroll = function () {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        };

        mybutton.onclick = function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>
@yield('scripts')


</body>

</html>
