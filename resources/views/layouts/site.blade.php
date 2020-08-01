<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jobpply - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assest/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assest/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assest/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assest/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assest/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('assest/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/style.css')}}">
</head>

<body>
    @include('jobFinder.includes.navbar')
    <!-- END nav -->

    @yield('content')
    <hr>

    @include('jobFinder.includes.newsletter')

    @include('jobFinder.includes.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="{{asset('assest/js/jquery.min.js')}}"></script>
    <script src="{{asset('assest/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assest/js/popper.min.js')}}"></script>
    <script src="{{asset('assest/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assest/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assest/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assest/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assest/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assest/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assest/js/aos.js')}}"></script>
    <script src="{{asset('assest/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assest/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{asset('assest/js/google-map.js')}}"></script>
    <script src="{{asset('assest/js/main.js')}}"></script>

</body>

</html>