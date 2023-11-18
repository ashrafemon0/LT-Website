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
            <!--================= Back Breadcrumbs Section End Here =================-->

            <div id="back-contact" class="back-contact-page pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--================= Form Section Start Here =================-->
                            <div class="back-blog-form">
                                <div class="back-title-sec">
                                    <h2>{{$contacts->title}}</h2>
                                </div>
                                <div class="row pt-50">
                                    <div class="col-lg-3 back-address">
                                        <strong>Call Us</strong><br>
                                        <a href="tel:(404)888123456"> {{$contacts->phone}} </a><br>


                                        <strong class="pt-30">Email Address</strong><br>
                                        <a href="mailto:info@gmail.com">{{$contacts->email}}</a>
                                    </div>
                                    <div class="col-lg-9">
                                        <div id="blog-form" class="blog-form">
                                            <div id="form-messages"></div>
                                            <form action="{{ route('contact.form') }}" method="post" >
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="back-input">
                                                            <input id="name" type="text" name="name" placeholder="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 pdl-5">
                                                        <div class="back-input">
                                                            <input id="email" type="email" name="email" placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="back-input">
                                                            <input id="subject" type="text" name="subject" placeholder="Subject">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 pdl-5">
                                                        <div class="back-input">
                                                            <input id="phone" type="text" name="phone" placeholder="Phone">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="back-textarea">
                                                            <textarea id="message" name="message" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <button type="submit" class="back-btn">Send your Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--================= Form Section End Here =================-->

                            <!--=================  Map Section Start Here =================-->
                           <div class="map mt-3">
                               <iframe style="width: 100%; height: 400px" src="{{$contacts->map}}"></iframe>
                           </div>
                            <!--================= Map Section End Here =================-->

                            <!--================= Address Section Start Here =================-->
{{--                            <div class="back-address-area pt-120">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="back__title__section text-center">--}}
{{--                                        <h6 class="back__subtitle">Our offices</h6>--}}
{{--                                        <h2 class="back__tittle"> We’re Global and Growing </h2>--}}
{{--                                    </div>--}}
{{--                                    <img class="back___shape" src="assets/images/contact/5.png" alt="shape">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-4">--}}
{{--                                            <div class="inner-locate">--}}
{{--                                                <img src="assets/images/contact/2.png" alt="icon">--}}
{{--                                                <h4>United States</h4>--}}
{{--                                                <p>Bastionstraße 46, 404 Düsseldorf, Germany</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-4">--}}
{{--                                            <div class="inner-locate">--}}
{{--                                                <em>Main Office</em>--}}
{{--                                                <img class="pt-18" src="assets/images/contact/3.png" alt="icon">--}}
{{--                                                <h4>Australia</h4>--}}
{{--                                                <p>Bastionstraße 46, 404 Düsseldorf, Germany</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-4">--}}
{{--                                            <div class="inner-locate">--}}
{{--                                                <img src="assets/images/contact/4.png" alt="icon">--}}
{{--                                                <h4>United Kingdom</h4>--}}
{{--                                                <p>55/123 Norman Street, Sydney NSW 2000</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!--================= Address Section End Here =================-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
