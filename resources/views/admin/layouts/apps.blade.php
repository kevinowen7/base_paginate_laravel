<html>
<head>
    <title>@yield('title')</title>
    @yield('meta')
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @yield('sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content"> 
                @yield('header')

                @yield('content')
            </div>

            @yield('footer')
        </div>
    </div>

    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>
@yield('custom-script')
</html>