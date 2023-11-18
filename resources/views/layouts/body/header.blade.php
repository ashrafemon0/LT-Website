<header id="back-header" class="back-header">
    <div class="under-construct">
        <h2>This site is under construction</h2>
    </div>
    <div class="menu-part">
        <div class="container">
            <!--================= Back Menu Start Here =================-->
            <div class="back-main-menu">
                <nav>
                    <!--================= Menu Toggle btn =================-->
                    <div class="menu-toggle">
                        <div class="logo"><a href="{{url('/')}}" class="logo-text"> <img src="{{asset('fontend/assets/images/logo-log.png')}}" alt="logo"> </a></div>
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--================= Menu Structure =================-->
                    <div class="back-inner-menus">
                        <ul id="backmenu" class="back-menus back-sub-shadow">
                            <li> <a href="{{url('/')}}">Home</a>
                            </li>
                            <li> <a href="{{route('about')}}">About</a>
                                <ul>
                                    <li> <a href="{{ route('history') }}">History</a></li>
                                    <li> <a href="{{route('facility')}}">Facility</a></li>
                                    <li> <a href="{{route('message')}}">Message From Founder</a></li>
                                    <li> <a href="{{ route('instructor') }}">Instructor</a></li>
                                    <li> <a href="{{ route('childSafety') }}">Child safety</a></li>
                                    <li> <a href="blog.html">Blog</a></li>
                                </ul>
                            </li>
                            <li> <a href="#">Life At LT</a>
                                <ul>
                                    <li> <a href="{{route('alumni')}}">Alumni</a></li>
                                    <li> <a href="{{ route('career') }}">Career</a></li>
                                    <li> <a href="{{ route('holiday') }}">Calender</a></li>
                                    <li> <a href="{{ route('mission') }}">Mission & Vision</a></li>
                                </ul>
                            </li>
                            <li> <a href="coureses-grid.html">Courses</a>
                                <ul>
                                    <li><a href="{{ route('courseList') }}">Courses List</a></li>
                                </ul>
                            </li>
                            <li> <a href="admission.html">Team</a>
                                <ul>
                                    <li><a href="early.html">Early</a></li>
                                    <li><a href="primary.html">Primary</a></li>
                                    <li><a href="{{route('sen')}}">SED</a></li>
                                </ul>
                            </li>
                            <li> <a href="{{route('admission')}}">Admission</a>
                            </li>
                            <li> <a href="{{ route('contact') }}">Contact</a></li>
                            <li> <a href="{{ route('notice-board') }}">Notice Board</a></li>
                            <li> <a href="{{ route('gallery') }}">Our Gallery</a></li>

                        </ul>

                        <div class="searchbar-part">
                            <form class="search-form">
                                <input type="text" class="form-input" placeholder="Search Course">
                                <button type="submit" class="form-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <!--=================  Back Menu End Here  =================-->
        </div>
    </div>
</header>
