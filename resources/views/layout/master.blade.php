<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="AwesomeThemez">
    <meta name="description" content="Poze - Point of Sale Landing Page HTML Template">
    <title>Poze - Point of Sale Landing Page HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="public/img/favicon.svg">
    <!-- CSS plugins files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<style>
    @media only screen and (max-width: 583px) {
        .d-block {
            display: block !important;
        }
    }

    .copyright-container {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

        .heading {
        font-weight: bold;
        font-size: 25px;
    }

    ul li {
        padding: 5px 0;
    }

    ol li {
        padding: 20px 0;
    }
    .tnc-policy {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }

    @media only screen and (max-width: 992px) {
        .copyright-container {
            display: flex;
            flex-direction: column-reverse;
            justify-content: space-evenly;
        }

        .tnc-policy {
            padding-bottom: 15px;

        }
    }
</style>

<body>
    <!-- Start Preloader -->
    <div class="cs_perloader">
        <div class="cs_perloader_in">
            <div class="cs_perloader_dots_wrap">
                <div class="cs_perloader_dots"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <span class="cs_perloader_text">Loading...</span>
    </div>
    <!-- End Preloader -->
    <!-- Start Header section -->

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <!-- Back to top btn -->
    <div id="cs_backtotop"><i class="fa-solid fa-arrow-up"></i></div>
    <!-- All Scripts Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
