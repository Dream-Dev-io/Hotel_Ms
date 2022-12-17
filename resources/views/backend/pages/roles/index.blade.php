@extends('backend.layouts.app')

@section('content')
<div>
    <x-bread-crumb>
        <x-slot name="title">
            Roles
        </x-slot>
        <li class="breadcrumb-item"><a href="#">
            Roles
        </a></li>
            <li class="breadcrumb-item active" aria-current="page">View All</li>
    </x-bread-crumb>

    <div class="container card py-3">
        <h1 class="text-primary text-center mx-auto " style="font-family: 'Source Serif Pro', serif;">Roles</h1>

        <a class="btn col-md-2 offset-md-1 py-2 my-3 btn-primary btn-icon-text" href="javascript:void(0)" id="createNewRole"><i class="mdi mdi-plus-one btn-icon-prepend mr-1 "></i>Create New</a>
        <div class="mx-auto  col-md-10 p-3 card border" style="overflow-x:auto;" >
            <table class="table data-table  text-white">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        {{-- <th>Details</th> --}}
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- create form modal --}}
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="roleForm" name="roleForm" class="form-horizontal">
                    @csrf

                    <input type="hidden" name="role_id" id="role_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role Name" value="" maxlength="50" required="">
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
{{-- create form modal --}}

@endsection

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

      /*------------------------------------------
      --------------------------------------------
      Render DataTable
      --------------------------------------------
      --------------------------------------------*/
      let role_table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.roles.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name',},
            //   {data: 'detail', name: 'detail'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      $('#assign').html("Create New role");

      /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
    $('#createNewRole').click(function () {
        $('#saveBtn').val("create-role");
        $('#role_id').val('');
        $('#roleForm').trigger("reset");
        $('#modelHeading').html("Create New role");
        $('#ajaxModel').modal('show');
    });

    /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.editRole', function () {
      var role_id = $(this).data('id');
      $.get("{{ route('admin.roles.index') }}" +'/' + role_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Role");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#role_id').val(data.id);
          $('#name').val(data.name);
      })
    });

    $('body').on('click', '.assignPermission', function () {
    //   var role_id = $(this).data('id');

        var id = $(this).data('id');;
        var url = "{{ route('admin.roles.showAssign', ':id') }}";
        url = url.replace(':id', id);
        location.href = url;

    });

      /*------------------------------------------
    --------------------------------------------
    Create Role Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save Changes...');

        $.ajax({
          data: $('#roleForm').serialize(),
          url: "{{ route('admin.roles.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#roleForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              role_table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

        /*------------------------------------------
    --------------------------------------------
    Delete Role Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteRole', function () {

     var role_id = $(this).data("id");
    //  confirm("Are You sure want to delete !");
     const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success ml-4 rounded',
    cancelButton: 'btn btn-danger rounded'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to retrieve this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {

                if (result.value) {
                    $.ajax({
         type: "DELETE",
         url: "{{ route('admin.roles.store') }}"+'/'+role_id,
         success: function (data) {
            role_table.draw();
         },
         error: function (data) {
             console.log('Error:', data);
         }
     });
                    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Role Will Be Delete Right Now.',
      'success'
    )
                }else if(
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ){
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Role is safe :',
      'error'
    )
                }

            });

 });

});



  </script>
@endPushOnce

@pushOnce('css')
<style>
    .dataTables_paginate .paginate_button {
    font-size: 0.8em !important;
    padding: 0 !important;
    background: white !important;
}
.dataTables_wrapper .dataTables_filter input,#name {
    color: white;
}

</style>
@endPushOnce


