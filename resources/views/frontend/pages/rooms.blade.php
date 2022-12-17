@extends('frontend.layouts.app')
@section('title','Hotel & Resort')
@section('content')

 <!-- Preloader -->
 @include('frontend.layouts.preloader')


@include('frontend.layouts.nav')

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(frontend/img/bg-img/bg-6.jpg);">
    <div class="bradcumbContent">
        <h2>Rooms</h2>
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
<section class="pb-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-center">
                    <div class="line-"></div>
                    <h2 data-aos="fade-up">Special Offers For This Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                </div>
            </div>
        </div>
        <div >
            {{-- <div class="container"> --}}
           <div class="container text-center">
            <div class="row justify-content-center">
                <div class="card-d" data-aos="fade-right" data-aos-duration="1100">
                    <div class="additional">
                      <div class="user-card-d">
                        <div class="level center">
                          15% Discount
                        </div>
                        <div class="points center">
                          Available
                        </div>
                        <h5 class="center">Single Room</h5>
                      </div>
                      <div class="more-info">

                        <div class="py-4">
                          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor excepturi architecto iste maxime velit saepe! Incidunt nisi, dignissimos neque id iusto culpa, saepe!</span>
                        </div>

                        <div class="pl-3 pt-1 row mx-auto px-auto">
                            <div class="py-1 px-2">
                                <i class="icon fa fa-bath" aria-hidden="true"></i>
                                <div class="value">bath</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-cutlery" aria-hidden="true"></i>
                                <div class="value">Breakfast</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-television" aria-hidden="true"></i>
                                <div class="value">TV</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-wifi" aria-hidden="true"></i>
                                <div class="value">Wifi</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                <div class="value">Aircon</div>
                              </div>

                        </div>

                        <div class="btn booking-btn">Book Now</div>
                      </div>
                    </div>
                    <div class="general">
                     <div class="img-wrap">
                      <img src="frontend/img/blog-img/rooms-4.jpg" class="img-fluid">
                     </div>
                    </div>
                </div>
                <div class="card-d" data-aos="fade-left" data-aos-duration="1100">
                    <div class="additional">
                      <div class="user-card-d">
                        <div class="level center">
                          10% Discount
                        </div>
                        <div class="points center">
                          Available
                        </div>
                        <h5 class="center">Deluxe Room</h5>
                      </div>
                      <div class="more-info">

                        <div class="py-4">
                          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor excepturi architecto iste maxime velit saepe! Incidunt nisi, dignissimos neque id iusto culpa, saepe!</span>
                        </div>

                        <div class="pl-3 pt-1 row mx-auto px-auto">
                            <div class="py-1 px-2">
                                <i class="icon fa fa-bath" aria-hidden="true"></i>
                                <div class="value">bath</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-cutlery" aria-hidden="true"></i>
                                <div class="value">Breakfast</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-television" aria-hidden="true"></i>
                                <div class="value">TV</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-wifi" aria-hidden="true"></i>
                                <div class="value">Wifi</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                <div class="value">Aircon</div>
                              </div>

                        </div>

                        <div class="btn booking-btn">Book Now</div>
                      </div>
                    </div>
                    <div class="general">
                     <div class="img-wrap">
                      <img src="frontend/img/blog-img/explore6.png" class="img-fluid">
                     </div>
                    </div>
                </div>
                <div class="card-d" data-aos="zoom-out-up" data-aos-duration="1100">
                    <div class="additional">
                      <div class="user-card-d">
                        <div class="level center">
                          20% Discount
                        </div>
                        <div class="points bg-danger center">
                          Booked
                        </div>
                        <h5 class="center">Family Room</h5>
                      </div>
                      <div class="more-info">

                        <div class="py-4">
                          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor excepturi architecto iste maxime velit saepe! Incidunt nisi, dignissimos neque id iusto culpa, saepe!</span>
                        </div>

                        <div class="pl-3 pt-1 row mx-auto px-auto">
                            <div class="py-1 px-2">
                                <i class="icon fa fa-bath" aria-hidden="true"></i>
                                <div class="value">bath</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-cutlery" aria-hidden="true"></i>
                                <div class="value">Breakfast</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-television" aria-hidden="true"></i>
                                <div class="value">TV</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-wifi" aria-hidden="true"></i>
                                <div class="value">Wifi</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                <div class="value">Aircon</div>
                              </div>

                        </div>

                        <div class="btn booking-btn">Sorry. Can't Available</div>
                      </div>
                    </div>
                    <div class="general">
                     <div class="img-wrap">
                      <img src="frontend/img/blog-img/rooms-3.jpg" class="img-fluid">
                     </div>
                    </div>
                </div>
                <div class="card-d" data-aos="flip-right" data-aos-duration="1100">
                    <div class="additional">
                      <div class="user-card-d">
                        <div class="level center">
                          12% Discount
                        </div>
                        <div class="points center">
                          Available
                        </div>
                        <h5 class="center">Double Room</h5>
                      </div>
                      <div class="more-info">

                        <div class="py-4">
                          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor excepturi architecto iste maxime velit saepe! Incidunt nisi, dignissimos neque id iusto culpa, saepe!</span>
                        </div>

                        <div class="pl-3 pt-1 row mx-auto px-auto">
                            <div class="py-1 px-2">
                                <i class="icon fa fa-bath" aria-hidden="true"></i>
                                <div class="value">bath</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-cutlery" aria-hidden="true"></i>
                                <div class="value">Breakfast</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-television" aria-hidden="true"></i>
                                <div class="value">TV</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="icon fa fa-wifi" aria-hidden="true"></i>
                                <div class="value">Wifi</div>
                              </div>

                              <div class="py-1 px-2">
                                <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                <div class="value">Aircon</div>
                              </div>

                        </div>

                        <div class="btn booking-btn">Book Now</div>
                      </div>
                    </div>
                    <div class="general">
                     <div class="img-wrap">
                      <img src="frontend/img/blog-img/explore1.png" class="img-fluid">
                     </div>
                    </div>
                  </div>



            </div>
           </div>

          </div>
    </div>
</section>

<div style="background:#f2f4fb" data-aos="flip-left" data-aos-duration="1100">
  <div class="button-group">
    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-premium-tab" data-toggle="pill" href="#pills-premium" role="tab" aria-controls="pills-premium" aria-selected="true"><b>Premium</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-normal-tab" data-toggle="pill" href="#pills-normal" role="tab" aria-controls="pills-normal" aria-selected="false"><b>Normal</b></a>
        </li>

      </ul>
  </div>
<!-- ##### Rooms Area Start ##### -->
<div class="tab-content" id="pills-tabContent" >
    <section class="rooms-area section-padding-0-100 tab-pane fade" id="pills-normal" role="tabpanel" aria-labelledby="pills-normal-tab">
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

            <div class="row">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/1.jpg);"></div>
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
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/8.jpg);"></div>
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
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/9.jpg);"></div>
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

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/15.jpg);"></div>
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
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/16.jpg);"></div>
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
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/17.jpg);"></div>
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

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/18.jpg);"></div>
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
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/19.jpg);"></div>
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
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(frontend/img/bg-img/20.jpg);"></div>
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

                <div class="col-12">
                    <!-- Pagination -->
                    <div class="pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="tab-pane fade show active mb-5" id="pills-premium" role="tabpanel" aria-labelledby="pills-premium-tab">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Hotel Master's Rooms</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5 m-auto">
                <div class="col-md-6 col-lg-4 pb-3">

                    <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                    <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                    <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/explore1.png);"></div>
                    {{-- <div class="card-custom-avatar">
                        <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                    </div> --}}
                    <div class="card-body" style="overflow-y:hidden">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                        <p class="card-text">Some example text to show the scrollbar.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                        antiopam. At altera facilisis mel.</p>
                    </div>
                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                        <a href="#" class="btn btn-primary">Option</a>
                        <a href="#" class="btn btn-outline-primary">Other option</a>
                    </div>
                    </div>

                </div>
            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/explore2.png);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/rooms-4.jpg);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/explore3.png);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/explore4.png);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/explore5.png);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/explore6.png);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/rooms-1.jpg);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y: hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-4 pb-3">

                <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                <div class="card-custom-img" style="background-image: url(frontend/img/blog-img/rooms-3.jpg);"></div>
                {{-- <div class="card-custom-avatar">
                    <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
                </div> --}}
                <div class="card-body" style="overflow-y:hidden">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
                    <p class="card-text">Some example text to show the scrollbar.</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
                    antiopam. At altera facilisis mel.</p>
                </div>
                <div class="card-footer" style="background: inherit; border-color: inherit;">
                    <a href="#" class="btn btn-primary">Option</a>
                    <a href="#" class="btn btn-outline-primary">Other option</a>
                </div>
                </div>

            </div>

            </div>
        </div>

    </section>
</div>
</div>

<!-- ##### Rooms Area End ##### -->


@include('frontend.layouts.footer')

@pushOnce('css')
<style>
.general img{

  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  min-height: 100%;
  min-width: 100%;
  transform: translate(-50%, -50%);

}
.center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}

.card-d {
    width: 450px;
    height: 250px;
    background-color: #fff;
    background: linear-gradient(#f8f8f8, #fff);
    box-shadow: 0 8px 16px -8px rgba(0, 0, 0, 0.4);
    border-radius: 6px;
    overflow: hidden;
    position: relative;
    margin: 1.5rem;
}

.card-d h1 {
    text-align: center;
}

.card-d .additional {
    position: absolute;
    width: 150px;
    height: 100%;
    background: white;
    transition: width 0.4s;
    overflow: hidden;
    z-index: 2;
}

.card-d.green .additional {
    background: linear-gradient(#92bca6, #a2ccb6);
}

.card-d:hover .additional {
    width: 100%;
    border-radius: 0 5px 5px 0;
    transition: all 2s;

}

.card-d .additional .user-card-d {
    width: 150px;
    height: 100%;
    position: relative;
    float: left;
    background: #f1f3fa;
}

.card-d .additional .user-card-d::after {
    content: "";
    display: block;
    position: absolute;
    top: 10%;
    right: -2px;
    height: 80%;
    border-left: 2px solid rgba(0, 0, 0, 0.025);
}

.card-d .additional .user-card-d .level{
    text-transform: uppercase;
    font-size: 0.75em;
}
.card-d .additional .user-card-d .points {
    letter-spacing: 2px;
    font-size: 0.8em;
}

.card-d .additional .user-card-d .level,
.card-d .additional .user-card-d .points {
    top: 15%;
    color:white;
    /* text-transform: uppercase; */

    font-weight: bold;
    background: #cb8670;
    padding: 0.2rem 0.75rem;
    border-radius: 100px;
    white-space: nowrap;
}

.card-d .additional .user-card-d .points {
    top: 85%;
}

.card-d .additional .user-card-d svg {
    top: 50%;
}

.card-d .additional .more-info {
    width: 300px;
    float: left;
    color: black;
    position: absolute;
    background: #f1f3fa;

    left: 150px;
    height: 100%;
}

.card-d .additional .more-info h1 {

    margin-bottom: 0;
}

.card-d.green .additional .more-info h1 {
    color: #224c36;
}

.card-d .additional .coords {
    margin: 0 1rem;
    font-size: 1rem;
}

.card-d.green .additional .coords {
    color: #325c46;
}

.card-d .additional .coords span+span {
    float: right;
}

.card-d .additional .stats {
    font-size: 2rem;
    display: flex;
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    right: 1rem;
    top: auto;

}

.card-d.green .additional .stats {
    color: #325c46;
}

.card-d .additional .stats>div {
    flex: 1;
    text-align: center;
}

.card-d .additional .stats i {
    display: block;
}

.card-d .additional .stats div.title {
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: uppercase;
}

.card-d .additional .stats div.value {
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5rem;
}

.card-d .additional .stats div.value.infinity {
    font-size: 2.5rem;
}

.card-d .general {
    width: 300px;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1;
    box-sizing: border-box;
    /* padding: 1rem; */

    padding-top: 0;
}

.img-wrap {
    width: 300px;
    top: 0;
    right: 0;
    height: 100%;
  position: relative;
  display: inline-block;
  overflow: hidden;
  margin: 0;
}

.card-d .general .more {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    font-size: 0.9em;
}

.icon{
    font-size: 1.5em;
}
.booking-btn{
    margin-top: 10px;
    background: #cb8670;
    color: white;
}

.booking-btn:hover{
    background: white;
    border: 3px solid #cb8670;
    color: black;
}
</style>
@endPushOnce
@endsection
