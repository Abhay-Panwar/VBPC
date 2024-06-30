  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">

          <nav id="sidebar">

              <div class="navbar-nav theme-brand flex-row  text-center">
                  <div class="nav-logo">
                      <div class="nav-item theme-logo">
                          <a href="{{ route('home') }}">
                              <img src="{{ asset('assets\src\assets\img\vbpc logo.png') }}" class="--navbar-logo"
                                  alt="logo">
                          </a>
                      </div>
                      <div class="nav-item theme-text">
                          <a href="{{ route('home') }}" class="nav-link"> VBPC </a>
                      </div>
                  </div>
                  <div class="nav-item sidebar-toggle">
                      <div class="btn-toggle sidebarCollapse">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-chevrons-left">
                              <polyline points="11 17 6 12 11 7"></polyline>
                              <polyline points="18 17 13 12 18 7"></polyline>
                          </svg>
                      </div>
                  </div>
              </div>

              <div class="profile-info">
                  <div class="user-info">
                      <div class="profile-img">
                          <input type="hidden" value="{{ $empdata = Session::get('emp_data') }}">
                          <a href=""> <img src="{{ asset($empdata->image) }}" alt="avatar"></a>
                      </div>
                      <div class="profile-content">
                          <h6>{{ $empdata->first_name }} {{ $empdata->last_name }}</h6>
                          <p>{{ $empdata->dst_name }}</p>
                      </div>
                  </div>
              </div>

              <div class="shadow-bottom"></div>
              <ul class="list-unstyled menu-categories" id="accordionExample">
                  <li class="menu active">
                      <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-home">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                              <span>Dashboard</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                          <li class="active">
                              <a href="{{ route('home') }}"> Employee Profile </a>
                          </li>
                          {{-- <li>
                              <a href="{{ route('index2') }}"> Sales </a>
                          </li> --}}
                      </ul>
                  </li>



                  <li class="menu menu-heading">
                      <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg><span>FORMS</span></div>
                  </li>


                  <li class="menu">
                      <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                  </path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                                  </rect>
                              </svg>
                              <span>Forms</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"
                                  class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                          <li>
                              <a href="{{ route('Leave_Application_user') }}"> Leave-Application-From </a>
                          </li>
                      </ul>
                  </li>
                  
              </ul>
          </nav>
      </div>
      <!--  END SIDEBAR  -->
