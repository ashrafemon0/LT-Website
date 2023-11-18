<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
{{--                <svg--}}
{{--                  class="brand-icon"--}}
{{--                  xmlns="http://www.w3.org/2000/svg"--}}
{{--                  preserveAspectRatio="xMidYMid"--}}
{{--                  width="30"--}}
{{--                  height="33"--}}
{{--                  viewBox="0 0 30 33"--}}
{{--                >--}}
{{--                  <g fill="none" fill-rule="evenodd">--}}
{{--                    <path--}}
{{--                      class="logo-fill-blue"--}}
{{--                      fill="#7DBCFF"--}}
{{--                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"--}}
{{--                    />--}}
{{--                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />--}}
{{--                  </g>--}}
{{--                </svg>--}}
                  <img src="fontend/assets/images/logo-log.png" style="width: 50px; height: 50px" alt="">
                <span class="brand-name">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">



                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



  <li  class="active" >
    <a class="sidenav-item-link" href="{{ route('home.slider') }}">
      <span class="nav-text">Slider</span>

    </a>
  </li>
  <li  class="active" >
    <a class="sidenav-item-link" href="{{ route('home.about') }}">
      <span class="nav-text">Home About</span>

    </a>
  </li>
                          <li  class="active" >
    <a class="sidenav-item-link" href="{{ route('multi.image') }}">
      <span class="nav-text">Home Portfolio</span>

    </a>
  </li>

  <li  class="active" >
    <a class="sidenav-item-link" href="{{ route('all.brand') }}">
      <span class="nav-text">Home Brand</span>

    </a>
  </li>
  <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('all.course') }}">
          <span class="nav-text">Home Course</span>

      </a>
  </li>
  <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('all.academic') }}">
          <span class="nav-text">Home Academic</span>

      </a>
  </li>
  <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('all.campusInfo') }}">
          <span class="nav-text">Home CampusInfo</span>

      </a>
  </li>
  <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('all.summary') }}">
          <span class="nav-text">Home Summary</span>

      </a>
  </li>
  <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('all.blog') }}">
          <span class="nav-text">Home Blog</span>

      </a>
  </li>
  <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('all.event') }}">
          <span class="nav-text">Home Event</span>

      </a>
  </li>

                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Contact Page</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                      <li  class="active" >
    <a class="sidenav-item-link" href="{{ route('admin.contact') }}">
      <span class="nav-text">Contact Profile</span>

    </a>
  </li>
  <li  class="active" >
    <a class="sidenav-item-link" href="{{ route('admin.message') }}">
      <span class="nav-text">Contact Message</span>

    </a>
  </li>





                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Notice Board</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="{{ route('admin.notice') }}">
                                <span class="nav-text">Notice</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#calender"
                         aria-expanded="false" aria-controls="charts">
                          <i class="mdi mdi-chart-pie"></i>
                          <span class="nav-text">Calender</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="calender"
                           data-parent="#sidebar-menu">
                          <div class="sub-menu">



                              <li >
                                  <a class="sidenav-item-link" href="{{ route('admin.calender') }}">
                                      <span class="nav-text">Holiday Calender</span>

                                  </a>
                              </li>




                          </div>
                      </ul>
                  </li>

                  <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#footer"
                         aria-expanded="false" aria-controls="charts">
                          <i class="mdi mdi-chart-pie"></i>
                          <span class="nav-text">Footer</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="footer"
                           data-parent="#sidebar-menu">
                          <div class="sub-menu">



                              <li >
                                  <a class="sidenav-item-link" href="{{ route('admin.footer') }}">
                                      <span class="nav-text">Footer Address</span>

                                  </a>
                              </li>




                          </div>
                      </ul>
                  </li>

                  <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#instructor"
                         aria-expanded="false" aria-controls="charts">
                          <i class="mdi mdi-chart-pie"></i>
                          <span class="nav-text">Instructor</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="instructor"
                           data-parent="#sidebar-menu">
                          <div class="sub-menu">



                              <li >
                                  <a class="sidenav-item-link" href="{{ route('admin.instructor') }}">
                                      <span class="nav-text">Instructor</span>

                                  </a>
                              </li>




                          </div>
                      </ul>
                  </li>
                  <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#career"
                         aria-expanded="false" aria-controls="charts">
                          <i class="mdi mdi-chart-pie"></i>
                          <span class="nav-text">Career</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="career"
                           data-parent="#sidebar-menu">
                          <div class="sub-menu">



                              <li >
                                  <a class="sidenav-item-link" href="{{ route('admin.career') }}">
                                      <span class="nav-text">Job Post</span>

                                  </a>
                              </li>
                              <li >
                                  <a class="sidenav-item-link" href="{{ route('admin.Apply') }}">
                                      <span class="nav-text">Apply Post</span>

                                  </a>
                              </li>




                          </div>
                      </ul>
                  </li>



                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>

                              </a>
                            </li>





                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">

                              <li >
                                <a href="sign-in.html">Sign In</a>
                              </li>

                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Others</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">

                              <li >
                                <a href="invoice.html">invoice</a>
                              </li>

                              <li >
                                <a href="error.html">Error</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Documentation</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="documentation"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li class="section-title">
                              Getting Started
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="introduction.html">
                                <span class="nav-text">Introduction</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="setup.html">
                                <span class="nav-text">Setup</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="customization.html">
                                <span class="nav-text">Customization</span>

                              </a>
                            </li>






                            <li class="section-title">
                              Layouts
                            </li>





                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                            aria-expanded="false" aria-controls="headers">
                            <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="headers">
                            <div class="sub-menu">

                              <li >
                                <a href="header-fixed.html">Header Fixed</a>
                              </li>

                              <li >
                                <a href="header-static.html">Header Static</a>
                              </li>

                              <li >
                                <a href="header-light.html">Header Light</a>
                              </li>

                              <li >
                                <a href="header-dark.html">Header Dark</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                            aria-expanded="false" aria-controls="sidebar-navs">
                            <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="sidebar-navs">
                            <div class="sub-menu">

                              <li >
                                <a href="sidebar-open.html">Sidebar Open</a>
                              </li>

                              <li >
                                <a href="sidebar-minimized.html">Sidebar Minimized</a>
                              </li>

                              <li >
                                <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                              </li>

                              <li >
                                <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                              </li>

                              <li >
                                <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                              </li>

                              <li >
                                <a href="right-sidebar.html">Right Sidebar</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class="sidenav-item-link" href="rtl.html">
                                <span class="nav-text">RTL Direction</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>



              </ul>

            </div>

            <hr class="separator" />


          </div>
        </aside>
