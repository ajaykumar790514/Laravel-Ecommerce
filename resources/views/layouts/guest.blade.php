<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Ecommerce
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Font Awesome Stars-->
    {{--
    <link rel="stylesheet" href="css/fontawesome-stars.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome-stars.css') }}">

    <!-- Meanmenu CSS -->
    {{--
    <link rel="stylesheet" href="css/meanmenu.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">

    <!-- owl carousel CSS -->
    {{--
    <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <!-- Slick Carousel CSS -->
    {{--
    <link rel="stylesheet" href="css/slick.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">

    <!-- Animate CSS -->
    {{--
    <link rel="stylesheet" href="css/animate.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Jquery-ui CSS -->
    {{--
    <link rel="stylesheet" href="css/jquery-ui.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">

    <!-- Venobox CSS -->
    {{--
    <link rel="stylesheet" href="css/venobox.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    <!-- Nice Select CSS -->
    {{--
    <link rel="stylesheet" href="css/nice-select.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

    <!-- Magnific Popup CSS -->
    {{--
    <link rel="stylesheet" href="css/magnific-popup.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    {{--
    <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Helper CSS -->
    {{--
    <link rel="stylesheet" href="css/helper.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">

    <!-- Main Style CSS -->
    {{--
    <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">

    <!-- Responsive CSS -->
    {{--
    <link rel="stylesheet" href="css/responsive.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Modernizr js -->
    {{-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> --}}
    <script defer src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>





</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Begin Body Wrapper -->
    <main class="body-wrapper">
        @livewire('header')
        <section>

            {{$slot}}

        </section>
        @livewire('footer')

        @livewireScripts
    </main>
    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script defer src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script defer src="{{ asset('js/fabric.min.js') }}"></script>
    <script defer src="{{ asset('js/custome.js') }}"></script>
    <!-- Popper js -->
    <script defer src="/js/vendor/popper.min.js"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script defer src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Ajax Mail js -->
    <script defer src="/js/ajax-mail.js"></script>
    <!-- Meanmenu js -->
    <script defer src="/js/jquery.meanmenu.min.js"></script>
    <!-- Wow.min js -->
    <script defer src="/js/wow.min.js"></script>
    <!-- Slick Carousel js -->
    <script defer src="/js/slick.min.js"></script>
    <!-- Owl Carousel-2 js -->
    <script defer src="/js/owl.carousel.min.js"></script>
    <!-- Magnific popup js -->
    <script defer src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope js -->
    <script defer src="/js/isotope.pkgd.min.js"></script>
    <!-- Imagesloaded js -->
    <script defer src="/js/imagesloaded.pkgd.min.js"></script>
    <!-- Mixitup js -->
    <script defer src="/js/jquery.mixitup.min.js"></script>
    <!-- Countdown -->
    <script defer src="/js/jquery.countdown.min.js"></script>
    <!-- Counterup -->
    <script defer src="/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script defer src="/js/waypoints.min.js"></script>
    <!-- Barrating -->
    <script defer src="/js/jquery.barrating.min.js"></script>
    <!-- Jquery-ui -->
    <script defer src="/js/jquery-ui.min.js"></script>
    <!-- Venobox -->
    <script defer src="/js/venobox.min.js"></script>
    <!-- Nice Select js -->
    <script defer src="/js/jquery.nice-select.min.js"></script>
    <!-- ScrollUp js -->
    <script defer src="/js/scrollUp.min.js"></script>
    <!-- Main/Activator js -->
    <script defer src="/js/main.js"></script>
</body>

<!-- index30:23-->

</html>