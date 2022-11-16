@extends('frontend.layouts.app')
@section('title','Hotel & Resort')
@section('content')

 <!-- Preloader -->
 @include('frontend.layouts.preloader')


@include('frontend.layouts.nav')


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(frontend/img/bg-img/bg-5.jpg);">
        <div class="bradcumbContent">
            <h2>Services</h2>
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

<section class="services-intro">
    <div class="container">
        <div class="row align-items-center">
            <!-- Service Intro Text -->
            <div class="col-12 col-lg-6">
                <div class="service-intro-text mb-100">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>Amazing Services</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                    <a href="#" class="btn palatin-btn mt-50">Read More</a>
                </div>
            </div>

            <!-- Services Features -->
            <div class="col-12 col-lg-6">
                <div class="row mb-100">

                    <!-- Single Cool Facts -->
                    <div class="col-12 col-sm-4">
                        <div class="single-cool-fact">
                            <div class="scf-text">
                                <i class="icon-cocktail-1"></i>
                                <p>Pool Beachbar</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Cool Facts -->
                    <div class="col-12 col-sm-4">
                        <div class="single-cool-fact">
                            <div class="scf-text">
                                <i class="icon-swimming-pool"></i>
                                <p>Infinity Pool</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Cool Facts -->
                    <div class="col-12 col-sm-4">
                        <div class="single-cool-fact">
                            <div class="scf-text">
                                <i class="icon-beach"></i>
                                <p>Sunbeds</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Service Intro Area End ##### -->

<!-- ##### Core Features Start ##### -->
<section class="core-features-area">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Single Core Feature Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-core-feature mb-100">
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/12.jpg);"></div>
                    <!-- Content -->
                    <div class="feature-content">
                        <i class="icon-sunset"></i>
                        <h3>Wellness</h3>
                        <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p>
                    </div>
                </div>
            </div>

            <!-- Single Core Feature Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-core-feature mb-100">
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/13.jpg);"></div>
                    <!-- Content -->
                    <div class="feature-content">
                        <i class="icon-sunset"></i>
                        <h3>Spa Center</h3>
                        <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p>
                    </div>
                </div>
            </div>

            <!-- Single Core Feature Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-core-feature mb-100">
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/14.jpg);"></div>
                    <!-- Content -->
                    <div class="feature-content">
                        <i class="icon-island"></i>
                        <h3>Lounge Bar</h3>
                        <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Core Features End ##### -->

<!-- ##### Services Area Start ##### -->
<section class="services-area">
    <div class="container">
        <div class="row">

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <i class="icon-trekking"></i>
                    <h4>Bike Rentals</h4>
                    <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="200ms">
                    <i class="icon-boat"></i>
                    <h4>Boat Trips</h4>
                    <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <i class="icon-restaurant"></i>
                    <h4>Restaurants</h4>
                    <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <i class="icon-beach"></i>
                    <h4>Massages</h4>
                    <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-boarding-pass"></i>
                    <h4>Event Tikets</h4>
                    <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="600ms">
                    <i class="icon-sign"></i>
                    <h4>Hiking</h4>
                    <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                </div>
            </div>

        </div>
    </div>
</section>
@include('frontend.layouts.footer')

@pushOnce('css')
<script>
    /* CSS reset */
*,
*::after,
*::before {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}

html { font-size: 62.5%; }

body {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
  position: relative;
}

/* Typography =======================*/

/* Headings */

/* Main heading for card's front cover */
.card-front__heading {
  font-size: 1.5rem;
  margin-top: .25rem;
}

/* Main heading for inside page */
.inside-page__heading {
  padding-bottom: 1rem;
  width: 100%;
}

/* Mixed */

/* For both inside page's main heading and 'view me' text on card front cover */
.inside-page__heading,
.card-front__text-view {
  font-size: 1.3rem;
  font-weight: 800;
  margin-top: .2rem;
}

.inside-page__heading--city,
.card-front__text-view--city { color: #ff62b2; }

.inside-page__heading--ski,
.card-front__text-view--ski { color: #2aaac1; }

.inside-page__heading--beach,
.card-front__text-view--beach { color: #fa7f67; }

.inside-page__heading--camping,
.card-front__text-view--camping { color: #00b97c; }

/* Front cover */

.card-front__tp { color: #fafbfa; }

/* For pricing text on card front cover */
.card-front__text-price {
  font-size: 1.2rem;
  margin-top: -.2rem;
}

/* Back cover */

/* For inside page's body text */
.inside-page__text {
  color: #333;
}

/* Icons ===========================================*/

.card-front__icon {
  fill: #fafbfa;
  font-size: 3vw;
  height: 3.25rem;
  margin-top: -.5rem;
  width: 3.25rem;
}

/* Buttons =================================================*/

.inside-page__btn {
  background-color: transparent;
  border: 3px solid;
  border-radius: .5rem;
  font-size: 1.2rem;
  font-weight: 600;
  margin-top: 2rem;
  overflow: hidden;
  padding: .7rem .75rem;
  position: relative;
  text-decoration: none;
  transition: all .3s ease;
  width: 90%;
  z-index: 10;
}

.inside-page__btn::before {
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: scaleY(0);
  transition: all .3s ease;
  width: 100%;
  z-index: -1;
}

.inside-page__btn--city {
  border-color: #ff40a1;
  color: #ff40a1;
}

.inside-page__btn--city::before {
  background-color: #ff40a1;
}

.inside-page__btn--ski {
  border-color: #279eb2;
  color: #279eb2;
}

.inside-page__btn--ski::before {
  background-color: #279eb2;
}

.inside-page__btn--beach {
  border-color: #fa7f67;
  color: #fa7f67;
}

.inside-page__btn--beach::before {
  background-color: #fa7f67;
}

.inside-page__btn--camping {
  border-color: #00b97d;
  color: #00b97d;
}

.inside-page__btn--camping::before {
  background-color: #00b97d;
}

.inside-page__btn:hover {
  color: #fafbfa;
}

.inside-page__btn:hover::before {
  transform: scaleY(1);
}

/* Layout Structure=========================================*/

.main {
  background: linear-gradient(
    to bottom right,
    #eee8dd,
    #e3d9c6
  );
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100vh;
  width: 100%;
}

/* Container to hold all cards in one place */
.card-area {
  align-items: center;
  display: flex;
  flex-wrap: nowrap;
  height: 100%;
  justify-content: space-evenly;
  padding: 1rem;
}

/* Card ============================================*/

/* Area to hold an individual card */
.card-section {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  width: 100%;
}

/* A container to hold the flip card and the inside page */
.card {
  background-color: rgba(0,0,0, .05);
  box-shadow: -.1rem 1.7rem 6.6rem -3.2rem rgba(0,0,0,0.5);
  height: 15rem;
  position: relative;
  transition: all 1s ease;
  width: 15rem;
}

/* Flip card - covering both the front and inside front page */

/* An outer container to hold the flip card. This excludes the inside page */
.flip-card {
  height: 15rem;
  perspective: 100rem;
  position: absolute;
  right: 0;
  transition: all 1s ease;
  visibility: hidden;
  width: 15rem;
  z-index: 100;
}

/* The outer container's visibility is set to hidden. This is to make everything within the container NOT set to hidden  */
/* This is done so content in the inside page can be selected */
.flip-card > * {
  visibility: visible;
}

/* An inner container to hold the flip card. This excludes the inside page */
.flip-card__container {
  height: 100%;
  position: absolute;
  right: 0;
  transform-origin: left;
  transform-style: preserve-3d;
  transition: all 1s ease;
  width: 100%;
}

.card-front,
.card-back {
  backface-visibility: hidden;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

/* Styling for the front side of the flip card */

/* container for the front side */
.card-front {
  background-color: #fafbfa;
  height: 15rem;
  width: 15rem;
}

/* Front side's top section */
.card-front__tp {
  align-items: center;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
  display: flex;
  flex-direction: column;
  height: 12rem;
  justify-content: center;
  padding: .75rem;
}

.card-front__tp--city {
  background: linear-gradient(
    to bottom,
    #ff73b9,
    #ff40a1
  );
}

.card-front__tp--ski {
  background: linear-gradient(
    to bottom,
    #47c2d7,
    #279eb2
  );
}

.card-front__tp--beach {
  background: linear-gradient(
    to bottom,
    #fb9b88,
    #f86647
  );
}

.card-front__tp--camping {
  background: linear-gradient(
    to bottom,
    #00db93,
    #00b97d
  );
}

/* Front card's bottom section */
.card-front__bt {
  align-items: center;
  display: flex;
  justify-content: center;
}

/* Styling for the back side of the flip card */

.card-back {
  background-color: #fafbfa;
  transform: rotateY(180deg);
}

/* Specifically targeting the <video> element */
.video__container {
  clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
  height: auto;
  min-height: 100%;
  object-fit: cover;
  width: 100%;
}

/* Inside page */

.inside-page {
  background-color: #fafbfa;
  box-shadow: inset 20rem 0px 5rem -2.5rem rgba(0,0,0,0.25);
  height: 100%;
  padding: 1rem;
  position: absolute;
  right: 0;
  transition: all 1s ease;
  width: 15rem;
  z-index: 1;
}

.inside-page__container {
  align-items: center;
  display: flex;
  flex-direction: column;
  height: 100%;
  text-align: center;
  width: 100%;
}

/* Functionality ====================================*/

/* This is to keep the card centered (within its container) when opened */
.card:hover {
  box-shadow:
  -.1rem 1.7rem 6.6rem -3.2rem rgba(0,0,0,0.75);
  width: 30rem;
}

/* When the card is hovered, the flip card container will rotate */
.card:hover .flip-card__container {
  transform: rotateY(-180deg);
}

/* When the card is hovered, the shadow on the inside page will shrink to the left */
.card:hover .inside-page {
  box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0,0,0,0.1);
}

/* Footer ====================================*/

.footer {
  background-color: #333;
   margin-top: 3rem;
  padding: 1rem 0;
  width: 100%;
}

.footer-text {
  color: #fff;
  font-size: 1.2rem;
  text-align: center;
}
</script>
@endPushOnce
@endsection
