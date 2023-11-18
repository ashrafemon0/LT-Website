@extends('layouts.master_home')

@section('home_content')

    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <!--================= Back Breadcrumbs Section Start Here =================-->
            <div class="back-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="fontend/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">Our Gallery</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Our Gallery</a></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->
            <div class="container mt-5">
                <h1 class="mb-4">Our Video</h1>
                <video class="text-center" width="800" height="400" controls autoplay>
                    <!-- Replace 'video-demo.mp4' with the path to your video file -->
                    <source src="fontend/assets/video/school.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h1 class="mb-4">Our Photo</h1>
                <div class="row">
                    @foreach($AllPhoto as $AllPhotos)
                    <div class="col-md-4 gallery-item">
                        <img src="{{$AllPhotos->image}}" alt="Image 1" onclick="openLightbox('./assets/images/gallery/01.jpg')">
                    </div>
                    @endforeach
                    <!-- Add more gallery items here (similar to the above structure) -->
                </div>
            </div>
        </div>
    </div>

@endsection
