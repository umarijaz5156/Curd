@extends('layout')

@section('content')
<center class="add">
<br><br>
<h1> Add Students Data Here </h1>
<br>
<div class="col-md-6">
<form action="add" method="POST" >
    @csrf
<div class="mb-3">
    <label  class="form-label"><b>Name</b></label>
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  <div class="mb-3">
    <label  class="form-label"><b>Address</b></label>
    <input type="text" name="address" placeholder="Enter Your Address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label  class="form-label"><b>Class</b></label>
    <input type="text" name="class" class="form-control" placeholder="Enter Your Class" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</center>
<br><br>
<style>
  .add{
    background-color: oldlace;
  }
</style>

@stop