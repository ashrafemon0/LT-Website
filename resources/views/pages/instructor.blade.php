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
                                <h1 class="breadcrumbs-title">Teachers</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Our Teacher</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <!--================= Instructor Section Start Here =================-->
            <div class="instructor__area instructor__area__instructor_page pt-113 pb-98 text-center">
                <div class="container instructor__width">
                    <div class="row">
                        <div class="col-xxl-7 offset-xxl-2 col-xl-7 offset-xl-2 col-lg-7 offset-lg-2">
                            <div class="instructor__title-content text-center pb-20">
                                <h2 class="instructor__title">Meet our class Teacher</h2>
                                <p class="instructor__pre-title">
                                    Our team of educators is not just a staff; they are mentors, nurturers, and partners in your child's journey. Their expertise, compassion, and dedication are the pillars upon which Learning Tree stands. They work tirelessly to create a secure and stimulating environment that encourages curiosity, creativity, and character development.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($instructor as $instructors)
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{$instructors->image}}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="profile.html">{{$instructors->name}}</a>
                                    </h4>
                                    <p>{{$instructors->designation}}</p>
                                </div>
                                <div class="instructor__content-3">
                                    <ul>
                                        <li><a href="{{$instructors->fa_link}}"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="{{$instructors->tw_link}}"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="{{$instructors->ln_link}}"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
            <!--================= Instructor Section End Here =================-->

        </div>
    </div>

@endsection
