<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon" />
    <title>Multikart - Multi-purpose E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/font-awesome.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">


    <!--Slick slider css-->
    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick-theme.css"> --}}

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">
    <!-- Themify icon -->
    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify-icons.css"> --}}

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css"> --}}

    {{--
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"> --}}
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">


</head>

<body class="theme-color-1">




    <main>
        {{$slot}}
    </main> <!-- modal end -->


    

    <!-- latest jquery-->
    {{-- <script src="../assets/js/jquery-3.3.1.min.js"></script> --}}
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>


    <!-- menu js-->
    <script src="{{ asset('js/menu.js') }}"></script>
    {{-- <script src="../assets/js/menu.js"></script> --}}

    <!-- lazyload js-->
    <script src="{{ asset('js/lazysizes.min.js') }}"></script>
    {{-- <script src="../assets/js/lazysizes.min.js"></script> --}}

    <!-- slick js-->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    {{-- <script src="../assets/js/slick.js"></script> --}}

    <!-- Bootstrap js-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="../assets/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>




</body>

</html>