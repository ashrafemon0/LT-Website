@extends('layouts.master_home')

@section('home_content')
    <style>

        p {
            font-size: 18px;
        }

        .about_container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .about_container img {
            width: 100%;
            height: 800px;
        }
    </style>
    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <!--================= Back Breadcrumbs Section Start Here =================-->
            <div class="back-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="fontend/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">About Us</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Abouts Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <div id="back-contact" class="back-contact-page pt-120 pb-120">
                <div class="container mt-5">
                    <div class="row">
                        <div class="about_container">
                            <h2>About</h2>
                            <p> Learning tree preschool" is a nurturing educational institution designed to provide a comprehensive foundation for young learners. This school is committed to fostering holistic development and follows the Early Years Foundation Stage (EYFS) framework in conjunction with the renowned Cambridge curriculum.</p>

                            <p>Learning Tree Early Years School places a strong emphasis on the development of foundational skills, including literacy, numeracy, and social skills. Through a combination of structured activities and free play, students are encouraged to develop a love for learning and acquire essential skills that will serve them throughout their educational journey.</p>


                            <p>n conclusion, Learning Tree Early Years School is a nurturing and enriching environment that combines the principles of the EYFS framework with the academic excellence of the Cambridge curriculum. By providing a well-balanced and holistic approach to early childhood education, Learning Tree strives to prepare its young learners for a successful and fulfilling educational journey ahead.</p>

                            <img src="fontend/assets/images/about/about.jpg" alt="Our Team">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
