@extends('backend.layouts.app')

@section('content')

<div class="card p-3" style="overflow-x:auto;">
    <table class="table data-table  text-white" >
        <thead>
            <tr>
                <th>No</th>
                <th>Room</th>
                <th>Type</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
                <th>Living</th>

                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


@endsection

@pushOnce('js')
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /*------------------------------------------
      --------------------------------------------
      Render DataTable
      --------------------------------------------
      --------------------------------------------*/
      let room_table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          retrieve: true,
          ajax: {
            url: "{{ route('admin.rooms.index') }}",
        },
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'room_no', name: 'room_no', searchable: true},
              {data: 'type', name: 'type',},
              {data: 'description', name: 'description',},
              {data: 'price', name: 'price',searchable: true},
              {data: 'status', name: 'status',},
              {data: 'is_living', name: 'is_living',},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ],
         columnDefs: [
            {
                targets:3,   // you can swap the order of column
                render: function(data,type,row){
                    console.log(type);
                    return data.length > 20 ?
                        data.substr(0,17) + '....' : data
                }
            },
            {
                target: 6,
                visible: false,
            },
            {
                targets:5,
                render: function(data,type,row){
                    return data == false && row.is_living == false ?
                        '<a class="btn py-1 px-3 btn-rounded btn-outline-danger" style="background:">Booked</a>'
                        : data == false && row.is_living == true ?
                        '<a class="btn py-1 px-3 btn-rounded btn-outline-warning" style="background:; color:;"> Living </a>'
                        : data == true && row.is_living == false ?
                        '<a class="btn py-1 px-3 btn-rounded btn-outline-primary" style="background:; color:;"> Available </a>'
                        : '<a class="btn py-1 px-3 btn-rounded btn-outline-danger" style="background:; color:;"> Wrong Something </a>';
                }
            },
         ]
      });
    });
</script>
@endPushOnce


{{-- columnDefs: [
    {
      targets:3,   // you can swap the order of column
      render: function(data,type,row){
          // console.log(data);
          return data.length > 20 ?
              data.substr(0,17) + '....' : data
      }
    },
    {
      targets:5,
      render: function(data,type,row){
          console.log(data,row.is_living);
         return data == false && row.is_living == false ?
               '<a class="btn py-1 px-3 btn-rounded btn-outline-danger" style="background:">Booked</a>'
               : data == false && row.is_living == true ?
               '<a class="btn py-1 px-3 btn-rounded btn-outline-warning" style="background:; color:;"> Living </a>'
               : data == true && row.is_living == false ?
               '<a class="btn py-1 px-3 btn-rounded btn-outline-primary" style="background:; color:;"> Available </a>'
               : '<a class="btn py-1 px-3 btn-rounded btn-outline-danger" style="background:; color:;"> Wrong Something </a>';
      }
    },
    {
          target: 6,
          visible: false,
      },
    {
      targets:7,   // you can swap the order of column
      render: function(data,type,row){
          let btn = row.status == 0 ?
          `<a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-warning booking py-2 ml-1" ><i class="mdi mdi-account-check mr-2"></i>Check Booking</a>`
          :
          `<a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'"  data-original-title="Delete" class="btn btn-outline-info booking py-2 ml-1" ><i class="mdi mdi-book-open-pprice-variant mr-2 "></i>Booking Now</a>`

          return  data+btn;

      }
    }
    ] --}}
