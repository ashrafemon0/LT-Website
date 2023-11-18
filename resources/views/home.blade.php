@extends('layouts.master_home')

@section('home_content')


    <div class="back-wrapper-inner">

        <!--================= Banner Section Start Here =================-->
        @include('layouts.body.slider')
        <!--================= Banner Section End Here =================-->

        <!--=================  Popular Topics Section Start Here ================= -->
        <div class="back_popular_topics pt-120 pb-120">
            <div class="container">
                <div class="back__title__section text-center">
                    <h6 class="back__subtitle">Browse Categories</h6>
                    <h2 class="back__tittle"> Popular Topics to Learn</h2>
                </div>
                <div class="row">
                    @foreach($brands as $brand)
                    <div class="col-md-4">
                        <div class="item__inner">
                            <div class="icon">
                                <img style="width: 70px; height: 70px" src="{{$brand->brand_image}}" alt="Icon image">
                            </div>
                            <div class="back-content">
                                <h3 class="back-title"><a href="coureses-grid.html">{{$brand->brand_name}}</a></h3>
                                <p>{{$brand->brand_des}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="back__title__section text-center">
                    <h2 class="back__tittle"> Specific areas of learning</h2>
                </div>
                <div class="row">
                        <div class="col-md-3">
                            <div class="item__inner">
                                <div class="icon">
                                    <img style="width: 70px; height: 70px" src="fontend/assets/images/brand/3.png" alt="Icon image">
                                </div>
                                <div class="back-content">
                                    <h3 class="back-title"><a href="coureses-grid.html">Literacy</a></h3>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img style="width: 70px; height: 70px" src="fontend/assets/images/brand/2.png" alt="Icon image">
                            </div>
                            <div class="back-content">
                                <h3 class="back-title"><a href="coureses-grid.html">Mathematics</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img style="width: 70px; height: 70px" src="fontend/assets/images/brand/4.png" alt="Icon image">
                            </div>
                            <div class="back-content">
                                <h3 class="back-title"><a href="coureses-grid.html">Understanding the world </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner">
                            <div class="icon">
                                <img style="width: 70px; height: 70px" src="fontend/assets/images/brand/1.png" alt="Icon image">
                            </div>
                            <div class="back-content">
                                <h3 class="back-title"><a href="coureses-grid.html">Expressive a Arts and Design </a></h3>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="text-center pt-20">
                <a href="coureses-grid.html" class="back-btn-border"> Browse more Courses</a>
            </div>
        </div>
        <!--=================  Popular Topics Section End Here ================= -->

        <!--=================  About Section Start Here ================= -->
        <div class="about__area p-relative mb-120">
            @foreach($abouts as $about)
            <div class="container about__area-width">
                <div class="row about-shadow">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img style="width: 100%; height: auto" src="{{$about->big_img}}" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-50 md-pl-15">
                        <div class="about__content">
                            <h2 class="about__title">About <br> {{$about->title}}</h2>
                            <p class="about__paragraph">{{$about->short_dis}}
                            </p>
                            <img class="about__signature" src="{{$about->small_img}}" style="width: 100px; height: auto" alt="Signature">
                            <div class="about__btn md-mb-60">
                                <a href="{{route('about')}}" class="back-btn"> More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!--================= About Section End Here ================= -->

        <!--================= Course Section Start Here =================-->
        <div class="back__course__area pt-120 pb-90">
            <img class="back__shape__1" src="fontend/assets/images/course/shape/1.png" alt="Shape Image">
            <img class="back__shape__2" src="fontend/assets/images/course/shape/02.png" alt="Shape Image">
            <div class="container">
                <div class="back__title__section text-center">
                    <h6 class="back__subtitle">Featured Courses</h6>
                    <h2 class="back__tittle"> Choose Unlimited Options </h2>
                </div>
                <div class="row">
                    @foreach($courses as $course)
                    <div class="col-lg-4">
                        <div class="course__item mb-30">
                            <div class="course__thumb">
                                <a href="{{ route('SpecificCourseDetails',['id' => $course->id]) }}"><img style="width: 740px; height: 200px" src="{{ $course->teacher_img }}" alt="image"></a>
                            </div>
                            <div class="course__inner">
                                <span class="back-category cate-1">{{$course->course_name}}</span>
                                <h3 class="back-course-title"><a href="{{ route('SpecificCourseDetails',['id' => $course->id]) }}">{{$course->course_des}}</a></h3>
                                <div class="course__card-icon d-flex align-items-center">
                                    <div class="course__card-icon--1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span>{{$course->course_enroll}}</span>
                                    </div>
                                    <div class="course__card-icon--2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        <span>{{$course->course_review}}</span>
                                    </div>
                                    <div class="back__user">
                                       $ {{$course->course_price}}
{{--                                        <img src="assets/images/course/small-image/1.png" alt="user">--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--================= Course Section End Here =================-->

        <!--=================  Event Section Start Here ================= -->
        <div class="event__area p-relative pb-100 pt-120">
            <div class="container event__width">
                <div class="row">
                    <div class="col-lg-8 pr-80">
                        <div class="event__section-wrapper">
                            <div class="event__content-wrapper mb-45">
                                <h2 class="event__title">Join our <br> Upcoming Events</h2>
                                <p class="event__paragraph">Learning is a life-long journey that in fact we never find
                                    the terminate stop. </p>
                            </div>
                            @foreach($events as $event)
                                <div class="event__card-wrapper">
                                    <div class="event__card">
                                        <div class="col-lg-2 event__card--date-area">
                                    <span class="event__card--date-area-2 font-weight-bold">
                                        @if($event->eventDate === true)
                                            @if ($event->created_at)
                                                {{ \Carbon\Carbon::parse($event->eventDate)->format('d M, Y') }}
                                            @else
                                                N/A
                                            @endif
                                        @else
                                            Coming Soon
                                        @endif
                                    </span>
                                        </div>
                                        <div class="col-lg-8event__card--icon-area">
                                            <span class="event__card--icon-area-1"><i class="icon" data-feather="clock"></i> {{$event->event_time}}</span>
                                            <span class="event__card--icon-area-2"><i class="icon" data-feather="map-pin"></i> {{$event->place}}</span>
                                            <p class="event__card--icon-area-3">{{$event->event_title}}</p>
                                        </div>
                                        <div class="col-lg-2 event__card--btn">
                                            <a href="contact.html" class="w-btn w-btn-8">Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <p class="event__small-paragraph">Lorem ipsum dolor sit amet, consectetur adall.</p>
                            <a class="event__small-paragraph--link" href="#"> View all Event <i class="arrow_right event__small-paragraph--link-icon"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__video-btn text-end">
                            <img class="m-img image-background" src="fontend/assets/images/event/bannner.jpg" alt="Video Image">
                            <div class="event__video-btn--play">
                                <a href="fontend/assets/video/school.mp4" class="event__video-btn--play-btn popup-videos">
                                    <i class="arrow_triangle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================  Event Section End Here ================= -->

        <!--================= Academic Section Start Here =================-->
        <div class="academic__area p-relative pb-65">
            <div class="container academic__width">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3">
                        <div class="academic__title-wrapper text-center mb-60">
                            <h6 class="academic__pre-subtitle">Academics Programs</h6>
                            <h2 class="academic__title">
                                Our Academics Programs
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Academic Section Start Here =================-->

        <!--================= Call to Action Section Start Here =================-->
        <div class="cta__area p-relative m-img pt-120 pb-155">
            <div class="container cta__width">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__wrapper text-center">
                            <h6 class="cta__pre-subtitle">Featured Courses</h6>
                            <h2 class="cta__title">Campus Information</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Call to Action Section End Here =================-->

        <!--================= Feature Section Start Here =================-->
        <div class="feature__area">
            <div class="container feature__width">
                <div class="row">
                    @foreach($campusInfo as $campusInfos)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="feature__item mb-30 transition-3 white-bg">
                            <div class="feature__icon mb-30">
                                <img style="width: 50px; height: 50px" src="{{$campusInfos->info_icon}}" alt="This is the icon image">
                            </div>
                            <div class="feature__content">
                                <h3 class="feature__title-1"><a href="contact.html">{{$campusInfos->info_title}}</a></h3>
                                <p class="feature__paragraph">{{$campusInfos->info_des}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--================= Feature Section End Here =================-->

        <!--================= Counter Section Start Here =================-->
        <div class="count__area">
            <div class="container count__width">
                <div class="row">
                    <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                        <div class="row">
                            @foreach($summary as $summaryes)
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <h3 class="count__content--title-1 counter">{{$summaryes->count_number}}</h3>
                                    <h3 class="count__content--title-2">K</h3>
                                    <span class="count__content--plus">+</span>
                                    <p class="count__content--paragraph">{{$summaryes->count_title}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Counter Section End Here =================-->

        <!--================= Blog Section Start Here =================-->
        <div class="back-blog__area blog__area pt-90 pb-120">
            <div class="container blog__width">
                <div class="back__title__section text-center">
                    <h6 class="back__subtitle">From our blog</h6>
                    <h2 class="back__tittle"> Latest from our Blogs </h2>
                </div>
                <div class="row">
                    @foreach($blog as $blogs)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="blog__card mb-50">
                            <div class="blog__thumb w-img p-relative">
                                <a class="blog__thumb--image" href="blog-details.html">
                                    <img src="{{$blogs->blog_img}}" alt="This the first card image">
                                </a>
{{--                                <a class="blog__thumb--pre-title" href="blog.html">Podcast</a>--}}
                            </div>
                            <div class="blog__card--content">
                                <div class="blog__card--content-area mb-25">
                                    <span class="blog__card--date">
                                        @if($blogs->created_at ==  NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}
                                        @endif
                                    </span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">{{$blogs->blog_title}}</a></h3>
                                    <p>{{ Str::limit(strip_tags($blogs->blog_des, 20)) }}</p>
                                    <a class="blog__card--link" href="blog-details.html"> Read more <i class="arrow_right blog__card--link-icon"></i></a>
                                </div>
                                <div class="blog__card--icon ">
                                    <div class="blog__card--icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span>{{$blogs->blog_author}}</span>
                                    </div>
                                    <div class="blog__card--icon-2">
                                        <div class="blog__card--icon-2-first">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>{{$blogs->blog_react}}</span>
                                        </div>
                                        <div class="blog__card--icon-2-second">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            <span>{{$blogs->blog_comment}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!--================= Blog Section End Here =================-->
    </div>
@endsection
