<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.layouts.head')
</head>
<body id="page-top">

    <!-- header -->
        @include('backend.layouts.header')
    <!-- end header -->

    <!-- Wrapper -->
    <div id="wrapper">
    <!-- Sidebar -->
        @include('backend.layouts.sidebar')
    <!-- end sidebar -->


    <!-- content-wrapper -->
    <div id="content-wrapper">
        <!-- kontainer fluid -->
        @section('main-content')

            @show
    
        <!-- end container-fluid -->

    <!-- footer -->

        <!-- end footer -->
    </div>
    <!-- END content-wrapper -->
    
    </div>
    <!-- end Wrapper -->

    
</body>
</html>