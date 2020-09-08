<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('includes.css_dash')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts._sidebar_dash')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts._navbar_dash')
                @yield('content')
               

            </div>
            <!-- End of Main Content -->
            @include('layouts._footer_dash')
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>
    @include('includes.script_dash')
    @stack('after_script')
</html>