@extends('frontend.layouts.app')
@section('title','Hotel & Resort')
@section('content')

 <!-- Preloader -->
 @include('frontend.layouts.preloader')


@include('frontend.layouts.nav')

<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(frontend/img/bg-img/bg-3.jpg);">
    <div class="bradcumbContent">
        <h2>Gallery</h2>
    </div>
</section>


<section class="gallery-about clear-fix text-center p-3">
   <div class="content-box-lg">
    <span class=" display-4 mb-0 pb-0">Photos</span>
    <div class="button-group filters-button-group">
        <button class="button is-checked" data-filter="*">All</button>
        <button class="button" data-filter=".room">Rooms</button>
        <button class="button" data-filter=".beach">Beachs</button>
        <button class="button" data-filter=".nature">Nature</button>
      </div>
    <div class="container" id="gallery-wrapper">
      <div class="row gallery-container clear-fix">
         <div class="element-item col-md-3 col-sm-6 transition room" data-category="transition">
            <div class="gallery_img">
                <figure> <a href="frontend/img/bg-img/2.jpg"><img src="{{ asset('frontend/img/bg-img/2.jpg') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar owl</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition beach" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/4.png"><img src="{{ asset('frontend/img/bg-img/4.png') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar landscape</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/5.jpg"><img src="{{ asset('frontend/img/bg-img/5.jpg') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/6.jpg"><img src="{{ asset('frontend/img/bg-img/6.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition beach" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/7.jpg"><img src="{{ asset('frontend/img/bg-img/7.jpg') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar landscape</h3> --}}
        </div>

          <div class="col-md-3 col-sm-6 element-item transition room" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/11.jpg"><img src="{{ asset('frontend/img/bg-img/11.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar owl</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/blog-img/gallery7.jpg"><img src="{{ asset('frontend/img/blog-img/gallery7.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition room" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/bg-3.jpg"><img src="{{ asset('frontend/img/bg-img/bg-3.jpg') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar owl</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition room" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/bg-4.jpg"><img src="{{ asset('frontend/img/bg-img/bg-4.jpg') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar owl</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition beach" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/bg-5.jpg"><img src="{{ asset('frontend/img/bg-img/bg-5.jpg') }}" alt="#"></a></figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar landscape</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition beach" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/blog-img/slider-5.jpg"><img src="{{ asset('frontend/img/blog-img/slider-5.jpg') }}" alt="#"></a></figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar landscape</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition room" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/bg-7.jpg"><img src="{{ asset('frontend/img/bg-img/bg-7.jpg') }}" alt="#"></a> </figure>
             </div>
           {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar owl</h3> --}}
        </div>
        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/19.jpg"><img src="{{ asset('frontend/img/bg-img/19.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>

        <div class="col-md-3 col-sm-6 element-item transition beach" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/testimonials.jpg"><img src="{{ asset('frontend/img/bg-img/testimonials.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>
        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/20.jpg"><img src="{{ asset('frontend/img/bg-img/20.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>
        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
            <div class="gallery_img">
                <figure><a href="frontend/img/blog-img/slider-4.jpg"><img src="{{ asset('frontend/img/blog-img/slider-4.jpg') }}" alt="#"></a></figure>
             </div>
        </div>

        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/bg-8.jpg"><img src="{{ asset('frontend/img/bg-img/bg-8.jpg') }}" alt="#"></a> </figure>
             </div>
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
        </div>
        <div class="col-md-3 col-sm-6 element-item transition nature" data-category="transition">
            {{-- <h3 class="item-title">lorem ipsum dollews smalh tehtar universe</h3> --}}
            <div class="gallery_img">
                <figure><a href="frontend/img/bg-img/bg-6.jpg"><img src="{{ asset('frontend/img/bg-img/bg-6.jpg') }}" alt="#"></a></figure>
             </div>
        </div>

      </div>
    </div>
   </div>
</section>
@include('frontend.layouts.footer')


@endsection
