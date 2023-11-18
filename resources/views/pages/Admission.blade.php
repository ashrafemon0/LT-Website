@extends('layouts.master_home')

@section('home_content')
    <style>
        .admission_des {
            box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
            padding: 50px;
        }
    </style>
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
                                <h1 class="breadcrumbs-title">Alumni</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li>Alumni</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-lg-8 admission_des">
                        <h2>Admission Requirements</h2>
                        <p>Thank you for considering our institution for your education. Here are the admission requirements:</p>
                        <ul>
                            <li>Completed application form</li>
                            <li>High school diploma or equivalent</li>
                            <li>Transcripts of previous academic records</li>
                            <li>Letter of recommendation</li>
                            <li>Personal statement or essay</li>
                        </ul>

                        <h2>Admission Process</h2>
                        <p>The admission process involves the following steps:</p>
                        <ol>
                            <li>Submit your application online or by mail.</li>
                            <li>Pay the application fee.</li>
                            <li>Provide all required documents.</li>
                            <li>Participate in an interview if required.</li>
                            <li>Receive an admission decision.</li>
                        </ol>

                        <h2>Important Dates</h2>
                        <p>Make sure to keep track of these important admission dates:</p>
                        <ul>
                            <li>Application deadline: January 15</li>
                            <li>Admission decision notification: March 1</li>
                            <li>Enrollment deadline: April 15</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="admission-image">
                            <img src="fontend/assets/images/facility/admission.jpg" alt="">
                        </div>
                    </div>
                </div>



            </div>


        </div>
    </div>

@endsection
