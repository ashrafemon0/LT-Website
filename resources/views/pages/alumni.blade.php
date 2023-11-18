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
           <div class="container">
               <div class="row mt-5 mb-5">
                   @foreach($academics as $academic)
                       <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 ">
                           <div class="academic__container mb-50">
                               <div class="academic__wrapper">
                                   <div class="academic__wrapper--image m-img">
                                       <img class="academic__wrapper--image-display" src="{{$academic->aca_img}}" alt="Three people are standing">
                                   </div>
                                   <div class="academic__wrapper--icon-1">
                                       <img class="academic__wrapper--icon-1-middle" src="fontend/assets/images/academic/icon/1.png" alt="icon">
                                   </div>
                               </div>
                               <div class="academic__round-area-title text-center">
                                   <h6 class="academic__round-area-title-1">{{$academic->aca_title}}</h6>
                                   <p class="academic__round-area-title-2">{{$academic->aca_des}}</p>
                                   <a class="academic__round-area-title-3" href="contact.html">Apply Now<i class="arrow_right academic__round-area-title-3--icon"></i></a>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>




        </div>
    </div>

@endsection
