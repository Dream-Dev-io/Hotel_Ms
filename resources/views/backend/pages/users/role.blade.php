@extends('admin.layouts.app')
@pushOnce('css')
<style>
.neu{
    border-radius: 8px;
/* background: #e6e7ee; */
box-shadow:  6px 6px 10px #bababa,
             -6px -6px 10px #ffffff;
}
.neu-down{
    border-radius: 13px;
background: #e6e7ee;
box-shadow: inset 5px 5px 10px #8d8d8d,
            inset -5px -5px 10px #ffffff;
}
.btn-neu{
    border-radius: 10px;
/* background: linear-gradient(145deg, #cacaca, #f0f0f0); */
box-shadow:  6px 6px 10px #bababa,
             -6px -6px 10px #ffffff;
}

.card{
    background: #e6e7ee;

}

@endPushOnce




@section('breadcrumb')
<x-breadcrumb>
    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
<li><a href="#" class="active">Update Role</a></li>
</x-breadcrumb>
@endsection


@section('content')
<a href="{{ route('admin.users.index') }}" class="neu btn text-dark ml-4 mb-4 btn-outline-primary"> <i class="fa fa-plus mr-1 "></i>All Users</a>

<div class=" mt-4 mx-4 neu px-3  py-3 card ">
      <div class="mb-2"><b class="text-danger mr-3">User Name :</b> {{ $user->name }}</div>
      <div ><b class="text-danger mr-3">User Email  :</b> {{ $user->email }}</div>
</div>


<div class="my-5 mx-4 neu py-3 pl-4 pr-3 text-center">
    <h3 class="text-primary">ASSINGING ROLES</h3>
    <div class="row mt-4 mx-4 neu-down px-3 pt-4 pb-2 ">
        @if($user->roles)
            @foreach($user->roles as $user_role)
            <form method="POST" action="{{ route('admin.users.roles.remove',[$user->id,$user_role->id]) }}" >
                @csrf
                @method('DELETE')
               <button type="submit" class="_delete_data_permission btn text-danger btn-outline-primary  btn-neu mr-3 mb-3" title="remove">
                    <b><i class="fa fa-trash-o mr-1  "></i> {{ $user_role->name }}</b>
                </button>
                </form>
            @endforeach
        @endif
    </div>

    <div class="mt-5">
        <form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.users.roles', $user->id) }}">
        @csrf
        <div class="form-group text-dark">
      <label for="permission">Roles</label>
      <select class="form-control neu-down"  name="role" >
        @foreach($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
        @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-primary neu float-right">Assign Role To User</button>
  </form>
    </div>
    </div>

<div class="my-5 mx-4 neu py-3 pl-4 pr-3 text-center">
    <h3 class="text-primary"> Permissions</h3>
    <div class="row mt-4 mx-4 neu-down px-3 pt-4 pb-2 ">
        @if($user->permissions)
            @foreach($user->permissions as $user_permission)
            <form  method="POST" action="{{ route('admin.users.permissions.revoke',[$user->id,$user_permission->id]) }}" >
                @csrf
                @method('DELETE')
               <button type="submit" class="_delete_data_permission btn text-danger btn-outline-primary  btn-neu mr-3 mb-3" title="remove">
                    <b><i class="fa fa-trash-o mr-1  "></i> {{ $user_permission->name }}</b>
                </button>
                </form>
            @endforeach
        @endif
    </div>

    <div class="mt-5">
        <form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
        @csrf
        <div class="form-group text-dark">
      <label for="permission">Permission</label>
      <select class="form-control neu-down"  name="permission" >
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
