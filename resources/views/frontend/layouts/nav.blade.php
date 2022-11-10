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
                                <li><a href="services.html">Services & Facilities</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <div class="menu-btn">
                                <a href="#" class="btn palatin-btn">Make a Reservation</a>
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