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
                                <h1 class="breadcrumbs-title">Notice board</h1>
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
                <div class="container mt-5">
                    <h1 class="mb-4">Notice Board</h1>
                    <div class="row">
                        @foreach($notices as $notice)
                        <div class="col-md-6">
                            <div class="notice-card">
                                <span class="event__card--date-area-2 font-weight-bold">
                                            @if ($notice->created_at)
                                        {{ \Carbon\Carbon::parse($notice->created_at)->format('d M, Y')  }}
                                    @else
                                        N/A
                                    @endif

                                        </span>
                                <h4>{{$notice->title}}</h4>
                                <p>{{$notice->notice_des}}</p>
                            </div>
                        </div>

                        @endforeach
                        <!-- Add more notices here (similar to the above structure) -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
