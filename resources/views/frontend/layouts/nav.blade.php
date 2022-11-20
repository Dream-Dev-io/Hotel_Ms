<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="palatin-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="palatinNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand ml-2"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt=""></a>

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
                                <li class="active"><a href="index.html">{{ __('index.Home') }}</a></li>
                                <li><a href="{{ route('rooms') }}">{{ __('index.Rooms') }}</a></li>
                                <li><a href="{{ route('about-us') }}">{{ __('index.Restruant Menu') }}</a></li>
                                <li><a href="#">{{ __('index.About Us') }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('about-us') }}">{{ __('index.Profile') }}</a></li>
                                        <li><a href="{{ route('gallery') }}">{{ __('index.Gallery') }}</a></li>

                                        <li><a href="{{ route('services') }}">{{ __('index.Services & Facilities') }}</a></li>
                                        <li><a href="{{ route('services') }}">{{ __('index.Contact') }}</a></li>

                                    </ul>
                                </li>



`


                            </ul>


                            <div class="menu-btn mr-2 ">
                                <a href="#" class="btn palatin-btn">{{ __('index.Make Reservation') }}</a>
                            </div>




                            <div class="classynav">
                                <ul>
                                    <li><a href="#">
                                        @if ( session()->get('locale') == 'en')
                                            English
                                        @elseif( session()->get('locale') == 'mm')
                                            မြန်မာ
                                        @elseif( session()->get('locale') == 'jp')
                                            日本
                                        @else
                                            English
                                        @endif
                                </a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('changeLang',['lang' => 'en']) }}">English</a></li>
                                        <li><a href="{{ route('changeLang',['lang' => 'mm']) }}">Myanmar</a></li>
                                        <li><a href="{{ route('changeLang',['lang' => 'jp']) }}">Japan</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="classynav mr-3 ">
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
                                            href="{{route('security.admin.loginui')}}">
                                                {{  __('Dashboard') }}
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
