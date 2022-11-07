@extends('frontend.layouts.app')
@section('title','Hotel & Resort')
@section('content')

 <!-- Preloader -->
 @include('frontend.layouts.preloader')


@include('frontend.layouts.nav')




    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(frontend/img/bg-img/bg-2.jpg);">
        <div class="bradcumbContent">
            <h2>About us</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

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

    <!-- ##### Welcome Area Start ##### -->
    <section class="pt-3" id="next" style="padding-bottom: 90px;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5 aos-init aos-animate" data-aos="fade-up">
              <figure class="img-absolute">
                <img src="frontend/img/blog-img/aboutus2.jpg" alt="Free Website Template by Templateux" class="img-fluid">
              </figure>
              <img src="frontend/img/blog-img/aboutus1.jpg" alt="Image" class="img-fluid rounded ">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1 aos-init aos-animate" data-aos="fade-up">
                <div class="section-heading">
                    <div class="line-"></div>
                    <h2>A place to remember</h2>
                </div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="#" class="btn learn-more text-white py-2 mr-3">See Video</a> </p>
            </div>

          </div>
        </div>
      </section>
    <!-- ##### Welcome Area End ##### -->


    <!-- ##### Milestones Area Start ##### -->
    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(frontend/img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2>Our Milestones</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="scf-text">
                            <i class="icon-cocktail-1"></i>
                            <h2><span class="counter">231</span></h2>
                            <p>Cocktails/day</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="scf-text">
                            <i class="icon-swimming-pool"></i>
                            <h2><span class="counter">6</span></h2>
                            <p>Pools</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="scf-text">
                            <i class="icon-resort"></i>
                            <h2><span class="counter">179</span></h2>
                            <p>Rooms</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="scf-text">
                            <i class="icon-restaurant"></i>
                            <h2><span class="counter">35</span></h2>
                            <p>Apartments</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Milestones Area End ##### -->

    <!-- ##### History Area Start ##### -->
    <div class="section pb-3" style="padding-top: 85px;">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 mb-3">
              <h2 class="heading aos-init aos-animate" style="font-weight:700; font-size:3em;" data-aos-duration="1100" data-aos="zoom-in-left">History</h2>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="timeline-item aos-init" date-is="2019" data-aos-duration="1100" data-aos="fade-down-right">
                <h3>More Branches Worldwide</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>

              <div class="timeline-item aos-init" date-is="2011" data-aos-duration="1200" data-aos="fade-up-left">
                <h3>Company Full Blast</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                </p>
              </div>

              <div class="timeline-item aos-init" date-is="2008" data-aos-duration="1300" data-aos="zoom-in">
                <h3>The Birth of the Company</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                </p>
              </div>
            </div>
          </div>


        </div>
      </div>
    <!-- ##### History Area Start ##### -->

    <!-- ##### Hotels Area Start ##### -->
    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Hotel</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Donec malesuada lorem maximus mauris</h6>
                            <h6><span class="fa fa-check"></span> Integer tempus ligula sem, id feugiat</h6>
                            <h6><span class="fa fa-check"></span> Malesuada lorem maximus mauris sceleri </h6>
                        </div>
                        <div class="hotel-img">
                            <img src="frontend/img/bg-img/3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Tempus ligula sem, id feugiat quam</h6>
                            <h6><span class="fa fa-check"></span> Integer tempus ligula sem, id feugiat</h6>
                            <h6><span class="fa fa-check"></span> Esuada lorem maximus mauris sceleri</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="frontend/img/bg-img/10.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Tempus ligula sem, id feugiat quam</h6>
                            <h6><span class="fa fa-check"></span> Integer tempus ligula sem, id feugiat</h6>
                            <h6><span class="fa fa-check"></span> Esuada lorem maximus mauris sceleri</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="frontend/img/bg-img/11.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hotels Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <section class="testimonial-area section-padding-100 bg-img" style="background-image: url(img/core-img/pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-content">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>What Clients Say</h2>
                        </div>

                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Michael Smith, <span>Client</span></h6>
                                <img src="frontend/img/core-img/trip.png" alt="">
                            </div>

                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Nazrul Islam, <span>Developer</span></h6>
                                <img src="frontend/img/core-img/trip.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="frontend/img/core-img/logo.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="frontend/img/bg-img/footer-map.png" alt="">
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
