@extends('backend.layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-md-12 mx-auto px-4">
            <div class="card px-4 py-4">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{ $room->room_no }} Info </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Facilities</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Services</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active  " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-6 card p-3  ">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('frontend/img/blog-img/rooms-3.jpg') }}" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('frontend/img/blog-img/rooms-4.jpg') }}" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('frontend/img/blog-img/rooms-1.jpg') }}" alt="Third slide">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                    <div class="row mt-5">
                                    <p class="col-md-4 text-grey">Room Number :</p>
                                    <p class="col-md-8 text-success">{{ $room->room_no }}</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-4 text-grey">Room Type :</p>
                                    <p class="col-md-8 text-grey">{{ $room->type }}</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-4 text-grey">Description :</p>
                                    <p class="col-md-8 text-grey">{{ $room->description }}</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-4 text-grey">Price :</p>
                                    <p class="col-md-8 text-grey">{{ $room->price }}$</p>
                                </div>

                                <div class="row">
                                    <p class="col-md-4 text-grey">Status :</p>
                                    @if($room->status == false &&  $room->is_living == false)
                                        <a class="btn  px-3  btn-outline-danger" style="background:">Booked</a>
                                    @elseif ( $room->status == false &&  $room->is_living ==true)
                                        <a class="btn  px-3  btn-outline-warning" style="background:">Living</a>
                                    @elseif ( $room->status == true &&  $room->is_living == false)
                                        <a class="btn  px-3  btn-outline-primary" style="background:">Available</a>
                                    @else
                                        <a class="btn  px-3  btn-outline-danger" style="background:">Wrong Something</a>
                                    @endif


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 card py-5 pl-4" style="border-left-color:#474644;height: 50%">
                                    <h4 class="mb-4">Facilities</h4>
                                    <div class="row py-auto">

                                            @foreach ($room->facilities as $facility )
                                            <div class="btn btn-outline-secondary mx-2 px-2 mb-3 py-2">
                                                {{ $facility->name }}
                                                <i class="{{ $facility->icon }} ml-2"></i>

                                            </div>
                                        @endforeach

                                    </div>
                                  </div>
                                  <div class="col-md-12 card py-5 pl-4" style="height: 50%;border-left-color:#474644;">
                                    <h4 class="mb-4">Services</h4>
                                    <div class="row">

                                            @foreach ($room->facilities as $facility )
                                            <div class="btn btn-outline-secondary mx-2 px-2 mb-3 py-2">
                                                {{ $facility->name }}
                                                <i class="{{ $facility->icon }} ml-2"></i>

                                            </div>
                                        @endforeach

                                    </div>
                                  </div>

                            </div>
                        </div>





                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                  </div>


            </div>
        </div>

    </div>
</div>
@endsection
@pushOnce('css')
<style>
    .text-grey{
        color: #6c7293;
    }
    p{
        font-size: 0.96em;
    }
</style>
@endPushOnce


