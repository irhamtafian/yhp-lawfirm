<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="{{ asset('assets/frontend/images/logo-yhp-lawfirm-favicon.png') }}" sizes="32x32" type="image/png">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-nao-calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-pseudo-ripple.css') }}">

    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/revolution/settings.css') }}">
    <!-- Revolution Layers Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/revolution/layers.css') }}">
    <!-- Revolution Navigation Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/revolution/navigation.css') }}">
</head>
<body>
<main>
    <header class="style3 w-100">
        @include("frontend.layouts.header-menubar")
    </header><!-- Header -->
    
    <!-- Navigation Bar -->
    @include("frontend.layouts.header-sticky")

    <!-- Search -->
    @include("frontend.layouts.search")

    <!-- Responsive Navigation Bar -->
    @include("frontend.layouts.header-responsive")
    
    <!-- Content -->
    @yield('content')

    <footer>
        @include("frontend.layouts.footer")
    </footer><!-- Footer -->

    <!-- Copyright -->
    @include("frontend.layouts.copyright")
    
</main><!-- Main Wrapper -->

<!-- Script -->
@include("frontend.layouts.script")

</body>
</html>