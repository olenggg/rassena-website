<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @include('frontend.layouts.head')
</head>
<body id="page-top">

    <!-- header -->
        @include('frontend.layouts.header')
    <!-- end header -->

    <!-- Wrapper -->
    <div id="wrapper">
    <!-- content-wrapper -->
    <div id="content-wrapper">
        <!-- kontainer fluid -->
        @section('main-content')

            @show
    
        <!-- end container-fluid -->

    <!-- footer -->
    @include('frontend.layouts.footer')
        <!-- end footer -->
    </div>
    <!-- END content-wrapper -->
    
    </div>
    <!-- end Wrapper -->

    
</body>
</html>