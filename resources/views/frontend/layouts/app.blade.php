<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Styles -->
    
    @include('frontend.layouts.head')
</head>
<body id="goto-here">

    <!-- header -->
        @include('frontend.layouts.header')
    <!-- end header -->

   
        <!-- kontainer fluid -->
        @section('main-content')

            @show
    
        <!-- end container-fluid -->

    <!-- footer -->
    @include('frontend.layouts.footer')
        <!-- end footer -->
   

    
</body>
</html>