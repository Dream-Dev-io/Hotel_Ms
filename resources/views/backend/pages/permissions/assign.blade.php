@extends('backend.layouts.app')

@section('content')
<div class="my-5 mx-4 card py-3 pl-4 pr-3 ">
<a href="{{ route('admin.permissions.index') }}" class="btn col-md-2  py-2 my-3 btn-primary"> <i class="fa fa-plus mr-1 "></i>All Permissions</a>

    <h3 class="text-primary text-center">ASSINGING ROLES</h3>
    <div class="row mt-4 mx-4  px-4 pt-4 pb-2 neu-container ">
        @if($permission->roles)

            @foreach($permission->roles as $permission_role)


            <form method="POST" action="{{ route('admin.permissions.roles.remove',[$permission->id,$permission_role->id]) }}" >
                @csrf
                @method('DELETE')

               <button type="submit" class="_delete_data_permission   px-3 py-2 mr-3 mb-3 btn btn-outline-danger neu-container-1" title="remove" >
                    <i class="mdi mdi-delete mr-1 "></i> {{ $permission_role->name }}
                </button>
                </form>


            @endforeach
        @endif
    </div>

    <div class="mt-3">
        <form class="col-md-8  p-5 mx-auto" method="POST" action="{{ route('admin.permissions.roles', $permission->id) }}">
        @csrf
        <div class="form-group">
      <label for="permission">Roles</label>
      <select class="form-control text-white"  name="role" >
        @foreach($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
        @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-primary  float-right">Assign Role To {{ $permission->name }}</button>
  </form>
    </div>
    </div>

@endsection
@pushOnce('js')
<script>


</script>
@endPushOnce


@pushOnce('css')
<style>
.neu-container{
    border-radius: 30px;
background: #191c24;
box-shadow: inset 11px 11px 14px #15171e,
            inset -11px -11px 14px #1e212a;
}

.neu-container1{
    border-radius: 30px;
background: linear-gradient(145deg, #171920, #1b1e27);
box-shadow:  11px 11px 14px #15171e,
             -11px -11px 14px #1e212a;
}
</style>
@endPushOnce
