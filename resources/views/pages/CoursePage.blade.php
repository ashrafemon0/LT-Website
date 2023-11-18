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
                                <h1 class="breadcrumbs-title">Coureses List</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Coureses List</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <div class="back-course-filter back__course__page_list pt-120 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row align-items-center back-vertical-middle shorting__course mb-50">
                                <div class="col-md-6">
                                    <div class="all__icons">
                                        <div class="grid__icons">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                        </div>
                                        <div class="list__icons">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                        </div>
                                        <div class="result-count">Showing 1 - 3 of 74</div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <select class="from-control">
                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by lates</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>

                            <!--================= Course Section Start Here =================-->
                            <div class="row">
                                @foreach($coursesPage as $coursesPages)
                                <div class="single-studies col-lg-12 grid-item filter2 filter1">
                                    <div class="inner-course">
                                        <div class="case-img">
                                            <img href="{{ route('SpecificCourseDetails',['id' => $coursesPages->id]) }}" src="{{$coursesPages->teacher_img}}" alt="Course Image">
                                        </div>
                                        <div class="case-content">
                                            <ul class="meta-course">
                                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                    {{$coursesPages->course_enroll}} +</li>
                                                <li class="back-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Lessones</li>
                                            </ul>
                                            <h4 class="case-title"> <a href="{{ route('SpecificCourseDetails',['id' => $coursesPages->id]) }}">{{$coursesPages->course_name}}.</a></h4>
                                            <div class="back__user">
                                                <img style="border-radius: 50%" src="{{$coursesPages->teacher_photo}}" alt="user">
                                            </div>
                                            <ul class="back-ratings">
                                                <li>{{$coursesPages->course_price}}</li>
                                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    {{$coursesPages->course_review}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!--================= Course Section End Here =================-->

                            <!--================= Pagination Section Start Here =================-->
                            <ul class="back-pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="back-next"><a href="#">Next<i class="arrow_carrot-right"></i></a></li>
                            </ul>
                            <!--================= Pagination Section End Here =================-->

                        </div>
                        <div class="col-lg-4">
                            <div class="back-sidebar pl-30 md-pl-0 md-mt-60">
                                <div class="widget back-search">
                                    <form>
                                        <input type="text" name="input" placeholder="Search...">
                                        <button> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> </button>
                                    </form>
                                </div>
                                <div class="widget back-category">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="recent-category">
                                        <li>
                                            <input type="checkbox" id="fruit1" name="fruit-1" value="Featured">
                                            <label for="fruit1">Featured courses <span class="category-count">(8)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit2" name="fruit-2" value="Education">
                                            <label for="fruit2">Education <span class="category-count">(5)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit3" name="fruit-3" value="Business">
                                            <label for="fruit3">Business <span class="category-count">(3)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit4" name="fruit-4" value="Management">
                                            <label for="fruit4">IT Management <span class="category-count">(7)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit5" name="fruit-5" value="Development">
                                            <label for="fruit5">Development <span class="category-count">(6)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit6" name="fruit-6" value="Creative">
                                            <label for="fruit6">Creative <span class="category-count">(2)</span></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget back-category">
                                    <h3 class="widget-title">Price Filter</h3>
                                    <ul class="recent-category">
                                        <li>
                                            <input type="checkbox" id="fruit7" name="fruit-7" value="all">
                                            <label for="fruit7">All <span class="category-count">(209)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit8" name="fruit-8" value="Free Courses">
                                            <label for="fruit8">Free Courses <span class="category-count">(36)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit9" name="fruit-9" value="Premium Courses">
                                            <label for="fruit9">Premium Courses <span class="category-count">(185)</span></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget back-category">
                                    <h3 class="widget-title">Skill level</h3>
                                    <ul class="recent-category">
                                        <li>
                                            <input type="checkbox" id="fruit10" name="fruit-10" value="All Levels">
                                            <label for="fruit10">All Levels <span class="category-count">(50)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit11" name="fruit-11" value="Beginner">
                                            <label for="fruit11">Beginner <span class="category-count">32)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit12" name="fruit-12" value="Intermediate">
                                            <label for="fruit12">Intermediate<span class="category-count">(17)</span></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="fruit13" name="fruit-13" value="Expert">
                                            <label for="fruit13">Expert<span class="category-count">(2)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
