@extends('backend.layouts.app')
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

.neu-container2{
    border-radius: 10px;
background: linear-gradient(145deg, #171920, #1b1e27);
box-shadow:  11px 11px 14px #15171e,
             -11px -11px 14px #1e212a;
}
</style>

@endPushOnce







@section('content')
<x-bread-crumb>
    <x-slot name="title">
        Roles
    </x-slot>
    <li class="breadcrumb-item"><a href="#">
        Roles
    </a></li>
        <li class="breadcrumb-item active" aria-current="page">View All</li>
</x-bread-crumb>

<div class="card p-3">

<a href="{{ route('admin.users.index') }}"  class="btn col-md-2 ml-4 py-2 my-3 btn-primary"> <i class="fa fa-plus mr-1 "></i>All Users</a>


    <div class=" my-4 mx-auto col-md-11  px-3 pl-5  py-3 card neu-container2 ">
        <div class="mb-2"><span class="text-danger mr-3">User Name :</span> {{ $user->name }}</div>
        <div ><span class="text-danger mr-3">User Email  :</span> {{ $user->email }}</div>
  </div>



<div class="my-5 mx-auto col-md-11  card py-3 pl-4 pr-3 text-center neu-container1" >
    <h3 class="text-primary">ASSINGING ROLES</h3>
    <div class="row mt-4 mx-4  neu-container px-5 pt-4 pb-2 ">
        @if($user->roles)
            @foreach($user->roles as $user_role)
            <form method="POST" action="{{ route('admin.users.roles.remove',[$user->id,$user_role->id]) }}" >
                @csrf
                @method('DELETE')
               <button type="submit" class="_delete_data_permission neu-container1 btn text-danger btn-outline-primary mr-3 mb-3" title="remove">
                    <i class="mdi mdi-delete mr-1  "></i> {{ $user_role->name }}
                </button>
                </form>
            @endforeach
        @endif
    </div>

    <div class="mt-5">
        <form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.users.roles', $user->id) }}">
        @csrf
        <div class="form-group text-dark">
      <label for="roles" class="text-white">Roles</label>
      <select class="form-control text-white"  name="role" >
        @foreach($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
        @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-primary neu float-right">Assign Role To User</button>
  </form>
    </div>
    </div>

<div class="my-5 neu-container1 col-md-11 mx-auto py-3 pl-4 pr-3 text-center">
    <h3 class="text-primary"> Permissions</h3>

    <div class="row mt-4 mx-4  px-4 pt-4 pb-2 neu-container ">

        @foreach($user->roles as $role)
            @if($role->permissions)
            @foreach($role->permissions as $role_permission)

               <button type="submit" class="_delete_data_role   px-3 py-2 mr-3 mb-3 btn btn-outline-success neu-container-1" title="remove" >
                    <i class="mdi mdi-delete mr-1 "></i> {{ $role_permission->name }}
                </button>



            @endforeach
        @endif
        @endforeach
    </div>
    <div class="row mt-4 mx-4  px-5 pt-4 pb-2 neu-container ">
        @if($user->permissions)
            @foreach($user->permissions as $user_permission)
            <form  method="POST" action="{{ route('admin.users.permissions.revoke',[$user->id,$user_permission->id]) }}" >
                @csrf
                @method('DELETE')
               <button type="submit" class="_delete_data_permission btn text-danger btn-outline-primary neu-container1 mr-3 mb-3" title="remove">
                    <i class="mdi mdi-delete mr-1  "></i> {{ $user_permission->name }}
                </button>
                </form>
            @endforeach
        @endif
    </div>

    <div class="mt-5">
        <form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
        @csrf
        <div class="form-group text-dark">
      <label for="permission" class="text-white">Permission</label>
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
</div>


@endsection
