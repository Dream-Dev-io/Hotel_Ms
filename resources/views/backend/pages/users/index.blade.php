@extends('admin.layouts.app')

@section('breadcrumb')
<x-breadcrumb>
    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
<li><a href="#" class="active">Users</a></li>
</x-breadcrumb>
@endsection

@pushOnce('js')
<script>
  $(document).ready(function(){
        $('._delete_data').click(function(e){
            var data_id = $(this).attr('data-id');
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
                    $(document).find('#delete_from_'+data_id).submit();
                    swalWithBootstrapButtons.fire(
      'Deleted!',
      'User Will Be Delete Right Now.',
      'success'
    )
                }else if(
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ){
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'User is safe :',
      'error'
    )
                }

            })
        });
    });



            toastr.options.progressBar = true;
            toastr.options.showEasing = 'easeOutBounce';
            toastr.options.hideEasing = 'easeInBack';
            toastr.options.closeEasing = 'easeInBack';
            toastr.options.showMethod = 'slideDown';
            toastr.options.hideMethod = 'slideUp';
            toastr.options.closeMethod = 'slideUp';




        $(document).ready(function() {


            @if (Session::has('status'))
                toastr.success('{{ Session::get('status') }}');
            @endif
        });



    </script>
@endPushOnce



@section('content')
@pushOnce('css')
<style>

.neu{
    border-radius: 8px;
/* background: #e6e7ee; */
box-shadow:  6px 6px 10px #bababa,
             -6px -6px 10px #ffffff;
}

.btn-neu{
    border-radius: 10px;
/* background: linear-gradient(145deg, #cacaca, #f0f0f0); */
box-shadow:  6px 6px 10px #bababa,
             -6px -6px 10px #ffffff;
}

@media (min-width: 1199.98px) {
    table{
        width: 700px !important;
    }
}

@media (min-width: 1400.00px) {
    table{
        width: 900px !important;
    }
}
</style>
@endPushOnce
<div class="">
    {{-- @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif --}}
<a href="{{ route('admin.roles.create') }}" class="neu btn text-dark ml-4 mb-4 btn-outline-primary"> <i class="fa fa-plus mr-1 "></i>Create Role</a>


<div class="mx-auto text-center table-responsive-md ">
<table class="table table-md neu mx-auto text-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-flex justify-content-center ">
                <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-success  mr-4 btn-neu">
                    <i class="fa fa-pencil-square-o mr-1"></i> Roles</a>

                    <form id="delete_from_{{$user->id}}" method="POST" action="{{ route('admin.users.destroy',$user->id) }}" >
                @csrf
                @method('DELETE')
                <a href="javascript:void(0);" data-id="{{$user->id}}" class="_delete_data btn btn-danger btn-neu">
                    <i class="fa fa-trash-o mr-1 "></i> Delete
                </a>
                </form>






            </td>

          </tr>
        @endforeach


    </tbody>
  </table>
</div>
</div>
<!-- Button trigger modal -->



@endsection

