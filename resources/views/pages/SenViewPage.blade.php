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
                                <h1 class="breadcrumbs-title">SEN</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li>SEN</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="facility-item">
                            <img src="fontend/assets/images/facility/facility1.jpeg" alt="Facility 3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="history-container">
                            <div class="event">
                                <h3>SEN</h3>
                                <p>The Mission of the SEN is to Provide Support and Guidance to parents, Teachers, and the Campus that directly improves student outcomes while removing barriers and raising expectations for students with disabilities. The vision of SEN is for students with disabilities to receive an exceptional education that will allow them to achieve their highest educational level and reach their greatest potential as caring responsible and independent citizens.</p>
                            </div>
                            <div class="event">
                                <h3>CO, Learning Tree Preschool</h3>
                                <span class="date">Sharmina </span>
                                <p class="description">Neil Armstrong and Buzz Aldrin become the first humans to walk on the moon.</p>
                            </div>
                            <!-- Add more events as needed -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="facility-item">
                            <img src="fontend/assets/images/facility/facility1.jpeg" alt="Facility 3">
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>


@endsection
