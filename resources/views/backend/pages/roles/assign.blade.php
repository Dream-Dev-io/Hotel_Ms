@extends('backend.layouts.app')

@section('content')
<div class="my-5 mx-4 card py-3 pl-4 pr-3 ">
<a href="{{ route('admin.roles.index') }}" class="btn col-md-2  py-2 my-3 btn-primary"> <i class="fa fa-plus mr-1 "></i>All Permissions</a>

    <h3 class="text-primary text-center">ASSINGING ROLES</h3>
    <div class="row mt-4 mx-4  px-4 pt-4 pb-2 neu-container ">
        @if($role->permissions)
            @foreach($role->permissions as $role_permission)

            <form method="POST" action="{{ route('admin.roles.permissions.revoke',[$role->id,$role_permission->id]) }}" >
                @csrf
                @method('DELETE')

               <button type="submit" class="_delete_data_role   px-3 py-2 mr-3 mb-3 btn btn-outline-danger neu-container-1" title="remove" >
                    <i class="mdi mdi-delete mr-1 "></i> {{ $role_permission->name }}
                </button>
                </form>


            @endforeach
        @endif
    </div>

    <div class="mt-5">
        <form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.roles.permissions', $role->id) }}">
        @csrf
        <div class="form-group text-white">
      <label for="permission">Permission</label>
      <select class="form-control text-white"  name="permission" >
        @foreach($permissions as $permission)
            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
        @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-primary neu float-right">Assign Permission To {{ $role->name }}</button>
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
