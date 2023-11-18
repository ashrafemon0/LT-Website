@extends('layouts.master_home')

@section('home_content')

    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <!--================= Back Breadcrumbs Section Start Here =================-->
            <div class="back-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="fontend/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <img class="mobile" src="fontend/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">Contact</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @foreach($CalenderData as $CalenderDatas)
            <div id="back-contact" class="back-contact-page pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender">
                                <iframe src="https://calendar.google.com/calendar/embed?src=en.bd%23holiday%40group.v.calendar.google.com&ctz=UTC" style="border: 0" width="1280" height="800" frameborder="0" scrolling="no"></iframe>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div id="back-contact" class="back-contact-page pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-image">
                                <img style="width: 100%" src="{{$CalenderDatas->calender_img}}" alt="">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
