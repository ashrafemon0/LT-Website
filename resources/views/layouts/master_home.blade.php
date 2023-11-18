<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>Home | Learning Tree School</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->

    <link rel="apple-touch-icon" href="{{asset('fontend/assets/images/logo-log.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend/assets/images/logo-log.png')}}">
    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/bootstrap.min.css')}}">
    <!--================= Back Menus css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/back-menus.css')}}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/animate.css')}}">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/owl.carousel.css')}}">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/fonts/elegant-icon.css')}}">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/magnific-popup.css')}}">
    <!--================= Back Animations css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/back-animations.css')}}">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/style.css')}}">
    <!--================= Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/back-spacing.css')}}">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/responsive.css')}}">
    <link href="{{ asset('fontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
</head>
<body>
<!--================= Preloader Section Start Here =================-->
<div id="back__preloader">
    <div id="back__circle_loader"></div>
    <div class="back__loader_logo"><img src="{{asset('fontend/assets/images/logo-log.png')}}" alt="Preload"></div>
</div>
<!--================= Preloader Section End Here =================-->

<!--================= Header Section Start Here =================-->

@include('layouts.body.header')
<!--================= Header Section End Here =================-->

<!--================= Back Wrapper Start Here =================-->
<div class="back-wrapper">
    @yield('home_content')
</div>
<!--================= Back Wrapper End Here =================-->

<!--================= Newsletter Section Start Here =================-->
<div class="newsletter__area">
    <div class="container newsletter__width">
        <div class="row">
            <div class="col-xxl-12">
                <div class="newsletter__wrapper">
                    <div class="newsletter__content">
                        <h2 class="newsletter__title">Newsletter to get <br> in touch</h2>
                    </div>
                    <div class="newsletter__form">
                        <form>
                            <input type="email" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Newsletter Section End Here =================-->

<!--================= Footer Section Start Here =================-->
@include('layouts.body.footer')
<!--================= Footer Section End Here =================-->

<!--================= Scroll to Top Start =================-->
<div id="backscrollUp">
    <span aria-hidden="true" class="arrow_carrot-up"></span>
</div>
<!--================= Scroll to Top End =================-->

<!--================= Jquery latest version =================-->

<script src="{{asset('fontend/assets/js/jquery.min.js')}}"></script>
<!--================= Modernizr js =================-->
<script src="{{asset('fontend/assets/js/modernizr-2.8.3.min.js')}}"></script>
<!--================= Bootstrap js =================-->
<script src="{{asset('fontend/assets/js/bootstrap.min.js')}}"></script>
<!--================= Owl Carousel js =================-->
<script src="{{asset('fontend/assets/js/owl.carousel.min.js')}}"></script>
<!--================= Magnific Popup =================-->
<script src="{{asset('fontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--================= Counter up js =================-->
<script src="{{asset('fontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('fontend/assets/js/waypoints.min.js')}}"></script>
<!--================= Wow js =================-->
<script src="{{asset('fontend/assets/js/wow.min.js')}}"></script>
<!--================= Back menus js =================-->
<script src="{{asset('fontend/assets/js/back-menus.js')}}"></script>
<!--================= Plugins js =================-->
<script src="{{asset('fontend/assets/js/plugins.js')}}"></script>
<!--================= Main js =================-->
<script src="{{asset('fontend/assets/js/main.js')}}"></script>
<script src="{{ asset('fontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
