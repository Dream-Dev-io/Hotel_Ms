@extends('frontend.layouts.app')
@section('title','Hotel & Resort')
@section('content')


 <!-- Preloader -->
 <div class="preloader d-flex align-items-center justify-content-center">
    <div class="cssload-container">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
</div>

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
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="rooms.html">Rooms</a></li>
                                        <li><a href="blog.html">News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="rooms.html">Rooms</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="rooms.html">Rooms</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="rooms.html">Rooms</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="rooms.html">Rooms</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="services.html">Services</a></li>
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

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('frontend/img/bg-img/bg-1.jpg') }});"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <!-- Slide Content -->
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                            <h2 data-animation="fadeInUp" data-delay="500ms">The Vacation Heaven</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                            <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('frontend/img/bg-img/bg-2.jpg') }});"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <!-- Slide Content -->
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                            <h2 data-animation="fadeInUp" data-delay="500ms">A place to remember</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                            <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('frontend/img/bg-img/bg-3.jpg') }});"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <!-- Slide Content -->
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                            <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                            <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Book Now Area Start ##### -->
<div class="book-now-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="book-now-form">
                    <form action="#">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="select1">Check In</label>
                            <select class="form-control" id="select1">
                              <option>19 June</option>
                              <option>20 June</option>
                              <option>21 June</option>
                              <option>22 June</option>
                              <option>23 June</option>
                              <option>24 June</option>
                              <option>25 June</option>
                            </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="select2">Check Out</label>
                            <select class="form-control" id="select2">
                              <option>20 June</option>
                              <option>21 June</option>
                              <option>22 June</option>
                              <option>23 June</option>
                              <option>24 June</option>
                              <option>25 June</option>
                              <option>26 June</option>
                              <option>27 June</option>
                            </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="select3">Adults</label>
                            <select class="form-control" id="select3">
                              <option>02</option>
                              <option>03</option>
                              <option>04</option>
                              <option>05</option>
                              <option>06</option>
                            </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="select4">Childrens</label>
                            <select class="form-control" id="select4">
                              <option>01</option>
                              <option>02</option>
                              <option>03</option>
                              <option>04</option>
                              <option>05</option>
                            </select>
                        </div>

                        <!-- Button -->
                        <button type="submit">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Book Now Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-6">
                <div class="about-text text-center mb-100">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>A place to remember</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                    <div class="about-key-text">
                        <h6><span class="fa fa-check"></span> Donec malesuada lorem maximus mauris sceleri</h6>
                        <h6><span class="fa fa-check"></span> Malesuada lorem maximus mauris sceleri</h6>
                    </div>
                    <a href="#" class="btn palatin-btn mt-50">Read More</a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-thumbnail homepage mb-100">
                    <!-- First Img -->
                    <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{ asset('frontend/img/bg-img/5.jpg') }}" alt="">
                    </div>
                    <!-- Second Img -->
                    <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('frontend/img/bg-img/6.jpg') }}" alt="">
                    </div>
                    <!-- Third Img-->
                    <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                        <img src="{{ asset('frontend/img/bg-img/7.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Pool Area Start ##### -->
<section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url({{ asset('frontend/img/bg-img/4.png') }});">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-7">
                <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2>Infinity Pool</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="pool-feature">
                                <i class="icon-cocktail-1"></i>
                                <p>Pool Beachbar</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="pool-feature">
                                <i class="icon-swimming-pool"></i>
                                <p>Infinity Pool</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="pool-feature">
                                <i class="icon-beach"></i>
                                <p>Sunbeds</p>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <a href="#" class="btn palatin-btn mt-50">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Pool Area End ##### -->

<!-- ##### Delicious Food Area Start ##### -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="about_thumb2 d-flex">
                    <div class="img_1">
                        <img src="{{ asset('frontend/img/blog-img/f2.png') }}" alt="">
                    </div>
                    <div class="img_2">
                        <img src="{{ asset('frontend/img/blog-img/f1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span class="text-primary">Delicious Food</span>
                        <h2>We Serve Fresh and <br>
                            Delicious Food</h2>
                    </div>
                    <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                        dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                        sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                    <a href="#" class="line-button">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Delicious Food Area Start ##### -->

<!-- ##### Gallery Area Start ##### -->
<div class="gallery">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>gallery</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery1.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery2.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery3.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery4.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery5.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery6.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery7.jpg') }}" alt="#"></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset('frontend/img/blog-img/gallery8.jpg') }}" alt="#"></figure>
             </div>
          </div>
       </div>
    </div>
 </div>
<!-- ##### Gallery Area Start ##### -->



<!-- ##### Rooms Area Start ##### -->
<section class="rooms-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="section-heading text-center">
                    <div class="line-"></div>
                    <h2>Choose a room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Single Rooms Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                    <!-- Thumbnail -->
                    <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('frontend/img/bg-img/1.jpg') }});"></div>
                    <!-- Price -->
                    <p class="price-from">From $150/night</p>
                    <!-- Rooms Text -->
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4>Deluxe Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                    </div>
                    <!-- Book Room -->
                    <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                </div>
            </div>

            <!-- Single Rooms Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumbnail -->
                    <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('frontend/img/bg-img/8.jpg') }});"></div>
                    <!-- Price -->
                    <p class="price-from">From $150/night</p>
                    <!-- Rooms Text -->
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4>Double Suite</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                    </div>
                    <!-- Book Room -->
                    <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                </div>
            </div>

            <!-- Single Rooms Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                    <!-- Thumbnail -->
                    <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('frontend/img/bg-img/9.jpg') }});"></div>
                    <!-- Price -->
                    <p class="price-from">From $100/night</p>
                    <!-- Rooms Text -->
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4>Single Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                    </div>
                    <!-- Book Room -->
                    <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Rooms Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area d-flex flex-wrap align-items-center">
    <div class="home-map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
    </div>
    <!-- Contact Info -->
    <div class="contact-info">
        <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
            <div class="line-"></div>
            <h2>Contact Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
        <h4 class="wow fadeInUp" data-wow-delay="300ms">Los Angeles 1481 Creekside Lane Avila Beach, CA 931</h4>
        <h5 class="wow fadeInUp" data-wow-delay="400ms">+53 345 7953 32453</h5>
        <h5 class="wow fadeInUp" data-wow-delay="500ms">yourmail@gmail.com</h5>
        <!-- Social Info -->
        <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">

            <!-- Footer Widget Area -->
            <div class="col-12 col-lg-5">
                <div class="footer-widget-area mt-50">
                    <a href="#" class="d-block mb-5"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="footer-widget-area mt-50">
                    <h6 class="widget-title mb-5">Find us on the map</h6>
                    <img src="{{ asset('frontend/img/bg-img/footer-map.png') }}" alt="">
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-widget-area mt-50">
                    <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                    <form action="#" method="post" class="subscribe-form">
                        <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Your E-mail">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Copywrite Text -->
            <div class="col-12">
                <div class="copywrite-text mt-30">
                    <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

@endsection
