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
<a href="{{ route('admin.roles.index') }}" class="neu btn text-dark ml-4 mb-4 btn-outline-primary"> <i class="fa fa-plus mr-1 "></i>All Roles</a>

<div style="background:#e6e7ee" class="card neu py-5 mt-2  mx-4">
    <h3 class="text-primary mb-4 text-center">UPDATING ROLE</h3>
<form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.roles.update', $role) }}">
        @csrf
        @method('PUT')
        @if($errors->any())

            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Woop! </strong> {{ $error }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            @endforeach

        @endif
        <div class="form-group">
      <label for="exampleInputEmail1">Role</label>
      <input type="text" class="form-control"  name="role" placeholder="Enter Role"
      value="{{ $role->name }}">
    </div>
    <button type="submit" class="btn btn-primary neu float-right">Update</button>
  </form>
</div>
<div class="my-5 mx-4 neu py-3 pl-4 pr-3 text-center">
    <h3 class="text-primary">Role Permission</h3>
    <div class="row mt-4 mx-4 neu-down px-3 pt-4 pb-2 ">
        @if($role->permissions)
            @foreach($role->permissions as $role_permission)
            <form  method="POST" action="{{ route('admin.roles.permissions.revoke',[$role->id,$role_permission->id]) }}" >
                @csrf
                @method('DELETE')
               <button type="submit" class="_delete_data_permission btn text-danger btn-outline-primary  btn-neu mr-3 mb-3" title="remove">
                    <b><i class="fa fa-trash-o mr-1  "></i> {{ $role_permission->name }}</b>
                </button>
                </form>
            @endforeach
        @endif
    </div>

    <div class="mt-5">
        <form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.roles.permissions', $role->id) }}">
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
