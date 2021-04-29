@extends('layout')

@section('content')

<br><br><br><br>
<h1> Updated Students Data Here </h1>
<br>
<div class="col-md-6">
<form action="/edit" method="POST" >
    @csrf
<div class="mb-3">
    <label  class="form-label"><b>Name</b></label>
    <input type="hidden" name="id" value="{{$data->id}}" >
    <input type="text" name="name" class="form-control" value="{{$data->name}}"  id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" name="email" class="form-control" value="{{$data->email}}"  id="exampleInputEmail1" aria-describedby="emailHelp">
    
  <div class="mb-3">
    <label  class="form-label"><b>Address</b></label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}"  id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label  class="form-label"><b>Class</b></label>
    <input type="text" name="class" class="form-control" value="{{$data->class}}"  id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<br><br>

@stop