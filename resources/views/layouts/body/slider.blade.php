{{--<div class="home-banner-part">--}}
{{--    <div class="banner-img">--}}
{{--        <div class="overlay"></div>--}}
{{--        <div class="content">--}}
{{--            <img class="desktop" src="{{asset('fontend/assets/images/banner/slide2.jpg')}}" alt="Banner Image">--}}
{{--            <img class="back__shape__1" src="{{asset('fontend/assets/images/banner/01.png')}}" alt="Shape Image">--}}
{{--            <img class="back__shape__2" src="{{asset('fontend/assets/images/banner/02.png')}}" alt="Shape Image">--}}
{{--            <img class="back__shape__3" src="{{asset('fontend/assets/images/banner/03.png')}}" alt="Shape Image">--}}
{{--            <img class="back__shape__4" src="{{asset('fontend/assets/images/banner/04.png')}}" alt="Shape Image">--}}
{{--            <img class="back__shape__5" src="{{asset('fontend/assets/images/banner/05.png')}}" alt="Shape Image">--}}
{{--        </div>--}}

{{--        <div class="back__hero__card">--}}
{{--            <div class="back__thumb">--}}
{{--                <a href="#"><img src="assets/images/banner/1.jpg" alt="image"></a>--}}
{{--                <span class="back__price">$26</span>--}}
{{--            </div>--}}
{{--            <div class="hero__card-content">--}}
{{--                <a class="back-category">Audio & Music</a>--}}
{{--                <h3 class="back-course-title"><a href="coureses-single.html">Learning to write as a Professional.</a></h3>--}}
{{--                <div class="hero__card-icon d-flex align-items-center">--}}
{{--                    <div class="hero__card-icon--1">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
{{--                        <span>500k+</span>--}}
{{--                    </div>--}}
{{--                    <div class="hero__card-icon--2">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>--}}
{{--                        <span>4.9</span>--}}
{{--                    </div>--}}
{{--                    <div class="back__user">--}}
{{--                        <img src="assets/images/banner/thumb.jpg" alt="user">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="overlay"></div>--}}
{{--    <div class="video-banner">--}}
{{--        <video autoplay loop muted>--}}
{{--            <source src="{{ asset($slider->image) }}" type="video/mp4">--}}
{{--            Your browser does not support the video tag.--}}
{{--        </video>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="banner-content">--}}
{{--            <div class="back-sec-title">--}}
{{--                <h1 style="width: 800px" class="banner-title">{{Str::limit(strip_tags($slider->title, 20))}}</h1>--}}
{{--                <p class="banner-desc">{{Str::limit(strip_tags($slider->description, 20))}}</p>--}}
{{--            </div>--}}
{{--            <div class="banner-btn pt-15">--}}
{{--                <a href="coureses-grid.html" class="back-btn">Discover More Course</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@php
    $sliders = DB::table('sliders')->get();

@endphp



    <!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

            @foreach($sliders as $key => $slider)
                <!-- Slide 1 -->
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} " style="background-image: url({{asset($slider->image)}});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="text-left">{{ $slider->title }}</h2>
                            <p>{{ $slider->description }}</p>
                            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                        </div>
                    </div>
                </div>
            @endforeach





        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section><!-- End Hero -->
