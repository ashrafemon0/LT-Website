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
            <div class="history-container">
                <div class="event">
                    <span class="date">January 1, 1900</span>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="event">
                    <span class="date">July 20, 1969</span>
                    <p class="description">Neil Armstrong and Buzz Aldrin become the first humans to walk on the moon.</p>
                </div>
                <div class="event">
                    <span class="date">April 26, 2003</span>
                    <p class="description">The Human Genome Project is completed, sequencing all 3 billion base pairs of the human genome.</p>
                </div>
                <!-- Add more events as needed -->
            </div>
        </div>
    </div>

@endsection
