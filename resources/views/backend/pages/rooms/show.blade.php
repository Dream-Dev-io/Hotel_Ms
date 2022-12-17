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
                                <div class="col-md-12 card py-5 pl-4" style="border-left-color:#474644; overflow-y: auto;overflow-x:hidden;height: 50%" id="facilities">
                                    <h4 class="mb-4">Facilities</h4>
                                    <div class="row mx-1 py-auto" id="facility_refresh">

                                            @foreach ($room->facilities->sortBy('name') as $facility )
                                            <div class="btn btn-outline-secondary mx-2 px-2 mb-3 py-2">
                                                {{ $facility->name }}
                                                <i class="{{ $facility->icon }} ml-2"></i>

                                            </div>
                                        @endforeach

                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-success py-2 " id="facility-btn">Add More</a>
                                  </div>
                                  <div class="col-md-12 card py-5 pl-4" style="height: 50%;border-left-color:#474644;overflow-y: auto;overflow-x:hidden;" id="services">
                                    <h4 class="mb-4">Services</h4>
                                    <div class="row mx-1"id="service_refresh">

                                            @foreach ($room->services as $service )
                                            <div class="btn btn-outline-secondary mx-2 px-2 mb-3 py-2">
                                                {{ $service->name }}
                                                <i class="{{ $service->icon }} ml-2"></i>

                                            </div>
                                        @endforeach

                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-success py-2 " id="service-btn">Add More</a>
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

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="facilityForm" name="facilityForm" class="text-white form-horizontal">
                    @csrf

                    <input type="hidden" name="facility_id" id="facility_id">

                    <div class="form-group">
                        <label for="type" class="col-sm-4 control-label">Facility Name</label>
                        <div class="col-sm-12">
                            <select class="form-control text-white" id="name" name="f_name">

                                @foreach ($facilities->sortBy('name') as $facility )
                                <option value="{{ $facility->id }}">

                                                {{ $facility->name }}
                                                <i class="{{ $facility->icon }} ml-2"></i>


                                </option>
                                        @endforeach

                              </select>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<h1>hello</h1>



<div class="modal fade" id="ajaxModel1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="serviceForm" name="serviceForm" class="text-white form-horizontal">
                    @csrf

                    <input type="hidden" name="service_id" id="service_id">

                    <div class="form-group">
                        <label for="type" class="col-sm-4 control-label">Service Name</label>
                        <div class="col-sm-12">
                            <select class="form-control text-white" id="name" name="s_name">

                                @foreach ($services->sortBy('name') as $service )
                                <option value="{{ $service->id }}">

                                                {{ $service->name }}
                                                <i class="{{ $service->icon }} ml-2"></i>


                                </option>
                                        @endforeach

                              </select>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn1" value="create">Save changes
                     </button>
                    </div>
                </form>
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

    .btn-outline-secondary{
        border-color: #6c7293;
        color: #6c7293
    }
    /* width */
::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

#facilities,#services{
    position: relative;
}

#facility-btn,#service-btn{
    position: absolute;
     top: ;: 10px;
     right: 10px;
}
</style>
@endPushOnce


@pushOnce('js')
<script>






    $(function () {

      /*------------------------------------------
       --------------------------------------------
       Pass Header Token
       --------------------------------------------
       --------------------------------------------*/
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });

      $('#facility-btn').click(function () {
        $('#saveBtn').val("add-facility");
        $('#facility_id').val('');
        $('#facilityForm').trigger("reset");
        $('#modelHeading').html("Add New facility");
        $('#ajaxModel').modal('show');
    });

    $('#service-btn').click(function () {
        $('#saveBtn1').val("add-service");
        $('#service_id').val('');
        $('#serviceForm').trigger("reset");
        $('#modelHeading').html("Add New Service");
        $('#ajaxModel1').modal('show');
    });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save Changes...');

        $.ajax({
          data: $('#facilityForm').serialize(),
          url:"{{  Request::url() }}" +'/facility/add',
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#facilityForm').trigger("reset");
              $('#ajaxModel').modal('hide');
            //   room_table.draw();
            $("#facility_refresh").load(location.href + " #facility_refresh");
            // alert('{{ $room->id }}');

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

    $('#saveBtn1').click(function (e) {
        e.preventDefault();
        $(this).html('Save Changes...');

        $.ajax({
          data: $('#serviceForm').serialize(),
          url:"{{  Request::url() }}" +'/service/add',
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#serviceForm').trigger("reset");
              $('#ajaxModel1').modal('hide');
            //   room_table.draw();
            $("#service_refresh").load(location.href + " #service_refresh");
            // alert('{{ $room->id }}');

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    });
</script>
@endPushOnce
