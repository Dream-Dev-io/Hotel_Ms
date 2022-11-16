<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="palatin-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="palatinNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="{{ route('rooms') }}">Rooms</a></li>
                                <li><a href="{{ route('about-us') }}">Restruant Menu</a></li>
                                <li><a href="#">About Us</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('about-us') }}">Our Profile</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>

                                        <li><a href="{{ route('services') }}">Services & Facilities</a></li>
                                        <li><a href="contact.html">Contact</a></li>

                                    </ul>
                                </li>



`


                            </ul>
                            <div class="menu-btn ">
                                <a href="#" class="btn palatin-btn">Make a Reservation</a>
                            </div>

                            <div class="classynav ">
                                <ul>
                                    @guest
                                    @if (Route::has('login'))
                                        <li>
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif



                                    {{-- @if (Route::has('register'))
                                        <li >
                                            <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif --}}
                                @else
                                <li><a href="#">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown">
                                        <li>@role('Admin')
                                            <a
                                            href="{{route('admin.index')}}">
                                                {{  __('Admin Dashboard') }}
                                            </a>
                                        @endrole</li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                        </li>

                                    </ul>
                                </li>
                                @endguest

                                </ul>
                            </div>
                            <!-- Button -->



                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
