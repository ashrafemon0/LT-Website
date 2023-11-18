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
                            <h1 class="breadcrumbs-title">Career</h1>
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
        <!--================= Back Breadcrumbs Section End Here =================-->
        <div class="container mt-5">
            <h1 class="mb-4">Job Openings</h1>
            <div class="row">
                @foreach($AllJob as $AllJobs)
                <div class="col-md-6">
                    <div class="job-card">
                        <h4>{{$AllJobs->job_title}}</h4>
                        <p>{!! $AllJobs->job_des !!}</p>
                        <div class="about__btn md-mb-60">
                            <a href="about.html" class="back-btn"> Apply Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Add more job cards here (similar to the above structure) -->
            </div>
        </div>

        <div class="container mt-5">
            <h2 class="mb-4">Application Form</h2>
            <form action="{{ route('Apply.post') }}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="name">Job Title</label>
                    <input name="job_title" type="text" class="form-control" id="name" placeholder="Whichever you want to apply">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group mt-1">
                    <label for="resume">Resume</label>
                    <input name="resume" type="file" class="form-control-file" id="resume">
                </div>
                <div class="about__btn md-mb-60">
                    <button type="submit"><a href="about.html" class="back-btn">Submit Application</a></button>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
