@extends('layouts.master_home')

@section('home_content')
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img class="desktop" src="{{asset('fontend/assets/images/breadcrumbs/1.jpg')}}" alt="Breadcrumbs">
            <img class="mobile" src="{{asset('fontend/assets/images/breadcrumbs/1.jpg')}}" alt="Breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Course Details</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back__course__area back__course__page_grid back-courses__single-page pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="user-section">
                        <li class="user">
                            <span><img style="width: 50px; height: 50px" src="{{asset($result->teacher_photo)}}" alt="user"></span>
                            <span>Teacher<em> {{$result->teachers_name}}</em></span>
                        </li>
                        <li>Last Update: <em>
                                @if ($result->created_at)
                                    {{ \Carbon\Carbon::parse($result->created_at)->format('d M, Y')  }}
                                @else
                                    N/A
                                @endif

                            </em></li>
                        <li>Review:
                            <em class="back-ratings">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i> {{$result->course_review}}
                            </em>
                        </li>
                    </ul>
                    <div class="image-banner"><img style="width: 800px; height: 500px" src="{{asset($result->teacher_img)}}" alt="user"></div>
                    <div class="tab-pane fade show active mt-5">
                        <h3>{{$result->course_des}}</h3>
                        <p>{{(strip_tags($result->coursedetails))}}.</p>
                    </div>
                </div>
                <div class="col-lg-4 md-mt-60">
                    <div class="back-sidebar pl-30 md-pl-0">
                        <div class="widget get-back-course">
                            <h3 class="widget-title">Get the course</h3>
                            <ul class="price">
                                <li>$ 64 USD</li>
                                <li>$ 100 USD</li>
                                <li>68% OFF</li>
                            </ul>
                            <ul class="price__course">
                                <li><i class="icon_house"></i><b>Instructor:</b> {{$result->teachers_name}}</li>
                                <li><i class="icon_book_alt"></i><b>Lectures:</b> 14</li>
                                <li><i class="icon_clock"></i><b>Duration:</b> {{$result->duration}}</li>
                                <li><i class="icon_profile"></i><b>Enrolled:</b> {{$result->course_enroll}}</li>
                                <li><i class="icon_globe-2"></i><b>Language:</b> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
