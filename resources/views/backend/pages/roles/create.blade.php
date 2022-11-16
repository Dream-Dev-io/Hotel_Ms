@extends('admin.layouts.app')
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

.card{
    background: #e6e7ee;

}

@endPushOnce

@section('breadcrumb')
<x-breadcrumb>
    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
<li><a href="#" class="active">Create Role</a></li>
</x-breadcrumb>
@endsection


@section('content')

<a href="{{ route('admin.roles.index') }}" class="neu btn text-dark ml-4 mb-4 btn-outline-primary"> <i class="fa fa-plus mr-1 "></i>All Roles</a>

<div style="background:#e6e7ee" class="card neu py-5 mt-2 mx-2">
    <h3 class="text-primary mb-4 text-center">CREATING A ROLE</h3>
<form class="col-md-8 neu p-5 mx-auto" method="POST" action="{{ route('admin.roles.store') }}">
        @csrf
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
      <label for="exampleInputEmail1">Role Name</label>
      <input type="text" class="form-control"  name="role" placeholder="Enter Role Name">
    </div>
    <button type="submit" class="btn btn-primary neu float-right">Submit</button>
  </form>
</div>
@endsection
