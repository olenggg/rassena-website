<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<body>
    <!-- header -->
        @include('frontend.layouts.header')
    <!-- end header -->



    <!-- content -->
        @section('main-content')

            @show
    <!-- end content -->



    <!-- footer -->
        @include('frontend.layouts.footer')
    <!-- end footer -->
</body>
</html>